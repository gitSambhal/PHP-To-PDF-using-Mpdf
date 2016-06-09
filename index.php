<?php 
 require_once('include/functions.php');


$order_no=uniqid();
$data=array(
  'date'=>'13 Jun 2016',
  'order_no'=>$order_no,
  'item_name'=>'IPHONE 5S',
  'price'=>'$'.rand(100,1000),
  );




echo $file=generatePdf($data);

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h1>Your order is complete</h1>
  <a href="<?php echo $file; ?>" download>Download </a>
</body>
</html>