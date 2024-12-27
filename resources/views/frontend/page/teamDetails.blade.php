@extends('frontend.layout.template')

@section('header-title')
    <title>Teams | Greenhouse Engineering and Construction Engineering Consultency</title>
@endsection	

@section('body-content')
<div role="main" class="main">
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- John Doe</h1>
                    <span class="d-block text-4">CEO &amp; Founder</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li><a href="{{ route('team') }}">Team</a></li>
                        <li class="active">John Doe</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-1 pb-4 mb-3">
            <div class="col">

                <div class="row mb-4">
                    <div class="col-md-3 text-center">
                        <div class="team-item">
                            <span class="image-wrapper">
                                <img src="img/demos/business-consulting/team/team-1.jpg" alt="" class="img-fluid">
                            </span>
                            <div class="team-infos">
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                    <div class="share-icons bg-color-light">
                                        <a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h1 class="mt-0 mb-0">- John Doe</h1>
                        <p class="lead ml-4 pt-1">CEO &amp; Founder</p>

                        <p class="lead">Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis.</p>

                        <ul class="list list-icons">
                            <li><i class="icon-phone icons"></i> <strong>Phone:</strong> (123) 456-789</li>
                            <li><i class="icon-envelope icons"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">

                        <p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                        <p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection