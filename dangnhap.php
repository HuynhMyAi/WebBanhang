<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "qlbanquanao";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                if(isset($_POST["sb1"])){
                    
                    $sql="SELECT * FROM khach_hang where sdt='".$_POST["sdt1"]."' AND matkhau='".$_POST["psw1"]."'";
                    $result1 = $conn->query($sql);
                   print_r($result1);
                    if($result1->num_rows>0){
                        $row = $result1->fetch_assoc();
                        header('Location: indexuser.php');

                        session_start();
                        $_SESSION["name"] = $row["KH_TEN"];
                        $_SESSION["ngaysinh"]=$row["KH_NGAYSINH"];
                        $_SESSION["email"]=$row["KH_EMAIL"];
                        $_SESSION["sdt"]=$row["SDT"];
                        $_SESSION["diachi"]=$row["KH_DIACHI"];
/*
                        echo $_SESSION["name"]."<br>==";
                        echo $_SESSION["ngaysinh"]."<br>==";
                        echo $_SESSION["sdt"];
    */
                    }
                    else{
                        echo '<script language="javascript">
                    alert("Nhập sai số điện thoại hoặc mật khẩu.");
                    history.back();
                     </script>';
                      
                    }
                   
                    }
                
                ?>