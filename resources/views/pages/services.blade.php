@extends('layouts.index')

@section('content')

@include('partial.preloader')

<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active"><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->


<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Services</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Services</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->


<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark" id="servicePaginate">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach($services->reverse() as $service)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$service->icon}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$service->title}}</h2>
                        <p>{{$service->text}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-12 d-flex justify-content-center">
            {{$services->links()}}
        </div>
    </div>
</div>
<!-- services section end -->


<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and  discover the world</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-002-caliper"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-019-coffee-cup"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-020-creativity"></i>
                    </div>
                </div>
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-037-idea"></i>
                    </div>
                    <div class="service-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-025-imagination"></i>
                    </div>
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-008-team"></i>
                    </div>
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="img/card-1.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="img/card-2.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-md-4 col-sm-12">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="img/card-3.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services card section end-->

@include('partial.newsletter')

<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                <p class="con-item">0034 37483 2445 322</p>
                <p class="con-item">hello@company.com</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->

@include('partial.footer')
    
@endsection