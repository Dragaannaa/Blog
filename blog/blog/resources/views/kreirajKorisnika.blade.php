<x-app-layout>
    <x-slot name="header">
        <h2 class="naslov">
            {{ __('Kreiraj korisnika') }}
        </h2>
        <style>
            .naslov{
                background-color: #ffe6e6;
                font-size:25px;
                font-family:"Times New Roman";
                text-align:center;
            }
            .polje {
                background-color:#ffe6e6;
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="polje">


                    <form action="{{ url('/korisnici/store') }}" method="PUT" >
                    @csrf <!-- csrf  Cros site security -->
                        <p>Ime:</br><input name="name" type="text" placeholder="Naziv korisnika"></p></br>
                        <p>e mail:</br><input name="email"  type="text" placeholder="e-mail"></p></br>
                        <p>Telefon:</br><input name="telephone"  type="text" placeholder="Telefon"></p></br>
                        <p>Komentar:</br><input name="comment"  type="text" placeholder="Opis..."></p></br>
                        <p><button type="submit">Snimi</button></p>
                    </form>


                    <!-- Ispisivanje poruke sa validacije -->

                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="background-color:red; list-style: none; padding: 10px">Poruka: {{ $error }}</li>
                            @endforeach

                        </ul>
                    @endif

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
