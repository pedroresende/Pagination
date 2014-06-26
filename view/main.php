<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">

        <title>Developer PHP - Pagination Test</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Pagination Test</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="starter-template">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="current_page" placeholder="Current Page">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="total_pages" placeholder="Total Pages">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="boundaries" placeholder="Boundaries">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="around" placeholder="Around">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Configurar"/>
                        </form>
                    </div>
               </div>
                <div class="col-md-4"></div>
            </div>
            <?php require_once __DIR__ . '/content.php'; ?>
        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
