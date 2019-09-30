<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wehome后台主界面</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        aside {
            width: 199px;
            position: absolute;
            top: 50px;
            bottom: 0;
            border-right: 1px solid #dddddd;
        }

        main {
            position: absolute;
            left: 200px;
            right: 0;
            top: 50px;
            bottom: 0;
            padding: 15px;
        }
        main > iframe{
            width: 100%;
            height: 100%;
        }

        aside > .panel{
            margin-bottom: 0;
            border-radius: 0;
        }
        aside .list-group-item{
            padding: 10px 30px;
        }
        aside > .panel > .panel-heading{
            border-bottom: 1px solid #333;
        }
        .glyphicon{
            float: right;
            transition: all ease .3s;
        }
        .glyphicon.active{
            transform: rotateZ(180deg);
        }
    </style>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">weHome CMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<aside>
    <div class="panel">
        <div class="panel-heading">导航管理 <i class="glyphicon glyphicon-menu-down"></i> </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="navinsert.php" target="right">添加导航</a>
            </li>
            <li class="list-group-item">
                <a href="navselect.php" target="right">查看导航</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading">商品分类 <i class="glyphicon glyphicon-menu-down"></i> </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="cateselect.php" target="right">查看分类</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading">商品管理 <i class="glyphicon glyphicon-menu-down"></i> </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="goodsinsert.php" target="right">商品添加</a>
            </li>
            <li class="list-group-item">
                <a href="goodsselect.php" target="right">商品查看</a>
            </li>
        </ul>
    </div>
</aside>
<main>
    <iframe src="goodsselect.php" frameborder="0" name="right"></iframe>
</main>
<script>
    $('.panel-heading').on('click',function(){
        $(this).children('i').toggleClass('active');
        $(this).next('.list-group').slideToggle();
    })
</script>
</body>
</html>
