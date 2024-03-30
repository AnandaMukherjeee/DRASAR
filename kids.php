<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="kids1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }
        ?>
    <nav>
        <div class="heading">
            <h3>drasar</h3>
        </div>
        <div class="search">
            <input type="text" placeholder="Search for products">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>           
            <li><a href="men.php">MEN</a></li>
            <li><a href="women.php">WOMEN</a></li>
            <li><a class="active" href="pages/kids.php">KIDS</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"><?php echo $count; ?></i></a></li>
            <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>    
        </ul>
    </nav>


    <h1 style="text-align: center">KIDS SECTION</h1>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/kp1.png" style="width: 100%">
            <div class="desc">HEKSA<br>PRICE:1800<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="RENTO">
            <input type="hidden" name="Price" value="2500">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/kp2.png" style="width: 100%">
            <div class="desc">PIO<br>PRICE:3000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="PIO">
            <input type="hidden" name="Price" value="3000">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/kp3.png" style="width: 100%">
            <div class="desc">ZENK<br>PRICE:800<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="ZENK">
            <input type="hidden" name="Price" value="800">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/kp4.png" style="width: 100%">
            <div class="desc">YERO<br>PRICE:800<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="YERO">
            <input type="hidden" name="Price" value="800">
    </form>
        </div>
        </div>
    </div>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/kt1.png" style="width: 100%">
            <div class="desc">MEXO<br>PRICE:1900<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="MEXO">
            <input type="hidden" name="Price" value="1900">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/kt2.png" style="width: 100%">
            <div class="desc">RTO<br>PRICE:500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="RTO">
            <input type="hidden" name="Price" value="500">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/kt3.png" style="width: 100%">
            <div class="desc">GEZA<br>PRICE:900<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="GEZA">
            <input type="hidden" name="Price" value="900">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/kt4.png" style="width: 100%">
            <div class="desc">RERU<br>PRICE:1800<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="RERU">
            <input type="hidden" name="Price" value="1800">
    </form>
        </div>
        </div>
    </div>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/ks1.png" style="width: 100%">
            <div class="desc">PETRA<br>PRICE:500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="PETRA">
            <input type="hidden" name="Price" value="500">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/ks2.png" style="width: 100%">
            <div class="desc">KRATO<br>PRICE:1800<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="KRATO">
            <input type="hidden" name="Price" value="1800">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/ks3.png" style="width: 100%">
            <div class="desc">LEXO<br>PRICE:1200<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="LEXO">
            <input type="hidden" name="Price" value="1200">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/ks4.png" style="width: 100%">
            <div class="desc">HEDA<br>PRICE:900<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="HEDA">
            <input type="hidden" name="Price" value="900">
    </form>
        </div>
        </div>
    </div>
</body>
</html>