<?php
$page = array_key_exists('page', $_GET) ? $_GET['page'] : null ;
if (!is_null($page)) {
  include($page);
} else {
  echo "Aucune page à inclure...";
}
?>
