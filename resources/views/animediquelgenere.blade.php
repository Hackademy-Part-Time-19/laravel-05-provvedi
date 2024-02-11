<x-layout>

    <div class="row">

        <h1> anime</h1>
        @foreach ($anime as $anime)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $anime['images']['jpg']['image_url'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $anime['title'] }}</h5>
                        <p class="card-text">{{ $anime['synopsis'] }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-layout>
