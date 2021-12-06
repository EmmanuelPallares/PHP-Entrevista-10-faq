
<?php
namespace App\clases;
class CalcularIva{
 
 public function __construct(public int $numero, public int $total)
   {
   }
   public int $changeValue;
  
     
 
   public function setValue(int $changeValue) {
       $this->changeValue = $changeValue;
   }
public function calcularIva() {
   $this->resultado = $this->numero * 0.16;
   $this->totalconiba=$this->resultado+$this->numero;
   echo "El iva es de: " . $this->resultado . " y el precio total es de: " . $this->totalconiba;
}


}



