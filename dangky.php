<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "qlbanquanao";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                if(isset($_POST["sb"])){
                    //echo $_POST["sdt"]."<br>";
                    $sql1="SELECT * FROM khach_hang where sdt='".$_POST["sdt"]."' ";
                    $result1= $conn->query($sql1);
                    if(mysqli_num_rows($result1)>0){
                        echo '<script language="javascript">
                    alert("Số điện thoại đã được đăng ký!");
                    history.back();
                     </script>';
                    
                    }
                    else{
                    $date = date_create($_POST["ngaysinh"]);
                    $sql2="INSERT INTO khach_hang values('".$_POST["psw"]."','1".$_POST["sdt"]."','".$_POST["ten"]."','".$date ->format('Y-m-d') ."',
                    '".$_POST["gioitinh"]."','".$_POST["sdt"]."','".$_POST["email"]."','".$_POST["diachi"]."') ";
                    //echo $result2."<br>";
                    $result2 = $conn->query($sql2);
                    //echo $sql."<br>";
                    if( $result2){
                        echo '<script language="javascript">
                        alert("Đăng ký tài khoản thành công!");
                         </script>';
                         header('Location: index.php');
                    }
                    else{
                        echo"Lỗi không thể đăng ký";
                      
                    }
                    }
                }
                ?>