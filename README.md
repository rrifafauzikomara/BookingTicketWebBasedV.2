# Aplikasi Pemesanan Ticket Berbasis Web V.2

## Deskripsi Aplikasi :
1.  Kelanjutan dari <a href="https://github.com/rrifafauzikomara/Aplikasi-Pemesanan-Ticket-Berbasis-Web-V.1">sini</a>
2.  Mempunyai 3 actor : user biasa, user member (login) dan admin (login)
3.  Untuk login admin : user = admin dan pass = admin
4.  Untuk menu Lokasi, didapatkan setelah melakukan tracking berbasi mobile (android) dengan menginputkan lokasi berdasarkan id kendaraan (no polisi bus)
5.  Untuk demo aplikasi android bisa di download di <a href="https://drive.google.com/open?id=18y97hdUn3PcDtWGa0ia4rhgtlrdo24Jd">sini</a>
6.  Untuk demo login aplikasi android : user = rifa dan pass : fauzi
7.  Jika melakukan register, harap verifikasi akun tersebut melaui website <a href="http://r-fauzi.xyz">Kami</a> dibagian admin, jika sudah makan akun tersebut dapat login aplikasi android.

## Screenshot Aplikasi Android
<pre>
<img src="Screenshot_2018-02-14-13-55-10.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-55-30.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-55-38.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-55-52.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-55-59.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-56-08.png" width="250" height="444">
</pre>

<pre>
<img src="Screenshot_2018-02-14-13-56-16.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-56-32.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-56-49.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-56-58.png" width="250" height="444">         <img src="Screenshot_2018-02-14-13-57-08.png" width="250" height="444">
</pre>

## Demo Aplikasi Website
Untuk Demo Website <a href="http://r-fauzi.xyz">Klik</a>

## Demo Aplikasi Android
Donwload dan Install Aplikasinya di <a href="https://drive.google.com/open?id=18y97hdUn3PcDtWGa0ia4rhgtlrdo24Jd">sini</a>
<br>Note : Pilih yang "debug" untuk di install, karna yang release untuk di upload di PlayStore

### Source Code
1. Link Source Code Android : <a href="https://gitlab.com/rrifafauzikomara/Tracking">Klik Me</a>
2. Link Source Code API dan Website : <a href="https://gitlab.com/rrifafauzikomara/Website">Klik Me</a>

### Petunjuk menjalankan source code aplikasi
1. Jika anda ingin menjalankan aplikasi android secara local menggunakan IP jaringan laptop dan HP anda, silahkan ganti IPnya di file **Server.java**
2. Setelah membuka website melalui link diatas, pilih menu **Cek Pesanan** dan masukan no booking yang sudah di booking yaitu ***100*** kemudian pilih aksi **Cetak QR Code** untuk mendapatkan data QR Code.
3. Register dan Login pada aplikasi android yang telah terinstall / menggunakan akun diatas untuk mendemo aplikasinya, setelah login pilih menu **Scan QR COde** pada Navigation Drawer untuk mengecek data ***QR Code*** yang telah di dapatkan tadi apakah sesuai datanya atau tidak atau sukses atau gagal.
4. Kemudian untuk menu **Profile** digunakan untuk pegawai yang ingin eksis dan mengupload foto mereka
5. Menu **Tracking** digunakan untuk menandai Bus yang dijelajahi telah berhenti di tempat peristirahatan tersebut sehingga dapat di cek oleh orang tua yang khawatir melalu link ***Website*** diatas dimenu ***Lokasi*** dengan menginputkan Id Kendaraan yang sesuai dengan waktu tracking pegawai.
