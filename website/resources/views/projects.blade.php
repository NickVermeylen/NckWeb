@extends('layouts.app')

@section('content')
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">- Services -</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icons"><img class="icons" src="{{asset('/img/laptop.png')}}"></div>
                    <h4 class="service-heading">- Webdesign -</h4>
                    <p class="text-muted">Fris & kwalitatief webdesign</br>HTML5, CSS3, JS, jQuery</p>
                    <p class="text-muted"><br></p>
                </div>
                <div class="col-md-4">
                    <div class="icons"><img class="icons" src="{{asset('/img/webservices.png')}}"></div>
                    <h4 class="service-heading">- Webservices -</h4>
                    <p class="text-muted">Kleine WebbApps opgebouwd in PHP - Laravel framework</p>
                    <p class="text-muted"> <br></p>
                </div>
                <div class="col-md-4">
                    <div class="icons"><img class="icons" src="{{asset('/img/designer.png')}}"></div>
                    <h4 class="service-heading">- Grafisch Design -</h4>
                    <p class="text-muted">Modern design van drukwerken </br>naamkaartjes, advertenties, banners</p>
                    <p class="text-muted"> <br></p>
                </div>
                <div class="col-md-4">
                    <div class="icons"><img class="icons" src="{{asset('/img/embedded.png')}}"></div>
                    <h4 class="service-heading">- Embedded Systems -</h4>
                    <p class="text-muted">Custom embedded systemen op basis van ARM technologiën</p>
                </div>
                <div class="col-md-4">
                    <div class="icons"><img class="icons" src="{{asset('/img/ccode.png')}}"></div>
                    <h4 class="service-heading">- C/C++ applicaties -</h4>
                    <p class="text-muted">Op maat gemaakte C/C++ applicaties met of zonder GUI</p>
                </div>
                <div class="col-md-4">
                    <div class="icons"><img class="icons" src="{{asset('/img/laptop.png')}}"></div>
                    <h4 class="service-heading">- Embedded Systems -</h4>
                    <p class="text-muted">Custom embedded systemen op basis van ARM technologiën</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">- Projects -</h2>
                    <h3 class="section-subheading text-muted">Een mix van persoonlijke- en schoolprojecten</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('img/SIM.jpg')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sound Impulse Marker</h4>
                        <p class="text-muted">Embedded System</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('img/SIM.jpg')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Aksent Bed-Collection</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('img/SIM.jpg')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('img/SIM.jpg')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('img/SIM.jpg')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('img/SIM.jpg')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection