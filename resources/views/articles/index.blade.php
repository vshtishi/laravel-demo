@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
     <div id="content">
        <ul class="style1">
            <li class="first">
                @forelse($articles as $article)
                    <div class="title">
                        <h2><a href="{{route('articles.show', $article)}}">{{$article->title}}</a></h2>
                    </div>
                <p>
                    <img src="images\banner.jpg" alt="" class="image image-full" />
                </p>
                    <a href="articles\{{$article->id}}">{{$article->excerpt}}</a>
            </li>
            @empty
                <p>No relevant articles yet.</p>
            @endforelse
        </ul>
     </div>
        </div>
    </div>


@endsection
