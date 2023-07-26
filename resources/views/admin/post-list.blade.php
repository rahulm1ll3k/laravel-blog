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
        <!-- partial:partials/_settings-panel.html -->
        @include('admin.templates.sidebar')
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session()->get('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <!--
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic Table</h4>
                            <p class="card-description">
                                Add class <code>.table</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>VatNo.</th>
                                            <th>Created</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>53275531</td>
                                            <td>12 May 2017</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                        </tr>
                                        <tr>
                                            <td>Messsy</td>
                                            <td>53275532</td>
                                            <td>15 May 2017</td>
                                            <td><label class="badge badge-warning">In progress</label></td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>53275533</td>
                                            <td>14 May 2017</td>
                                            <td><label class="badge badge-info">Fixed</label></td>
                                        </tr>
                                        <tr>
                                            <td>Peter</td>
                                            <td>53275534</td>
                                            <td>16 May 2017</td>
                                            <td><label class="badge badge-success">Completed</label></td>
                                        </tr>
                                        <tr>
                                            <td>Dave</td>
                                            <td>53275535</td>
                                            <td>20 May 2017</td>
                                            <td><label class="badge badge-warning">In progress</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Hoverable Table</h4>
                            <p class="card-description">
                                Add class <code>.table-hover</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Post Title</th>
                                            <th>Post Category</th>
                                            <th>Author</th>
                                            <th>Content</th>
                                            <th>Published / Updated</th>
                                            <th>Featured Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_posts as $post)
                                            <tr>
                                                <td><a href="{{'post/'.$post->id}}">{{$post->title}}</a></td>
                                                <td>{{$post->category}}</td>
                                                <td>{{$post->author}}</td>
                                                <?php $blog_content = Str::of($post->blog_content)->limit(20); ?>
                                                <td>{{$blog_content}}</td>
                                                <td>
                                                    <b>Created</b>: {{$post->created_at}} <br> <br>
                                                    <b>Updated</b>: {{$post->updated_at}}
                                                </td>
                                                <td class="py-1">

                                                    <img src="{{$post->featured_image}}" alt="image"/>
                                                </td>
                                                <td><label class="badge badge-danger">Pending</label></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Striped Table</h4>
                            <p class="card-description">
                                Add class <code>.table-striped</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>First name</th>
                                            <th>Progress</th>
                                            <th>Amount</th>
                                            <th>Deadline</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-1"><img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="image"/></td>
                                            <td>Herman Beck</td>
                                            <td><div class="progress"><div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>$ 77.99</td>
                                            <td>May 15, 2015</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1"><img src="{{ asset('admin/images/faces/face2.jpg') }}" alt="image"/></td>
                                            <td>Messsy Adam</td>
                                            <td><div class="progress"><div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>$245.30</td>
                                            <td>July 1, 2015</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1"><img src="{{ asset('admin/images/faces/face3.jpg') }}" alt="image"/></td>
                                            <td>John Richards</td>
                                            <td><div class="progress"><div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>$138.00</td>
                                            <td>Apr 12, 2015</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1"><img src="{{ asset('admin/images/faces/face4.jpg') }}" alt="image"/></td>
                                            <td>Peter Meggik</td>
                                            <td><div class="progress"><div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>$ 77.99</td>
                                            <td>May 15, 2015</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1"><img src="{{ asset('admin/images/faces/face5.jpg') }}" alt="image"/></td>
                                            <td>Edward</td>
                                            <td><div class="progress"><div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>$ 160.25</td>
                                            <td>May 03, 2015</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1"><img src="{{ asset('admin/images/faces/face6.jpg') }}" alt="image"/></td>
                                            <td>John Doe</td>
                                            <td><div class="progress"><div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>$ 123.21</td>
                                            <td>April 05, 2015</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1"><img src="{{ asset('admin/images/faces/face7.jpg') }}" alt="image"/></td>
                                            <td>Henry Tom</td>
                                            <td><div class="progress"><div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>$ 150.00</td>
                                            <td>June 16, 2015</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.templates.footer')
        <!-- container-scroller -->
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
