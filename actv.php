<center> 
    <?php
 //if the user get the link//
if(isset($_GET['code'])){
 

// conect db  //
    $username ="root";
    $password ="";
    $database =  new PDO ("mysql:host=localhost;dbname=mydb;",$username ,$password);

    //select if the user pressed the link and If there is a code similar to the code he clicked on//
$chekcCode = $database->prepare("SELECT code FROM users WHERE code =:code ");
$chekcCode->bindParam("code",$_GET['code']);
$chekcCode->execute();
// If he found it
if($chekcCode->rowCount()>0){
    // Update old code to new
    $update = $database->prepare(" UPDATE users SET code = :ncode  , actv=true  WHERE code =:code ");
    $code=md5(date ("h:i:s"));
    $update->bindParam("ncode" , $code);
    $update->bindParam("code" , $_GET ['code']);

    $update->execute();
    //If the operation is completed
    if($update->execute()){
        echo'تم التحقق بنجاح <br>';
        
        echo'<a href ="http://localhost/mysitt/login.php">سجل دخولك</a>';
    }


}else{
        echo'<h2 style=color:red>هذا الكود لم يعد صالحا او مستخدم مسبقا</h2>'.'<br>';
        echo'<button ><a style=color:green href ="http://localhost/mysitt/sing.php">انشاء حساب جديد</a> </button>';
    }


}


?>


</center>
