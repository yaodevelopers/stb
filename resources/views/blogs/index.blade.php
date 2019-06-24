@extends('layouts.app')

@section('content')
<div class="row">

    @foreach($blogs as $blog)

<div class="col-md-6">
    <br>
    <br>
    <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-header">
            <a href="{{ route('blog_path', ['blog' => $blog->id]) }}">{!! $blog->title !!}</a>
        
        </div>
        <div class="card-body">
        <a href="{{ route('blog_path', ['blog' => $blog->id])}}">
        <img src="{{ asset($blog->image )}}"  alt="" class="card-img-top">
        </a>

        <br>
        <br>

        <p class="lead">
            di posting
            {{ $blog->created_at->diffForHumans() }}
        </p>
        <a href="{{ route('blog_path', ['blog' => $blog->id])}}" class="btn btn-outline-success">Lihat Post</a>
        </div>
    </div>


</div>
@endforeach
</div>
</div>
@endsection