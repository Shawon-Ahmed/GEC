@extends('frontend.layout.template')

@section('header-title')
    <title>Blogs | Greenhouse Engineering and Construction Engineering Consultency</title>
@endsection	

@section('body-content')
<div role="main" class="main">
				
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- Blog</h1>
                    <span class="d-block text-4">Lastest News</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-1 pb-5 mb-3">
            <div class="col">

                <div class="row mt-2 mb-2">
                    <article class="blog-post col">
                        <div class="row">
                            <div class="col-sm-8 col-lg-5">
                                <div class="blog-post-image-wrapper">
                                    <a href="demo-business-consulting-blog-detail.html" title="Read More">
                                        <img src="img/demos/business-consulting/blog/blog-1.jpg" alt class="img-fluid mb-4" />
                                    </a>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vi...</p>
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
                                <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-5" href="demo-business-consulting-blog-detail.html" title="Read More">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>

                <hr class="solid tall mt-5">

                <div class="row mt-2 mb-2">
                    <article class="blog-post col">
                        <div class="row">
                            <div class="col-sm-8 col-lg-5">
                                <div class="blog-post-image-wrapper">
                                    <a href="demo-business-consulting-blog-detail.html" title="Read More">
                                        <img src="img/demos/business-consulting/blog/blog-2.jpg" alt class="img-fluid mb-4" />
                                    </a>
                                    <span class="blog-post-date bg-color-primary text-color-light font-weight-bold">
                                        20
                                        <span class="month-year font-weight-light">
                                            Oct-16
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-7">
                                <h2> Starting a Business</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vi...</p>
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
                                <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-5" href="demo-business-consulting-blog-detail.html" title="Read More">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>

                <hr class="solid tall mt-5">

                <div class="row mt-2 mb-2">
                    <article class="blog-post col">
                        <div class="row">
                            <div class="col-sm-8 col-lg-5">
                                <div class="blog-post-image-wrapper">
                                    <a href="demo-business-consulting-blog-detail.html" title="Read More">
                                        <img src="img/demos/business-consulting/blog/blog-3.jpg" alt class="img-fluid mb-4" />
                                    </a>
                                    <span class="blog-post-date bg-color-primary text-color-light font-weight-bold">
                                        20
                                        <span class="month-year font-weight-light">
                                            Oct-16
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-7">
                                <h2> Getting Ready</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vi...</p>
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
                                <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-5" href="demo-business-consulting-blog-detail.html" title="Read More">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection