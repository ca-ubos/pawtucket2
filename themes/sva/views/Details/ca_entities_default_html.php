<?php
	$t_item = $this->getVar("item");
	$va_comments = $this->getVar("comments");
?>
	<div class="container">
		<div class="row">
			<div class='col-md-12 col-lg-12'>
				<div class='objTitle'>{{{^ca_entities.preferred_labels.displayname}}}</div>
			</div><!-- end col -->
		</div><!-- end row -->
		<div class="row">			
			<div class='col-md-12 col-lg-12 content'>
<?php			
		if ($va_bio = $t_item->get('ca_entities.biography',array('convertLineBreaks' => true))) {	
			print "<h1>Biographical Note</h1>";
			print"<p>".$va_bio."</p>";
		}
		print "<div style='width:500px;clear:left;height:1px;'></div>";

		# --- entities
		$va_entities = $t_item->get("ca_entities", array("returnAsArray" => 1, 'checkAccess' => $va_access_values));
		$va_occurrences = $t_item->get("ca_occurrences", array("returnAsArray" => 1, 'checkAccess' => $va_access_values));
		$va_collections = $t_item->get("ca_collections", array("returnAsArray" => 1, 'checkAccess' => $va_access_values, 'restrictToTypes' => array('collection')));

		if ((sizeof($va_entities) > 0 ) | (sizeof($va_occurrences) > 0 ) | (sizeof($va_collections) > 0 )) {	

?>
			<h1><?php print _t("Related events"); ?></h1>
			<ul>
<?php
			foreach($va_occurrences as $va_occurrence) {
				print "<li>".caNavLink($this->request, $va_occurrence["label"], '', '', 'Detail', 'occurrences/'.$va_occurrence["occurrence_id"])."</li>\n";
			}
?>
			</ul>
			<h1><?php print _t("Links"); ?></h1>
			<ul>
<?php
			if ($va_entities) {
				foreach($va_entities as $va_entity) {
					print "<li>".caNavLink($this->request, $va_entity["label"], '', '', 'Detail', 'entities/'.$va_entity["entity_id"])."</li>\n";
				}
			}
			if ($va_collections) {
				foreach($va_collections as $va_collection) {
					print "<li>".caNavLink($this->request, $va_collection["label"], '', '', 'Detail', 'collections/'.$va_collection["collection_id"])."</li>\n";
				}
			}		
?>
			</ul>
<?php
		}
?>					
			</div><!-- end col -->
		</div><!-- end row -->
{{{<ifcount code="ca_objects" min="2">
		<div class="row">
			<div id="browseResultsContainer">
				<?php print caBusyIndicatorIcon($this->request).' '.addslashes(_t('Loading...')); ?>
			</div><!-- end browseResultsContainer -->
		</div><!-- end row -->
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery("#browseResultsContainer").load("<?php print caNavUrl($this->request, '', 'Search', 'objects', array('search' => 'entity_id:^ca_entities.entity_id'), array('dontURLEncodeParameters' => true)); ?>", function() {
					jQuery('#browseResultsContainer').jscroll({
						autoTrigger: true,
						loadingHtml: '<?php print caBusyIndicatorIcon($this->request).' '.addslashes(_t('Loading...')); ?>',
						padding: 20,
						nextSelector: 'a.jscroll-next'
					});
				});
				
				
			});
		</script>
</ifcount>}}}
	</div><!-- end container -->