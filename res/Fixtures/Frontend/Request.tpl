<?php
$autoloadFilepath = '{ntfRoot}../../autoload.php';
if (!file_exists($autoloadFilepath)) {
    $autoloadFilepath = '{ntfRoot}.Build/vendor/autoload.php';
}
require $autoloadFilepath;
\IchHabRecht\TestingFramework\Bootstrap\RequestBootstrap::setGlobalVariables({arguments});
\IchHabRecht\TestingFramework\Bootstrap\RequestBootstrap::executeAndOutput();
