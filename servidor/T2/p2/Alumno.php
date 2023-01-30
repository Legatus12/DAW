<?php
class Alumno {
    private $id;
    private $nombre;
    private $mail;

    function __construct($id, $nombre, $mail) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->mail = $mail;
    }

    public function __get($atributo){
        if(property_exists($this, $atributo)){
            return $this->$atributo;
        }
        return NULL;
    }

    public function __set($atributo, $valor){
        if(property_exists($this, $atributo)){
            $this->$atributo = $valor;
        }
    }

    function pinta_alumno() {
        echo $this->id . " // " . $this->nombre . " // " . $this->mail;
    }
}
?>