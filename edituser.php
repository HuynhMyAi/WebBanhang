<?php
include("conn&ss.php");
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
                        <input type="text" class="form-control" placeholder="T??m Ki???m S???n Ph???m">
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
                    <h6 class="m-0">T??i Kho???n C???a T??i</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                    id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">H??? s?? <i
                                    class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">?????a Ch???</a>
                                <a href="" class="dropdown-item">S??? ??i???n Tho???i</a>
                                <a href="" class="dropdown-item">?????i M???t Kh???u</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">????n Mua</a>
                        <a href="" class="nav-item nav-link">Th??ng B??o</a>
                        <a href="" class="nav-item nav-link">Gi??? H??ng</a>
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
                            <a href="index.php" class="nav-item nav-link active">Trang ch???</a>
                            <a href="shop.php" class="nav-item nav-link">H??ng M???i V???</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Phong C??ch</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">????n gi???n</a>
                                    <a href="checkout.html" class="dropdown-item">Thi???t k???</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Li??n H??? Shop</a>
                        </div>
                        <?php
                            
                            if (isset($_SESSION['email'])) {
                                echo '
                                <div class="navbar-nav ml-auto py-0">
                                     <a href="dangxuat.php" class="nav-item nav-link">????ng Xu???t</a>
                                     <a href="edituser.php" class="nav-item nav-link"><i class="fas fa-user-circle"></i></a>
                                 </div>
                                ';
       
                             } else {
                                echo '
                                <div class="navbar-nav ml-auto py-0">
        
                                <a href="taikhoan.php" class="nav-item nav-link">????ng K??</a>
                                <a href="taikhoan.php" class="nav-item nav-link">????ng Nh???p</a>
                            </div>
                                ';
                             }
                            
                        ?>
                    </div>
                </nav>
                <!-- hien thi thong tin nguoi dung-->

                <div class="container">
                    <form action="updateuser.php" method="POST" class="formuser">
                        <h2>Th??ng tin t??i kho???n</h2>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">T??n</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2"
                                        value="<?php echo $_SESSION["name"] ?>" name="ten">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">S??? ??i???n tho???i </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3"
                                        value=" <?php echo $_SESSION["sdt"] ?>" name="sdt">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nh???p m???t kh???u m???i</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1"
                                        value="<?php $_SESSION["matkhau"] ?>" name="psw">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nh???p l???i m???t kh???u</label>
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
                                    <label for="exampleFormControlInput1" class="form-label">Ng??y sinh</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput4"
                                        value="<?php echo $_SESSION["ngaysinh"]?>" name="ngaysinh">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Gi???i t??nh</label>

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
                                            N???
                                        </label>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">?????a ch???</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value=" <?php echo $_SESSION["diachi"] ?>" name="diachi">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="L??u" class="saveform" name="sbf">
                    </form>
                </div>

                <!-- ket thuc hien thi thong tin nguoi dung-->

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Footer Start -->
    <?php
    include("footer.php")
    ?>
</body>

</html>