@include('Admin.layouts.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add category</h4>
                    <form class="forms-sample" method="POST" action="{{ route("admin.category.store") }}">
                        @csrf
                      <div class="form-group">
                        <input type="text" class="form-control" name="category_name" placeholder="Category name">
                      </div>
                      <button type="submit" name="submit" class="btn btn-gradient-primary me-5">Submit</button>
                    </form>
                  </div>
                </div>
              </div>


              <div class="card-body">
                <h4 class="card-title">All categories
                </h4>
                </p>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> Category ID </th>
                      <th> Category name </th>
                      <th> Delete </th>
                      <th> Edit </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $category)
                    <tr>
                        <td> {{$category->id}} </td>
                        <td> {{$category->name}} </td>
                        <td> <form action="{{route('admin.category.delete')}}" method="post">
                                @method("delete")
                                @csrf
                                <input type="hidden" name="category_id" value="{{$category->id}}">
                                <button class="btn btn-gradient-danger btn-rounded btn-icon "> <i class="mdi mdi-delete"></i></button>
                            </form>
                    </td>
                        <td>
                            <a href="{{route('admin.category.edit' , [$category->id])}}"><button class="btn btn-gradient-info  btn-rounded btn-icon "> <i class="mdi mdi-brush"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>





          </div>
@include('Admin.layouts.footer')
{{-- category - posts - contact - reviews --}}


