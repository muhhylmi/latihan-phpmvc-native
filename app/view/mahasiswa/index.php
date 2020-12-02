<div class="container mt-4">
	<div class="row">
		<div class="col-6">
			<?php Flasher::flash(); ?>
		</div>	
	</div>


	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary btnTambahData" data-toggle="modal" data-target="#formModal">
			  Insert Data
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-6">
			<form action="<?php echo BASEURL ?>/mahasiswa/cari" method="post">
				<div class="input-group my-3">
				  <input type="text" class="form-control" name="keyword" id="keyword" placeholder="cari mahasiswa.." aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary btn-primary" type="submit" id="button-cari">cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h2 class="text-left">Daftar Mahasiswa</h2>
			<ul class="list-group mt-4">
			<?php foreach ($data['mhs'] as $mhs) :?>	
			  <li class="list-group-item">
			  	<?php echo $mhs['nama'] ?>	
			  	<a class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?')" href="<?php echo BASEURL ?>/mahasiswa/hapus/<?php echo $mhs['id'] ?>">delete</a>
			  
			  	<a class="badge badge-success float-right ml-1 tampilModalUbah" href="<?php echo BASEURL ?>/mahasiswa/ubah/<?php echo $mhs['id'] ?>" data-toggle="modal" data-target="#formModal" data-id="<?php echo $mhs['id'] ?>">edit</a>
			  
			  	<a class="badge badge-info float-right" href="<?php echo BASEURL ?>/mahasiswa/detail/<?php echo $mhs['id'] ?>">detail</a>
			  </li>
			<?php  endforeach; ?>
			</ul>
		</div>
	</div>

	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">

        	<input type="hidden" name="id" id="id">

        	<div class="form-group">
        	    <label for="nama">Nama</label>
        	    <input type="text" class="form-control" id="nama" name="nama" placeholder="Type Name">
        	</div>

        	<div class="form-group">
        	    <label for="nim">NIM</label>
        	    <input type="number" class="form-control" id="nim" name="nim">
        	</div>

        	<div class="form-group">
        	    <label for="alamat">Alamat</label>
        	    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Type Address">
        	</div>

        	<div class="form-group">
        	    <label for="jurusan">Jurusan</label>
        	    <select class="form-control" id="jurusan" name="jurusan">
        	      <option value="Teknik Informatika">Teknik Informatika</option>
        	      <option value="Teknik Jawa">Teknik Jawa</option>
        	      <option value="Teknik Fighter">Teknik Fighter</option>
        	      <option value="Teknik Drible">Teknik Drible</option>
        	      <option value="Teknik Mangan">Teknik Mangan</option>
        	    </select>
        	  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      	</form>
      </div>
    </div>
  </div>
</div>