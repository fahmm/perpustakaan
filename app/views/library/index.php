<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	<div class="row mb-3">
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
			  Tambah Data
		</button>
	</div>
		<div class="row mb-1">
		<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off" >
			  <div class="input-group-append">
			    <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
			  </div>
			</div>
		</form>
	</div>


	<div class="row">
		<div class="col-lg-6">
			
			<h3 class="mt-2">Daftar Mahasiswa</h3>
			<ul class="list-group">
			<?php foreach ($data['mhs'] as $mhs) :?>
		    	<li class="list-group-item ">
		    	<?= $mhs['nama']?>
		    	<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" 
		    	onclick="return confirm('yakin?')">Delete</a>	
		    	<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
		    	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
		    	</li>
			<?php endforeach; ?>
			</ul>
	
		</div>
	</div>
	
</div>






<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
		  <div class="form-group">
		    <label for="nama">nama</label>
		    <input type="text" class="form-control" id="nama" name="nama">
		  </div>
		   <div class="form-group">
		    <label for="nip">nip</label>
		    <input type="number" class="form-control" id="nip" name="nip">
		  </div>
		   <div class="form-group">
		    <label for="email">email</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="jurusan">jurusan</label>
		    <select class="form-control" id="jurusan" name="jurusan">
		      <option value="Sistem Informasi">Sistem Informasi</option>
		      <option value="Tehnik Informatika">Tehnik Informatika</option>
		      <option value="Manajemen Informatika">Manajemen Informatika</option>
		    </select>
		  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary tombolModal">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>