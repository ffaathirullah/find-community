<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">


    <title>Hello, world!</title>
  </head>
  <body>
    <?php
  session_start();

  if ($_SESSION['level']=="") {
    header("location:login.php");
  }
  ?>
    <?php  
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from communitas where id='$id'");
   while ($d = mysqli_fetch_assoc($data)) {
    ?>
    <div class="container-fluid">
       <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">FindCommunity</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav navbar-toogler ml-auto">
            <a class="nav-item nav-link" href="menu.php"><b>Home</b></a>
            <a class="nav-item nav-link" href="#"><b>Community</b></a>
            <a class="nav-item nav-link" href="#"><b>Event</b></a>
            <a class="nav-item nav-link" href="#"><b>About</b></a>
          </div>
        </div>
    </nav>
      <div class="row">
        <div class="col judul">
          <div class="row">
            <h3><?php echo $d['nama_komunitas']; ?></h3>
          </div>
              <div class="row aku">
                <form action="contoh.php" method="post">
                <input type="submit" class="rounded-pill float-left" name="submit"  value="Olahraga">
                </form>
                <img src="img/bintang2.png" class="img-fluid float-left" alt="Responsive image">
              </div>    
              <div class="row mt-3 contoh">
                  <img src="img/lokasi.png" class="img-fluid" alt="Responsive image">
                  <p class="ml-1">Buah Batu, Bandung</p>
              </div>
            </div>
        </div>
      </div>
      <div class="row isi">
        <div class="col-8 isigambar">
          <div class="row gambar">
            <img src="<?php echo "file/".$d['nama']; ?>" class="img-fluid" alt="Responsive image">
          </div>
        </div>
        <div class="col-3 ml-4">
            <div class="row nama_ketua">
              <h5>Nama Ketua : </h5><br>
            </div>
            <div class="row nama">  
              <h4><?php echo $d['nama_ketua']; ?></h4>
            </div>
            
            <div class="row no_kontak">
                <h5>No Kontak : </h5>
            </div>
            <div class="row no">
                <h4><?php echo $d['no_telp']; ?></h4>
            </div>
            <div class="row no_kontak">
                <h5>Form Pendaftaran : </h5>
            </div>
            <div class="row no">
              <a href="<?php echo $d['form']; ?>"> <h4> <b>Klik Disini</b> </h4></a>
                
            </div>
            <div class="row anggota">
                <h5>Anggota : </h5>
            </div>  
            <div class="row jumlah">
                <h><?php echo $d['jml_anggota']; ?></h4>
            </div
            
            <?php   

              $comu =  $d['id'];

             ?>
            
    <?php
      $nama = $_SESSION['username'];
      $data =   mysqli_query($koneksi, "select * from user where username ='$nama'");
      $s = mysqli_fetch_assoc($data);
      $user1 = $s['id'];
      $select = mysqli_query($koneksi, "select * from bergabung where id_communitas =$comu and id_user =$user1");
      $fetch = mysqli_fetch_assoc($select);
      $select2 = mysqli_query($koneksi, "select * from rating where id_communitas =$comu and id_user =$user1");
      $fetch2 = mysqli_fetch_assoc($select2);

      
     ?>
    <br>
              
      <?php if ($fetch['id_user'] != $user1) : ?>
          
            <form action="bergabung.php" method="post">  
             <div class="row tombol">
              <input type="hidden" name="id_post" value="<?php echo $comu; ?>">   
        <br>  
              <input type="hidden" name="id_user" value="<?php echo $s['id']; ?>" >
              
              <button type="submit" class="btn btn-succes" >Bergabung</button>
              </form>

      <?php elseif($fetch['id_user'] == $user1) : ?>
              <button type="button" class="btn btn-secondary" disabled="true">Sudah Bergabung</button>
      <?php endif; ?> 
               <br>
                <br>
            <?php if ($fetch2['id_user'] != $user1) : ?>
            <form action="rating.php" method="post">  
             <div class="row tombol">
              <input type="hidden" name="id_post" value="<?php echo $comu; ?>">   
        <br> 
             <input type="range" name="points" min="0" max="5">
              <input type="hidden" name="id_user" value="<?php echo $s['id']; ?>">
              <br> 
              <button type="submit" class="btn btn-success" >Rate Now!</button>
              </form>
      <?php elseif($fetch2['id_user'] == $user1) : ?>
              <button type="button" class="btn btn-secondary" disabled="true">Sudah Sumbit</button>
      <?php endif; ?>
            </div>
          </div>
       </div>
      </div>
      <div class="row mt-5 maps">
        <h2>Deskripsi</h2>
      </div>
    <div class="row deskripsi">
              
              <p><?php echo $d['deskrisi']; ?></p>
            </div>
 <?php
   }
    ?>
    </div>

















<script type="text/javascript" src="js/star-rating.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>