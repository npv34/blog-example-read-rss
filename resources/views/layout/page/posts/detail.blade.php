@extends('layout.layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="row ">
                <div class="col-12 col-md-12 title-post">
                    <h1 class="text-primary">{{ $post->get_title() }}</h1>
                </div>
                <div class="col-12 col-md-12 title-content">
                    {!! $post->get_description() !!}
                </div>
            </div>

        </div>
    </div>

@endsection
