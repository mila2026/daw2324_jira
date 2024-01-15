<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo validation_errors(); ?>
    <form method="POST" action="<?php echo site_url("OficinaController/addOficina") ?>">
        <p>Delegacio</p>
        <select name="delegacio">
            <option value="-1">Selecciona una delegacio</option>
            <?php 
                foreach($delegacions as $d){
                    if($d->id == set_value('delegacio')){
                        echo "<option selected value='".$d->id."'>".$d->nom."</option>";
                    }else{
                        echo "<option value='".$d->id."'>".$d->nom."</option>";
                    }
                }
            ?>
        </select>
        <br><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>