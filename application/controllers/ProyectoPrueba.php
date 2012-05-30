<?php

class ProyectoPrueba extends CI_Controller {

	public function view($id_proyecto = 1)
	{
/*
		echo "<html>";
		echo "<head>";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>";
		echo "Entro al fichero CAD <br/>";

		echo "Cargo el fichero<br/>";
*/
		$config['hostname'] = "localhost";
		$config['username'] = "root";
		$config['password'] = "";
		$config['database'] = "BBDB";
		$config['dbdriver'] = "mysql";
		$config['dbprefix'] = "";
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = "";
		$config['char_set'] = "utf8";
		//$config['dbcollat'] = "utf8_general_ci";

		//echo "El Proyecto es: " . $id_proyecto . "</br>"; 


		$this->load->database($config);

		$data = array();
		$data['proyecto'] = "";
		$data['tecnologias'] = array();
		$data['fotos'] = array();

		$query = $this->db->query("SELECT * FROM Proyecto where IdProyecto = '$id_proyecto'");

		//Guardo el Proyecto:
		foreach ($query->result() as $row)
		{
		    $data['proyecto'] = $row;
		}

		$query = $this->db->query("SELECT * FROM Tecnologia where IdTecnologia in (SELECT Tecnologia FROM Proyecto_Tecnologia where Proyecto = '$id_proyecto')");

		foreach ($query->result() as $row)
		{
		    array_push($data['tecnologias'], $row);
		}

		$query = $this->db->query("SELECT * FROM Foto where IdFoto in (SELECT Foto FROM Foto_Proyecto where Proyecto = '$id_proyecto')");

		foreach ($query->result() as $row)
		{
		    array_push($data['fotos'], $row);
		}



		$this->load->view('ProyectoPrueba', $data);



		/*
		echo 'Total Results: ' . $query->num_rows() . "<br/>";*/
	}
}


?>