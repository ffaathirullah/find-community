<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="style.css">

    <title>Hello, world!</title>
    <style >
     body {
    background: url(pt.png) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    .navbar-expand-lg{
     background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
    }
    .daftar{
      background-color: white;
    }
    .b {
      margin: 10px;
      height: 60px;
      background-color: #000E27;
      width: 31%;
      float: left;
      border-radius: 10px;
      font-size: 25px;
}

</style>
  </head>
  <body>
    <?php
  session_start();

  if ($_SESSION['level']=="") {
    header("location:login.php");
  }
  ?>
    
  <div class="container semua">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="menu.php">FindCommunity</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav navbar-toogler ml-auto">
            <a class="nav-item nav-link" href=""><b>Hai! <?php echo $_SESSION['username'];?></b>
            </a>
            <a class="nav-item nav-link" href="buat_comu.php"><b>Buat Community</b></a>
            <a class="nav-item nav-link" href="event/"><b>Event</b></a>
            <a class="nav-item nav-link" href="logout.php"><b>Logout</b></a>
            
          </div>
        </div>
    </nav>

    <div class="daftar mt-1">
        <div class="b">
        <a class="nav-item nav-link text-center" href="menu.php"><b>List Komunitas</b></a>
        </div>
        <div class="b">
        <a class="nav-item nav-link text-center" href="my_communitas.php"><b>My Komunitas</b></a>
        </div>
        <div class="b">
        <a class="nav-item nav-link text-center" href="komunitasku.php"><b>Komunitasku</b></a>
        </div>
        <div style="clear:both;"></div>
    </div>


    <div class="pencarian">
      <div class="container">
        <div class="row Search">
          <div class="col serachbebas">
               <form class="form-inline" action="sercing.php" method="post">
                  <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Cari . . .</label>
                    <input type="text" class="form-control" id="inputPassword2" name="nama" placeholder="masukan nama atau jenis komunitas ...">
                  </div>
                  <button type="submit" class="btn btn-primary mb-2" style="padding: 15px;">Cari Sekarang</button>
                </form>
          </div>
          
        </div>
        
      </div>
    </div>    
    <?php 
    include 'koneksi.php';
    $no = 1;
    $nama = $_SESSION['username'];
    $data =   mysqli_query($koneksi, "select * from user where username ='$nama'");
      $s = mysqli_fetch_assoc($data);
      $user1 = $s['id'];
    $data = "SELECT * FROM communitas where id_pembuat='$user1'";
    $result = mysqli_query($koneksi, $data);  
    while($d = mysqli_fetch_array($result)){
      ?>
    <div class="list">
      <div class="container shadow-lg  rounded listcommunity">
         <div class="row">
            <img src="<?php echo "file/".$d['nama']; ?>" class="gambar shadow rounded" alt="Responsive image" width="350" height="300">
            <div class="col-6">
              <div class="col">
                  <div class="row" id="judul">
                   <h4><?php echo $d['nama_komunitas'];?></h4>
                  </div>
                  <div class="row aku">
                      <form action="contoh.php" method="post">
                        <input type="submit" class="rounded-pill float-left" name="submit"  value="<?php echo $d['jenis_komunitas'];?>">
                      </form>
                     
                  </div>    
                  <div class="row mt-3 contoh">
                        <img src="img/lokasi.png" class="img-fluid" alt="Responsive image">
                        <p class="ml-1"><?php echo $d['alamat'];?></p>
                  </div>
                  <div class="row mt-5 lue">
                    <h5>Jumlah Anggota : <?php echo $d['jml_anggota'];?></h5>
                  </div>    
              </div>
            </div>

            <div class="col-sm logo text-center">
              <?php if ($d['jenis_komunitas'] == 'Teknologi') : ?>
              <img src="icon/teknologi.png" class="img-fluid mt-2" alt="Responsive image">
              <?php elseif ($d['jenis_komunitas'] == 'Olahraga') : ?>
                <img src="icon/sport.png" class="img-fluid mt-2" alt="Responsive image">
                <?php elseif ($d['jenis_komunitas'] == 'Pendidikan') : ?>
                <img src="icon/ilmu.png" class="img-fluid mt-2" alt="Responsive image">
                <?php elseif ($d['jenis_komunitas'] == 'Other') : ?>
                <img src="icon/other.png" class="img-fluid mt-2" alt="Responsive image">
                <?php endif; ?> 
              <form action="detail.php?id=<?php echo $d['id'];?>" method="post">
                <input type="hidden" name="useraktif" value="<?php echo $_SESSION['username'];?>">
                 <input type="submit" class="rounded-pill mt-4" name="submit"  value="lihat"
                 >
                
              </form>
              <br>
              <br>
              <a href="edit.php?id=<?php echo $d['id'];?>" class="btn btn-success"> <b>>> Edit <<</b></a>
              <br>
              <br>
              <a href="excel.php?id=<?php echo $d['id'];?>" class="btn btn-success"> <b>Ambil data</b></a>
            </div>
          </div>  
      </div>
    </div>
      <?php 
    }
    ?>
    <div class="footer text-center mt-2 p-2">
      <p>Copyright, All Rights Reserved By Find Communmity Sinergi</p>
    </div>
  </div> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>