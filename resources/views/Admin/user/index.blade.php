@include('Admin.layouts.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <a href="{{route('admin.user.add')}}"><button type="button" class="btn btn-inverse-success btn-fw"><i class="mdi mdi-plus"></i>Add new User</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Users</h4>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Rule </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td> {{$user->id}} </td>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->rule}} </td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
            </div>

@include('Admin.layouts.footer')
{{-- category - posts - contact - reviews --}}
