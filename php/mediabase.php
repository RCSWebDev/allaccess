<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Access - Powered by Mediabase</title>
	<link type="text/css" rel="stylesheet" href="assets/styles/vendor/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body class="mediabase">
	
<?php include 'includes/header.php'; ?>


<div class="site-inner">
	<!-- ad banner -->
	<div class="aa-ad-banner">
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<img src="assets/images/TrueIntegration_728x90_2.png" width="728" alt="TrueIntegration_728x90_2" />
				</div>
			</div>
		</div>
	</div>
	
	
	<main class="content">
		<!-- header -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<header class="entry-header">
						<h1 class="entry-title text-center">Mediabase</h1>
					</header>
				</div>
			</div>
		</div>
		
		<!-- muzooka chart -->
		<div class="mediabase-charts">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
					
						<!-- tab menu -->
						<ul class="nav" id="mb-charts-menu">
							<button type="button" class="btn btn-light nav-link active" data-bs-toggle="tab" data-bs-target="#tab-mb-songs">Song Charts</button>
						
							<button type="button" class="btn btn-light nav-link" data-bs-toggle="tab" data-bs-target="#tab-mb-adds">Adds</button>
						
							<button type="button" class="btn btn-light nav-link" data-bs-toggle="tab" data-bs-target="#tab-mb-stations">Stations</button>
						</ul>
						
						<!-- tab content -->
						<div class="tab-content">
							<div class="tab-pane fade show active" id="tab-mb-songs">
								<div class="alert alert-dark">
									<form class="form form-song-charts">
										<div class="row">
											<div class="col-12 col-sm-6 col-lg-3">
												<label class="form-label" for="report">Report</label>
												<select name="report" class="form-select" id="song-charts-report">
													<option value="sevenDay" selected>7-Day Report</option>
													<option value="jump">Spincrease</option>
													<option value="takingOff">Taking Off</option>
													<option value="yearToDate">Year-to-Date</option>
												</select>
											</div>
											
											<div class="col-12 col-sm-6 col-lg-3">
												<label class="form-label" for="panel">Panel</label>
												<select name="panel" class="form-select" id="song-charts-panel">
													<option value="M" selected>All Stations (U.S.)</option>
													<option value="R">Published (U.S.)</option>
													<option value="C">All Stations (Canada)</option>
													<option value="K">Published (Canada)</option>
													<option value="L">Latin</option>
													<option value="N">Published (Latin)</option>
													<option value="X">Christian</option>
													<option value="J">Smooth Jazz</option>
													</select>
											</div>
											
											<div class="col-12 col-sm-6 col-lg-3">
												<label class="form-label" for="format">Format</label>
												<select name="format" class="form-select" id="song-charts-format">
													<option value="A1" selected>AC</option>
													<option value="A2">Hot AC</option>
													<option value="C1">Country</option>
													<option value="H1">Top 40</option>
													<option value="R1">Triple A</option>
													<option value="R2">Active Rock</option>
													<option value="R3">Alternative</option>
													<option value="U1">Urban</option>
													<option value="U2">Urban/R&B</option>
													<option value="Y0">Rhythmic</option>
													<option value="Y1">Dance</option>
												</select>
											</div>
											
											<div class="col-12 col-sm-6 col-lg-3">
												<label class="form-label" for="detail">Currents/Recurrents</label>
												<select name="detail" class="form-select" id="song-charts-cr">
													<option value="C" selected>C</option>
													<option value="CR">C/R</option>
												</select>
											</div>
											
											<div class="col-12">
												<div class="form-check form-check-inline">
													<input type="radio" class="form-check-input" />
													<label class="form-check-label">Rolling</label>
												</div>
												
												<div class="form-check form-check-inline">
													<input type="radio" class="form-check-input" />
													<label class="form-check-label">Published</label>
												</div>
											</div>
										</div>
										
										<input type="submit" class="btn btn-primary" value="Get Report" />
									</form>
								</div>
								
								<table class="table table-striped">
									<thead class="table-secondary">
										<tr>
											<th>LW</th>
											<th>TW</th>
											<th>Artists</th>
											<th>Title</th>
											<th>TW</th>
											<th>LW</th>
											<th>Move</th>
											<th>Aud</th>
										</tr>
									</thead>
									
									<tbody class="table-group-divider">
										<tr>
											<td>1</td>
											<td>1</td>
											<td><i class="fa-solid fa-up-long"></i> Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<div class="tab-pane fade" id="tab-mb-adds">
								<div class="alert alert-dark">
									<form class="form form-adds">
										<div class="row">
											<div class="col-12 col-sm-6 col-md-3">
												<label class="form-label" for="reporters">Reporters</label>
												<select name="reporters" class="form-select" id="adds-reporters">
													<option value="monitored" selected>Monitored</option>
													<option value="non-monitored">Non-Monitored</option>
													<option value="all">All</option>
												</select>
											</div>
											
											<div class="col-12 col-sm-6 col-md-3">
												<label class="form-label" for="adds-format">Format</label>
												<select name="adds-format" class="form-select" id="adds-format">
													<option value="A1" selected>AC</option>
													<option value="R2">Active Rock</option>
													<option value="R3">Alternative</option>
													<option value="Z5">Canada Country</option>
													<option value="Z2">Canada-Hot AC</option>
													<option value="Z4">Canada-Main AC</option>
													<option value="Z1">Canada-Top 40</option>
													<option value="X2">Christian AC</option>
													<option value="C1">Country</option>
													<option value="A2">Hot AC</option>
													<option value="R5">Mainstream Rock</option>
													<option value="Y0">Rhythmic</option>
													<option value="J1">Smooth Jazz</option>
													<option value="H1">Top 40</option>
													<option value="R1">Triple A</option>
													<option value="U1">Urban</option>
													<option value="U2">Urban/R&amp;B</option>
												</select>
											</div>
										</div>
										
										<input type="submit" class="btn btn-primary" value="Get Report" />
									</form>
								</div>
								
								<table class="table table-striped">
									<thead class="table-secondary">
										<tr>
											<th>LW</th>
											<th>TW</th>
											<th>Artists</th>
											<th>Title</th>
											<th>TW</th>
											<th>LW</th>
											<th>Move</th>
											<th>Aud</th>
										</tr>
									</thead>
									
									<tbody class="table-group-divider">
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td><i class="fa-solid fa-up-long"></i> Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
									</tbody>
								</table>
							</div>
						
							<div class="tab-pane fade" id="tab-mb-stations">
								<div class="alert alert-dark">
									<form class="form form-adds">
										<div class="row">										
											<div class="col-12 col-sm-6 col-md-3">
												<label class="form-label" for="stations-by-format-options">Format</label>
												<select name="stations-by-format-options" class="form-select" id="stations-by-format-options">
													<option value="none" selected>Select a format ...</option>
													
													<option value="A1">AC</option>
													<option value="R2">Active Rock</option>
													<option value="A4">Adult Hits</option>
													<option value="R3">Alternative</option>
													<option value="Z5">Canada Country</option>
													<option value="Z6">Canada-Active Rock</option>
													<option value="Z7">Canada-Alternative Rock</option>
													<option value="Z2">Canada-Hot AC</option>
													<option value="Z4">Canada-Main AC</option>
													<option value="Z1">Canada-Top 40</option>
													<option value="X2">Christian AC</option>
													<option value="O1">Classic Hits</option>
													<option value="R4">Classic Rock</option>
													<option value="C1">Country</option>
													<option value="Y1">Dance</option>
													<option value="G1">Gospel</option>
													<option value="A2">Hot AC</option>
													<option value="L5">Latin Urban</option>
													<option value="L2">Regional Mexican</option>
													<option value="Y0">Rhythmic</option>
													<option value="U4">Rhythmic AC</option>
													<option value="J1">Smooth Jazz</option>
													<option value="L1">Spanish Contemporary</option>
													<option value="H1">Top 40</option>
													<option value="R1">Triple A</option>
													<option value="L3">Tropical Latin</option>
													<option value="U1">Urban</option>
													<option value="U2">Urban/R&amp;B</option>
												</select>
											</div>
										</div>
									</form>
								</div>
								
								<table class="table table-striped">
									<thead class="table-secondary">
										<tr>
											<th>LW</th>
											<th>TW</th>
											<th>Artists</th>
											<th>Title</th>
											<th>TW</th>
											<th>LW</th>
											<th>Move</th>
											<th>Aud</th>
										</tr>
									</thead>
									
									<tbody class="table-group-divider">
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td><i class="fa-solid fa-up-long"></i> Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
										
										<tr>
											<td>1</td>
											<td>1</td>
											<td><i class="fa-solid fa-up-long"></i> Tate Mcrae</td>
											<td>Greedy</td>
											<td>16542</td>
											<td>16299</td>
											<td>243</td>
											<td>46.681</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>


<?php
include 'includes/footer.php';
include 'includes/offcanvas-navigation.php';
?>



<!-- JQUERY FILES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/scripts/min/fontawesome.min.js"></script>
<script src="assets/scripts/min/bootstrap.bundle.min.js"></script>
<script src="assets/scripts/min/global.js"></script>

</body>
</html>