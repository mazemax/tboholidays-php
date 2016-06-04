<?php
/**
 * Author: M.Saad Siddiqui
 */

require '/vendor/autoload.php';

echo "<h1>TBOTechnology PHP Webservice Generator</h1>";
ignore_user_abort(true);    // Ignore user aborts and allow the script to run forever
set_time_limit(86400);      // Setting script execution time to 1 day

/*
 * Generate PHP classes from hotelservice.wsdl
 */
echo "Generating PHP classes from 1 of 1 WSDL files...<br/>";
$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'wsdl/hotelservice.wsdl',
        'outputDir' => 'webservice'
    ))
);
echo "Successfully generated PHP classes from hotelservice.wsdl <br/>";