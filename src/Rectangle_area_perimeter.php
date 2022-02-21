<html>
    <head></head>
    <body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <lable style="margin-left:12%; font-size:1.3em">Length Of Rectangle:</lable> <input type="text" name="length" style="margin-left:6%; padding-left:9%;padding-right:9%;padding-top:1%;padding-bottom:1%;margin-top:5%;border-radius:5px;"><br>
  <lable style="margin-left:12%; font-size:1.3em"> Width Of Rectangle:</lable> <input type="text" name="width" style="margin-left:6.5%; padding-left:9%;padding-right:9%;padding-top:1%;padding-bottom:1%;margin-top:5%;border-radius:5px;"><br>
  <input type="submit" value="Calculate AREA & PERIMETER" style="font-size:1.3em;background-color:#cccccc;margin-left:31%; padding-left:3%;padding-right:3%;padding-top:1%;padding-bottom:1%;margin-top:5%;border-radius:5px;">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $rlength = $_REQUEST['length'];
  $rwidth = $_REQUEST['width'];
  if (isset($rlength) && isset($rwidth)) {

    $area = $rlength * $rwidth;
    $perimeter=2*($rlength+$rwidth);
    echo "<p style='margin-left:13%; font-size:1.3em;'>Area is    $area   sq. mtr. </p><br>";
    echo "<p style='margin-left:13%; font-size:1.3em;'>Perimeter is  ".$perimeter." mtr.</p>";
    
  }
else 
     {
    echo "Input details";
     }
}
?>

</body>
</html>