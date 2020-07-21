<?php
    require_once "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
        integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/ajax-load-data.js"></script>
</head>

<body>
    <div class="container">
    <h3>ĐỊA CHỈ</h3>
    <div class="group" id='group1'>
    <div class="form-group">
            <label class="col-md-1 control-label">Tỉnh</label>
            <div class="col-md-3">
                <select class="form-control" id="province1">
                    <option>Vui lòng chọn tỉnh thành</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Huyện</label>
            <div class="col-md-3">
                <select class="form-control" id="district1">
                    <option>Vui lòng chọn quận/huyện</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Xã</label>
            <div class="col-md-3">
                <select class="form-control" id="ward1">
                    <option>Vui lòng chọn phường/xã</option>
                </select>
            </div>
        </div> 
    </div>

    <h3>ĐỊA CHỈ</h3>
    <div class="group" id='group2'>
    <div class="form-group">
            <label class="col-md-1 control-label">Tỉnh</label>
            <div class="col-md-3">
                <select class="form-control" id="province2">
                    <option>Vui lòng chọn tỉnh thành</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Huyện</label>
            <div class="col-md-3">
                <select class="form-control" id="district2">
                    <option>Vui lòng chọn quận/huyện</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Xã</label>
            <div class="col-md-3">
                <select class="form-control" id="ward2">
                    <option>Vui lòng chọn phường/xã</option>
                </select>
            </div>
        </div> 
    </div>

    <h3>ĐỊA CHỈ</h3>
    <div class="group" id='group3'>
    <div class="form-group">
            <label class="col-md-1 control-label">Tỉnh</label>
            <div class="col-md-3">
                <select class="form-control" id="province3">
                    <option>Vui lòng chọn tỉnh thành</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Huyện</label>
            <div class="col-md-3">
                <select class="form-control" id="district3">
                    <option>Vui lòng chọn quận/huyện</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Xã</label>
            <div class="col-md-3">
                <select class="form-control" id="ward3">
                    <option>Vui lòng chọn phường/xã</option>
                </select>
            </div>
        </div> 
    </div>

    <h3>ĐỊA CHỈ</h3>
    <div class="group" id='group4'>
    <div class="form-group">
            <label class="col-md-1 control-label">Tỉnh</label>
            <div class="col-md-3">
                <select class="form-control" id="province4">
                    <option>Vui lòng chọn tỉnh thành</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Huyện</label>
            <div class="col-md-3">
                <select class="form-control" id="district4">
                    <option>Vui lòng chọn quận/huyện</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Xã</label>
            <div class="col-md-3">
                <select class="form-control" id="ward4">
                    <option>Vui lòng chọn phường/xã</option>
                </select>
            </div>
        </div> 
    </div>

    <h3>ĐỊA CHỈ</h3>
    <div class="group" id='group5'>
    <div class="form-group">
            <label class="col-md-1 control-label">Tỉnh</label>
            <div class="col-md-3">
                <select class="form-control" id="province5">
                    <option>Vui lòng chọn tỉnh thành</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Huyện</label>
            <div class="col-md-3">
                <select class="form-control" id="district5">
                    <option>Vui lòng chọn quận/huyện</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label">Xã</label>
            <div class="col-md-3">
                <select class="form-control" id="ward5">
                    <option>Vui lòng chọn phường/xã</option>
                </select>
            </div>
        </div> 
    </div>

      
    </div>
</body>
<script>
$('document').ready(function() {

    function Add(provieceId,districtId,wardId){
        getAddress.getProvince(provieceId);

        $(provieceId).change(function() {
        var _provinceId = $(provieceId).val();
        getAddress.getDistrict(_provinceId,districtId);
        })

        $(districtId).change(function() {
        var _districtId = $(districtId).val();
        getAddress.getWard(_districtId,wardId);
        })
    }
    Add('#province1','#district1','#ward1');
    Add('#province2','#district2','#ward2');
    Add('#province3','#district3','#ward3');
    Add('#province4','#district4','#ward4');
    Add('#province5','#district5','#ward5');
    


});
</script>

</html>
