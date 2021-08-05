<?php require_once ("Db.php"); ?>
<?php require_once ("function.php"); ?>
<?php require_once ("session.php"); ?>
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
                    <div class="col-md-12"><h1>Blog post</h1></div>
                    <div class="col-lg-3 mb-2">
                        <a href="addnewpost.php" class="btn btn-primary btn-block">
                            <i class="fas fa-edit"></i>Add new post
                        </a>
                    </div>
                    <div class="col-lg-3 mb-2">
                        <a href="categories.php" class="btn btn-info btn-block">
                            <i class="fas fa-folder-plus"></i>Add new Category
                        </a>
                    </div>
                    <div class="col-lg-3 mb-2">
                        <a href="Admins.php" class="btn btn-warning btn-block">
                            <i class="fas fa-user-plus"></i>Add new Admin
                        </a>
                    </div>
                    <div class="col-lg-3 mb-2">
                        <a href="" class="btn btn-success btn-block">
                            <i class="fas fa-check"></i>Approve Comments
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!---main area-->
        <section class="container-fluid py-2 mb-4">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Date&Time</th>
                            <th>Author</th>
                            <th>Banner</th>
                            <th>Comments</th>
                            <th>Action</th>
                            <th>Live Preview</th>
                        </tr>
                        </thead>
                        <?php
                        global $ConnectingDB;
                        $sql = "SELECT * FROM post";
                        $stmt =$ConnectingDB->query($sql);
                        $Sr = 0;
                        while ($DataRows = $stmt->fetch()){
                            $Id          = $DataRows["id"];
                            $DateTime    = $DataRows["datetime"];
                            $PostTitle   = $DataRows["title"];
                            $Category    = $DataRows["category"];
                            $Admin       = $DataRows["author"];
                            $Image       = $DataRows["image"];
                            $PostText    = $DataRows["post"];
                            $Sr++;


                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $Sr  ;?></td>
                            <td>
                                <?php
                                if(strlen($PostTitle)>20){
                                    $PostTitle =substr($PostTitle,0,18).'..';
                                }
                                echo $PostTitle
                                ;?>
                            </td>
                            <td>
                                <?php
                                if(strlen($Category)>10){
                                    $Category =substr($Category,0,10).'..';
                                }
                                echo $Category;
                                ?>
                            </td>
                            <td>
                                <?php
                                if(strlen($DateTime)>10){
                                    $DateTime =substr($DateTime,0,10).'..';
                                }
                                echo $DateTime ;
                                ?>
                            </td>
                            <td>
                                <?php
                                if(strlen($Admin)>10){
                                    $Admin =substr($Admin,0,10).'..';
                                }

                                echo $Admin;?>
                            </td>
                            <td><img src="./../Uploads/<?php echo $Image;?>" width="170px;" height ="50px;"/></td>
                            <td>Comments</td>
                            <td>
                                <a href="#"><span class="btn btn-warning mb-2">Edit</span></a>
                                <a href="#"><span class="btn btn-warning mb-2">Delete</span></a>
                            </td>
                            <td>
                                <a href="#"><span class="btn btn-warning mb-2">Live Preview</span></a>
                            </td>
                        </tr>
                        </tbody>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>

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


