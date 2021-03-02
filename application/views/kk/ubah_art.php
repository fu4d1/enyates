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
          Ubah Anggota Rumah Tangga
        </div>
      </div>

      <div class="row">
        <div class="col-xl-10">
            <form action="<?=base_url()?>kk/simpanArt/<?=$id_pengurus?>" method="post">
                <div class="form-group">
                    <label for="nama_art">Nama ART Asal</label>
                    <input type="text" class="form-control" name="nama_art" value="<?= strtoupper($art['nama_art']) ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="nama_art">Nama ART sesuai KK</label>
                    <input type="text" class="form-control" name="nama_kk" value="<?= strtoupper($art['nama_kk']) ?>">
                </div>

                <div class="form-group">
                    <label for="nik_art">Nomor N I K</label>
                    <input type="number" class="form-control" name="nik" value="<?= $art['nik'] ?>" data-mask="0000000000000000">
                </div>

                <div class="form-group">
                    <label for="ibu_kandung">Ibu Kandung</label>
                    <input type="text" class="form-control" name="ibu_kandung" value="<?= strtoupper($art['ibu_kandung']) ?>">
                </div>

                <input type="text" name="id_art" value="<?=$art['id_art']?>" hidden>
                <input type="text" value="<?=$id_pengurus?>" hidden>

                <button class="btn btn-primary float-right" type="submit">simpan</button>
                <a href="<?=base_url('kk/hapusArt').'/'.$art['id_art'].'/'.$id_pengurus?>" onclick="return confirm('Yakin mau menghapus <?= $art['nama_art']?>?')" class="btn btn-danger">Hapus <?=strtoupper($art['nama_art'])?></a>
                <a href="<?= base_url('kk/tambah/').$id_pengurus?>" class="btn btn-info">kembali</a>
            </form>
        </div>
      </div>
      


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/dist/jquery.mask.js"></script>
    <script>
    $(document).ready(function(){
      $(".form-control").change(function(){
          if($(this).val()!=''){
            $(this).addClass("is-valid")
          }
        });

        $(".form-control").each(function(){
          if($(this).val()==0000000000000000){
            $(this).val('');
          }

          if($(this).val()==''){
            $(this).addClass("is-invalid")
          }
        })
    });
    </script>
  </body>
</html>