<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontawsome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="../AllCSS/style.css">
    <link rel="stylesheet" href="..\Uploads\main.css">
    <title>Post</title>
</head>
<body>
<!-- main container of all the page elements -->
<div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
        <header>
            <a href="#">Welcome Reader's</a>
        </header>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link"><i class="zmdi zmdi-view-dashboard"></i>My Profile</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="zmdi zmdi-view-dashboard"></i> Dashboard</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="zmdi zmdi-view-dashboard"></i> Post</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="zmdi zmdi-view-dashboard"></i> Categories</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="zmdi zmdi-view-dashboard"></i> Manage Admins</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="zmdi zmdi-view-dashboard"></i> Comments</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="zmdi zmdi-view-dashboard"></i> Live Blog</a></li>
        </ul>
    </div>
    <!--main Content -->
    <div id="content">
        <nav class="navbar navbar-default bg-dark" style="height: 52px">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-user"></i>  Log Out</a></li>
                </ul>
            </div>
        </nav>
        <header class="py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"><h1>Basic</h1></div>
                </div>
            </div>
        </header>
        <!---main area-->
        <section class="container py-2 mb-4">

        </section>
        <!---main area-->
        <footer class="bg-dark text-white">
            <div class="container-fluid">
                <div class="class">
                    <div class="row">
                        <div class="col">
                            <p class="lead text-center">Theme By | Somapti | <span id="year"></span> &copy; All right Reserved</p>
                            <p class="text-center small"><a style="color: white;text-decoration: none;cursor:pointer" href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
<script>
    $('#year').text(new Date().getFullYear());

</script>
</body>
</html>



