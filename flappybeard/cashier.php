<? php 
    include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="cashier.css">
    <script src="cashier.js"></script>
    <title>Pizza</title>
</head>
<body>
        
        <div class="upper">
            <a href="portfolio.php" class="logo"><span>B</span>ack</a>
        <h1 class="title">Ayban's De Pizza</h1>
    </div>  
        <div class="whole-pizza">
        <div class="shoes4">
            <img class="pizza1" src="/Cashier/FB_IMG_17019951406101144.jpg">
            <br>
            <h2>Prizes</h2>
            <h3>12 inch: 70$</h3>
            <h3>9 Inch: 50$</h3>
        <label for="meat">Jockamo Upper Crust Pizza:</label>
        
        <select id="meat" onchange="calculateTotal()">
            <option value="Pork" data-price="70">12 inch</option>
            <option value="Beef" data-price="50">9 inch</option>
            
        </select>
        <button class="buy">Buy</button>
        </div>
        

        <div class="shoes4">
            <img class="pizza1" src="/Cashier/FB_IMG_17019960888687452.jpg">
            <h2>Prizes</h2>
            <h3>12 inch: 120$</h3>
            <h3>9 Inch: 90$</h3>
        <label for="crust">Extra Cheezy Pizza:</label>
        <select id="crust" onchange="calculateTotal()">
            <option value="Thin" data-price="120">12 Inch</option>
            <option value="Regular" data-price="90">9 Inch</option>
        </select>
        <br>
        <button class="buy">Buy</button>
        <br><br>
        </div>

        <div class="shoes4">
            <img class="pizza1" src="/Cashier/IMG_20231208_084237.jpg" >
            <h2>Prizes</h2>
            <h3>12 inch: 250$</h3>
            <h3>9 Inch: 170$</h3>
        <label for="topping">Apple Crumble Pizza:</label>
        
        <select id="topping" onchange="calculateTotal()">
            <option value="Tomato" data-price="250">12 Inch</option>
            <option value="Pineapple" data-price="170">9 Inch    </option>
            <!-- <option value="Onion" data-price="15">Onion 15$</option>
            <option value="Bell Pepper" data-price="20">Bell Pepper 20$</option>
            <option value="olives" data-price="30">Olives 30$</option> -->
        </select>
        <br>
        <button class="buy">Buy</button>
        <br><br>
    </div>
    
        <div class="shoes4">
            <img class="pizza1" src="/Cashier/FB_IMG_17019962155282863.jpg" >
            <h2>Prizes</h2>
            <h3>12 inch: 140$</h3>
            <h3>9 Inch: 110$</h3>
        <label for="cheese">Pepperoni Pizza:</label>
        
        <select id="cheese" onchange="calculateTotal()">
            <option value="Cheese" data-price="140">12 Inch</option>
            <option value="Quickmelt" data-price="110">9 Inch</option>
        </select>
        <br>
        <button class="buy">Buy</button>
        <br><br>
    </div>
    </div>
    <div class="whole-btn">
        <button class="btn" id="purchaseButton" onclick="purchase()">Purchase</button>
        <p>Total Cost: $<span id="total">0</span></p>
        <p>Cash: $<span id="cash">0</span></p>
        <p>Change: $<span id="change">0</span></p>
    </div>
</body>
</html>