<?php
	// This is a lightweight Debugging template. It basically just demonostrates
	// how to use the debugging mechanisms provided by $Painfree.

	// In most cases, you would really only want to have your primary
	// template load a debugging template like this during development
	// or for your development account. Use your own judgement.

	// this is an example just for fun. You can call $Painfree->debug()
	// wherever you want in your application and it would theoretically
	// be displayed in this template.

	$TestArray = array('this_is' => 'a simple dummy array.', 'example' => array(1,2,3));
	$Painfree->debug('$TestArray', $TestArray);
	
	$Painfree->debug('$PainfreeConfig', $PainfreeConfig);

	$Painfree->debug('EXAMPLE', 'You can basically pass anything to $Painfree->debug().');
?> 

<div id="debug">
<?php
	foreach ( $Painfree->__debug as $heading => $obj_dump ) {
		echo '<pre><strong>' . $heading . '</strong> = ' . $obj_dump . '</pre>' . "\n\n";
	}
?>	
</div>
