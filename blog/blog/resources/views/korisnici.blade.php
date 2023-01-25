<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="korisnici">
            {{ __('Registrovani korisnici u našoj biblioteci ') }} 
        </h2>
        <style>
            .korisnici {
                background-color: #ffe6e6;
                font-family: "Times New Roman";
                padding: 10px;
                font-size:20px;
                text-align:center;
            }
            .polje{
                background-color: #ffe6e6;
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

    

    @foreach ($korisnici as $korisnik)
        <div class="py-6 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div >

                    <div class="polje">
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
                            <p><b>Knjiga:</b> {{ $korisnik ->comment }}</p>
                        </div>
                        
                        <div class="dugmici-spisak">
                            <a href="{{ url('/korisnici/show') }}/{{ $korisnik ->id }}"><button type="button" class="btn btn-outline-secondary">Prikazi korisnika</button></a></br>

                            <a href="{{ url('/korisnici/edit') }}/{{ $korisnik ->id }}"><button type="button" class="btn btn-outline-secondary">Izmjeni korisnika</button></a></br>

                            <form action="{{ url('/korisnici/delete') }}/{{ $korisnik->id }}" method="HEAD">
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