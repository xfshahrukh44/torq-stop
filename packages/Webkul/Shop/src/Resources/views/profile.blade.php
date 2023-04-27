@extends('shop::layouts.master2')

@section('title', 'Profile')

@section('content')

    <div class="main-slider innerbaner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/mainBanner.jpg')}}"
                         alt="First slide">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-6">
                                    <h2>profile</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="myAccount">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="nav nav-tabs tabNavStyle" id="bestSellerTab" role="tablist">
                        <li>
                            <div class="userNamePic">
                                <img src="{{asset('themes/default/assets/images/user.jpg')}}" alt="">
                                <div class="content">
                                    <h4>Hello</h4>
                                    <p>John Doe</p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab"
                               aria-controls="dashboard" aria-selected="false"><i class="fal fa-desktop-alt"></i> My Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab"
                               aria-controls="account" aria-selected="false"><i class="fal fa-user"></i> My Account Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab"
                               aria-controls="orders" aria-selected="true"><i class="fal fa-box"></i> My Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wishlist-tab" data-toggle="tab" href="#wishlist" role="tab"
                               aria-controls="wishlist" aria-selected="false"><i class="fal fa-heart"></i> My Wishlist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab"
                               aria-controls="address" aria-selected="false"><i class="fal fa-book"></i> My Addresses</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="dashboard">
                            <div class="myDashboardTab">
                                <h2 class="title">My Dashboard</h2>
                                <div class="mt-3 mb-5">
                                    <h4>My Dashboard</h4>
                                    <p>From this dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                                </div>
                                <h4>Recent Orders</h4>
                                <div class="noRecord">
                                    <p>No Record Found</p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="account">
                            <div class="accounTab">
                                <h2 class="title">My Account Information</h2>
                                <form action="post" class="row formStyle">
                                    <div class="col-md-6">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile Number <span>*</span></label>
                                        <div class="CNum">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('themes/default/assets/images/uae.jpg')}}" alt=""> +097</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><img src="{{asset('themes/default/assets/images/british.jpg')}}" alt=""> +025</a>
                                                        <a class="dropdown-item" href="#"><img src="{{asset('themes/default/assets/images/uae.jpg')}}" alt=""> +097</a>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="50 123 4567">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Gender</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="male" name="male" class="custom-control-input">
                                            <label class="custom-control-label" for="male">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="female" name="female" class="custom-control-input">
                                            <label class="custom-control-label" for="female">Female</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="subscribeCheckBox">
                                            <label class="custom-control-label" for="subscribeCheckBox">I would like to receive emails and SMS regarding the promotions and special offers.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="changePasswordCheckbox">
                                            <label class="custom-control-label" for="changePasswordCheckbox">Change Password?</label>
                                        </div>
                                        <div class="text-right"><button class="themeBtn">Save</button></div>
                                    </div>
                                    <div class="changePassword">
                                        <div class="col-md-12">
                                            <label>Old Password <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-12">
                                            <label>New Password (At least 6 characters) <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Confirm New Password <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="orders">
                            <div class="orderTab">
                                <h2 class="title">My Orders</h2>
                                <table class="table orderTable">
                                    <thead>
                                    <tr>
                                        <th>Order#</th>
                                        <th>Date</th>
                                        <th>Order Total</th>
                                        <th>Order Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p><span>Order#</span>100000568</p>
                                        </td>
                                        <td>
                                            <p><span>Date</span>9/03/2020</p>
                                        </td>
                                        <td>
                                            <p><span>Order Total</span>$ 150.00</p>
                                        </td>
                                        <td>
                                            <p><span>Order Status</span>Delivered</p>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="themeBtn" data-toggle="modal" data-target="#OrderDetailModal">View Order</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span>Order#</span>100000568</p>
                                        </td>
                                        <td>
                                            <p><span>Date</span>9/03/2020</p>
                                        </td>
                                        <td>
                                            <p><span>Order Total</span>$ 150.00</p>
                                        </td>
                                        <td>
                                            <p><span>Order Status</span>Delivered</p>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="themeBtn" data-toggle="modal" data-target="#OrderDetailModal">View Order</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span>Order#</span>100000568</p>
                                        </td>
                                        <td>
                                            <p><span>Date</span>9/03/2020</p>
                                        </td>
                                        <td>
                                            <p><span>Order Total</span>$ 150.00</p>
                                        </td>
                                        <td>
                                            <p><span>Order Status</span>Delivered</p>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="themeBtn" data-toggle="modal" data-target="#OrderDetailModal">View Order</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span>Order#</span>100000568</p>
                                        </td>
                                        <td>
                                            <p><span>Date</span>9/03/2020</p>
                                        </td>
                                        <td>
                                            <p><span>Order Total</span>$ 150.00</p>
                                        </td>
                                        <td>
                                            <p><span>Order Status</span>Delivered</p>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="themeBtn" data-toggle="modal" data-target="#OrderDetailModal">View Order</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span>Order#</span>100000568</p>
                                        </td>
                                        <td>
                                            <p><span>Date</span>9/03/2020</p>
                                        </td>
                                        <td>
                                            <p><span>Order Total</span>$ 150.00</p>
                                        </td>
                                        <td>
                                            <p><span>Order Status</span>Delivered</p>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="themeBtn" data-toggle="modal" data-target="#OrderDetailModal">View Order</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span>Order#</span>100000568</p>
                                        </td>
                                        <td>
                                            <p><span>Date</span>9/03/2020</p>
                                        </td>
                                        <td>
                                            <p><span>Order Total</span>$ 150.00</p>
                                        </td>
                                        <td>
                                            <p><span>Order Status</span>Delivered</p>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="themeBtn" data-toggle="modal" data-target="#OrderDetailModal">View Order</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="wishlist">
                            <h2 class="title">My Wishlist</h2>
                            <table class="table orderTable wishlistTable">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{asset('themes/default/assets/images/pro-4.jpg')}}" alt="" class="img-fluid">
                                            <p>Original Organic Honey</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>$10.00</p>
                                    </td>
                                    <td>
                                        <a href="{{route('shop.product_detail')}}" class="themeBtn">ADD TO CART</a>
                                        <a href="#" class="themeBtn">Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{asset('themes/default/assets/images/pro-4.jpg')}}" alt="" class="img-fluid">
                                            <p>Original Organic Honey</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>$10.00</p>
                                    </td>
                                    <td>
                                        <a href="{{route('shop.product_detail')}}" class="themeBtn">ADD TO CART</a>
                                        <a href="#" class="themeBtn">Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{asset('themes/default/assets/images/pro-4.jpg')}}" alt="" class="img-fluid">
                                            <p>Original Organic Honey</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>$10.00</p>
                                    </td>
                                    <td>
                                        <a href="{{route('shop.product_detail')}}" class="themeBtn">ADD TO CART</a>
                                        <a href="#" class="themeBtn">Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{asset('themes/default/assets/images/pro-4.jpg')}}" alt="" class="img-fluid">
                                            <p>Original Organic Honey</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>$10.00</p>
                                    </td>
                                    <td>
                                        <a href="{{route('shop.product_detail')}}" class="themeBtn">ADD TO CART</a>
                                        <a href="#" class="themeBtn">Remove</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="address">
                            <h2 class="title">My Address <a href="javascript:void(0)" class="themeBtn" data-toggle="modal" data-target="#addNewsAddressModal"><i class="fa fa-plus-circle"></i> Add New Address</a></h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="adressCard">
                                        <span class="tag">Home</span>
                                        <address>
                                            <span>John Doe</span>
                                            <span>1705, Citadel Tower, Business Bay, Dubai</span>
                                            <span>Dubai, </span>
                                            <span>United Arab Emirates</span>
                                            <span>+015 333 4567</span>
                                        </address>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#editAddressModal" class="edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="remove"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="adressCard">
                                        <span class="tag">Work</span>
                                        <address>
                                            <span>John Doe</span>
                                            <span>1705, Citadel Tower, Business Bay, Dubai</span>
                                            <span>Dubai, </span>
                                            <span>United Arab Emirates</span>
                                            <span>+015 333 4567</span>
                                        </address>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#editAddressModal" class="edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="remove"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="adressCard">
                                        <span class="tag">Other</span>
                                        <address>
                                            <span>John Doe</span>
                                            <span>1705, Citadel Tower, Business Bay, Dubai</span>
                                            <span>Dubai, </span>
                                            <span>United Arab Emirates</span>
                                            <span>+015 333 4567</span>
                                        </address>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#editAddressModal" class="edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="remove"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection