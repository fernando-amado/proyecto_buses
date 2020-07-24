<?php 
  class Conexion 
{
	
	private $servidor="localhost";
	private $db="proyecto_buses";
	private $puerto = 3306;
	private $charset="utf8";
	private $usuario="root";
	private $contrasena="";
	public $pdo=null;
	private $atributos =[PDO::ATTR_CASE=> PDO::CASE_LOWER,PDO::ATTR_ERRMODE =>
		                 PDO::ERRMODE_EXCEPTION, PDO::ATTR_ORACLE_NULLS =>
		                 PDO::NULL_EMPTY_STRING, PDO::ATTR_DEFAULT_FETCH_MODE=>
		                 PDO::FETCH_OBJ];
    function __construct(){
    	$this->pdo= new PDO("mysql:dbname={$this->db};host={$this->servidor};
    		                port={$this->puerto}; charset={$this->charset}",
    		                $this->usuario,$this->contrasena,$this->atributos);
    }
    function connect(){
        try{
        $connection ="mysql:host=" . $this->servidor . ";dbname=" . $this->db;
        $options =[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $pdo = new PDO($connection, $this->usuario, $this->contrasena,$options);
        return $pdo;

		
    }catch(PDOException $e){
        print_r('Error connnection:' . $e->getMessage());
    }
}
	    
}
?>