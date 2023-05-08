<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ini create</h1>
    <form action="/sparring/store" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="nama klub">
        <select name="olahraga">
                <option value="">Nama Olahraga</option>
                <option value="Futsal">Futsal</option>
                <option value="Sepak bola">Sepak bola</option>
                <option value="Basket">Basket</option>
                <option value="Badminton">Badminton</option>
                <option value="Renang">Renang</option>
        </select>
        <select name="aksebilitas">
                <option value="">aksebilitas</option>
                <option value="Terbuka">Terbuka</option>
                <option value="Private">Private</option>
        </select><br>
        <input type="text" name="lokasi" placeholder="masukkan lokasi"><br>
        <input type="text" name="tanggal" placeholder="masukkan tanggal"><br>
        <input type="text" name="biaya" placeholder="masukkan biaya"><br>
        <textarea name="deskripsi" cols="30" rows="10" placeholder="masukkan deskripsi"></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>