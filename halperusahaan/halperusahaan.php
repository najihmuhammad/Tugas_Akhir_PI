<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>GetJobs</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">GetJobs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#lowongan">Semua Lowongan</a>
                    </li>
					 <li class="page-scroll">
                        <a href="#jobfair">Info Jobfair</a>
                    </li>
					<li class="page-scroll">
                        <a href="#posting">Posting Lowongan</a>
                    </li>
                   <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  Perusahaan<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  
                  <li><a href="../index.php">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    Logout</a></li>                  
                </ul>
              </li>
                    
                </ul>
				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="../img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">GetJobs</span>
                        <hr class="star-light">
                        <span class="skills">GetJobs Membantu anda menemukan pekerjaan impian!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	 <section class="success" id="lowongan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Semua Lowongan</h2>
                    <hr class="star-light">
                </div>
            </div>
		</div>
		<?php
		include '../koneksi.php';
		$query = "SELECT * FROM tabel_lowongan"; //the query for get all data in tb_student
		$result = mysql_query($query);
		?>
            
                <table class="table table-condensed">
				<tr>
					<th>No</th>
					<th>Perusahaan</th>
					<th>Bagian </th>
					<th>Detil Lowongan</th>
					<th>Batas Pengiriman</th>
				</tr>
		<?php
			while ($data=mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$data['no']."</td>";
				echo "<td>".$data['perusahaan']."</td>";
				echo "<td>".$data['bagian']."</td>";
				echo "<td>".$data['detil_lowongan']."</td>"; 
				echo "<td>".$data['batas_pengiriman']."</td>"; 
				echo "</tr>";
			}
		?>
			
			</table>
		</section>
		
		
		<section class="success" id="jobfair">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Info Jobfair</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
               <table class="table table-condensed">
  …			<tr>
				<td align = "center"> <img src="../img/1.jpg"  width="500" height="250">
				</td>
				<td align = "center"> <img src="../img/2.jpg"  width="500" height="250">
				</td>
			</tr>
			<tr>
				<td align = "center"> <img src="../img/3.jpg"  width="500" height="250">
				</td>
				<td align = "center"> <img src="../img/4.jpg"  width="500" height="250">
				</td>
			</tr>
			
	</table>
		<nav>
		  <ul class="pager">
			<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Back</a></li>
			<li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
		  </ul>
		</nav>
            </div>
        </div>
    </section>
	
	<section>
		<div class="container" id="posting">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Posting Lowongan</h2>
					<i class="fa fa-4x fa-paper-plane wow bounceIn text-dark"></i> <br></br>
				</div>
			</div>
			<div class="row"> 	
				<form class="form-horizontal" action="input.php" method="post">
					<div class="form-group">
						<label for="no" class="col-sm-2 control-label">No</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="no" placeholder="No" required>
						</div>
					</div>
					<div class="form-group">
						<label for="perusahaan" class="col-sm-2 control-label">Perusahaan</label>
						<div class="col-sm-10">
							<input name="perusahaan" cols="50" class="form-control" placeholder="Perusahaan" required></input>
						</div>
					</div>
					<div class="form-group">
						<label for="bagian" class="col-sm-2 control-label">Bagian</label>
						<div class="col-sm-10">
							<input name="bagian" cols="50" class="form-control" placeholder="Bagian" required></input>
						</div>
					</div>
					<div class="form-group">
						<label for="deti_loeongan" class="col-sm-2 control-label">Detil Lowongan</label>
						<div class="col-sm-10">
							<textarea name="detil_lowongan" cols="50" class="form-control" placeholder="Detail Lowongan" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="batas_pengiriman" class="col-sm-2 control-label">Batas Pengiriman</label>
						<div class="col-sm-10">
							<input type="date" name="batas_pengiriman" cols="50" class="form-control" placeholder="Batas Pengiriman" required></input>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" value="submit" class="btn btn-default">Post</button>
						</div>
					</div>
				</form>                    
			</div> 
		</div>
	
		<?php
		include '../koneksi.php';
		$query = "SELECT * FROM tabel_lowongan"; //the query for get all data in tb_student
		$result = mysql_query($query);
		?>
			<table class="table table-condensed">
			<tr>
				<th>No</th>
				<th>Perusahaan</th>
				<th>Bagian </th>
				<th>Detil Lowongan</th>
				<th>Batas Pengiriman</th>
			</tr>
		<?php
			while ($data=mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$data['no']."</td>";
				echo "<td>".$data['perusahaan']."</td>";
				echo "<td>".$data['bagian']."</td>";
				echo "<td>".$data['detil_lowongan']."</td>"; 
				echo "<td>".$data['batas_pengiriman']."</td>"; 
				echo "</tr>";
			}
		?>
			
		</table>
    </section>
	
	
		
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Jl Nakula 1<br>No.1-5, Semarang</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact</h3>
                        <p>getjobs@gmail.com <br> (024) 123455</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; GetJobs 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   
          

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/freelancer.js"></script>

</body>

</html>
