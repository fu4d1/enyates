<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tambah data</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">KK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?=base_url('kk')?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-xl-10 mt-3 mb-5">
          Tambah Data
          <a href="<?= base_url('kk')?>" class="btn btn-info float-right">kembali</a>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <form>
            <div class="form-group">
                <label for="nomorpkh">Nomor PKH</label>
                <input type="text" class="form-control" name="nomorpkh" placeholder="Nomor PKH" data-mask="00 00 0000">
            </div>
            <div class="form-group">
                <label for="nomoratm">Nomor ATM</label>
                <input type="text" class="form-control" name="nomoratm" placeholder="Nomor ATM">
            </div>
            <div class="form-group">
                <label for="namapengurus">Nama Pengurus</label>
                <input type="text" class="form-control" name="namapengurus" placeholder="Nama Pengurus">
            </div>
            <div class="form-group">
                <label for="namapengurus">NO KK</label>
                <input type="text" class="form-control" name="namapengurus" placeholder="Nama Pengurus" data-mask="000000 000000 0000">
            </div>
            <div class="form-group">
                <label for="namapengurus">NIK</label>
                <input type="text" class="form-control" name="namapengurus" placeholder="Nama Pengurus">
            </div>
            <div class="form-group">
                <label for="nomorpkh">Dusun</label>
                <select id="inputState" class="form-control">
                    <option selected value="">-pilih-</option>
                    <option value="">...</option>
                    <option value="">...</option>
                    <option value="">...</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nomorpkh">Nomor PKH</label>
                <input type="text" class="form-control" name="nomorpkh" placeholder="Nomor PKH">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            </form>
        </div>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php base_url()?>/enyates/assets/js/jquery.mask.js"></script>
  </body>
</html>