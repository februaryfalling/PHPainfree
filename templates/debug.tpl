<?php
	// This is a lightweight Debugging template. It basically just demonostrates
	// how to use the debugging mechanisms provided by $Painfree.

	// In most cases, you would really only want to have your primary
	// template load a debugging template like this during development
	// or for your development account. Use your own judgement.

	// this is an example just for fun. You can call $Painfree->debug()
	// wherever you want in your application and it would theoretically
	// be displayed in this template.
	$Painfree->debug('DebugExamples', 'Please be aware that there are several $Painfree->debug() calls made in templates/debug.tpl to be used as examples. You should probably remove them.');
	$TestArray = array('this_is' => 'a simple dummy array.', 'example' => array(1,2,3));
	$Painfree->debug('$TestArray', $TestArray);
	
	$Painfree->debug('$PainfreeConfig', $PainfreeConfig);

	$Painfree->debug('EXAMPLE', 'You can basically pass anything to $Painfree->debug().');
?> 
<div id="debug">
	<h2>
		PHPainfree Debugging Console 
		<span id="painfree_exec_time">[exec: <?php echo sprintf('%0.4f', (microtime(true) - $__painfree_start_time)) . 's'; ?>]</span>
	</h2>
<?php
	$debug_cnt = 0;
	foreach ( $Painfree->__debug as $heading => $obj_dump ) {
		$debug_cnt = $debug_cnt + 1;
?> 
	<h3 id="debug_heading_<?php echo $debug_cnt; ?>" class="debug_heading open">
		<?php echo $debug_cnt; ?>. <?php echo $heading; ?>
	</h3>
	<div id="debug_<?php echo $debug_cnt; ?>" class="debug_output open">
		<pre><strong><?php echo $heading; ?></strong> = <?php echo $obj_dump; ?></pre>
	</div>
<?php
	}
?> 
</div>
