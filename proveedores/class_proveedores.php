<?php

include '../bd.php';

class proveedor
{
	protected $id_proveedor;
	protected $nombre_proveedor;
	protected $direccion;
	protected $telefono;
	

	public function __construct( $id_proveedor = '', $nombre_proveedor, $direccion, $telefono)
	{
		$db = new conexion();

		$this->id_proveedor = $id_proveedor;
		$this->nombre_proveedor = $nombre_proveedor;
		$this->direccion = $direccion;
		$this->telefono = $telefono;
	}

	static function ningunDato()
	{
		return new self('','','','');
	}
	
	static function soloCod($id_proveedor)
	{
			return new self('','','',$id_proveedor);
	}

	public function insert()
	{

		$db = new conexion();

		$sql = "INSERT INTO `proveedor`(`id_proveedor`,`nombre_proveedor`, `direccion`, `telefono`) VALUES ('$this->id_proveedor','$this->nombre_proveedor','$this->direccion','$this->telefono')";

		$db->query($sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");
	}

	public function update()
	{
		$db = new conexion();
		$id_proveedor = $_POST['id_proveedor'];
	
		$sql = "UPDATE `proveedor` SET `nombre_proveedor`='$this->nombre_proveedor',`direccion`='$this->direccion',`telefono`=$this->telefono  WHERE `id_proveedor` = '$id_proveedor'";

		$db->query($sql) ? header("location: index.php?res=editado") : header("location: index.php?res=error");
	}
	public function delete(){
		$db = new conexion();
		$id_proveedor =$_GET['id_proveedor'];

		$sql = "DELETE FROM `proveedor` WHERE `id_proveedor` = '$id_proveedor'";

		$db->query($sql) ? header("location: index.php?res=eliminado"): 
		header("location: index.php?res=error");
	}

	public function selectCod()
	{

		$db = new conexion();
		$id_proveedor = $_GET['id_proveedor'];
		$sql = "SELECT * FROM `proveedor` where `id_proveedor` = '$id_proveedor'";
		$result = $db->query($sql);
		return $result;
	}
	
	public function select()
	{

		$db = new conexion();

		$sql = "SELECT * FROM `proveedor`";

		$result = $db->query($sql);
		return $result;
	}
	
}

?>