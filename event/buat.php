<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title> Event </title>
</head>

<body>
    <!-- Membuat Navbar -->

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../menu.php">Find Community</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto navigasi">
                    <a href="index.php"><b>Kembali</b></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar -->

    <!-- Content -->

    <div class="row">
        <div class="col-10 mt-5 mx-auto content">
            <div class="row">
                <div class="col logo text-center">
                    <img src="logocommunity.png" class="img-fluid text-center gambar" alt="Responsive">
                    <p>Silahkan Buat event sesuai keinginan anda terima kasih sudah memakai aplikasi kami semoga semua
                        keingnan anda terpuaskan</p>
                        <p><b>* Jika ingin menjadi TOP event Harap Hubungi 08990360375 *</b></p>
                </div>
                <div class="col">

                    <form action="event_aksi.php" method="post" enctype="multipart/form-data">
                        <div class="form-inline form">
                            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="nama" 
                                placeholder="Nama Pembuat">
                            <input type="text" class="form-control left" id="event" aria-describedby="emailHelp" name="judul" 
                                placeholder="Nama Event">
                        </div>
                        <div class="form-inline mt-3 form">
                            <input type="date" class="form-control" id="email" aria-describedby="emailHelp" name="tanggal" 
                                placeholder="Tanggal Kegiatan">
                            <select class="form-control left" name="jenis">
                                <option value="seminat">Seminar</option>
                                <option value="Tournament">Tournament</option>
                            </select>
                        </div>

                        <div class="form-inline mt-3 form_textarea">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" cols="64" name="deskripsi" 
                                placeholder="Description . . ."></textarea>
                        </div>
                        <div class="form-inline mt-3 file">

                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                        </div>
                        <div class="form-inline mt-3 file">
                            <button type="submit" class="btn btn-success"
                                id="create">Create
                                Event</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>