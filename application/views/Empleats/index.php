<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>

<body> 


    <ul>
        <?php foreach($emps as $emp){
            echo "<li>".$emp->nom ." - ".$emp->dpt."</li>";
        } ?>
    </ul>
<hr>
<?php echo validation_errors(); ?>
    <form name="f" method="POST" action="<?= site_url("EmpController/index");?>">

    NOM:<br> <input type="text" name="name" value="<?php echo set_value('name');?>"> <br>
    Departament:
    <br>
    <select name ="dpt">
        <option value="0">Selecciona opcio</option>
        <?php
            foreach ($dpts as $dpt){
                $selected = "";
                if($dpt-> id == set_value("dpt")){
                    $selected = " selected ";
                }
                echo "<option value ='".$dpt->id."' ".$selected." >".$dpt->nom."</option>";
            }
        ?>
    </select><br>
    <input type="submit" value="sumbit" name="submit">
    </form>
</body>
</html>