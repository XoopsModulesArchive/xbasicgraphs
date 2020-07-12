<?php
include ("../../../mainfile.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph_pie.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph_pie3d.php");

// Some data
$data = array(4366,5432,2302,3719,10435, 7455);

// Create the Pie Graph.
$graph = new PieGraph(500,250,"auto");
$graph->SetShadow();


// Set A title for the plot
$graph->title->Set("Web Traffic for Jan 2009");
$graph->title->SetFont(FF_FONT2,FS_BOLD); 
$graph->title->SetColor("darkblue");
$graph->legend->Pos(0.05,0.15);

// Create 3D pie plot
$p1 = new PiePlot3d($data);
$p1->SetTheme("pastel");
$p1->SetCenter(0.4);
$p1->SetSize(0.45);
$p1->SetHeight(5);

// Adjust projection angle
$p1->SetAngle(45);

// You can explode several slices by specifying the explode
// distance for some slices in an array
$p1->Explode(array(0,40,0,30));

// As a shortcut you can easily explode one numbered slice with
// $p1->ExplodeSlice(3);

$p1->value->SetFont(FF_FONT1,FS_NORMAL,10);
$p1->SetLegends(array("Australia","Great Britain","Europe","China","United States","Other"));

$graph->Add($p1);
$graph->Stroke();

?>


