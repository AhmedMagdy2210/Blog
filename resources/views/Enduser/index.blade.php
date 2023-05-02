@include('Enduser.layouts.header')
<section class="section">
<div class="container">
    <div class="menu-content clearfix">
        <div class="tab">
            @foreach ($categories as $category)
            <button class="tablinks"><a href="{{ route('blog.index' , ['category' => $category->id]) }}">{{ $category->name }}</a></button>
            @endforeach
        </div>
    </div><!-- end mega-menu-content -->
</div>
</section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <i class="fa fa-rss"></i></h4>
                            </div><!-- end blog-top -->
                            <div class="blog-list clearfix">
                                {{-- @foreach ($posts as $post) --}}
                                @forelse ($posts as $post)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{route('blog.single',$post->id)}}" title="">
                                                <img src="{{ asset('upload/post/images/' . $post->photo)}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{route('blog.single',$post->id)}}" title="">{{$post->title}}</a></h4>
                                        <p>{{ Str::substr($post->content, 0 , 200) }}</p>
                                        <small class="firstsmall bg-orange">{{$post->category->name}}</small>
                                        <small>{{$post->created_at}}</small>
                                        <small>by {{$post->user->name}}</small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                                {{-- @endforeach --}}
                                @empty
                                <h3>Sorry no posts to show</h3>
                                @endforelse
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->
                        <hr class="invis">
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@include('Enduser.layouts.footer')
