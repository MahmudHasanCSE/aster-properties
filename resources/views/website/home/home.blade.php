@extends('master.front.master')

@section('title')
    Home
@endsection

@section('body')

    <!-- =======================================
        ==start Slider section==
    =======================================-->

    <section class="home3-hero pos-relative" data-vide-bg="video/video.mp4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-wrapper owl-carousel color-ff" id="home3-carousel">
                        <div class="single-content text-center">
                            <h1 class="fw-700 color-ff">Grow Your Business with beauty lab</h1>
                            <p class="color-ff">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates vitae ullam nesciunt! Enim alias</p>
                        </div>
                        <div class="single-content text-center">
                            <h1 class="fw-700 color-ff">We Are Specialized In Beauty & spa</h1>
                            <p class="color-ff">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates vitae ullam nesciunt! Enim alias</p>
                        </div>
                    </div>
                    <!--/wrapper-->
                    <div class="mouse" id="mouse"></div>
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- =======================================
        ==End Slider section==
    =======================================-->


    <!-- =======================================
        ==start welcome section==
    =======================================-->
    <section class="welcome-section v2 pos-relative" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500">Welcome To Beauty Lab</h3>
                        <p>The beauty lab is a luxury beauty & spa solution. The beauty spa strives to deliver top class treatments in a relaxing environment.</p>
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-feature-wrapper expert clearfix">
                        <!--feature-1-->
                        <div class="single-feature float-left ptb-35">
                            <span class="circle"></span>
                            <i class="flaticon-health-care"></i>
                            <div class="feature-content pl-25 pr-20">
                                <h6 class="color-33 fw-500 pb-15">Expert Doctors</h6>
                                <div class="divider"></div>
                                <p class="pt-15">As you might have guessed, most designers choose this unit arbitrarily. </p>
                            </div>
                        </div>

                        <!--feature-2-->
                        <div class="single-feature technology float-left ptb-35">
                            <span class="circle"></span>
                            <i class="flaticon-nurse"></i>
                            <div class="feature-content pl-25 pr-20">
                                <h6 class="color-33 fw-500 pb-15">Beauty Expert</h6>
                                <div class="divider"></div>
                                <p class="pt-15">As you might have guessed, most designers choose this unit arbitrarily. </p>
                            </div>
                        </div>

                        <!--feature-3-->
                        <div class="single-feature technology float-left ptb-35">
                            <span class="circle"></span>
                            <i class="flaticon-flask"></i>
                            <div class="feature-content pl-25 pr-20">
                                <h6 class="color-33 fw-500 pb-15">Latest Technology</h6>
                                <div class="divider"></div>
                                <p class="pt-15">As you might have guessed, most designers choose this unit arbitrarily. </p>
                            </div>
                        </div>

                        <!--feature-4-->
                        <div class="single-feature certified float-left ptb-35">
                            <span class="circle"></span>
                            <i class="flaticon-graduate-diploma"></i>
                            <div class="feature-content pl-25 pr-20">
                                <h6 class="color-33 fw-500 pb-15">Certified Institute</h6>
                                <div class="divider"></div>
                                <p class="pt-15">As you might have guessed, most designers choose this unit arbitrarily. </p>
                            </div>
                        </div>

                        <!--feature-5-->
                        <div class="single-feature appointment float-left ptb-35">
                            <span class="circle"></span>
                            <i class="flaticon-school-calendar"></i>
                            <div class="feature-content pl-25 pr-20">
                                <h6 class="color-33 fw-500 pb-15">Online Appointment</h6>
                                <div class="divider"></div>
                                <p class="pt-15">As you might have guessed, most designers choose this unit arbitrarily. </p>
                            </div>
                        </div>

                        <!--feature-6-->
                        <div class="single-feature certified float-left ptb-35">
                            <span class="circle"></span>
                            <i class="flaticon-relax-1"></i>
                            <div class="feature-content pl-25 pr-20">
                                <h6 class="color-33 fw-500 pb-15">Beauty Treatment</h6>
                                <div class="divider"></div>
                                <p class="pt-15">As you might have guessed, most designers choose this unit arbitrarily. </p>
                            </div>
                        </div>
                        <!--/feature-->
                    </div>
                    <!--/wrapper-->
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- =======================================
        ==End welcome section==
    =======================================-->


    <!-- =======================================
            ==start Seassion booking section==
    =======================================-->
    <section class="booking-section v2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-4 col-lg-9 offset-lg-3">
                    <div class="section-title text-center">
                        <h3 class="color-ff fw-500">Book A Session Now</h3>
                        <p>Deliver Top Class Treatments In A Relaxing Environment.</p>
                    </div>

                    <div class="booking-wrapper mt-45">
                        <form action="#" method="post" class="clearfix">
                            <div class="single-input name">
                                <input type="text" name="name" placeholder="Your Name" required />
                            </div>

                            <div class="single-input phone">
                                <input type="text" name="phone" placeholder="Phone Number" />
                            </div>

                            <div class="single-input email">
                                <input type="email" name="email" placeholder="Email Address" required />
                            </div>

                            <div class="single-input date">
                                <input type="" name="date" id="booking-date" placeholder="DD/MM/YY" required />
                            </div>

                            <div class="single-input beauty-service clearfix">
                                <select class="wide" name="beauty-service" required>
                                    <option selected>Service</option>
                                    <option value="facial">Facials</option>
                                    <option value="nailCare">Nail Care</option>
                                    <option value="eyeCare">Eye Care</option>
                                    <option value="waxing">Waxing</option>
                                    <option value="makeup">Make-Up</option>
                                </select>
                            </div>

                            <div class="single-input beauty-expart clearfix">
                                <select class="wide" name="beauty-expart" required>
                                    <option selected>Beauty Expart</option>
                                    <option value="sokhina">Janny Sokhina</option>
                                    <option value="jorina">Jorina Biswas</option>
                                    <option value="jerin">Jerin Shikdar</option>
                                    <option value="subrina">Subrina Tasnim</option>
                                </select>
                            </div>

                            <div class="single-input msg">
                                <textarea name="msg-area" cols="30" rows="4" placeholder="Your Message (Optional)"></textarea>
                            </div>
                            <button type="submit">Make a Reservation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================================
            ==End Seassion booking section==
    =======================================-->


    <!-- =======================================
            ==Start Service section==
    =======================================-->
    <section class="service-section v2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore etc.</p>
                    </div>
                </div>
                <!--/col-->
            </div>
            <!--/row-->

            <div class="row">
                <!--service-1-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="img-over-content text-center">
                            <i class="flaticon-medical color-d5 mb-10"></i>
                            <div class="divider"></div>
                            <a href="service-details.html" class="fw-500 color-33 mtb-15">Beauty Treatment</a>
                            <p>The power of golden ratio typography cannot be understated. </p>
                        </div>
                    </div>
                </div>

                <!--service-2-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="img-over-content text-center">
                            <i class="flaticon-spa color-d5 mb-10"></i>
                            <div class="divider"></div>
                            <a href="service-details.html" class="fw-500 color-33 mtb-15">Spa Process</a>
                            <p>The power of golden ratio typography cannot be understated. </p>
                        </div>
                    </div>
                </div>

                <!--service-3-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="img-over-content text-center">
                            <i class="flaticon-medical-1 color-d5 mb-10"></i>
                            <div class="divider"></div>
                            <a href="service-details.html" class="fw-500 color-33 mtb-15">Body Massage</a>
                            <p>The power of golden ratio typography cannot be understated. </p>
                        </div>
                    </div>
                </div>

                <!--service-4-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="img-over-content text-center">
                            <i class="flaticon-hairdryer color-d5 mb-10"></i>
                            <div class="divider"></div>
                            <a href="service-details.html" class="fw-500 color-33 mtb-15">Hair Treatment</a>
                            <p>The power of golden ratio typography cannot be understated. </p>
                        </div>
                    </div>
                </div>

                <!--service-5-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="img-over-content text-center">
                            <i class="flaticon-hand-wash color-d5 mb-10"></i>
                            <div class="divider"></div>
                            <a href="service-details.html" class="fw-500 color-33 mtb-15">Manicure & Pedicure</a>
                            <p>The power of golden ratio typography cannot be understated. </p>
                        </div>
                    </div>
                </div>

                <!--service-6-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="img-over-content text-center">
                            <i class="flaticon-relax color-d5 mb-10"></i>
                            <div class="divider"></div>
                            <a href="service-details.html" class="fw-500 color-33 mtb-15">Body Waxing</a>
                            <p>The power of golden ratio typography cannot be understated. </p>
                        </div>
                    </div>
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
    </section>
    <!-- =======================================
            ==End Service section==
    =======================================-->


    <!-- =======================================
            ==Start beauty lab gallery section==
    =======================================-->
    <section class="beautyLab-gallery">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-ff fw-500 pb-10">Our Beauty Lab</h3>
                        <p class="color-ff">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore etc</p>
                    </div>
                </div>
            </div>
            <!--/row-->

            <ul class="filtering-menu">
                <li class="is-checked" data-filter="*">All</li>
                <li data-filter=".treatment">Beauty Treatment</li>
                <li data-filter=".interiors">Beauty Interiors</li>
            </ul>

            <div class="row gallery-wrapper">

                <!--gallery-1-->
                <div class="col-lg-4 col-md-6  mix interiors">
                    <div class="single-gallery">
                        <img src="{{asset('/')}}images/a1.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

                <!--gallery-2-->
                <div class="col-lg-4 col-md-6  mix treatment">
                    <div class="single-gallery">
                        <img src="{{asset('/')}}images/a2.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

                <!--gallery-3-->
                <div class="col-lg-4 col-md-6  mix interiors">
                    <div class="single-gallery">
                        <img src="{{asset('/')}}images/a3.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

                <!--gallery-4-->
                <div class="col-lg-4 col-md-6  mix treatment">
                    <div class="single-gallery">
                        <img src="{{asset('/')}}images/a3.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

                <!--gallery-5-->
                <div class="col-lg-4 col-md-6  mix interiors">
                    <div class="single-gallery">
                        <img src="{{asset('/')}}images/a2.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

                <!--gallery-6-->
                <div class="col-lg-4 col-md-6  mix treatment">
                    <div class="single-gallery">
                        <img src="{{asset('/')}}images/a1.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
    </section>
    <!-- =======================================
            ==End beauty lab gallery section==
    =======================================-->


    <!-- =======================================
            ==Start Product Carousel Section==
    =======================================-->
    <section class="product-carousel">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="product-carousel-wrapper owl-carousel" id="product-carousel">

                        <!--product-1-->
                        <div class="single-carousel">
                            <img src="{{asset('/')}}images/product2.jpg" alt="product" class="img-fluid">
                            <div class="product-hover text-center">
                                <h6 class="color-ff mb-10">$180.95</h6>
                                <div class="divider"></div>
                                <p class="color-ff mt-10 mb-15">Retexturing Activator</p>
                                <a href="#">Buy Now</a>
                            </div>
                        </div>

                        <!--product-2-->
                        <div class="single-carousel">
                            <img src="{{asset('/')}}images/product6.jpg" alt="product" class="img-fluid">
                            <div class="product-hover text-center">
                                <h6 class="color-ff mb-10">$100.55</h6>
                                <div class="divider"></div>
                                <p class="color-ff mt-10 mb-15">Herbal Cleanser 4 oz.</p>
                                <a href="#">Buy Now</a>
                            </div>
                        </div>

                        <!--product-3-->
                        <div class="single-carousel">
                            <img src="{{asset('/')}}images/product7.jpg" alt="product" class="img-fluid">
                            <div class="product-hover text-center">
                                <h6 class="color-ff mb-10">$120.95</h6>
                                <div class="divider"></div>
                                <p class="color-ff mt-10 mb-15">Blemish + Age Defense</p>
                                <a href="#">Buy Now</a>
                            </div>
                        </div>

                        <!--product-4-->
                        <div class="single-carousel">
                            <img src="{{asset('/')}}images/product1.jpg" alt="product" class="img-fluid">
                            <div class="product-hover text-center">
                                <h6 class="color-ff mb-10">$180.95</h6>
                                <div class="divider"></div>
                                <p class="color-ff mt-10 mb-15">Retexturing Activator</p>
                                <a href="#">Buy Now</a>
                            </div>
                        </div>

                        <!--product-5-->
                        <div class="single-carousel">
                            <img src="{{asset('/')}}images/product3.jpg" alt="product" class="img-fluid">
                            <div class="product-hover text-center">
                                <h6 class="color-ff mb-10">$100.95</h6>
                                <div class="divider"></div>
                                <p class="color-ff mt-10 mb-15">Herbal Cleanser 4 oz.</p>
                                <a href="#">Buy Now</a>
                            </div>
                        </div>

                        <!--product-6-->
                        <div class="single-carousel">
                            <img src="{{asset('/')}}images/product4.jpg" alt="product" class="img-fluid">
                            <div class="product-hover text-center">
                                <h6 class="color-ff mb-10">$120.95</h6>
                                <div class="divider"></div>
                                <p class="color-ff mt-10 mb-15">Blemish + Age Defense</p>
                                <a href="#">Buy Now</a>
                            </div>
                        </div>

                        <!--product-7-->
                        <div class="single-carousel">
                            <img src="{{asset('/')}}images/product5.jpg" alt="product" class="img-fluid">
                            <div class="product-hover text-center">
                                <h6 class="color-ff mb-10">$180.95</h6>
                                <div class="divider"></div>
                                <p class="color-ff mt-10 mb-15">Retexturing Activator</p>
                                <a href="#">Buy Now</a>
                            </div>
                        </div>
                        <!--/carousel-->
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
    </section>
    <!-- =======================================
            ==End Product Carousel section==
    =======================================-->


    <!-- =======================================
            ==Start video section==
    =======================================-->
    <section class="video-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-content text-center">
                        <a href="https://www.youtube.com/watch?v=zrroUQ1Bapo" data-vbtype="video" data-autoplay="true" class="venobox vbox-item"><i class="fa fa-play"></i></a>
                        <h3 class="color-ff fw-700 text-capitalize">watch our Beauty Lab</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================================
            ==End video section==
    =======================================-->


    <!-- =======================================
            ==Start price list section==
    =======================================-->
    <section class="priceing-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10">Price List</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>
                    </div>

                    <div class="price-list-tab">
                        <!-- Nav tabs -->
                        <ul class="tab-menu nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link" href="#beautyTreatment" aria-controls="beautyTreatment" role="tab" data-toggle="tab" aria-selected="true">Beauty Treatment</a></li>
                            <li class="nav-item"><a class="nav-link" href="#makeUp" aria-controls="makeUp" role="tab" data-toggle="tab" aria-selected="false">Make-up</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#spaTherapy" aria-controls="spaTherapy" role="tab" data-toggle="tab" aria-selected="false">Spa Therapy</a></li>
                            <li class="nav-item"><a class="nav-link" href="#hairTreatment" aria-controls="hairTreatment" role="tab" data-toggle="tab" aria-selected="false">Hair Treatment</a></li>
                            <li class="nav-item"><a class="nav-link" href="#specialOffers" aria-controls="specialOffers" role="tab" data-toggle="tab" aria-selected="false">Special Offers</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- tab-pannel 1 -->
                            <div role="tabpanel" class="tab-pane fade clearfix" id="beautyTreatment">
                                <div class="single-price-list stone-therapy float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Stone Therapy </a><span>$1</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list massage-therapie float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Massage Therapies</a> <span>$65</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list body-bassage float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Body Massage</a> <span>$85</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list pedicure-manicure float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Pedicure & Manicure</a> <span>$32</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                            </div>

                            <!-- tab-pannel 2 -->
                            <div role="tabpanel" class="tab-pane fade clearfix" id="makeUp">
                                <div class="single-price-list stone-therapy float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Stone Therapy </a><span>$101</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list massage-therapie float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Massage Therapies</a> <span>$65</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list body-bassage float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Body Massage</a> <span>$85</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list pedicure-manicure float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Pedicure & Manicure</a> <span>$32</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                            </div>

                            <!-- tab-pannel 3 -->
                            <div role="tabpanel" class="tab-pane fade show active clearfix" id="spaTherapy">
                                <div class="single-price-list stone-therapy float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Stone Therapy </a><span>$15</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list body-bassage float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Body Massage</a> <span>$185</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list massage-therapie float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Massage Therapies</a> <span>$65</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list pedicure-manicure float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Pedicure & Manicure</a> <span>$32</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                            </div>

                            <!-- tab-pannel 4 -->
                            <div role="tabpanel" class="tab-pane fade clearfix" id="hairTreatment">
                                <div class="single-price-list stone-therapy float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Stone Therapy </a><span>$15</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list massage-therapie float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Massage Therapies</a> <span>$605</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list pedicure-manicure float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Pedicure & Manicure</a> <span>$32</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list body-bassage float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Body Massage</a> <span>$850</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                            </div>

                            <!-- tab-pannel 5 -->
                            <div role="tabpanel" class="tab-pane fade clearfix" id="specialOffers">
                                <div class="single-price-list massage-therapie float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Massage Therapies</a> <span>$651</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list stone-therapy float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Stone Therapy </a><span>$101295</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list body-bassage float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Body Massage</a> <span>$845</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                                <div class="single-price-list pedicure-manicure float-left">
                                    <h6><a href="#" class="fw-500 pb-10">Pedicure & Manicure</a> <span>$312</span></h6>
                                    <p class="color-51">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid.</p>
                                </div>
                            </div>
                            <!--/tab-pannel-->
                        </div>
                        <a href="booking.html" class="booking-now">Book A Session Now</a>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
    </section>
    <!-- =======================================
            ==End price list section==
    =======================================-->


    <!-- =======================================
            ==Start Testimonial section==
    =======================================-->
    <section class="testimonial-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-ff fw-500">Testimonials</h3>
                    </div>

                    <div class="testimoial-wrapper owl-carousel">
                        <!--testimonial-1-->
                        <div class="single-testimonial text-center">
                            <a href="#"><img src="{{asset('/')}}images/a3.jpg" alt="author"></a>
                            <p class="testimoinal-txt color-ff pt-25">I just wanted to thank you for providing a great celebration party for me. Your staff did an excellent job and the Makeup was superb. Everyone was impressed.Thanks again!</p>
                            <p class="author color-ff">Thomas Jefferson<span>CEO of TF</span></p>
                        </div>

                        <!--testimonial-2-->
                        <div class="single-testimonial text-center">
                            <a href="#"><img src="{{asset('/')}}images/a1.jpg" alt="author"></a>
                            <p class="testimoinal-txt color-ff pt-25">I just wanted to thank you for providing a great celebration party for me. Your staff did an excellent job and the Makeup was superb. Everyone was impressed.Thanks again!</p>
                            <p class="author color-ff">Thomas Jefferson<span>CEO of TF</span></p>
                        </div>

                        <!--testimonial-3-->
                        <div class="single-testimonial text-center">
                            <a href="#"><img src="{{asset('/')}}images/a2.jpg" alt="author"></a>
                            <p class="testimoinal-txt color-ff pt-25">I just wanted to thank you for providing a great celebration party for me. Your staff did an excellent job and the Makeup was superb. Everyone was impressed.Thanks again!</p>
                            <p class="author color-ff">Thomas Jefferson<span>CEO of TF</span></p>
                        </div>
                        <!--/testimonial-->
                    </div>
                    <!--/testimoial wrapper-->
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- =======================================
            ==End Testimonial section==
    =======================================-->


    <!-- =======================================
            ==Start Blog section==
    =======================================-->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Blog</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
                <!--blog 1-->
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="blog-details.html"><img src="{{asset('/')}}images/a1.jpg" alt="blog img" class="img-fluid"></a>
                            </div>
                            <ul class="brand">
                                <li><i class="fa fa-heart"></i>18</li>
                                <li><i class="fa fa-commenting-o"></i>10</li>
                                <li><i class="fa fa-folder-open"></i>Makeup Tips</li>
                                <li class="gallery"><i class="fa fa-picture-o"></i></li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <a href="blog-details.html" class="title fw-500 pt-20">Nivea for men’s sensitive hydro gel the perfect cure.</a>
                            <p class="ptb-20">The power of golden ratio typography cannot be understated. By choosing the line-height of your primary text.</p>
                            <a href="blog-details.html" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!--blog 2-->
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="blog-details.html"><img src="{{asset('/')}}images/a2.jpg" alt="blog img" class="img-fluid"></a>
                            </div>
                            <ul class="brand">
                                <li><i class="fa fa-heart"></i>18</li>
                                <li><i class="fa fa-commenting-o"></i>10</li>
                                <li><i class="fa fa-folder-open"></i>Body Message</li>
                                <li class="gallery"><i class="fa fa-play-circle"></i></li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <a href="blog-details.html" class="title fw-500 pt-20">Nivea for men’s sensitive hydro gel the perfect cure.</a>
                            <p class="ptb-20">The power of golden ratio typography cannot be understated. By choosing the line-height of your primary text.</p>
                            <a href="blog-details.html" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!--blog 3-->
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="blog-details.html"><img src="{{asset('/')}}images/a3.jpg" alt="blog img" class="img-fluid"></a>
                            </div>
                            <ul class="brand">
                                <li><i class="fa fa-heart"></i>18</li>
                                <li><i class="fa fa-commenting-o"></i>10</li>
                                <li><i class="fa fa-folder-open"></i>Spa Tips</li>
                                <li class="gallery"><i class="fa fa-picture-o"></i></li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <a href="blog-details.html" class="title fw-500 pt-20">Nivea for men’s sensitive hydro gel the perfect cure.</a>
                            <p class="ptb-20">The power of golden ratio typography cannot be understated. By choosing the line-height of your primary text.</p>
                            <a href="blog-details.html" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
    </section>
    <!-- =======================================
            ==End blog section==
    =======================================-->


    <!-- =======================================
            ==Start google map section==
    =======================================-->
    <section class="google-map-section">
        <div id="map" class="mapHome1"></div>
    </section>
    <!-- =======================================
            ==End google map section==
    =======================================-->


    <!-- =======================================
            ==Start call to action section==
    =======================================-->
    <section class="cta-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <p>Book a session and get up to <span class="color-d5">25%</span> discount!</p>
                        <a href="booking.html">Book A Session Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================================
            ==End call to action section==
    =======================================-->

@endsection
