<?php
include "../../conection.php";
/*$apid=isset($_GET['apid'])? $_GET['apid']:"";
$result=mysqli_query($con,"select * from application where apply_id='$apid'");
echo mysqli_error($con);
if($result)
{
    while($res=mysqli_fetch_assoc($result))
    {
      
        header("Content-type:application/pdf");
        //header('Content-Disposition: inline;filename="'.$res['Resume'].'"');
        //header("Content-Length:".filesize($res['Resume']));
        //header('Accept-Ranges:bytes');
        echo $res['Resume'];
        @readfile($res['Resume']);

    
    
   }

}
*/


?>