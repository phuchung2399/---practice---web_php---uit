<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
                $(".birthday").change(function(){
                    birthday=$(this).val();
                    console.log(birthday);
                    $.post("lietkecasingaysinh_ajax.php",
                    {
                        birthday:birthday 
                    },
                    function(data,status){
                        if(status=="success")
                        {
                            $(".danhsachalbum").html(data);
                        }
                    }); 
                });
            });   
        </script>
    </head>
    <body>
        <input type="date" class="birthday" name="birthday">
        <div class="danhsachalbum">Danh sach album</div>
    </body>
</html>
