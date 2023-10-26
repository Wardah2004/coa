<?php 
session_start(); 
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
   <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #f28093;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #191A1E,
        #191A1E
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #CAD4B9,
        #D9E2EF
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 580px;
    width: 500px;
    background-color: white(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #CBCEDB;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #E6CCD0;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #CBCEDB;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #E6CCD0;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>

</head>
<body>
     <form action="k.php" method="post"> 
     <h2>تغير كلمة المرور</h2>
     <label>الرقم التدريبي</label>
     	<input type="text" name="id1" placeholder="الرقم التدريبي">
     	<label>اسم المستخدم</label>
     	<input type="text" name="name1" placeholder="اسم المستخدم" >
      <label>كلمة المرور الجديدة</label>
     	<input type="password" name="pass" placeholder="كلمة المرور"><button type="submit" name ="modefy" onclick="modefy()">التعديل على كلمة المرور</button><br><br>
     <pre>                                     <a href="index.php">تسجيل دخول</a></pre>
     </form>
    <?php
     //update   
if(isset($_POST['modefy'])){   
       $id= $_POST['id1'];   
     $username1= $_POST['name1'];   
     $passwordu= $_POST['pass'];   
  
    
  $query="update users set user_name = '$username1', password= '$passwordu' where id= '$id'";   
 $result = mysqli_query ($conn,$query);   
 if ($result){   
  echo "تم تعديل كلمة المرور بنجاح";   
     
}else {die('error');   
 }   
}    
 ?>
</body>
</html>