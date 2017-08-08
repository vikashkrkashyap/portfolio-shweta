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
<div class="category-container contact-section" id="contact">
    <div class="section-title">
        <span>Contact</span>
    </div>
    <div class="section-body">
        <div class="col-sm-12 col-lg-8 col-xs-12 col-md-8 col-lg-offset-2 col-sm-offset-0 col-md-offset-2">
            <div class="col-sm-5 col-lg-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-lg-offset-1">
                <div class="contact-wrapper">
                    <div class="contact-row">
                        <div class="logo">
                            <img src="{{ url('image/logo.png') }}" alt="logo">
                        </div>
                        <div class="mid-text">
                            Amazon Development Center
                            <div style="font-size: 15px; color:#e5e5e5">
                                Bangalore, India
                            </div>
                        </div>
                        <div class="footer">
                            shwetaakki.com
                        </div>
                    </div>
                    <div class="contact-bottom-row"></div>
                </div>
            </div>
            <div class="col-sm-5 col-lg-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-lg-offset-1">
                <div class="contact-wrapper">
                <div class="contact-row">
                    <div class="details-text">
                        <div class="title">
                            Shweta Akki
                        </div>
                        <div class="sub-title">
                            akkishweta6027@gmail.com
                        </div>
                    </div>
                    <div class="social">
                        <div class="profile-link">
                            <a href="https://www.facebook.com/shweta.akki3" target="_blank">
                                <img src="{{ url('image/icon/facebook.png') }}" alt="">
                            </a>
                        </div>
                        <div class="profile-link">
                            <a href="https://www.instagram.com/shweta_akki" target="_blank">
                                <img src="{{ url('image/icon/instagram.png') }}" alt="">
                            </a>
                        </div>
                        <div class="profile-link">
                            <a href="https://sayat.me/Shweta123" target="_blank">
                                <img src="{{ url('image/icon/sayat.png') }}" class="sayat" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="footer-logo">
                        <img src="{{ url('image/logo.png') }}" alt="" width="120px" height="120px">
                    </div>
                </div>
                <div class="contact-bottom-row">
                </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="category-container review-section" id="review">
    <div class="section-title">
        <span>Review</span>
    </div>
    <div class="section-body">
        <div class="sub-section-body">
            <div class="col-sm-12 col-lg-10 col-xs-12 col-md-10 col-lg-offset-1 col-sm-offset-0 col-md-offset-1">
                <div class="col-sm-5 col-lg-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-lg-offset-1">
                    <div class="review-book">
                        <div class="line">
                            <div class="review-text">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                            </div>
                            <div class="review-footer pull-right">
                                <span> - Vikash Kashyap</span> | 27 oct 2017, 10:15 AM
                            </div>
                            <div class="clearfix"></div>
                            <div class="in-blk" style="margin-left:10px; vertical-align: top;">
                                <img src="{{ url('image/icon/reply.png') }}" alt="">
                            </div>
                            <div class="in-blk" style="margin-top: 5px; width: 85%; margin-left: 5px">
                                <div class="review-reply">
                                    Thankyou so much for that. Its really awesome.Thankyou so much for that. Its really awesome.

                                    Thankyou so much for that. Its really awesome.

                                    <div style="font-size: 14px; margin-top: 5px; color: #333; text-align: right ">
                                        - 27 oct 2017 10:15 AM
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="line">
                            <div class="review-text">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                            </div>
                            <div class="review-footer pull-right">
                                <span> - Vikash Kashyap</span> | 27 oct 2017, 10:15 AM
                            </div>
                            <div class="clearfix"></div>
                            <div class="in-blk" style="margin-left:10px; vertical-align: top;">
                                <img src="{{ url('image/icon/reply.png') }}" alt="">
                            </div>
                            <div class="in-blk" style="margin-top: 5px; width: 85%; margin-left: 5px">
                                <div class="review-reply">
                                    Thankyou so much for that. Its really awesome.Thankyou so much for that. Its really awesome.

                                    Thankyou so much for that. Its really awesome.

                                    <div style="font-size: 14px; margin-top: 5px; color: #333; text-align: right ">
                                        - 27 oct 2017 10:15 AM
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="line">
                            <div class="review-text">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                            </div>
                            <div class="review-footer pull-right">
                                <span> - Vikash Kashyap</span> | 27 oct 2017, 10:15 AM
                            </div>
                            <div class="clearfix"></div>
                            <div class="in-blk" style="margin-left:10px; vertical-align: top;">
                                <img src="{{ url('image/icon/reply.png') }}" alt="">
                            </div>
                            <div class="in-blk" style="margin-top: 5px; width: 85%; margin-left: 5px">
                                <div class="review-reply">
                                    Thankyou so much for that. Its really awesome.Thankyou so much for that. Its really awesome.

                                    Thankyou so much for that. Its really awesome.

                                    <div style="font-size: 14px; margin-top: 5px; color: #333; text-align: right ">
                                        - 27 oct 2017 10:15 AM
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-lg-offset-1">
                    <div class="review-form">
                        <div class="review-form-title">
                            Show some <img src="{{ url('image/icon/like.png') }}" alt="" height="40" width="40">
                        </div>
                        <input type="text" class="review-input" placeholder="Your name">
                        <textarea class="review-textarea" placeholder="Your message"></textarea>
                        <button class="review-submit-button">
                            Submit Review
                        </button>
                    </div>
                    <div class="review-thankyou hide">
                        <div class="thankyou-text">
                            <div>Thankyou for writing</div>
                            <div>Your review will be posted soon</div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
    <div class="footer">
        <div class="text">
            Copyright  &copy; 2017 | Designed by <a href="https://www.linkedin.com/in/vikashkrkashyap/" class="footer-link" target="_blank">Vikash Kashyap</a>
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

            $('.review-submit-button').click(function(){
                $('.review-form').addClass('hide');
                $('.review-thankyou').removeClass('hide')
            })
        });

    </script>
@endsection