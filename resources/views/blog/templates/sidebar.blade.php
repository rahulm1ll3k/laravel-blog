<div>
    <div class="section-title">
        <h2>Popular Posts</h2>
    </div>
    @if(isset($resent_posts) || !empty($resent_posts))
        @foreach ($resent_posts as $item)
            <div class="trend-entry d-flex">
                <div class="number align-self-start">{{sprintf("%02d", $item->id)}}</div>
                <div class="trend-contents">
                    <h2><a href="{{'/post/'.$item->slug}}">{{$item->title}}</a></h2>
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
    @else
        <div class="trend-entry d-flex">
            <div class="number align-self-start">01</div>
            <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
            </div>
        </div>
        <div class="trend-entry d-flex">
            <div class="number align-self-start">02</div>
            <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
            </div>
        </div>
        <div class="trend-entry d-flex">
            <div class="number align-self-start">03</div>
            <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
            </div>
        </div>
        <div class="trend-entry d-flex pl-0">
            <div class="number align-self-start">04</div>
            <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
            </div>
        </div>
    @endif
    <p>
        <a href="{{route('blog.all')}}" class="more">See All Posts <span class="icon-keyboard_arrow_right"></span></a>
    </p>
</div>
