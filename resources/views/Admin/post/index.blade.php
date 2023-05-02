@include('Admin.layouts.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <a href="{{route('admin.post.add')}}"><button type="button" class="btn btn-inverse-success btn-fw"><i class="mdi mdi-plus"></i>Add new Post</button></a>
                </div>
            </div>
            @foreach($posts as $post)
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Recent Updates</h4>
                      <div class="d-flex">
                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                          <i class="mdi mdi-account-outline icon-sm me-2"></i>
                          <span>{{$post->user->name}}</span>
                        </div>
                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                            <i class="mdi mdi-pine-tree icon-sm me-2"></i>
                            <span>{{$post->category->name}}</span>
                        </div>
                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                          <i class="mdi mdi-clock icon-sm me-2"></i>
                          <span>{{$post->created_at}}</span>
                        </div>
                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                            <form action="{{route('admin.post.delete')}}" method="post">
                                @method("delete")
                                @csrf
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <button class="btn btn-outline-light text-black btn-fw"> <i class="mdi mdi-delete"></i></button>
                            </form>
                        </div>
                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                        <a href="{{route('admin.post.edit' , [$post->id])}}"><button class="btn btn-outline-light text-black btn-fw"> <i class="mdi mdi-brush"></i></button></a>
                        </div>

                      </div>
                      <div class="row mt-3">
                        <div class="col-6 pe-1">
                          <img src="{{ asset('upload/post/images/'.$post->photo )}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                        </div>
                      </div>
                      <div class="d-flex mt-5 align-items-top">
                        <div class="mb-0 flex-grow">
                          <h5 class="me-2 mb-2">{{$post->title}}</h5>
                          <p class="mb-0 font-weight-light">{{$post->content}}</p>
                        </div>
                        <div class="ms-auto">
                          <i class="mdi mdi-heart-outline text-muted"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
@include('Admin.layouts.footer')
{{-- category - posts - contact - reviews --}}
