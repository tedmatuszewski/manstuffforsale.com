<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Ted Matuszewski">
    
        <title>Man Stuff For Sale</title>
    
    	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">        
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" rel="stylesheet" type="text/css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap.theme.css" rel="stylesheet" /> 
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js"></script>
        <script src="/js/jquery.animatecss.js"></script>
        <script src="/js/dropzone.js"></script>
  	</head>

  	<body>
        <nav class="navbar">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <a class="navbar-brand" href="#">Man Stuff</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#" class="showAddContainer"><i class="fa fa-plus"></i> Add</a></li>
                </ul>
                
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control input-sm">
                    </div>
                    
                    <button type="submit" class="btn">Search</button>
                </form>
            </div><!-- /.nav-collapse -->
          </div><!-- /.container -->
        </nav>
        
            <?php
                include_once($view);
            ?>
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a class="" href="#">man stuff</a>
                    </div>

                    <div class="col-sm-6 text-right">
                        <p style="margin: 17px 0px 0px 0px;">© 2015, Designed by Ted Matuszewski</p>
                    </div>
                </div>
            </div>	
        </footer>
    </body>
</html>