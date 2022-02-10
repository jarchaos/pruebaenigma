<?php
// return array(
//     "driver"    =>"mysql",
//     "host"      =>"localhost",
//     "user"      =>"root",
//     "pass"      =>"",
//     "database"  =>"prueba_norgas",
//     "charset"   =>"utf8"
// );

ini_set('memory_limit', '10000M');

class BDConexion {
    var $db;
    function connect()
    {
        try {
            $this->db = new PDO('pgsql:host=localhost;dbname=colegio_olimpo', 'postgres', 'postgres');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->db;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>