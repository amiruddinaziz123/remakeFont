<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tugas Individu 3 Aziz</title>

        <!-- Fonts -->
        <link href="{{ asset('css/styleEmpat.css') }}" rel="stylesheet">
    </head>
    <body>
        <x-navbar-kiri/>
        <div class="pembungkus-title">
        
        </div>
        <h1 class="title">HOROR</h1>
        
        <div id="content">
            <center><h2>Kisah Seram Penumpang</h2></center>
            <br>
            <p>Seorang pria mengemudi pulang larut malam ketika dia melihat seorang gadis meminta tumpangan. Gadis cantik itu mengenakan gaun putih yang indah.</p>
            <br>
            <img src="{{ asset('image/younggirl1.webp') }}" alt="younggirl1">
            <br>
            <p>Pria itu memberikan tumpangan padanya dan mereka memulai percakapan yang menarik. Dia menurunkan gadis itu di rumahnya.</p>
            <br>
            <img src="{{ asset('image/younggirl2.jpeg') }}" alt="younggirl2">
            <br>
            <p>Keesokan harinya, saat mengemudi untuk bekerja dia memperhatikan bahwa gadis itu secara kebetulan telah melupakan sweter di mobilnya.</p>
            <br>
            <p>Dia berkendara menuju rumah si gadis untuk menyerahkan sweter. Seorang wanita tua membuka pintu ketika dia membunyikan bel.</p>
            <br>
            <p>Dia menceritakan kejadian yang terjadi tadi malam dan memberikan sweter kepada wanita itu.</p>
            <br>
            <p>Wanita itu menolak dan terlihat bersedih dan sedikit aneh.</p>
            <br>
            <img src="{{ asset('image/younggirl3.jpeg') }}" alt="younggirl3">
            <br>
            <p>Pria itu menanyai wanita itu lagi. Dia kaget ketika wanita itu mengatakan itu adalah sweater putrinya yang meninggal dalam kecelakaan mobil beberapa tahun yang lalu.</p>
            
        </div>
        <footer class="footer">
            <h3>Follow Saya di</h3>
            <div>
                <a href="#">amiruddinaziz123<br><img src="{{ asset('image/logoGithub.png') }}" alt="logoGithub"></a>
            </div>
            <div>
                <a href="#">aamiruddin_aziz<br><img src="{{ asset('image/logoig.png') }}" alt="logoig"></a>
            </div>
            
        </footer>
        <script src="{{ asset('js/scriptEmpat.js') }}"></script> 
    </body>
</html>
