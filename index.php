<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="deva.css">
    
</head>
<?php($_SESSION['cart']) ?>
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
            <li><a class="active" href="index.php">HOME</a></li>           
            <li><a href="men.php">MEN</a></li>
            <li><a href="women.php">WOMEN</a></li>
            <li><a href="kids.php">KIDS</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"><?php echo $count; ?></i></a></li>   
            <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>                    
        </ul>
    </nav>

    <section>
        <div class="image-container">
            <div class="image-list">
                <div class="image-item">
                    <img src="images/s10.png" alt="">
                </div>
                <div class="image-item">
                    <img src="images/f2.png" alt="">
                </div>
                <div class="image-item">
                    <img src="images/f3.png" alt="">
                </div>
                <div class="image-item">
                    <img src="images/s2.png" alt="">
                </div>
            </div>
            <div class="image-btn-container">
                <button class="slider-btn" id="slide-btn-left"><i class="fa-solid fa-angle-left"></i></button>
                <button class="slider-btn" id="slide-btn-right"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </section>
   
    <h1 style="text-align: center">RECOMMENDED</h1>
    
    <div class="container">
        <form action="manage_cart.php" method="POST">
        <div class="glass">
            <img src="images/mp1.png" style="width: 100%">
            <div class="desc">VETRO<br>PRICE:2000<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="VETRO">
            <input type="hidden" name="Price" value="2000">
        </div>
        </div>
</form>
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
            <img src="images/kp3.png" style="width: 100%">
            <div class="desc">ZENK<br>PRICE:800<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="ZENK">
            <input type="hidden" name="Price" value="800">
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
            <img src="images/ks3.png" style="width: 100%">
            <div class="desc">LEXO<br>PRICE:1200<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="LEXO">
            <input type="hidden" name="Price" value="1200">
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
            <img src="images/kt3.png" style="width: 100%">
            <div class="desc">GEZA<br>PRICE:900<br><button type = "submit"name=Add_To_Cart>Add To Cart</button>
            <input type="hidden" name="Item_name" value="GEZA">
            <input type="hidden" name="Price" value="900">     
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

    <script src="script.js"></script>

</body>
</html>