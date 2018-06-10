<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: QtDefines.hpp Source File</title>
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
   <div id="projectname">Qt
   &#160;<span id="projectnumber">1.0</span>
   </div>
   <div id="projectbrief">Specific widgets for Qt</div>
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
$(document).ready(function(){initNavTree('d4/d51/a00017_source.php','../../');});
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
<div class="title">QtDefines.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d4/d51/a00017.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_QT_DEFINES</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_QT_DEFINES</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;QtWidgets&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d7/de0/a00022.php">Widget.hpp</a>&quot;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d7/dd4/a00013.php">DrawScene.hpp</a>&quot;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../dd/d1b/a00015.php">GraphScene.hpp</a>&quot;</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../dd/da2/a00019.php">Scene.hpp</a>&quot;</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../db/db2/a00020.php">Spacers.hpp</a>&quot;</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d2b/a00018.php">QtFunctions.hpp</a>&quot;</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/de7/a00014.php">Font.hpp</a>&quot;</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &quot;C++/C++.hpp&quot;</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#endif //HEADER_QT_DEFINES</span></div><div class="ttc" id="a00018_php"><div class="ttname"><a href="../../d1/d2b/a00018.php">QtFunctions.hpp</a></div></div>
<div class="ttc" id="a00014_php"><div class="ttname"><a href="../../d2/de7/a00014.php">Font.hpp</a></div></div>
<div class="ttc" id="a00022_php"><div class="ttname"><a href="../../d7/de0/a00022.php">Widget.hpp</a></div></div>
<div class="ttc" id="a00019_php"><div class="ttname"><a href="../../dd/da2/a00019.php">Scene.hpp</a></div></div>
<div class="ttc" id="a00020_php"><div class="ttname"><a href="../../db/db2/a00020.php">Spacers.hpp</a></div></div>
<div class="ttc" id="a00015_php"><div class="ttname"><a href="../../dd/d1b/a00015.php">GraphScene.hpp</a></div></div>
<div class="ttc" id="a00013_php"><div class="ttname"><a href="../../d7/dd4/a00013.php">DrawScene.hpp</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_a02ca41573efbfa5a2fd3c2b5453f5e3.php">QTTests</a></li><li class="navelem"><a class="el" href="../../dir_241af41b803d499a248aecae0c64f982.php">Widgets</a></li><li class="navelem"><a class="el" href="../../d4/d51/a00017.php">QtDefines.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
