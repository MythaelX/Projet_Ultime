<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>ProjetFinalCPP: C++.hpp Source File</title>
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
$(document).ready(function(){initNavTree('dd/d32/a00041_source.php','../../');});
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
  <div class="headertitle">
<div class="title">C++.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../dd/d32/a00041.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_CPP</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_CPP</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/dee/a00049.php">Entities.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d6f/a00063.php">Player.hpp</a>&quot;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d3/dea/a00046.php">cryptage.hpp</a>&quot;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d6/d42/a00043.php">console.hpp</a>&quot;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d6/d2d/a00047.php">defines.hpp</a>&quot;</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/d79/a00051.php">errors.hpp</a>&quot;</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d6/d97/a00045.php">convert.hpp</a>&quot;</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d5/db6/a00042.php">collides.hpp</a>&quot;</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/db1/a00070.php">string.hpp</a>&quot;</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d3/de7/a00039.php">array.hpp</a>&quot;</span></div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d0/d89/a00071.php">time.hpp</a>&quot;</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d3/d8b/a00059.php">maths.hpp</a>&quot;</span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d84/a00052.php">files.hpp</a>&quot;</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../da/d24/a00068.php">sorting.hpp</a>&quot;</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d6/d2c/a00072.php">tree.hpp</a>&quot;</span></div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d7/df7/a00058.php">Map.hpp</a>&quot;</span></div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d9/d2e/a00056.php">macro.hpp</a>&quot;</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d6e/a00073.php">types.hpp</a>&quot;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#endif //HEADER_CPP</span></div><div class="ttc" id="a00071_php"><div class="ttname"><a href="../../d0/d89/a00071.php">time.hpp</a></div></div>
<div class="ttc" id="a00049_php"><div class="ttname"><a href="../../d2/dee/a00049.php">Entities.hpp</a></div></div>
<div class="ttc" id="a00047_php"><div class="ttname"><a href="../../d6/d2d/a00047.php">defines.hpp</a></div></div>
<div class="ttc" id="a00042_php"><div class="ttname"><a href="../../d5/db6/a00042.php">collides.hpp</a></div></div>
<div class="ttc" id="a00045_php"><div class="ttname"><a href="../../d6/d97/a00045.php">convert.hpp</a></div></div>
<div class="ttc" id="a00068_php"><div class="ttname"><a href="../../da/d24/a00068.php">sorting.hpp</a></div></div>
<div class="ttc" id="a00039_php"><div class="ttname"><a href="../../d3/de7/a00039.php">array.hpp</a></div></div>
<div class="ttc" id="a00043_php"><div class="ttname"><a href="../../d6/d42/a00043.php">console.hpp</a></div></div>
<div class="ttc" id="a00051_php"><div class="ttname"><a href="../../d2/d79/a00051.php">errors.hpp</a></div></div>
<div class="ttc" id="a00058_php"><div class="ttname"><a href="../../d7/df7/a00058.php">Map.hpp</a></div></div>
<div class="ttc" id="a00072_php"><div class="ttname"><a href="../../d6/d2c/a00072.php">tree.hpp</a></div></div>
<div class="ttc" id="a00056_php"><div class="ttname"><a href="../../d9/d2e/a00056.php">macro.hpp</a></div></div>
<div class="ttc" id="a00070_php"><div class="ttname"><a href="../../d2/db1/a00070.php">string.hpp</a></div></div>
<div class="ttc" id="a00073_php"><div class="ttname"><a href="../../d1/d6e/a00073.php">types.hpp</a></div></div>
<div class="ttc" id="a00046_php"><div class="ttname"><a href="../../d3/dea/a00046.php">cryptage.hpp</a></div></div>
<div class="ttc" id="a00059_php"><div class="ttname"><a href="../../d3/d8b/a00059.php">maths.hpp</a></div></div>
<div class="ttc" id="a00063_php"><div class="ttname"><a href="../../d1/d6f/a00063.php">Player.hpp</a></div></div>
<div class="ttc" id="a00052_php"><div class="ttname"><a href="../../d1/d84/a00052.php">files.hpp</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dd/d32/a00041.php">C++.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
