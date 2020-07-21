<?php
    require_once "data.php";

    $arrDistrict = $arrayDistrict;
    $provinceId = @$_POST['provinceId'];

    function getDistrict($arrDistrict,$provinceId){
        echo '<option>Vui lòng nhập quận/ huyện</option>';

        foreach($arrDistrict as $key => $value){
            $arrId = explode("_",$key);
            if($arrId[0] == $provinceId){
                echo '<option value="'.$key.'">'.$value.'</option>';
            }
        }
    }
    getDistrict($arrDistrict,$provinceId);
    
?>