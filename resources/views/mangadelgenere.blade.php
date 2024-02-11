<x-layout>

    <div class="row">

        <h1> Manga del genere</h1>
        @foreach ($manga as $manga)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $manga['images']['jpg']['image_url'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $manga['title'] }}</h5>
                        <p class="card-text">{{ $manga['synopsis'] }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-layout>
