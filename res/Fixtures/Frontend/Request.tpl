<?php
$autoloadFilepath = '{tfRoot}../../autoload.php';
if (!file_exists($autoloadFilepath)) {
    $autoloadFilepath = '{tfRoot}.Build/vendor/autoload.php';
}
require $autoloadFilepath;
\IchHabRecht\TestingFramework\Bootstrap\RequestBootstrap::setGlobalVariables({arguments});
\IchHabRecht\TestingFramework\Bootstrap\RequestBootstrap::executeAndOutput();
