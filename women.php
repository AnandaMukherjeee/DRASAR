<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="women1.css">
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
            <li><a href="men.php">MEN</a></li>
            <li><a class="active" href="pages/women.php">WOMEN</a></li>
            <li><a href="kids.php">KIDS</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"><?php echo $count; ?></i></a></li>
            <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>

    <h1 style="text-align: center">WOMENS SECTION</h1>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gp1.png" style="width: 100%">
            <div class="desc">RENTO<br>PRICE:2500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="RENTO">
            <input type="hidden" name="Price" value="2500">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gp2.png" style="width: 100%">
            <div class="desc">ISHP<br>PRICE:2900<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="ISHP">
            <input type="hidden" name="Price" value="2900">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gp3.png" style="width: 100%">
            <div class="desc">LAK<br>PRICE:2000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="LAK">
            <input type="hidden" name="Price" value="2000">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gp4.png" style="width: 100%">
            <div class="desc">TROY<br>PRICE:1500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="TROY">
            <input type="hidden" name="Price" value="1500">
    </form>
        </div>
        </div>
    </div>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gq1.png" style="width: 100%">
            <div class="desc">ZENO<br>PRICE:1900<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="ZENO">
            <input type="hidden" name="Price" value="1900">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gq2.png" style="width: 100%">
            <div class="desc">HELA<br>PRICE:3000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="HELA">
            <input type="hidden" name="Price" value="3000">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gq3.png" style="width: 100%">
            <div class="desc">CHETO<br>PRICE:1700<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="CHETO">
            <input type="hidden" name="Price" value="1700">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gq4.png" style="width: 100%">
            <div class="desc">PERU<br>PRICE:2500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="PERU">
            <input type="hidden" name="Price" value="2500">
    </form>
        </div>
        </div>
    </div>

    <div class="container">
    <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/gs1.png" style="width: 100%">
            <div class="desc">VEX<br>PRICE:2500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="VEX">
            <input type="hidden" name="Price" value="2500">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mq2.jpg" style="width: 100%">
            <div class="desc">GETA<br>PRICE:1500<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="GETA">
            <input type="hidden" name="Price" value="1500">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mq3.jpg" style="width: 100%">
            <div class="desc">BEX<br>PRICE:1800<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="BEX">
            <input type="hidden" name="Price" value="1800">
    </form>
        </div>
        </div>
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mq4.jpg" style="width: 100%">
            <div class="desc">RYDA<br>PRICE:3000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="RYDA">
            <input type="hidden" name="Price" value="3000">
    </form>
        </div>
        </div>
    </div>
</body>
</html>