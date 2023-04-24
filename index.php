<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Hut</title>
   <link rel="StyleSheet" href="styles.css" type="text/css">

</head>
<body>
<!--header for Starbucks-->
<div id="header">
    <img src="images/logo.jpeg" alt="logo" width="60" height="60" id ="logo">
    <h1>Coffee Hut</h1>
</div>
<!--form that takes user order-->
    <div id="form">
        <form action= "order.php" method = "post" id="starbucks">
            
            <!--to select cup size-->
            <fieldset>
                <label for="cup_size" style="" >Cup Size:</label>
                <select name="cup_size" id="select" name="cup_size">
                    <option value="-1">Make selection</option>
                    <option value="Short">Short</option>
                    <option value="Tall">Tall</option>
                    <option value="Grande">Grande</option>
                    <option value="Venti">Venti</option>
                </select>
                    <img class="img" src="images/cup.jpg">
            </fieldset><br><br>    

            <!--to select number of creams-->
            <fieldset>
                <label for="creams">Number of Creams:  </label>
                <input type="number" name="creams" min="0" name="creams">
                <img class="img" src="images/cream.jpg">
            </fieldset><br><br> 

            <!--to select number of sugar-->
            <fieldset>
                <label for="sugar">Number of Sugar:</label>
                <input type="number" name="sugar" min="0" name="sugar">
                <img class="img" src="images/sugar.jpg">
            </fieldset><br><br> 

            <!--to select quantity-->
            <fieldset>
                <label for="coffee">Number of Coffee:</label>
                <input type="number" name="coffee" min="0" name="coffee">
            </fieldset><br><br>

            <button type="submit" value="Submit">Place Order</button>
             
        </form>
    </div>
   
</body>
</html>