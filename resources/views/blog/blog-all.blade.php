@include('blog.templates.header')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title">
                    <span class="caption d-block small">All articles are shown bellow</span>
                    <h2>Blogs</h2>
                </div>

                @foreach ($allPosts as $item)
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail order-md-2" style="background-image: url('{{$item->featured_image}}')"></div>
                        <div class="contents order-md-1 pl-0">
                            <h2><a href="{{'/post/'.$item->slug}}">{{$item->title}}</a></h2>
                            <?php $blog_content = Str::of($item->blog_content)->limit(125); ?>
                            <p class="mb-3">{{$blog_content}}</p>
                            <div class="post-meta">
                                <span class="d-block">
                                    <a href="{{'/author/'.strtolower($user[$item->author])}}">{{$user[$item->author]}}</a> in
                                    <a href="{{'/category/'.strtolower($post_cat[$item->category])}}">{{$post_cat[$item->category]}}</a></span>
                                </span>
                                <span class="date-read">{{date_format($item->created_at, 'M d - Y')}} <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col-lg-3">
                @include('blog.templates.sidebar')
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <ul class="custom-pagination list-unstyled">
                    <li><a href="#">1</a></li>
                    <li class="active">2</li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('blog.templates.footer')
