<?php require_once 'stwapi.php'; ?>
<?php require_once 'util.php'?>
<?php getHeader(); ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">				
				<hr />
					<div class="card">						
						<div class="card-body">
						<h4 class="card-title">SWAPI The Star Wars API Films ::</h4>
						<?php
							$total = ($_GET['p'] > 1) ? $_GET['p'] + 5 : 5;
							for ($i = $_GET['p']; $i <= $total ; $i++) {
								foreach (getStarWarsFilmInfo($i) as $StWKey => $StWValue)
								{
									if (!is_array($StWValue))
										echo $StWKey. ": ". $StWValue. "<br />";
								}
								echo "<hr />";	
							}
						?>
						<nav aria-label="Page navigation example">
						  <?php						      
						      $i = ($_GET['p'] >= 5) ? $_GET['p'] : 5;					      
						  ?>
						  <ul class="pagination">
						    <li class="page-item">
						    	<a class="page-link" href="<?="?p=".$i-=5?>">Previous</a>
						    </li>
						    <li class="page-item">
						    	<a class="page-link" href="<?="?p=".$i?>">1</a>
						    </li>
						    <li class="page-item">
						    	<a class="page-link" href="<?="?p=".$i+=5?>">2</a>
						    </li>
						    <li class="page-item">
						    	<a class="page-link" href="<?="?p=".$i+=5?>">3</a>
						    </li>
						    <li class="page-item">
						    	<a class="page-link" href="<?="?p=".$i+=5?>">Next</a>
						    </li>
						  </ul>
						</nav>						
						</div>
					</div>						
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-12">	
				<div class="card" style="">
													
					</div>
				</div>
			</div>			
		</div>	
<?php getFooter(); ?>