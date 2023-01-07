<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees</title>
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
    section{
        margin-left: 100px;
        margin-right: 100px;
        margin-top: 50px;
        margin-bottom: 50px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }
    .location iframe{
        width: 100%;
    }
    .fc{
        margin: 100px;
        display: flex;
        justify-content: space-evenly;
    }
    form Input{
        width: 300px;
        height: 50px;
        display: flex;
        flex-direction: column;
    }
    .con{
        display: flex;
        flex-direction: column;
        
    }
    .con img{
        width: 150px;
        border-radius: 100px;
    }
    .con1{
        display: flex;
    }
    #con{
        height: 100px;
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

    <section>
        <div>
            <div class="location">
                <h3>Location</h3>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7814265008697!2d32.612211315571074!3d0.2463986637270602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177d961ad55530ed%3A0x7d273d70c8c2631f!2sMild%20Care%20parents%20School!5e0!3m2!1sen!2sug!4v1672999309174!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <div class="fc">
        <div class="feedback">
                <div>
                    <form>
                        <h3>Feedback Form</h3>
                        <hr color="darkred" width="100px" >
                        <Input type="text" name="Name" placeholder="Name" required/><br>
                        <Input type="email" name="Email" placeholder="Email" required/><br>
                        <Input type="numeric" name="Phone" placeholder="Phone" required/><br>
                        <Input type="textbox" name="Message" placeholder="Message" action="required"/><br>
                        <button>SUBMIT</button>
                    </form>
                </div>
            </div>
            
        <div class="con">
                    <h3>Your Contact</h3>
                    <hr color="darkred" width="100px" >
                    <div class="con1">
                        <div>
                            <img src="j.jpg"/>
                        </div>
                        <div id="con">
                            <p>Head of Admissions</p>
                            <p><strong>Mr. Magimbi Stephen</strong></p>
                            <a href=""><ion-icon name="contact"></ion-icon>+256772472377</a><br>
                            <a href=""><ion-icon name="contact"></ion-icon>admissions@mcps.com</a>
                        </div>
                    </div>
        </div>
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

    <script src="https://getchat.app/assets/js/min/getchatapp.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var gcaMain = new GetChatApp({
    'mobileNumber' : '+256 702292447',
    'titleMessage' : '👋 Talk to me!',
    'welcomeMessage': 'Hey there!🙌<br /> <br /> Your speaking to the MildCare Parents' School help center. Please let us know how we may help you.<br /> <br /> Nkya Julius Ladsen(Support Staff)',
    'position' : 'right'
    'platforms' : {
        'whatsapp' : true,
        'facebook' : false,
        'email' : false,
        'instagram' : false,
        'telegram' : false,
    },
    'facebookPageId' : '',
    'gcaEmailAddress' : '',
    'gcaEmailSubject' : '',
    'gcaInstagramUsername' : '',
    'gcaTelegramUsername' : '',
  });
});
</script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-99a4c0bd-4470-412a-bd75-c3e25bb99df0"></div>
</body>
</html>