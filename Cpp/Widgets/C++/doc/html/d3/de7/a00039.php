<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: bdd.hpp File Reference</title>
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
   <div id="projectname">C++
   &#160;<span id="projectnumber">1.0</span>
   </div>
   <div id="projectbrief">My own functions in C++</div>
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
$(document).ready(function(){initNavTree('d3/de7/a00039.php','../../');});
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
<code>#include &quot;<a class="el" href="../../d5/de0/a00050_source.php">errors.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d1/d6f/a00063_source.php">string.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for bdd.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/da5/a00075.png" border="0" usemap="#bdd_8hpp" alt=""/></div>
<map name="bdd_8hpp" id="bdd_8hpp">
<area shape="rect" id="node6" href="../../d5/de0/a00050.php" title="errors.hpp" alt="" coords="641,155,721,181"/>
<area shape="rect" id="node28" href="../../d1/d6f/a00063.php" title="string.hpp" alt="" coords="828,80,907,107"/>
<area shape="rect" id="node7" href="../../d6/d42/a00043.php" title="console.hpp" alt="" coords="577,229,669,256"/>
<area shape="rect" id="node17" href="../../d2/d79/a00051.php" title="files.hpp" alt="" coords="952,304,1023,331"/>
<area shape="rect" id="node20" href="../../de/de1/a00065.php" title="time.hpp" alt="" coords="134,229,206,256"/>
<area shape="rect" id="node8" href="../../d6/d97/a00045.php" title="convert.hpp" alt="" coords="706,304,797,331"/>
<area shape="rect" id="node14" href="../../dc/ddf/a00067.php" title="types.hpp" alt="" coords="427,304,505,331"/>
<area shape="rect" id="node23" href="../../df/d5f/a00064.php" title="Threadable.hpp" alt="" coords="171,304,281,331"/>
<area shape="rect" id="node27" href="../../d9/d73/a00060.php" title="pointers.hpp" alt="" coords="263,379,357,405"/>
<area shape="rect" id="node31" href="../../dc/dee/a00053.php" title="macro.hpp" alt="" coords="955,155,1038,181"/>
<area shape="rect" id="node32" href="../../d8/d41/a00038.php" title="array.hpp" alt="" coords="1143,304,1219,331"/>
<area shape="rect" id="node35" href="../../d4/de8/a00061.php" title="RNG.hpp" alt="" coords="1062,155,1139,181"/>
</map>
</div>
</div>
<p><a href="../../d3/de7/a00039_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d21/a00006.php">BDD</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to connect to a <a class="el" href="../../de/d21/a00006.php" title="A class to connect to a BDD. ">BDD</a>.  <a href="../../de/d21/a00006.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:acb7362a3fb715f64e5ab3cd50794a52c"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de7/a00039.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a> = std::vector&lt; std::map&lt; std::string, std::string &gt;&gt;</td></tr>
<tr class="memdesc:acb7362a3fb715f64e5ab3cd50794a52c"><td class="mdescLeft">&#160;</td><td class="mdescRight">The type of the array that contains the columns.  <a href="#acb7362a3fb715f64e5ab3cd50794a52c">More...</a><br /></td></tr>
<tr class="separator:acb7362a3fb715f64e5ab3cd50794a52c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6b6679f15a22e0f89297978d24dec56e"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de7/a00039.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> = std::vector&lt; std::vector&lt; std::string &gt;&gt;</td></tr>
<tr class="memdesc:a6b6679f15a22e0f89297978d24dec56e"><td class="mdescLeft">&#160;</td><td class="mdescRight">The type of the array that contains the list of something.  <a href="#a6b6679f15a22e0f89297978d24dec56e">More...</a><br /></td></tr>
<tr class="separator:a6b6679f15a22e0f89297978d24dec56e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:a36ce5024f17ad7e4a5b2eff31629cd5c"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../de/d21/a00006.php">BDD</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de7/a00039.php#a36ce5024f17ad7e4a5b2eff31629cd5c">bdd</a></td></tr>
<tr class="memdesc:a36ce5024f17ad7e4a5b2eff31629cd5c"><td class="mdescLeft">&#160;</td><td class="mdescRight">A global bdd variable to connect to a database.  <a href="#a36ce5024f17ad7e4a5b2eff31629cd5c">More...</a><br /></td></tr>
<tr class="separator:a36ce5024f17ad7e4a5b2eff31629cd5c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>12 juin 2018 </dd></dl>

<p>Definition in file <a class="el" href="../../d3/de7/a00039_source.php">bdd.hpp</a>.</p>
</div><h2 class="groupheader">Typedef Documentation</h2>
<a class="anchor" id="acb7362a3fb715f64e5ab3cd50794a52c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="../../d3/de7/a00039.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a> =  std::vector&lt;std::map&lt;std::string, std::string&gt;&gt;</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The type of the array that contains the columns. </p>

<p>Definition at line <a class="el" href="../../d3/de7/a00039_source.php#l00020">20</a> of file <a class="el" href="../../d3/de7/a00039_source.php">bdd.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a6b6679f15a22e0f89297978d24dec56e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="../../d3/de7/a00039.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> =  std::vector&lt;std::vector&lt;std::string&gt;&gt;</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The type of the array that contains the list of something. </p>

<p>Definition at line <a class="el" href="../../d3/de7/a00039_source.php#l00022">22</a> of file <a class="el" href="../../d3/de7/a00039_source.php">bdd.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Variable Documentation</h2>
<a class="anchor" id="a36ce5024f17ad7e4a5b2eff31629cd5c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../de/d21/a00006.php">BDD</a> bdd</td>
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
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d3/de7/a00039.php">bdd.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
