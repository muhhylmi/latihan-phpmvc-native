$(function(){

	$('.btnTambahData').on('click', function(){
		$('#judulModal').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		
	});

	$('.tampilModalUbah').on('click', function(){

		$('#judulModal').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

		const id = $(this).data('id');


		$.ajax({
			url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama').val(data.nama);
				$('#nim').val(data.nim);
				$('#alamat').val(data.alamat);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}

		});

	});

});