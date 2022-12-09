<?php

namespace Webkul\Shop\Http\Controllers;

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

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Core\Repositories\SliderRepository  $sliderRepository
     * @param  \Webkul\Product\Repositories\SearchRepository  $searchRepository
     * @return void
     */
    public function __construct(
        SliderRepository $sliderRepository,
        SearchRepository $searchRepository
    ) {
        $this->sliderRepository = $sliderRepository;

        $this->searchRepository = $searchRepository;

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

    public function shop()
    {
        return view('shop::shop');
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
}
