<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warrenty manager</title>


        <style>
            /* CSS Reset */

            * {
                margin: 0;
                padding: 0;
                font-family: 'Baloo Bhai 2', cursive;
            }

            /* CSS Variables
:root {
    --navbar-height: 59px;
} */

            /* Navigation Bar */
            #navbar {
                display: flex;
                align-items: center;
                position: relative;
                top: 0px;
            }

            /* Navigation Bar : Logo and Image */
            #logo {
                margin: 3px 10px;
            }

            #logo img {
                height: 65px;
                width: 65px;
                margin: 3px 6px;
            }

            /* Navigation Bar:List Styling */
            #navbar ul {
                display: flex;
                font-family: 'Baloo Bhai 2', cursive;
            }

            #navbar::before {
                content: "";
                background-color: black;
                position: absolute;
                top: 0px;
                left: 0px;
                height: 100%;
                width: 100%;
                z-index: -1;
                opacity: 0.6;
            }

            #navbar ul li {
                /* color: white; */
                list-style: none;
                font-size: 1.3rem;
            }

            #navbar ul li a {
                color: white;
                display: block;
                padding: 10px 17px;
                border-radius: 20px;
                text-decoration: none;
            }

            #navbar ul li a:hover {
                color: black;
                background-color: white;
            }

            /* Home section */
            #home {
                display: flex;
                flex-direction: column;
                padding: 3px 200px;
                height: 450px;
                justify-content: center;
                align-items: center;
            }

            #home::before {
                background: url('img/Food.jpg')no-repeat center center/cover;
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                height: 85%;
                width: 100%;
                z-index: -1;
                opacity: 0.99;
            }

            #home h1 {
                /* color: white; */
                text-align: center;
                font-family: 'Baloo Bhai 2', cursive;
            }

            #home p {
                /* color: white; */
                text-align: center;
                font-size: 1rem;
                font-family: 'Baloo Bhai 2', cursive;
            }


            /* Services Section */
            #services {
                margin: 5px;
                display: flex;
                display: grid;
                grid-gap: 0.5rem;
                grid-template-columns: repeat(3,1fr);
            }

            #services .box {
                border: 2px solid brown;
                padding: 15px;
                margin: 0px 15px;
                border-radius: 28px;
                background: #b19c9c;
                margin-bottom: 20px;
            }

            #services .box img {
                height: 120px;
                display: block;
                margin: auto;
            }

            #services-container h1 {
                font-size: 3.3rem;
                margin: 1px;
            }

            /* Utility Classes */
            .h-primary {
                font-size: 3.8rem;
                padding: 13px;
            }

            .h-secondary {
                font-size: 2rem;
                padding: 10px;
            }

            .btn {
                padding: 6px 10px;
                border: 2px solid white;
                background-color: brown;
                color: white;
                margin: 7px;
                font-size: 1.1rem;
                border-radius: 10px;
                cursor: pointer;
            
            }
            .altt{
                display: none;
            }

            .center {
                text-align: center;
            }


            /* Clients Section */
            #client-section h1 {
                font-size: 3.1rem;
            }

            #client-section {
                height: 230px;
            }

            #client-section::before {
                content: "";
                position: absolute;
                background: url('img/Food2.png');
                width: 100%;
                height: 33%;
                z-index: -1;
                opacity: 0.6;
            }

            #clients {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .client-item {
                padding: 35px;
                padding-top: 0px;
            }

            #clients img {
                height: 70px;
            }


            /* Contact Section */
            #contact h1 {
                font-size: 3rem;
            }

            #contact {
                position: relative;
                /* height: 200px; */
            }

            #contact::before {
                content: "";
                background: url('img/contact.jpg')no-repeat center center/cover;
                position: absolute;
                height: 100%;
                width: 100%;
                z-index: -1;
                opacity: 0.8;
            }

            #contact-box {
                display: flex;
                align-items: center;
                justify-items: center;
                padding-bottom: 34px;
            }

            #contact-box input {}

            #contact-box textarea {
                width: 100%;
                padding: 0.5rem;
                border-radius: 9px;
                font-size: 1.1rem
            }

            #contact-box form {
                width: 40%;
            }

            #contact-box label {
                font-size: 1.3rem;
            }

            footer {
                background: black;
                color: white;
                padding: 8px 20px;
                text-align: center;
                font-size: 1.3rem;
            }
        </style>

    </head>

    <body>
        <nav id="navbar">
            <div id="logo">
                <img src="img/logo.jpg" alt="Warrenty Manager">
            </div>

            <ul>
                <li class="item"><a href="#">Home</a></li>
                <li class="item"><a href="#">About Us</a></li>
                <li class="item"><a href="#">Sign In</a></li>
                <li class="item"><a href="#">Log Out</a></li>

            </ul>
        </nav>

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