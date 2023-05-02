@include('Admin.layouts.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update post</h4>
                    @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <p class="text-danger">{{$error}}</p>
                            @endforeach
                    @endif
                    <form method="post" action="{{ route('admin.post.update') }}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('put')
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input type="hidden" name="user_id" value="{{ $post->user_id }}">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" value="{{ $post->title }}" class="form-control" id="exampleInputName1" placeholder="Title" name="title">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="exampleSelectGender" name="category_id" >
                            <option selected disabled hidden></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Content</label>
                        <textarea name="content" class="form-control" id="exampleTextarea1" rows="4">{{ $post->content }}</textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>

          </div>
@include('Admin.layouts.footer')
{{-- category - posts - contact - reviews --}}
