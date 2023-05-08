<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Up</title>
    <link rel="stylesheet" href="css/sparringpage.css">
</head>
<body>
    <section class="navbar" >
        <div class="navbar-left">
            <div style="margin-left: 8%;" class="logo">

            </div>
            <a class="sparring" href="sparringpage.html" >Sparring</a>
            <a class="mabar" href="mabar.html" >Mabar</a>
            <a class="kompetisi" href="Kompetisi.html" >Kompetisi</a>
            <a class="tim" href="#" >Tim</a>
        </div>
        <a class="user" style="margin-right: 4%; background-color: grey; color: white; " href=""></a>
    </section>
    <section class="sparring-header" >
        <div class="banner">
            PILIH LAWAN SPARRING
        </div>
    </section>
    <section class="sparring-search" >
        <div class="input-box">
            <div class="icon-box">
            </div>
            <input type="text" placeholder="Cari Nama Sparring..." >
        </div>
        <div class="input-box">
            <div class="icon-box">
            </div>
            <select name="" id="" >
                <option value="" disabled selected hidden>Pilih Nama Lokasi...</option>
                <option value="">ITEM 1</option>
                <option value="">ITEM 1</option>
                <option value="">ITEM 1</option>
            </select>
        </div>
        <div class="input-box">
            <div class="icon-box">
            </div>
            <select name="" id="" >
                <option value="" disabled selected hidden>Pilih Cabang Olahraga...</option>
                <option value="">ITEM 1</option>
                <option value="">ITEM 1</option>
                <option value="">ITEM 1</option>
            </select>
        </div>
        <button class="search" >
            Cari
        </button>
    </section>
    <section class="box-wrapper">
        @foreach ($sparring as $sparring)
        <a class="box" href="#" >
           <button class="box-outer" style="width: 100%; height: 100%;" >
            <div class="box-top">
                <div class="box-logo">

                </div>
                <div style="margin-left: 5%; width: 60%;" >
                    <p style="font-size: 0.8vw;" >{{$sparring->olahraga}}</p>
                    <p style="font-size: 1.5vw; font-family: opensans-bold; margin-top: 3%;" >{{$sparring->nama}}</p>
                    <div class="access">
                        {{$sparring->aksebilitas}}
                    </div>
                    <div class="age">
                        15-17
                    </div>
                </div>
            </div>
            <div class="box-bottom">
                <div class="line">
                    <div class="bottom-icon">

                    </div>
                    {{$sparring->tanggal}}
                </div>
                <div class="line">
                    <div class="bottom-icon">

                    </div>
                    {{$sparring->lokasi}}
                </div>
                <div class="line">
                    <div class="bottom-icon">

                    </div>
                    {{$sparring->biaya}}
                </div>
            </div>
           </button>
        </a>
        @endforeach
    </section> 
    <a href="create">tambah</a>
    <section class="white-space" ></section>   
</body>
</html>