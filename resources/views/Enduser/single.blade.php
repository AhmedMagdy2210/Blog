@include('Enduser.layouts.header')
<section class="section single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-1">
                <div class="page-wrapper">
                    <div class="blog-title-area text-center">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ $post ->title}}</li>
                        </ol>
                        <span class="color-orange"><a href="{{ route('blog.index' , ['category' , $post->category_id]) }}" title="">{{ $post->category->name }}</a></span>
                        <h3>{{ $post ->title}}</h3>
                        <div class="blog-meta big-meta">
                            <small>{{$post->created_at}}</small>
                            <small>{{ $post->user->name }}</small>
                        </div><!-- end meta -->
                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->
                    <div class="single-post-media">
                        <img src="{{ asset('upload/post/images/' . $post->photo)}}" alt="" class="img-fluid">
                    </div><!-- end media -->
                    <div class="blog-content">
                        <div class="pp">
                            <p> {{ $post->content }} </p>
                        </div><!-- end pp -->
                    </div><!-- end content -->
                    <hr class="invis1">
                    <div class="custombox authorbox clearfix">
                        <h4 class="small-title">About author</h4>
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <h4><a href="#">{{$post->user->name}}</a></h4>
                                <p> {{$post->user->rule}} </p>
                                <div class="topsocial">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                </div><!-- end social -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end author-box -->
                    <hr class="invis1">
                </div><!-- end page-wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('Enduser.layouts.footer')
