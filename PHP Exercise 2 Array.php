
<?php
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
		foreach ($cities as $c) {
			echo $c.', ';
		}				
		sort($cities);
			echo "<ul>";
		foreach ($cities as $c) {
			echo "<li>". $c ."</li>";
		}
			echo "</ul>";
		array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
		sort($cities);
		echo "<ul>";
		foreach ($cities as $c) {
			echo "<li>". $c ."</li>";
		}
		echo "</ul>";	
		
		?>