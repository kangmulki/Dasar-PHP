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
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><B><i>LATIHAN KE 3</i></B></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Penggajihan <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Vaksin <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Pengulangan <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>



    <!-- FORM INPUT -->
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <b><i>PENGGAJIHAN KARYAWAN</i></b>
            </div>
            <div class="card-body">

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Bendahara</label>
                        <input type="text" class="form-control" placeholder="Nama bendahara">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Karyawan</label>
                        <input type="text" class="form-control" placeholder="Nama karyawan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Gaji</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <select id="inputState" class="form-control">
                            <option selected>Pilih Jabatan ...</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                        <select id="inputState" class="form-control">
                            <option selected>Pilih Pendidikan Terakhir ..</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lembur</label>
                        <input type="number" class="form-control" placeholder="Lembur">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Potongan</label>
                        <input type="number" class="form-control" placeholder="Potongan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- CARD -->
        <br><center>
            <div class="row-center">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-header">
                        <center><b><h3>STRUK PENGGAJIHAN</h3></b></center>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td><b><h4><i>GAJI POKOK</i></h4></b></td>
                            </tr>
                            <tr>
                                <td>Nama Bendahara</td>
                                <td>:&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nama Karyawan</td>
                                <td>:&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Gaji</td>
                                <td>:&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b><h4><i>Tunjangan</i></h4></b></td>
                            </tr>
                            <tr>
                                <td>Tunjangan Pendidikan</td>
                                <td>:&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Vakasi Lembur</td>
                                <td>:&nbsp;</td>
                                <td> Rp. 1.000.000</td>
                            </tr>
                            <tr>
                                <td><b><h4><i>Potongan</i></h4></b></td>
                            </tr>
                            <tr>
                                <td>Potongan</td>
                                <td>:&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Bendahara</td>
                                <td>:&nbsp;</td>
                                <td>Santi</td>
                            </tr>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            </center>
    </div>

    


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