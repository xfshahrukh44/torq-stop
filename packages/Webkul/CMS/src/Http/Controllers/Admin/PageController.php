<?php

namespace Webkul\CMS\Http\Controllers\Admin;

use Webkul\Admin\DataGrids\CMSPageDataGrid;
use Webkul\CMS\Http\Controllers\Controller;
use Webkul\CMS\Repositories\CmsRepository;

class PageController extends Controller
{
    /**
     * To hold the request variables from route file.
     *
     * @var array
     */
    protected $_config;

    /**
     * To hold the CMS repository instance.
     *
     * @var \Webkul\CMS\Repositories\CmsRepository
     */
    protected $cmsRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\CMS\Repositories\CmsRepository  $cmsRepository
     * @return void
     */
    public function __construct(CmsRepository $cmsRepository)
    {
        $this->middleware('admin');

        $this->cmsRepository = $cmsRepository;

        $this->_config = request('_config');
    }

    /**
     * Loads the index page showing the static pages resources.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(CMSPageDataGrid::class)->toJson();
        }

        return view($this->_config['view']);
    }

    /**
     * To create a new CMS page.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view($this->_config['view']);
    }

    /**
     * To store a new CMS page in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $data = $request->all();

//        $this->validate(request(), [
//            'url_key'      => ['required', 'unique:cms_page_translations,url_key', new \Webkul\Core\Contracts\Validations\Slug],
//            'page_title'   => 'required',
//            'channels'     => 'required',
//            'html_content' => 'required',
//        ]);

        try{
            $content = [
                'sliderHeading0' => $request['sliderHeading0'],
                'sliderHeading1' => $request['sliderHeading1'],
                'sliderDes1' => $request['sliderDes1'],
                'sliderHeading2' => $request['sliderHeading2'],
                'sliderDes2' => $request['sliderDes2'],
                'infoHeading0' => $request['infoHeading0'],
                'infoHeading1' => $request['infoHeading1'],
                'infoHeading2' => $request['infoHeading2'],
                'infoHeading3' => $request['infoHeading3'],
                'infoHeading4' => $request['infoHeading4'],
            ];


            $new_page = CmsPage::create([]);
            $pages = new CmsPageTranslation;
        $pages->content = json_encode($content);
            $pages->url_key = $request['url_key'];
            $pages->html_content = $request['html_content'];
            $pages->page_title = $request['page_title'];
//            $pages->channels = $request['channels'];
            $pages->cms_page_id = $new_page->id;
            $pages->locale = 'en';

            $pages->save();

//        $page = $this->cmsRepository->create(request()->all());
            session()->flash('success', trans('admin::app.response.create-success', ['name' => 'page']));

        }catch (\Exception $exception){
            return back()->with('error', $exception->getMessage());
        }

//        $new_page = CmsPage::create([]);
//        $pages = new CmsPageTranslation;
//        $pages->content = json_encode($content);
//        $pages->cms_page_id = $new_page->id;
//        $pages->save();
//        $page = $this->cmsRepository->create(request()->all());
//        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'page']));
        return redirect()->route($this->_config['redirect']);
    }

    /**
     * To edit a previously created CMS page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $page = $this->cmsRepository->findOrFail($id);

        return view($this->_config['view'], compact('page'));
    }

    /**
     * To update the previously created CMS page in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $locale = core()->getRequestedLocaleCode();
//
//        $this->validate(request(), [
//            $locale . '.url_key'      => ['required', new \Webkul\Core\Contracts\Validations\Slug, function ($attribute, $value, $fail) use ($id) {
//                if (! $this->cmsRepository->isUrlKeyUnique($id, $value)) {
//                    $fail(trans('admin::app.response.already-taken', ['name' => 'Page']));
//                }
//            }],
//            $locale . '.page_title'   => 'required',
//            $locale . '.html_content' => 'required',
//            'channels'                => 'required',
//        ]);

        $page = $this->cmsRepository->findOrFail($id);
        $pageTranslation = $page->translate($locale);
        $pageTranslation->content = json_encode([
            'sliderHeading0' => $request->input('sliderHeading0'),
            'sliderHeading1' => $request->input('sliderHeading1'),
            'sliderDes1' => $request->input('sliderDes1'),
            'sliderHeading2' => $request->input('sliderHeading2'),
            'sliderDes2' => $request->input('sliderDes2'),
            'infoHeading0' => $request->input('infoHeading0'),
            'infoHeading1' => $request->input('infoHeading1'),
            'infoHeading2' => $request->input('infoHeading2'),
            'infoHeading3' => $request->input('infoHeading3'),
            'infoHeading4' => $request->input('infoHeading4'),

        ]);

        $this->cmsRepository->update(request()->all(), $id);

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Page']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * To delete the previously create CMS page.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $page = $this->cmsRepository->findOrFail($id);

        if ($page->delete()) {
            return response()->json(['message' => trans('admin::app.cms.pages.delete-success')]);
        }

        return response()->json(['message' => trans('admin::app.cms.pages.delete-failure')], 500);
    }

    /**
     * To mass delete the CMS resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function massDelete()
    {
        $data = request()->all();

        if ($data['indexes']) {
            $pageIDs = explode(',', $data['indexes']);

            $count = 0;

            foreach ($pageIDs as $pageId) {
                $page = $this->cmsRepository->find($pageId);

                if ($page) {
                    $page->delete();

                    $count++;
                }
            }

            if (count($pageIDs) == $count) {
                session()->flash('success', trans('admin::app.datagrid.mass-ops.delete-success', [
                    'resource' => 'CMS Pages',
                ]));
            } else {
                session()->flash('success', trans('admin::app.datagrid.mass-ops.partial-action', [
                    'resource' => 'CMS Pages',
                ]));
            }
        } else {
            session()->flash('warning', trans('admin::app.datagrid.mass-ops.no-resource'));
        }

        return redirect()->route('admin.cms.index');
    }
}
