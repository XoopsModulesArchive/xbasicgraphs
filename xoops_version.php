<?php
//
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
//  File:       xoops_version.php                                            //
//  Version:    0.9                                                          //
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 0.9  Initial Release 02/11/2009                                  //
//  ***                                                                      //

$modversion['name']		    = 'X Basic Graphs';
$modversion['version']		= 0.9;
$modversion['author']       = 'Tank';
$modversion['description']	= 'X Basic Graphs is a simple module to add JPGraph library to your site';
$modversion['credits']		= "";
$modversion['license']		= "GPL see LICENSE";
$modversion['help']		    = "";
$modversion['official']		= 0;
$modversion['image']		= "images/logo.png";
$modversion['dirname']		= 'xbasicgraphs';

$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Admin things
//$modversion['hasAdmin']		= 1;
//$modversion['adminindex']	= "admin/index.php";
//$modversion['adminmenu']	= "admin/menu.php";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "voterinfo";

// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = "The Basics";
$modversion['sub'][1]['url'] = "index.php?op=basics";
$modversion['sub'][2]['name'] = "Get The Data";
$modversion['sub'][2]['url'] = "index.php?op=getthedata";

// Templates
$modversion['templates'][1]['file'] = 'openingdisplay.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'getdata.html';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file'] = 'thebasics.html';
$modversion['templates'][3]['description'] = '';


?>
