@include('blog.templates.header')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title">
                    <span class="caption d-block small">All articles are shown bellow</span>
                    <h2>Authors</h2>
                </div>

                @foreach ($allAuthors as $item)
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail order-md-2" style="background-image: url('{{$item->author_image}}')"></div>
                        <div class="contents order-md-1 pl-0">
                            <h2><a href="{{'/author/'.$item->id}}">{{$item->author_name}}</a></h2>
                            <?php $author_bio = Str::of($item->author_bio)->limit(125); ?>
                            <p class="mb-3">{{$author_bio}}</p>
                            <div class="post-meta">
                                <span class="date-read">{{date_format($item->created_at, 'M d - Y')}}</span>
                                <span class="mx-1">&bullet;</span>
                                <a href="mailto:{{$item->author_email}}" class="btn-btn-sm">Mail Me</a>
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
