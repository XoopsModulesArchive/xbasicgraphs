<?php
include ("../../../mainfile.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph_line.php");

$ydata = array(11,37,22,42,45,31,29,13,32,16,23,27);
$datax = array("Jan","Feb","Mar","Apr","Maj","Jun","Jul","aug","Sep","Oct","Nov","Dec");

// Create the graph. These two calls are always required
$graph = new Graph(500,200,"auto");
$graph->SetScale("textlin");

$graph->img->SetMargin(40,110,20,50);
$graph->SetShadow();

$graph->ygrid->Show(true,false);
$graph->xgrid->Show(true,false);

// Specify the tick labels
$a = $gDateLocale->GetShortMonth();
$graph->xaxis->SetTickLabels($a);
//$graph->xaxis->SetTextLabelInterval(2);
$graph->xaxis->SetLabelAngle(90);


// Create the linear plot
$lineplot=new LinePlot($ydata);

// Add the plot to the graph
$graph->Add($lineplot);

$graph->title->Set("Contributions for 2008");
//$graph->xaxis->title->Set("X-title");
//$graph->yaxis->title->Set("Donations");

$graph->title->SetFont(FF_FONT2,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

$lineplot->SetColor("blue");
$lineplot->SetWeight(2);

$graph->yaxis->SetColor("blue");

$lineplot->SetLegend("# Donators");

$graph->legend->Pos(0.05,0.15,"right","center");

// Display the graph
$graph->Stroke();
?>
