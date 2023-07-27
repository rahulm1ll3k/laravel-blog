<style>
li.nav-item.dropdown:hover > ul {display: block;}
</style>
<nav class="site-navigation position-relative text-right" role="navigation">
    <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
        <li class="active"><a href="{{route('blog.home')}}" class="nav-link text-left">Home</a></li>
        <li><a href="{{route('blog.category')}}" class="nav-link text-left">Categories</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{route('blog.all')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Posts</a>
          <ul class="dropdown-menu">
            <li><hr class="dropdown-divider"></li>
            @foreach ($menuPosts as $mPost)
                <li><a href="{{'/post/'.$mPost->slug}}" class="dropdown-item">{{$mPost->title}}</a></li>
                @endforeach
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ Route('blog.author') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Authors</a>
          <ul class="dropdown-menu">
            <li><hr class="dropdown-divider"></li>
            @foreach ($menuAuthors as $mAuthor)
                <li><a href="{{'/author/'.$mAuthor->id}}" class="dropdown-item">{{$mAuthor->author_name}}</a></li>
                @endforeach
          </ul>
        </li>
        <li><a href="{{route('blog.contact')}}" class="nav-link text-left">Contact</a></li>
        <li><a href="#" class="nav-link text-left">--</a></li>
        <li><a href="{{route('admin.post')}}" class="nav-link text-left">Backend</a></li>
    </ul>
</nav>
