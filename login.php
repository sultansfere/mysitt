
<center>
    
    <?php 






 //this for db conect//
 $username ="root";
 $password ="";
 $database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);
   
    if(isset($_POST ['logo'])){
         //this for login validation //


// use preg_match for mor scure//
        $email= "/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]{2,}+$/";
        $password= '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{4,20}/';




  //this for if it  preg_match good //
  
   if(preg_match($email,$_POST['email'])){
    if(preg_match($password,$_POST['password'])){

     
    // for the selsct if the user is exist//
    $login =$database->prepare("SELECT * FROM users WHERE email = :email and password =:password and ROLE =:ROLE ") ;
    
    $login->bindParam("email",$_POST['email']);
    $login->bindParam("password",$_POST['password']);
    $login->bindParam("ROLE",$_POST['ROLE']);
    $login->execute();
    if($login->rowCount()===1){
    
        $user = $login->fetchObject();
        if($user->actv === 1){
  
            // create sission//
     session_start();


     //Set a name for the session//
     
        $_SESSION['ADMIN']=$user->ROLE;
        $_SESSION['user_id']=$user->id;
        $_SESSION['namee']=$user->namee;
        $_SESSION['urll']=$user->urll;
        $_SESSION['sll']=$user->sll;
       

        
    

     
      
      
       
      
    
        // Go to the sellers' link if the user's account is equipped with the sellers feature//
       if($user->ROLE==='ADMIN'){
      header("location:http:/mysitt/myproducts.php",true);
      
    
       }else{
    // If not, make it go to the home page//

   header("location:http:/mysitt/index.php" ,true)  ; 
   
   }
    
    
     
// If not, make it go to the home page//

}   
   if($user->ROLE==='USER'){
    
  header("location:http:/mysitt/index.php",true);  
    // If the inputs is wrong//
    }else{
    
        $msg = "<div class='alert alert-warning'> من ادخال البيانات بشكل password.</div>";
    }
    
    }else{
        $msg = "<div class='alert alert-warning'> من ادخال البيانات بشكل email.</div>";
    }
    

}else{
    
        $msg = "<div class='alert alert-warning'> من ادخال البيانات بشكل password.</div>";
    

}
}else{
    $msg = "<div class='alert alert-warning'> من ادخال البيانات بشكل email.</div>";
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
                        <h2> تسجيل</h2>
                    
                 

                       <?php 
                       // If the entry is wrong, we place it above the entry to show the error
                       
                       if(isset($msg)){echo $msg;}  
                       
                       
                       ?>
                        <!-- Calling the message using an array-->

                        <p class="text-danger"><?php if(isset($brjs)){echo $brjs[0];} ?></p> 
                        <p class="text-danger"><?php if(isset($brjss)){echo $brjss [0];} ?></p> 
                       <!--  form post method -->


                        <form action="login.php" method="post" >
                           
                            <input type="email" class="email" name="email" placeholder="الايميل"  >
                            <input type="password" class="password" name="password" placeholder="كلمة السر" >
                            <input type="hidden" class="password" name="ROLE" value="ADMIN"; placeholder=" " >
                          
                            <!-- button for submit -->

                            <button name="logo" class="btn" type="submit">تسجيل</button>
                        </form>
                        <div class="social-icons">
                            <!--  If the user has previously registered -->
                            <p> التسجيل كبائع ! <a href="sing.php">signup</a>.</p>
                            <p>   نسيت كلمة السر ! <a href="update.php"> foget password</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   


</body>

</html>
    
