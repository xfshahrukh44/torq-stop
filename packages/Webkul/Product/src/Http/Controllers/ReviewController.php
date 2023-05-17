<?php

namespace Webkul\Product\Http\Controllers;

use App\Models\CustomerReview;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Event;
use Webkul\Admin\DataGrids\CustomerReviewDataGrid;
use Webkul\Product\Repositories\ProductReviewRepository;

class ReviewController extends Controller
{
    //*** JSON Request
//    public function customerDatatables()
//    {
//        $customerReviews = CustomerReview::latest('id')->get();
////        //--- Integrating This Collection Into Datatables
////        return Datatables::of($datas)
////            ->addColumn('Customer Name', function (CustomerReview $data) {
////                return $data->customer_name;
////            })
////            ->addColumn('Customer Email', function (CustomerReview $data) {
////                return $data->customer_email;
////            })
////            ->addColumn('review', function (CustomerReview $data) {
////                $text = mb_strlen(strip_tags($data->text), 'UTF-8') > 250 ? mb_substr(strip_tags($data->text), 0, 250, 'UTF-8') . '...' : strip_tags($data->text);
////                return $text;
////            })
////            ->addColumn('action', function (CustomerReview $data) {
////                return '<div class="action-list">'.
////                    '<a href="' . route('admin.customer.reviews.show', $data->id) . '" class="view" title="View">'.
////                    '<i class="fas fa-eye"></i>'.
////                    '</a>'.
////                    '<a href="javascript:;" data-href="' . route('admin.customer.reviews.delete', $data->id) . '" class="delete" title="Delete">'.
////                    '<i class="fas fa-trash-alt"></i>'.
////                    '</a>'.
////                    '</div>';
////            })
////            ->rawColumns(['action'])
////            ->toJson();
////	                            ->addColumn('name', function(Review $data) {
////									$name =  mb_strlen(strip_tags($data->product->name),'UTF-8') > 50 ? mb_substr(strip_tags($data->product->name),0,50,'UTF-8').'...' : strip_tags($data->product->name);
////	                                $product = '<a href="'.route('front.product',$data->product->slug).'" target="_blank">'.$name.'</a>';
////	                                return $product;
////	                            })
////            ->addColumn('Customer Name', function (CustomerReview $data) {
////                $customer_name = $data->customer_name;
////                return $customer_name;
////            })
////            ->addColumn('Customer Email', function (CustomerReview $data) {
////                $customer_email = $data->customer_email;
////                return $customer_email;
////            })
////            ->addColumn('review', function (CustomerReview $data) {
////                $text = mb_strlen(strip_tags($data->text), 'UTF-8') > 250 ? mb_substr(strip_tags($data->text), 0, 250, 'UTF-8') . '...' : strip_tags($data->text);
////                return $text;
////            })
////            ->addColumn('action', function (CustomerReview $data) {
////                return '<div class="action-list"><a data-href="' . route('admin.customer.reviews.show', $data->id) . '" class="view details-width" data-toggle="modal" data-target="#modal1"> <i class="fas fa-eye"></i>' . __('Details') . '</a><a href="javascript:;" data-href="' . route('admin.customer.reviews.delete', $data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="delete"><i class="fas fa-trash-alt"></i></a></div>';
////            })
////            ->rawColumns(['product', 'action'])
////            ->toJson(); //--- Returning Json Data To Client Side
//    dd($data);
//    }


    public function customerReviews()
    {
        $customerReviews = CustomerReview::all();
        return view('admin::review.index',compact('customerReviews'));
    }

    //*** GET Request
    public function customerDestroy($id)
    {
        $data = CustomerReview::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Review Deleted Successfully');
//        return view('admin::review.index', compact('data'));
    }

    //*** GET Request Delete
    public function customerShow($id)
    {
        $rating = CustomerReview::findOrFail($id);
//		    dd($rating);
//        $rating->delete();
        //--- Redirect Section
        return view('admin::review.show', compact('rating'));
        //--- Redirect Section Ends
    }


//    /**
//     * Contains route related configuration.
//     *
//     * @var array
//     */
//    protected $_config;
//
//    /**
//     * Product review repository instance.
//     *
//     * @var \Webkul\Product\Repositories\ProductReviewRepository
//     */
//    protected $productReviewRepository;
//
//    /**
//     * Create a new controller instance.
//     *
//     * @param  \Webkul\Product\Repositories\ProductReviewRepository  $productReview
//     * @return void
//     */
//    public function __construct(ProductReviewRepository $productReviewRepository)
//    {
//        $this->productReviewRepository = $productReviewRepository;
//
//        $this->_config = request('_config');
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\View\View
//     */
//    public function index()
//    {
//        if (request()->ajax()) {
//            return app(CustomerReviewDataGrid::class)->toJson();
//        }
//
//        return view($this->_config['view']);
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\View\View
//     */
//    public function edit($id)
//    {
//        $review = $this->productReviewRepository->findOrFail($id);
//
//        return view($this->_config['view'], compact('review'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update($id)
//    {
//        $this->productReviewRepository->update(request()->all(), $id);
//
//        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Review']));
//
//        return redirect()->route($this->_config['redirect']);
//    }
//
//    /**
//     * Delete the review of the current product
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        $this->productReviewRepository->findOrFail($id);
//
//        try {
//            $this->productReviewRepository->delete($id);
//
//            return response()->json(['message' => trans('admin::app.response.delete-success', ['name' => 'Review'])]);
//        } catch (\Exception $e) {
//            report($e);
//        }
//
//        return response()->json(['message' => trans('admin::app.response.delete-failed', ['name' => 'Review'])], 500);
//    }
//
//    /**
//     * Mass delete the reviews on the products.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function massDestroy()
//    {
//        $suppressFlash = false;
//
//        if (request()->isMethod('post')) {
//            $data = request()->all();
//
//            $indexes = explode(',', request()->input('indexes'));
//
//            foreach ($indexes as $key => $value) {
//                try {
//                    $this->productReviewRepository->delete($value);
//                } catch (\Exception $e) {
//                    $suppressFlash = true;
//
//                    continue;
//                }
//            }
//
//            if (! $suppressFlash) {
//                session()->flash('success', trans('admin::app.datagrid.mass-ops.delete-success', ['resource' => 'Reviews']));
//            } else {
//                session()->flash('info', trans('admin::app.datagrid.mass-ops.partial-action', ['resource' => 'Reviews']));
//            }
//
//            return redirect()->route($this->_config['redirect']);
//
//        } else {
//            session()->flash('error', trans('admin::app.datagrid.mass-ops.method-error'));
//
//            return redirect()->back();
//        }
//    }
//
//    /**
//     * Mass approve the reviews on the products.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function massUpdate()
//    {
//        $suppressFlash = false;
//
//        if (request()->isMethod('post')) {
//            $data = request()->all();
//
//            $indexes = explode(',', request()->input('indexes'));
//
//            foreach ($indexes as $key => $value) {
//                $review = $this->productReviewRepository->findOneByField('id', $value);
//
//                try {
//                    if (! isset($data['massaction-type'])) {
//                        return redirect()->back();
//                    }
//
//                    if (! $data['massaction-type'] == 'update') {
//                        return redirect()->back();
//                    }
//
//                    if ($data['update-options'] == 1) {
//                        Event::dispatch('customer.review.update.before', $value);
//
//                        $review->update(['status' => 'approved']);
//
//                        Event::dispatch('customer.review.update.after', $review);
//                    } elseif ($data['update-options'] == 0) {
//                        $review->update(['status' => 'pending']);
//                    } elseif ($data['update-options'] == 2) {
//                        $review->update(['status' => 'disapproved']);
//                    } else {
//                        continue;
//                    }
//                } catch (\Exception $e) {
//                    $suppressFlash = true;
//
//                    continue;
//                }
//            }
//
//            if (! $suppressFlash) {
//                session()->flash('success', trans('admin::app.datagrid.mass-ops.update-success', ['resource' => 'Reviews']));
//            } else {
//                session()->flash('info', trans('admin::app.datagrid.mass-ops.partial-action', ['resource' => 'Reviews']));
//            }
//
//            return redirect()->route($this->_config['redirect']);
//        } else {
//            session()->flash('error', trans('admin::app.datagrid.mass-ops.method-error'));
//
//            return redirect()->back();
//        }
//    }
//
//    public function customerReviews(){
//        return view('admin::review.index');
//    }
}
