		<?php 
			get_template_part( 'menu', 'extra-menu' );
		?>

		<span>Cocomsys footer.</span>
		
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		
		<script type="text/javascript">
			$('.menu-item-has-children').addClass('dropdown');
			$('.menu-item-has-children > a').addClass('dropdown-toggle');
			$('.menu-item-has-children > a' ).attr( "data-toggle", "dropdown");
			$('.menu-item-has-children > a' ).attr( "data-role", "button");
			$('.menu-item-has-children > a' ).attr( "aria-expanded", "false");
			$('.sub-menu').addClass('dropdown-menu');
			$('.sub-menu' ).attr( "role", "menu");
			$(".menu-item-has-children a" ).append( $( "<span class='caret'></span>"));
			$('.current-menu-item').addClass('active');
			$('.side').addClass('col-xs-12 col-sm-4');
	
		</script>

		<!-- Admin menu Bar login-->
		<?php wp_footer();?>
    <img src="">
	</body>
</html>




<div class="summary entry-summary col-md-12" style="margin-top: 0px;">
	<h2 itemprop="name" class="product_title entry-title">Metropolitano</h2>
	
	<div class="app-meta">
		<div class="row">
    		<div class="col-md-12">
            	<div class="media">
					<div class="pull-left"><i class="fa fa-user"></i></div>
					<div class="media-body">
                		Author
                		<div class="media-heading">Cocomsys</div>
					</div>
            	</div>
        	</div>
            
	        <div class="col-md-12">
	        	<div class="media">
					<div class="pull-left"><i class="fa fa-calendar"></i></div>
					<div class="media-body">
	                	Release
	                	<div class="media-heading">2014-10-15</div>
					</div>
	            </div>
	        </div>
	    </div>

	</div>

	<div class="row">
		<div class="col-md-12">
	        <div class="media">
				<div class="pull-left"><i class="fa fa-laptop"></i></div>
				<div class="media-body">
	               	Descripción.
	               	<div class="media-heading">Sitio web Hospital Metropolitano Managua, Nicaragua</div>
				</div>
	        </div>
	    </div>
	</div>

</div>