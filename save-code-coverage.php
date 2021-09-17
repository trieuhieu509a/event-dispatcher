<?php
// require this file in top on your scipt
$filter = new \SebastianBergmann\CodeCoverage\Filter();
$filter->includeDirectory(__DIR__ . '/html');
$filter->includeDirectory(__DIR__ . '/src');
$filter->includeDirectory(__DIR__ . '/views');
// add filter for code coverage to run in fixed folder
$codeCoverage = new \SebastianBergmann\CodeCoverage\CodeCoverage(
    (new \SebastianBergmann\CodeCoverage\Driver\Selector())->forLineCoverage($filter),
    $filter
);

$codeCoverage->start($_SERVER['REQUEST_URI']); // start code coverage collection ( a test name, request uri )

function save_coverage()
{
    global $codeCoverage;
    $codeCoverage->stop();
    (new \SebastianBergmann\CodeCoverage\Report\PHP())->process($codeCoverage, '/var/www/html/xdebug_request_output/' . bin2hex(random_bytes(16)). '.cov');
}

register_shutdown_function('save_coverage');
?>