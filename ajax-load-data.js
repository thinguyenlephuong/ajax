var getAddress = {};

getAddress.getProvince = function(provinceId){
    $.ajax({
        url: 'getProvince.php',
        type: 'POST',
        data: {},
        success: function(data){
            $(provinceId).html(data);
        }
    });
}

getAddress.getDistrict = function(provinceId,districtId){
    $.ajax({
        url: 'getDistrict.php',
        type: 'POST',
        data: {"provinceId":provinceId},
        success: function(data){
            $(districtId).html(data);
        }
    });
}

getAddress.getWard = function(districtId,wardId){
    $.ajax({
        url: 'getWard.php',
        type: 'POST',
        data: {"districtId":districtId},
        success: 
        function(data){
            $(wardId).html(data);
        }
    });
}



