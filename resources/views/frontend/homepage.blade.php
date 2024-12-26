@extends('frontend.layout.template')

@section('header-title')
    <title>Homepage | Greenhouse Engeneering & Consultency, Greenhouse construction engineering</title>
@endsection	

@section('body-content')
<div role="main" class="main">
				
    <div class="slider-container rev_slider_wrapper" style="height: 100%;">
        <div style="text-align: center;" id="revolutionSlider" class="slider rev_slider manual align-items-center" data-version="5.4.8">
            <ul>
                <li data-transition="fade">
                    <img src="{{ asset('frontend/img/slides/slider5.jpg') }}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        data-bgparallax="1" 
                        class="rev-slidebg">

                    <h1 style="text-shadow:1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue; font-size:32px;" class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                        data-y="center" data-voffset="['-80','-80','-80','-40']"
                        data-start="800"
                        data-transform_in="y:[-300%];opacity:0;s:500;">Welcome to</h1>

                    <div style="text-shadow:1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue; font-size:42px;" class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                        data-y="center" data-voffset="['-42','-42','-42','2']"
                        data-start="800"
                        data-transform_in="y:[-300%];opacity:0;s:500;">Greenhouse Engineering & Consultancy</div>

                    <a href="#about-us" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                        data-hash
                        data-hash-offset="85"
                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                        data-y="center" data-voffset="['60','60','60','100']"
                        data-start="1500"
                        style="font-size: 12px; padding: 15px 6px;"
                        data-transform_in="y:[-300%];opacity:0;s:500;">Get Started</a>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('frontend/img/slides/slider3.jpg') }}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        data-bgparallax="1" 
                        class="rev-slidebg">

                    <h1 style="text-shadow:1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue; font-size:32px;" class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                        data-y="center" data-voffset="['-80','-80','-80','-40']"
                        data-start="800"
                        data-transform_in="y:[-300%];opacity:0;s:500;">Solutions for</h1>

                    <div style="text-shadow:1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue; font-size:42px;" class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                        data-y="center" data-voffset="['-42','-42','-42','2']"
                        data-start="800"
                        data-transform_in="y:[-300%];opacity:0;s:500;">Greenhouse & Construction Plans</div>

                    <a href="#about-us" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                        data-hash
                        data-hash-offset="85"
                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                        data-y="center" data-voffset="['60','60','60','100']"
                        data-start="1500"
                        style="font-size: 12px; padding: 15px 6px;"
                        data-transform_in="y:[-300%];opacity:0;s:500;">Get Started</a>
                </li>
            </ul>
        </div>
    </div>

    <section class="looking-for custom-position-1 custom-md-border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <div class="looking-for-box">
                        <h2 style="text-shadow:1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue; font-size:12;">- <span class="text-1 custom-secondary-font">Are you looking for</span><br>
                        Experts in Greenhouse and Construction Engineering Consulting?</h2>
                        <!-- <p>Schedule your company strategy right session now</p> -->
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
                    <a class="text-decoration-none" href="tel:+8801771004498" target="_blank" title="Call Us Now">
                        <span class="custom-call-to-action">
                            <span class="action-title text-color-primary">Call Us Now</span>
                            <span style="text-shadow:1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;" class="action-info text-color-light">+88 01771 004498</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <a class="text-decoration-none" href="mail:salam105.cel@gmail.com" target="_blank" title="Email Us Now">
                        <span class="custom-call-to-action">
                            <span class="action-title text-color-primary">Email Us Now</span>
                            <span style="text-shadow:1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;" class="action-info text-color-light">salam105.cel@gmail.com</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us custom-section-padding" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <h2 class="font-weight-bold text-color-dark">- About Us</h2>
                    <p class="pl-4">At Greenhouse Engineering & Consultants, we are industry leaders in construction, engineering, and consulting services. With a focus on innovation and sustainability, we provide tailored solutions in construction engineering, greenhouse development, civil engineering, architecture, and consultancy services. Our team of experts ensures every project is delivered with precision, quality, and care, building trust and long-term partnerships with our clients.
                     Our mission is to deliver world-class engineering and consulting services that empower our clients to achieve their goals while fostering a greener, more sustainable future.</p>
                        <div class="pl-4">
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <ul class="list list-icons list-icons-style-3 list-tertiary">
                                    <li><i class="fas fa-chevron-right"></i> Certified Professionals</li>
                                    <li><i class="fas fa-chevron-right"></i> Former Chief Executives</li>
                                    <li><i class="fas fa-chevron-right"></i> Real Estate Professionals</li>
                                </ul>	
                            </div>
                            <div class="col-lg-6">
                                <ul class="list list-icons list-icons-style-3 list-tertiary">
                                    <li><i class="fas fa-chevron-right"></i> Nobel Laureate Economists</li>
                                    <li><i class="fas fa-chevron-right"></i> Former Political Leaders</li>
                                    <li><i class="fas fa-chevron-right"></i> Chartered Financial Analysts</li>
                                </ul>
                            </div>
                        </div> -->
                        <a class="btn btn-outline custom-border-width btn-primary mt-3 mb-2 custom-border-radius font-weight-semibold text-uppercase" href="demo-business-consulting-about-us.html">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="content-grid custom-content-grid mt-5 mb-4">
                        <div class="row content-grid-row">
                            <div class="content-grid-item col-lg-6 bg-color-light p-4">
                                <div class="counters">
                                    <div class="counter custom-sm-counter-style">
                                        <img class="counter-icon" src="img/demos/business-consulting/icons/icon-1.png" alt />
                                        <strong class="text-color-primary custom-primary-font" data-to="10" data-append="+">0</strong>
                                        <label>Years in Business</label>
                                    </div>
                                </div>	
                            </div>
                            <div class="content-grid-item col-lg-6 p-4">
                                <div class="counters">
                                    <div class="counter margin-style-2 custom-sm-counter-style">
                                        <img class="counter-icon" src="img/demos/business-consulting/icons/icon-2.png" alt />
                                        <strong class="text-color-primary custom-primary-font" data-to="1130" data-append="+">0</strong>
                                        <label>Successfull Cases</label>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="row content-grid-row">
                            <div class="content-grid-item col-lg-6 p-4">
                                <div class="counters">
                                    <div class="counter custom-sm-counter-style">
                                        <img class="counter-icon" src="img/demos/business-consulting/icons/icon-3.png" alt />
                                        <strong class="text-color-primary custom-primary-font" data-to="155" data-append="+">0</strong>
                                        <label>Satisfied Clients</label>
                                    </div>
                                </div>	
                            </div>
                            <div class="content-grid-item col-lg-6 bg-color-light p-4">
                                <div class="counters">
                                    <div class="counter margin-style-2 custom-sm-counter-style">
                                        <img class="counter-icon" src="img/demos/business-consulting/icons/icon-4.png" alt />
                                        <strong class="text-color-primary custom-primary-font" data-to="88" data-append="+">0</strong>
                                        <label>Pro Consultants</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-secondary custom-section-padding">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="font-weight-bold text-color-dark mb-3">- Expertises</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                        <div class="feature-box custom-feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <img src="img/demos/business-consulting/expertise/expertise-1.jpg" alt="">
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="font-weight-normal text-5">Greenhouse Design and Engineering</h4>
                                <p class="text-2">We offer customized greenhouse designs using advanced technologies to optimize growth conditions.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
                        <div class="feature-box custom-feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <img src="img/demos/business-consulting/expertise/expertise-2.jpg" alt="">
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="font-weight-normal text-5">Construction Management</h4>
                                <p class="text-2">With years of experience, we oversee the entire construction process, ensuring timely and quality delivery.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                        <div class="feature-box custom-feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <img src="img/demos/business-consulting/expertise/expertise-3.jpg" alt="">
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="font-weight-normal text-5">Consulting Services</h4>
                                <p class="text-2">Our expert consultants provide valuable insights to enhance project efficiency and sustainability.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                        <div class="feature-box custom-feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <img src="img/demos/business-consulting/expertise/expertise-4.jpg" alt="">
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="font-weight-normal text-5">Litigation Consulting</h4>
                                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
                        <div class="feature-box custom-feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <img src="img/demos/business-consulting/expertise/expertise-5.jpg" alt="">
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="font-weight-normal text-5">Strategic Consulting</h4>
                                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="500">
                        <div class="feature-box custom-feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <img src="img/demos/business-consulting/expertise/expertise-6.jpg" alt="">
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="font-weight-normal text-5">Tech Consulting</h4>
                                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-3" href="demo-business-consulting-expertise.html" title="View All">View All</a>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-section-padding">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-color-dark">- Our Strategy</h2>
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots pl-1 pr-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                        <div>
                            <div class="custom-step-item">
                                <span class="step text-uppercase">
                                    Step
                                    <span class="step-number text-color-primary">
                                        01
                                    </span>
                                </span>
                                <div class="step-content">
                                    <h4 class="mb-3">The first meeting<br> <strong>Understanding the Problem</strong></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-step-item">
                                <span class="step text-uppercase">
                                    Step
                                    <span class="step-number text-color-primary">
                                        02
                                    </span>
                                </span>
                                <div class="step-content">
                                    <h4 class="mb-3">The second meeting<br> <strong>Business Plan Consultant</strong></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-step-item">
                                <span class="step text-uppercase">
                                    Step
                                    <span class="step-number text-color-primary">
                                        03
                                    </span>
                                </span>
                                <div class="step-content">
                                    <h4 class="mb-3">The final meeting<br> <strong>Problem Solved</strong></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-color-dark">- Frequently asked questions</h2>
                    <div class="accordion without-bg custom-accordion-style-1" id="accordion7">
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7One" aria-expanded="true">
                                    What are the key markets for greenhouse and construction engineering businesses?
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7One" class="collapse show" aria-expanded="true">
                                <div class="card-body">
                                    <p>Greenhouse: Agricultural farms, nurseries, urban farming projects, and research institutions.
                                    Construction Engineering: Residential, commercial, and industrial sectors; government infrastructure projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
                                        How can I make my business stand out?
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7Two" class="collapse" aria-expanded="false" style="height: 0px;">
                                <div class="card-body">
                                    <p>Focus on innovation (e.g., smart greenhouse systems, energy-efficient buildings).
                                    Offer customized solutions tailored to client needs.
                                    Provide excellent customer service and post-project support.
                                    Obtain certifications like LEED (Leadership in Energy and Environmental Design) for sustainable practices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
                                        What certifications or licenses are needed?
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7Three" class="collapse" aria-expanded="false" style="height: 0px;">
                                <div class="card-body">
                                    <p>Greenhouse Engineering:
                                    Contractor’s license (if constructing greenhouses).
                                    Environmental certifications for sustainable practices.
                                    Construction Engineering:
                                    Professional engineer (PE) license.
                                    Construction permits and safety certifications.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
                                    How can I market my business effectively?
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7Four" class="collapse" aria-expanded="false" style="height: 0px;">
                                <div class="card-body">
                                    <p>Build a professional website showcasing your services and projects.
                                    Use social media platforms to reach a broader audience.
                                    Attend industry trade shows and conferences.
                                    Network with agricultural businesses, real estate developers, and local governments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-secondary custom-section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-color-dark mb-3">- Our Cases</h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 custom-dots-style-1 custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 6, 'loop': false, 'dots': true, 'nav': false}">
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-1.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Finance</span>
                                <span class="custom-thumb-info-desc font-weight-light">Okler</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-2.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Restructuring</span>
                                <span class="custom-thumb-info-desc font-weight-light">Envato</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-3.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Economic Consultanting</span>
                                <span class="custom-thumb-info-desc font-weight-light">Porto</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-4.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Tech Consulting</span>
                                <span class="custom-thumb-info-desc font-weight-light">GetCustom</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-5.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Strategic</span>
                                <span class="custom-thumb-info-desc font-weight-light">Jet Orange</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-1.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Litigation</span>
                                <span class="custom-thumb-info-desc font-weight-light">Paradoxx</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-2.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Consulting</span>
                                <span class="custom-thumb-info-desc font-weight-light">iMessenger</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-3.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Brand Consulting</span>
                                <span class="custom-thumb-info-desc font-weight-light">Theme Forest</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div>
                <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                    <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper m-0">
                            <img src="{{ asset('frontend/img/demos/business-consulting/cases/case-4.jpg') }}" class="img-fluid" alt="">
                        </span>
                        <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                            <span class="custom-thumb-info-title">
                                <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Consulting</span>
                                <span class="custom-thumb-info-desc font-weight-light">Tucson</span>
                            </span>
                            <span class="custom-arrow"></span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="custom-section-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-color-dark">- Testimonials</h2>
                </div>
            </div>
            <div class="row">						
                <div class="col">
                    <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                        <div class="row">
                            <div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
                                <img src="img/demos/business-consulting/testimonials/testimonial-author-2.jpg" alt class="img-fluid custom-rounded-image" />
                            </div>
                            <div class="col-12 col-sm-12 col-lg-10">
                                <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                    <blockquote class="pb-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                    </blockquote>
                                    <div class="testimonial-author float-left">
                                        <p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
                                <img src="img/demos/business-consulting/testimonials/testimonial-author-3.jpg" alt class="img-fluid custom-rounded-image" />
                            </div>
                            <div class="col-12 col-sm-12 col-lg-10">
                                <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                    <blockquote class="pb-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                    </blockquote>
                                    <div class="testimonial-author float-left">
                                        <p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-secondary custom-section-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-color-dark">- Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 4, 'margin': 20, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                        <div>
                            <div class="team-item p-0">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="{{ asset('frontend/img/demos/business-consulting/team/team-1.jpg') }}" alt="" class="img-fluid" />
                                    </span>
                                </a>
                                <div class="team-infos">
                                    <div class="share">
                                        <i class="fas fa-share-alt"></i>
                                        <div class="share-icons bg-color-light">
                                            <a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                        <span class="team-member-name text-color-dark font-weight-semibold text-4">John Doe</span>
                                        <span class="team-member-desc font-weight-light">CEO</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="team-item p-0">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="{{ asset('frontend/img/demos/business-consulting/team/team-2.jpg') }}" alt="" class="img-fluid" />
                                    </span>
                                </a>
                                <div class="team-infos">
                                    <div class="share">
                                        <i class="fas fa-share-alt"></i>
                                        <div class="share-icons bg-color-light">
                                            <a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                        <span class="team-member-name text-color-dark font-weight-semibold text-4">Joyce Doe</span>
                                        <span class="team-member-desc font-weight-light">Finance Expert</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="team-item p-0">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="{{ asset('frontend/img/demos/business-consulting/team/team-3.jpg') }}" alt="" class="img-fluid" />
                                    </span>
                                </a>
                                <div class="team-infos">
                                    <div class="share">
                                        <i class="fas fa-share-alt"></i>
                                        <div class="share-icons bg-color-light">
                                            <a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                        <span class="team-member-name text-color-dark font-weight-semibold text-4">Donald Doe</span>
                                        <span class="team-member-desc font-weight-light">Manufacturing</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="team-item p-0">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="{{ asset('frontend/img/demos/business-consulting/team/team-4.jpg') }}" alt="" class="img-fluid" />
                                    </span>
                                </a>
                                <div class="team-infos">
                                    <div class="share">
                                        <i class="fas fa-share-alt"></i>
                                        <div class="share-icons bg-color-light">
                                            <a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                        <span class="team-member-name text-color-dark font-weight-semibold text-4">Jerry Doe</span>
                                        <span class="team-member-desc font-weight-light">Project Manager</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="team-item p-0">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="{{ asset('frontend/img/demos/business-consulting/team/team-5.jpg') }}" alt="" class="img-fluid" />
                                    </span>
                                </a>
                                <div class="team-infos">
                                    <div class="share">
                                        <i class="fas fa-share-alt"></i>
                                        <div class="share-icons bg-color-light">
                                            <a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                        <span class="team-member-name text-color-dark font-weight-semibold text-4">Tom Doe</span>
                                        <span class="team-member-desc font-weight-light">Business Development</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col">
                    <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" href="demo-business-consulting-team.html">View All</a>
                </div>
            </div>
        </div>
    </section>

    <section class="looking-for section-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <div class="looking-for-box">
                        <h2>- <span class="text-1 custom-secondary-font">Are you looking for</span><br>
                        Experts in Greenhouse and Construction Engineering Consulting?</h2>
                        <!-- <p class="mb-4 mb-md-0">Schedule your company strategy right session now</p> -->
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
                    <a class="text-decoration-none" href="tel:+8801771004489" target="_blank" title="Call Us Now">
                        <span class="custom-call-to-action white-border text-color-light">
                            <span class="action-title">Call Us Now</span>
                            <span class="action-info">+88 01771 004498</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <a class="text-decoration-none" href="mail:salam105.cel@gmail.com" target="_blank" title="Email Us Now">
                        <span class="custom-call-to-action white-border text-color-light">
                            <span class="action-title">Email Us Now</span>
                            <span class="action-info">salam105.cel@gmail.com</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-section-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-color-dark">- Our Blog</h2>
                </div>
            </div>
            <div class="row">
                <article class="blog-post col">
                    <div class="row">
                        <div class="col-sm-8 col-lg-5">
                            <div class="blog-post-image-wrapper">
                                <img src="{{ asset('frontend/img/demos/business-consulting/blog/blog-1.jpg') }}" alt class="img-fluid mb-4" />
                                <span class="blog-post-date bg-color-primary text-color-light font-weight-bold">
                                    20
                                    <span class="month-year font-weight-light">
                                        Oct-16
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-7">
                            <h2> Global Opportunities</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vi.</p>
                            <hr class="solid">
                            <div class="post-infos d-flex">
                                <span class="info posted-by">
                                    Posted by:
                                    <span class="post-author font-weight-semibold text-color-dark">
                                        John Doe
                                    </span>
                                </span>
                                <span class="info comments ml-5">
                                    Comments:
                                    <span class="comments-number text-color-primary font-weight-semibold">
                                        15
                                    </span>
                                </span>
                                <span class="info like ml-5">
                                    Like:
                                    <span class="like-number font-weight-semibold custom-color-red">
                                        38
                                    </span>
                                </span>
                            </div>
                            <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-4" href="demo-business-consulting-blog-detail.html" title="Read More">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
@endsection