<x-layout>
    <div class="row">
        <div class="col-lg-6">
            <h1>manga raccomandati</h1>
            <ul>
                @foreach ($dati as $manga)
                    <li>
                        <a href="{{ route('generemanga', ['genere_id' => $manga['mal_id']]) }}"> {{ $manga['name'] }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>



</x-layout>
