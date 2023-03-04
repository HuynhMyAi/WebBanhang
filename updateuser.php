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
                    $sql=" UPDATE khach_hang SET matkhau='".$_POST["psw"]."',KH_TEN='".$_POST["ten"]."',KH_NGAYSINH='$_POST["ngaysinh"]',
                    KH_GIOITINH='".$_POST["gioitinh"]."',SDT='".$_POST["sdt"]."',KH_EMAIL='".$_POST["email"]."',KH_DIACHI='".$_POST["diachi"]."' WHERE SDT='".$_POST["sdt"]."'
                    ";
                    
                    
                    $result2 = $conn->query($sql);
                    //echo $sql."<br>";
                    if( $result2){
                        echo '<script language="javascript">
                        alert("đã lưu thông tin!");
                         </script>';
                    }
                    else{
                        echo"Lỗi không thể đăng ký";
                      
                    }
                    }
                
                ?>