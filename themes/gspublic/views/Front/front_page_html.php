<?php
/** ---------------------------------------------------------------------
 * themes/default/Front/front_page_html : Front page of site 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * @package CollectiveAccess
 * @subpackage Core
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License version 3
 *
 * ----------------------------------------------------------------------
 */
?>
	<div class="row frontBand about">
		<div class="col-sm-8" style='padding-left:0px;'>
			<?php print caGetThemeGraphic($this->request, 'about_wideslide.jpg'); ?>
		</div>
		<div class="col-sm-4 textRight">
			<H1>Welcome to the Girl Scouts of the USA Collections</H1>
			<p>
				The collection of the Girl Scouts of the USA documents the history of the world’s largest female-led global organization for girls. 
			</p>
		</div><!--end col-sm-8-->
	
	</div><!-- end row -->
	<div class="row frontBand gallery">
		<div class="col-sm-4 textLeft">
			<h1>Featured Galleries</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia ex eu nisi mattis, id sollicitudin mauris sollicitudin. Aliquam eleifend eros tortor, id fringilla lacus ultrices non. </p>
<?php
			print caNavLink($this->request, 'More', 'btn-default', '', 'Gallery', 'Index');
?>		
		</div>	
		<div class="col-sm-8" style='padding-right:0px;'>
			<?php print caGetThemeGraphic($this->request, 'gallery_wideslide.jpg'); ?>		
		</div>
	</div>	
	<div class="row frontBand browse">
		<div class="col-sm-8" style='padding-left:0px;'>
			<?php print caGetThemeGraphic($this->request, 'browse_wideslide.jpg'); ?>	
		</div>	
		<div class="col-sm-4 textRight">
			<h1>Browse People and Objects</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia ex eu nisi mattis, id sollicitudin mauris sollicitudin. Aliquam eleifend eros tortor, id fringilla lacus ultrices non. </p>
<?php
			print caNavLink($this->request, 'Browse Objects', 'btn-default', '', 'Browse ', 'objects');
			print caNavLink($this->request, 'Browse People', 'btn-default', '', 'Browse ', 'entities');
?>			
		</div>	
	</div>	
	<div class="row frontBand collections">
		<div class="col-sm-4 textLeft">
			<h1>Explore Collections</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia ex eu nisi mattis, id sollicitudin mauris sollicitudin. Aliquam eleifend eros tortor, id fringilla lacus ultrices non. </p>
<?php
			print caNavLink($this->request, 'More', 'btn-default', '', 'Collections', 'Index');
?>			
		</div>		
		<div class="col-sm-8" style='padding-right:0px;'>
			<?php print caGetThemeGraphic($this->request, 'collection_wideslide.jpg'); ?>	
		</div>	
	</div>				
