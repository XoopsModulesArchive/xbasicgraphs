<?php
include ("../../../mainfile.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph_bar.php");

// We need some data
$datay=array(-0.13,0.25,-0.21,0.35,0.31,0.04,0.52,0.34,0.12,-0.24,-0.13, 0.43);
$datax=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

// Setup the graph. 
$graph = new Graph(500,200,"auto");	
$graph->img->SetMargin(60,150,30,50);
$graph->SetScale("textlin");
$graph->SetMarginColor("silver");
$graph->SetShadow();

// Set up the title for the graph
$graph->title->Set("Sales Deviation 2008 vs 2007");
$graph->title->SetFont(FF_FONT2,FS_BOLD);
$graph->title->SetColor("darkred");

// Setup font for axis
$graph->xaxis->SetFont(FF_FONT1,FS_NORMAL);
$graph->yaxis->SetFont(FF_FONT1,FS_NORMAL);

// Show 0 label on Y-axis (default is not to show)
$graph->yscale->ticks->SupressZeroLabel(false);

// Setup X-axis labels
$graph->xaxis->SetTickLabels($datax);
//$graph->xaxis->SetLabelAngle(50);

// Set X-axis at the minimum value of Y-axis (default will be at 0)
$graph->xaxis->SetPos("min");	// "min" will position the x-axis at the minimum value of the Y-axis

// Create the bar pot
$bplot = new BarPlot($datay);
$bplot->SetWidth(0.6);
$bplot->SetLegend("Result 2008","blue");

// Setup color for gradient fill style 
$bplot->SetFillGradient("navy","steelblue",GRAD_MIDVER);

// Set color for the frame of each bar
$bplot->SetColor("navy");
$graph->Add($bplot);

// Finally send the graph to the browser
$graph->Stroke();
?>
