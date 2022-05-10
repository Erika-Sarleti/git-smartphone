@extends('template.base')


@section('main')
<ol class="container">
    @foreach($phone as $item)
    <li>
        {{ $item->model }}
    </li>
    @endforeach
</ol>
@endsection