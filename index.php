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
//  File:       index.php                                                    //
//  Version:    0.9                                                          //
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 0.9  Initial Release 02/11/2009                                  //
//  ***                                                                      //

include ("../../mainfile.php");
include_once XOOPS_ROOT_PATH.'/header.php';
include 'include/functions.php';

global $xoopsDB, $xoopsConfig;

if (file_exists('language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php')) {
  include_once 'language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php';
}else{
  include_once 'language/english/modinfo.php';
}

if (isset($HTTP_GET_VARS['op'])) $op=$HTTP_GET_VARS['op'];
if (isset($HTTP_POST_VARS['op'])) $op=$HTTP_POST_VARS['op'];
$PHP_SELF = $_SERVER["PHP_SELF"];

$myts =& MyTextSanitizer::getInstance();

switch($op) {

  case "getthedata":

	$xoopsOption['template_main'] = 'getdata.html';
	include XOOPS_ROOT_PATH.'/header.php';

    $xoopsTpl->assign('langmodtitle', _MI_XBG_MODULETITLE);
    $xoopsTpl->assign('langpagedesc', _MI_XBG_GETDATA);
	$xoopsTpl->assign('langparagraph1', _MI_XBG_GETDATAPARA1);
	$xoopsTpl->assign('langparagraph2', _MI_XBG_GETDATAPARA2);
	$xoopsTpl->assign('langparagraph3', _MI_XBG_GETDATAPARA3);
    	
	$xoopsTpl->assign('voterturnout', XOOPS_URL."/modules/xbasicgraphs/graphs/voters/vote.php");
	$xoopsTpl->assign('userreg', XOOPS_URL."/modules/xbasicgraphs/graphs/corecode/user.php");

    break;
  
  case "basics":
  
	$xoopsOption['template_main'] = 'thebasics.html';
	include XOOPS_ROOT_PATH.'/header.php';
    
    $xoopsTpl->assign('langmodtitle', _MI_XBG_MODULETITLE);
	$xoopsTpl->assign('langpagedesc', _MI_XBG_BASICS);
	$xoopsTpl->assign('langparagraph1', _MI_XBG_BASICSPARA1);
	$xoopsTpl->assign('langparagraph2', _MI_XBG_BASICSPARA2);
	$xoopsTpl->assign('langparagraph3', _MI_XBG_BASICSPARA3);
	$xoopsTpl->assign('langparagraph4', _MI_XBG_BASICSPARA4);
	$xoopsTpl->assign('langparagraph5', _MI_XBG_BASICSPARA5);

    break;
 
  default:

	$xoopsOption['template_main'] = 'openingdisplay.html';
	include XOOPS_ROOT_PATH.'/header.php';

	$xoopsTpl->assign('langmodtitle', _MI_XBG_MODULETITLE);
	$xoopsTpl->assign('langpagedesc', _MI_XBG_OPENINGPAGE);
	$xoopsTpl->assign('langparagraph1', _MI_XBG_OPENINGPARA1);
	
	$xoopsTpl->assign('graphex1', XOOPS_URL."/modules/xbasicgraphs/graphs/sales2008deviation.php");
	$xoopsTpl->assign('graphex2', XOOPS_URL."/modules/xbasicgraphs/graphs/webtraffic2008.php");
 	$xoopsTpl->assign('graphex3', XOOPS_URL."/modules/xbasicgraphs/graphs/contributions2008.php");
   
    break;
}

include_once XOOPS_ROOT_PATH.'/footer.php';

?>