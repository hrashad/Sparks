<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

    <title>RASHAD H</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./logo/favicon (1).png" type="image/x-icon">
    <!-- Typewriter JS -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/081745df12.js" crossorigin="anonymous"></script>

    <!--EmailJS  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init("EVurlF4Z0LbNW54cD");
        })();
    </script>

    <style>
    *{
    font-family: 'Poppins', sans-serif;
}

body{
    /* font-size: .91rem; */
    color: #000000;
    background-color: #282828;
    width: 100%;
    height: 100%;
    margin-top: 80px;
    padding: 0;
    font-weight: 300;
}

#contact{
    font-size: 1.5em;
    text-align: center;
    color: orange;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: .3em;
    margin-top:30px;    
}

p{
    word-spacing: 0.1em;
    letter-spacing: .09em;
    font-size:1em;
}
section{
    float: left;
    width: 45%;
    margin-left:3%;
}

footer{
    float: right;
    width: 45%;
    margin-right:3%;

}

 .contact{
    margin-top: 2em;
    width: 100%;
    max-width: 900px;
    position: relative;
    top:50%;
    left:50%;
    transform: translate(-50%,0%);
    padding:30px 40px;
    box-sizing: border-box;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 20px #000000b3;
   
  }

  .text{
    background: white;
      border: 1px solid gray;
      font-size: 1em;
      margin: 8px 0;
      padding: 12px 18px;
      border-radius: 8px;
      box-shadow:0 10px 20px rgb(0 0 0 / 50%);
    }
    
    .text label{
     
    display: block;
    text-align: left;
    color:black;
    text-transform: uppercase; 
    font-size: 1.5em;
    font-weight: bolder !important;
    letter-spacing: .1em;

  }

  .text input, .text textarea{
    
    width: 100%;
    border: none;
    background: none;
    outline: none;
    font-size: 16px;
    margin-top:0;

  }

  .button{
    display: inline-block;
    border: none;
    color: black;
    padding:0.8em;
    margin-top: .5em;
    margin-bottom: -1em;
    transition: opacity 1s ease-in-out;
    text-decoration: none;
    font-size: large;
    letter-spacing: .2em;
    border: .1em solid black;
    border-radius: .2em;
    box-shadow:0 10px 20px rgb(0 0 0 / 20%);
}
.button:hover{
    /* opacity: 0.1; */
    background: white;
  transform: scale(1.1);
  }


  footer{
    text-align: center;
    padding-top: 10px;
    margin-top: 150px;
}
footer .icons{

}

footer .icons li{
  margin: auto;
    padding: 14px;
    display: inline-block;
    font-size: 15px;
    text-align: center;
}

.icons li a{
  display: flex;
  width: 40px;
  height: 40px;

}

footer .icons li:hover{
  background:none;
}

.footer-copyright{
    background-color: #272727;
    color: #ffffff;
    padding: 10px;
}
.footer-copyright a{
  text-decoration: none;
  color: #ffffff;
}
.footer-copyright a:hover{
  text-decoration: none;
  color: rgb(60, 245, 255);
}

.footer-copyright p{
    margin-bottom: 1px;
}
    </style>
</head>

<body>
    <?php include 'nav.php';?>
    <!-- Section -->
    <section>
        <!-- Contact -->
        <div class="container-section" data-aos="fade-down">
            <div class="container-contact">
                <h1 id="contact"></h1>
                <form class="contact" id="contactForm">
                    <h1 id="formtitle"></h1>
                    <div class="text">
                        <label>Name :</label>
                        <input type="text" id="fname" required placeholder="Enter your good name !" />
                    </div>
                    <div class="text">
                        <label>Email :</label>
                        <input type="email" id="mail" required placeholder="Enter your email ID" />
                    </div>
                    <div class="text">
                        <label>Mobile :</label>
                        <input type="tel" id="tel" maxlength="12" required placeholder="Enter your Mobile Number" />
                    </div>
                    <div class="text">
                        <label>Message :</label>
                        <textarea type="text" id="msg" required placeholder="Enter your message"></textarea>
                    </div>
                    <button class="button" id="btn" type="submit" onclick="e()">Send</button>
                </form>
            </div>
        </div>
    </section>

        <footer>
            <div class="footer">

            </div>
            <div class="footer-copyright">
                   <a href="#" target="_blank">Intern as Web Development & Designing</a><br><br>
                    <p>Connect with me</p>
            </div>

            <ul class="icons">
                <li><a href="https://www.instagram.com" target="_blank" data-tooltip="Instagram"><img src="img/instagram.png" alt="instagram"></a></li>
                <li><a href="https://in.linkedin.com/company/" target="_blank" data-tooltip="LinkedIn"><img src="img/linkedin.png" alt="linkedin"></a></li>
                <li><a href="https://www.twitter.com" target="_blank" data-tooltip="Twitter"><img src="img/twitter.png" alt="twitter"></a></li>
                <li><a href="https://www.youtube.com" target="_blank" data-tooltip="Youtube"><img src="img/youtube.png" alt="youtube"></a></li>
                <li><a href="https://wa.me/+919626863633" target="_blank" data-tooltip="Whats App"><img src="img/whatsapp.png" alt="whatsapp"></a></li>
                <li><a href="tel:+919626863633" data-tooltip="Call"><img src="img/call.png" alt="Call"></a></li>
                <li><a href="mailto:hrrmg10@gmail.com" data-tooltip="Mail"><img src="img/mail.png" alt="mail"></a></li>
            </ul>
       </footer>


    <!-- External JS -->
    <script>
        // Sub title
        var subtitle = document.getElementById("subtitle");
        var typewriter = new Typewriter(subtitle, {
            loop: true,
            delay: 100,
        });	

        //contact
        var contact = document.getElementById('contact');
        var typewriter = new Typewriter(contact, {

            strings:['Contact me'],
            
            autoStart: true,
            loop: true,
                delay: 80,
                
            });	

        document.querySelector("#contactForm").addEventListener("submit", function (e) {
            var name = document
            .querySelector("#contactForm")
            .getElementsByTagName("input")[0].value;
            var email = document
            .querySelector("#contactForm")
            .getElementsByTagName("input")[1].value;
            var message = document
            .querySelector("#contactForm")
            .getElementsByTagName("input")[2].value;
            var message = document
            .querySelector("#contactForm")
            .getElementsByTagName("textarea")[0].value;
            e.preventDefault();
            sweetAlert("Thank you !\nYour message is sent to Developer.")			
                    var templateParams={
                        fname:document.getElementById("fname").value,
                        mail:document.getElementById("mail").value,
                        tel:document.getElementById("tel").value,
                    msg:document.getElementById("msg").value,
                };
            
                emailjs.send("rasif", "rasiftemp", templateParams).then(
                    function (response) {
                        console.log("SUCCESS!", response.status, response.text);
                        
                    }
                );
                document.getElementById('fname').value="";
                    document.getElementById('mail').value="";
                    document.getElementById('tel').value="";
                    document.getElementById('msg').value="";
            });



            </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 800
        });
    </script>
    <!-- Sweet alert CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
