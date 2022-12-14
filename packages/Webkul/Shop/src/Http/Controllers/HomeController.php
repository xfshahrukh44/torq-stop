<?php

namespace Webkul\Shop\Http\Controllers;

use App\ProductCategoryField;
use Illuminate\Http\Request;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Shop\Http\Controllers\Controller;
use Webkul\Core\Repositories\SliderRepository;
use Webkul\Product\Repositories\SearchRepository;

class HomeController extends Controller
{
    /**
     * Slider repository instance.
     *
     * @var \Webkul\Core\Repositories\SliderRepository
     */
    protected $sliderRepository;

    /**
     * Search repository instance.
     *
     * @var \Webkul\Core\Repositories\SearchRepository
     */
    protected $searchRepository;

    protected $categoryRepository;

    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Core\Repositories\SliderRepository  $sliderRepository
     * @param  \Webkul\Product\Repositories\SearchRepository  $searchRepository
     * @return void
     */
    public function __construct(
        SliderRepository $sliderRepository,
        SearchRepository $searchRepository,
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository
    ) {
        $this->sliderRepository = $sliderRepository;

        $this->searchRepository = $searchRepository;

        $this->categoryRepository = $categoryRepository;

        $this->productRepository = $productRepository;

        parent::__construct();
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
//        dd('here');
        $sliderData = $this->sliderRepository->getActiveSliders();

        return view('shop::index2', compact('sliderData'));

        return view($this->_config['view'], compact('sliderData'));
    }

    public function about()
    {
        return view('shop::about');
    }

    public function myAccount()
    {
        return view('shop::my-account');
    }

    public function categories()
    {
        return view('shop::categories');
    }

    public function contact()
    {
        return view('shop::contact');
    }

    public function dfw()
    {
        return view('shop::dfw');
    }

    public function productDetail()
    {
        return view('shop::product_detail');
    }

    public function profile()
    {
        return view('shop::profile');
    }

    public function reviews()
    {
        return view('shop::reviews');
    }

    public function shop(Request $request)
    {
//        dd($request->all());
        //init data
        $name = null;
        $category_id = null;
        $year = null;
        $make = null;
        $model = null;

        //prep data
        if ($request->method() == 'POST') {
            $name = $request->name;
            $category_id = $request->category_id;
            $year = $request->year;
            $make = $request->make;
            $model = $request->model;
        }
        $data = [
            'name' => $name,
            'category_id' => $category_id,
            'year' => $year,
            'make' => $make,
            'model' => $model,
        ];

        //fetch categories
        $categories = $this->categoryRepository->index();

        //fetch products
        $products = $this->productRepository->getProductsForShop($data)->toArray();
        //convert products into chunks of 6 (for frontend)
        $products = array_chunk($products, 6);

        //prep filters' options
        $year_options = $this->getFilterOptions('year', $data['category_id']);
        $make_options = $this->getFilterOptions('make', $data['category_id']);
        $model_options = $this->getFilterOptions('model', $data['category_id']);

        return view('shop::shop', compact('categories', 'products', 'year_options', 'make_options', 'model_options', 'data'));
    }

    public function step1()
    {
        return view('shop::step1');
    }

    public function step2()
    {
        return view('shop::step2');
    }

    public function step3()
    {
        return view('shop::step3');
    }

    /**
     * Loads the home page for the storefront if something wrong.
     *
     * @return \Exception
     */
    public function notFound()
    {
        abort(404);
    }

    /**
     * Upload image for product search with machine learning.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return $this->searchRepository->uploadSearchImage(request()->all());
    }

    protected function getFilterOptions($field_name, $category_id)
    {
        $options = ProductCategoryField::where('field_name', $field_name);
        $options->when($category_id, function($q) use($category_id) {
            return $q->where('category_id', $category_id);
        });
        return $options->groupBy('field_value')->get();
    }
}
