<?php 

class Mahasiswa_model{
	
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMhs(){
		$this->db->query('SELECT * FROM '. $this->table);
		return $this->db->resultSet();
	}

	public function getMhsById($id){
		$this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahMahasiswa($data){

		$query = "INSERT INTO mahasiswa
					VALUES
					('', :nama, :nim, :alamat, :jurusan)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->rowCount();

	}


	public function hapusMahasiswa($id){
		$query = 'DELETE FROM ' .$this->table.' WHERE id=:id';
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();
		return $this->db->rowCount();

	}


	public function ubahMahasiswa($data){

		$query = "UPDATE mahasiswa SET
					nama =:nama,
					nim =:nim,
					alamat =:alamat,
					jurusan =:jurusan
				  WHERE id=:id";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('id', $data['id']);


		$this->db->execute();

		return $this->db->rowCount();

	}


	public function cariMahasiswa(){
		$keyword = $_POST['keyword'];
		$query = 'SELECT * FROM mahasiswa WHERE nama LIKE :keyword';
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		$this->db->execute();

		return $this->db->resultSet();
	}


}