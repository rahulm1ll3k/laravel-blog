<div class="alert alert-{{$class}} alert-dismissible fade show" role="alert">
    {{$type == 'session' ? session()->get($value) : $value}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
