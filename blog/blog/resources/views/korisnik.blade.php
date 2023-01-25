<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pregled korisnika') }}
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
                        <x-klijenti :users="$users" /> --}}

                        <div class="main-spisak">
                            <h1><b>Naziv:</b> {{ $korisnik ->name }}</h1>
                            <p><b>Mail:</b> {{ $korisnik ->email }}</p>
                            <p><b>Telefon:</b> {{ $korisnik ->telephone }}</p>
                        </div>
                        <div class="komentar-spisak">
                            <p><b>Komentar:</b> {{ $korisnik ->comment }}</p>
                        </div>
                        
                        <div class="dugmici-spisak">
                            <a href="{{ url('/korisnici/show') }}/{{ $korisnik ->id }}">Prikazi korisnika</a>

                            <a href="{{ url('/korisnici/edit') }}/{{ $korisnik ->id }}">Edituj korisnika</a>

                            <form action="{{ url('/korisnici/delete') }}/{{ $korisnik->id }}" method="HEAD">
                                @csrf
                                <button type="submit">Obrisi korisnika</button>
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