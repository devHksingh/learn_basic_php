<?php
// 1 way 
// include 'config.php';
// Another way
require 'config.php';
/*
The include_once statement includes and evaluates the specified file during the execution of the script. This is a behavior similar to the include statement, with the only difference being that if the code from a file has already been included, it will not be included again. 

The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again.


*/
// require_once 'config.php';
// include_once 'config.php'
/*
include executes the code of the included file, while require merely imports the variables and functions from the file. include produces a warning if the file is not found, while require generates a fatal error.
*/
echo "Database $dbHost:$dbUser";