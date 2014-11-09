<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>User Main Page</title>

    <!-- Bootstrap core CSS -->
    <link href="user_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="user_files/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="user_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="user.php">User Menu</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="user.php">Make Order</a></li>
            <li><a href="userorders.php">Current Orders</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <center>
    <h1 class="title">Make An Order</h1>
        <form action="./makeOrder.php" method="post">
            <form method="post" id="order">
                <!--Title for restaurant selection-->
                <h4 class=restSelect>Choose A Restaurant</h4>
                <!--Select resturaunt-->
                <select id="selectRest" class="selectRest">
                    <option value="Select Restaurant">Select Restaurant</option>
                    <option value="Rys Bagels">Ry's Bagels</option>
                    <option value="Hunan Wok">Hunan Wok</option>
                    <option value="Glassboro Pizzeria">Glassboro Pizzeria</option>
                </select>
                <!--Select menu items based on resturaunt-->
            </form>
            <!--menuItems appear here-->
            <form>
                <div id="menuItems"><!--Drop down box appears in here--></div>
            </form>
            <form>
                <input type="submit" value="Place Order!" class="btn btn-default">
            </form>
        </form>
    </center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="user_files/jquery.js"></script>
    <script src="user_files/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="user_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>