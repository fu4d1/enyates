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
          VALIDASI DATA KEPENDUDUKAN
        </div>
      </div>

      <div class="row">
        <div class="col-xl-10">
          <form id="form-pengurus">
            <div class="form-group">
                <label for="namapengurus">Nama Pengurus</label>
                <input type="text" class="form-control" id="namapengurus" name="namapengurus" value="<?= $pengurus['pengurus'] ?>">
            </div>
            <div class="form-group">
                <label for="nomorpkh">Nomor PKH</label>
                <input type="text" class="form-control" id="nomorpkh" name="nomorpkh" disabled value="<?= $pengurus['no_pes'] ?>">
            </div>
            <div class="form-group">
                <label for="nomoratm">Nomor ATM</label>
                <input type="number" class="form-control" name="nomoratm" id="nomoratm" value="<?= $pengurus['no_atm'] ?>">
            </div>
            <div class="form-group">
                <label for="nokk">NO KK</label>
                <input type="number" class="form-control" name="nokk" id="nokk" value="<?= $pengurus['nok'] ?>" data-mask="0000000000000000">
            </div>
            <div class="form-group">
                <label for="namapengurus">NIK</label>
                <input type="number" class="form-control" name="nik" id="nik" value="<?= $pengurus['nik'] ?>" data-mask="0000000000000000">
            </div>
            <div class="form-group">
                <label for="dusun">Dusun</label>
                <input type="text" class="form-control"  name="dusun" id="dusun" value="<?= $pengurus['dusun'] ?>">
            </div>
            <div class="form-group">
                <label for="ibu_kandung">Ibu Kandung <span class="badge badge-success"><?=$pengurus['pengurus']?></span></label>
                <input type="text" class="form-control is-valid"  id="ibu_kandung" name="ibu_kandung" value="<?= $pengurus['ibu_kandung'] ?>">
            </div>
            <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea class="form-control" id="catatan" rows="3"><?= $pengurus['catatan'] ?></textarea>
            </div>
            <input type="text" id="id_pengurus" hidden value="<?= $pengurus['id_pengurus'] ?>">
            </form>
            <button class="btn btn-primary float-right" id="simpan-pengurus">Simpan</button>
            <a href="<?= base_url('kk')?>" class="btn btn-outline-primary ">Kembali</a>
        </div>
      </div>

      <div class="row my-5">
      </div>
      
      <div class="row mt-5">
        <div class="col-xl-10 table-responsive-md">
        <a href="<?=base_url('kk/ubahArt').'/0/'.$pengurus['id_pengurus']?>" class="badge badge-success float-right">Tambah ART</a>
        <h5>Anggota Rumah Tangga</h5>
          <table id="data" class="table table-sm table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">N I K</th>
                <th scope="col">Ibu Kandung</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($art as $value) : ?> 
              <tr>
                <th scope="row"><?= $no++?></th>
                <td>
                  <a href="<?=base_url('kk/ubahArt').'/'.$value['id_art'].'/'.$pengurus['id_pengurus']?>">  
                    <?php
                      if ($value['nama_kk']) {
                        echo $value['nama_kk'];
                      }else{
                        echo $value['nama_art'];
                      }
                    ?>
                  </a>
                </td>
                <td><?=$value['nik']?></td>
                <td><?=$value['ibu_kandung']?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <br>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
            if($(this).val()==''){
                $(this).addClass("is-invalid")
            }
        })

        $(document).scrollTop($(document).height());
        $('#simpan-pengurus').click(function(){
          pengurus = $("#namapengurus").val();
          nomorpkh = $("#nomorpkh").val();
          nomoratm = $("#nomoratm").val();
          nokk = $("#nokk").val();
          nik = $("#nik").val();
          dusun = $("#dusun").val();
          ibu_kandung = $("#ibu_kandung").val();
          id_pengurus = $("#id_pengurus").val();
          catatan = $("#catatan").val();
          
          $.ajax({
            type:"post",
            url:"<?=base_url('kk/simpanPengurus')?>",
            data:{pengurus:pengurus,no_pes:nomorpkh,no_atm:nomoratm,nok:nokk,nik:nik,dusun:dusun,ibu_kandung:ibu_kandung,catatan:catatan,id_pengurus:id_pengurus},
            success:function(data){
              alert('Data berhasil disimpan');
              window.location.reload();
            }

          })

        });
      });
    </script>
  </body>
</html>