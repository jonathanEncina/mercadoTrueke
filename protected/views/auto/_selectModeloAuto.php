<?php 
echo '<option value="">.:: Seleccione Modelo ::.</option>';
foreach($model as $mod){

echo '<option value = "'.$mod->idmodelo_auto.'">'.$mod->nombre.'</option>';

}


?>