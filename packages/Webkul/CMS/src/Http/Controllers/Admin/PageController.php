<?php

namespace Webkul\CMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Webkul\Admin\DataGrids\CMSPageDataGrid;
use Webkul\CMS\Http\Controllers\Controller;
use Webkul\CMS\Models\CmsPage;
use Webkul\CMS\Models\CmsPageTranslation;
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
                'homeHeading' => $request['homeHeading'],
                'sliderHeading0' => $request['sliderHeading0'],
                'sliderHeading1' => $request['sliderHeading1'],
                'sliderDes1' => $request['sliderDes1'],
                'sliderHeading2' => $request['sliderHeading2'],
                'sliderDes2' => $request['sliderDes2'],
                'content' => $request['content'],
                'infoHeading0' => $request['infoHeading0'],
                'infoHeading1' => $request['infoHeading1'],
                'infoHeading2' => $request['infoHeading2'],
                'infoHeading3' => $request['infoHeading3'],
                'infoHeading4' => $request['infoHeading4'],
                'aboutHeading' => $request['aboutHeading'],
                'about_sec_des' => $request['about_sec_des'],
                'about_sec_des2' => $request['about_sec_des2'],
                'aboutHeading1' => $request['aboutHeading1'],
                'about_sec_des3' => $request['about_sec_des3'],
                'aboutHeading2' => $request['aboutHeading2'],
                'about_sec_des4' => $request['about_sec_des4'],
                'aboutHeading3' => $request['aboutHeading3'],
                'about_sec_des5' => $request['about_sec_des5'],
                'aboutHeading4' => $request['aboutHeading4'],
                'about_sec_des6' => $request['about_sec_des6'],
                'newsTitle' => $request['newsTitle'],
                'footerHeading' => $request['footerHeading'],
                'phoneIcon' => $request['phoneIcon'],
                'trollNum' => $request['trollNum'],
                'localNum' => $request['localNum'],
                'emailIcon' => $request['emailIcon'],
                'email' => $request['email'],
                'addIcon' => $request['addIcon'],
                'address' => $request['address'],
                'faceIcon' => $request['faceIcon'],
                'faceLink' => $request['faceLink'],
                'twitIcon' => $request['twitIcon'],
                'twitLink' => $request['twitLink'],
                'instaIcon' => $request['instaIcon'],
                'instaLink' => $request['instaLink'],
                'youtIcon' => $request['youtIcon'],
                'youtLink' => $request['youtLink'],
                'copyRight' => $request['copyRight'],
            ];

            $new_page = CmsPage::create([]);
            $pages = new CmsPageTranslation;
            $pages->content = json_encode($content);

            if ($request->hasFile('logo')) {
                $new_page->addMediaFromRequest('logo')->toMediaCollection('logo');
            }

        if ($request->hasFile('sliderImage0')) {
            $new_page->addMediaFromRequest('sliderImage0')->toMediaCollection('slider_image1');
        }

        if ($request->hasFile('sliderImage1')) {
            $new_page->addMediaFromRequest('sliderImage1')->toMediaCollection('slider_image2');
        }

        if ($request->hasFile('sliderImage2')) {
            $new_page->addMediaFromRequest('sliderImage2')->toMediaCollection('slider_image3');
        }

        if ($request->hasFile('infoImage0')) {
            $new_page->addMediaFromRequest('infoImage0')->toMediaCollection('info_image1');
        }

        if ($request->hasFile('infoImage1')) {
            $new_page->addMediaFromRequest('infoImage1')->toMediaCollection('info_image2');
        }

        if ($request->hasFile('infoImage2')) {
            $new_page->addMediaFromRequest('infoImage2')->toMediaCollection('info_image3');
        }

        if ($request->hasFile('infoImage3')) {
            $new_page->addMediaFromRequest('infoImage3')->toMediaCollection('info_image4');
        }

        if ($request->hasFile('infoImage4')) {
            $new_page->addMediaFromRequest('infoImage4')->toMediaCollection('info_image5');
        }

        if ($request->hasFile('aboutSectionImage1')) {
            $new_page->addMediaFromRequest('aboutSectionImage1')->toMediaCollection('about_Section_Image1');
        }

        if ($request->hasFile('aboutSectionImage2')) {
            $new_page->addMediaFromRequest('aboutSectionImage2')->toMediaCollection('about_Section_Image2');
        }

        if ($request->hasFile('aboutSectionImage3')) {
            $new_page->addMediaFromRequest('aboutSectionImage3')->toMediaCollection('about_Section_Image3');
        }

            if ($request->hasFile('newsImage')) {
                $new_page->addMediaFromRequest('newsImage')->toMediaCollection('news_Image');
            }

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
            'homeHeading' => $request->input('homeHeading'),
            'sliderHeading0' => $request->input('sliderHeading0'),
            'sliderHeading1' => $request->input('sliderHeading1'),
            'sliderDes1' => $request->input('sliderDes1'),
            'sliderHeading2' => $request->input('sliderHeading2'),
            'sliderDes2' => $request->input('sliderDes2'),
            'content' => $request->input('content'),
            'infoHeading0' => $request->input('infoHeading0'),
            'infoHeading1' => $request->input('infoHeading1'),
            'infoHeading2' => $request->input('infoHeading2'),
            'infoHeading3' => $request->input('infoHeading3'),
            'infoHeading4' => $request->input('infoHeading4'),
            'aboutHeading' => $request->input('aboutHeading'),
            'about_sec_des' => $request->input('about_sec_des'),
            'about_sec_des2' => $request->input('about_sec_des2'),
            'aboutHeading1' => $request->input('aboutHeading1'),
            'about_sec_des3' => $request->input('about_sec_des3'),
            'aboutHeading2' => $request->input('aboutHeading2'),
            'about_sec_des4' => $request->input('about_sec_des4'),
            'aboutHeading3' => $request->input('aboutHeading3'),
            'about_sec_des5' => $request->input('about_sec_des5'),
            'aboutHeading4' => $request->input('aboutHeading4'),
            'about_sec_des6' => $request->input('about_sec_des6'),
            'newsTitle' => $request->input('newsTitle'),
            'footerHeading' => $request->input('footerHeading'),
            'phoneIcon' => $request->input('phoneIcon'),
            'trollNum' => $request->input('trollNum'),
            'localNum' => $request->input('localNum'),
            'emailIcon' => $request->input('emailIcon'),
            'email' => $request->input('email'),
            'addIcon' => $request->input('addIcon'),
            'address' => $request->input('address'),
            'faceIcon' => $request->input('faceIcon'),
            'faceLink' => $request->input('faceLink'),
            'twitIcon' => $request->input('twitIcon'),
            'twitLink' => $request->input('twitLink'),
            'instaIcon' => $request->input('instaIcon'),
            'instaLink' => $request->input('instaLink'),
            'youtIcon' => $request->input('youtIcon'),
            'youtLink' => $request->input('youtLink'),
            'copyRight' => $request->input('copyRight'),
        ]);
        if ($request->hasFile('logo')) {
            $page->clearMediaCollection('logo');
            $page->addMediaFromRequest('logo')->toMediaCollection('logo');
        }

        if ($request->hasFile('sliderImage0')) {
            $page->clearMediaCollection('slider_image1');
            $page->addMediaFromRequest('sliderImage0')->toMediaCollection('slider_image1');
        }

        if ($request->hasFile('sliderImage1')) {
            $page->clearMediaCollection('slider_image2');
            $page->addMediaFromRequest('sliderImage1')->toMediaCollection('slider_image2');
        }

        if ($request->hasFile('sliderImage2')) {
            $page->clearMediaCollection('slider_image3');
            $page->addMediaFromRequest('sliderImage2')->toMediaCollection('slider_image3');
        }

        if ($request->hasFile('infoImage0')) {
            $page->clearMediaCollection('info_image1');
            $page->addMediaFromRequest('infoImage0')->toMediaCollection('info_image1');
        }

        if ($request->hasFile('infoImage1')) {
            $page->clearMediaCollection('info_image2');
            $page->addMediaFromRequest('infoImage1')->toMediaCollection('info_image2');
        }

        if ($request->hasFile('infoImage2')) {
            $page->clearMediaCollection('info_image3');
            $page->addMediaFromRequest('infoImage2')->toMediaCollection('info_image3');
        }

        if ($request->hasFile('infoImage3')) {
            $page->clearMediaCollection('info_image4');
            $page->addMediaFromRequest('infoImage3')->toMediaCollection('info_image4');
        }

        if ($request->hasFile('infoImage4')) {
            $page->clearMediaCollection('info_image5');
            $page->addMediaFromRequest('infoImage4')->toMediaCollection('info_image5');
        }

        if ($request->hasFile('aboutSectionImage1')) {
            $page->clearMediaCollection('about_Section_Image1');
            $page->addMediaFromRequest('aboutSectionImage1')->toMediaCollection('about_Section_Image1');
        }

        if ($request->hasFile('aboutSectionImage2')) {
            $page->clearMediaCollection('about_Section_Image2');
            $page->addMediaFromRequest('aboutSectionImage2')->toMediaCollection('about_Section_Image2');
        }

        if ($request->hasFile('aboutSectionImage3')) {
            $page->clearMediaCollection('about_Section_Image3');
            $page->addMediaFromRequest('aboutSectionImage3')->toMediaCollection('about_Section_Image3');
        }

        if ($request->hasFile('newsImage')) {
            $page->clearMediaCollection('news_Image');
            $page->addMediaFromRequest('newsImage')->toMediaCollection('news_Image');
        }

        $pageTranslation->save();

//        $this->cmsRepository->update(request()->all(), $id);
//        dd(request()->all());

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
