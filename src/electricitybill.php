<html>
    <head>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Consumption Of Eletricity: <input type="text" name="unit" style="<padding :.5%>">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $eunit = $_REQUEST['unit'];
  if (isset($eunit)) {

                $bill=0;
                if($eunit<=50)
                {
                    $bill=$eunit * 3.50;
                    echo "Your Bill is : ". $bill;
                }
                else{
                    if($eunit >=51 && $eunit <= 150)
                    {
                        $bill=$eunit * 4;
                        echo "Your Bill is : " .$bill;
                    }
                    else{
                        if($eunit >=151 && $eunit <= 250)
                        {
                            $bill=$eunit * 5.20;
                            echo "Your Bill is : " .$bill;
                        }
                        else
                        {
                            $bill=$eunit * 6.50;
                            echo "Your Bill is :  $bill";
                        }
                        
                    }

                }


    
  } else {
    echo $name;
  }
}
?>
</body>
</html>