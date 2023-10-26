
<?php 
session_start(); 
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
    height: 700px;
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
     <form action="Signup.php" method="post"> 
     	<h2>انشاء حساب</h2>
       <label>الرقم التدريبي</label>
     	<input type="numbar" name="ur_id" placeholder="إسم المستخدم">

			<label>اسم المستخدم</label>
     	<input type="text" name="user_name1" placeholder="إسم المستخدم">
  
     	<label>كلمة المرور الجديدة</label>
     	<input type="password" name="password1" placeholder="كلمة المرور" >

        <label>تاكيد كلمة المرور</label>
     	<input type="password" name="passwordagin" placeholder="كلمة المرور">
		 <button type="submit"  name="add" onclick="add()">انشاء حساب</button><br><br>
     <pre>                                    <a href="index.php">تسجيل دخول</a></pre>
     </form>
</body>
</html>

<?php 
//add  
$conn = mysqli_connect ('localhost','root','','test_db');   
if(isset($_POST['add'])) 
{	    
      $id5= $_POST['ur_id']; 
      $username5= $_POST['user_name1'];   
      $passwordu5= $_POST['password1'];   
      $passwordu7= $_POST['passwordagin'];   
     
if($id5 !=='' && $username5 !=='' && $passwordu5 !=='' && $passwordu5==$passwordu7)  
{  
  $query="INSERT INTO users (id,user_name,password)
             VALUES ('$id5','$username5','$passwordu5')";
 $result = mysqli_query ($conn,$query); 
 if ($result){   
  echo "تم انشاء حسابك بنجاح";}
  else {die('error');}   
}    
}
//insert   
//if(isset($_POST['add'])){   
     //$username= $_POST['id'];   
  //$passwordu= $_POST['comment'];     
 
//$query="INSERT INTO users (id, comment)
    //  VALUES ('$username','$passwordu')";
//$result = mysqli_query ($conn,$query);   
//if ($result){   echo "تمت اضافة التعليق";   }else {die('error');   }   }    

 ?>
 
 
 
   
   