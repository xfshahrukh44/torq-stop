@extends('shop::layouts.master2')

@section('title', 'Step 3')

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
                                    <h2>cart</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--@dd($cart->grand_total)--}}
    <!-- Begin: Step 3 -->
    <div class="checkOutStyle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="title text-center">
                        <h2>Payment Methods</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <form id="paidTournamentForm" class="row formStyle" action="{{route('front.process_payment')}}" method="POST">
                        @csrf

                        <input type="hidden" name="total" id="total" value="{{$cart->grand_total}}">
{{--                        <input type="hidden" name="time_to_pickup" value="{{format_time_to_am_pm($time_to_pickup)}}">--}}
{{--                        <input type="hidden" id="name" name="name" value="{{$name}}">--}}
{{--                        <input type="hidden" name="phone" value="{{$phone}}">--}}
{{--                        <input type="hidden" id="email" name="email" value="{{$email}}">--}}
{{--                        <input type="hidden" name="billing_address" value="{{$billing_address}}">--}}
                        <div class="col-md-12 mb-4 text-center">
                            <img src="{{asset('themes/default/assets/images/card-img.png')}}" alt="">
                        </div>
                        <div class="col-md-6">
                            <label>Card Number</label>
                            <input type="number" name="card_no" class="form-control" placeholder="CARD NUMBER">
                        </div>
{{--                        <div class="col-md-6">--}}
{{--                            <label>name on card</label>--}}
{{--                            <input type="text" class="form-control" placeholder="CARD TITLE">--}}
{{--                        </div>--}}
                        <div class="col-md-4">
                            <label>expiration Month</label>
                            <input type="number" name="exp_mon" class="form-control" placeholder="MM">
                        </div>
                        <div class="col-md-2">
                            <label for="">Expiry Year</label>
                            <input type="number" name="exp_year" class="form-control" placeholder="YYYY">
                        </div>
                        <div class="col-md-2">
                            <label>CVV</label>
                            <input type="password" name="cvv" class="form-control" placeholder="***">
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox mt-4">
                                <input type="checkbox" id="box-2">
                                <label for="box-2"><h5>save card</h5>information is encrypted and securely stored.</label>
                            </div>
                        </div>
                        <div class="col-md-12  shippngBTn mt-4 text-center">
                            <button class="themeBtns" id="pay_paidTournamentForm">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- END: Step 3 -->

    <script>
        $(document).ready(function(){
            //on payment click
            $('#paidTournamentForm').on('submit', function (e) {
                e.preventDefault();
                let themeButton = $(this).find('#pay_paidTournamentForm');

                themeButton.text('PAYING...')
                themeButton.attr('disabled', true)


                {{--let errors = ''--}}
                {{--$.ajax({--}}
                {{--    type: 'post',--}}
                {{--    url: "{{route('front.process_payment')}}",--}}
                {{--    data: $('#paidTournamentForm').serialize(),--}}
                {{--    success: function (result) {--}}
                {{--        if (result?.status) {--}}
                {{--            themeButton.text('PAID!')--}}
                {{--            // modal band karke main form submit karna hai--}}
                {{--            $('#paymentModal').modal('toggle');--}}
                {{--            $('#mainForm').submit();--}}

                {{--        } else {--}}
                {{--            //    alert payment failed error--}}
                {{--            themeButton.text('Pay Now')--}}
                {{--            themeButton.attr('disabled', false)--}}
                {{--            alert(result.message);--}}
                {{--        }--}}


                {{--    },--}}
                {{--    error: function (err) {--}}
                {{--    }--}}
                {{--});--}}
            });

            //on payment_type click
            $('.payment_type').on('click', function() {
                if($(this).val() == 'Stripe') {
                    $('#paidTournamentForm').prop('hidden', false);
                    $('#payment-form').prop('hidden', true);
                }

                // if($(this).val() == 'Square') {
                //     $('#paidTournamentForm').prop('hidden', true);
                //     $('#payment-form').prop('hidden', false);
                // }
            });
        });
    </script>

@endsection