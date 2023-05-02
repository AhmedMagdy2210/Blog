@include('Admin.layouts.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit category</h4>
                    @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <p class="text-danger">{{$error}}</p>
                            @endforeach
                    @endif

                    <form class="forms-sample" method="POST" action="{{ route("admin.category.update") }}">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="category_id" value="{{$category->id}}">
                      <div class="form-group">
                        <input type="text" class="form-control" name="category_name" value="{{$category->name}}">
                      </div>
                      <button type="submit" name="submit" class="btn btn-gradient-primary me-5">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
@include('Admin.layouts.footer')
{{-- category - posts - contact - reviews --}}


