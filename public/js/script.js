$(function(){
	$('.tombolTambahData').on('click', function(){
		$('#judulModal').html('Tambah Data Mahasiswa');
		$('.tombolModal').html('Tambah Data');

	});

	$('.tampilModalUbah').on('click', function(){
		$('#judulModal').html('Ubah Data Mahasiswa');
		$('.tombolModal').html('Edit Data');
		$('.modal-body form').attr('action', 'http://localhost/MVC_1/public/mahasiswa/ubah')

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/MVC_1/public/mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success : function(data){
				$('#nama').val(data.nama);
				$('#nip').val(data.nip);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
				
			}
		});

	});



});