<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//  Author:     Tank                                                         //
//  Website:    http://www.customvirtualdesigns.com                          //
//  E-Mail:     tanksplace@comcast.net                                       //
//  Date:       02/11/2009                                                   //
//  Module:     X Basic Graphs                                               //
//  File:       language/english/modinfo.php                                 //
//  Version:    0.9                                                          //
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 0.9  Initial Release 02/11/2009                                  //
//  ***                                                                      //

define("_MI_XBG_MODULETITLE","X Basic Graphs");

// Template page descriptions
define("_MI_XBG_OPENINGPAGE","Using X Basic Graphs with JPGraph Library In Your Xoops Modules");
define("_MI_XBG_GETDATA","Get The Data To Be Used In Graphs");
define("_MI_XBG_BASICS","The Basics Of Using X Basic Graphs");

// Basics page paragraph text
define("_MI_XBG_BASICSPARA1","After you have successfully installed this module we recommend going to the group permissions
and restrict access to the module. Visitors will still be able to see the graphs you create.");
define("_MI_XBG_BASICSPARA2","We have provided a few examples that show how to get the data from database tables and create
your own graphs (refer to Get The Data). It is a 2 step process. First you create the php file for generating the graph
and store this in the graphs subdirectory within this module. The second step is to create an html
image tag on the page where you want the graph to appear defining the image source as the php
file that you created.");
define("_MI_XBG_BASICSPARA3","This module isn't really a true module when compared to other modules used within XOOPS.
It is really more like a structure containing the JPGraph Library, some examples to get you started and
a graphs subdirectory so you have a central location for storing and organizing all of the graph creation
php files you can use throughout the site.");
define("_MI_XBG_BASICSPARA4","You don't have to use this module to add JPGraphs to your site. If you feel so inclined you can simply
download the JPGraph Library at <a href='http://www.aditus.nu/jpgraph/jpdownload.php' target='_blank'>JPGraph Download</a>
and place it in your XOOPS /class/ directory. It will then be up to you where you store the graph php files
and your TrueType fonts. The inclusion and use of TrueType fonts is optional as the JPGraph Library contains basic bit-map
fonts as the default.");
define("_MI_XBG_BASICSPARA5","The user's manual and class documentation are included as part of the JPGraph Library download but have not been
provided in the X Basic Graphs module due to it's size. The documentation is approx 4.5 Meg in zipped format. You can
access the documentation for viewing at <a href='http://www.customvirtualdesigns.com/modules/basicgraphs/docs/index.php' target='_blank'>
Custom Virtual Designs Documentation Portal</a>. For additional JPGraph information you can visit <a href='http://www.aditus.nu/jpgraph/index.php' target='_blank'>
JPGraph Website</a>.");

// GetData page paragraph text
define("_MI_XBG_GETDATAPARA1","All of the examples appearing in the user's manual contain hard-coded data arrays and this works
fine for data that isn't going to change such as web site traffic stats for last year. But what
if you are using dynamic data such as contributions received so far for this month or sales-to-date.
We will look at one option for getting the data to be used within the php file that will
be generating the graph image.");
define("_MI_XBG_GETDATAPARA2","Let's say you have a module that stores data in a database table and you want to use this data to
generate a bar graph. For this example we will use voters in election districts. The database table
contains the number of registered voters and the number of votes tallied for each district. Our graph
will display the Percent of Voter Turnout for each district.");
define("_MI_XBG_GETDATAPARA3","Another example of extracting data, this time from the xoops core database tables. This example
will work on any XOOPS site (given you are operating with PHP5).");

// Opening page paragraph text
define("_MI_XBG_OPENINGPARA1","Here are just a few examples of the type of graphs and charts you can generate using X Basic Graphs.
For more examples you can review the user's manual at <a href='http://www.customvirtualdesigns.com/modules/basicgraphs/docs/index.php' target='_blank'>
Custom Virtual Designs Documentation Portal</a>. The manual is provided by Aditus Consulting.
The only modification made to the manual is the addition of a link back to X Basic Graphs module
on the opening Documentation Portal page.");

?>
