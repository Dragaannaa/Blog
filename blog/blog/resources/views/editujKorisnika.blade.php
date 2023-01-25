<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edituj korisnika') }}
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 komplet-spisak">


                    <form action="{{ url('/korisnici/update/') }}/{{ $korisnik->id }}" method="PUT">
                    @csrf <!-- csrf  Cros site security -->
                        <p>Ime:<br /><input name="name" type="text" placeholder="Naziv klijenta" value="{{ $korisnik->name }}"></p>
                        <p>e mail:<br /><input name="email"  type="text" placeholder="e-mail" value="{{ $korisnik->email }}"></p>
                        <p>Telefon:<br /><input name="telephone"  type="text" placeholder="Telefon" value="{{ $korisnik->telephone }}"></p>
                        <p>Knjiga:<br /><input name="comment"  type="text" placeholder="Opis..." value="{{ $korisnik->comment }}"></p>
                        <p><button type="submit" class="dugme">Snimi</button></p>
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
