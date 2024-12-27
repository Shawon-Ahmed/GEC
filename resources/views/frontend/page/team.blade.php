@extends('frontend.layout.template')

@section('header-title')
    <title>Teams | Greenhouse Engineering and Construction Engineering Consultency</title>
@endsection	

@section('body-content')
<div role="main" class="main">
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header mb-0">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- Team</h1>
                    <span class="d-block text-4">Meet our professionals</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                        <li><a href="{{ route('homepage' )}}">Home</a></li>
                        <li class="active">Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-secondary custom-section-padding">
        <div class="container">
            <div class="row">
                <div class="col">

                    <ul class="nav nav-pills sort-source mb-4" data-sort-id="team" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                        <li class="nav-item active" data-option-value="*"><a class="active btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Show All</a></li>
                        <li class="nav-item" data-option-value=".leadership"><a class="btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Leadership</a></li>
                        <li class="nav-item" data-option-value=".other"><a class="btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Other</a></li>
                    </ul>

                    <div class="row team-list sort-destination" data-sort-id="team" data-filter="*" style="position: relative; height: 969.312px;">
                        <div class="col-md-4 isotope-item leadership" style="position: absolute; left: 0px; top: 0px;">
                            <div class="team-item mb-4 p-0 pb-2">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="img/demos/business-consulting/team/team-1.jpg" alt="" class="img-fluid">
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
                        <div class="col-md-4 isotope-item other" style="position: absolute; left: 379.99px; top: 0px;">
                            <div class="team-item mb-4 p-0 pb-2">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="img/demos/business-consulting/team/team-2.jpg" alt="" class="img-fluid">
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
                        <div class="col-md-4 isotope-item other" style="position: absolute; left: 759.98px; top: 0px;">
                            <div class="team-item mb-4 p-0 pb-2">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="img/demos/business-consulting/team/team-3.jpg" alt="" class="img-fluid">
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
                        <div class="col-md-4 isotope-item other" style="position: absolute; left: 0px; top: 484.656px;">
                            <div class="team-item mb-4 p-0 pb-2">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="img/demos/business-consulting/team/team-4.jpg" alt="" class="img-fluid">
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
                        <div class="col-md-4 isotope-item other" style="position: absolute; left: 379.99px; top: 484.656px;">
                            <div class="team-item mb-4 p-0 pb-2">
                                <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="image-wrapper">
                                        <img src="img/demos/business-consulting/team/team-5.jpg" alt="" class="img-fluid">
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
        </div>
    </section>
</div>
@endsection