
$(document).ready(function(){
  $("#tahun").text( (new Date).getFullYear() );
  
  $('#mdl, #mdl2').click(function(){
    let judul = $(this).text()
    $('#logoutModal').modal('show');
    $('.modal-title').text(judul)
  })

  $('#kotak').on('keyup',function(){
    let tulisan = $('#kotak').val();
     $.ajax({
      url:'<?=base_url()?>welcome/ajax',
      type:'post',
      data:{text:tulisan},
      dataType:'json',
      success:function(hasil){
        if (hasil.length >10){
          $('#kotak').addClass('is-invalid');
        }else{
          $('#kotak').removeClass('is-invalid');
          $('#kotak').addClass('is-valid');
        }
      }
     })
  })
})
