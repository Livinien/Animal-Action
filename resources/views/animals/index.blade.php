@extends('layout')

@section('content')
@include('partials.search')

@unless(count($animals) == 0)

@foreach($animals as $animal)

    <x-animal-card :animal="$animal"/>

@endforeach


@else
<p>No animals found</p>
@endunless

@endsection