<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="StyleSheet" href="styles.css" type="text/css">
  
</head>
<body>
<!--header-->
<div id="header">
    <img src="images/logo.jpeg" alt="logo" width="60" height="60" id ="logo">
    <h1>Coffee Hut</h1>
</div>

<!--Validations & receipt output-->
<div id="main">
<!--table to organize data-->
<table>
    <tr>
        <th> Size Of The Cup</th>
        <th> Number Of Creams</th>
        <th> Number Of Sugar</th>
        <th> Price</th>
        <th></th>
    </tr>
    <!--this row shows the images corresponding to the quantity selected in the form-->
    <tr>
        <!--this table data displays the right size of coffer based on what user picked -->
        <td style="background-color: white">
            <?php
                $cup_size = $_REQUEST[cup_size];
            
                if ($cup_size == "-1")
                    echo "<h5 style='color:red;'>* Please select a Coffee  </h5>";
                else if($cup_size == "Short"){
                    
                    echo "<img src='images/cup.jpg' alt='cup image' height='20' width= '20'>";
                    echo "<img src='images/plus.jpg' alt='plus image' class = 'plus'><br>";
                    
                    
                }
                else if($cup_size == "Tall"){
                    
                    echo "<img src='images/cup.jpg' alt='cup image' height='30' width= '30'>";
                    echo "<img src='images/plus.jpg' alt='plus image' class = 'plus'><br>";
                    
                }
                else if($cup_size == "Grande"){
                    
                    echo "<img src='images/cup.jpeg' alt='cup image' height='40' width= '40'>";
                    echo "<img src='images/plus.jpg' alt='plus image' class = 'plus'><br>";
                    
                }
                else if($cup_size == "Venti"){
                    
                    echo "<img src='images/cup.jpeg' alt='cup image' height='50' width= '50'>";
                    echo "<img src='images/plus.jpg' alt='plus image' class = 'plus'><br>";
                    
                }
            ?>  
        </td> 
        
    `   <!--this table data repeats the cream image as many times as the user pick -->
        <td style="background-color: white">
            <?php 
                $creams = $_REQUEST[creams];
                if ($creams == "" || $creams == null)
                    echo "<h5 style='color:red;'>* Number of Cream is required</h5>"; 
                else{
                    
                    for ($i=0; $i<$creams; $i++)
                    {
                        echo "<img src='images/cream.jpg' alt='cream image' style= 'height: 40px ; weight: 40px '>";    
                    }
                    echo "<img src='images/plus.jpg' alt='plus image' class = 'plus'>";
                    
                    
                }
                
            ?>
        </td>
       

        <!--this table data repeats the sugar image as many times as the user picked-->
        <td style="background-color: white">
            <?php
                 $sugar= $_REQUEST[sugar];

                 if ($sugar == "" || $sugar == null)
                    echo "<h5 style='color:red;'>* Number of Sugar is required </h5>"; 
                else{
                    
                    for ($i=1; $i<=$sugar; $i++)
                    {
                        echo "<img src='images/sugar.jpg' alt='sugar image' style='height: 40px ; weight: 40px '>";
       
                    }
                    
                }

            ?>
        </td>
        
        <!--this makes sure number of coffee is 1 or more-->
        <?php 
            $coffee = $_REQUEST[coffee];
            if (empty($coffee))
                echo "<h5 style='color:red;'>* Number of Coffee is required </h5>"; 
                
        ?>

        <!--this table data shows the various prices-->
        <td style="text-align: left; background-color: white" >  
            <?php
                if($cup_size != "-1"  && ($creams != "" || $creams != null) && ($sugar != "" || $sugar != null) &&  empty($coffee) != true ){
                    $creamPrice = 1;
                    $sugarPrice = 0.5;
                    if($cup_size == "Short")
                        $cupPrice = 2.5;
                    elseif($cup_size == "Tall")
                        $cupPrice = 3;
                    elseif($cup_size == "Grande")
                        $cupPrice = 3.5;   
                    else
                        $cupPrice = 4;      
                        
                    
                    $totalCream = $creamPrice * $creams;
                    $totalSugar = $sugarPrice * $sugar;

                    $total = ($totalCream) + ($totalSugar) + ($cupPrice);

                    echo"Cream($1 each):<br>";
                    echo"Sugar($0.5 each):<br>";
                    echo"Cup($cup_size):<br>";
                    echo "Quantity:";
                    
                    
                    

                }
            ?>
        </td style="background-color: white">

        <!--this table data shows the various prices-->
        <td style="background-color: white">
            <?php
                echo "$".number_format($totalCream,2,".",",")."<br>";
                echo "$".number_format($totalSugar,2,".",",")."<br>";
                echo "$".number_format($cupPrice,2,".",",")."<br>";
                echo "x $coffee <br>"
            ?>
        </td>
        
    </tr>

    <!--this row shows the quantity of items selected-->
    <tr>
        <td style="background-color: white ">
                <?php echo"<h3>$cup_size</h3>"?>
        </td>
        <td style="background-color: white">
            <?php echo"<h3>$creams</h3>"?>
        </td>
        <td style="background-color: white">
            <?php echo"<h3>$sugar</h3>"?>
        </td>
        <td style="background-color: white"></td>
        <td style="background-color: white"></td>
        

    </tr>

    <!--this row displays tax-->
    <tr>
        <td style= "font-weight: bold; font-size: 20px;background-color: white">Tax 13%:</td>
        <td style="background-color: white"></td>
        <td style="background-color: white"></td>
        <td style="background-color: white"></td>
        <td style="background-color: white">
            <?php
                $tax = 0.13 * $total; 
                echo "$".number_format($tax,2,".",",");
            ?>
        </td>
    </tr>

    <!--this row displays grand total-->
    <tr style="background-color: #2F6E46; color: white;">
        <td style= "font-weight: bold; font-size: 20px;">Total Price:</td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <?php
                $grandTotal = $total + $tax ;
                echo "$".number_format($grandTotal,2,".",",") ;
            ?>
        </td>
    </tr>

</table>
</div>
</body>
</html>