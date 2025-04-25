<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account</title>
</head>
<style>
    modal {

display: none;

position: fixed;

z-index: 1;

left: 0;

top: 0;

width: 100%;

height: 100%;

background-color: rgba(0,0,0,0.4);

}



.modal-content {

background-color: #fefefe;

margin: 15% auto;

padding: 20px;

border: 1px solid rgb(137, 204, 231);

width: 80%;

}



.close {

color: #aaa;

float: right;

font-size: 28px;

font-weight: bold;

}



.close:hover,

.close:focus {

color: black;

text-decoration: none;

cursor: pointer;

}
</style>
<body>

<button id="myBtn">Account</button>

<div id="myModal" class="modal">

  <div class="modal-content">

    <span class="close">&times;</span>

    <div class="data">
        <div class="nama">
            <p>ID Member: </p> 
            <p>Nama Lengkap: </p>
            <p>Alamat: </p>
            <p>Email: </p>
        </div>

        <div class="keterangan">
            <p>**Tunjukkan data ini pada penjaga saat ingin meminjam buku di perpustakaan Ambatubook.</p>
        </div>
    </div>

  </div>

</div>

<script>
    var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];



// Menampilkan pop up ketika tombol diklik

btn.onclick = function() {

  modal.style.display = "block";

}



// Menutup pop up ketika tombol (x) diklik

span.onclick = function() {

  modal.style.display = "none";

}



// Menutup pop up ketika area luar pop up diklik

window.onclick = function(event) {

  if (event.target == modal) {

    modal.style.display = "none";

  }

}
</script>
</body>
</html>