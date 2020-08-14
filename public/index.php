<?php

use App\Database\Configuration;
use App\Database\DB;
use App\Writer\BranchWriter;

require '../vendor/autoload.php';

$route = explode("?", $_SERVER["REQUEST_URI"])[0];

if ($route === "/") {

    $configuration = new Configuration("mysql", "localhost", "testovoe", "root", "");
    $db = new DB($configuration);
    $branches = $db->findAll('branches');

    require "../views/index.html";

} elseif ($route === "/details") {
    $configuration = new Configuration("mysql", "localhost", "testovoe", "root", "");
    $db = new DB($configuration);
    $branches = $db->previewBranch($_POST['branchID']);

    $writer = new BranchWriter();
    $writer->write($branches);
}