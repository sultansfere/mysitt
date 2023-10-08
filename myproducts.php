<?php

 
session_start();
   
 //this for db conect//

$username ="root";
$password ="";
$database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);

//Call the session that contains evidence about the user if he is registered and also if he is an administrator and place the values ​​in an array //

  $ROLE = array( $_SESSION['ADMIN']);
  $userrrr = array( $_SESSION['user_id']);

// Converting arrays to text values //

$newLangs = implode($ROLE);
$fhoode = implode($userrrr);
// Check if the user is registered with the <ADMIN> account and the user number starts
$chechemail = $database->prepare("SELECT * FROM  users  WHERE ROLE = :ROLE and id =:id");
//We loaded the sessions into variables and then checked whether there was a user or not
$chechemail->bindParam("ROLE",$newLangs);
$chechemail->bindParam("id",$fhoode);
$chechemail->execute();

 if($chechemail->rowCount()===0){
//If he is not registered as <ADMIN> and does not have a user number, direct him to the login page
    header('location:login.php');   

}else{
    
}


$post_output = null; //Used to display messages to the user

 
  $uploads=null;

  
//Verify user is logged in
if(!isset($_SESSION['user_id']))
{
	header('location:login.php');
}else{
	$id			= $_SESSION['user_id'];
	$username	= $_SESSION['namee'];
      $sl = $_SESSION['sll'];
    
    
    
 
}

//Get posts from user
$sql 	= "SELECT * FROM ky WHERE userr = ? ";
$stmt 	= $database->prepare($sql);
$stmt->execute([$id]);

if($stmt->rowCount() == 0)
{
	$post_output .= '<p><center> لا يوجد منتجات</center></p>';
}else{
	
	while($rows = $stmt->fetch())
	{
        
		
		$price 		= $rows['price'];
        $leftt 		= $rows['leftt'];
        $file 		= $rows['file'];
        $order_id 		= $rows['order_id'];
        
       
        

		$file='<img src = "data:image/png;base64,'.base64_encode($file).'" width = "50px" height = "50px"/>';
		$post_output.="<tr>
    <td>
        <div class='main'>
            <div class=d-flex>
            $file
            </div>
            <div class='des'>
              
            </div>
        </div>
    </td>
    <td>
    <div class='counte'>

<input class='text'type='text' value='$price '>

</div>
    </td>
    <td>
        <div class='counte'>
            
            <input class='text'type='text'  value='$leftt '>
          
        </div>
    </td>
    <td>
    
    
       <form method ='post' action='myproducts.php' > 
       
       <button type='submit' value='".$rows['order_id']."'  name ='dleeet' class='btn btn-danger' data-bs-dismiss='modal'><i class='bi bi-x'>


<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x' viewBox='0 0 16 16'>
<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
</svg>

</i></button></form>
    </td>
    
</tr>";   
    
   
	
	}

    
}



if(isset($_POST['dleeet'])){

    $selectitems_dleet=$database->prepare("DELETE FROM ky WHERE order_id = :order_id ");
    $rmoov_id= $_POST['dleeet'];
    $selectitems_dleet->bindParam("order_id" , $rmoov_id);
    
    if($selectitems_dleet->execute()){
  $msg = "<div class='alert alert-success'> تم حذف المنتج.</div>";

    }
}
?>




    
 <?php
  
 
  $username ="root";
  $password ="";
  $database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);
  
    
  if(isset($_SESSION['user_id'])) {

    
     $username= $_SESSION['namee'];
     $ry = array($_SESSION['user_id']);
     $urlll= array( $_SESSION['urll']);
     $slll = array( $_SESSION['sll']);
     
    
  
      
     if(isset($_POST['upload'])){

        $userr =strip_tags( $_POST['userr']);
        $urll =  strip_tags($_POST['urll']);
        $price = strip_tags( $_POST['price']);
        $nameee =strip_tags( $_POST['nameee']);
          $discrbshn =strip_tags( $_POST['discrbshn']);
          $model =strip_tags( $_POST['model']);
          $sll =strip_tags( $_POST['sll']);
          $leftt =strip_tags( $_POST['leftt']);
        
    
    
          if (empty($userr) || empty($urll) || empty($price) || empty($nameee) || empty($discrbshn)  || empty($sll) || empty($leftt) ) {
            $msg = "<div class='alert alert-danger'>  تأكد من ادخال البيانات .</div>";
    
        }else{

        $userr= $_POST['userr'];
        $urll= $_POST['urll'];
        $price= $_POST['price'];
        $nameee= $_POST['nameee'];
        $discrbshn= $_POST['discrbshn'];
        $model = $_POST['model'];
        $leftt= $_POST['leftt'];
        $sll= $_POST['sll'];
        $fileName= $_FILES['file'] ["name"];
        $fileType= $_FILES['file'] ["type"];
        $fileData=  file_get_contents( $_FILES['file'] ["tmp_name"]);



       

        
  $stev=("$nameee$discrbshn$model$leftt"); 
  
  $djhhd =str_replace (' ' , '' ,$stev);



        $chechpro = $database->prepare("SELECT * FROM  ky  WHERE file = :file AND userr = :userr");
    
        $chechpro->bindParam("file" , $fileData);
        $chechpro->bindParam("userr" , $userr);
        $chechpro->execute();
         if($chechpro->rowCount()>0){
     
             
             $msg = "<div class='alert alert-success'>تم ارسال المنتج  !.</div>";
             
        }else{
    
        
    
         $addpro = $database->prepare("INSERT INTO  ky ( nameee , discrbshn , model , price , userr ,leftt,file , fileName , fileType , urll , sll , uploads ) VALUES
         (:nameee,:discrbshn,:model,:price,:userr ,:leftt,:file , :fileName , :fileType ,:urll  ,:sll ,:uploads)");
         $addpro->bindParam("price" , $price);
         $addpro->bindParam("nameee" , $nameee);
         $addpro->bindParam("discrbshn" , $discrbshn);
         $addpro->bindParam("model" , $model);
         $addpro->bindParam("leftt" , $leftt);
         $addpro->bindParam("userr" , $userr);
         $addpro->bindParam("urll" , $urll);
         $addpro->bindParam("sll" , $sll);
         $addpro->bindParam("uploads" , $djhhd);
         
         
         $addpro->bindParam("file" , $fileData);
         $addpro->bindParam("fileName" , $fileName);
         $addpro->bindParam("fileType" , $fileData);
     
          
        

   
         if($addpro->execute()){



         }else{
         echo 'يوجد خطأ';
     }
     }
    }

  
}


}




    ?>



<!doctype html>
<html>
  <head>
    <title>Dlene</title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>

.cover{
    position: relative;
    z-index: 0;
    width: 100%;
    background: #e79702;
}
.phone{
    z-index: 1;
    font-weight: 200;
}
.phone i{
    color: #000;
}
.phone a{
    color:#000;
    font-size: 13px;
    font-weight: bold;
}
.reg{
    width: 50%;
    text-align:right;
}
.reg a{
    color:#000;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: bold;
}
.social-icon{
    display: inline-block;
    width: 50%;
    
}
.social-icon p{
    display:block;
    width: 100%;

}
.social-icon p a{
    height: 30px;
    margin-right: 10px;
}
.social-icon p a i{
    font-size: 13px;
    color: #000;
}
.social-icon p a:hover{
    background: #f8aa02;
    border-color: #f8aa02;
}
.social-icon p a:hover i{ 
    color:#fff;
}
/*==========Navbar=============*/
.bg-color{
    background: #0f0f0ffb;
}
.navbar-brand{
    color:#f8aa02;
    font-weight: bold;
    font-size: 35px!important;
}
.nav-link{
    font-weight: bold;
    color: #f8aa02;
    font-size: 20px;
}
.btn-group{
    color: #f8aa02;
}
.navbar-toggler i{
    color: #f8aa02;
}
/*========End of Navbar===========*/
/*==========Hero Section===========*/
#hero{
    display:table;
    width: 100%;
    height: 60vh;
    background: url(./images/hero-2.jpg) top center;
    background-size: cover;
}
@media (min-width: 1024px){
    #hero{
        background-attachment: fixed;
    }
}

#hero .hero-logo{
    margin: 20px;
    max-width: 100%;
}
#hero .hero-container{
    background: rgba(0,0,0,0.2);
    display: table-cell;
    margin: 0;
    padding:0;
    text-align: center;
    vertical-align: middle;
}
#hero h1{
    margin: 30px 0 10px 0;
    font-weight: bold;
    line-height: 48px;
    text-transform: uppercase;
    color: #fff;
}
@media (max-width: 768px){
    #hero h1{
        font-size: 28px;
        line-height: 36px;
    }
}
#hero h2{
    color: #fff;
    margin-bottom: 50px;
    font-style: italic;
}
@media (max-width: 768px){
    #hero h2{
        font-size: 24px;
        line-height: 26px;
        margin-bottom: 30px;
    }
    
}
#hero .actions a{
    text-transform: uppercase;
    font-weight: bold;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 20px;
    border-radius: 2px;
    transition: 0.5s;
    margin: 10px;
}
#hero .btn-get-started{
    background: #ebe703;
    border: 2px solid #a85303;
    color: #fff;
}
#hero .btn-get-started:hover{
    background: none;
    border: 2px solid #fff;
    color: #fff;
    text-decoration: none;
    font-style: italic;
}
.cart .table{
    margin-bottom: 30px;
    border-bottom: 1px solid #fff;
}
.cart .table thead tr th{
    border-top:0px;
    font-size:16px;
    font-weight: bold;
    border-bottom:0px;
}
.cart .table thead tr td{
    padding-top:30px;
    padding-bottom: 30px;
    vertical-align: middle;
    align-self: center;
}

.cart .table tbody tr td .main .d-flex img{
    border: 2px solid #000;
    border-radius: 3px;
}
.cart .table tbody tr td .main .des{
    vertical-align: middle;
    align-self: center;
}
.cart .table tbody tr td .main .des p{
    margin-bottom:0px;
}
.cart .table tbody tr td h6{
    font-size:16px;
    color:#000;
    margin-bottom: 0px;
}
.cart .table tbody tr td .counter{
    margin-bottom:0px;
}
.counter i{
    border: 1px solid #000;
    padding: 7px;
    display: inline-block;
    position: relative;
}
.cart .table tbody tr td .counter input{
    width: 100px;
    padding-left:30px;
    height: 40px;
    outline:none;
    box-shadow: none;
}
.checkout ul{
    border: 2px solid #ebebeb;
    background: #f3f3f3;
    padding-left:25px;
    padding-right:25px;
    padding-top:16px;
    padding-bottom: 20px;
}
.checkout ul li{
    list-style: none;
    font-size:16px;
    font-weight: bold;
    color:#252525;
    text-transform: uppercase;
    overflow: hidden;
}
.checkout ul li.subtotal{
    font-weight: bold;
    text-transform: capitalize;
    border-bottom:1px solid #fff;
    padding-bottom: 14px;
}
.checkout ul li.subtotal span{
    font-weight: bold;
}
.checkout ul li.cart-total{
    padding-top: 10px
}
.checkout ul li.cart-total span{
    color:#e7ab3c;
}
.checkout ul li span{
    float:right;
}
.checkout .proceed-btn{
    font-size:15px;
    font-weight: bold;
    color:#fff;
    background:#252525;
    text-transform: uppercase;
    padding:15px 25px 14px 25px;
    display: block;
    text-align: center;
}
.cart .table tbody tr td .counter input {
    width: 100px;
    padding-left: 30px;
    height: 40px;
    outline: none;
    box-shadow: none;
    margin: 2px;
}
input {
    overflow: visible;
    width: 65px;
    border: 0.01px solid;
    text-align: center;
}
.checkout .proceed-btn {
    font-size: 15px;
    font-weight: bold;
    color: #fff;
    background: #252525;
    text-transform: uppercase;
    padding: 15px 25px 14px 25px;
    display: block;
    text-align: center;
    margin: 7px;
}
.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
    color: white;
}
img {
    vertical-align: middle;
    border-style: none;
    width: 60px;
}
.cart .table tbody tr td .main .d-flex img {
    border: 0.10px solid;
    border-radius: 1px;
}
.table td, .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    background: #edeff1bd;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    text-align: left;
}




.navbar-brand {
    color: #f8aa02;
    font-weight: bold;
    font-size: 35px!important;
    font-family: initial;
}

  .imggg {
    vertical-align: middle;
    border-style: none;
    width: 30px;
    margin-bottom: 10px;
}



    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

       
              
        <!--Nav-->
        <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color"
        id="main-navbar">
        <div class="container">
        <a class="navbar-brand" style="color:white;" href=""><i><img class = "imggg"  width="10px"></i>Dlene</a>
            <div class="order-lg-last btn-group">
            <i class="bi bi-geo-alt-fill">
        
            </i>
            </div>
            <button class="navbar-toggler"  type="button" data-toggle="collapse"
            data-target="#myNav"  aria-controls="nav" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true" style="color:white;"></i></button>
        <div  class="collapse navbar-collapse"id="myNav">
            <ul  class="navbar-nav ml-auto">
            <?php
          
   

          $username ="root";
          $password ="";
          $database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);
          $ROLE = array( $_SESSION['ADMIN']);
          $userrrr = array( $_SESSION['user_id']);
        
        $newLangs = implode($ROLE);
        $fhoode = implode($userrrr);
        
        $chechemail = $database->prepare("SELECT * FROM  users  WHERE ROLE = :ROLE and id =:id");
        
        $chechemail->bindParam("ROLE",$newLangs);
        $chechemail->bindParam("id",$fhoode);
        $chechemail->execute();
         if($chechemail->rowCount()>0){


            echo' <li class="nav-item">
            <a href="index.php"class="nav-link">الصفحة الرئيسيه</a>
        </li>';
   echo '<li class="nav-item">
   <a href="logout.php" class="nav-link"> تسجيل خروج </a>';
       
    
         }
            ?>
            </ul>
        </div>
        </div>
        
        </nav>
        
        <!--End of Nav-->
     
    <div class="col-lg-4 offset-lg-4">
                             <div class="checkout">
           
                              <a href="#"class="proceed-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ><i class="bi bi-plus-circle-fill">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg>  
                              </i> اضافة منتج </a>
                            </div>
                             </div>


<hr>





  
         <form action="myproducts.php" enctype="multipart/form-data" method="post" >               
               
               <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="staticBackdropLabel">معلومات المنتج</h5>
                       <button type='submit' class='btn ' data-bs-dismiss='modal'><i class='bi bi-x'>


<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-x' viewBox='0 0 16 16'>
<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
</svg>

</i></button>
                     </div>
                     <div class="modal-body">
               


                      
                     
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> عنوان المنتج </label>
                 <input type="text" class="form-control"  name ="nameee" required >

                 
                 <label for="exampleFormControlInput1" >السعر</label>
                 <input type="number" class="form-control" min="0"  id="quantity" name="price" required>

               <label for="exampleFormControlInput1" class="form-label">  الموديل </label>
               <input type="number" class="form-control" name ="model"  step="" value="" />

                 <label for="exampleFormControlInput1">الكميه</label>
                 <input type="number" class="form-control" min="0"  id="quantity" name="leftt" required>
                 

                 <label for="exampleFormControlInput1" class="form-label">  صوره للمنتج </label>
                 <input type="file" class="form-control"  name ="file" eccept="image/*" required >

             <input type="hidden" name="userr" value="<?php echo $ry[0];?>">
             <input type="hidden" name="urll" value="<?php echo $urlll[0];?>">
             <input type="hidden" name="sll" value="<?php echo $slll[0];?>">
             










            


             
               </div>
               <div class="mb-3">
                 <label for="exampleFormControlTextarea1" class="form-label">معلومات اضافيه </label>
                 <textarea class="form-control" name="discrbshn" id="exampleFormControlTextarea1" rows="1"></textarea>
               </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="submit" name= "upload" class="btn btn-primary">Understood</button>
               
                     </div>
                     </div>
                   </div>
                 </div>
               </div>


                 </form>
                 <div class="container">
   <?php 
                   if(isset($msg )){
                    echo $msg ;
                   }  
               
                   
                   ?> 
                   </div>
    <section class="mt-5">
        <div class="container">
            <div class="cart">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"class="text-white">المنتج</th>
                            <th scope="col"class="text-white">السعر</th>
                            <th scope="col"class=" text-whitee">الكميه</th>
                            <th scope="col"class="text-white" > حذف </th>
                           
                        </tr>
                    </thead>
                    
                    <tbody>
                  
                   
                      
                   <?php 
                  
                   if(isset($post_output)){
                    echo $post_output ;

                   }
                   
                   ?> 










                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>
    
 









  

    







      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
