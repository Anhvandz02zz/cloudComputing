<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> </title>
</head>
<body>

  <form method="post">
    
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input type="text" name="username" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="password" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" name="email" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input type="text" name="fullname" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Ngày sinh :
                    </td>
                    <td>
                        <input type="text" name="birthday" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Giới tính :
                    </td>
                    <td>
                        <select name="sex">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                    </td>
                </tr>
          
            <input type="submit" name="register" value="register" />
            <input type="reset" value="Nhập lại" />
  </form>
<?php  
 $servername = "localhost";
 $username ="root";
 $password="";
 $database = "banquanao";
  //Khai báo biến để kết nối đến CSDL
 $connect = mysqli_connect($servername, $username,$password,$database);
 if(!$connect){
  echo"Kết nối thất bại";
 }
 else{
  echo"Kết nối thành công";
 }


  if (isset($_POST['register'])) { 
    
      $username =$_POST['username'];
      $password =$_POST['password'];
      $email =$_POST['email'];
      $fullname =$_POST['fullname'];
      $birthday =$_POST['birthday'];
      $sex =$_POST['sex'];

      $sql =  "  INSERT INTO `user`(`username`, `password`, `fullname`, `email`, `birthday`, `sex`) VALUES ('[$username]','[$password]','[$email]','[$fullname]','[$birthday]','[$sex]')";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      echo "<script>alert('Account has been created successfully!')</script>";
     //echo "<script>window.open('login.php','_self')</script>";
    }
    else{
      echo"<script>alert('Error')</script>";
    }  
  }
  ?>
</body>
</html>


