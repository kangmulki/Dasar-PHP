<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>  
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mulki</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="latihanform.php">Penggajihan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tes Vaksin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Pengulangan</a>
                </li>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>


        <center>
            <br>
                <h3>Program Penggajihan</h3>
                <h2>PT. GARUDA KELINCI AKUR</h2><br>
        </center>
        <!-- FORM INPUT -->
            <form>
                
            <div class="form-group container">
            <div class="card">
                    <div class="card-header">
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Bendahara</label>
                    <input type="text" class="form-control" name="bendahara">
                    </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Nama Karyawan</label>
                    <input type="text" class="form-control" name="nama">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jk">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Tanggal Gaji</label>
                    <input type="date" class="form-control" name="tanggal_gaji"d4">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputState">Jabatan</label>
                    <select class="form-control" name="jabatan">
                        <option selected>Choose...</option>
                        <option value="Direktur">Direktur</option>
                        <option value="Manager">Manager</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="OB">OB</option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputState">Pendidikan Terakhir</label>
                    <select class="form-control" name="pendidikan">
                        <option selected>Choose...</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Lembur</label>
                    <input type="text" class="form-control" name="lembur">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Potongan</label>
                    <input type="text" class="form-control" name="potongan">
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Proses</button>
              </div>
              </div>
            </div>
            </div>
            </form>

            
            
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>