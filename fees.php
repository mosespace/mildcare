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
    h2{
        margin-left: 250px;
        padding-top: 50px;
        text-decoration: wavy;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 60%;
        margin-left: 250px;
    }
    th{
        background-color: darkred;
        color: white;
    
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    tr:hover{
        background-color:darkred;
        color: white;
    }
    .useful-links{
        width: 70%;
        background: white;
        border: 1px solid whites;
        border-radius: 20px;
        margin-left: 150px;
        margin-top: 20px;
        
        padding: 20px;
    }
    .useful-links a{
        text-decoration: none;
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
    <div classs="Tuition">
        <h2>Fees Structure 2022-2023</h2>
        
        <table>
        <tr>
            <th>Classes</th>
            <th>Term 1</th>
            <th>Term 2</th>
            <th>Term 3</th>
        </tr>
         <tr>
            <th>Pre-primary</th>
            
        </tr>
        <tr>
            <td>Baby</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Middle</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
            <td>Germany</td>
        </tr>
         <tr>
            <td>Top</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
            <td>Germany</td>
        </tr>
        <tr>
            <th>Primary</th>
        </tr>
        
        <tr>
            <td>P.1</td>
            <td>Helen Bennett</td>
            <td>UK</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>P.2</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>P.3</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
            <td>Germany</td>
        </tr>
         <tr>
            <td>P.4</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
            <td>Germany</td>
        </tr>
         <tr>
            <td>P.5</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
            <td>Germany</td>
        </tr>
         <tr>
            <td>P.6</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
            <td>Germany</td>
        </tr>
         <tr>
            <td>P.7</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
            <td>Germany</td>
        </tr>
        </table>
    </div>
    
    <div class="uniform">
        <h2>Uniform Structure 2022-2023</h2>

        <table>
        <tr>
            <th>Pre-primary</th>   
        </tr>
         <tr>
            <th>Item</th>
             <th>Amount</th>
        </tr>
        <tr>
            <td>Sweater</td>
            <td>Maria Anders</td>
        </tr>
        <tr>
            <td>Shirt</td>
            <td>Francisco Chang</td>
        </tr>
        <tr>
            <td>Trousers</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Scuff</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Tie</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Socks</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>T-shirt</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Games Short</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Scuff</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <th>Primary</th>
        </tr>
        <tr>
            <td>Sweater</td>
            <td>Maria Anders</td>
        </tr>
        <tr>
            <td>Shirt</td>
            <td>Francisco Chang</td>
        </tr>
        <tr>
            <td>Trousers</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Scuff</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Tie</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Socks</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>T-shirt</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Games Short</td>
            <td>Giovanni Rovelli</td>
        </tr>
        <tr>
            <td>Scuff</td>
            <td>Giovanni Rovelli</td>
        </tr>
        </table>
    </div>
    <hr margin="10px">
    <div class="useful-links">
        <h3>Bursaries</h3>
        <p>You will doubtless have seen our fee schedule here on the website but please be aware that significant support with tuition fees is available to families who are
         paying privately so do please ask us for a Bursary application form during your visit or follow this link below to download it to bring with you.</p>
        <h3>Useful-links</h3>
        <a href="">Bursary Application</a>
        <h3>Contact Us</h3>
        <p>Again, if you have inquiries, dont hesitate to contact us:</p>
        <p>Email:<a href="">info@mildcare.au.ug</a></p>
        <p>Phone:<a href="">+256-777 978727</a></p>
    </div>
    <hr margin="10px">

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
                <p>Director???s Office:<br> +256752711909 | Admissions<br> Office: +256 752 711 882</p>
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
    'titleMessage' : '???? Talk to me!',
    'welcomeMessage': 'Hey there!????<br /> <br /> Your speaking to the MildCare Parents' School help center. Please let us know how we may help you.<br /> <br /> Nkya Julius Ladsen(Support Staff)',
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