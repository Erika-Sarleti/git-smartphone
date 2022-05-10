@extends('template.base')


@section('main')
<ol>
    @foreach($phone as $item)
    <li>
        {{ $item->model }}
    </li>
    @endforeach
</ol>
@endsection