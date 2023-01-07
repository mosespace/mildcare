<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<style>
    body{
        margin: 10px;
        font-size: 16px;
        font-style: catamaran;
        background: white;

    }
    .header{
        color: black;
        background-color: white;
        border: 1px solid white;
        display: flex;
        justify-content: space-evenly;
        height: 50px;
    }
     .menu{
        width: 50%;
        background-size: 450px;
    }
    nav ul{
        list-style: none;
        display: flex;
        justify-content: space-between;
    }
    nav ul li{
        display: flex;
        justify-content: space-evenly;
        flex-direction: right;
        opacity: -9px;
    }
    nav ul li a{
        text-decoration: none;
        color: black;
        display: block;
    }
    nav ul li a:hover{
        background-color: darkred;
        padding-left: 25px;
        padding-right: 25px;
        color: white;
    }
    nav ul li ol li{
        display: none;
    }
    nav ul li:hover ol li{
        display: block;
    }
    
    .contactbar{
        display:flex;
        justify-content:space-between;
        background-color:darkred;
        border:1px solid darkred;
        height: 40px;
        padding-top:15px;
        padding-left: 20px;
        padding-right: 20px;
    }
    #contact1 a{
        text-decoration:none;
        color:white;
        justify-content:space-around;
    }
    #media a{
        text-decoration:none;
        color:white;
        justify-content:space-around;
    }


        .box{
            margin-left: 10%;

        }
        img{
            padding-top: 10px;
            width: 86.5%;
        }
        nav1 {
        float: left;
        width: 20%;
        height: 970px; 
        background: #ccc;
        padding: 20px;
        }
        nav1 a{
            text-decoration: none;
            color: black;
        }

        
        nav1 ul {
        list-style-type: none;
        padding: 0;
        }
        nav1 ul li a:hover{
            background: whitesmoke;
            width:90%;
            padding: 10px;
        }

        article {
        float: left;
        padding: 20px;
        width: 60%;
        background-color: #f1f1f1;
        height: 970px; 
        }
        article h1{
            color: orangered;
            text-decoration: underline;
            text-shadow:0ch;
            font-size: 18px;
        }
        article img{
            width: 100%;
        }
        article h3{
            color: darkred;
        }
        .md{
            color: darkred;
        }

        
        section::after {
        content: "";
        display: table;
        clear: both;
        }
        .footer{
            color: black;
            display: block;
            justify-content: space-between;
            margin-left: 5px;
            margin-right: 5px;
            margin-top:10px;
            padding:50px;
            background:whitesmoke;
            
    }
        .footer1{
            display: flex;
            justify-content: space-between;
        }
        .copyright{
        position: relative;
        text-align: center;
        padding-top: 10px;
        color: blue;
    }

        
        @media (max-width: 600px) {
        nav, article {
            width: 100%;
            height: auto;
        }
        }
            
</style>
<body>
    <div class="header">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a>
                        <ol>
                            
                            <li><a href="teacher.php">Meet The MCPS Team</a></li>
                            <li><a href="">Media</a></li>
                            <li><a href="contact.php">Location and Contact</a></li>
                        </ol>
                    </li>
                    <li><a href="">Admissions</a>
                        <ol>
                            <li><a href="admissions.php"> Admissions: Request Info</a></li>
                            <li><a href="fees.php">Fees Structure 2022-2023</a></li>
                        </ol>
                    </li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
       
    </div>

     <div class="contactbar">
        <div id="contact1">
            <a href="">+256-700494641</a>
            <a href="" >info@mildcare.au.ug</a>
        </div>
        <div id="media">
            <a href="https://www.whatsapp.com<+256 777978727>"><ion-icon name="logo-whatsapp"></ion-icon></a>
            <a href="https://www.twitter.com/@NLadsen/"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.instagram.com/nladsen/"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="https://www.facebook.com/Nkya_Julius_Ladsen/"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://www.youtube.com/Nkya Julius Ladsen/"><ion-icon name="logo-youtube"></ion-icon></a>
            <a href="https://www.tiktok.com/@jladsens...love/"><ion-icon name="logo-tiktok"></ion-icon></a>
        </div>
        
    </div>

    <div class="box">
       
            <img src ="index.jpeg">
       
            <section>
            <nav1>
                <ul>
                <li><a href="#">Mission and vision</a></li><br>
                <li><a href="md.php">Managing Directors' Message</a></li><br>
                <li><a href="Hm.php">Headteachers' Message</a></li><br>
                <li><a href="teacher.php">Meet the MCPS team</a></li><br>
                <li><a href="#">Media</a></li><br>
                <li><a href="#">Location and Contact</a></li><br>
                </ul>
            </nav1>
            
            <article>
                <h1>Managing Directors' Message</h1>
                <img src="md.jpg"/>
                <p class="md">
                    <strong>
                    Rajiv has a strong belief in Practical learning through his own experiences, he has driven<br>
                    management and staff at a Kampala Parents' School to develop he teaching culture that is not<br>
                    necessarily about 'teacher to student', but leaning towards a 'student to teacher' approach.
                    </strong>
                </p>
                <p>
                By empowering student to ask, challenge and to be inquisitive, it affords them the opportunity to think for<br>
                themselves and find quick solutions to some of the complexities that they will face in their future years.
                </p>
                <p>
                A graduate of the financial Management, Rajiv started his own business at the age of 17 and as one of<br>
                the directors, continues to manage several businesses. Educated in UK, Rajiv believes he can<br>
                effect change by boosting th efforts of his compatriots whether through charity or job creation. Apart from being<br>
                the managing director of Kampala Parents'  School, Rajiv is also in charge of the general welfare<br>
                department of he Ruparelia Foundation, which works to improve and promote health, education, sports<br>
                and general welfare.
                </p>
                <p>
                With such dynamism, enthusiasm and drive, it's Rajiv's desire that all those who walk through the gates<br>
                of Kampala parents' school, walkout  years later as mature and all rounded students who are ready to<br>
                face and take on the challenges of the world.
                </p>

                <h3>Mr. Magimbi Steven</h3>
                <p>Managing Director</p>

            </section>
       
    </div>
    <div class="footer">
        <div class="footer1">
            <div>
                <h3>Our School</h3>
                <p>A decade's worth of rich history and<br>
                goodwill with the public schools<br>
                surrounding plus an extensive<br>
                community consultation process<br>
                    prepared us for building.</p>
            </div>
            <hr>
            <div>
                <h3>Resources</h3>
                <p><a href="">Theory of Knowledge</a></p>
            </div>
            <hr>
            <div>
                <h3>Contacts</h3>
                <p>Plot No. 447, Block 213,<br> Kyebando - Kisalosalo Road,<br> Bukoto, Kampala, Uganda. P.O.<br> Box Number 34249, Kampala,<br> Uganda.</p>
                <p>Director’s Office:<br> +256752711909 | Admissions<br> Office: +256 752 711 882</p>
                <p>office@kisu.com |<br> admissions@kisu.com</p>
            </div>
            <hr>
            <div>
                <h3>School Policies & SOPs</h3>
                <ul>
                    <li>Masks, hand sanitizer and<br> Disposable gloves at the<br> reception area of school</li>
                    <li>Used masks and/or Disposable<br> gloves to be placed into<br> provided bins</li>
                    <li>All staff to wear masks while<br> being in contact with each<br> other</li>
                </ul>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="copyright">
            <h5>Copyright of MildCare, 2023</h5>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-99a4c0bd-4470-412a-bd75-c3e25bb99df0"></div>

   
    
</body>
</html>


