<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="korisnici">
            {{ __('Registrovane knjige u našoj biblioteci ') }} 
        </h2>
        <style>
            .korisnici {
                background-color: #ffe6e6;
                font-family: "Times New Roman";
                padding: 10px;
                font-size:20px;
                text-align:center;
                border-radius:20px;
            }
            .kocka{
                background-color: #ffe6e6;
                padding:20px;
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

    

    @foreach ($knjige as $knjiga)
        <div class="py-6 ">
            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="kocka">
                        <!--
                        -->
                        {{-- Insert komponente sa slanjem podataka komponenti
                        <x-knjige :users="$users" /> --}}

                        <div class="main-spisak">
                            <h1><b>Ime:</b> {{ $knjiga ->ime }}</h1></br>
                            <p><b>Autor:</b> {{ $knjiga ->autor }}</p></br>
                            <p><b>Godina:</b> {{ $knjiga ->godina }}</p></br>
                        </div>
                        <div class="komentar-spisak">
                            <p><b>Opis:</b> {{ $knjiga ->opis }}</p></br>
                        </div>
                        
                        <div class="dugmici-spisak">
                            <a href="{{ url('/knjige/show') }}/{{ $knjiga ->id }}"><button type="button" class="btn btn-outline-secondary">Prikazi knjigu</button></a></br>
                        </br>
                            <form >
                                @csrf
                               
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