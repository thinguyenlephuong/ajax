<?php
    require_once "data.php";

    $arrWard = $arrayWard;
    $districtId = @$_POST['districtId'];

    function getWard($arrWard, $districtId){
        echo '<option>Vui lòng chọn phường/xã</option>';
        
        foreach($arrWard as $key => $value){            
            $arrId = explode("_",$key);
            if(($arrId[0].'_'.$arrId[1]) == $districtId){
                echo '<option value="'. $key .'">' . $value . '</option>';
            }
        }
    }
    getWard($arrWard, $districtId);
?>
