<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="style/adminhv.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</head>
<body>
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="#" class="brand-logo"><i class="fa-solid fa-user-tie">ADMIN</i></a></header>

            <nav class="dashboard-nav-list"><a href="indexadmin.php" class="dashboard-nav-item"><i class="fas fa-home"></i>Home </a>
                <a href="indexadmin.php?act=qlhv" class="dashboard-nav-item"><i class="fa-solid fa-graduation-cap"></i></i>Học viên</a>
                <a href="indexadmin.php?act=qlgv" class="dashboard-nav-item"><i class="fa-solid fa-chalkboard-user"></i></i> Giáo viên </a>
                <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <i class="fa-solid fa-book"></i> Chương trình học </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="adcthoc.html" class="dashboard-nav-dropdown-item">English Essentials</a>
                        <a href="adcthoc.html" class="dashboard-nav-dropdown-item">Fluent Fluency</a>
                        <a href="adcthoc.html" class="dashboard-nav-dropdown-item">TOEFL Triumph</a>
                        <a href="adcthoc.html" class="dashboard-nav-dropdown-item">IELTS Edge</a>

                    </div>
                </div>
                <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Cài đặt </a>
                <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Thông tin </a>
              <div class="nav-item-divider"></div>
              <a href="dangnhap.html" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Đăng xuất </a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a></header>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const mobileScreen = window.matchMedia("(max-width: 990px )");
    $(document).ready(function () {
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
    });
</script>