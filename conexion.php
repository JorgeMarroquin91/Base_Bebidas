<DOCTYPE HTML>
<meta charset = "utf8" />
<?php  
// crear conexion con oracle
class Conexion{
    public function conectar(){
        try{
            $db = new PDO('oci:dbname=XEPDB1','bebidas','bebidas');
            $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $db;

            }catch(Exception $e){
                echo "ERROR DE CONEXION: ".$e->getMessage();
            }
    }
    
}
?>