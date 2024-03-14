<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tugas Individu 3 Aziz</title>

        <!-- Fonts -->
        <link href="{{ asset('css/styleSatu.css') }}" rel="stylesheet">
    </head>
    <body>
        <x-navbar-atas/>
        <h2 class="title">FABEL</h2>
    <div id="content">
        <center><h2>Rubah dan Burung Bangau</h2></center>
        <br>
        <p>Pada suatu hari seekor rubah yang licik berencana untuk mempermaikan temannya – seekor burung bangau yang penampilannya selalu membuat sang Rubah tertawa.</p>    
        <br>
        <p>“Kamu harus datang dan menikmati makan siang bersamaku hari ini,” kata sang Rubah kepada sang Bangau, sambil tersenyum-senyum karena memikirkan gurauan yang akan diperbuat olehnya. Sang Bangau dengan senang menerima undangan dari sang Rubah dan datang pada siang hari itu.</p>
        <br>
        <p>Untuk makan siang, sang Rubah menyiapkan sup yang disajikan pada piring yang sangat ceper dan hampir datar, sehingga sang Bangau tidak bisa menikmati sup tersebut, hanya ujung paruhnya saja yang bisa menyentuh air sup. Tak setetes sup yang bisa di minumnya, sedangkan sang Rubah menjilati sup tersebut dengan gampangnya sambil tertawa-tawa hingga sang Bangau menjadi sangat kecewa karena telah dipermainkan.</p>
        <br>
        <img src="{{ asset('image/gambar 1.jpg')}}" alt="gambar rubah memberikan makanan dengan piring">
        <br>
        <p>Sang Bangau yang lapar dan merasa tidak senang, tetap berusaha untuk tenang. Lalu kemudian sang Bangau balas mengundang sang Rubah untuk makan siang keesokan hari di rumahnya.</p>
        <br>
        <p>Sang Bangau balas mempermainkan sang Rubah dengan menyiapkan ikan pada guci yang tinggi</p>
        <br>
        <p>Keesokan hari, tepat pada saat makan siang, sang Rubah tiba di rumah sang Bangau yang menyediakan ikan yang sangat lezat sebagai menunya, tetapi ikan tersebut di sajikan dalam sebuah guci tinggi yang mempunyai mulut guci yang sempit.</p>
        <br>
        <p>Sang Bangau dengan gampang memakan ikan tersebut dengan paruhnya yang panjang sedangkan sang Rubah hanya bisa menjilati pinggiran guci sambil mencium lezatnya makanan yang tersaji.</p>
        <br>
        <img src="{{ asset('image/gambar 2.jpg')}}" alt="bangau makan dengan botol panjang">
        <br>
        <p>Saat sang Rubah menjadi marah, dengan tenangnya sang Bangau berkata: “Jangan mempermainkan orang karena kamu sendiri pasti tidak suka untuk dipermainkan”.</p>
        <br>
        <h2>Pesan Moral Yang Dapat Diambil : </h2>
        <p><i>Jadi pembelajaran yang dapat kita teladani dari Dongeng Anak Bergambar : Rubah dan Burung Bangau ini adalah Janganlah mempermainkan orang lain karena kita juga tidak suka jika dipermainkan orang lain.</i></p>
    </div>
    <x-footer/>
        <script src="{{ asset('js/scriptSatu.js') }}"></script> 
    </body>
</html>
