<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: QtFunctions.hpp Source File</title>
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
$(document).ready(function(){initNavTree('dd/da2/a00019_source.php','../../');});
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
<div class="title">QtFunctions.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../dd/da2/a00019.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_QT_FUNCTIONS</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_QT_FUNCTIONS</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;QtWidgets&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &quot;C++/defines.hpp&quot;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00016"></a><span class="lineno"><a class="line" href="../../dd/da2/a00019.php#af5c0e4b3ee16e7efaa2220fe898e0138">   16</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../dd/da2/a00019.php#af5c0e4b3ee16e7efaa2220fe898e0138">QtWindow</a> = ContraptionAttr;</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<a class="code" href="../../dd/da2/a00019.php#af5c0e4b3ee16e7efaa2220fe898e0138">QtWindow</a> <a class="code" href="../../dd/da2/a00019.php#a0272cd6761e50151f46337d1d7f793f2">getDesktopSize</a>();</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="keywordtype">size_t</span> <a class="code" href="../../dd/da2/a00019.php#a7a5b8564155df959a2ed36b171090ec2">getDesktopWidth</a>();</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="keywordtype">size_t</span> <a class="code" href="../../dd/da2/a00019.php#a4e89aa67e6219267f0f2965567c447a5">getDesktopHeight</a>();</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;std::string <a class="code" href="../../dd/da2/a00019.php#ac35a8acbe17be1d705ecf8d940eacc95">cssReader</a>(std::string path);</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#endif //HEADER_QT_FUNCTIONS</span></div><div class="ttc" id="a00019_php_a4e89aa67e6219267f0f2965567c447a5"><div class="ttname"><a href="../../dd/da2/a00019.php#a4e89aa67e6219267f0f2965567c447a5">getDesktopHeight</a></div><div class="ttdeci">size_t getDesktopHeight()</div><div class="ttdoc">Get the height of the desktop. </div></div>
<div class="ttc" id="a00019_php_a7a5b8564155df959a2ed36b171090ec2"><div class="ttname"><a href="../../dd/da2/a00019.php#a7a5b8564155df959a2ed36b171090ec2">getDesktopWidth</a></div><div class="ttdeci">size_t getDesktopWidth()</div><div class="ttdoc">Get the width of the desktop. </div></div>
<div class="ttc" id="a00019_php_a0272cd6761e50151f46337d1d7f793f2"><div class="ttname"><a href="../../dd/da2/a00019.php#a0272cd6761e50151f46337d1d7f793f2">getDesktopSize</a></div><div class="ttdeci">QtWindow getDesktopSize()</div><div class="ttdoc">Get the size of the desktop. </div></div>
<div class="ttc" id="a00019_php_af5c0e4b3ee16e7efaa2220fe898e0138"><div class="ttname"><a href="../../dd/da2/a00019.php#af5c0e4b3ee16e7efaa2220fe898e0138">QtWindow</a></div><div class="ttdeci">ContraptionAttr QtWindow</div><div class="ttdoc">An alias for Qt. </div><div class="ttdef"><b>Definition:</b> <a href="../../dd/da2/a00019_source.php#l00016">QtFunctions.hpp:16</a></div></div>
<div class="ttc" id="a00019_php_ac35a8acbe17be1d705ecf8d940eacc95"><div class="ttname"><a href="../../dd/da2/a00019.php#ac35a8acbe17be1d705ecf8d940eacc95">cssReader</a></div><div class="ttdeci">std::string cssReader(std::string path)</div><div class="ttdoc">Read a Cascade Style Sheet and translate it for Qt. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_a02ca41573efbfa5a2fd3c2b5453f5e3.php">QTTests</a></li><li class="navelem"><a class="el" href="../../dir_241af41b803d499a248aecae0c64f982.php">Widgets</a></li><li class="navelem"><a class="el" href="../../dd/da2/a00019.php">QtFunctions.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
