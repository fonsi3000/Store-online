<?php
class NegocioModel extends Query {
 
    public function __construct() {
        parent::__construct();
    }

    public function getDato() {
        $sql = "SELECT * FROM configuracion";
        return $this->select($sql);
    }

    public function actualizar($nombre, $telefono, $correo, $whatsapp, $direccion, $host_smtp, $user_smtp, $puerto_smtp, $pass_smtp, $mision, $vision, $id) {
        $sql = "UPDATE configuracion SET nombre=?, telefono=?, correo=?, whatsapp=?, direccion=?, host_smtp=?, user_smtp=?, puerto_smtp=?, pass_smtp=?, mision=?, vision=? WHERE id=?";
        $array = array($nombre, $telefono, $correo, $whatsapp, $direccion, $host_smtp, $user_smtp, $puerto_smtp, $pass_smtp, $mision, $vision, $id);
        return $this->save($sql, $array);
    }
}

