<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>ProjetFinalCPP: string.hpp File Reference</title>
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
   <div id="projectname">ProjetFinalCPP
   &#160;<span id="projectnumber">1.0</span>
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
$(document).ready(function(){initNavTree('d2/db1/a00070.php','../../');});
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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">string.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;sstream&gt;</code><br />
<code>#include &lt;string&gt;</code><br />
<code>#include &lt;algorithm&gt;</code><br />
<code>#include &lt;numeric&gt;</code><br />
<code>#include &lt;vector&gt;</code><br />
<code>#include &quot;<a class="el" href="../../d9/d2e/a00056_source.php">macro.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for string.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d14/a00139.png" border="0" usemap="#string_8hpp" alt=""/></div>
<map name="string_8hpp" id="string_8hpp">
<area shape="rect" id="node7" href="../../d9/d2e/a00056.php" title="macro.hpp" alt="" coords="453,80,536,107"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/db1/a00140.png" border="0" usemap="#string_8hppdep" alt=""/></div>
<map name="string_8hppdep" id="string_8hppdep">
<area shape="rect" id="node2" href="../../db/d3a/a00040.php" title="bdd.hpp" alt="" coords="618,80,686,107"/>
<area shape="rect" id="node3" href="../../d6/d2d/a00047.php" title="defines.hpp" alt="" coords="607,155,697,181"/>
<area shape="rect" id="node9" href="../../dd/d32/a00041.php" title="C++.hpp" alt="" coords="582,752,655,779"/>
<area shape="rect" id="node4" href="../../d5/df9/a00044.php" title="Contraption.hpp" alt="" coords="451,229,565,256"/>
<area shape="rect" id="node16" href="../../d3/dea/a00046.php" title="cryptage.hpp" alt="" coords="657,379,754,405"/>
<area shape="rect" id="node5" href="../../d5/de0/a00050.php" title="Entity.hpp" alt="" coords="119,304,201,331"/>
<area shape="rect" id="node8" href="../../d2/dee/a00049.php" title="Entities.hpp" alt="" coords="263,603,353,629"/>
<area shape="rect" id="node15" href="../../d4/de8/a00061.php" title="Object.hpp" alt="" coords="512,304,597,331"/>
<area shape="rect" id="node6" href="../../de/d8c/a00036.php" title="Animal.hpp" alt="" coords="15,453,102,480"/>
<area shape="rect" id="node11" href="../../d4/d6d/a00055.php" title="Hostile.hpp" alt="" coords="35,379,123,405"/>
<area shape="rect" id="node12" href="../../db/db6/a00074.php" title="Vegetal.hpp" alt="" coords="223,453,313,480"/>
<area shape="rect" id="node7" href="../../d1/dc6/a00037.php" title="Ant.hpp" alt="" coords="5,528,72,555"/>
<area shape="rect" id="node10" href="../../d1/d6f/a00063.php" title="Player.hpp" alt="" coords="454,677,538,704"/>
<area shape="rect" id="node13" href="../../df/d03/a00062.php" title="Plant.hpp" alt="" coords="248,528,325,555"/>
<area shape="rect" id="node14" href="../../d9/d73/a00060.php" title="Mushroom.hpp" alt="" coords="350,528,458,555"/>
</map>
</div>
</div>
<p><a href="../../d2/db1/a00070_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ad0f62921e752f26b9ebd77ec32e8824e"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/db1/a00070.php#ad0f62921e752f26b9ebd77ec32e8824e">split</a> (std::string in, char separator= ' ')</td></tr>
<tr class="memdesc:ad0f62921e752f26b9ebd77ec32e8824e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Explode a string in an array with the given caracter.  <a href="#ad0f62921e752f26b9ebd77ec32e8824e">More...</a><br /></td></tr>
<tr class="separator:ad0f62921e752f26b9ebd77ec32e8824e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3f9b8ef62eba953dd328969e206b3f11"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/db1/a00070.php#a3f9b8ef62eba953dd328969e206b3f11">split</a> (std::string in, std::string c)</td></tr>
<tr class="memdesc:a3f9b8ef62eba953dd328969e206b3f11"><td class="mdescLeft">&#160;</td><td class="mdescRight">Explode a string in an array with the given string.  <a href="#a3f9b8ef62eba953dd328969e206b3f11">More...</a><br /></td></tr>
<tr class="separator:a3f9b8ef62eba953dd328969e206b3f11"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad81b7e411acc02d29749ab23e6e615ee"><td class="memTemplParams" colspan="2">template&lt;typename... Args&gt; </td></tr>
<tr class="memitem:ad81b7e411acc02d29749ab23e6e615ee"><td class="memTemplItemLeft" align="right" valign="top">auto&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d2/db1/a00070.php#ad81b7e411acc02d29749ab23e6e615ee">explode</a> (Args &amp;&amp;...args) -&gt; decltype(<a class="el" href="../../d2/db1/a00070.php#a3f9b8ef62eba953dd328969e206b3f11">split</a>(std::forward&lt; Args &gt;(args)...))</td></tr>
<tr class="memdesc:ad81b7e411acc02d29749ab23e6e615ee"><td class="mdescLeft">&#160;</td><td class="mdescRight">Alias for <b>split</b>.  <a href="#ad81b7e411acc02d29749ab23e6e615ee">More...</a><br /></td></tr>
<tr class="separator:ad81b7e411acc02d29749ab23e6e615ee"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aabfbfab3c3f6562da02d78a54d1ca0e0"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/db1/a00070.php#aabfbfab3c3f6562da02d78a54d1ca0e0">trim</a> (std::string &amp;in)</td></tr>
<tr class="memdesc:aabfbfab3c3f6562da02d78a54d1ca0e0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Delete all the spaces in the given string.  <a href="#aabfbfab3c3f6562da02d78a54d1ca0e0">More...</a><br /></td></tr>
<tr class="separator:aabfbfab3c3f6562da02d78a54d1ca0e0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>29 mai 2018 </dd></dl>

<p>Definition in file <a class="el" href="../../d2/db1/a00070_source.php">string.hpp</a>.</p>
</div><h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ad81b7e411acc02d29749ab23e6e615ee"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename... Args&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">auto explode </td>
          <td>(</td>
          <td class="paramtype">Args &amp;&amp;...&#160;</td>
          <td class="paramname"><em>args</em></td><td>)</td>
          <td> -&gt; decltype( <a class="el" href="../../d2/db1/a00070.php#a3f9b8ef62eba953dd328969e206b3f11">split</a> (std::forward&lt;Args&gt;(args)...))   </td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Alias for <b>split</b>. </p>

<p>Definition at line <a class="el" href="../../d2/db1/a00070_source.php#l00038">38</a> of file <a class="el" href="../../d2/db1/a00070_source.php">string.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="ad0f62921e752f26b9ebd77ec32e8824e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::vector&lt;std::string&gt; split </td>
          <td>(</td>
          <td class="paramtype">std::string&#160;</td>
          <td class="paramname"><em>in</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char&#160;</td>
          <td class="paramname"><em>separator</em> = <code>'&#160;'</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Explode a string in an array with the given caracter. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The string to cut </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">separator</td><td>The separator caracter to cut <em>in</em> </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return an array with the differents parts of the cut string </dd></dl>

</div>
</div>
<a class="anchor" id="a3f9b8ef62eba953dd328969e206b3f11"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::vector&lt;std::string&gt; split </td>
          <td>(</td>
          <td class="paramtype">std::string&#160;</td>
          <td class="paramname"><em>in</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::string&#160;</td>
          <td class="paramname"><em>c</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Explode a string in an array with the given string. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The string to cut </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">c</td><td>The separator string to cut <em>in</em> </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a class="anchor" id="aabfbfab3c3f6562da02d78a54d1ca0e0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void trim </td>
          <td>(</td>
          <td class="paramtype">std::string &amp;&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Delete all the spaces in the given string. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in,out]</td><td class="paramname">in</td><td>The string to treat</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d2/db1/a00070.php">string.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
