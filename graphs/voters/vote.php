<?php

include ("../../../../mainfile.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph_bar.php");

global $xoopsDB;

$datay = array();
$datax = array();

// Get the data
$result = $xoopsDB->query("SELECT * FROM ".$xoopsDB->prefix("voterinfo")." WHERE voters_tot > 0 ORDER BY dist_id");

while ($row = $xoopsDB->fetcharray($result)) {
  $total_voters = $row['voters_tot'];
  $voter_turnout = $row['votes_count'];
  $vote_percent = (($voter_turnout * 100) / $total_voters);
  $datay[] = $vote_percent;
  $datax[] = $row['dist_id'];
}

// Create the graph. These two calls are always required
$graph = new Graph(500,300,"auto");    
$graph->SetScale("textlin");

$graph->xaxis->SetTickLabels($datax);
$graph->yaxis->scale->SetGrace(50);

// Add a drop shadow
$graph->SetShadow();

// Adjust the margin a bit to make more room for titles
$graph->img->SetMargin(40,30,20,40);

// Create a bar pot
$bplot = new BarPlot($datay);

// Adjust fill color
$bplot->SetFillColor('orange');
$bplot->value->Show();
$graph->Add($bplot);

// Setup the titles
$graph->title->Set("Voter Turnout By District");
$graph->xaxis->title->Set("District Number");
$graph->yaxis->title->Set("Turnout Percentage");

$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// Display the graph
$graph->Stroke();

?>
