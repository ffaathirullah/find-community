<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/crtcommunity.css">

    <title>Hello, world!</title>
  </head>
  <body>

     <?php
  session_start();

  if ($_SESSION['level']=="") {
    header("location:login.php");
  }
  ?>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
      <a class="navbar-brand" href="menu.php">FindCommunity</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="">Hai! <?php echo $_SESSION['username'];?></a>
          <a class="nav-item nav-link" href="">Communitas</a>
          <a class="nav-item nav-link" href="event.php">Event</a>
          <a class="nav-item nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
        </div>
      </div>
      </div>
    </nav>
    

    <div class ="container-fluid isi">


    <!-- Navbar -->

      


    <!-- Akhir Navbar -->

    <!-- Isi Content -->

      <div class="row">
        <div class="col-2 text-center side">
          <img src="img/logocommunity.png" class="img-fluid" alt="Responsive image">
          <h5>Welcome</h5>
          <p>Register Now as well, so that you can use other  interisting features on  our website</p>
        </div>
        <div class="col-9 center">
          <div class="container data">
          <h4 class="text-center pb-4">Create Your Community</h4>
         <?php  
          include 'koneksi.php';
          $id = $_GET['id'];
          $data = mysqli_query($koneksi, "select * from communitas where id='$id'");
          while ($d = mysqli_fetch_assoc($data)) {
            ?>
          <form action="edit_aksi.php" method="post" enctype="multipart/form-data">
            <div class="col inputan">
              <div class="form-row">
                <div class="form-group col-md-5 comm">
                  <label for="inputEmail4">Nama Ketua</label>
                  <input type="text" class="form-control" id="inputEmail4" name="namaketua" placeholder="Nama Ketua" value="<?php echo $d['nama_ketua']; ?>">
              </div>
              <div class="form-group col-md-5 comm">
                  <label for="inputEmail4">Nama Komunitas</label>
                  <input type="text" class="form-control" id="inputEmail4" name="namakomunitas" placeholder="Nama Komunitas" value="<?php echo $d['nama_komunitas']; ?>">
                  <input type="hidden" class="form-control" id="inputEmail4" name="id" placeholder="Nama Komunitas" value="<?php echo $d['id']; ?>">
              </div>
            </div>
              <div class="form-row">
                <div class="form-group col-md-5 comm">
                  <label for="inputEmail4">No Telepon</label>
                  <input type="text" class="form-control" id="inputEmail4" name="notelp" placeholder="No Telepon" value="<?php echo $d['no_telp']; ?>">
              </div>
              <div class="form-group col-md-5 comm">
                  <label for="inputEmail4">Maps</label>
                  <input type="text" class="form-control" id="inputEmail4" name="maps" placeholder="Maps" value="<?php echo $d['maps']; ?>">
                  <input type="hidden" name="pembuat" value="<?php echo $user1;?>">
              </div>
            </div>
             <div class="form-row">
                <div class="form-group col-md-5 comm">
                  <label for="inputEmail4">Alamat</label>
                  <input type="text" class="form-control" id="inputEmail4" name="alamat" placeholder="Alamat" value="<?php echo $d['alamat']; ?>">
              </div>
              <div class="form-group col-md-5 comm">
                  <label for="inputEmail4">Jenis Komunitas</label>
                  <select class="form-control" name="jenis">
                <option value="Teknologi">Teknologi</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Other">Other</option>
                  </select>
              </div>
               <div class="form-group col-md-5 comm">
                  <label for="inputEmail4">From Pendaftaran</label>
                  <input type="text" class="form-control" id="inputEmail4" name="form" placeholder="From" value="<?php echo $d['form']; ?>">
                  <h6>* Jika Perlu (gunakan Google From / dll )</h6>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5 comm">
                  <label for="inputEmail4">Description</label>
                 <textarea class="form-control desc" id="inputEmail4" rows="10" placeholder=" Tulis Comment Anda Disini . . ." name="deskripsi"></textarea>
              </div>
            </div>
             <div class="form-group comm">
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" value="<?php echo "file/".$d['nama']; ?>">
          </div>
            <button type="submit" class="btn btn-primary rounded-pill button">Create</button>
          </div>
          </form>
          <?php 
        }
        ?>
        </div>
        </div>
      </div>
    <!-- Akhir Content -->
    </div>
    <div class="container-fluid text-center footer"><h4>Copy Right By Find Community Sinergi</h4></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>