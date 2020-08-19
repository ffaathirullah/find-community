<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/register.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
      <a class="navbar-brand" href="#">FindCommunity</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="#">Home</a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">Pricing</a>
          <a class="nav-item nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
          <img src="img/rocket.png" class="img-fluid" alt="Responsive image">
          <h5>Welcome</h5>
          <p>Register Now as well, so that you can use other  interisting features on  our website</p>
        </div>
        <div class="col-8 center">
          <h4 class="text-center pb-4">Create Your Account</h4>

          <form method="post" action="register_aksi.php">
            <div class="form-group text-center">
              <input type="text" class="form-control biodata" id="exampleInputText1" name="firstname" placeholder="First Name ">
              <input type="text" class="form-control biodata" id="exampleInputText1" name="username" placeholder="username ">
            </div>
            <div class="form-group text-center">
              
              <input type="password" class="form-control biodata" id="exampleInputPassword1" name="password" placeholder="Password">
              <input type="password" class="form-control biodata" id="exampleInputPassword1" name="confirpass" placeholder="Confirm Password">
            </div>
            <div class="form-group text-center">
              
              <input type="email" class="form-control biodata" id="exampleInputPassword1" name="email" placeholder="Your Email">
              <input type="text" class="form-control biodata" id="exampleInputPassword1" name="no_telp" placeholder="Your Phone">
            </div>
            <div class="col radio">
            <div class="form-check gender">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-laki" checked>
              <label class="form-check-label" for="exampleRadios1">
                Laki-laki
              </label>
              </div>
            <div class="form-check gender">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan" checked>
              <label class="form-check-label" for="exampleRadios1">
                Perempuan
              </label>
            </div>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill button">Register</button>
          </form>
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