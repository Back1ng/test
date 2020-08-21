<?php

use App\Database\Configuration;
use App\Database\DB;
use App\Writer\BranchWriter;

require '../vendor/autoload.php';

$route = explode("?", $_SERVER["REQUEST_URI"])[0];

if ($route === "/") {

    $db = new DB();
    $branches = $db->findAll('branches');

    require "../views/index.html";

} elseif ($route === "/details") {
    $db = new DB();
    $branches = $db->previewBranch($_POST['branchID']);

    $writer = new BranchWriter();
    $writer->write($branches);
}