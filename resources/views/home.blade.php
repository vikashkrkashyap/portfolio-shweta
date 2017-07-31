@extends('layout.app')
@section('content')
<div class="category-container home" id="#home">
    <div class="home-title">Shweta Akki
    <div class="home-sub-title">
        <span class="word">CRAZY </span>|
        <span class="word">FOODIE</span>|
        <span class="word"> MOODY</span>
    </div>
        <a href="#about" class="page-scroll"><button class="button-scroll">Know More</button></a>
    </div>
    <div class="overlay"></div>
</div>
<div class="category-container about-section" id="about">
    <div class="section-title">
        <span>About</span>
    </div>
    <div class="section-body">
        <div class="sub-section-body col-lg-6 col-md-6 col-md-offset-3 col-lg-offset-3">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the
            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
            with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="category-container gallery-section" id="gallery">
    <div class="section-title">
        <span>Gallery</span>
    </div>
    <div class="section-body">
        <div class="col-md-10 col-md-offset-1 col-sm-offset-0 col-sm-12">
            <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                <div class="gallery-sub-section">
                    <div class="gallery">
                        <a href="{{ url('image/sa_gallery.jpg') }}" class="hide"></a>
                        <a href="{{ url('image/sa_cover.jpg') }}">
                            <img  src="{{ url('image/sa_cover.jpg')  }}">
                        </a>
                        <a href="{{ url('image/sa_gallery_2.jpg') }}" class="hide"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                <div class="gallery-sub-section">
                    <div class="gallery">
                        <a href="{{ url('image/sa_gallery.jpg') }}" class="hide"></a>
                        <a href="{{ url('image/sa_gallery_2.jpg') }}">
                            <img  src="{{ url('image/sa_gallery_2.jpg')  }}">
                        </a>
                        <a href="{{ url('image/sa_gallery_2.jpg') }}" class="hide"></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                <div class="gallery-sub-section">
                    <div class="gallery">
                        <a href="{{ url('image/sa_gallery.jpg') }}">
                            <img class="" src="{{ url('image/sa_gallery.jpg')  }}">
                        </a>
                        <a href="{{ url('image/sa_gallery_2.jpg') }}" class="hide"></a>
                        <a href="{{ url('image/sa_gallery_2.jpg') }}" class="hide"></a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="category-container social-section" id="social">
    <div class="section-title">
        <span>Social</span>
    </div>
    <div class="section-body">
        <div class="col-md-10 col-md-offset-1 col-sm-offset-0 col-sm-12">
            <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                <div class="social-sub-section">
                    <div class="top-panel">
                        <span class="logo">
                            <img src="{{ url('image/icon/fb_logo.png') }}" alt="fb logo">
                        </span>
                        <span class="text">
                        <a href="https://www.facebook.com/shweta.akki3" target="_blank">Facebook</a>
                        </span>
                    </div>
                    <div class="">
                        Your feed will be here, Its not here now because I need your authentication :P
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                <div class="social-sub-section">
                    <div class="top-panel">
                        <span class="logo">
                            <img src="{{ url('image/icon/insta_logo.png') }}" alt="insta logo">
                        </span>
                        <span class="text">
                            <a href="https://www.instagram.com/shweta_akki/" target="_blank">Instagram</a>
                        </span>
                    </div>
                    <div class="">
                        Your feed will be here, Its not here now because I need your authentication :P
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                <div class="social-sub-section">
                    <div class="top-panel">
                        <span class="logo">
                            <img src="{{ url('image/icon/twitter_logo.ico') }}" alt="twitter logo">
                        </span>
                        <span class="text">
                            <a href="#" >Twitter</a>
                        </span>
                    </div>
                    <div class="margin">
                        Your feed will be here, Its not here now because I need your authentication :P
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="category-container contact-section hide" id="contact">
    <div class="section-title">
        <span>Contact</span>
    </div>
    <div class="section-body">
        <div class="sub-section-body col-lg-6 col-md-6 col-md-offset-3 col-lg-offset-3">
           shweta@demo.com

            <p>This section will be revised with a contact form</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
    <div class="footer">
        <div class="text">
            &copy; Copyright 2017 | Shweta
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.gallery').each(function () {
                $(this).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true
                    },
                    fixedContentPos: false
                });
            });
        });

    </script>
@endsection