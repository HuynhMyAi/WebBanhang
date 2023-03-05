<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "qlbanquanao";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
               
                if(isset($_POST["sbf"])){
                    session_start();
                   if($_POST["psw"]==$_POST["psw1"]){
                    $sql=" UPDATE khach_hang SET matkhau='".md5($_POST["psw"])."',HOTEN='".$_POST["ten"]."',NGAYSINH='".$_POST["ngaysinh"]."',
                    GIOITINH='".$_POST["gioitinh"]."',SDT='".$_POST["sdt"]."',EMAIL='".$_POST["email"]."',DIACHI='".$_POST["diachi"]."' WHERE email='".$_SESSION["email"]."'
                    ";
                   }
                   else{
                    echo 
                    '<script language="javascript">
                        alert("Mật khẩu nhập lại không khớp!");
                        history.back();
                         </script>';
                    
                   }
                   
                    
                    $result2 = $conn->query($sql);
                    //echo $sql."<br>";
                    
                    if( $result2){
                        echo '<script language="javascript">
                        alert("đã lưu thông tin!");
                        history.back();
                         </script>';
                    }
                    else{
                       // echo"Lỗi không thể đăng ký";
                      
                    }
                    
                    }
                
                ?>