<?php
           include("conn&ss.php");
                if(isset($_POST["sb"])){
                    //echo $_POST["sdt"]."<br>";
                    $sql1="SELECT * FROM khach_hang where email='".$_POST["email"]."' ";
                    $result1= $conn->query($sql1);
                    if(mysqli_num_rows($result1)>0){
                        echo '<script language="javascript">
                    alert("Email đã được đăng ký!");
                    history.back();
                     </script>';
                    
                    }
                    else{
                   // $date = date_create($_POST["ngaysinh"]);
                    $sql2="INSERT INTO khach_hang
                     values('".$_POST["email"]."','".$_POST["sdt"]."','".md5($_POST["psw"])."','".$_POST["ten"]."','".$_POST["diachi"]."',
                    '".$_POST["gioitinh"]."','".$_POST["ngaysinh"]."') ";
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