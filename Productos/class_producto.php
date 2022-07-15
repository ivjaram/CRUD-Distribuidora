<?php

include '../bd.php';

class Producto
{
	protected $id_producto;
	protected $nombre_producto;
	protected $precio;
	protected $cantidad;
	protected $categoria;

	public function __construct( $id_producto = '', $nombre_producto, $precio, $cantidad,$categoria)
	{
		$db = new conexion();

		$this->id_producto = $id_producto;
		$this->nombre_producto = $nombre_producto;
		$this->precio = $precio;
		$this->cantidad = $cantidad;
		$this->categoria = $categoria;
	}

	static function ningunDato()
	{
		return new self('','','','','');
	}
	
	static function soloCod($id_producto)
	{
			return new self('','','','',$id_producto);
	}

	public function insert()
	{

		$db = new conexion();

		$sql = "INSERT INTO `productos`(`id_producto`,`nombre_producto`, `precio`, `cantidad`, `categoria`) VALUES ('$this->id_producto','$this->nombre_producto','$this->precio','$this->cantidad','$this->categoria')";

		$db->query($sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");
	}

	public function update()
	{
		$db = new conexion();
		$id_producto = $_POST['id_producto'];
	
		$sql = "UPDATE `productos` SET `nombre_producto`='$this->nombre_producto',`precio`='$this->precio',`cantidad`=$this->cantidad,`categoria`=$this->categoria WHERE `id_producto` = '$id_producto'";

		$db->query($sql) ? header("location: index.php?res=editado") : header("location: index.php?res=error");
	}
	public function delete(){
		$db = new conexion();
		$id_producto =$_GET['id_producto'];

		$sql = "DELETE FROM `productos` WHERE `id_producto` = '$id_producto'";

		$db->query($sql) ? header("location: index.php?res=eliminado"): 
		header("location: index.php?res=error");
	}

	public function selectCod()
	{

		$db = new conexion();
		$id_producto = $_GET['id_producto'];
		$sql = "SELECT * FROM `productos` where `id_producto` = '$id_producto'";
		$result = $db->query($sql);
		return $result;
	}
	
	public function select()
	{

		$db = new conexion();

		$sql = "SELECT * FROM `productos`";

		$result = $db->query($sql);
		return $result;
	}
	
}

?>