<x-app-layout>
    <x-slot name="header">
        <h2 class="naslov">
            {{ __('Kreiraj knjigu') }}
        </h2>
        <style>
        .naslov {
                background-color: #ffe6e6;
                font-family: "Times New Roman";
                padding: 10px;
                font-size:20px;
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


                    <form action="{{ url('/knjige/store') }}" method="PUT">
                    @csrf <!-- csrf  Cros site security -->
                        <p>Ime: </br><input name="ime" type="text" placeholder="Ime"></p>
                        <p>Autor: </br><input name="autor"  type="text" placeholder="Autor"></p>
                        <p>Godina: </br><input name="godina"  type="text" placeholder="Godina"></p>
                        <p>Opis: </br><input name="opis"  type="text" placeholder="Opis..."></p>
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


            <div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <p>Dobrodošli na zvaničnu stranicu biblioteke...</p>
            <p>Kontaktirajte nas:066/565-786;  E-mail:biblioteka@gmail.com  </p> 
        </div>
    </footer>
</x-app-layout>
