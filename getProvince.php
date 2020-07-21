<?php
    require_once "data.php";

    $arrProvince = $arrayProvince;

    function getProvince($arrProvince){
        echo '<option>Vui lòng chọn tỉnh thành</option>';
        foreach($arrProvince as $key => $value){
            echo '<option value="'.$key.'">' .$value. '</option>';
        }
    }
    getProvince($arrProvince);
?>