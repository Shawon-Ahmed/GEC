@extends('frontend.layout.template')

@section('header-title')
    <title>Projects | Greenhouse Engeneering & Consultency, Greenhouse construction engineering</title>
@endsection	

@section('body-content')
<div role="main" class="main">
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- Project</h1>
                    <span class="d-block text-4">Successful Projects</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="active">Project</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-1 pb-4 mb-3">
            <div class="col">

                <ul class="nav nav-pills sort-source mb-4" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link active btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Show All</a></li>
                    <li class="nav-item" data-option-value=".economic"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Economic</a></li>
                    <li class="nav-item" data-option-value=".strategic"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Strategic</a></li>
                    <li class="nav-item" data-option-value=".tech"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Tech</a></li>
                </ul>

                <div class="sort-destination-loader sort-destination-loader-loaded">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio" data-filter="*" style="position: relative; height: 1105.66px;">
                        <div class="col-lg-4 isotope-item economic" style="position: absolute; left: 0px; top: 0px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-1.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                        <span class="custom-thumb-info-title">
                                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Finance</span>
                                            <span class="custom-thumb-info-desc font-weight-light">Okler Themes</span>
                                        </span>
                                        <span class="custom-arrow"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 isotope-item economic" style="position: absolute; left: 379.99px; top: 0px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-2.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                        <span class="custom-thumb-info-title">
                                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Restructuring</span>
                                            <span class="custom-thumb-info-desc font-weight-light">Envato</span>
                                        </span>
                                        <span class="custom-arrow"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 isotope-item strategic" style="position: absolute; left: 759.98px; top: 0px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-3.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                        <span class="custom-thumb-info-title">
                                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Economic Consultanting</span>
                                            <span class="custom-thumb-info-desc font-weight-light">Porto</span>
                                        </span>
                                        <span class="custom-arrow"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 isotope-item tech" style="position: absolute; left: 0px; top: 368.552px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-4.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                        <span class="custom-thumb-info-title">
                                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Tech Consulting</span>
                                            <span class="custom-thumb-info-desc font-weight-light">GetCustom</span>
                                        </span>
                                        <span class="custom-arrow"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 isotope-item economic" style="position: absolute; left: 379.99px; top: 368.552px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-4.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                        <span class="custom-thumb-info-title">
                                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Strategic</span>
                                            <span class="custom-thumb-info-desc font-weight-light">Jet Orange</span>
                                        </span>
                                        <span class="custom-arrow"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 isotope-item strategic" style="position: absolute; left: 759.98px; top: 368.552px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-1.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                        <span class="custom-thumb-info-title">
                                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Litigation</span>
                                            <span class="custom-thumb-info-desc font-weight-light">Paradoxx</span>
                                        </span>
                                        <span class="custom-arrow"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 isotope-item economic" style="position: absolute; left: 0px; top: 737.104px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-2.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                        <span class="custom-thumb-info-title">
                                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Consulting</span>
                                            <span class="custom-thumb-info-desc font-weight-light">iMessenger</span>
                                        </span>
                                        <span class="custom-arrow"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 isotope-item tech" style="position: absolute; left: 379.99px; top: 737.104px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-3.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                        <span class="custom-thumb-info-title">
                                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Brand Consulting</span>
                                            <span class="custom-thumb-info-desc font-weight-light">Theme Forest</span>
                                        </span>
                                        <span class="custom-arrow"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 isotope-item economic" style="position: absolute; left: 759.98px; top: 737.104px;">
                            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper m-0">
                                        <img src="img/demos/business-consulting/cases/case-4.jpg" class="img-fluid" alt="">
                                    </span>
                                    <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
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
                <div class="bounce-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>

            </div>
        </div>
    </div>
</div>
@endsection