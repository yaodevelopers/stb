@extends('layouts.app')

@section('stylesheets')
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>

@section('content')
<form action="{{ route('store_blog_path') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="form-group">
    <label for="title">Judul</label>
    <input type="text" name="title" class="form-control">
</div>

<div class="form-group">
    <label for="content">Deskripsi</label>
    <textarea name="content" rows="10" class="form-control"></textarea>
</div>

<div class="form-group">
    <input type="file" name="files" class="form-control">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Tambahkan Post</button>
</div>

</form>

@endsection