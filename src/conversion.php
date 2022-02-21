<html>
    <head></head>
    <body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="hours"  style="margin-left:25%; padding-left:9%;padding-right:9%;padding-top:2%;padding-bottom:2%;margin-top:5%;border-radius:5px;"><br>
<input type="radio" name="conversion" value="1" style="margin-left:27%; font-size:1.6em; margin-top:3%;" >
  <label  style="font-size:1.6em;" >hours to mins</label><br>
  <input type="radio" name="conversion" value="2" style="margin-left:26.5%; font-size:2em; margin-top:3%;">
  <label style="font-size:1.6em;">hours to seconds</label><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $hours = $_REQUEST['hours'];
  
  if (isset($hours))
   {
    if($_POST['conversion']=="1")
      {
        $result=$hours * 60;
        echo "<p style='margin-left:35%;font-size:1.6em;margin-top:7%;'>$hours is =  $result mins</p>";
      }
    if($_POST['conversion']=="2")
      {
        $result=$hours * 60 *60;
        echo "<p style='margin-left:35%;font-size:1.6em;margin-top:7%;'>$hours is =  $result seconds</p>";
      }
}
  
  
else 
     {
    echo "Input details";
     }
}
?>
  
  
<input type="submit" value="Convert" style="font-size:1.4em;margin-left:25%; padding-left:12.5%;padding-right:13%;padding-top:1%;padding-bottom:1%;margin-top:1%;border-radius:5px;">
</form>
</body>
</html>