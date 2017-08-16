@extends('website.app')
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
            {!! $userInfo ? $userInfo->about :"" !!}
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
                    @foreach($galleries as $gallery)
                <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                    <div class="gallery-sub-section">
                        @if($gallery->images->count())
                        <div class="gallery">
                            @foreach($gallery->images as $image)
                                @if($loop->first)
                                    <a href="{{ $image->getImagePath() }}">
                                        <img src="{{ $image->getResizeImagePath() }}" alt="{{ $image->name }}">
                                    </a>
                                @else
                                 <a href="{{ $image->getImagePath() }}" class="hide"></a>
                                @endif
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                    @endforeach
        </div>
        <div class="clearfix"></div>

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
                            shwetaakki.me
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
                            <a href="{{ $userInfo ? $userInfo->facebook_url : "#" }}" target="_blank">
                                <img src="{{ url('image/icon/facebook.png') }}" alt="">
                            </a>
                        </div>
                        <div class="profile-link">
                            <a href="{{ $userInfo ? $userInfo->instagram_url :"#"  }}" target="_blank">
                                <img src="{{ url('image/icon/instagram.png') }}" alt="">
                            </a>
                        </div>
                        <div class="profile-link">
                            <a href="{{ $userInfo ? $userInfo->sayat_url:"#" }}" target="_blank">
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
                    <div class="review-form" data-url = {{ route('review.submit') }}>
                        <div class="review-form-title">
                            Show some <img src="{{ url('image/icon/like.png') }}" alt="" height="40" width="40">
                        </div>
                        <input type="text" class="review-input" id="reviewName" placeholder="Your name" required>
                        <div class="r-n-error review-error hide"></div>
                        <textarea class="review-textarea" placeholder="Your message" id="reviewMessage" required></textarea>
                        <div class="r-m-error review-error hide">ok</div>
                        <button class="review-submit-button">
                            Submit Review
                        </button>
                    </div>
                    <div class="review-thankyou hide">
                        <div class="thankyou-text">
                            <div>Thankyou <img src="{{ url('image/icon/like.png') }}" width="24" height="24" style="margin-left: 5px" alt=""></div>
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

            // making request for submit the review

            $('.review-submit-button').click(function(e){
                e.preventDefault();
                $(this).text('Submitting ...').css('opacity', 0.9).prop("disabled",true);

                var url = $('.review-form').data('url');
                var name = $('#reviewName').val();
                var message = $('#reviewMessage').val();

                $.ajax({
                    url : url,
                    type : 'POST',
                    dataType : 'JSON',
                    data : {'name' :name, 'message' : message, '_token': "{{ csrf_token() }}"},
                    success : function (data){
                        if(data.success) {
                            $('.review-submit-button').text('Submit Review').css('opacity', 1).prop("disabled",false);
                            $('.review-form').addClass('hide');
                            $('.review-thankyou').removeClass('hide')
                        }
                        else if(data.error){
                            $('.review-submit-button').text('Submit Review').css('opacity', 1).prop("disabled",false);
                            if(data.error.message){
                                $('#reviewName').addClass('bg-red');
                                $('.r-m-error').removeClass('hide').text(data.error.message[0]);
                            }
                            if(data.error.name){
                                $('.r-n-error').removeClass('hide').text(data.error.name[0]);
                                $('#reviewMessage').addClass('bg-red');
                            }
                        }
                        else {
                            console.error('Some error occurred at the time of submitting the form, please send email to vikashkrkashyap@gmail.com if this error persists');
                        }
                    },
                    fails : function (){
                        console.error('Failed to submit the review, please send email to vikashkrkashyap@gmail.com if this error persists');
                    }
                })
            });
        });

    </script>
@endsection