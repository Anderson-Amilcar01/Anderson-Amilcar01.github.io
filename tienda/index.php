<?php 
require_once 'config/Configuracion.php';
require_once 'controller/Control.php';
require_once 'models/Modelo.php';

$db = new PDO("mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}", $dbConfig['user'], $dbConfig['password']);

$user = new Empleado($db);

$control =new usuariocontrol($user);

$action = $_GET['action'] ?? 'index';

// Estructura de control de flujo para determinar la acción a realizar
switch ($action) {
    case 'crear':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //esto es para comprobar si hay una imagen y si no lo pone nulo
            if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                $img = $_FILES['img']['tmp_name'];
            } else {
                $img = null; 
            }
            
            $control->crear($_POST['nombre'],$_POST['codigo_barra'],$img,$_POST['cantidad'],$_POST['precio'],$_POST['categoria']);
            header('Location: index.php');
            exit();
        } else {
            // Si la solicitud no es de tipo POST, se muestra el formulario de creación
            $control->mostrarFormularioCrear();
        }
        break;

    case 'eliminar':
        // Llama al método eliminar del controlador con el ID del usuario a eliminar
        $control->eliminar($_GET['id']);
        break;
    default:
        // Si no se proporciona una acción válida, se llama al método index del controlador para mostrar la lista de usuarios
        $control->index();
        break;
}

?>
