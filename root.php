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
							$ArSwRootInfo = getStarWarsRootInfo();
							echo "<pre>";
							print_r($ArSwRootInfo);
							echo "</pre>";
							echo "<hr />";
						?>						
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
<?php getFooter();?>