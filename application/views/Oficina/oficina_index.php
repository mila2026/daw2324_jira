<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        foreach($oficinas as $oficina){
            $nom_delegacio = '';
            foreach ($delegacions as $d) {
                if ($d->id == $oficina->delegacio) {
                    $nom_delegacio = $d->nom;
                    break;
                }
            }
            echo "<p>".$oficina->nom.", ".$nom_delegacio."</p>";
        }
    ?>

    <?php echo validation_errors(); ?>
    <form method="POST" action="<?php echo site_url("OficinaController/addOficina") ?>">
        <p>Nom:</p>
        <input type="text" name="nom" value="<?php echo set_value('nom');?>">
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
    
    <form method="POST" action="<?php echo site_url("OficinaController/prueba") ?>">
        <h3>Prueba</h3>
        <div>
            <input type="checkbox" name="categories[]" value="1">
            <input type="checkbox" name="categories[]" value="2">
            <input type="checkbox" name="categories[]" value="3">
            <input type="checkbox" name="categories[]" value="4">
            <input type="checkbox" name="categories[]" value="5">
        </div>
        <input type="submit">
    </form>

</body>
</html>