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
                  <form class="forms-sample" action="new" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                      <label for="post-title">Article Title</label>
                      <input type="text" class="form-control" name="post-title" id="post-title" placeholder="Title">
                    </div>


                    <div class="form-group">
                      <label for="post-slug">Article Slug (Permalink) <br> <code>Don't onclude the domain here</code></label>
                      <input type="text" class="form-control" name="post-slug" id="post-slug" placeholder="Slug">
                    </div>


                    <div class="form-group">
                        <label for="featured-image">Featured Image</label>
                        <input type="file" class="form-control" name="featured-image" id="featured-image" style="padding: 8px;">
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="post-author">Article Author</label>
                                <select class="form-select" name="post-author" id="post-author" aria-label="Default select example">
                                    <option disabled>Select an author</option>
                                    <option value="1">Rahul</option>
                                    <option value="2">Wahidul</option>
                                    <option value="3">Touhid</option>
                                    <option value="5">Farhan Sadiq</option>
                                  </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="post-category">Article Category</label>
                                <select class="form-select" name="post-category" id="post-category" aria-label="Default select example">
                                    <option disabled>Select a category</option>
                                    <option value="1">Politics</option>
                                    <option value="2">Business</option>
                                    <option value="3">Health</option>
                                    <option value="4">Design</option>
                                    <option value="5">Sport</option>
                                  </select>
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="post-content" class="form-label">Content</label>
                        <textarea class="form-control" name="post-content" id="post-content" rows="3" style="min-height: 150px;"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <!--
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal Form</h4>
                  <p class="card-description">
                    Horizontal form layout
                  </p>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            -->
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
