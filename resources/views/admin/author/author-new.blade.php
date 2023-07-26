<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
</head>

<body>
    @include('admin.templates.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('admin.templates.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" action="author-new" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="name">Author Name</label>
                      <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your Name" autofocus>
                        @error('name')
                            <p class="mt-2 text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="email">Author Email Address</label>
                      <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Adderss">
                      @error('email')
                        <p class="mt-2 text-danger">{{$message}}</p>
                      @enderror
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="featured-image">Featured Image</label>
                                <input type="file" class="form-control" name="featured-image" id="featured-image" style="padding: 8px;">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-select" name="role" id="role" aria-label="Default select example">
                                    <option disabled>Select a role for new author</option>
                                    <option value="1">Sr. Editor</option>
                                    <option value="2">Editor</option>
                                    <option value="3">Publisher</option>
                                  </select>
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="bio" class="form-label">Author Bio</label>
                        <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" id="bio" rows="3" style="min-height: 150px;"></textarea>
                        @error('bio')
                            <p class="mt-2 text-danger">{{$message}}</p>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{ Route('admin.author') }}" class="btn btn-danger">Go Back</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin/templates/footer')
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('admin/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/select2/select2.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/js/template.js') }}"></script>
  <script src="{{ asset('admin/js/settings.js') }}"></script>
  <script src="{{ asset('admin/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/file-upload.js') }}"></script>
  <script src="{{ asset('admin/js/typeahead.js') }}"></script>
  <script src="{{ asset('admin/js/select2.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>
