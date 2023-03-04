<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanquanao";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 session_start();
/*
$date = $_SESSION["ngaysinh"]; // Ngày tháng đầu vào
$newDate = date("d-m-Y", strtotime($date)); // Chuyển đổi sang định dạng mới
 // Hiển thị kết quả
 echo $newDate;

 echo '<input type="date" name="ngay" value="'.$_SESSION["ngaysinh"].'">';
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>H A Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" href="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="#"><i class="fas fa-envelope"> </i>&nbspHuynhai@gmail.com</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href=""><i class="fas fa-phone"></i>&nbsp090807601</a>

                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h4 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1"><i class="fas fa-user-circle"></i>
                    </h4>
                    </span> <?php echo $_SESSION["name"] ?>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm Kiếm Sản Phẩm">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="#navbar-vertical"
                    style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Tài Khoản Của Tôi</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                    id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Hồ sơ <i
                                    class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Địa Chỉ</a>
                                <a href="" class="dropdown-item">Số điện Thoại</a>
                                <a href="" class="dropdown-item">Đổi Mật Khẩu</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Đơn Mua</a>
                        <a href="" class="nav-item nav-link">Thông Báo</a>
                        <a href="" class="nav-item nav-link">Giỏ Hàng</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">H A</span>Shop</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                            <a href="shop.php" class="nav-item nav-link">Hàng Mới Về</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Phong Cách</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Đơn giản</a>
                                    <a href="checkout.html" class="dropdown-item">Thiết kế</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Liên Hệ Shop</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Đăng Xuất</a>
                        </div>
                    </div>
                </nav>
                <!-- hien thi thong tin nguoi dung-->

                <div class="container">
                    <form action="updateuser.php" method="POST" class="formuser">
                        <h2>Thông tin tài khoản</h2>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tên</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2"
                                        value="<?php echo $_SESSION["name"] ?>" name="ten">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Số điện thoại </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3"
                                        value=" <?php echo $_SESSION["sdt"] ?>" name="sdt">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nhập mật khẩu mới</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1"
                                        value="<?php $_SESSION["matkhau"] ?>" name="psw">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1"
                                        value="<?php $_SESSION["matkhau"] ?>" name="psw1">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email </label>
                                    <input type="email" class="form-control" id="exampleFormControlInput3"
                                        value=" <?php echo $_SESSION["email"] ?>" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput4"
                                        value="<?php echo $_SESSION["ngaysinh"]?>" name="ngaysinh">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Giới tính</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gioitinh"
                                            id="flexRadioDefault1" value="nam">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Nam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gioitinh"
                                            id="flexRadioDefault2" checked value="nu">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Nữ
                                        </label>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value=" <?php echo $_SESSION["diachi"] ?>" name="diachi">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Lưu" class="saveform" name="sbf">
                    </form>
                </div>

                <!-- ket thuc hien thi thong tin nguoi dung-->

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border border-white px-3 mr-1">H A</span>Shop</h1>
                </a>
                <p>Giấy chứng nhận đăng ký doanh nghiệp số: 031530999, đăng ký lần đầu ngày 18/06/2018.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Trần Quang Khải, Ninh Kiều,
                    CT.</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Huynhai@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>090807601</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Đi Đến Trang</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Trang
                                Chủ</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Đăng
                                Nhập</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Đăng
                                Ký</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Liên Hệ
                                Shop</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Giỏ
                                Hàng</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Trang Cá
                                Nhân</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Chi Nhánh</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Cần
                                Thơ</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Sài Gòn</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Đà
                                Nẵng</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Hải
                                Phòng</a>
                            <a class="text-dark mb-2" href="checkout.html"><i
                                    class="fa fa-angle-right mr-2"></i>Vinh</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Hà Nội</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Đăng Ký Nhận Tin</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Họ Tên"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">H A SHOP </a>. Thiết Kế Bởi
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">Huỳnh Thị Mỹ Ái</a><br>
                    <a href="https://themewagon.com" target="_blank">Huỳnh Thị Mỹ Ái</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>