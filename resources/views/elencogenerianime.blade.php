<x-layout>

    <div class="row">
        <div class="col-lg-6">
            <h1>Generi anime</h1>
            <ul>
                @foreach ($dati as $anime)
                    <li>
                        <a href="{{ route('genere', ['genre_id' => $anime['mal_id']]) }}"> {{ $anime['name'] }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</x-layout>
