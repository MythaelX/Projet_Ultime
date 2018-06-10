<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: collides.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d7/df7/a00058_source.php','../../');});
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
<div class="title">collides.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d7/df7/a00058.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_COLLIDES</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_COLLIDES</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d09/a00077.php">maths.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d7/df7/a00058.php#a9e71f7b4b2dc9351d81534c753d02b2f">collidesC</a>(<span class="keywordtype">double</span> r1, <span class="keywordtype">double</span> x1, <span class="keywordtype">double</span> y1, <span class="keywordtype">double</span> r2, <span class="keywordtype">double</span> x2, <span class="keywordtype">double</span> y2);</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d7/df7/a00058.php#a2c41f8567fc8effdd8ee6a163fbe9440">collidesR</a>(<span class="keywordtype">double</span> x1, <span class="keywordtype">double</span> y1, <span class="keywordtype">double</span> w1, <span class="keywordtype">double</span> h1, <span class="keywordtype">double</span> x2, <span class="keywordtype">double</span> y2, <span class="keywordtype">double</span> w2, <span class="keywordtype">double</span> h2);</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d7/df7/a00058.php#a8e7babfd2bd0dd7b2f392372848edc80">collidesRC</a>(<span class="keywordtype">double</span> rx, <span class="keywordtype">double</span> ry, <span class="keywordtype">double</span> w, <span class="keywordtype">double</span> h, <span class="keywordtype">double</span> cx, <span class="keywordtype">double</span> cy, <span class="keywordtype">double</span> r);</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d7/df7/a00058.php#a3ce463b4b6c6477444bad3dcb1499f85">collidesPC</a>(<span class="keywordtype">double</span> cx, <span class="keywordtype">double</span> cy, <span class="keywordtype">double</span> r, <span class="keywordtype">double</span> x, <span class="keywordtype">double</span> y);</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d7/df7/a00058.php#a2d9df4f37d280cec5c3e91ba7b83ed11">collidesPR</a>(<span class="keywordtype">double</span> rx, <span class="keywordtype">double</span> ry, <span class="keywordtype">double</span> w, <span class="keywordtype">double</span> h, <span class="keywordtype">double</span> x, <span class="keywordtype">double</span> y);</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d7/df7/a00058.php#a1213c000f201a2e1991e60a0e2973d91">ProjectionSurSegment</a>(<span class="keywordtype">double</span> Cx, <span class="keywordtype">double</span> Cy, <span class="keywordtype">double</span> Ax, <span class="keywordtype">double</span> Ay, <span class="keywordtype">double</span> Bx, <span class="keywordtype">double</span> By);</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;<span class="preprocessor">#endif //HEADER_COLLIDES</span></div><div class="ttc" id="a00058_php_a9e71f7b4b2dc9351d81534c753d02b2f"><div class="ttname"><a href="../../d7/df7/a00058.php#a9e71f7b4b2dc9351d81534c753d02b2f">collidesC</a></div><div class="ttdeci">bool collidesC(double r1, double x1, double y1, double r2, double x2, double y2)</div><div class="ttdoc">Compute if there is a collision between two circles. </div></div>
<div class="ttc" id="a00058_php_a2c41f8567fc8effdd8ee6a163fbe9440"><div class="ttname"><a href="../../d7/df7/a00058.php#a2c41f8567fc8effdd8ee6a163fbe9440">collidesR</a></div><div class="ttdeci">bool collidesR(double x1, double y1, double w1, double h1, double x2, double y2, double w2, double h2)</div><div class="ttdoc">Compute if there is a collision between two rectangles. </div></div>
<div class="ttc" id="a00058_php_a1213c000f201a2e1991e60a0e2973d91"><div class="ttname"><a href="../../d7/df7/a00058.php#a1213c000f201a2e1991e60a0e2973d91">ProjectionSurSegment</a></div><div class="ttdeci">bool ProjectionSurSegment(double Cx, double Cy, double Ax, double Ay, double Bx, double By)</div><div class="ttdoc">Compute if there is a collision on a segment. </div></div>
<div class="ttc" id="a00077_php"><div class="ttname"><a href="../../d1/d09/a00077.php">maths.hpp</a></div></div>
<div class="ttc" id="a00058_php_a3ce463b4b6c6477444bad3dcb1499f85"><div class="ttname"><a href="../../d7/df7/a00058.php#a3ce463b4b6c6477444bad3dcb1499f85">collidesPC</a></div><div class="ttdeci">bool collidesPC(double cx, double cy, double r, double x, double y)</div><div class="ttdoc">Compute if there is a collision between a point and a circle. </div></div>
<div class="ttc" id="a00058_php_a8e7babfd2bd0dd7b2f392372848edc80"><div class="ttname"><a href="../../d7/df7/a00058.php#a8e7babfd2bd0dd7b2f392372848edc80">collidesRC</a></div><div class="ttdeci">bool collidesRC(double rx, double ry, double w, double h, double cx, double cy, double r)</div><div class="ttdoc">Compute if there is a collision between a rectangle and a circle. </div></div>
<div class="ttc" id="a00058_php_a2d9df4f37d280cec5c3e91ba7b83ed11"><div class="ttname"><a href="../../d7/df7/a00058.php#a2d9df4f37d280cec5c3e91ba7b83ed11">collidesPR</a></div><div class="ttdeci">bool collidesPR(double rx, double ry, double w, double h, double x, double y)</div><div class="ttdoc">Compute if there is a collision between a point and a rectangle. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_9cc7dab42d10c04902c95d2c14820089.php">Widgets</a></li><li class="navelem"><a class="el" href="../../dir_42c90fb9218922ddd8984da73ce0d59c.php">C++</a></li><li class="navelem"><a class="el" href="../../d7/df7/a00058.php">collides.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
