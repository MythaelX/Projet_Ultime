<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: time.hpp File Reference</title>
<link href="../../tabs.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../jquery.js"></script>
<script type="text/javascript" src="../../dynsections.js"></script>
<link href="../../navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../resize.js"></script>
<script type="text/javascript" src="../../navtreedata.js"></script>
<script type="text/javascript" src="../../navtree.js"></script>
<script type="text/javascript">
  $(document).ready(initResizable);
  $(window).load(resizeHeight);
</script>
<link href="../../search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../search/searchdata.js"></script>
<script type="text/javascript" src="../../search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
<link href="../../doxygen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top"><!-- do not remove this div, it is closed by doxygen! -->
<div id="titlearea">
<table cellspacing="0" cellpadding="0">
 <tbody>
 <tr style="height: 56px;">
  <td id="projectalign" style="padding-left: 0.5em;">
   <div id="projectname">Hot Dog QUIZ
   &#160;<span id="projectnumber">2.0</span>
   </div>
  </td>
 </tr>
 </tbody>
</table>
</div>
<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "../../search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="../../index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="../../pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="../../namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="../../annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="../../files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="../../search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="../../search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="../../files.php"><span>File&#160;List</span></a></li>
      <li><a href="../../globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div id="side-nav" class="ui-resizable side-nav-resizable">
  <div id="nav-tree">
    <div id="nav-tree-contents">
      <div id="nav-sync" class="sync"></div>
    </div>
  </div>
  <div id="splitbar" style="-moz-user-select:none;" 
       class="ui-resizable-handle">
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){initNavTree('d4/d7d/a00093.php','../../');});
</script>
<div id="doc-content">
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<iframe src="javascript:void(0)" frameborder="0" 
        name="MSearchResults" id="MSearchResults">
</iframe>
</div>

<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">time.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;ctime&gt;</code><br />
<code>#include &lt;thread&gt;</code><br />
<code>#include &lt;mutex&gt;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for time.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d8/d00/a00186.png" border="0" usemap="#time_8hpp" alt=""/></div>
<map name="time_8hpp" id="time_8hpp">
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/daa/a00187.png" border="0" usemap="#time_8hppdep" alt=""/></div>
<map name="time_8hppdep" id="time_8hppdep">
<area shape="rect" id="node2" href="../../da/d24/a00068.php" title="errors.hpp" alt="" coords="409,80,489,107"/>
<area shape="rect" id="node4" href="../../d1/d6f/a00063.php" title="defines.hpp" alt="" coords="233,229,323,256"/>
<area shape="rect" id="node18" href="../../d9/d2e/a00056.php" title="C++.hpp" alt="" coords="499,827,572,853"/>
<area shape="rect" id="node30" href="../../dc/dee/a00053.php" title="Args.hpp" alt="" coords="315,155,390,181"/>
<area shape="rect" id="node3" href="../../d4/d6d/a00055.php" title="bdd.hpp" alt="" coords="415,155,483,181"/>
<area shape="rect" id="node31" href="../../db/df8/a00076.php" title="Map.hpp" alt="" coords="485,229,557,256"/>
<area shape="rect" id="node5" href="../../da/d2a/a00086.php" title="QtFunctions.hpp" alt="" coords="5,453,124,480"/>
<area shape="rect" id="node16" href="../../d9/d73/a00060.php" title="Contraption.hpp" alt="" coords="286,304,401,331"/>
<area shape="rect" id="node29" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="103,677,200,704"/>
<area shape="rect" id="node6" href="../../df/d13/a00085.php" title="QtDefines.hpp" alt="" coords="211,901,318,928"/>
<area shape="rect" id="node7" href="../../df/d5d/a00084.php" title="Qt.hpp" alt="" coords="355,1200,417,1227"/>
<area shape="rect" id="node12" href="../../d2/db1/a00070.php" title="Font.hpp" alt="" coords="191,976,264,1003"/>
<area shape="rect" id="node13" href="../../d0/d61/a00100.php" title="WindowButton.hpp" alt="" coords="340,976,472,1003"/>
<area shape="rect" id="node8" href="../../dc/d54/a00094.php" title="TitleLabel.hpp" alt="" coords="476,1275,579,1301"/>
<area shape="rect" id="node10" href="../../d9/da5/a00075.php" title="MainWindow.h" alt="" coords="504,1424,612,1451"/>
<area shape="rect" id="node11" href="../../d1/dc1/a00092.php" title="TableWidget.hpp" alt="" coords="281,1275,401,1301"/>
<area shape="rect" id="node9" href="../../df/d5f/a00064.php" title="Dialog.hpp" alt="" coords="476,1349,560,1376"/>
<area shape="rect" id="node14" href="../../d4/d3a/a00101.php" title="WindowTitleBar.hpp" alt="" coords="362,1051,501,1077"/>
<area shape="rect" id="node15" href="../../da/d74/a00099.php" title="Window.hpp" alt="" coords="384,1125,479,1152"/>
<area shape="rect" id="node17" href="../../d9/db3/a00066.php" title="Entities.hpp" alt="" coords="490,677,581,704"/>
<area shape="rect" id="node21" href="../../d1/d51/a00079.php" title="Object.hpp" alt="" coords="301,379,386,405"/>
<area shape="rect" id="node22" href="../../dc/ddf/a00067.php" title="Entity.hpp" alt="" coords="588,379,669,405"/>
<area shape="rect" id="node20" href="../../d8/d53/a00081.php" title="Player.hpp" alt="" coords="533,752,617,779"/>
<area shape="rect" id="node19" href="../../d0/d89/a00071.php" title="functions.hpp" alt="" coords="599,1051,699,1077"/>
<area shape="rect" id="node23" href="../../d2/d79/a00051.php" title="Animal.hpp" alt="" coords="697,528,784,555"/>
<area shape="rect" id="node25" href="../../d1/d6e/a00073.php" title="Hostile.hpp" alt="" coords="717,453,805,480"/>
<area shape="rect" id="node26" href="../../d1/d84/a00097.php" title="Vegetal.hpp" alt="" coords="482,528,573,555"/>
<area shape="rect" id="node24" href="../../d1/d84/a00052.php" title="Ant.hpp" alt="" coords="738,603,805,629"/>
<area shape="rect" id="node27" href="../../da/dec/a00080.php" title="Plant.hpp" alt="" coords="535,603,613,629"/>
<area shape="rect" id="node28" href="../../d9/da4/a00078.php" title="Mushroom.hpp" alt="" coords="352,603,460,629"/>
</map>
</div>
</div>
<p><a href="../../d4/d7d/a00093_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/da0/a00009.php">Clock</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A clock to measure the elapsed time.  <a href="../../da/da0/a00009.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d42/a00043.php">Timer</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A timer to do something at the end.  <a href="../../d6/d42/a00043.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a5834b1cc3c766f7520e829ca23284546"><td class="memItemLeft" align="right" valign="top">std::time_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d7d/a00093.php#a5834b1cc3c766f7520e829ca23284546">getSec</a> ()</td></tr>
<tr class="memdesc:a5834b1cc3c766f7520e829ca23284546"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the number of seconds since the Epoch.  <a href="#a5834b1cc3c766f7520e829ca23284546">More...</a><br /></td></tr>
<tr class="separator:a5834b1cc3c766f7520e829ca23284546"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a61c3fca982e77f1f6899239b22b9ad79"><td class="memItemLeft" align="right" valign="top">std::time_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d7d/a00093.php#a61c3fca982e77f1f6899239b22b9ad79">getMilli</a> ()</td></tr>
<tr class="separator:a61c3fca982e77f1f6899239b22b9ad79"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>10 juin 2018 </dd></dl>

<p>Definition in file <a class="el" href="../../d4/d7d/a00093_source.php">time.hpp</a>.</p>
</div><h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="a61c3fca982e77f1f6899239b22b9ad79"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::time_t getMilli </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<dl class="todo"><dt><b><a class="el" href="../../d8/d84/a00001.php#_todo000004">Todo:</a></b></dt><dd>Return the milliseconds since the Epoch </dd></dl>

</div>
</div>
<a class="anchor" id="a5834b1cc3c766f7520e829ca23284546"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::time_t getSec </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the number of seconds since the Epoch. </p>
<dl class="section return"><dt>Returns</dt><dd>Return the number of seconds </dd></dl>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_9cc7dab42d10c04902c95d2c14820089.php">Widgets</a></li><li class="navelem"><a class="el" href="../../dir_42c90fb9218922ddd8984da73ce0d59c.php">C++</a></li><li class="navelem"><a class="el" href="../../d4/d7d/a00093.php">time.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
