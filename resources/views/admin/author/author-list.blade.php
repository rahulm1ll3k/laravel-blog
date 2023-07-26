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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="card-title">Author List</h4>
                                </div>
                                <div class="col-4 text-end">
                                    <a href="{{route('admin.author.new')}}" class="btn btn-primary btn-sm me-2">Add New Author</a>
                                </div>
                            </div>
                            <h4 class="card-title">Hoverable Table</h4>
                            <p class="card-description"></p>
                            <div class="table-responsive">

                                @if (session()->has('err'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session()->get('err')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @elseif (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{session()->get('success')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @elseif (session()->has('missing'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{session()->get('missing')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Role</th>
                                            <th>Bio</th>
                                            <th>Date Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_authors as $author)
                                            <tr>
                                                <td class="py-1"><img src="{{$author->author_image}}" alt="{{$author->author_name}}"/></td>
                                                <td><a href="{{'author/'.$author->id}}">{{$author->author_name}}</a></td>
                                                <td>{{$author->author_email}}</td>
                                                <td>{{$author->author_role}}</td>
                                                @php $author_bio_short = Str::of($author->author_bio)->limit(20); @endphp
                                                <td>{{$author_bio_short}}</td>
                                                <td>
                                                    <b>Created</b>: {{$author->created_at}} <br> <br>
                                                    <b>Updated</b>: {{$author->updated_at}}
                                                </td>
                                                <td>
                                                    <a href="{{ "/backend/author-edit/".$author->id }}" class="btn btn-sm btn-primary">Edit</a> -
                                                    <a href="{{ "/backend/author-view/".$author->id }}" class="btn btn-sm btn-primary">Edit</a> -
                                                    <a href="{{ "/backend/author-delete/".$author->id }}" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
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
