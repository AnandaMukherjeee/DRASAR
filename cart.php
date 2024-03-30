<?php
include 'config.php';
session_start();
$user_id=$_SESSION['user_id'];
if(!isset($user_id))
header('location:login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="cart1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <?php
    if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
    }
    ?>
</head>

<body>
    <nav>
        <div class="heading">
            <h3>drasar</h3>
        </div>
        <div class="search">
            <input type="text" placeholder="Search for products">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }
        ?>
        <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>            
            <li><a href="men.php">MEN</a></li>
            <li><a href="women.php">WOMEN</a></li>
            <li><a href="kids.php">KIDS</a></li>
            <li><a class="active" href="pages/cart.php"><i class="fa-solid fa-cart-shopping"><?php echo $count; ?></i></a></li>
            <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>        
        </ul>
    </nav>
    <div class="conta">
    <div class="profile">
        <?php
        $select_user=mysqli_query($conn, "SELECT * FROM `users` WHERE id='$user_id'") or die('Query Failed');
        if(mysqli_num_rows($select_user)>0){
            $fetch_user=mysqli_fetch_assoc($select_user);
        }
        ?>
        <p>User : <span><?php echo $fetch_user['name']; ?></span></p>
        <p>E-mail : <span><?php echo $fetch_user['email']; ?></span></p>
        <div class="flex">
            <a href="login.php" class="btn">LOG-IN</a>
            <a href="register.php" class="btn">SIGN-IN</a>
        </div>

    </div>
</div>

    <div class="container">
        <div class="row">
            <center><div class="col-lg-12 text-center border rounded bg-light my-5"><center>        
             <h1><p class="inset">MY CART</p><h1>
            </div>
            <div class="col-lg-8">
            <table class="table">
 <thead class="text-center">
    <tr>
      <th scope="col">item_no</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Remove</th>
    </tr>
</thead>
  <tbody class="text-center">
    <?php
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart']as $key => $value)
    {
        $sr=$key+1;
        echo"
        <tr>
        <td>1</td>
        <td>$value[Item_name]</td>
        <td>$value[price]<input type ='hidden' class='iprice' value='$value[price]'></td>
        <td><input input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10'></td>
        <td class='itotal'></td>
        <td>
        <form action='manage_cart.php' method='POST'>
        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
        <input type='hidden' name='Item_name' value='$value[Item_name]'>
        </form>
        </td>
        </tr>
        ";
    }
    }
    ?>
    
  </tbody>
</table>
            </div>
            <br>
            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                    <h3>Grand Total:</h3>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                            Cash on Delivery
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                            Online Payment
                            </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Make purchase</a></button>
                    </form>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        
        function subTotal()
        {
            gt=0;
            for(i=0;i<iprice.length;i++)
            {
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;
        }
        subTotal();
    </script>
</body>
</html>