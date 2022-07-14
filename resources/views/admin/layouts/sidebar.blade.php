<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.bundle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>

    <input type="checkbox" id="check">
    <!--mobile navigation bar start-->
    <!-- <div class="mobile_nav">
            <div class="nav_bar">
                <img src="1.png" class="mobile_profile_image" alt="">
                <i class="fa fa-bars nav_btn"></i>
            </div>
            <div class="mobile_nav_items">
                <a href="#"><i class="fas fa-desktop"></i><span>Webinars</span></a>
                <a href="#"><i class="fas fa-cogs"></i><span>Yoga Sessions</span></a>
                <a href="#"><i class="fas fa-table"></i><span>Packages</span>
                    <ul class="list-unstyled">
                        <a href="">
                            <li>Payments Module</li>
                        </a>
                        <a href="">
                            <li>Packages</li>
                        </a>
                    </ul>
                </a>
                <a href="#"><i class="fas fa-th"></i><span>Cupons</span></a>
            </div>
        </div> -->
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <label for="check">
            <i class="fa fa-angle-double-right" id="sidebar_btn"></i>
        </label>
        <div class="left_area mb-5">
            <h3>PORTAL</h3>
        </div>
        <!-- <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
        <h4>Jessica</h4>
      </div> -->
      <div class="pb-5">
      <a href="">
            <div class="ml-4"><i class="fa fa-clone" aria-hidden="true"></i><span class="ml-2">Dashboard</span></div>
        </a>
        <a href="">
            <div class="ml-4"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">Orders</span></div>
        </a>
        <a href="">
            <div class="ml-4"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">Products</span></div>
        </a>
        <a href="">
            <div class="ml-4"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">Invoices</span></div>
        </a>
        <a href="">
            <div class="ml-4"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">Users</span></div>
        </a>
      </div>
        <div class="pt-5 pb-5">
            <a href="">
                <div class="ml-4"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">Export</span></div>
            </a>
            <a href="">
                <div class="ml-4"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">Profile</span></div>
            </a>
            <a href="">
                <div class="ml-4"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">Sign out</span></div>
            </a>
        </div>
        <div class="pt-5 ml-4">
        <h5 class="ml-4">Global NAV</h5>
        <div class="d-flex justift-content-between ml-4 pt-3">
        <span><i class="fab fa-facebook-f text-dark"></i></span>  
        <span><i class="fab fa-twitter text-dark ml-3" aria-hidden="true"></i></span>
        <span><i class="fab fa-instagram text-dark ml-3" aria-hidden="true"></i></span>
        </div>
</div>
    </div>
    <!--sidebar end-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav_btn').click(function() {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>

</body>

</html>