@extends('layout')

@section('content')

    <div>
        <div>
                <b><h3 style="font-style:italic;">Статьи</h3></b>
        </div>
    </div>
    <hr>
    <div class="row mb-2">
    @foreach($posts as $post)
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                        <a class="text-dark" href="post/{{$post->id}}">{{$post->title}}</a>
                    </h3>
                    <div>
                        <p>
                            {{mb_strimwidth($post->body, 0, 200, '...')}}
                        </p>
                    </div>
                    <div class="mb-1 text-muted">{{ date('M d, Y', (int)strtotime($post->created_at)) }}</div>
                    <a href="post/{{$post->id}}">Читать статью</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection
