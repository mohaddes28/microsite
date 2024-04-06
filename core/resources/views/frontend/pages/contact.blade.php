@extends('frontend.master')

@section('title')
   Contact Us
@endsection
@section('meta_description')
    Contact us for any inquiries or feedback regarding our services. We are here to help you grow your online presence. Get in touch with us today!
@endsection

@section('content')

    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area bg-gray d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content text-center">
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->

    <!--====== Contact Area Start ======-->
    <section id="contact" class="contact-area ptb_50">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Section Heading -->
                    <div class="section-heading">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                <span class="text-primary">Stay</span>
                                Tuned
                            </span>
                        <h2>Don't hesitate to contact us</h2>
                        <p class="d-none d-sm-block mt-4">
                            Contact us for a hassle-free experience.
                            <br>
                            We're here to listen to your suggestions, address any concerns, and provide top-notch service.
                            <br>
                            Simply send us a message and we'll respond promptly.
                            <br>
                            OR Email us directly at <a class="text-primary" href="mailto:contact@youtubeproapk.com">contact@youtubeproapk.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-12 col-md-5">
                    <!-- Contact Us -->
                    <div class="contact-us">
                        <img src="{{ asset('frontend/assets/images/youtube-pro-apk-contact.png') }}" alt="youtube pro apk contact">
                    </div>
                </div>
                <div class="col-12 col-md-6 pt-4 pt-md-0">
                    <!-- Contact Box -->
                    <div class="contact-box text-center">
                        <!-- Contact Form -->
                        @if(!empty(session('success')))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Thank you for contacting us.</strong>
                                <p>We appreciate that you've taken the time to write us.</p>
                                <p>We'll get back to you very soon</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="{{ route('frontend/contact/sent') }}" method="post" name="myForm" id="myForm" >
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="comments" placeholder="Message" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-lg btn-block mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Area End ======-->
@endsection
