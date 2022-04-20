@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="float-right my-2" >
            <a style="margin-left:1220px;" class="btn btn-success" href="{{ route('articles.create') }}"> Input Article</a>
        </div>
        </div>
    </div>
        <table class="table table-bordered" style="width:95%;margin: 0 auto;">
        <tr>
            <th>Judul</th>
            <th>Konten</th>
            <th>Gambar</th>
        </tr>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->title }}</td>
            <td>{{ $article->content }}</td>
            <td><img width="150px" src="{{asset('storage/'.$article->featured_image)}}"></td>
        </tr>
        @endforeach
    </table>
@endsection