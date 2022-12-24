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
    </head>
    <body>
        <?php
            echo "<form method='post' action='#'>";
                echo "Mã bài hát:";
                echo "<input type='text' name='mabaihat'></input><br>";
                echo "Tên bài hát:";
                echo "<input type='text' name='tenbaihat'></input><br>";
                echo "Thể loại:";
                echo "<input type='text' name='theloai'></input><br>";
                echo "Mã Album";
                echo "<input type='text' name='maalbum'></input><br>";
                echo "<input type='Submit' name='Submit' value='Create'></input>";
            echo "</form>";
        ?>
        <?php 
            include "connect.php";
            if(isset($_POST['Submit'])&&($_POST['Submit']=='Create'))
            {  $mabaihat=$_POST['mabaihat'];
               $tenbaihat=$_POST['tenbaihat'];
               $theloai=$_POST['theloai'];
               $maalbum=$_POST['maalbum'];

               $sql = "INSERT INTO baihat(MaBaiHat, TenBaiHat, TheLoai,MaAlBum) VALUES ('$mabaihat', '$tenbaihat', '$theloai','$maalbum')";
               if($connect->query($sql)>0)
                   echo "Thanh cong";
               else 
                   echo "No thanh cong";
            }
        ?>
    </body>
</html>
