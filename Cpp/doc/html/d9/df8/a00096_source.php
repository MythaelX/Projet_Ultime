<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: Vegetal.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d9/df8/a00096_source.php','../../');});
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
<div class="title">Vegetal.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d9/df8/a00096.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_VEGETAL</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_VEGETAL</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d9/db3/a00066.php">Entity.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../d5/df9/a00044.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d5/df9/a00044.php">Vegetal</a> : <span class="keyword">public</span> <a class="code" href="../../d4/d51/a00017.php">Entity</a> {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <span class="comment">/* Constructor &amp; Destroyer */</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;            <a class="code" href="../../d5/df9/a00044.php#ac9d1bee0742cb45180637db1bed06294">Vegetal</a>(<a class="code" href="../../d6/d5b/a00026.php">Map</a>* map = <span class="keyword">nullptr</span>, <a class="code" href="../../dc/d87/a00032.php">Point</a> pt = {0, 0, 0}, <a class="code" href="../../d7/dd4/a00013.php">ContraptionAttr</a> attr = {0, 0, 0});</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../d5/df9/a00044.php#ae273444c873c7f3be7f38b6f60156a4c">~Vegetal</a>();</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;        <span class="comment">/* Friends */</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d5/df9/a00044.php#ac3ac9ca3d977facf17953da4c853f37f">printInfos</a>(std::ostream&amp; stream)<span class="keyword">const</span>;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../d5/df9/a00044.php">Vegetal</a>* <a class="code" href="../../d5/df9/a00044.php#a4ea0ad75fb2add027996b1653a4751f4">cut</a>(<span class="keywordtype">double</span> percent = 100);</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;};</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;<span class="preprocessor">#endif //HEADER_VEGETAL</span></div><div class="ttc" id="a00044_php_ac3ac9ca3d977facf17953da4c853f37f"><div class="ttname"><a href="../../d5/df9/a00044.php#ac3ac9ca3d977facf17953da4c853f37f">Vegetal::printInfos</a></div><div class="ttdeci">virtual void printInfos(std::ostream &amp;stream) const </div><div class="ttdoc">Print the infos in the instance of the class in stream. </div></div>
<div class="ttc" id="a00026_php"><div class="ttname"><a href="../../d6/d5b/a00026.php">Map</a></div><div class="ttdoc">A map class to have something common. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/da5/a00075_source.php#l00048">Map.hpp:48</a></div></div>
<div class="ttc" id="a00066_php"><div class="ttname"><a href="../../d9/db3/a00066.php">Entity.hpp</a></div></div>
<div class="ttc" id="a00032_php"><div class="ttname"><a href="../../dc/d87/a00032.php">Point</a></div><div class="ttdoc">A struct to define a point in space. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00060">defines.hpp:60</a></div></div>
<div class="ttc" id="a00044_php_a4ea0ad75fb2add027996b1653a4751f4"><div class="ttname"><a href="../../d5/df9/a00044.php#a4ea0ad75fb2add027996b1653a4751f4">Vegetal::cut</a></div><div class="ttdeci">virtual Vegetal * cut(double percent=100)</div><div class="ttdoc">Cut the plant to have twice. </div></div>
<div class="ttc" id="a00044_php_ac9d1bee0742cb45180637db1bed06294"><div class="ttname"><a href="../../d5/df9/a00044.php#ac9d1bee0742cb45180637db1bed06294">Vegetal::Vegetal</a></div><div class="ttdeci">Vegetal(Map *map=nullptr, Point pt={0, 0, 0}, ContraptionAttr attr={0, 0, 0})</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00017_php"><div class="ttname"><a href="../../d4/d51/a00017.php">Entity</a></div><div class="ttdoc">An entity. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/db3/a00066_source.php#l00017">Entity.hpp:17</a></div></div>
<div class="ttc" id="a00044_php_ae273444c873c7f3be7f38b6f60156a4c"><div class="ttname"><a href="../../d5/df9/a00044.php#ae273444c873c7f3be7f38b6f60156a4c">Vegetal::~Vegetal</a></div><div class="ttdeci">virtual ~Vegetal()</div><div class="ttdoc">Virtual destructor. </div></div>
<div class="ttc" id="a00044_php"><div class="ttname"><a href="../../d5/df9/a00044.php">Vegetal</a></div><div class="ttdoc">A vegetal. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/df8/a00096_source.php#l00017">Vegetal.hpp:17</a></div></div>
<div class="ttc" id="a00013_php"><div class="ttname"><a href="../../d7/dd4/a00013.php">ContraptionAttr</a></div><div class="ttdoc">A struct to define Contraption attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00070">defines.hpp:70</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d9/df8/a00096.php">Vegetal.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
