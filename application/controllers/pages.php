<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
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


		$this->load->database($config);

		$query = $this->db->query('SELECT Nombre FROM Pais');

		
		
		$this->load->library('calendar');
		//$data = array(
        //       'lista_paises' => ''
        //  );
		$data = array();

		$data['lista_paises'] = "";
		$data['desarrolladores'] = "Carrillo, Gallardo y Esteve (córtate el pelo)";
		$data['calendario'] = $this->calendar->generate(1991, 1);

		

		

		foreach ($query->result() as $row)
		{
		    $data['lista_paises'] .= $row->Nombre . '<br />';
		}

		$this->load->view('pages', $data);



		/*
		echo 'Total Results: ' . $query->num_rows() . "<br/>";*/
	}
}


?>