@extends('layout')

@section('content')

<div class="back">
    <a href="/"><i class="fa-solid fa-arrow-left"></i> Back</a>
</div>

<x-card>
    <div class="animal-sheet">
        <div class="image-animal"></div>
            <img src="{{asset('/images/Chaton.jpg')}}" alt="Photo de l'animal">
        </div>
        <h1 class="firstname">{{$animal->firstname}}</h1>
        <h2 class="owner">{{$animal->owner}}</h2>
        <span class="breed">{{$animal->breed}}</span>
        <span class="wound">{{$animal->wound}}</span>
        <p class="cure">{{$animal->cure}}</p>
    </div>
</x-card>

@endsection