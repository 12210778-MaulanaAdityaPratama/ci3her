<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input nama</title>
</head>
<body>
    
    <h1>Form Input Data Mahasiswa</h1>
    <form action="<?php echo base_url('mahasiswa/tambah') ?>" method="post">   
     <label for="name">Nim:</label><br>
  <input type="text" id="nim" name="nim"><br>
  <label for="name">Nama Lengkap:</label><br>
  <input type="text" id="nama" name="nama"><br>
  <label for="name">Kelas:</label><br>
  <input type="text" id="kelas" name="kelas"><br>
  <label for="name">Program Studi:</label><br>
  <input type="text" id="prodi" name="prodi"><br>
  <label for="name">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <input type="submit" value="Submit">
  <input type="submit" value="Batal">
</form> 
</body>
</html>