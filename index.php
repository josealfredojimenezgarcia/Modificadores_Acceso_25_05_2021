<?php
interface sonidos{
    public function get_saludar();
}

class humano implements sonidos {
    private function saludar():string{
        return "Hola Como estas y preton de manos";
    }
    public function get_saludar(){
        return $this->saludar();
    }
}
class animal extends humano{
    private function saludar():string{
        return "sonido de saludo y holerse";
    }
    public function get_saludar(){
        return $this->saludar();
    }
}
$ani = new animal();

print_r($ani->get_saludar());






// class papa{
//     public $cabello;
//     public function set_cabello(string $arg){
//         $this->cabello = $arg;
//     }

// }
// class hijo extends papa{
//     public function get_cabello(){
//         return $this->cabello;
//     }
// }

// $obj2 = new hijo();
// $obj2->set_cabello((string) "Liso");
// print_r($obj2->get_cabello());

// class baso{
//     public $diametro;
//     private $tamano;
//     private $forma;
//     function __construct(){
//         $arg = (func_num_args()!=0) ? (object) func_get_args()[0] : (object) null;
//         $this->tamano = $arg->unidad;
//         $this->forma = $arg->figura;
//     }
//     public function get_tamano(){
//         return $this->tamano;
//     }
//     public function set_forma(string $arg = "Cuadrado"){
//         $this->forma = $arg;
//     }
//     public function get_forma(){
//         return $this->forma;
//     }
//     // public private protected
// }
// $obj = new baso([
//     "unidad" => (int) 30,
//     "figura" => (string) "Circulo"
// ]);
// // print_r($obj->get_tamano());
// $obj->set_forma((string) "triangular");
// print_r($obj->get_forma());

?>