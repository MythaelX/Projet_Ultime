<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: Spacers.hpp Source File</title>
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
$(document).ready(function(){initNavTree('db/dab/a00089_source.php','../../');});
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
<div class="title">Spacers.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../db/dab/a00089.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_SPACERS</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_SPACERS</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;QtWidgets&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../db/df3/a00034.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../db/df3/a00034.php">QHSpacerItem</a> : <span class="keyword">public</span> QSpacerItem {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00020"></a><span class="lineno"><a class="line" href="../../db/df3/a00034.php#a7fa21864bd309afcca8221e427ecbe62">   20</a></span>&#160;        <a class="code" href="../../db/df3/a00034.php#a7fa21864bd309afcca8221e427ecbe62">QHSpacerItem</a>(<span class="keywordtype">int</span> w = 0, <span class="keywordtype">int</span> h = 0) : QSpacerItem(w, h, QSizePolicy::Expanding, QSizePolicy::Minimum){}</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;};</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;</div><div class="line"><a name="l00027"></a><span class="lineno"><a class="line" href="../../d4/d8c/a00035.php">   27</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d4/d8c/a00035.php">QVSpacerItem</a> : <span class="keyword">public</span> QSpacerItem {</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00030"></a><span class="lineno"><a class="line" href="../../d4/d8c/a00035.php#a833d08c247a52f8eff4109f5f1e26210">   30</a></span>&#160;        <a class="code" href="../../d4/d8c/a00035.php#a833d08c247a52f8eff4109f5f1e26210">QVSpacerItem</a>(<span class="keywordtype">int</span> w = 0, <span class="keywordtype">int</span> h = 0) : QSpacerItem(w, h, QSizePolicy::Minimum, QSizePolicy::Expanding){}</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;};</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#endif //HEADER_SPACERS</span></div><div class="ttc" id="a00034_php"><div class="ttname"><a href="../../db/df3/a00034.php">QHSpacerItem</a></div><div class="ttdoc">An implementation of QSpacerItem. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/dab/a00089_source.php#l00017">Spacers.hpp:17</a></div></div>
<div class="ttc" id="a00034_php_a7fa21864bd309afcca8221e427ecbe62"><div class="ttname"><a href="../../db/df3/a00034.php#a7fa21864bd309afcca8221e427ecbe62">QHSpacerItem::QHSpacerItem</a></div><div class="ttdeci">QHSpacerItem(int w=0, int h=0)</div><div class="ttdoc">Create a QSpacerItem that expend horizontally. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/dab/a00089_source.php#l00020">Spacers.hpp:20</a></div></div>
<div class="ttc" id="a00035_php_a833d08c247a52f8eff4109f5f1e26210"><div class="ttname"><a href="../../d4/d8c/a00035.php#a833d08c247a52f8eff4109f5f1e26210">QVSpacerItem::QVSpacerItem</a></div><div class="ttdeci">QVSpacerItem(int w=0, int h=0)</div><div class="ttdoc">Create a QSpacerItem that expend vertically. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/dab/a00089_source.php#l00030">Spacers.hpp:30</a></div></div>
<div class="ttc" id="a00035_php"><div class="ttname"><a href="../../d4/d8c/a00035.php">QVSpacerItem</a></div><div class="ttdoc">An implementation of QSpacerItem. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/dab/a00089_source.php#l00027">Spacers.hpp:27</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_a02ca41573efbfa5a2fd3c2b5453f5e3.php">QTTests</a></li><li class="navelem"><a class="el" href="../../dir_241af41b803d499a248aecae0c64f982.php">Widgets</a></li><li class="navelem"><a class="el" href="../../db/dab/a00089.php">Spacers.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
