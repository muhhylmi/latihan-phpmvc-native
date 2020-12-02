<div class="container mt-4">
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title"><?php echo $data['mhs']['nama']; ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['mhs']['nim'] ?></h6>
	    <p class="card-text"><?php echo $data['mhs']['jurusan'] ?></p>
	    <p class="card-text"><?php echo $data['mhs']['alamat'] ?></p>

	    <a href="<?php echo BASEURL ?>/mahasiswa" class="card-link badge badge-primary">Back</a>
	  </div>
	</div>
</div>