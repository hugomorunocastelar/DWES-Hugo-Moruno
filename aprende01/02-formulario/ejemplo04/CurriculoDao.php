<?php

require_once "./Database.php";

class CurriculoDao
{
    public $bd;

    public function __construct()
    {
        $this->bd = Database::connecta();
    }

    public function save($data)
    {
        $sentencia = $this->bd->prepare(
            'INSERT INTO curriculos(
                            nombre, apellidos, email, fecha_nacimiento, sexo, aficiones,
                            estudios, observaciones, imagen)
                       VALUES (:nombre, :apellidos, :email, :fecha_nacimiento, :sexo,
                            :aficiones, :estudios, :observaciones, :imagen)');
        $sentencia->bindValue(':nombre', $data['nombre'] ?? null, type: SQLITE3_TEXT);
        $sentencia->bindValue(':apellidos', $data['apellidos'] ?? null, type: SQLITE3_TEXT);
        $sentencia->bindValue(':email', $data['email'] ?? null, type: SQLITE3_TEXT);
        $sentencia->bindValue(':fecha_nacimiento', $data['fecha_nacimiento'] ?? null, type: SQLITE3_TEXT);
        $sentencia->bindValue(':sexo', $data['sexo'] ?? null, type: SQLITE3_TEXT);
        $sentencia->bindValue(':aficiones', $data['aficiones'] ?? null, type: SQLITE3_TEXT);
        $sentencia->bindValue(':estudios', $data['estudios'] ?? null, type: SQLITE3_TEXT);
        $sentencia->bindValue(':observaciones', $data['observaciones'] ?? null, type: SQLITE3_TEXT);
        $sentencia->bindValue(':imagen', $data['imagen'] ?? null, type: SQLITE3_TEXT);
    }

    public function findAll()
    {
        $results = $this->bd->query("SELECT * FROM curriculos");
        $list = [];
        while ($curriculo = $results->fetchArray(SQLITE3_ASSOC)) {
            $list[] = $curriculo;
        }
    }
}