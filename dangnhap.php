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
                    
                    $sql="SELECT * FROM khach_hang where email='".$_POST["email"]."' AND matkhau='".md5($_POST["psw1"])."'";
                    $result1 = $conn->query($sql);
                  // print_r($result1);
                    if($result1->num_rows>0){
                        $row = $result1->fetch_assoc();
                        header('Location: indexuser.php');

                        session_start();
                        $_SESSION["name"] = $row["HOTEN"];
                        $_SESSION["ngaysinh"]=$row["NGAYSINH"];
                        $_SESSION["email"]=$row["EMAIL"];
                        $_SESSION["sdt"]=$row["SDT"];
                        $_SESSION["diachi"]=$row["DIACHI"];
                        $_SESSION["matkhau"]=$row["MATKHAU"];
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