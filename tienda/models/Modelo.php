<?php
    class Empleado{
        private $db;
        public function __construct($db){
        $this->db = $db;
        }

        public function crear($name,$cod_bar,$img,$cantidad,$precio,$categoria){
            $sql = "INSERT INTO ropa (nombre, codigo_barra, img, cantidad, precio,categoria) 
            VALUES (:nombre, :codigo_barra, :img, :cantidad, :precio, :categoria)";
             $stmt = $this->db->prepare($sql);
             $imgData = file_get_contents($img);
             $stmt->bindParam(':nombre', $name);
             $stmt->bindParam(':codigo_barra', $cod_bar);
             $stmt->bindParam(':img', $imgData, PDO::PARAM_LOB);
             $stmt->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
             $stmt->bindParam(':precio', $precio);
             $stmt->bindParam(':categoria', $categoria);
             return $stmt->execute();
        }
        
        public function leer($id = null) {
            if ($id) {
                // Si se proporciona un ID, prepara una consulta para obtener un usuario específico
                $sql = "SELECT * FROM ropa WHERE id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                // Devuelve el resultado como un array asociativo
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                // Si no se proporciona un ID, obtiene todos los usuarios
                $sql = "SELECT * FROM ropa";
                $stmt = $this->db->query($sql);
                // Devuelve todos los resultados como un array de arrays asociativos
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

        }
        public function eliminar($id) {
            // Prepara la consulta SQL para eliminar un usuario
            $sql = "DELETE FROM ropa WHERE id = :id";
            
            // Crea un objeto de declaración preparada
            $stmt = $this->db->prepare($sql);
            
            // Vincula el parámetro ID a la consulta preparada
            $stmt->bindParam(':id', $id);
            
            // Ejecuta la consulta preparada y devuelve el resultado
            return $stmt->execute();
        }
    }
?>