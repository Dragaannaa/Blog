<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pregled knjige') }}
        </h2>
    </x-slot>

    <style>
        .footer{
                background-color:#ffe6e6;
                font-family:"Gabriola";
                font-size:30px;
                text-align:center;
                margin:5px;
            }
    </style>

    
        <div class="py-6 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-1 bg-white border-b border-gray-200 komplet-spisak">
                        <!--
                        -->
                        {{-- Insert komponente sa slanjem podataka komponenti
                        <x-knjige :users="$users" /> --}}

                        <div class="main-spisak">
                            <h1><b>Ime:</b> {{ $knjiga ->ime }}</h1>
                            <p><b>Autor:</b> {{ $knjiga ->autor }}</p>
                            <p><b>Godina:</b> {{ $knjiga ->godina }}</p>
                        </div>
                        <div class="komentar-spisak">
                            <p><b>Opis:</b> {{ $knjiga ->opis }}</p>
                        </div>
                        
                        <div class="dugmici-spisak">
                            <a href="{{ url('/knjige/show') }}/{{ $knjiga ->id }}">Prikazi knjigu</a>

                            <a href="{{ url('/knjige/edit') }}/{{ $knjiga ->id }}">Edituj knjigu</a>

                            <form action="{{ url('/knjige/delete') }}/{{ $knjiga->id }}" method="HEAD">
                                @csrf
                                <button type="submit">Obrisi knjigu</button>
                            </form>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    
        <footer>
        <div class="footer">
            <p>Dobrodošli na zvaničnu stranicu biblioteke...</p>
            <p>Kontaktirajte nas:066/565-786;  E-mail:biblioteka@gmail.com  </p> 
        </div>
    </footer>

</x-app-layout>