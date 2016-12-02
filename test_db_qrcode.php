<?php  
header("Content-type:text/html; charset=UTF-8");            
header("Cache-Control: no-store, no-cache, must-revalidate");         
header("Cache-Control: post-check=0, pre-check=0", false);      
// เชื่อมต่อกับฐานข้อมูล      
$link=mysql_connect("localhost","root","lovesom2010"); // เชื่อมต่อ Server        
mysql_select_db("mygmap");  // ติดต่อฐานข้อมูล        
mysql_query("set character set utf8"); // กำหนดค่า character set ที่จะใช้แสดงผล       
?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title></title>  
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">  
</head>  
<body>  
  <br>  
  <div style="margin:auto;width:80%;">  
  <table class="table table-bordered">  
    <tr class="active">  
        <th>link</th>  
        <th>qrcode</th>  
    </tr>  
    <?php  
    $q="  
    SELECT * FROM qrlink LIMIT 2
    ";  
    $qr=mysql_query($q);  
    while($rs=mysql_fetch_assoc($qr)){  
    ?>  
      <tr>  
          <td>  
          <?=$rs['link']?>  
          </td>  
          <td>  
              <img src="gen_qrcode.php?w=<?=$rs['link']?>" alt="">  
          </td>  
      </tr>  
    <?php  
    }  
    ?>  
  </table>    
  </div>  
</body>  
</html>  