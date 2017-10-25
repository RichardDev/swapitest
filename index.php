<?php require_once 'stwapi.php'; ?>
<?php require_once 'util.php'?>
<?php getHeader();?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">				
				<hr />
					<div class="card">						
						<div class="card-body">
						<h4 class="card-title">SWAPI The Star Wars API::</h4>
						<?php	
							/* for ($i = 1; $i <=5 ; $i++)
							{
								foreach (getStarWarsPlanetIfo($i) as $StWKey => $StWValue)
								{
									if (!is_array($StWValue))
										echo $StWKey. ": ". $StWValue. "<br />";
								}
								echo "<hr />";	
							} */
						?>						
						</div>
					</div>						
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-12">	
				<div class="card" style="">
					<a href="https://www.youtube.com/watch?v=rLvyF7-2CTU" target="blank">
						<img class="img-fluid" src="img/drsin_starwars.jpg" width="600px" alt="May the Dr Sin be With You!">
					</a>
					<div class="card-body">
						<!-- <p class="card-text">One of my favorite band.</p> -->
						<h4 class="card-text">Dr Sin says May the force be with you!</h4>
						
						</div>								
					</div>
				</div>
			</div>			
		</div>	
<?php getFooter();?>