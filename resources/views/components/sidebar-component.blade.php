<div>
    <div>
        <div class="section-title">
            <h2>Popular Posts</h2>
        </div>
        @if(isset($recentPost) || !empty($recentPost))
            @foreach ($recentPost as $item)
                <div class="trend-entry d-flex">
                    <div class="number align-self-start">{{sprintf("%02d", $item->id)}}</div>
                    <div class="trend-contents">
                        <h2><a href="{{'/post/'.$item->slug}}">{{$item->title}}</a></h2>
                        <div class="post-meta">
                            <span class="d-block">
                                <a href="{{'/author/'.strtolower($users[$item->author])}}">{{$users[$item->author]}}</a> in
                                <a href="{{'/category/'.strtolower($categories[$item->category])}}">{{$categories[$item->category]}}</a></span>
                            </span>
                            <span class="date-read">{{date_format($item->created_at, 'M d - Y')}} <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div>
                <p class="h2">No posts were found</p>
            </div>
        @endif
        <p>
            <a href="{{route('blog.all')}}" class="more">See All Posts <span class="icon-keyboard_arrow_right"></span></a>
        </p>
    </div>

    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
