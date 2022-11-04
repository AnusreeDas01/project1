<?php
echo '

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warrenty manager</title>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <nav id="navbar">
            <div id="logo">
                <img src="img/logo.jpg" alt="Warrenty Manager">
            </div>

            <ul>
                <li class="item"><a href="#">Home</a></li>
                <li class="item"><a href="#">About Us</a></li>';
                error_reporting(0);
                session_start();
                $name=$_SESSION['name'];
                if($name==""){
                    echo '<li class="item"><a href="login.php">Sign In</a></li>';
                }
                else{
                    echo '<li class="item"><a href="#">'.$name.'</a></li>';
                }
         echo '       <li class="item"><a href="logout.php">Log Out</a></li>

            </ul>
        </nav>';
?>
        <section id="home">
            <h1 class="h-primary">Welcome to Warrenty Manager</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis provident velit eaque maiores maxime
                unde!</p>
            <p>Lorem ipsum dolor sit amet,Officiis provident velit eaque maiores maxime unde!</p>

        </section>
        <div class="altt">
            <p>error</p>
        </div>
        <section id="services-container">
            <h1 class="h-primary center">Our Services</h1>

            <div id="services">
                <div class="box">
                    <img src="img/1.jpg" alt="">
                    <h4 class="h-secondary center">Medicines</h4>
                    <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut dolorum architecto,
                        saepe, vel dolor aspernatur nihil autem nam beatae eveniet a necessitatibus cum repellat! Ullam
                        molestiae hic mollitia molestias! Cum quidem voluptate odio voluptatibus?</p>
                    <button class="btn">Add data</button>
                </div>
                <div class="box">
                    <img src="img/2.jpg" alt="">
                    <h4 class="h-secondary center">Vehicles</h4>
                    <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut dolorum architecto,
                        saepe, vel dolor aspernatur nihil autem nam beatae eveniet a necessitatibus cum repellat! Ullam
                        molestiae hic mollitia molestias! Cum quidem voluptate odio voluptatibus?</p>
                    <button class="btn">Add data</button>
                </div>
                <div class="box">
                    <img src="img/3.png" alt="">
                    <h4 class="h-secondary center">Electronics</h4>
                    <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut dolorum architecto,
                        saepe, vel dolor aspernatur nihil autem nam beatae eveniet a necessitatibus cum repellat! Ullam
                        molestiae hic mollitia molestias! Cum quidem voluptate odio voluptatibus?</p>
                    <button class="btn">Add data</button>
                </div>
                <div class="box">
                    <img src="img/4.jpg" alt="">
                    <h4 class="h-secondary center">Cosmetics</h4>
                    <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut dolorum architecto,
                        saepe, vel dolor aspernatur nihil autem nam beatae eveniet a necessitatibus cum repellat! Ullam
                        molestiae hic mollitia molestias! Cum quidem voluptate odio voluptatibus?</p>
                    <button class="btn">Add data</button>
                </div>
                <div class="box">
                    <img src="img/5.jpg" alt="">
                    <h4 class="h-secondary center">Toiletries</h4>
                    <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut dolorum architecto,
                        saepe, vel dolor aspernatur nihil autem nam beatae eveniet a necessitatibus cum repellat! Ullam
                        molestiae hic mollitia molestias! Cum quidem voluptate odio voluptatibus?</p>
                    <button class="btn">Add data</button>
                </div>
                <div class="box">
                    <img src="img/6.png" alt="">
                    <h4 class="h-secondary center">Others</h4>
                    <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut dolorum architecto,
                        saepe, vel dolor aspernatur nihil autem nam beatae eveniet a necessitatibus cum repellat! Ullam
                        molestiae hic mollitia molestias! Cum quidem voluptate odio voluptatibus?</p>
                    <button class="btn">Add data</button>
                </div>
            </div>
        </section>
        <section id="client-section">
            <h1 class="h-primary center">Our Clients</h1>
            <div id="clients">
                <div class="client-item">
                    <img src="img/logo1.jpg" alt="">
                </div>
                <div class="client-item">
                    <img src="img/logo2.jpg" alt="">
                </div>
                <div class="client-item">
                    <img src="img/logo3.png" alt="">
                </div>
                <div class="client-item">
                    <img src="img/logo4.png" alt="">
                </div>
            </div>
        </section>

        <section id="contact">
            <h1 class="h-primary center">Contact Us</h1>
            <div id="contact-box">
                <form action="">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone number">Phone Number:</label>
                        <input type="phone" name="phone number" id="phone number" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" cols="0" rows="0"></textarea>
                    </div>
                </form>
            </div>
        </section>

        <footer>
            <div class="center">
                Copyright &copy; www.Warrenty Manager All rights reserved!
            </div>
        </footer>
    </body>

</html>