<!-- begin sidebar_left -->

	<div id="sidebar" class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
        		<h3 class="panel-title">Witgets</h3>
			</div>
			<div class="panel-body">
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) :
		
	 			else : 
	 
	 			?>
				<?php endif; ?>
			</div>  			
		</div>	
	</div>

<!-- end sidebar_left -->