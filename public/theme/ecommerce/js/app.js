
// Mesesji ekrandan siliyor

setTimeout(() => {
   $('.alert').slideUp(500);
}, 3000);


$('#urun-adet').on('change', () => {
   let id  = $('#urun-adet').attr('data-id');
   let adet = $('#urun-adet').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $.ajax({
      type : 'PATCH',
      url  : '/sepet/guncelle/' + id,
      data : {
          adet : adet

      },
      success : () => {
          window.location.href = '/sepet';
      }
   });

});

