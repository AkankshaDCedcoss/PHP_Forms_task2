<html>
    <head>
</head>
<body>
</body>
<form method="POST" action=" <?php echo $_SERVER['PHP_SELF'];?>">
NUMBER 1 : <input type="text" name="num1"><br>
NUMBER 2 : <input type="text" name="num2"><br>
<!-- RESULT : <input type="text" name="result" value="<?php echo "Hi";?>><br> -->
<?php echo  $res;?>

  <input type="submit" value="+" name="ABC"> <input type="submit" value="-"  name="ABC"> <input type="submit" value="X"  name="ABC"> <input type="submit" value="/"  name="ABC">
  
<?php
$x;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $number1 = $_REQUEST['num1'];
  $number2 = $_REQUEST['num2'];
   
 
 
 
  
  if (isset($number1) && isset($number2) ) {

      switch($_POST['ABC'])
    {
        case '+':
            {
                $GLOBALS['res']=$GLOBALS['number1'] + $GLOBALS['number2'];
            // echo $res;
            //  $_POST['result']=$res;
            break;
            }
        case '-':
            $res=$number1 - $number2;
            // echo $res;
            break;

        case 'X':
            $res=$number1 * $number2;
            // echo $res;
            break;

        case '/':
            $res=$number1 / $number2;
            // echo $res;
            break;
            
   

    }
    echo "<br><input type='text' name='result1' value=' $res'";
}
    
  else {
    echo"Invalid";
  }
}
  
?>





</form>

</body>
</html>