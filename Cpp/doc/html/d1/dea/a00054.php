<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: bdd.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d1/dea/a00054.php','../../');});
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
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">bdd.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;cppconn/driver.h&gt;</code><br />
<code>#include &lt;cppconn/exception.h&gt;</code><br />
<code>#include &lt;cppconn/resultset.h&gt;</code><br />
<code>#include &lt;cppconn/statement.h&gt;</code><br />
<code>#include &lt;string&gt;</code><br />
<code>#include &lt;mutex&gt;</code><br />
<code>#include &lt;functional&gt;</code><br />
<code>#include &quot;<a class="el" href="../../d9/d77/a00095_source.php">types.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../dc/ddf/a00067_source.php">errors.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d8/d53/a00081_source.php">pointers.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d9/dec/a00090_source.php">string.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../dc/dee/a00053_source.php">array.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for bdd.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/d6d/a00111.png" border="0" usemap="#bdd_8hpp" alt=""/></div>
<map name="bdd_8hpp" id="bdd_8hpp">
<area shape="rect" id="node9" href="../../d9/d77/a00095.php" title="types.hpp" alt="" coords="735,229,813,256"/>
<area shape="rect" id="node12" href="../../dc/ddf/a00067.php" title="errors.hpp" alt="" coords="794,80,874,107"/>
<area shape="rect" id="node25" href="../../d8/d53/a00081.php" title="pointers.hpp" alt="" coords="442,155,535,181"/>
<area shape="rect" id="node26" href="../../d9/dec/a00090.php" title="string.hpp" alt="" coords="1273,155,1352,181"/>
<area shape="rect" id="node29" href="../../dc/dee/a00053.php" title="array.hpp" alt="" coords="932,229,1008,256"/>
<area shape="rect" id="node13" href="../../d7/df7/a00058.php" title="console.hpp" alt="" coords="845,155,937,181"/>
<area shape="rect" id="node19" href="../../da/d24/a00068.php" title="files.hpp" alt="" coords="837,229,908,256"/>
<area shape="rect" id="node22" href="../../d1/dc1/a00092.php" title="time.hpp" alt="" coords="647,155,719,181"/>
<area shape="rect" id="node14" href="../../d9/d73/a00060.php" title="convert.hpp" alt="" coords="1185,229,1275,256"/>
<area shape="rect" id="node28" href="../../d1/d6e/a00073.php" title="macro.hpp" alt="" coords="1430,229,1513,256"/>
<area shape="rect" id="node30" href="../../da/d2a/a00086.php" title="RNG.hpp" alt="" coords="1638,229,1715,256"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../db/d57/a00112.png" border="0" usemap="#bdd_8hppdep" alt=""/></div>
<map name="bdd_8hppdep" id="bdd_8hppdep">
<area shape="rect" id="node2" href="../../df/d03/a00062.php" title="defines.hpp" alt="" coords="603,80,693,107"/>
<area shape="rect" id="node3" href="../../d3/d8b/a00059.php" title="Contraption.hpp" alt="" coords="464,155,579,181"/>
<area shape="rect" id="node8" href="../../d4/d6d/a00055.php" title="C++.hpp" alt="" coords="546,677,619,704"/>
<area shape="rect" id="node15" href="../../d4/de8/a00061.php" title="cryptage.hpp" alt="" coords="686,304,783,331"/>
<area shape="rect" id="node4" href="../../d9/db3/a00066.php" title="Entity.hpp" alt="" coords="119,229,201,256"/>
<area shape="rect" id="node7" href="../../de/de1/a00065.php" title="Entities.hpp" alt="" coords="267,528,357,555"/>
<area shape="rect" id="node14" href="../../d9/da4/a00078.php" title="Object.hpp" alt="" coords="525,229,611,256"/>
<area shape="rect" id="node5" href="../../d5/de0/a00050.php" title="Animal.hpp" alt="" coords="15,379,102,405"/>
<area shape="rect" id="node10" href="../../d6/d2c/a00072.php" title="Hostile.hpp" alt="" coords="35,304,123,331"/>
<area shape="rect" id="node11" href="../../d9/df8/a00096.php" title="Vegetal.hpp" alt="" coords="220,379,311,405"/>
<area shape="rect" id="node6" href="../../d2/d79/a00051.php" title="Ant.hpp" alt="" coords="5,453,72,480"/>
<area shape="rect" id="node9" href="../../da/dec/a00080.php" title="Player.hpp" alt="" coords="475,603,559,629"/>
<area shape="rect" id="node12" href="../../d1/d51/a00079.php" title="Plant.hpp" alt="" coords="248,453,325,480"/>
<area shape="rect" id="node13" href="../../d1/d09/a00077.php" title="Mushroom.hpp" alt="" coords="350,453,458,480"/>
</map>
</div>
</div>
<p><a href="../../d1/dea/a00054_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/dad/a00005.php">BDD</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to connect to a <a class="el" href="../../dd/dad/a00005.php" title="A class to connect to a BDD. ">BDD</a>.  <a href="../../dd/dad/a00005.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:acb7362a3fb715f64e5ab3cd50794a52c"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/dea/a00054.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a> = std::vector&lt; std::map&lt; std::string, std::string &gt;&gt;</td></tr>
<tr class="separator:acb7362a3fb715f64e5ab3cd50794a52c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6b6679f15a22e0f89297978d24dec56e"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/dea/a00054.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> = std::vector&lt; std::vector&lt; std::string &gt;&gt;</td></tr>
<tr class="separator:a6b6679f15a22e0f89297978d24dec56e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:a36ce5024f17ad7e4a5b2eff31629cd5c"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dd/dad/a00005.php">BDD</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/dea/a00054.php#a36ce5024f17ad7e4a5b2eff31629cd5c">bdd</a></td></tr>
<tr class="memdesc:a36ce5024f17ad7e4a5b2eff31629cd5c"><td class="mdescLeft">&#160;</td><td class="mdescRight">A global bdd variable to connect to a database.  <a href="#a36ce5024f17ad7e4a5b2eff31629cd5c">More...</a><br /></td></tr>
<tr class="separator:a36ce5024f17ad7e4a5b2eff31629cd5c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>09 juin 2018 </dd></dl>

<p>Definition in file <a class="el" href="../../d1/dea/a00054_source.php">bdd.hpp</a>.</p>
</div><h2 class="groupheader">Typedef Documentation</h2>
<a class="anchor" id="acb7362a3fb715f64e5ab3cd50794a52c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="../../d1/dea/a00054.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a> =  std::vector&lt;std::map&lt;std::string, std::string&gt;&gt;</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>The type of the array that contains the columns </p>

<p>Definition at line <a class="el" href="../../d1/dea/a00054_source.php#l00027">27</a> of file <a class="el" href="../../d1/dea/a00054_source.php">bdd.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a6b6679f15a22e0f89297978d24dec56e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="../../d1/dea/a00054.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> =  std::vector&lt;std::vector&lt;std::string&gt;&gt;</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>The type of the array that contains the list of something </p>

<p>Definition at line <a class="el" href="../../d1/dea/a00054_source.php#l00029">29</a> of file <a class="el" href="../../d1/dea/a00054_source.php">bdd.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Variable Documentation</h2>
<a class="anchor" id="a36ce5024f17ad7e4a5b2eff31629cd5c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../dd/dad/a00005.php">BDD</a> bdd</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>A global bdd variable to connect to a database. </p>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d1/dea/a00054.php">bdd.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
