<?php
        include_once 'MODELO/MainCharacter.php';
        
        $img_protagonista = imagecreatefrompng("VISTA/img/Protagonist.png");
        
        $m = new MainCharacter();
        
?>


<form action="CONTROLADOR/ControladorUsuario.php" method="GET">
    <input type="text" name="comentario" required minlength="5" maxlength="50"/>
    <input type="submit" value="Enviar"/>
</form>