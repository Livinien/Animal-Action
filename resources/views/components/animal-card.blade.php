
@props(['animal'])

<x-card>
    <section class="container">
        <div class="card">
            <img src="{{asset('/images/Chaton.jpg')}}" alt="Photo de l'animal">
            <div class="informations">
                <h1>{{$animal->firstname}}</h1>
                <h1>{{$animal->owner}}</h1>
                <h1>{{$animal->breed}}</h1>
                <div class="readMore">
                    <a href="/animals/{{$animal->id}}" class="more-informations">More Information</a>
                </div>
            </div>
        </div>
    </section>
</x-card>