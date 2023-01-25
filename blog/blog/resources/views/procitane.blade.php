<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="korisnici">
            {{ __('Procitane knjige ') }} 
        </h2>
        <style>
            .korisnici {
                background-color: #ffe6e6;
                font-family: "Times New Roman";
                padding: 10px;
                font-size:20px;
                text-align:center;
            }
            .kocka {
                background-color:#ffe6e6;
                padding: 10px;
            }
            .footer{
                background-color:#ffe6e6;
                font-family:"Gabriola";
                font-size:30px;
                text-align:center;
                margin:5px;
            }
        </style>
    </x-slot>

    

    @foreach ($procitane as $procitana)
        <div class="py-6 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div >

                    <div class="kocka">
                        <!--
                        -->
                        {{-- Insert komponente sa slanjem podataka komponenti
                        <x-procitane :users="$users" /> --}}

                        <div class="main-spisak">
                            <h1><b>Ime:</b> {{ $procitana ->name }}</h1>
                            <p><b>Mail:</b> {{ $procitana ->email }}</p>
                            <p><b>Telefon:</b> {{ $procitana ->telephone }}</p>
                        </div>
                        <div class="komentar-spisak">
                            <p><b>Komentar:</b> {{ $procitana ->comment }}</p>
                            <p><b>Knjiga:</b> {{ $procitana ->book }}</p>
                            <p><b>Autor:</b> {{ $procitana ->autor }}</p>
                        </div>
                        
                        <div class="dugmici-spisak">
                            <a href="{{ url('/procitane/show') }}/{{ $procitana ->id }}"><button type="button" class="btn btn-outline-secondary">Prikazi korisnika</button></a></br>

                            <a href="{{ url('/procitane/edit') }}/{{ $procitana ->id }}"><button type="button" class="btn btn-outline-secondary">Izmjeni korisnika</button></a></br>

                            <form action="{{ url('/procitane/delete') }}/{{ $procitana->id }}" method="HEAD">
                                @csrf
                                <button type="button" class="btn btn-outline-danger">Obrisi korisnika</button></a></br>
                            </form>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <footer>
        <div class="footer">
            <p>Dobrodošli na zvaničnu stranicu biblioteke...</p>
            <p>Kontaktirajte nas:066/565-786;  E-mail:biblioteka@gmail.com  </p> 
        </div>
    </footer>
</x-app-layout>