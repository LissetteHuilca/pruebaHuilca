<?php
include_once('moneda.php');
include_once('../Collector.php');

class monedaCollector extends Collector
{
  
  function showMonedas() {
    $rows = self::$db->getRows("SELECT * FROM moneda ORDER BY idmoneda ASC ");  
    $arrayFundacion= array();        
    foreach ($rows as $c){
      $aux = new moneda($c{'idmoneda'}, $c{'nombre'}, $c{'idciudadfk'});
      array_push($arrayFundacion, $aux);
    }
    return $arrayFundacion;        
  }
   
  function showMonedasInner() {
    $rows = self::$db->getRows("select m.idmoneda, m.nombre, c.nombre as ciudad from moneda as m inner join ciudad as c on m.idciudadfk=c.idciudad");   
    $arrayFundaciones= array();        
    foreach ($rows as $c){
      $aux = new moneda($c{'idmoneda'}, $c{'nombre'}, $c{'ciudad'});
      array_push($arrayFundaciones, $aux);
    }
    return $arrayFundaciones;        
  }   
    
  function showMoneda($id) {
    $row = self::$db->getRows("SELECT * FROM moneda WHERE idmoneda = ? ", array("{$id}"));        
    $ObjFundacion = new moneda($row[0]{'idmoneda'}, $row[0]{'nombre'},$row[0]{'idciudadfk'});

    return $ObjFundacion;        
  }
  
  function updateMoneda($id,$nombre,$idciudadfk) {
    
        
            $insertrow = self::$db->updateRow
                   ("UPDATE public.moneda SET nombre = ?, idciudadfk = ? WHERE idmoneda = ? ",
                   array("{$nombre}","{$idciudadfk}", $id ));  
  }
    
  function deleteMoneda($id) {
    $deletetrow = self::$db->deleteRow("DELETE FROM public.moneda WHERE idmoneda = ? ", array( "{$id}"));   
  } 


  function createMoneda($nombre,$idciudadfk){
    $insertrow = self::$db->insertRow("INSERT INTO public.moneda (nombre,idciudadfk) VALUES (?,?)", array("{$nombre}","{$idciudadfk}"));
  }

}
?>
