@extends('layout')

@section('content')

    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <h3 class="mb-0">
                <p>{{$post->title}}</p>
            </h3>
            <div>
                <p>
                    {{$post->body}}
                </p>
            </div>
            <div class="mb-1 text-muted">{{date('M d, Y', (int)strtotime($post->created_at))}}</div>
        </div>
    </div>

@endsection
