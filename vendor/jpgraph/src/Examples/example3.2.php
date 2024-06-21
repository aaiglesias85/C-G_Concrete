<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');

$ydata = array(11,3,8,12,5,1,9,15,5,7);

// Create the graph. These two calls are always required
$graph = new Graph(300,200);
$graph->clearTheme();	
$graph->SetScale("textlin");

// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->mark->SetType(MARK_CIRCLE);

// Add the plot to the graph
$graph->Add($lineplot);

$graph->img->SetMargin(40,20,20,40);
$graph->title->Set("Example 3.2");
$graph->xaxis->title->Set("X-title");
$graph->yaxis->title->Set("Y-title");

$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

$lineplot->SetColor("blue");
$lineplot->SetWeight(2);
$graph->yaxis->SetWeight(2);
$graph->SetShadow();

// Display the graph
$graph->Stroke();
?>
