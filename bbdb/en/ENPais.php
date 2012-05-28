<?php

class ENPais {

	private $idPais;
	private $nombre;

	function __construct($id, $nom) {
       $this->idPais = $id;
       $this->nombre = $nom;
   }

   function mostrarPais() {
   	echo "<p>Id: " . $this->idPais . " ==> " . $this->nombre . "</p>";
   }
}


?>