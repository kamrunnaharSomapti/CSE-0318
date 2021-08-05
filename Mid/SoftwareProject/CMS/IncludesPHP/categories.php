<?php require_once ("Db.php"); ?>
<?php require_once ("function.php"); ?>
<?php require_once ("session.php"); ?>

<?php
 if(isset($_POST["Submit"])){
     $Category = $_POST["Category-Title"];
     $Admin = "Somapti";
     date_default_timezone_set("Asia/Dhaka");
     $CurrentTime = time();
     $DateTime = strftime("%y-%m-%d %H:%M.%S",$CurrentTime);
     if(empty($Category)){
         $_SESSION["ErrorMessage"]= "All fields must be filled out";
         Redirect_to("categories.php");
     }elseif (strlen($Category)<3){
         $_SESSION["ErrorMessage"]= "Category title should be more than 2 character";
         Redirect_to("categories.php");
     }elseif (strlen($Category) >50){
         $_SESSION["ErrorMessage"]= "Category title should be less than 50 character";
         Redirect_to("categories.php");
     }else{
         //query ro insert data to database
         global $ConnectingDB;
         $sql="INSERT INTO category(title,author,datetime)";
         $sql .="VALUES(:categoryName,:adminName,:dateTime)";
         $stmt = $ConnectingDB->prepare($sql);
         $stmt->bindValue(':categoryName',$Category);
         $stmt->bindValue(':adminName',$Admin);
         $stmt->bindValue(':dateTime',$DateTime);
         $Execute=$stmt->execute();

         if($Execute){
             $_SESSION["SuccessMessage"]="Category with id : ".$ConnectingDB->lastInsertId()."Success! added to category";
             Redirect_to("categories.php");
         }else{
             $_SESSION["ErrorMessage"]= "Something wrong try again";
             Redirect_to("categories.php");
         }
     }
 }
 ?>
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
    <title>Categories</title>
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
                <div class="col-md-12"><h1>Manage Categoris</h1></div>
            </div>
        </div>
        </header>
        <section class="container py-2 mb-4">
            <div class="row" >
                <div class="offset-lg-1 col-lg-10" style="min-height: 686px;">
                    <?php
                    echo ErrorMessage();
                    echo SuccessMessage();
                    ?>
                <form class="" action="categories.php" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h1>Add new category</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <!--for label name and input id have to match--->
                                <label for="title"><span class="FieldInfo">Category Title</span></label>
                                <input class="form-control" type="text" name="Category-Title" id="title" placeholder="type title here" value="">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <a href="Dashboard.php" class="btn btn-warning btn-block">
                                        <i class="fas fas-arrow-left "></i>Back to Dashaboard</a>
                                </div>
                                <div class="col-lg-6 mb-2">
                                   <button type="submit" name="Submit" class="btn btn-success btn-block" >
                                       <i class="fas fa-check"></i> Publish
                                   </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </section>
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


