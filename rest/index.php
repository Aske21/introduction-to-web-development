<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/basedao.php";

$test = new BaseDao();
echo "Hello from API";

?>