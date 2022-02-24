
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Stripe</title>
</head>
<body>
    <a href="createCustomer.php">I don't have an account. Let's create one!</a>

    <form action="checkout.php">
    <br/><input type="submit" value="Go to Checkout">
    </form>

    <br/>

    <form action="cancelSubscription.php">
    <label for="customerId">Cancel Subscription</label>
    <input type="text" id="customerId" name="customerId">
    <input type="submit" value="GO">
    </form>
    
    <br/>

    <form action="checkStatus.php">
    <label for="customerId">Check subscription Status</label>
    <input type="text" id="customerId" name="customerId">
    <input type="submit" value="GO">
    </form>

    <!-- <a href="DarshsCode.php"> -->

</body>
<!-- 
Dummy Customers

cus_KwdPzEk4su4Ucx |Has active Subscription

cus_KwdRgKZmotdTh2 |Cancelled Subscription

cus_KwdayrZBhL9uaT |Has active Subscription

cus_KwdcXIQTkPJE9S |Has active Subscription
-->
</html>