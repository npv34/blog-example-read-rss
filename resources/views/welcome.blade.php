@extends('layout.layout')
@section('content')
    @foreach ($items as $index => $item)
        <?php
        $start = strpos($item->get_content(), '<p>');
        $end = strpos($item->get_content(), '</p>', $start);
        $paragraph = substr($item->get_content(), $start, $end-$start+4);
        ?>
        <div class="col-12 col-md-4 pt-2">
            <div class="card" style="width: 18rem;">
                <div class="card-img-top img-thumbnail-post text-center pt-2">
                    {!! $paragraph !!}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->get_title() }}</h5>
                    <p class="card-text desc-post">
                        {!! Str::words($item->get_description(), $words = 30, $end = '...') !!}
                    </p>
                    <a href="{{ route('page.show', [Str::slug($item->get_title()) ])}}" class="btn btn-primary" >Read More</a>
{{--                    <a href="{{ route('page.show', $item->get_permalink() )}}" class="btn btn-primary" >Read More</a>--}}
                </div>
            </div>
        </div>
    @endforeach
@endsection
