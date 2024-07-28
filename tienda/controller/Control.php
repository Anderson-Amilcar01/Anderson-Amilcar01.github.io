<?php
class usuariocontrol{
    private $modelo;
    public function __construct($modelo){
        $this->modelo = $modelo;
    }
    public function index() {
        $usuarios = $this->modelo->leer();
        
        require 'views/articulos.php';
    }
    public function eliminar($id) {
        // Llama al método eliminar del modelo para borrar el usuario
        if ($this->modelo->eliminar($id)) {
            // Si la eliminación es exitosa, redirige a la página principal
            header('Location: index.php');
        } else {
            // Si hay un error, muestra un mensaje de error
            echo "Error al eliminar el usuario";
        }
    }
    public function mostrarFormularioCrear() {
        // Incluye la vista que muestra el formulario para agregar un usuario
        require 'views/agreproducto.php';
    }

    // Método para crear un nuevo usuario
    public function crear($nombre, $codigo_barra, $img, $cantidad, $precio, $categoria) {
        // Llama al método crear del modelo para agregar un nuevo usuario
        if ($this->modelo->crear($nombre, $codigo_barra, $img, $cantidad, $precio, $categoria)) {
            // Si la creación es exitosa, redirige a la página principal
            header('Location: index.php');
        } else {
            // Si hay un error, muestra un mensaje de error
            echo "Error al crear el usuario";
        }
    }

}
?>