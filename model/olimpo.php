<?php
class CRUD {
    protected $tabla;
    protected $db;
    protected $where="";
    protected $sql=null;

    public function __construct($tabla = null)
    {
        $this->db = (new BDConexion())->connect();
        $this->tabla = $tabla;
    }

    public function getAsignaturesByProfessor(){
        global $db, $id, $data;
        $id = 1;
        try{
            $this->sql = "SELECT a.nombre 
                            FROM {$this->tabla} a 
                            LEFT JOIN profesores p on a.profesor_num = p.profesor_numero
                            WHERE p.profesor_numero = $id";
            $sth = $this->db->prepare($this->sql);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $exc){
            echo $exc->getTraceAsString();
        }
    }
}

?>