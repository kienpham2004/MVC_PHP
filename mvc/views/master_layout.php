 <?php
    error_reporting(0);
    if(!isset($_SESSION["id"])){
        header("location:http://localhost/mini_project/login");
    }
   
?>


<!DOCTYPE html >
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Shop - Administrator</title>

    <base href="http://localhost/mini_project/">
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <link href="./public/css/datepicker3.css" rel="stylesheet">
    <link href="./public/css/bootstrap-table.css" rel="stylesheet">
    <link href="./public/css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="./public/js/lumino.glyphs.js"></script>
    <script src="./public/js/ckeditor.js"></script>

    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Mobile</span> Shop</a>
                <ul class="user-menu">
                    <li class=" pull-right">
                        <a href="login/logout">     
                           Đăng xuất <label style="color:blue;"><?php  echo $data["username"];?>
                           <?php echo $data["cookie"]; ?>
                           </label>
                           </a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /.container-fluid -->
    </nav>

    <?php require_once("./mvc/views/".$data["Home"].".php");?>


    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="index.php?page_layout=user"><svg class="glyph stroked male user ">
                        <use xlink:href="#stroked-male-user" />
                    </svg>Quản lý thành viên</a></li>
            <li><a href="index.php?page_layout=category"><svg class="glyph stroked open folder">
                        <use xlink:href="#stroked-open-folder" />
                    </svg>Quản lý danh mục</a></li>
            <li><a href="index.php?page_layout=product"><svg class="glyph stroked bag">
                        <use xlink:href="#stroked-bag"></use>
                    </svg>Quản lý sản phẩm</a></li>

        </ul>

    </div>
    <!--/.sidebar-->


</body>
<script src="./public/js/jquery-1.11.1.min.js"></script>
<script src="./public/js/bootstrap.min.js"></script>

</html>