@include('blog.templates.header')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

                <div class="section-title mb-3">
                    <h1>{{$theAuthor->author_name}}</h1>
                </div>
                {!! $theAuthor->author_bio !!}

                <div class="section-title mb-5 mt-5">
                    <h2>Articles Postes By: {{$theAuthor->author_name}}</h2>
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
                                    <a href="{{'/author/'.strtolower($theAuthor->id)}}">{{$theAuthor->author_name}}</a> in
                                    <a href="{{'/category/'.strtolower($item->category)}}">{{$item->category}}</a></span>
                                </span>
                                <span class="date-read">{{date_format($item->created_at, 'M d - Y')}} <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col-lg-3">
                <x-sidebarComponent category="Hi there" />
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
