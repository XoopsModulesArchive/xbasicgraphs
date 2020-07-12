<?php

include ("../../../../mainfile.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph.php");
include (XOOPS_ROOT_PATH."/modules/xbasicgraphs/class/xgraphs/jpgraph/jpgraph_bar.php");

global $xoopsDB;

$datay = array();
$datax = array();

// Get the data
$result = $xoopsDB->query("SELECT * FROM ".$xoopsDB->prefix("users")." WHERE level > 0 ORDER BY user_regdate");

$regarray = array();

while ($row = $xoopsDB->fetcharray($result)) {
  $registration_date = $row['user_regdate'];
  
  $tempDate = $dateArray=explode(',',strftime("%Y,%m,%d,%I,%M,%p",time()));
  $currentmonth = (int)$tempDate[1];
  $currentyear = $tempDate[0];

  $startDate = mktime(0, 0, 0, date("m")-6, date("d"),   date("Y"));
  $tempDate = $dateArray=explode(',',strftime("%Y,%m,%d,%I,%M,%p",$startDate));
  $startmonth = (int)$tempDate[1];
  $startyear = $tempDate[0];

  $tempDate = $dateArray=explode(',',strftime("%Y,%m,%d,%I,%M,%p",$registration_date));
  $month = (int)$tempDate[1];
  $year = $tempDate[0];
  if ($year == $startyear && $month >= $startmonth) {
    $regarray[$month - $startmonth] = $regarray[$month - $startmonth] + 1;
  }elseif ($year > $startyear) {
    $regarray[(12 - $startmonth) + $month] = $regarray[(12 - $startmonth) + $month] + 1;
  }
}

$datay = $regarray;

// Generate the month with year labels for the x axis
while ($count < 7) {
  $count++;
  $labelDate = mktime(0, 0, 0, date("m")-(7-$count), date("d"),   date("Y"));
  $tempDate = $dateArray=explode(',',strftime("%Y,%m,%d,%I,%M,%p",$labelDate));
  $tempDateString = date('M Y', mktime(0, 0, 0, $tempDate[1], $tempDate[2], $tempDate[0]));
  $datax[] = $tempDateString;
}

// Create the graph. These two calls are always required
$graph = new Graph(500,300,"auto");    
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(30);

$graph->xaxis->SetTickLabels($datax);
$graph->xaxis->SetLabelAngle(90);

// Add a drop shadow
$graph->SetShadow();

// Adjust the margin a bit to make more room for titles
$graph->img->SetMargin(50,50,40,100);
$graph->SetMarginColor('lightred');

// Create a bar pot
$bplot = new BarPlot($datay);

// Adjust fill color
$bplot->SetFillColor('darkred');
$bplot->value->Show();
$bplot->value->SetFormat('%d');
$graph->Add($bplot);

// Setup the titles
$graph->title->Set("New User Registration In The Last 6 Months");
//$graph->xaxis->title->Set("Month");
$graph->yaxis->title->Set("Number of New Users");

$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// Display the graph
$graph->Stroke();

?>
