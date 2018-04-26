<!-- Search Page -->
<!DOCTYPE html>
<html>
	<head>
		<title>Page de recherche</title>
		<style type="text/css">
			*{font-family:sans-serif;}
			body{width:30%;margin:auto;}
			p{color:#d00;}
		</style>
	</head>
	<body>
		<h1>Rechercher</h1>
		<form>
			Search:
			<input type="text" name="srch" placeholder="ecriver quelque chose..."/>
			<input type="submit" value="Search"/>
			<?php
				if(!empty($_GET['srch'])){
					echo '<p>Aucun resultat pour <a href="#">'.$_GET['srch'].'</a></p>';
				}
			?>
		</form>
	</body>
</html>
