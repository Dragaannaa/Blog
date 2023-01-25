<html> 
    <head>
        <title>Knjige</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
    <style>
        .naslov{
                background-color: #ffe6e6;
                font-family: "Times New Roman";
                padding: 10px;
                font-size:20px;
                text-align:center;
                border-radius:20px;
        }
        .row{
            text-align:justify;
        }
        .dio1{
            background-color: #ffe6e6;
            font-family: "Times New Roman";
            padding: 10px;
            border-radius:20px;
            width:20%;
            text-align:center;
            float:right;
        }
        .pozadina{
            padding:50px;
        }
        .footer{
                background-color:#ffe6e6;
                font-family:"Gabriola";
                font-size:30px;
                text-align:center;
                margin:5px;
            }
    </style>
    <body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="naslov">
            {{ __('Knjige') }}
        </h2>
    </x-slot>
    <div class="container">
  <div class="row">
    <div class="col">
    <img src="pregovaracica.jpg">
        <p>Thea Paris čitav svoj život bori se s krivnjom. Kad je imala samo osam godina, smrznuta od straha promatrala je otmicu svog dvanaestogodišnjeg brata Nikosa iz njihova doma u Kanziju u Africi...</p>
  </div>
    <div class="col">
    <img src="plesalaa.jpg" >
        <p>Osovina radnje vrti se oko Ivanja. Krv se budi i življe kuca u tom preporodu prirode. Goran Stendahl došao je na odmor u selo, iz kojega i sam potječe. U prvi se mah i dosađuje, ali...</p>
  </div>
    <div class="col">
    <img src="macak.png">
        <p>Zanimljiva priča u kojoj su glavni akteri James, ulični svirač i Bob, ulični mačak.
        Knjiga Fantastični mačak Bob je međunarodna senzacija koja je 52 tjedna zaredom bila na engleskim bestseller listama te je rasprodana u 26 država.</p>
    </div>
    <div class="col">
    <img src="pregovaracica.jpg">
        <p>Thea Paris čitav svoj život bori se s krivnjom. Kad je imala samo osam godina, smrznuta od straha promatrala je otmicu svog dvanaestogodišnjeg brata Nikosa iz njihova doma u Kanziju u Africi...</p>
  </div>
    <div class="col">
    <img src="plesalaa.jpg" >
        <p>Osovina radnje vrti se oko Ivanja. Krv se budi i življe kuca u tom preporodu prirode. Goran Stendahl došao je na odmor u selo, iz kojega i sam potječe. U prvi se mah i dosađuje, ali...</p>
  </div>
    <div class="col">
    <img src="macak.png">
        <p>Zanimljiva priča u kojoj su glavni akteri James, ulični svirač i Bob, ulični mačak.
        Knjiga Fantastični mačak Bob je međunarodna senzacija koja je 52 tjedna zaredom bila na engleskim bestseller listama te je rasprodana u 26 država.</p>
    </div>
  </div>
</div>

    </body>
    <footer>
        <div class="footer">
            <p>Dobrodošli na zvaničnu stranicu biblioteke...</p>
            <p>Kontaktirajte nas:066/565-786;  E-mail:biblioteka@gmail.com  </p> 
        </div>
    </footer>
    </x-app-layout>
</html>