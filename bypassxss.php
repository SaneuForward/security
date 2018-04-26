<!-- Test de bypass HTMLENTITIES -->
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
		<h1>Recherche</h1>
		<form>
			XSS: 
			<input type="text" name="srch" placeholder="taper quelque chose..."/>
			<input type="submit" value="Rechercher"/>
			<?php
				if(!empty($_GET['srch'])){
					$srch=htmlentities($_GET['srch']);
					echo '<p>No Result for <a href="'.$srch.'">'.$srch.'</a></p>';
				}
			?>
		</form>
	</body>
</html>