<?php

require_once('SampleApp.php');

$environment = 'development';
//$environment = 'production';

SampleApp::loadConfig($environment);

SampleApp::bootstrap($environment);

SampleApp::registerRouting();

SampleApp::dispatch();

?>