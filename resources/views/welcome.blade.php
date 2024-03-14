<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tugas Individu 3 Aziz</title>

        <!-- Fonts -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <x-navbar-atas/>
        <h1 class="title">WELCOME</h1>
        <div id="content">
            <h2>Pembuat Website : Amiruddin Aziz</h2>
            <h2>Kelas : Xi PPLG 3</h2>
            <h2>No Absen : 03</h2><br>
            <p>Website ini dibuat untuk memenuhi tugas joobsheyet tugas individu 3 Amiruddin Aziz. Website ini bukanlah website yang sempurna karena kesempurnaan hanya dimiliki oleh tuhan. Jadi mohon maaf jika ada kesalahan atau ketidaksesuaian terhadap website ini. Dan untuk website kali ini saya membuatnya tanpa framework apapun jadi kali ini saya mohon maaf tidak dapat membagikan codingan website ini secara terang terangan. Dan untuk guru pengajar, saya ingin memohon untuk nilai saya dinaikkan untuk tugas kali ini ^v^. Terima kasih.</p>
        </div>
        <footer class="footer">
            <h3>Follow Saya di</h3>
            <div>
                <a href="#">amiruddinaziz123<br><img src="image/logoGithub.png" alt="logoGithub"></a>
            </div>
            <div>
                <a href="#">aamiruddin_aziz<br><img src="image/logoig.png" alt="logoig"></a>
            </div>
            
        </footer>
        
        <script src="{{ asset('js/script.js') }}"></script>   
    </body>
</html>
