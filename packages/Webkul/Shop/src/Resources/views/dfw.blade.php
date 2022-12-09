@extends('shop::layouts.master2')

@section('title', 'DFW')

@section('content')

    <div class="main-slider innerbaner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/dfwBg.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-6">
                                    <h2>DFW</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="dfwSec">
        <div class="container-fluid">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">FRICTION</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">HYDRAULItCS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">MEDIUM DUTY</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row getForm">
                        <div class="col-md-7">
                            <div class="d-flex align-items-center w-100">
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="YEAR	">YEAR</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="YEAR	">Make</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="Model">Model</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex align-items-center">
                                <div class="frictionForm">
                                    <input type="text" placeholder="Enter Part Number">
                                </div>
                                <button class="btnform">Search</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="radioBox">
                                <input type="radio" name="one" id="1st">
                                <label for="1st">Exactt match</label>
                                <input type="radio" name="one" id="2nd">
                                <label for="2nd">Base ntumber match</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Please Select - Year Make & Model First</h2>
                            <h4>Product Group</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Brake Pads</a>
                            <a href="#" class="Btngroup">1115- OFC Active Performance</a>
                            <a href="#" class="Btngroup">1214- OFC Heavy Duty</a>
                            <a href="#" class="Btngroup">1310- DFC 3000 Ceramic</a>
                            <a href="#" class="Btngroup">1311- DFC 3000 Semi-Metallic</a>
                            <a href="#" class="Btngroup">1551-1554- DFC 5000 Advanced</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Premium Rotors (OE Design!</a>
                            <a href="#" class="Btngroup">600- OE Blank</a>
                            <a href="#" class="Btngroup">610- OE Slotted Design</a>
                            <a href="#" class="Btngroup">620- OE Drilled Design</a>
                            <a href="#" class="Btngroup">630- OE Drilled / Slotted Design</a>
                            <a href="#" class="Btngroup">640- OE Dimpled Slotted Design</a>
                            <a href="#" class="Btngroup">650- OE Dimpled Design</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Carbon Alloy Brake Rotors (OE Design)</a>
                            <a href="#" class="Btngroup">900- OE Blank</a>
                            <a href="#" class="Btngroup">910- OE Slotted Design</a>
                            <a href="#" class="Btngroup">920- OE Drilled Design</a>
                            <a href="#" class="Btngroup">930- OE Drilled / Slotted Design</a>
                            <a href="#" class="Btngroup">940- OE Dimpled Slotted Design</a>
                            <a href="#" class="Btngroup">950- OE Dimpled Design</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Brake Shoes and Brake Drums</a>
                            <a href="#" class="Btngroup">365- DFC True Balanced Brake Drums</a>
                            <a href="#" class="Btngroup">370- DFC True-Arc Parking Brake Hardware Kit</a>
                            <a href="#" class="Btngroup">1901- DFC True-Arc Service Brake Shoes</a>
                            <a href="#" class="Btngroup">1902- DFC True-Arc Parking Brake Shoes</a>
                            <a href="#" class="Btngroup">1903- DFC True-Arc Riveted Brake Shoes</a>
                            <a href="#" class="Btngroup">DFC Hardwares. Sensors and Adjusters</a>
                            <a href="#" class="Btngroup">340- DFC Disc Hardware Kit</a>
                            <a href="#" class="Btngroup">341- DFC Hi-Temp Brake Pad</a>
                            <a href="#" class="Btngroup">372- DFC Hi-Temp Brake Pad</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row getForm">
                        <div class="col-md-7">
                            <div class="d-flex align-items-center w-100">
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="YEAR	">YEAR</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="YEAR	">Make</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="Model">Model</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex align-items-center">
                                <div class="frictionForm">
                                    <input type="text" placeholder="Enter Part Number">
                                </div>
                                <button class="btnform">Search</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="radioBox">
                                <input type="radio" name="one" id="1st">
                                <label for="1st">Exactt match</label>
                                <input type="radio" name="one" id="2nd">
                                <label for="2nd">Base ntumber match</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Please Select - Year Make & Model First</h2>
                            <h4>Product Group</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Brake Pads</a>
                            <a href="#" class="Btngroup">1115- OFC Active Performance</a>
                            <a href="#" class="Btngroup">1214- OFC Heavy Duty</a>
                            <a href="#" class="Btngroup">1310- DFC 3000 Ceramic</a>
                            <a href="#" class="Btngroup">1311- DFC 3000 Semi-Metallic</a>
                            <a href="#" class="Btngroup">1551-1554- DFC 5000 Advanced</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Premium Rotors (OE Design!</a>
                            <a href="#" class="Btngroup">600- OE Blank</a>
                            <a href="#" class="Btngroup">610- OE Slotted Design</a>
                            <a href="#" class="Btngroup">620- OE Drilled Design</a>
                            <a href="#" class="Btngroup">630- OE Drilled / Slotted Design</a>
                            <a href="#" class="Btngroup">640- OE Dimpled Slotted Design</a>
                            <a href="#" class="Btngroup">650- OE Dimpled Design</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Carbon Alloy Brake Rotors (OE Design)</a>
                            <a href="#" class="Btngroup">900- OE Blank</a>
                            <a href="#" class="Btngroup">910- OE Slotted Design</a>
                            <a href="#" class="Btngroup">920- OE Drilled Design</a>
                            <a href="#" class="Btngroup">930- OE Drilled / Slotted Design</a>
                            <a href="#" class="Btngroup">940- OE Dimpled Slotted Design</a>
                            <a href="#" class="Btngroup">950- OE Dimpled Design</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Brake Shoes and Brake Drums</a>
                            <a href="#" class="Btngroup">365- DFC True Balanced Brake Drums</a>
                            <a href="#" class="Btngroup">370- DFC True-Arc Parking Brake Hardware Kit</a>
                            <a href="#" class="Btngroup">1901- DFC True-Arc Service Brake Shoes</a>
                            <a href="#" class="Btngroup">1902- DFC True-Arc Parking Brake Shoes</a>
                            <a href="#" class="Btngroup">1903- DFC True-Arc Riveted Brake Shoes</a>
                            <a href="#" class="Btngroup">DFC Hardwares. Sensors and Adjusters</a>
                            <a href="#" class="Btngroup">340- DFC Disc Hardware Kit</a>
                            <a href="#" class="Btngroup">341- DFC Hi-Temp Brake Pad</a>
                            <a href="#" class="Btngroup">372- DFC Hi-Temp Brake Pad</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row getForm">
                        <div class="col-md-7">
                            <div class="d-flex align-items-center w-100">
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="YEAR	">YEAR</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="YEAR	">Make</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year">
                                        <option value="Model">Model</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                        <option value="lorem">lorem</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex align-items-center">
                                <div class="frictionForm">
                                    <input type="text" placeholder="Enter Part Number">
                                </div>
                                <button class="btnform">Search</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="radioBox">
                                <input type="radio" name="one" id="1st">
                                <label for="1st">Exactt match</label>
                                <input type="radio" name="one" id="2nd">
                                <label for="2nd">Base ntumber match</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Please Select - Year Make & Model First</h2>
                            <h4>Product Group</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Brake Pads</a>
                            <a href="#" class="Btngroup">1115- OFC Active Performance</a>
                            <a href="#" class="Btngroup">1214- OFC Heavy Duty</a>
                            <a href="#" class="Btngroup">1310- DFC 3000 Ceramic</a>
                            <a href="#" class="Btngroup">1311- DFC 3000 Semi-Metallic</a>
                            <a href="#" class="Btngroup">1551-1554- DFC 5000 Advanced</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Premium Rotors (OE Design!</a>
                            <a href="#" class="Btngroup">600- OE Blank</a>
                            <a href="#" class="Btngroup">610- OE Slotted Design</a>
                            <a href="#" class="Btngroup">620- OE Drilled Design</a>
                            <a href="#" class="Btngroup">630- OE Drilled / Slotted Design</a>
                            <a href="#" class="Btngroup">640- OE Dimpled Slotted Design</a>
                            <a href="#" class="Btngroup">650- OE Dimpled Design</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Carbon Alloy Brake Rotors (OE Design)</a>
                            <a href="#" class="Btngroup">900- OE Blank</a>
                            <a href="#" class="Btngroup">910- OE Slotted Design</a>
                            <a href="#" class="Btngroup">920- OE Drilled Design</a>
                            <a href="#" class="Btngroup">930- OE Drilled / Slotted Design</a>
                            <a href="#" class="Btngroup">940- OE Dimpled Slotted Design</a>
                            <a href="#" class="Btngroup">950- OE Dimpled Design</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="Btngroup">DFC Brake Shoes and Brake Drums</a>
                            <a href="#" class="Btngroup">365- DFC True Balanced Brake Drums</a>
                            <a href="#" class="Btngroup">370- DFC True-Arc Parking Brake Hardware Kit</a>
                            <a href="#" class="Btngroup">1901- DFC True-Arc Service Brake Shoes</a>
                            <a href="#" class="Btngroup">1902- DFC True-Arc Parking Brake Shoes</a>
                            <a href="#" class="Btngroup">1903- DFC True-Arc Riveted Brake Shoes</a>
                            <a href="#" class="Btngroup">DFC Hardwares. Sensors and Adjusters</a>
                            <a href="#" class="Btngroup">340- DFC Disc Hardware Kit</a>
                            <a href="#" class="Btngroup">341- DFC Hi-Temp Brake Pad</a>
                            <a href="#" class="Btngroup">372- DFC Hi-Temp Brake Pad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection