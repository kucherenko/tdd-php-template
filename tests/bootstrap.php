<?php

error_reporting(E_ALL);

/*
 * Determine the root, library, and tests directories of the project
 * distribution.
 */
$root    = realpath(dirname(dirname(__FILE__)));
$library = "$root/src";
$tests   = "$root/tests";

/**
 * Check that --dev composer installation was done
 */
if (!file_exists($root . '/vendor/autoload.php')) {
    throw new Exception(
        'Please run "php composer.phar install --dev" in root directory '
        . 'to setup unit test dependencies before running the tests'
    );
}

/*
 * Prepend the Mutateme library/ and tests/ directories to the
 * include_path. This allows the tests to run out of the box and helps prevent
 * loading other copies of the code and tests that would supercede
 * this copy.
 */
$path = array(
    $library, // required for `testCallingRegisterRegistersSelfAsSplAutoloaderFunction`
    get_include_path(),
);
set_include_path(implode(PATH_SEPARATOR, $path));

require __DIR__.'/../vendor/autoload.php';

/*
 * Unset global variables that are no longer needed.
 */
unset($root, $library, $tests, $path);