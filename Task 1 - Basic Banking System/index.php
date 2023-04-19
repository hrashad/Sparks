<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favi.png"  type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <title>TSF INTERN</title>
    
    <style>
    .left{
        float:left;
        margin-top:180px;
        margin-left:5%;
        position: absolute;
        font-size: 20px;
        z-index:1;


    }
    .left ol{
        padding-top: 35px;
    }

    .right{
        float:right;
        margin-top:100px;
        margin-right:15%;
        position: relative;
    }
    .right img{
        height: 350px;
        width:350px;
    }
    .dev{
    }
    .dev a{
        

    }
    </style>
</head>
<body>
    <?php 
    include 'config.php';
    include 'nav.php';
    ?>

    <div class="left">
    <h3>Basic Banking System</h3>
<ol>
<li>Create a simple dynamic website which has the following specs.</li>
<li>Start with creating a dummy data in database for upto 10 customers. </li>
<b>Database options:</b><br> Mysql, Mongo, Postgres, etc <li>Customers table will have basic fields such as name, email, current balance etc. </li>
<li> Transfers table will record all transfers happened.</li>
<b>Flow:</b><br>Home Page > View all Customers > Select and View one Customer > Transfer Money > Select customer to transfer to > View all Customers .</li>
<li>No Login Page. No User Creation. Only transfer of money between multiple users. </li>
<li>Host the website at 000webhost, github.io, heroku app or any other free hosting provider. Check in code in gitlab
</ol>
<center>
<a class="btn btn-secondary btn-sm"  href="https://github.com/hrashad/Sparks" target="_blank">GitHub</a>
</center>
</div>


    <div class="right">
        <img src="img/neo.gif" alt="" srcset="">
    </div>



    <div class="dev fixed-bottom" style="background:#bdc6ce; color:black; width:100%; text-align:center; padding:10px; font-size:22px;">
        Designed and Developed by &copy; <a href="https://www.linkedin.com/in/rashad-h/" style="text-decoration: none;">RASHAD H</a> 
        </div>
    
    
</body>
</html>