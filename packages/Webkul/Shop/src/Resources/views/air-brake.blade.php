
{{--    <div class="main-slider innerbaner">--}}
{{--        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/mainBanner.jpg')}}"--}}
{{--                         alt="First slide">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row align-items-center justify-content-between">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h2>Brake Pads</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <section class="brakeSec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="brakeContent">
{{--                        <h2>Air Brake Pads with Hardware</h2>--}}
                        <h3>Features and Benefits</h3>

                        <h3>Backing Plates:</h3>
                        <ul>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                Welded Mesh Backing Plate provides superior friction attachment to prevent shearing
                                under
                                high-torque applications
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                High-Strength cast-iron backing plate construction is 1.5mm thinner, yet is more rigid
                                than traditional stamped steel backing plates. This allows for more even pad wear and 7%
                                more usable friction for longer pad life.
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                Backing plates are protected with premium AkzoNobel anti-corrosion powder coating, and
                                withstand 3+ cycles of the GM9540P Accelerated Corrosion Testing Cycle
                            </li>
                        </ul>

                        <h3>Friction:</h3>

                        <ul>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                OEM-quality semi-metallic friction material for maximum stopping power and wear
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                Burnishing strips for exceptional performance from the very first stop
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                Compliant with 2025 Copper-Free requirements
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                Available in 23K and 29K GAWR ratings
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                FMVSS 121 and ECE R90 Compliant
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                Premium, corrosion-resistant hardware included
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="brakeSlider swiper-container">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <=6; $i++)
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="{{asset('themes/default/assets/images/brake/brake'. $i .'.png')}}"
                                             alt="">
                                    </figure>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="brakeSliderNav swiper-container">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <=6; $i++)
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="{{asset('themes/default/assets/images/brake/brake'. $i .'.png')}}"
                                             alt="">
                                    </figure>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="brakeSlider swiper-container">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <=5; $i++)
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="{{asset('themes/default/assets/images/brake/stats'. $i .'.png')}}"
                                             alt="">
                                    </figure>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="brakeSliderNav swiper-container">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <=5; $i++)
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="{{asset('themes/default/assets/images/brake/stats'. $i .'.png')}}"
                                             alt="">
                                    </figure>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="brakeContent">
                        <h3>Features and Benefits</h3>
                        <p>
                            TorqStop™ Premium Air Disc Brake Pads provide performance and wear characteristics that
                            equal or
                            exceed that of top OEM and premium aftermarket brands.
                        </p>
                        <p>
                            In side-by-side dyno testing*, TorqStop™ 23K1369 pads achieved 150 – 200% better wear
                            characteristics than competitive pads, without increasing stopping distance.**
                        </p>
                        <p>
                            Not only do TorqStop™ pads last significantly longer, they offer exceptional performance.
                            Our
                            Pads provide optimal sustained torque at 60 MPH for reliable stopping power with negligible
                            fade
                            from right out of the box.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="brakeContent">
                        <h3>Features and Benefits</h3>
                        <p>
                            TorqStop™ brake pad’s retardation ratio aligns most closely with FMVSS121 specifications
                            versus
                            its competitors. FROM THE DRIVER’S SEAT, this means that TorqStop™ pads deliver more
                            consistent,
                            linear braking output in relation to increases in pedal pressure. This provides enhanced
                            driver
                            control, pedal feel, and feedback. Some competitive pads tend to increase retardation more
                            quickly with increases in pedal pressure, which creates an over-sensitive pedal feel which
                            can
                            lead to over-braking, unwanted ABS events, or loss of control. Also, worth noting is one of
                            the
                            competitive pads in our comparison study failed to meet the FMVSS 121 requirement for
                            retardation.
                        </p>
                        <p>
                            As show in this illustration, TorqStop™ Brake Pads provide reliable stopping power even
                            after
                            multiple stops in close succession. Pedal pressure varies minimally (less than 9 lbf/sq in)
                            during a 10 brake stop test. This indicates very low fade and consistent pedal input stop
                            after
                            stop.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure>
                        <img src="{{asset('themes/default/assets/images/brake/mainState1.png')}}" alt="">
                    </figure>
                    <figure class="mt-5">
                        <img src="{{asset('themes/default/assets/images/brake/mainState2.png')}}" alt="">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="brakeContent">
                        <h3>Features and Benefits</h3>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th>TORQSTOP™ PART NO.</th>
                                <th>GAWR</th>
                                <th>MAKE</th>
                                <th>CALIPER MODEL</th>
                                <th>FMSI NO.</th>
                                <th>WVA NO.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i=1;$i<=20;$i++)
                                <tr>
                                    <td>D1203-8323</td>
                                    <td>23k</td>
                                    <td rowspan="2">Knorr Bremse</td>
                                    <td rowspan="2">SB7, SN7</td>
                                    <td rowspan="2">D1203-8323</td>
                                    <td rowspan="2">29087</td>
                                </tr>
                                <tr>
                                    <td>29D1203</td>
                                    <td>23k</td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('shop::product-listings')
    <section class="dfwSec">
        <div class="container-fluid">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="32" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Brake Rotors
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="33" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Air Disc Brake Calipers
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="34" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Brake Shoe Kits
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="35" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Brake Chambers
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="36" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Misc. Hardware
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="37" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Brake Pades
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="38" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Medium Duty
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="39" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Torqstop Swag
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="40" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Pads &amp; Shoes
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="41" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Drums &amp; Rotors
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="42" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Hydraulic Calipers
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn_category " data-id="43" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                        Hydraulic Parts
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="row getForm">
                        <div class="col-md-7">
                            <div class="d-flex align-items-center w-100">
                                <div class="frictionForm">
                                    <select class="year" id="select_year">
                                        <option value="">YEAR</option>
                                        <option value="1990">1990</option>
                                        <option value="Image # 3">Image # 3</option>
                                        <option value="2022">2022</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year" id="select_make">
                                        <option value="">Make</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Bendix">Bendix</option>
                                        <option value="Knorr">Knorr</option>
                                        <option value="Wabco">Wabco</option>
                                        <option value="Meritor">Meritor</option>
                                        <option value="Knorr Bremse">Knorr Bremse</option>
                                        <option value="Bendix / Knorr">Bendix / Knorr</option>
                                        <option value="Haldex">Haldex</option>
                                        <option value="SAF">SAF</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year" id="select_model">
                                        <option value="">Model</option>
                                        <option value="N52">N52</option>
                                        <option value="SB7, SN7">SB7, SN7</option>
                                        <option value="Elsa 2 ">Elsa 2</option>
                                        <option value="EX225 H2">EX225 H2</option>
                                        <option value="D-Lisa">D-Lisa</option>
                                        <option value="EX225, H3 Transit">EX225, H3 Transit</option>
                                        <option value="ADB22x, ADB22XLT, SK-7">ADB22x, ADB22XLT, SK-7</option>
                                        <option value="EX225 L Series">EX225 L Series</option>
                                        <option value="D-Elsa 1">D-Elsa 1</option>
                                        <option value="Pan 19-1">Pan 19-1</option>
                                        <option value="Pan 17">Pan 17</option>
                                        <option value="Volvo 9700">Volvo 9700</option>
                                        <option value="DB22 LT">DB22 LT</option>
                                        <option value="ELSA 225-3">ELSA 225-3</option>
                                        <option value="Pan 22-1">Pan 22-1</option>
                                        <option value="MAXXUS 22 / MAXX 22T">MAXXUS 22 / MAXX 22T</option>
                                        <option value="MAXXUS">MAXXUS</option>
                                        <option value="P89 ST7">P89 ST7</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex align-items-center">
                                <div class="frictionForm">
                                    <input type="text" id="input_name" placeholder="Enter Part Number" value="">
                                </div>
                                <button class="btnform" id="btn_submit">Search</button>
                            </div>
                        </div>


                        <form id="main_form" action="http://127.0.0.1:8000/shop" method="POST" hidden="">
                            <input type="hidden" name="_token" value="5uPTcnYpZw01rq1BgfUvu23T46HgduYR0oq5MNVd"> <input
                                type="hidden" id="form_name" name="name" value="">
                            <input type="hidden" id="form_category_id" name="category_id" value="">
                            <input type="hidden" id="form_year" name="year" value="">
                            <input type="hidden" id="form_make" name="make" value="">
                            <input type="hidden" id="form_model" name="model" value="">
                        </form>


                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Please Select - Year Make &amp; Model First</h2>
                            <h4>Product Group</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">Nissan-Skyline</a>
                            <a href="#" class="Btngroup">Tone Ring"</a>
                            <a href="#" class="Btngroup">Tone Ring"</a>
                            <a href="#" class="Btngroup">RHM56641</a>
                            <a href="#" class="Btngroup">RUM56642</a>
                            <a href="#" class="Btngroup">RUW71601</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">RUW75180</a>
                            <a href="#" class="Btngroup">RUB76603</a>
                            <a href="#" class="Btngroup">RUB76604</a>
                            <a href="#" class="Btngroup">RUM76606</a>
                            <a href="#" class="Btngroup">RUB76612</a>
                            <a href="#" class="Btngroup">RUW76613</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">RUB76617</a>
                            <a href="#" class="Btngroup">RUB76618</a>
                            <a href="#" class="Btngroup">RHB76641</a>
                            <a href="#" class="Btngroup">RHB76642</a>
                            <a href="#" class="Btngroup">RFB76692</a>
                            <a href="#" class="Btngroup">RFB76694</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">RUH76810</a>
                            <a href="#" class="Btngroup">RUW76619</a>
                            <a href="#" class="Btngroup">RUM76620</a>
                            <a href="#" class="Btngroup">RHM76621</a>
                            <a href="#" class="Btngroup">RFM76624</a>
                            <a href="#" class="Btngroup">RFS76626</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">RFM76628</a>
                            <a href="#" class="Btngroup">RFM76690</a>
                            <a href="#" class="Btngroup">RFW76801</a>
                            <a href="#" class="Btngroup">RUW76901</a>
                            <a href="#" class="Btngroup">CAB001L3</a>
                            <a href="#" class="Btngroup">CAB001R</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">CRB001L</a>
                            <a href="#" class="Btngroup">CRB001R</a>
                            <a href="#" class="Btngroup">CAB002L</a>
                            <a href="#" class="Btngroup">CAB002R</a>
                            <a href="#" class="Btngroup">CAB003L</a>
                            <a href="#" class="Btngroup">CAB003R</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">CAB004R</a>
                            <a href="#" class="Btngroup">CAB004L</a>
                            <a href="#" class="Btngroup">CAW001R</a>
                            <a href="#" class="Btngroup">CAW001L</a>
                            <a href="#" class="Btngroup">CAW002R</a>
                            <a href="#" class="Btngroup">CAW002L</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">CAM006R</a>
                            <a href="#" class="Btngroup">CAM006L</a>
                            <a href="#" class="Btngroup">CRM004R</a>
                            <a href="#" class="Btngroup">CRM004L</a>
                            <a href="#" class="Btngroup">CAM003R</a>
                            <a href="#" class="Btngroup">CAM003L</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">CAM004R</a>
                            <a href="#" class="Btngroup">CAM004L</a>
                            <a href="#" class="Btngroup">CAM001R</a>
                            <a href="#" class="Btngroup">CAM001L</a>
                            <a href="#" class="Btngroup">CAW003R</a>
                            <a href="#" class="Btngroup">CAW003L</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">CRW001R</a>
                            <a href="#" class="Btngroup">CRW001L</a>
                            <a href="#" class="Btngroup">CAB005R</a>
                            <a href="#" class="Btngroup">CAB005L</a>
                            <a href="#" class="Btngroup">CAM002R</a>
                            <a href="#" class="Btngroup">CAM002L</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">CRM001R</a>
                            <a href="#" class="Btngroup">CRM001L</a>
                            <a href="#" class="Btngroup">CRM002R</a>
                            <a href="#" class="Btngroup">CRM002L</a>
                            <a href="#" class="Btngroup">CRM003R</a>
                            <a href="#" class="Btngroup">CRM003L</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">CAM004R</a>
                            <a href="#" class="Btngroup">CAM004L</a>
                            <a href="#" class="Btngroup">CAM005R</a>
                            <a href="#" class="Btngroup">CAM005L</a>
                            <a href="#" class="Btngroup">23K4707Q</a>
                            <a href="#" class="Btngroup">23K4515Q</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">23K4709ES2</a>
                            <a href="#" class="Btngroup">23K4702Q</a>
                            <a href="#" class="Btngroup">23K4718Q</a>
                            <a href="#" class="Btngroup">23K1443E</a>
                            <a href="#" class="Btngroup">23K4515X3</a>
                            <a href="#" class="Btngroup">23K4311E</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">23K4711Q</a>
                            <a href="#" class="Btngroup">23K4726ES2</a>
                            <a href="#" class="Btngroup">23K4709E</a>
                            <a href="#" class="Btngroup">23K1308E</a>
                            <a href="#" class="Btngroup">23K4715Q</a>
                            <a href="#" class="Btngroup">23K4720Q</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">23K4719E2</a>
                            <a href="#" class="Btngroup">23K4710Q</a>
                            <a href="#" class="Btngroup">23K4725ES2</a>
                            <a href="#" class="Btngroup">23K1308Q</a>
                            <a href="#" class="Btngroup">23K4591DX</a>
                            <a href="#" class="Btngroup">23K4551Q</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">23K4703Q</a>
                            <a href="#" class="Btngroup">23K4692FC2</a>
                            <a href="#" class="Btngroup">23K4692QU</a>
                            <a href="#" class="Btngroup">23K4591SF</a>
                            <a href="#" class="Btngroup">23K4524Q</a>
                            <a href="#" class="Btngroup">23K1308P</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">23K4524QM</a>
                            <a href="#" class="Btngroup">23K4514Q</a>
                            <a href="#" class="Btngroup">TST14</a>
                            <a href="#" class="Btngroup">TST16</a>
                            <a href="#" class="Btngroup">TST18</a>
                            <a href="#" class="Btngroup">TST20</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">TST24</a>
                            <a href="#" class="Btngroup">TST1624</a>
                            <a href="#" class="Btngroup">TST1824</a>
                            <a href="#" class="Btngroup">TST2024</a>
                            <a href="#" class="Btngroup">TST2224</a>
                            <a href="#" class="Btngroup">TST2424</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">TST2430</a>
                            <a href="#" class="Btngroup">SC2430PB</a>
                            <a href="#" class="Btngroup">SC2430LSPB</a>
                            <a href="#" class="Btngroup">SC3030PB</a>
                            <a href="#" class="Btngroup">SC3030LSPB</a>
                            <a href="#" class="Btngroup">SC9</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">SC12</a>
                            <a href="#" class="Btngroup">SC16</a>
                            <a href="#" class="Btngroup">SC20</a>
                            <a href="#" class="Btngroup">SC24</a>
                            <a href="#" class="Btngroup">SC30</a>
                            <a href="#" class="Btngroup">SC2424</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">SC2430</a>
                            <a href="#" class="Btngroup">SC2430LS</a>
                            <a href="#" class="Btngroup">SC3030</a>
                            <a href="#" class="Btngroup">SC3030LS</a>
                            <a href="#" class="Btngroup">SC3030I</a>
                            <a href="#" class="Btngroup">SC3030ILS</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">KB001</a>
                            <a href="#" class="Btngroup">KB002</a>
                            <a href="#" class="Btngroup">KB003</a>
                            <a href="#" class="Btngroup">KB004</a>
                            <a href="#" class="Btngroup">KM001</a>
                            <a href="#" class="Btngroup">KW001</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">KW002</a>
                            <a href="#" class="Btngroup">KW003</a>
                            <a href="#" class="Btngroup">KC001</a>
                            <a href="#" class="Btngroup">KC002</a>
                            <a href="#" class="Btngroup">KC003</a>
                            <a href="#" class="Btngroup">KC004</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">KC005</a>
                            <a href="#" class="Btngroup">23D1203</a>
                            <a href="#" class="Btngroup">23D1310</a>
                            <a href="#" class="Btngroup">23D1311</a>
                            <a href="#" class="Btngroup">23D1312</a>
                            <a href="#" class="Btngroup">23D1323</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">23D1369</a>
                            <a href="#" class="Btngroup">23D1370</a>
                            <a href="#" class="Btngroup">23D1407</a>
                            <a href="#" class="Btngroup">23D1438</a>
                            <a href="#" class="Btngroup">23D1518</a>
                            <a href="#" class="Btngroup">23D1560</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">23D1583</a>
                            <a href="#" class="Btngroup">23D1708</a>
                            <a href="#" class="Btngroup">23D1777.1</a>
                            <a href="#" class="Btngroup">23D1777.2</a>
                            <a href="#" class="Btngroup">23D2061</a>
                            <a href="#" class="Btngroup">23D2252</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">29D1203</a>
                            <a href="#" class="Btngroup">29D1310</a>
                            <a href="#" class="Btngroup">29D1311</a>
                            <a href="#" class="Btngroup">29D1312</a>
                            <a href="#" class="Btngroup">29D1323</a>
                            <a href="#" class="Btngroup">29D1369</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">29D1370</a>
                            <a href="#" class="Btngroup">29D1407</a>
                            <a href="#" class="Btngroup">29D1438</a>
                            <a href="#" class="Btngroup">29D1518</a>
                            <a href="#" class="Btngroup">29D1560</a>
                            <a href="#" class="Btngroup">29D1583</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">29D1708</a>
                            <a href="#" class="Btngroup">29D1777.1</a>
                            <a href="#" class="Btngroup">29D1777.2</a>
                            <a href="#" class="Btngroup">29D2061</a>
                            <a href="#" class="Btngroup">29D2252</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
