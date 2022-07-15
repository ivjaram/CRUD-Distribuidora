<?php

include '../bd.php';

class Categoria
{
	protected $id_categoria;
	protected $nombre;

	public function __construct( $id_categoria = '', $nombre)
	{
		$db = new conexion();

		$this->id_categoria = $id_categoria;
		$this->nombre = $nombre;
	}

	static function ningunDato()
	{
		return new self('','');
	}
	
	static function soloCod($id_producto)
	{
			return new self('',$id_categoria);
	}

	public function insert()
	{

		$db = new conexion();

		$sql = "INSERT INTO `categoria`(`id_categoria`,`nombre`) VALUES ('$this->id_categoria','$this->nombre')";

		$db->query($sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");
	}

	public function update()
	{
		$db = new conexion();
		$id_categoria = $_POST['id_categoria'];
	
		$sql = "UPDATE `categoria` SET `nombre`='$this->nombre' WHERE `id_categoria` = '$id_categoria'";

		$db->query($sql) ? header("location: index.php?res=editado") : header("location: index.php?res=error");
	}
	public function delete(){
		$db = new conexion();
		$id_categoria =$_GET['id_categoria'];

		$sql = "DELETE FROM `categoria` WHERE `id_categoria` = '$id_categoria'";

		$db->query($sql) ? header("location: index.php?res=eliminado"): 
		header("location: index.php?res=error");
	}

	public function selectCod()
	{

		$db = new conexion();
		$id_categoria = $_GET['id_categoria'];
		$sql = "SELECT * FROM `categoria` where `id_categoria` = '$id_categoria'";
		$result = $db->query($sql);
		return $result;
	}
	
	public function select()
	{

		$db = new conexion();

		$sql = "SELECT * FROM `categoria`";

		$result = $db->query($sql);
		return $result;
	}
	
}

?>