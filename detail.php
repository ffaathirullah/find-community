<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/detail.css">
    <style>
    .left{
        background-color: #ccffcc;
        border-radius: 5px;
        margin-left: 30px;
    }
    .right{
        border-radius: 5px;
        background-color: #ffff99;
        margin-right: 30px;

    }
    .navbar-expand-lg{
        background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
    
    }
     body {
    background: url(bg.png) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    .btn-primary{
        margin-right: 10px;
    }
    .tulisan_justify{
    text-align: justify;
  }
  .btn-secondary{
    margin-right: 10px;
  }
</style>
    <title>Hello, world!</title>
  </head>
 <body onload="getPost()">
      <?php
  session_start();

  if ($_SESSION['level']=="") {
    header("location:login.php");
  }
  ?>

    <div class="container">
         <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Find Community</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
           <div class="navbar-nav navbar-toogler ml-auto">
            <a class="nav-item nav-link" href="menu.php"><b>Komunitas</b>
            </a>
            <a class="nav-item nav-link" href="buat_comu.php"><b>Buat Komunitas</b></a>
            <a class="nav-item nav-link" href="event/"><b>Event</b></a>
            <a class="nav-item nav-link" href="logout.php"><b>Logout</b></a>
            
          </div>
            </div>
        </nav>
        <?php  
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from communitas where id='$id'");
        while ($d = mysqli_fetch_assoc($data)) {
    ?>
        <div class="row mt-3">

            <div class="col gambar">
                <img src="<?php echo "file/".$d['nama']; ?>" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-4 side">
                <div class="row">
                    <div class="col">
                       <h4>Nama Komunitas : </h4>
                       <h4><?php echo $d['nama_komunitas']; ?></h4>
                    </div>
                </div>
                <div class="row">
                      <div class="col">
                       <h4>Nama Ketua : </h4>
                       <h4><?php echo $d['nama_ketua']; ?></h4>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                       <h4>Alamat : </h4>
                       <h4><?php echo $d['alamat']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <h4>No Telp : </h4>
                       <h4><?php echo $d['no_telp']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <h4>Jumlah Anggota : </h4>
                       <h4><?php echo $d['jml_anggota']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <h4>Form :  </h4>
                       <a href="<?php echo $d['form']; ?>">Klik Disini</a>
                    </div>
                </div>
           

                
           <div class="row">
             <?php 
            $comu =  $d['id'];
            $nama = $_SESSION['username'];
            $data =   mysqli_query($koneksi, "select * from user where username ='$nama'");
             $s = mysqli_fetch_assoc($data);
             $user1 = $s['id'];
            $select = mysqli_query($koneksi, "select * from bergabung where id_communitas =$comu and id_user =$user1");
           $fetch = mysqli_fetch_assoc($select);
            $select2 = mysqli_query($koneksi, "select * from rating where id_communitas =$comu and id_user =$user1");
            $fetch2 = mysqli_fetch_assoc($select2);
             ?>
             <?php if ($fetch['id_user'] != $user1) : ?>
                 <form action="bergabung.php" method="post">  
              <input type="hidden" name="id_post" value="<?php echo $comu; ?>">     
              <input type="hidden" name="id_user" value="<?php echo $s['id']; ?>" >
              <button type="submit" class="btn btn-primary" >Bergabung</button>
              </form>
             <?php elseif($fetch['id_user'] == $user1) : ?>
              <button type="button" class="btn btn-secondary" disabled="true">Sudah Bergabung</button>
            <?php endif; ?> 
                
            </div>
          </div>

        </div>
        <div class="row mt-3 description">
            <div class="col">
                <div class="col">
                    <h3>Description :</h3>
                </div>
                <div class="col text">
                  <?php  ?>
                    <p><?php  echo $d['deskrisi']; ?></p>
                </div>
            </div>
            <?php 

        }
             ?>
            <div class="col-4 mt-2 anggota">
                <form>
                 <div class="form-group">
                    <label for="exampleFormControlSelect2">List Anggota</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2" style="height:255px;">
                      <?php 
                      $id =$_GET['id'];
                      $no = 1;
                      $data = mysqli_query($koneksi, "select a.firstname from user a , communitas u,bergabung b WHERE a.id = b.id_user AND u.id = b.id_communitas AND b.id_communitas = '$id'");
                      while ($d = mysqli_fetch_assoc($data)) {
                       ?>
                    <option><?php echo $no++; ?>. <?php echo $d['firstname']; ?></option>
                    <?php 
                  }
                     ?>
                    </select>
                 </div>
                </form>
            </div>
            
        </div>
        <div class="row comment1 ">
            <div class="col">
                <h3>Comment</h3>
            </div>
        </div>
        <div class="row comment">
           <div id="post-content">  </div>
        </div>
        <?php 
            $select = mysqli_query($koneksi, "select * from bergabung where id_communitas =$comu and id_user =$user1");
           $fetch = mysqli_fetch_assoc($select);
            $select2 = mysqli_query($koneksi, "select * from rating where id_communitas =$comu and id_user =$user1");
            $fetch2 = mysqli_fetch_assoc($select2);
         ?>
        <form class="mb-5" action="comment_aksi.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><b>Tulis Comment Anda</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder=" Tulis Comment Anda Disini . . ." name="comment" ></textarea>
                <input type="hidden" name="id_post" value="<?php echo $comu; ?>">     
                <input type="hidden" name="id_user" value="<?php echo $s['id']; ?>" >
            </div>
            <button type="submit" class="btn btn-primary btn-comment">Add Comment</button>
         </form>
         <div class="footer text-center mt-2 p-1">
            <p>Copyright, All Rights Reserved By Find Communmity Sinergi</p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>