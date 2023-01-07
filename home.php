<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MildCare Parents' School.</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="css/swiper-bundle.min.css">



    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
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
    .header a{
        color: black;
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
        display: flex;
        flex-direction:column;
    }
    
    #account ul{
        display: flex;
        justify-content: space-between;
        list-style: none;
        color: red;
    }
    #account a{
        text-decoration: none;
        color: red;
        justify-content: space-between;
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
    #media1 a{
        text-decoration:none;
        color:white;
        justify-content:space-around;
    }
    .banner{
        background: url('swim.jpg');
        opacity: 0.9;
        height: 550px;
    }
    .banner1{
        color: white;
        padding-top: 200px;
        margin-left: 150px;
        margin-right: 200px;
        font-size: 15px;
        opacity:1;
        
        
    }
    .banner1 a{
        color: blue;
        text-decoration: none;
    }


    .app{
        display: flex;
        justify-content:space-evenly;
        padding-top: 100px;
    }
    .app1 {background: whitesmoke;
        border:0px;
        border-radius:20px;
        padding: 30px;
        transition: pink 100ms;
    }
    .app1 h2{
        
        text-align: center;
    }
    .app1 img{
        width: 500px;
        height: auto;
    }
    .results{
        text-align: center;
        padding-top: 100px;
        justify-content: space-evenly;

    }
   
    .cand{
        display: flex;
        justify-content: space-evenly;
        padding-top: 30px;
    }
    .cand img{
        width: 200px;

    }
    .cand table th {
        background: darkred;
        border-radius: 10px;
        color: white;
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .results button{
        margin-top: 25px;
        background: whitesmoke;
        border: 1px solid whitesmoke;
        border-radius: 5px;
    }
    .results button:hover{
        background: darkred;
        border: 1px solid darkred;
        color: white;
    }
    .results button a{
        padding-left :20px;
        padding-right: 20px;
        padding-top: 20px;
        padding-bottom: 20px;
    
    }
    section{
        position: relative;
    }
    .custom-shape-divider-bottom-1672599421 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1672599421 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 49px;
}

.custom-shape-divider-bottom-1672599421 .shape-fill {
    fill: #FFFFFF;
}
        .media{
            text-align: center;
            margin-top: 50px;
            padding-top: 30px;
            padding-bottom: 100px;
            background: whitesmoke;
            border-radius: 25px;

        }
        #media{
            padding-top: 30px;
        }
       
        .media h3 {
            color: black;
        }
        .media button{
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 20px;
            padding-left: 20px;
            background:whitesoke;
            border: none;
        }
        .media button:hover{
           
            border:none;
            color: darkred;
            background: white;
        }
        .collection{
            display: flex;
            padding-top: 40px;
            margin:5px;
        }
        .collection a img{
            width: 220px;
            height: auto;
            opacity: 1;
        }
        .collection img:hover{
            opacity: 0.7;
        }
        .enrollment{
            text-align: center;
            padding-top: 20px;
            padding-bottom: 10px;
            width: 50%;
            margin-top: 10px;
            margin-left: 325px;
        }
        #enrollment{
            padding-top:30px;
        }
        .Adn{
            display: flex;
            justify-content: space-evenly; 
        }
        .Adn button{
            background:white;
            border: 1px solid white;
        }
        .Adn button a{
            color: black;
            text-decoration: none;
        }
        .Adn button:hover{
            color: white;
            background: darkred;
            border: 1px solid darkred;
        } 
        .Adn button a:hover{
            color:white;
        }
        .Adn1{
            background: whitesmoke;
            border: 1px solid whitesmoke;
            border-radius: 10px;
            padding: 50px;
            margin-top: 50px;
        }
        .Adn1 img{
            width:100px;
        }
       
        
        .Adn2{
            background: whitesmoke;
            border: 1px solid whitesmoke;
            border-radius: 10px;
            padding: 50px;
            margin-top: 50px;
        }
        .Adn2 img{
            width:100px;
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
    .test{
        text-align: center;
    }
    .container{
        height: 70vh;
        width: 100;
        margin-left: 125px;
        margin-top: 50px;
    }
    .testimonial{
        position: relative;
        max-width: 900px;
        width: 100%;
        padding: 50px;
        overflow: hidden;
        
        
        
    }
    .testimonial .image{
        height: 170px;
        width: 170px;
        object-fit: cover;
        border-radius: 50%;
    }
    .testimonial .slide{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .slide p{
        text-align: center;
        padding:0 160px;
        font-size: 14px;
        font-weight: 400;
        color: #333;
    }
    .slide .quote-icon{
        font-size: 30px;
        color: blue;
    }
    .slide .details{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .details .name{
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }
    .details .job{
        font-size: 12px;
        font-weight: 400;
        color: #333;
    }
    .footer1{
        display: flex;
        justify-content: space-between;
        padding-top: 100px;
    }
    .copyright{
        position: relative;
        text-align: center;
        padding-top: 10px;
        color: blue;
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
        <a href="login.php" width="30px"><ion-icon name="person-outline"></ion-icon></a>
    </div>

   
    <div class="contactbar">
        <div id="contact1">
            <a href="">+256-700494641</a>
            <a href="" >info@mildcare.au.ug</a>
        </div>
        <div id="media1">
            <a href="https://www.whatsapp.com<+256 777978727>"><ion-icon name="logo-whatsapp"></ion-icon></a>
            <a href="https://www.twitter.com/@NLadsen/"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.instagram.com/nladsen/"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="https://www.facebook.com/Nkya_Julius_Ladsen/"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://www.youtube.com/Nkya Julius Ladsen/"><ion-icon name="logo-youtube"></ion-icon></a>
            <a href="https://www.tiktok.com/@jladsens...love/"><ion-icon name="logo-tiktok"></ion-icon></a>
        </div>
        
    </div>

    <section>
        <div class="banner">
           <div>
                <div class="banner1">
                    <h4>MildCare is a multipurpose daycare, nursery and primary school.<br>A home away from home.</h4>
                    <a href=""><h4>LEARN MORE</h4></a>
                </div>
           </div> 
           
        </div>
    </section>
    
    <section>

        <div class="app">
            <div class="app1">
                <h2>Introducing the MCPS App</h2>
                <hr color="darkred" width="100px;" solid="5px">
                <p>Download the Greenhill MOBI App and get instant notifications of school events.<br> You can also track your child's progress. Greenhill MOBI is available both <br>on Google Play Store and Apple App Store.</p>
            </div>
            <div class="image">
                <img src ="index.jpeg">
            </div>
        </div>
    </section>
       
        <div class="results">
            <div>
                <h2>PLE Exam Result 2021-2022</h2>
                <hr color="darkred" width="100px;">
            </div>
            <div class="cand">
                <div>
                    <img src="j.jpg" alt="">
                    <table>
                        <tr><th>NKYA JULIUS <br>LADSEN</th></tr>
                        <tr><td>Male</td></tr>
                        <tr><td><strong>4 Aggregates</strong></td></tr>
                    </table>
                </div>
                <div>
                    <img src="j.jpg" alt="">
                    <table>
                        <tr><th>NKYA JULIUS<br> LADSEN</th></tr>
                        <tr><td>Male</td></tr>
                        <tr><td><strong>4 Aggregates</strong></td></tr>
                    </table>
                </div>
                <div>
                    <img src="j.jpg" alt="">
                    <table>
                        <tr><th>NKYA JULIUS<br> LADSEN</th></tr>
                        <tr><td>Male</td></tr>
                        <tr><td><strong>4 Aggregates</strong></td></tr>
                    </table>
                </div>
                
            </div>
            <button><a>VIEW MORE</a></button>
        </div>

    <section>   
        <div class="custom-shape-divider-bottom-1672599421">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
            </svg>
        </div>
        <div class='media'>
            <div>
                <h2>Media</h2>
                <hr color="darkred" width="100px" >
                <div id="media">
                    <button oncl><a href=""><h3>All</h3></a></button>
                    <button><a href=""><h3>Image</h3></a></button>
                </div>
            </div>
            <div class ="collection">
                <a href="footer.jpg"><img src="footer.jpg" alt=""></a>
                <a href="md.jpg"><img src="md.jpg" alt=""></a>
                <a href="swim.jpg"><img src="swim.jpg" alt=""></a>
                <a href="students.jpg"><img src="students.jpg" alt=""></a>
                <a href="swim.jpg"><img src="swim.jpg" alt=""></a>
                <a href="students.jpg"><img src="students.jpg" alt=""></a>
                
            </div>
        </div>
    </section>
        <div class= "enrollment">
            <h2>Apply & Enroll</h2>
            <hr color="darkred" width="100px" >
            <div id="enrollment">
                <p>We are currently accepting applications for <br> the 2022-23 academic year.</p>
            </div>
            <div class= "Adn">
                <div class="Adn1">
                    
                    <h3>Apply</h3>
                    <img src = "grad.png">
                    <button><a href="signin.php">Admissions</a></button>
                </div>
                <div class= "Adn2">
                    <h3>Enroll</h3>
                    <img src = "grad.png">
                    <button><a href="admissions.php">Request_Info</a></button>
                </div>
            </div>
        </div>
        
    <div class="footer">
        <div class="test">
            <h2>Testimonials</h2>
            <hr color="darkred" width="100px;">
            <section class="container">
                <div class="testimonial mySwiper">
                    <div class= "testi-content swiper-wrapper">
                        <div class ="slide swiper-slide">
                            <img src = "j.jpg"alt="" class="image">
                                <p>MildCare Parents’ School is on international level but follows a local curriculum.</p>
                                <p>The school mission is “to facilitate first-class education and civilisation to children with and from outside Uganda with the hope that there will be a better world community tomorrow“.</p>
                            <i class="bx bxs-quote-alt-left quote-icon"></i>
                            <div class="details">
                                <span class="name">Julius Ladsen</span>
                                <span class="job">Web Devaloper</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                
            </section>

            <script src="js/swiper-bundle.min.js"></script>
            
        </div><hr >
        <div class="footer1">
        
            <div>
            
                <h3>Our School</h3>
                <p>A decade's worth of rich history and<br>
                goodwill with the public schools<br>
                surrounding plus an extensive<br>
                community consultation process<br>
                prepared us for building.</p>
            </div>
            <hr >
            <div>
                <h3>Resources</h3>
                <p><a href="">Theory of Knowledge</a></p>
            </div>
            <hr  >
            <div>
                <h3>Contacts</h3>
                <p>Plot No. 447, Block 213,<br> Salaama - Munyonyo Road,<br> Munyonyo, Kampala, Uganda. P.O.<br> Box Number 1433, Kampala,<br> Uganda.</p>
                <p>Director’s Office:<br> +256752711909 | Admissions<br> Office: +256 752 711 882</p>
                <p>office@mcps.com |<br> admissions@mcps.com</p>
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

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-99a4c0bd-4470-412a-bd75-c3e25bb99df0"></div>
</body>
</html>