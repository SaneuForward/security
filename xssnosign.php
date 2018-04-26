<!-- Search Page -->
<!DOCTYPE html>
<html>
	<head>
		<title>Search Page</title>
		<style type="text/css">
			*{font-family:sans-serif;}
			body{width:30%;margin:auto;}
			p{color:#d00;}
		</style>
	</head>
	<body>
		<h1>Search Page</h1>
		<form>
			Search: 
			<input type="text" name="srch" placeholder="type something to search..."/>
			<input type="submit" value="Search"/>
			<?php
				if(!empty($_GET['srch'])){
					$srch=str_replace('<','&lt;',$_GET['srch']);
					$srch=str_replace('>','&gt;',$srch);
					echo '<p>No Result for <a href="?srch='.$srch.'">'.$srch.'</a></p>';
				}
			?>
		</form>
	</body>
</html>