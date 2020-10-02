<?php
// This stub is not included in the PHAR.  It is used mainly for loading classes for testing.
if (strpos(__FILE__, ".phar") === false) {
    define('DEPENDENCY_MANAGER_PHAR', __DIR__ . "/phars/php-dependency-manager.phar");
    require_once("phar://" . DEPENDENCY_MANAGER_PHAR . "/src/class-dependency-manager.php");
    // dependency_manager::$log_dump = true;
    dependency_manager(__DIR__ . "/dependencies.xml", __DIR__ . "/phars/");
}

require_once("sbs.php");
require_once("sbs_feedload.php");

__HALT_COMPILER();
