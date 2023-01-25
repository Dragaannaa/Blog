<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">     <!-- Koristila si internet -->
</head>
    <x-app-layout>
    <x-slot  name="header">
        <h2 class="naslov">
            {{ __('Čitajmo i plešimo, te dve zabavne radnje nikada nece naškoditi svetu...') }}
        </h2>
        <style>
            .naslov{
                background-color:#ffe6e6;
                font-family:"Gabriola";
                font-size:30px;
                text-align:center;
            }
            .container {
                background-color:#ffe6e6;
                font-family:"Gabriola";
                font-size:20px;
                text-align:justify;
                padding: 40px;
                
            
            }
             .slika {
                width: 100%;
                height: 500px;
             }   
            .footer{
                background-color:#ffe6e6;
                font-family:"Gabriola";
                font-size:30px;
                text-align:center;
                margin:5px;
            }
            .tekst {
                text-align:justify;
                font-family:"Gabriola";
                margin:40px;
                font-size:25px;
            }
            .ikone{
                height:50px;
                width:100%;
            }
                
            </style>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <img src="slika1.jpg" class="slika" >
        </div>
    <p class="tekst">Svako ko je u životu pročitao bar jednu dobru knjigu, odlično zna da čitanje knjiga predstavlja jedinstveno, neponovljivo zadovoljstvo.  Nažalost, bez obzira na ovu činjenicu, druženje sa knjigom je postalo navika koja je poslednjih godina u sve većem opadanju, a glavni uzrok tome je svakako razvoj tehnologije i digitalnih medija, kompjutera, pametnih telefona… Ono čega mnogi ljudi nisu svesni jeste da od čitanja knjiga imamo višestruke koristi. Predstavljamo vam 15 najvažnijih razloga zašto je čitanje korisno.</p>
    </br>
       <hr>
        </br>
 
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="boook.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large ">
      <p class="w3-center">Knjige</p><br>
      <p class="w3-center">Zašto je važno čitati?</p></br>
      <p class="w3-large">Zasigurno, jedna od glavnih prednosti čitanja knjiga jeste sticanje novih znanja. Knjige su bogat izvor informacija. Čitanje većeg broja knjiga iz iste oblasti produbljuje određenu tematiku, dok sa druge strane veći broj pročitanih knjiga o različitim temama proširuje vaše znanje iz različitih oblasti. U svakom slučaju, svaka nova knjiga koju ste pročitali pružiće vam mnoštvo novih informacija do kojih na drugi način niste mogli da dođete.</p></br>
      <p class="w3-large w3-text-grey w3-hide-medium">Svaki put kada čitate knjigu upoznajete se sa samom radnjom knjige, likovima, njihovim ličnostima i njihovim karakterima, i sa još mnogim drugim elementima koji se opisuju u knjizi. Dok vaš mozak obrađuje sve ove podatke, vi u stvari vežbate svoje pamćenje i poboljašavate ga.</p>
    </div>
</div>
    


<footer>
        <div class="footer">
            <p>Dobrodošli na zvaničnu stranicu biblioteke...</p>
            <p>Kontaktirajte nas:066/565-786;  E-mail:biblioteka@gmail.com  </p> 
        </div>
    </footer>
</x-app-layout>
