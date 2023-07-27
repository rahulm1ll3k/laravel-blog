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
        <!-- partial:../../partials/_settings-panel.html -->
        @include('admin.templates.sidebar')
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-8 d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">{{$post->title}}</h2>
                                    <p class="card-description">Write text in <code>&lt;p&gt;</code> tag</p>
                                    <div>{{$post->blog_content}}</div>
                                    <div class="mt-5">
                                        <a href="{{ Route('blog.single.post', ['slug' => $post->slug ]) }}" class="btn btn-success" target="_blank">View Post</a> -
                                        <a href="{{ Route('blog.single.edit', ['slug' => $post->id ]) }}" class="btn btn-primary">Edit Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Additional Information</h4>
                            <address>
                                @if (array_key_exists($post->author, $user))
                                    <p><b style="display: inline-block; width: 45%;">Author </b>: <a href="{{'/backend/user/'.strtolower($user[$post->author])}}">{{$user[$post->author]}}</a></p>
                                @endif
                                @if (array_key_exists($post->category, $post_cat))
                                    <p><b style="display: inline-block; width: 45%;">Category </b>: <a href="{{'/backend/category/'.strtolower($post_cat[$post->category])}}">{{$post_cat[$post->category]}}</a></p>
                                @endif
                                <p><b style="display: inline-block; width: 45%;">Created At </b>: {{$post->created_at}}</p>
                                <p><b style="display: inline-block; width: 45%;">Updated Last </b>: {{$post->updated_at}}</p>
                            </address>
                            <hr>
                            <h4 class="card-title">Featured Image</h4>
                            <!-- <p class="card-description">Add tags <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> or class <code>.h1</code> to <code>.h6</code></p> -->
                            <div class="template-demo">
                                <img class="img-fluid" src="{{$post->featured_image}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('admin.templates.footer')
        <!-- plugins:js -->
        <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
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
        <!-- End custom js for this page-->
    </body>
</html>
