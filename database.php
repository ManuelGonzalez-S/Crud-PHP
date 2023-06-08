<?php
    /**
     * Conexion a la base de datos para recoger ell contenido de la tabla 'coches'
     * -    Donde esta la base de datos
     * -    Cual es el puerto de la base de datos
     * -    Como se llama la base de datos
     * -    Como se llama el usuario con el que me voy a conectar
     * -    Cual es la contraseña del usuario con el que me voy a conectar
     */

    
    // $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    class Database{

        public static function conectar(){
            $driver = 'mysql'; // Que tipo de base de datos voy a utilizar
            $host = 'localhost';
            $port = '3306';
            $bd = 'practicaordenadores';
            $user = 'manu'; //Cambiar a uno nuevo con permisos
            $password = '123456'; // Esto tambien cambia

            $dsn = "$driver:dbname=$bd;host=$host;port=$port";

            try {
                $gbd = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Falló la conexion; ' . $e->getMessage();
            }

            return $gbd;
        }

        public function getTabla($tabla){
            $sql = "SELECT * FROM $tabla";
            $resultados = self::conectar()->query($sql);
            return $resultados;
        }

        public function delete($id){
            $sql = "DELETE FROM ordenadores WHERE id = $id";
            self::conectar()->query($sql);
        }

        public function save($valores){

            /**
             * $valores [
             *      0 --> marca
             *      1 --> modelo,
             *      2 --> precio
             * ]
             */

            $sql = "INSERT INTO ordenadores (marca, modelo, precio,descripcion) VALUES ('$valores[0]','$valores[1]',$valores[2],'$valores[3]');";
            self::conectar()->query($sql);
        }

        public function getById($id){
            $sql = "SELECT * FROM ordenadores WHERE id = $id";
            $resultados = self::conectar()->query($sql);
            return $resultados->fetch(PDO::FETCH_ASSOC);
        }

        public function update($valores){
            $sql = "UPDATE ordenadores SET marca = '". $valores['marca']."', modelo = '". $valores['modelo']."', precio = ". $valores['precio'].", descripcion = '". $valores['descripcion']."' WHERE id =". $valores['id'].";";
            self::conectar()->query($sql);
        }
}
