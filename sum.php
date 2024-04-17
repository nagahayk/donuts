
<?php
$num = 0;
$price = 0;
if((int)($_REQUEST['str']) > 0){
  
   $str = (int)($_REQUEST['str']);
   $num += $str;
   $price += 180 * $str;
}
if((int)($_REQUEST['whi']) > 0){
   $whi = (int)($_REQUEST['whi']);
   $num += $whi;
   $price += 200 * $whi;
}
if((int)($_REQUEST['cho']) > 0){
   $cho = (int)($_REQUEST['cho']); 
   $num += $cho;
   $price += 190 * $cho;
}



if($num>0){
  require_once 'result.php';
}else{
   $warning = "ドーナツを一つ以上選んでください";
   require_once 'online.php';
}
?>