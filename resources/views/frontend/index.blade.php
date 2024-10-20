@extends('frontend.main')
@section('title', 'Homepage')
@section('content')
<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($banner as $index => $banner)
        @if($banner->id)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{asset('storage/banner/'. $banner->image)}}" class="d-block w-100" height="500"
                alt="{{ $banner->title }}">
            <div class="carousel-caption">
                <h2 class="text-capitalize">{{ $banner->title }}</h2>
                <h5 class="text-capitalize">{{ $banner->subtitle }}</h5>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>

<!-- Start About -->
<section id="mu-about">
    <div class="container">
        <div class="row">
            @if (!empty($aboutus))
            <div class="col-md-12">
                <div class="mu-about-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mu-about-left">
                                <img class="" src="{{asset('storage/aboutus/'.$aboutus->image)}}" alt="img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mu-about-right">
                                <h2>Who Are We ?</h2>
                                <p>{!!Str::limit($aboutus->description,395)!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!-- End About -->

<!-- Start Why Us -->
<section id="mu-why-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-why-us-area">
                    <h2>Why Us?</h2>
                    <div class="mu-why-us-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mu-why-us-single">
                                    <div class="my-why-us-single-icon">
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                    </div>
                                    <h3>Luxurious Hotels</h3>
                                    <p>We provide luxurious Hotel for the good sleep and the rest of the
                                        clients.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mu-why-us-single">
                                    <div class="my-why-us-single-icon">
                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    </div>
                                    <h3>The Best Service</h3>
                                    <p>We care about the satisfaction of our clients. Ghumgham nepal provides
                                        the best service for the clients.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mu-why-us-single">
                                    <div class="my-why-us-single-icon">
                                        <i class="fa fa-bus" aria-hidden="true"></i>
                                    </div>
                                    <h3>Unique Experience</h3>
                                    <p>Ghumgham nepal provides the Luxurious vechicle and the joyful views of
                                        seneries along the way through the destination.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Us -->

<!-- Start Video -->
<!-- <section id="mu-video">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-video-area">
                        <h2>Watch Our Recent Trip Video</h2>
                        <p class="mu-title-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                            impedit nostrum porro possimus nesciunt voluptate, id nam. Harum deserunt nobis esse
                            iste voluptatem cumque neque quo sunt velit. Nostrum, provident!</p>

                        <div class="mu-video-content">
                            <iframe width="854" height="480" src="https://www.youtube.com/embed/58K5QL0x6Zo"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- End Video -->

<!-- Start Featured Tours -->
<section id="mu-featured-tours">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-featured-tours-area">
                    <h2>Our Featured Tours</h2>
                    <p class="mu-title-content">We plan for various Destination.</p>

                    <!-- Start Featured Tours content -->
                    <div class="mu-featured-tours-content">
                        <div class="row">
                            @foreach ($destination as $destination)
                            <div class="col-md-4">
                                <div class="mu-featured-tours-single">
                                    <img src="{{asset('storage/destination/'.$destination->image)}}" class="p-img">
                                    <div class="mu-featured-tours-single-info">
                                        <h3>{{$destination->title}}</h3>
                                        <h4>{{$destination->subtitle}}</h4>
                                        <span class="mu-price-tag">NPR {{$destination->price}}</span>
                                        {{-- <p>{!!Str::limit($destination->description,50)!!}</p>   --}}
                                        <a href="#" class="mu-book-now-btn">More info</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Featured Tours content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Tours -->

<!-- Start Client Testimonials -->
<section id="mu-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-testimonials-area">
                    <h2>What Our Travelers Says</h2>

                    <div class="mu-testimonials-block">
                        <ul class="mu-testimonial-slide">
                            @foreach ($testimonial as $testimonial )
                            <li>
                                <i class="fa fa-quote-left mu-client-quote" aria-hidden="true"></i>
                                <p>{!!$testimonial->description!!}</p>
                                <img class="mu-rt-img" src="{{asset('storage/testimonial/'.$testimonial->image)}}"
                                    alt="img">
                                <h5 class="mu-rt-name"> - {{$testimonial->name}} -</h5>
                                <span class="mu-rt-title">{{$testimonial->address}}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Client Testimonials -->

<!-- Start Clients -->
<section id="mu-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-clients-area">
                    <h2>Our Awesome Clients</h2>

                    <!-- Start Clients brand logo -->
                    <div class="mu-clients-slider">

                        <div class="mu-clients-single">
                            <img src="{{asset('frontend/images/akish.jpg')}}" alt="Brand Logo">
                        </div>

                        <div class="mu-clients-single">
                            <img src="{{asset('frontend/images/sagar.jpg')}}" alt="Brand Logo">
                        </div>

                        <div class="mu-clients-single">
                            <img src="{{asset('frontend/images/mahesh.jpg')}}" alt="Brand Logo">
                        </div>

                        <div class="mu-clients-single">
                            <img src="{{asset('frontend/images/saru.jpg')}}" alt="Brand Logo">
                        </div>

                        <div class="mu-clients-single">
                            <img src="{{asset('frontend/images/kriston.jpg')}}" alt="Brand Logo">
                        </div>

                        <div class="mu-clients-single">
                            <img src="{{asset('frontend/images/samir.jpg')}}" alt="Brand Logo">
                        </div>

                        <div class="mu-clients-single">
                            <img src="{{asset('frontend/images/pushpa.jpg')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <!-- End Clients brand logo -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients -->

<!-- Start Call to Action -->
{{-- <section id="mu-callto-action">
    <div class="container">
        <div class="row col-md-12">
            <div class="mu-callto-action-area">
                <h2>Explore the world by making journey with us</h2>
                <a class="mu-book-now-btn" href="9849479294">Start Journey</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- Start Call to Action -->

<!-- Start Contact -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <h2>Contact Us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever</p>

                    <!-- Start Contact Content -->
                    <div class="mu-contact-content">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mu-contact-form-area">
                                    <div id="form-messages"></div>
                                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name" id="name"
                                                        name="name" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Enter Email"
                                                        id="email" name="email" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Subject"
                                                id="subject" name="subject" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Message" id="message"
                                                name="message" required></textarea>
                                        </div>
                                        <button type="submit" class="mu-send-msg-btn"><span>Send
                                                Message</span></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Contact Content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->

<!-- Start Google Map -->
<div class="container">
    <div id="mu-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1658.1549023546572!2d85.22484011909239!3d27.68776330587363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1708454338277!5m2!1sen!2snp"
            allowfullscreen></iframe>
    </div>
</div>
@endsection