<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="men1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
            <li><a class="active" href="pages/men.php">MEN</a></li>
            <li><a href="women.php">WOMEN</a></li>
            <li><a href="kids.php">KIDS</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"><?php echo $count; ?></i></a></li>
            <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>

   <h1 style="text-align: center">MENS SECTION</h1>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mp1.png" style="width: 100%">
            <div class="desc">VETRO<br>PRICE:2000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="VETRO">
            <input type="hidden" name="Price" value="2000">
</form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mp2.png" style="width: 100%">
            <div class="desc">LAXTER<br>PRICE:2500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="LAXTER">
            <input type="hidden" name="Price" value="2500">
</form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mp3.png" style="width: 100%">
            <div class="desc">GYRO<br>PRICE:1200<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="GYRO">
            <input type="hidden" name="Price" value="1200">
</form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mp4.png" style="width: 100%">
            <div class="desc">REDA<br>PRICE:2200<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="REDA">
            <input type="hidden" name="Price" value="2200">
</form>
        </div>
        </div>
    </div>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/ms1.png" style="width: 100%">
            <div class="desc">FIBAR<br>PRICE:3000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="FIBAR">
            <input type="hidden" name="Price" value="3000">
</form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/ms2.png" style="width: 100%">
            <div class="desc">VECTOR<br>PRICE:1500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="VECTOR">
            <input type="hidden" name="Price" value="1500">
</form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/ms3.png" style="width: 100%">
            <div class="desc">RETRO<br>PRICE:2000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="RETRO">
            <input type="hidden" name="Price" value="2000">
</form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/ms4.png" style="width: 100%">
            <div class="desc">WATA<br>PRICE:1700<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="WATA">
            <input type="hidden" name="Price" value="1700">
</form>
        </div>
        </div>
    </div>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mq1.jpg" style="width: 100%">
            <div class="desc">CRAD<br>PRICE:1500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="CRAD">
            <input type="hidden" name="Price" value="1500">
</form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mq2.jpg" style="width: 100%">
            <div class="desc">VICT<br>PRICE:2600<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="VICT">
            <input type="hidden" name="Price" value="2600">
</form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mq3.jpg" style="width: 100%">
            <div class="desc">STRAK<br>PRICE:1800<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="STRAK">
            <input type="hidden" name="Price" value="1800">
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mq4.jpg" style="width: 100%">
            <div class="desc">MEXI<br>PRICE:2000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="MEXI">
            <input type="hidden" name="Price" value="2000">
        </div>
        </div>
    </div>


    

</body>
</html>