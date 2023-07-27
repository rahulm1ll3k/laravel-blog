<div class="site-section py-0">
    <div class="owl-carousel hero-slide owl-style">

        @foreach($slidePosts as $slide)
            <div class="site-section">
                <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                        <div class="img-bg" style="background-image: url('{{  $slide->featured_image }}')"></div>
                        <div class="contents">
                            <span class="caption">Editor's Pick</span>
                            <h2><a href="{{ '/post/'.$slide->slug}}">{{ $slide->title}}</a></h2>
                            {{ $blog_content = substr($slide->blog_content, 0, 250); }}
                            <p class="mb-3">{{ $blog_content}}</p>
                            <div class="post-meta">
                                <span class="d-block">
                                    <a href="{{ '/author/'.strtolower($slide->author)}}">{{ $slide->author}}</a> in
                                    <a href="{{ '/category/'.strtolower($slide->category)}}">{{ $slide->category}}</a></span>
                                </span>
                                <span class="date-read">{{ date_format($slide->created_at, 'M d - Y')}} <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
