$(function() {

    $('.tambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data')
    })

    $('.tampilModalEdit').on('click', function(){

        $('#judulModal').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/PIPPolindra/public/prestasi/edit')
        const id = $(this).data('id');
        
        $.ajax({
           
            url: 'http://localhost/PIPPolindra/public/prestasi/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#password').val(data.password);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
            
        });

    });

});