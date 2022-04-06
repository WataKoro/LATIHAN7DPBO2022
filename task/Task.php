<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function addData(){
		$name = $_POST['tname'];
		$deadline = $_POST['tdeadline'];
		$detail = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];

		$query = "INSERT INTO tb_to_do 
					(name_td, details_td, subject_td, priority_td, deadline_td, status_td) \
					VALUES ('$name', '$detail', '$subject', '$priority', '$deadline', 'Belum')";

		return $this->execute($query);
	}

	function delData(){
		$id = $_GET['id_hapus'];
		$query = "DELETE FROM tb_to_do WHERE id = '$id'";
		return $this->execute($query);
	}

	function upData(){
		$id = $_GET['id_status'];
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$id'";
		return $this->execute($query);
	}
	
	function sortData(id_order){
		$id = $_GET['id_order'];
		$query = "SELECT * FROM tb_to_do ORDER BY $id ASC";
		return $this->execute($query);
	}
}

?>