<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Panel</title>

<link href="css/weinweb.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
			  <a class="navbar-brand" href="#">WEIN</a>
			</div>
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
			    <li class="active"><a href="#">Wines</a></li>
			    <li><a href="#cellar">Wine Cellar</a></li>
			    <li><a href="#events">Events</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
            	<li><a href="../navbar/">Logout</a></li>
          </ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
<div class="container">

	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="add"><button type="button" class="btn btn-lg btn-success">ADD</button></div>
          <div class="list-group">
          	<a href="#" class="list-group-item">Link</a>
          </div>
        </div>
		<div class="col-xs-12 col-sm-9">
			<div class="jumbotron row">
				<div class=".col-xs-12 .col-md-8" data-id="<%= id %>">
            	<div class="thumbnail">
              		<img src="/res/img/classic.jpg">
              		<div class="caption">
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><h3><%= name %></h3></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="overflow:hidden;margin-top:10px;margin-bottom:10px;"><span><%= description %></span></div>
                <div style="float:right;">
                <p>
                	<button id="stop_<%= id %>" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-edit">Edit</span></button> 
                    <button id="play_<%= id %>" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-minus">Delete</span></button>                     
                </p>
            </div>
              </div>
            </div>
            </div>


			</div>
		</div>

	</div>
</div>


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>