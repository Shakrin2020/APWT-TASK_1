@include('inc.navbar') <br>

@foreach($names as $name)
	<h3> {{ $name }} </h3> 
	<?php 
		echo "<br>" 
	?>
@endforeach
