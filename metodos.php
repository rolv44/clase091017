<?php
$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$usuario = array(array('Jose', 'abc'), array('eva', '123'),array('oliver','oliver'));
$entrar = 0;
foreach ($usuario as $key) {
    $user_nom = $key[0];
    $user_clave = $key[1];
    if ($user == $user_nom) {
        if ($pass == $user_clave) {
            $entrar = 1;
        } else {
            break;
        }
    }
}
if(!$entrar){
    $titu="ERROR AL INGRESAR DATOS";
    include_once 'cabecera.php';
    echo '<center><h2>';
    if($user!=$user_nom){
        echo 'Error usuario desconocido: '.$user;
    }else{
        echo 'Error clave incorrecta!';
    }
}else{
    $titu="USUARIO AUTORIZADO";
    include_once 'cabecera.php';
    echo '</h2></center>';
    echo 'BienVenido usurio: '.$user;
}
echo "<br><a href='index.php'>VOVLER</a>";
include_once 'pie.php';

?>
