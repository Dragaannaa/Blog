<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edituj knjigu') }}
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


                    <form action="{{ url('/knjige/update/') }}/{{ $knjiga->id }}" method="PUT">
                    @csrf <!-- csrf  Cros site security -->
                        <p>Ime:<br /><input name="ime" type="text" placeholder="ime" value="{{ $knjiga->name }}"></p>
                        <p>Autor:<br /><input name="autor"  type="text" placeholder="autor" value="{{ $knjiga->email }}"></p>
                        <p>Godina:<br /><input name="godina"  type="text" placeholder="godina" value="{{ $knjiga->telephone }}"></p>
                        <p>Opis:<br /><input name="opis"  type="text" placeholder="Opis..." value="{{ $knjiga->comment }}"></p>
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
