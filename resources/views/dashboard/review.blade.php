@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">All Reviews</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                                <div class="hide pad-10 alert-success" id="successMsg"></div>
                                <div>
                                @if($reviews->count())
                                    <ul class="list-unstyled" style="list-style-type: decimal">
                                    @foreach($reviews as $review)
                                        <li>
                                            <div class="col-md-12">
                                                <div>
                                                    {!! $review->review !!}
                                                </div>
                                                <div class="pull-left">
                                                    <div style="padding:5px; color:#666; font-size:13px">
                                                      Reviewed by : {{ ucfirst($review->name) }} | Reviewed At : {{ date('d M Y, h:i A', strtotime($review->reviewed_at)) }}
                                                    </div>
                                                </div>
                                                <div class="pull-right">
                                                    @if(!$review->is_approved)
                                                        <a onclick="return confirm('Are you sure ?')" href="{{ route('dashboard.review.status', $review->id) }}" class="btn btn-xs btn-success"> Approve </a>
                                                    @else
                                                        <a onclick="return confirm('Are you sure ?')" href="{{ route('dashboard.review.status', $review->id) }}" class="btn btn-xs btn-danger"> Disapprove </a>
                                                    @endif
                                                    <a onclick="return confirm('Are you sure ?')" href="{{ route('dashboard.review.pinned', $review->id) }}" class="btn btn-xs btn-warning mar-l-10">@if($review->is_pinned) Unpin Review @else Pin Review @endif</a>
                                                    <a class="btn btn-xs btn-primary mar-l-10 btn-review-reply" data-url="{{ route('dashboard.review.reply', $review->id) }}" data-review="{!! $review->review !!}" data-reply="{!! $review->reply !!}">Reply</a>
                                                </div>
                                                <div class="clearfix"></div>
                                                @if($review->reply)
                                                    <ul style="list-style-type: none">
                                                        <li style="background: #d9d9d9; padding:5px 10px; margin-top:5px">
                                                            {!! $review->reply !!}
                                                        </li>
                                                    </ul>
                                                @endif
                                            </div>
                                            <div class="clearfix"></div>
                                            <hr>
                                        </li>
                                    @endforeach
                                    </ul>
                                    <div class="mar-t-20 text-center">
                                        {!! $reviews->links() !!}
                                    </div>
                                @else
                                    <div class="alert alert-danger">
                                        You didn't receive any review till now. Keep sharing your website to users to get some review :P
                                    </div>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modalReviewReply" data-url="">
            <div class="modal-dialog modal-sm modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Review Reply</h5>
                    </div>
                    <div class="modal-body">
                        <div class="hide pad-10 alert-danger" id="errorMessage"></div>
                        <p id="review"></p>
                        <div class="form-group">
                            <div id="review"></div>
                            <textarea name="reply" class="form-control" id="reply" cols="30" rows="10" placeholder="Enter review reply"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger mar-r-10" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnReviewSubmit">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#successMsg').addClass('hide');
            $('.btn-review-reply').on('click', function(event){
                event.preventDefault();
                var reviewReplyModal = $('#modalReviewReply');
                var reply = $(this).data('reply');
                reviewReplyModal.data('url', $.trim($(this).data('url')));
                reviewReplyModal.find('#review').text($(this).data('review'));

                if(reply.length){
                    reviewReplyModal.find('#reply').val(reply);
                }
                else{
                    reviewReplyModal.find('#reply').val('');
                }

                reviewReplyModal.modal('show');
            });

            $('#btnReviewSubmit').click(function(event){
                event.preventDefault();

                var errorMsg = $('#errorMessage');
                errorMsg.addClass('hide');
                var url = $('#modalReviewReply').data('url');
                var reply = $.trim($('#reply').val());
                if(!reply){
                    errorMsg.removeClass('hide').text('Please enter reply or click Cancel button to skip');
                }

                $.ajax({
                    url :url,
                    type: 'POST',
                    dataType : 'JOSN',
                    data : {reply : reply , _token : "{{ csrf_token() }}"},
                    success : function(data){
                        if(data.success){
                            location.reload();
                            $('#successMsg').removeClass('hide').text('You reply has been applied successfully');
                        }
                        else if(data.error){
                            errorMsg.removeClass('hide').text(data.error.mesaage[0]);
                        }
                        else{
                            $('#modalReviewReply').modal('hide');
                        }
                    },
                    fail : function(){
                        errorMsg.removeClass('hide').text('Some error occurred, Try again and if error persists, then contact developer.')
                    }
                })
            });
        })
    </script>
@endsection
