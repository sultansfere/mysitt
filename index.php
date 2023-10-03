<?php

//start thr session //
session_start();
// if the session called "ADMIN" exists // 

if(isset($_SESSION['ADMIN'])){
$userrrr = array( $_SESSION['user_id']);
        $ROLE = array( $_SESSION['ADMIN']);
        $newLangs = implode($ROLE);
        $fhoode = implode($userrrr);
}


$post_output = null; 
 



// conect te db //
$username ="root";
$password ="";
$database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);



// select if the products is there or not//

$sql 	= "SELECT  * FROM ky  ";
$stmt 	= $database->prepare($sql);
$stmt->execute();

if($stmt->rowCount() == 0)
{
	$post_output .= '<p>لاييوجد منتجات حتى الان</p>';


}









define("ROW_PER_PAGE",6);

?>

<!doctype html>
<html>
    
  <head>
     
   
    <title> دليني </title> 
    <!-- Required meta tags -->
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
     
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<style>
body {
    margin: 0;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #f5f5f5;
}

.mt-50{
    margin-top: 50px;
}
.mb-50{
    margin-bottom: 50px;
}


.bg-teal-400 { 
    background-color: #26a69a;
}

a{
    text-decoration: none !important;
}


.fa {
        color: red;
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
::marker {
    color: #f5f5f5;
}

.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-top: -20px;
}
.nav-link {
    font-weight: bold;
    color: #ffffff;
    font-size: 20px;
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
    border: aliceblue;
}


.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 1px;
    padding-left: 1px;
}
.footer-clean {
  padding:50px 0;
  background-color:#fff;
  color:#4b4c4d;
}

.footer-clean h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-clean ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-clean ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-clean ul a:hover {
  opacity:1;
}

.footer-clean .item.social {
  text-align:right;
}

@media (max-width:767px) {
  .footer-clean .item {
    text-align:center;
    padding-bottom:20px;
  }
}

@media (max-width: 768px) {
  .footer-clean .item.social {
    text-align:center;
  }
}

.footer-clean .item.social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin-left:10px;
  margin-top:22px;
  color:inherit;
  opacity:0.75;
}

.footer-clean .item.social > a:hover {
  opacity:0.9;
}

@media (max-width:991px) {
  .footer-clean .item.social > a {
    margin-top:40px;
  }
}

@media (max-width:767px) {
  .footer-clean .item.social > a {
    margin-top:10px;
  }
}

.footer-clean .copyright {
  margin-top:14px;
  margin-bottom:0;
  font-size:13px;
  opacity:0.6;
}
.footer-clean {
    padding: 50px 0;
    background-color: #f5f5f5;
    color: #4b4c4d;
}
[type=reset], [type=submit], button, html [type=button] {
    -webkit-appearance: button;
    white-space: normal;
 } 
 .justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important;
    flex-flow: column;

 }
 .footer-basic {
  padding:40px 0;
  background-color:#ffffff;
  color:#4b4c4d;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}
.footer-basic {
    padding: 40px 0;
    background-color: #f5f5f5;
    color: #4b4c4d;
}
.containerr {
    display: flex;
    align-items: center;
    justify-content: center;
}


.input-group>.custom-select:not(:first-child), .input-group>.form-control:not(:first-child) {

    direction: rtl;
}


.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 1px;
    padding-left: 1px;
    min-inline-size: -webkit-fill-available;
}


.frmSearch {
    inline-size: -webkit-fill-available;
    margin-bottom: -1;
}
.input-group>.custom-select:not(:last-child), .input-group>.form-control:not(:last-child) {
 
    direction: rtl;
}
.justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important;
    flex-flow: column;
    margin-top: -10px;
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
    padding-bottom: 15px;
    width: 35px;
}



    </style>
</head>
<body>


<?php
// null variable  for 0 error //

   $search_keyword = null;


// if the button is pressed //
	if(isset($_POST['search']['keyword'])){



      // get the post from html to php //
      $search_keyword = $_POST['search']['keyword']; 
      $wordcount= count(explode(" ",$search_keyword));


// if the searsh have 6 words //
     if($wordcount==6){

// get the variable aggin //
$firstsearch = $_POST['search']['keyword'];

// replace space //
$dxhghdx =str_replace (' ' , '' ,$firstsearch);

// Check if the table named "uploads" contains this value //
$SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");


//Execute the code//
$SEARCH->execute();


//If there is a value in the table similar to the value mentioned in $firstsearch//
if($SEARCH->rowCount()>0){


// Put the value in the variable "dxhghdx" and remove the space between the words


  $firstsearch = $_POST['search']['keyword'];
  $dxhghdx =str_replace (' ' , '' ,$firstsearch);

// To save time, we put each successful stage into a variable called “$search_keyword”//
  $search_keyword = $dxhghdx;



}

// If the answer from the database is no or 0 or false , it choose to cut off the extra words and do as we did before, then check again and then again.. again.. until all words are deleted or until the value is found.//
if($SEARCH->rowCount()==0){


$firstsearch = $_POST['search']['keyword'];
// Put the "$firstsearch" variable in a way to crop the last word and put it in a new variable
$jhjh = "$firstsearch";
$last_space_position = strrpos($jhjh, ' ');
$jhjh = substr($jhjh, 0, $last_space_position);


// Delete spaces //
$fiukhrdj =str_replace (' ' , '' ,$jhjh);


  $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$fiukhrdj%' ");



  $SEARCH->execute();


  if($SEARCH->rowCount()>0){

    $fiukhrdj;
    $fiukhrdj =str_replace (' ' , '' ,$fiukhrdj);
  
  
    $search_keyword = $fiukhrdj;
  
  
  
  }


  
  if($SEARCH->rowCount()==0){


    
  
    $text = "$jhjh";
    $last_space_position = strrpos($text, ' ');
    $text = substr($text, 0, $last_space_position);
    
    
    
    $dxhghdx =str_replace (' ' , '' ,$text);
    
    $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
    
    
    
      $SEARCH->execute();
      if($SEARCH->rowCount()>0){

        
        $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
      
      
        $search_keyword = $dxhghdx;
      
      
      
      }

      if($SEARCH->rowCount()==0){



  
        $hghgs = "$text";
        $last_space_position = strrpos($hghgs, ' ');
        $hghgs = substr($hghgs, 0, $last_space_position);
        
        
        
        $dxhghdx =str_replace (' ' , '' ,$hghgs);
        
        
        $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
        
        
        
          $SEARCH->execute();
          if($SEARCH->rowCount()>0){

        
            $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
          
          
            $search_keyword = $dxhghdx;
          
          
          
          }
          if($SEARCH->rowCount()==0){



            $sjyhg = "$hghgs";
            $last_space_position = strrpos($sjyhg, ' ');
            $sjyhg = substr($sjyhg, 0, $last_space_position);
            
          
            
            $dxhghdx =str_replace (' ' , '' ,$sjyhg);
            
            $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
            
            
            
              $SEARCH->execute();
              if($SEARCH->rowCount()>0){

        
                $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
              
              
                $search_keyword = $dxhghdx;
              
              
              
              }
               
              if($SEARCH->rowCount()==0){


                $dhgfx = "$sjyhg";
                $last_space_position = strrpos($dhgfx, ' ');
                $dhgfx = substr($dhgfx, 0, $last_space_position);
                
              
        
                $dxhghdx =str_replace (' ' , '' ,$dhgfx);


                
                $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
                
                
                
                  $SEARCH->execute();
                  
                  if($SEARCH->rowCount()>0){

        
                    $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
                  
                  
                    $search_keyword = $dxhghdx;
                  
                  
                  
                  }




              }}}}}







// Like the previous method, but with 5 words //
     }if($wordcount==5){
           $search_keyword = $_POST['search']['keyword']; 
      $wordcount= count(explode(" ",$search_keyword));

     
$firstsearch = $_POST['search']['keyword'];


$dxhghdx =str_replace (' ' , '' ,$firstsearch);


$SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");



$SEARCH->execute();

if($SEARCH->rowCount()>0){

  $firstsearch = $_POST['search']['keyword'];
  $dxhghdx =str_replace (' ' , '' ,$firstsearch);


  $search_keyword = $dxhghdx;



}


if($SEARCH->rowCount()==0){


$firstsearch = $_POST['search']['keyword'];

$jhjh = "$firstsearch";
$last_space_position = strrpos($jhjh, ' ');
$jhjh = substr($jhjh, 0, $last_space_position);



$fiukhrdj =str_replace (' ' , '' ,$jhjh);


  $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$fiukhrdj%' ");



  $SEARCH->execute();


  if($SEARCH->rowCount()>0){

    $fiukhrdj;
    $fiukhrdj =str_replace (' ' , '' ,$fiukhrdj);
  
  
    $search_keyword = $fiukhrdj;
  
  
  
  }


  
  if($SEARCH->rowCount()==0){


    
  
    $text = "$jhjh";
    $last_space_position = strrpos($text, ' ');
    $text = substr($text, 0, $last_space_position);
    
    
    
    $dxhghdx =str_replace (' ' , '' ,$text);
    
    $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
    
    
    
      $SEARCH->execute();
      if($SEARCH->rowCount()>0){

        
        $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
      
      
        $search_keyword = $dxhghdx;
      
      
      
      }

      if($SEARCH->rowCount()==0){



  
        $hghgs = "$text";
        $last_space_position = strrpos($hghgs, ' ');
        $hghgs = substr($hghgs, 0, $last_space_position);
        
        
        
        $dxhghdx =str_replace (' ' , '' ,$hghgs);
        
        
        $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
        
        
        
          $SEARCH->execute();
          if($SEARCH->rowCount()>0){

        
            $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
          
          
            $search_keyword = $dxhghdx;
          
          
          
          }
          if($SEARCH->rowCount()==0){



            $sjyhg = "$hghgs";
            $last_space_position = strrpos($sjyhg, ' ');
            $sjyhg = substr($sjyhg, 0, $last_space_position);
            
          
            
            $dxhghdx =str_replace (' ' , '' ,$sjyhg);
            
            $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
            
            
            
              $SEARCH->execute();
              if($SEARCH->rowCount()>0){

        
                $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
              
              
                $search_keyword = $dxhghdx;
              
              
              
              }
}}}}
        











     } 
     
     if($wordcount==4){
               $search_keyword = $_POST['search']['keyword']; 
      $wordcount= count(explode(" ",$search_keyword));

     
$firstsearch = $_POST['search']['keyword'];


$dxhghdx =str_replace (' ' , '' ,$firstsearch);


$SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");



$SEARCH->execute();

if($SEARCH->rowCount()>0){

  $firstsearch = $_POST['search']['keyword'];
  $dxhghdx =str_replace (' ' , '' ,$firstsearch);


  $search_keyword = $dxhghdx;



}


if($SEARCH->rowCount()==0){


$firstsearch = $_POST['search']['keyword'];

$jhjh = "$firstsearch";
$last_space_position = strrpos($jhjh, ' ');
$jhjh = substr($jhjh, 0, $last_space_position);



$fiukhrdj =str_replace (' ' , '' ,$jhjh);


  $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$fiukhrdj%' ");



  $SEARCH->execute();


  if($SEARCH->rowCount()>0){

    $fiukhrdj;
    $fiukhrdj =str_replace (' ' , '' ,$fiukhrdj);
  
  
    $search_keyword = $fiukhrdj;
  
  
  
  }


  
  if($SEARCH->rowCount()==0){


    
  
    $text = "$jhjh";
    $last_space_position = strrpos($text, ' ');
    $text = substr($text, 0, $last_space_position);
    
    
    
    $dxhghdx =str_replace (' ' , '' ,$text);
    
    $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
    
    
    
      $SEARCH->execute();
      if($SEARCH->rowCount()>0){

        
        $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
      
      
        $search_keyword = $dxhghdx;
      
      
      
      }

      if($SEARCH->rowCount()==0){



  
        $hghgs = "$text";
        $last_space_position = strrpos($hghgs, ' ');
        $hghgs = substr($hghgs, 0, $last_space_position);
        
        
        
        $dxhghdx =str_replace (' ' , '' ,$hghgs);
        
        
        $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
        
        
        
          $SEARCH->execute();
          if($SEARCH->rowCount()>0){

        
            $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
          
          
            $search_keyword = $dxhghdx;
          
          
          
          }

}}}
        































     }
     if($wordcount==3){


               $search_keyword = $_POST['search']['keyword']; 
      $wordcount= count(explode(" ",$search_keyword));

     
$firstsearch = $_POST['search']['keyword'];


$dxhghdx =str_replace (' ' , '' ,$firstsearch);


$SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");



$SEARCH->execute();

if($SEARCH->rowCount()>0){

  $firstsearch = $_POST['search']['keyword'];
  $dxhghdx =str_replace (' ' , '' ,$firstsearch);


  $search_keyword = $dxhghdx;



}


if($SEARCH->rowCount()==0){


$firstsearch = $_POST['search']['keyword'];

$jhjh = "$firstsearch";
$last_space_position = strrpos($jhjh, ' ');
$jhjh = substr($jhjh, 0, $last_space_position);



$fiukhrdj =str_replace (' ' , '' ,$jhjh);


  $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$fiukhrdj%' ");



  $SEARCH->execute();


  if($SEARCH->rowCount()>0){

    $fiukhrdj;
    $fiukhrdj =str_replace (' ' , '' ,$fiukhrdj);
  
  
    $search_keyword = $fiukhrdj;
  
  
  
  }


  
  if($SEARCH->rowCount()==0){


    
  
    $text = "$jhjh";
    $last_space_position = strrpos($text, ' ');
    $text = substr($text, 0, $last_space_position);
    
    
    
    $dxhghdx =str_replace (' ' , '' ,$text);
    
    $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");
    
    
    
      $SEARCH->execute();
      if($SEARCH->rowCount()>0){

        
        $dxhghdx =str_replace (' ' , '' ,$dxhghdx);
      
      
        $search_keyword = $dxhghdx;
      
      
      
      



}}}























     }
     if($wordcount==2){

               $search_keyword = $_POST['search']['keyword']; 
      $wordcount= count(explode(" ",$search_keyword));

     
$firstsearch = $_POST['search']['keyword'];


$dxhghdx =str_replace (' ' , '' ,$firstsearch);


$SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");



$SEARCH->execute();

if($SEARCH->rowCount()>0){

  $firstsearch = $_POST['search']['keyword'];
  $dxhghdx =str_replace (' ' , '' ,$firstsearch);


  $search_keyword = $dxhghdx;



}


if($SEARCH->rowCount()==0){


$firstsearch = $_POST['search']['keyword'];

$jhjh = "$firstsearch";
$last_space_position = strrpos($jhjh, ' ');
$jhjh = substr($jhjh, 0, $last_space_position);



$fiukhrdj =str_replace (' ' , '' ,$jhjh);


  $SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$fiukhrdj%' ");



  $SEARCH->execute();


  if($SEARCH->rowCount()>0){

    $fiukhrdj;
    $fiukhrdj =str_replace (' ' , '' ,$fiukhrdj);
  
  
    $search_keyword = $fiukhrdj;
  
  
  
  


  

      
      
      
      



}}

























     }
     
     if($wordcount==1){

               $search_keyword = $_POST['search']['keyword']; 
      $wordcount= count(explode(" ",$search_keyword));

     
$firstsearch = $_POST['search']['keyword'];


$dxhghdx =str_replace (' ' , '' ,$firstsearch);


$SEARCH = $database->prepare("SELECT * FROM ky WHERE uploads LIKE '%$dxhghdx%' ");



$SEARCH->execute();

if($SEARCH->rowCount()>0){

  $firstsearch = $_POST['search']['keyword'];
  $dxhghdx =str_replace (' ' , '' ,$firstsearch);


  $search_keyword = $dxhghdx;



}



  
  
  
  


  

      
      
      
      



}

    }
     








	   $sql = 'SELECT * FROM ky WHERE uploads LIKE :keyword  ORDER BY order_id DESC ';
    
    


	   $per_page_html = '';
	   $page = 1;
	   $start=0;
	   if(!empty($_POST["page"])) {
		   $page = $_POST["page"];
		   $start=($page-1) * ROW_PER_PAGE;
	   }
	 
	 
	 ?>
         
         



        <!--Nav-->
        <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color"
        id="main-navbar">
        <div class="container">
            <a class="navbar-brand" style="color:white;" href="#"><img class = "imggg"  width="10px"></i>Dlene</a>
            <div class="order-lg-last btn-group">
            <i class="bi bi-geo-alt-fill">
          
            </i>
            </div>
            <button class="navbar-toggler"  type="button" data-toggle="collapse"
            data-target="#myNav"  aria-controls="nav" aria-expanded="false"
            aria-label="Toggle navigation">
        <i class="fas fa-bars" style="color:white;"></i></button>
        <div  class="collapse navbar-collapse"id="myNav">
            <ul  class="navbar-nav ml-auto">
            <?php
        
         
   

     $username ="root";
     $password ="";
     $database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);

 
         
        
        $chechemail = $database->prepare("SELECT * FROM  users  WHERE ROLE = :ROLE and id =:id");
        
        $chechemail->bindParam("ROLE",$newLangs);
        $chechemail->bindParam("id",$fhoode);
        $chechemail->execute();
         if($chechemail->rowCount()>0){
       
            
          echo' <li class="nav-item">
              <a href="myproducts.php"class="nav-link">منتجاتي</a>
          </li>';
echo '
<li class="nav-item" >
<a href="logout.php" class="nav-link"> تسجيل خروج </a> </li> 

';
  
}
        elseif($chechemail->rowCount()===0){
            
            echo '<li class ="nav-item">
            <a href="login.php"class="nav-link"> تسجيل الدخول </a>
            ';
          echo' <li class="nav-item">
              <a href="sing.php"class="nav-link">التسجيل</a>
          </li>';
        
        
        }
          ?>
               
             
               
               
            </ul>
        </div> 
        </div>
        <form class ="frmSearch" name='frmSearch' action="#" method="post">
        <div class="input-group rounded">
  <input name="search[keyword]" type="search" class="form-control rounded" placeholder="Search" aria-label="Search"  id='keyword' aria-describedby="search-addon"  value="" />
  <button  name="btn-search"><span class="input-group-text border-0" type="submit" id="search-addon">
    <i class="fas fa-search"></i>
  </span></button>
</div></form>
        </nav>
       
        


          

 
    
        <div class="container d-flex justify-content-center mt-50 mb-50" id='list'>
            
            <div class="row">
               <div class="col-md-10">
                
         

  
</ul>
      </nav>
      </div>
    
                        
    
    
    
    
                                 
            </div>                 
            </div>
        </div>











<?php	

// conect the db //
$username ="root";
$password ="";
$database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);
// The beginning of the pagination process //
     $limit=" limit " . $start . "," . ROW_PER_PAGE;

	   $pagination_statement = $database->prepare($sql);

	   $pagination_statement->bindValue(':keyword', "%$search_keyword%", PDO::PARAM_STR);
	   $pagination_statement->execute();

	   $row_count = $pagination_statement->rowCount();

	   if(!empty($row_count)){
		   $per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
		   $page_count=ceil($row_count/ROW_PER_PAGE);
		   if($page_count>1) {
			   for($i=1;$i<=$page_count;$i++){
				   if($i==$page){
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
				}
			}
		}
		$per_page_html .= "</div>";
	}
	
	$query = $sql.$limit;
	$pdo_statement = $database->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();





?>
<form name='frmSearch' action='' method='post'>
<input type='hidden' name='search[keyword]' value="<?php echo $search_keyword ; ?>" id='keyword' >

	<?php
	if(!empty($result)) { 

		foreach($result as $row) {
	

			$price = $row ['price'];
           
			$nameee = $row ['nameee'];
			
			$discrbshn = $row['discrbshn'];
			
			$model = $row['model'];
			
			$file = $row['file'];
			
			$leftt = $row['leftt'];

      $urll = $row['urll'];
     
			
			
			
			$file='<img src = "data:image/png;base64,'.base64_encode($file).'" width = "190px" height = "169px"/>';
			
			
			$post_output.= '
			<div class="card card-body mt-3">
										<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
											<div class="mr-2 mb-3 mb-lg-0">
												
											'.$file.'
											   
											</div>
			
											<div class="media-body">
												<h6 class="media-title font-weight-semibold">
													<a href="#" data-abc="true">'. $nameee.'</a>
												</h6>
			
												<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
													<li class="list-inline-item"><a href="#" class="text-muted" data-abc="true"></a></li>
													<li class="list-inline-item"><a href="#" class="text-muted" data-abc="true"></a></li>
												</ul>
			
												<p class="mb-3">'.$discrbshn.'</p>
			
												<ul class="list-inline list-inline-dotted mb-0">
													<li class="list-inline-item"><a href="#" data-abc="true">'.$model .'</a></li>
													<li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
												</ul>
											</div>
			
											<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
												<h3 class="mb-0 font-weight-semibold">'.$price.' SAR</h3>
			
												<div>
												
													<i > '.$leftt .' </i>
												   الكمية
			
												</div>
			
												<div class="text-muted"></div>
                        
                        
											<a href="'.$urll.'"	<button type="submit"  class="btn btn-warning mt-4 text-white"> <i  class="icon-cart-add mr-2" ></i>map</button></a>
                       
</form>
											</div>
										</div>
									</div> ';
                  
		  
		  }
		  
	}

	?>




























<div class="container d-flex justify-content-center mt-50 mb-50" id='list'>
            



            <div class="row">
               <div class="col-md-10">
<?php











echo $post_output;
if($post_output==0){
  
}



echo $per_page_html;

?>
</form>






</ul>
      </nav>
      </div>
    
                        
    
    
    
    
                                 
            </div>                     
            </div>
        </div>





 



<div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/s_lt.n/"><i class="icon ion-social-instagram"></i></a><a href="https://t.snapchat.com/VCDRENhQ"><i class="icon ion-social-snapchat"></i></a></div>
            
           <a href="" > <p class="copyright">www.dleene.com 2023 </p></a>
        </footer>
    </div>













    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
   
  </body>
</html>



  
    
      

         
               