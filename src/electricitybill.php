<html>
    <head>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Consumption Of Eletricity: <input type="text" name="unit" style="<padding :.5%>">
  <input type="submit">
</form>

<?php
if (isset($_POST['unit'])) {
  
  $eunit = $_POST['unit'];
 

                $bill=0;
                if($eunit<=50)
                {
                    $bill=$eunit * 3.50;
                   
                }
                
                elseif($eunit >50 && $eunit <= 150)
                    {
                        $fBill=$eunit -50;
                        $bill=50 * 3.50 + $fBill *4.00;
                        
                    }
                elseif($eunit >=151 && $eunit <= 250)
                        {
                            $fBill=$eunit-150;
                            $bill=$fBill * 5.20 + 50*3.50 + 100*4.00;
                           
                        }
                else

                        {
                            $fBill=$eunit-250;
                            $bill=$fBill * 6.50 + 50*3.50 + 100*4.00 + 100 * 5.20;
                           
                       
                        }
                        
                        echo "Your Bill is :  $bill"; 
                    
}
?>
</body>
</html>