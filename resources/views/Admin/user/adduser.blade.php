@include('Admin.layouts.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add User</h4>
                    <form method="post" action="{{ route('admin.user.store') }}" class="forms-sample">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Rule</label>
                        <select class="form-control" name="rule" >
                            <option value="" selected disabled hidden>Choose rule</option>
                                <option value="admin">Admin</option>
                                <option value="writer">Writer</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>

          </div>
@include('Admin.layouts.footer')
{{-- category - posts - contact - reviews --}}
