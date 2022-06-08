<?php

/* include / require / include_once / require_once */

// not stopping script execution even if file 
// was not found or having an error or warning.
include 'file.php'; 

// stopping script execution and show 
// errors and warnings
require 'file.php';

echo 'hello world';

// same as `include` but it prevent other include 
// statements from including the same file again.
include_once 'file.php';

// same as `require` but it prevent other require
// statement from requiring the same file again.
require_once 'file.php';