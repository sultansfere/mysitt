<?php


$username ="root";
$password ="";
$database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

// for submit button//
if (isset($_POST['logo'])) {


         $email = $_POST['email'];

          // Whether the user has tried to update the password before or not and If his account has the word <passup>
            $resst =$database->prepare ("SELECT * FROM users WHERE email = :email and  ressetpass ='passup' ") ;
            $resst->bindParam("email",$_POST['email']);
            $resst->execute();
            
            if($resst->rowCount()===1){
          // If he sent the link, show this message
                $msg = "<div class='alert alert-warning'> تم ارسال الرابط من قبل تحديث كلمة المرور الى الايميل من قبل   .</div>";
          
            }if($resst->rowCount()===0){
           // If he has not sent it before and the word <npass> is registered in his account
                $restpassword =$database->prepare("SELECT * FROM users WHERE email = :email and ressetpass = 'npass' ") ;
    
                $restpassword->bindParam("email",$_POST['email']);

                
                $restpassword->execute();
               
                if($restpassword->rowCount()===1){
             
                  


//If all previous conditions are true, update the existing word from <npass> to <passup>
                    $update = $database->prepare(" UPDATE users SET code = :ncode , ressetpass ='passup'  WHERE email = :email ");
                    $code=md5(date ("h:i:s"));
                    $update->bindParam("ncode" , $code);
                    $update->bindParam("email" , $email);
                    $update->execute();


                    if($update->execute()){




                   
                 
                    $mail = new PHPMailer(true);
                    try {
                        //Server settings
                        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'ssssssuuuuuu123456@gmail.com';                     //SMTP username
                        $mail->Password   = 'fribuulrjlkiemqw';                               //SMTP password
                        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom('ssssssuuuuuu123456@gmail.com');
                        $mail->addAddress($email);   
                    
                        
                      
                      // If the change is made, send a link containing a link with md5


                        //creat a link for actv user//
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Here is the subject';
                        $mail->Body    = '<h1> </h1>'."<div>
                        
                        
                        رابط تغيير الرمز في موقع دليني  
                        
                        اذا انت لم تقم بعملية تحديث كلمة المرور يمكنك مراسلتنا لتفادي سرقة حسابك على موقع دليني
                        


                        
                        "."</div>"."<a href
                        ='http://localhost/mysitt/userupdate.php?code=".$code."'>
                        "."http://localhost/mysitt/userupdate.php?code=".$code."</a>";
                        
                      ;
                        $mail->send();
                        //Recipients
                        $mail->setFrom('ssssssuuuuuu123456@gmail.com');
                        $mail->addAddress($email); 

                      $msg = "<div class='alert alert-success'> تم الرسال الرابط الايميل لتغيير الرمز </div>";
                        
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
                    
            }
            }
            }
            }
            
         
        
        
        
        

  ?>
<!DOCTYPE html>
<html lang="zxx" dir="rtl" >

<head >

    <title>تسجيل دخول</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
  

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
 <style>

html {
    scroll-behavior: smooth;
 
 
}

body,
html {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}



.d-grid {
    display: grid;
}

.d-flex {
    display: flex;
    
}

.text-center {
    text-align: center;
}

.text-left {
    text-align: left;
}

.text-right {
    text-align: right;
}

button,
input,
select {
    -webkit-appearance: none;
    outline: none;
    font-family: 'Poppins', sans-serif;
}

button,
.btn,
select {
    cursor: pointer;
}

a {
    text-decoration: none;
}

img {
    max-width: 100%;
}

ul {
    margin: 0;
    padding: 0
}

h1,
h2,
h3,
h4,
h5,
h6,
p {
    margin: 0;
    padding: 0
}

p {
    color: #666;
    font-size: 16px;
    line-height: 25px;
    opacity: .6;
}

.p-relative {
    position: relative;
}

.p-absolute {
    position: absolute;
}

.p-fixed {
    position: fixed;
}

.p-sticky {
    position: sticky;
}

.btn,
button,
.actionbg,
input {
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -o-border-radius: 4px;
    -ms-border-radius: 4px;
}

.btn:hover,
button:hover {
    transition: 0.5s ease;
    -webkit-transition: 0.5s ease;
    -o-transition: 0.5s ease;
    -ms-transition: 0.5s ease;
    -moz-transition: 0.5s ease;
}

/*-- wrapper start --*/
.wrapper {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .wrapper {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .wrapper {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .wrapper {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .wrapper {
        max-width: 1140px;
    }
}

.wrapper-full {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

/*-- //wrapper start --*/

/*-- form styling --*/
.w3l-mockup-form {
    position: relative;
    min-height: 100vh;
    z-index: 0;
    background: #D3D3D3;
    padding: 40px 40px;
}

.container {
    max-width: 890px;
    margin: 0 auto;
}

.w3l_form {
    padding: 0px;
    
    
 
   
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
}


.content-wthree {
    flex-basis: 60%;
    -webkit-flex-basis: 60%;
    box-sizing: border-box;
    padding: 3em 3.5em;
    background: #fff;
    box-shadow: 2px 9px 49px -17px rgba(0, 0, 0, 0.1);
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
}

.w3l-workinghny-form .logo {
    text-align: center;
}

.w3l-mockup-form .main-mockup {
    position: relative;
  
    margin: 40px 0;
}



.w3l-mockup-form form {
    margin-top: 70px;
    margin-bottom: 80px;
}

.social-icons {
    text-align: center;
}

.w3l-mockup-form h1 {
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    color: #3b3663;
}

.w3l-mockup-form h2 {
    display: inline-block;
    font-size: 25px;
    line-height: 35px;
    margin-bottom: 5px;
    font-weight: 600;
    color: #3b3663;
}

.w3l-mockup-form input {
    outline: none;
    margin-bottom: 15px;
    font-size: 16px;
    color: #999;
    padding: 14px 20px;
    width: 100%;
    display: inline-block;
    box-sizing: border-box;
    border: none;
    outline: none;
    background: transparent;
    border: 1px solid #e5e5e5;
    transition: 0.3s all ease;
}

.w3l-mockup-form input:focus {
    border-color: #00c16e;
}

.w3l-mockup-form button {
    font-size: 18px;
    color: #fff;
    width: 100%;
    background: #2a2a2a;
    border: none;
    padding: 14px 15px;
    font-weight: 500;
    transition: .3s ease;
    -webkit-transition: .3s ease;
    -moz-transition: .3s ease;
    -ms-transition: .3s ease;
    -o-transition: .3s ease;
}

.w3l-mockup-form button:hover {
    background: #4ca356;
}

.w3l-mockup-form .social-icons ul li {
    list-style: none;
    display: inline-block;
}

.w3l-mockup-form .social-icons ul li a {
    padding: 8px;
}

.w3l-mockup-form .social-icons ul li a:hover {
    opacity: 0.8;
    transition: 0.5s ease;
    -webkit-transition: 0.5s ease;
    -o-transition: 0.5s ease;
    -ms-transition: 0.5s ease;
    -moz-transition: 0.5s ease;
}

.w3l-mockup-form .social-icons ul span.fa {
    color: #696687;
    font-size: 18px;
    opacity: .8;
}

.w3l-mockup-form .social-icons ul li a.facebook span {
    color: #3b5998;
}

.w3l-mockup-form .social-icons ul li a.twitter span {
    color: #1da1f2;
}

.w3l-mockup-form .social-icons ul li a.pinterest span {
    color: #e60023;
}


.copyright p {
    text-align: center;
    font-size: 17px;
    line-height: 26px;
    color: #607863;
    opacity: 1;
}

p.copy-footer-29 a {
    color: #517856;
}

p.copy-footer-29 a:hover {
    color: #00c16e;
    transition: 0.5s ease;
    -webkit-transition: 0.5s ease;
    -o-transition: 0.5s ease;
    -ms-transition: 0.5s ease;
    -moz-transition: 0.5s ease;
}

.alert {    
    padding: 1rem;
    border-radius: 5px;
    color: white;
    margin: 1rem 0;
}

.alert-success {
    background-color: #42ba96;
}

.alert-danger {
    background-color: #fc5555;
}

.alert-info {
    background-color: #2E9AFE;
}

.alert-warning {
    background-color: #ff9966;
}

/*-- responsive design --*/

@media (max-width:736px) {
    .w3l-mockup-form .main-mockup {
        flex-direction: column;
    }

    .w3l_form {
        order: 2;
       
        border-radius: 0;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    .content-wthree {
        order: 1;
        border-radius: 0;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }
}

@media (max-width:568px) {
    .w3l-mockup-form h1 {
        font-size: 30px;
    }

    .w3l-mockup-form .main-mockup {
        margin: 30px 0;
    }

    .content-wthree {
        padding: 2.5em;
    }
}

@media (max-width: 415px) {
    .w3l-mockup-form {
        padding: 40px 5px;
    }

}

@media (max-width:384px) {
    .w3l-mockup-form {
        padding: 30px 15px;
    }

    .content-wthree {
        padding: 2em;
    }

    .w3l-mockup-form h1 {
        font-size: 28px;
    }

    .w3l-mockup-form h2 {
        font-size: 22px;
        line-height: 32px;
    }

    .copyright p {
        font-size: 16px;
    }
}



@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat',sans-serif;
}
nav{
  background: #2a2a2a;
  padding: 5px 40px;
}
nav ul{
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  margin-left:-20px;
}
nav ul li{
  padding: 15px 0;
  cursor: pointer;
}
nav ul li.items{
  position: relative;
  width: auto;
  margin: 0 16px;
  text-align: center;
  order: 3;
}
nav ul li.items:after{
  position: absolute;
  content: '';
  left: 0;
  bottom: 5px;
  height: 2px;
  width: 100%;
  background: #33ffff;
  opacity: 0;
  transition: all 0.2s linear;
}
nav ul li.items:hover:after{
  opacity: 1;
  bottom: 8px;
}
nav ul li.logo{
  flex: 1;
  color: white;
  font-size: 23px;
  font-weight: 600;
  cursor: default;
  user-select: none;
}
nav ul li a{
  color: white;
  font-size: 18px;
  text-decoration: none;
  transition: .4s;
}
nav ul li:hover a{
  color: cyan;
}
nav ul li i{
  font-size: 23px;
}
nav ul li.btn{
  display: none;
}
nav ul li.btn.hide i:before{
  content: '\f00d';
}
@media all and (max-width: 900px){
  nav{
    padding: 5px 30px;
  }
  nav ul li.items{
    width: 100%;
    display: none;
  }
  nav ul li.items.show{
    display: block;
  }
  nav ul li.btn{
    display: block;
  }
  nav ul li.items:hover{
    border-radius: 5px;
    box-shadow: inset 0 0 5px #33ffff,
                inset 0 0 10px #66ffff;
  }
  nav ul li.items:hover:after{
    opacity: 0;
  }
}


 </style>
</head>

<body>

 
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">


                    <nav>

<ul>
   <center><li  class="logo" >Dlene</li></center>
  
</ul>

</li>
</nav>



                     
                    </div>
                    <div class="w3l_form align-self" >
                        <div class="left_grid_info">
                           
                        </div>
                    </div>
                    <div class="content-wthree" >
                        <h2> تحديث رمز الدخول</h2>
                    
                 

                       <?php 
                       // If the entry is wrong, we place it above the entry to show the error
                       
                       if(isset($msg)){echo $msg;}  
                       
                       
                       ?>
                        <!-- Calling the message using an array-->

                        <p class="text-danger"><?php if(isset($brjs)){echo $brjs[0];} ?></p> 
                        <p class="text-danger"><?php if(isset($brjss)){echo $brjss [0];} ?></p> 
                       <!--  form post method -->


                        <form action="update.php" method="post" >
                           
                            <input type="email" class="email" name="email" placeholder="الايميل"  >
                           
                           
                          
                            <!-- button for submit -->

                            <button name="logo" class="btn" type="submit">ارسال</button>
                        </form>
                        <div class="social-icons">
                            <!--  If the user has previously registered -->
                            <p> الصفحة الريسة  ! <a href="index.php">hompage</a>.</p>
                            <p>     تسجيل الدخول  ! <a href="login.php">login page</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   


</body>

</html>
    
