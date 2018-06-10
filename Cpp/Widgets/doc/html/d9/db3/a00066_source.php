<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: Object.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d9/db3/a00066_source.php','../../');});
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
<div class="title">Object.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d9/db3/a00066.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_OBJECT</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_OBJECT</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d5/de0/a00050.php">Contraption.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../dc/de2/a00024.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dc/de2/a00024.php">Object</a> : <span class="keyword">public</span> <a class="code" href="../../df/d86/a00012.php">Contraption</a> {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <span class="comment">/* Constructor &amp; Destroyer */</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;            <a class="code" href="../../dc/de2/a00024.php#ada4a84669e44b3ba65ac1d7be027dc73">Object</a>(<a class="code" href="../../de/d11/a00021.php">Map</a>* map = <span class="keyword">nullptr</span>, <a class="code" href="../../d0/d33/a00027.php">Point</a> pt = {0, 0, 0}, <a class="code" href="../../d7/dd4/a00013.php">ContraptionAttr</a> attr = {0, 0, 0});</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../dc/de2/a00024.php#aa3e791419d84c4c346ef9499513b8e00">~Object</a>();</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;        <span class="comment">/* Friends */</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../dc/de2/a00024.php#a4afb4bd99645b9bfd1c95fcb93f3077b">printInfos</a>(std::ostream&amp; stream)<span class="keyword">const</span>;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;};</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="preprocessor">#endif //HEADER_OBJECT</span></div><div class="ttc" id="a00050_php"><div class="ttname"><a href="../../d5/de0/a00050.php">Contraption.hpp</a></div></div>
<div class="ttc" id="a00021_php"><div class="ttname"><a href="../../de/d11/a00021.php">Map</a></div><div class="ttdoc">A map class to have something common. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00048">Map.hpp:48</a></div></div>
<div class="ttc" id="a00024_php_ada4a84669e44b3ba65ac1d7be027dc73"><div class="ttname"><a href="../../dc/de2/a00024.php#ada4a84669e44b3ba65ac1d7be027dc73">Object::Object</a></div><div class="ttdeci">Object(Map *map=nullptr, Point pt={0, 0, 0}, ContraptionAttr attr={0, 0, 0})</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00024_php"><div class="ttname"><a href="../../dc/de2/a00024.php">Object</a></div><div class="ttdoc">An object. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/db3/a00066_source.php#l00017">Object.hpp:17</a></div></div>
<div class="ttc" id="a00027_php"><div class="ttname"><a href="../../d0/d33/a00027.php">Point</a></div><div class="ttdoc">A struct to define a point in space. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00060">defines.hpp:60</a></div></div>
<div class="ttc" id="a00024_php_aa3e791419d84c4c346ef9499513b8e00"><div class="ttname"><a href="../../dc/de2/a00024.php#aa3e791419d84c4c346ef9499513b8e00">Object::~Object</a></div><div class="ttdeci">virtual ~Object()</div><div class="ttdoc">Virtual destructor. </div></div>
<div class="ttc" id="a00024_php_a4afb4bd99645b9bfd1c95fcb93f3077b"><div class="ttname"><a href="../../dc/de2/a00024.php#a4afb4bd99645b9bfd1c95fcb93f3077b">Object::printInfos</a></div><div class="ttdeci">virtual void printInfos(std::ostream &amp;stream) const </div><div class="ttdoc">Print the infos in the instance of the class in stream. </div></div>
<div class="ttc" id="a00012_php"><div class="ttname"><a href="../../df/d86/a00012.php">Contraption</a></div><div class="ttdoc">A contraption. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00021">Contraption.hpp:21</a></div></div>
<div class="ttc" id="a00013_php"><div class="ttname"><a href="../../d7/dd4/a00013.php">ContraptionAttr</a></div><div class="ttdoc">A struct to define Contraption attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00070">defines.hpp:70</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d9/db3/a00066.php">Object.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
