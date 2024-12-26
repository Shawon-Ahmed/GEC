@extends('frontend.layout.template')

@section('header-title')
    <title>Contact-us | Greenhouse Engineering and Construction Engineering Consultency</title>
@endsection	

@section('body-content')
<div role="main" class="main">
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- Contact Us</h1>
                    <span class="d-block text-4">Send us a Message or Call Us</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                        <li><a href="demo-business-consulting.html">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-1 pb-4 mb-3">
            <div class="col-lg-8">

                <h2 class="font-weight-bold text-color-dark">- Send a Message</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae.</p>

                <form class="contact-form custom-contact-form-style-1" action="php/contact-form.php" method="POST" novalidate="novalidate">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <input type="hidden" name="subject" value="Contact Message Received">
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <i class="icon-user icons text-color-primary"></i>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name*" required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <i class="icon-envelope icons text-color-primary"></i>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email*" required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <i class="icon-bubble icons text-color-primary"></i>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-4" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">

                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-location-pin icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Address</h2>
                                <p class="text-4">
                                    123 Porto Blvd, Suite 100<br>
                                    New York, NY
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-phone icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Phone</h2>
                                <p class="text-4">
                                    123-456-7890 <br>
                                    123-456-7891
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-envelope icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Email</h2>
                                <p class="text-4">
                                    <a href="mailto:mail@example.com" class="text-decoration-none">mail@example.com</a><br>
                                    <a href="mailto:mail2@example.com" class="text-decoration-none">mail2@example.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map mt-4 mb-0" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" alt="" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>


</div>
@endsection