<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: Scene.hpp Source File</title>
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
$(document).ready(function(){initNavTree('db/db2/a00020_source.php','../../');});
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
<div class="title">Scene.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../db/db2/a00020.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_SCENE</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_SCENE</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;QtWidgets&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;iostream&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00019"></a><span class="lineno"><a class="line" href="../../d4/dee/a00008.php">   19</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d4/dee/a00008.php">Scene</a> : <span class="keyword">public</span> QGraphicsScene {</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    Q_OBJECT</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;        <a class="code" href="../../d4/dee/a00008.php#abaaf58cde185094df3ab47c5eedef55e">Scene</a>(QObject* parent = <span class="keyword">nullptr</span>);</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;        <a class="code" href="../../d4/dee/a00008.php#a3b8cec2e32546713915f8c6303c951f1">~Scene</a>();</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;    <span class="keyword">public</span> slots:</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;        <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d4/dee/a00008.php#a7faff47f5c1b1ebc986f768c9b9732ec">update</a>() = 0;</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;    signals:</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;        </div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00037"></a><span class="lineno"><a class="line" href="../../d4/dee/a00008.php#a5b9c0375ba50d6f3f7e83d983088ac08">   37</a></span>&#160;        <span class="keywordtype">bool</span> <a class="code" href="../../d4/dee/a00008.php#a5b9c0375ba50d6f3f7e83d983088ac08">initialized</a>;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;    </div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;        QTimer* updater;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;};</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="preprocessor">#endif //HEADER_SCENE</span></div><div class="ttc" id="a00008_php_a5b9c0375ba50d6f3f7e83d983088ac08"><div class="ttname"><a href="../../d4/dee/a00008.php#a5b9c0375ba50d6f3f7e83d983088ac08">Scene::initialized</a></div><div class="ttdeci">bool initialized</div><div class="ttdef"><b>Definition:</b> <a href="../../db/db2/a00020_source.php#l00037">Scene.hpp:37</a></div></div>
<div class="ttc" id="a00008_php_abaaf58cde185094df3ab47c5eedef55e"><div class="ttname"><a href="../../d4/dee/a00008.php#abaaf58cde185094df3ab47c5eedef55e">Scene::Scene</a></div><div class="ttdeci">Scene(QObject *parent=nullptr)</div><div class="ttdoc">Construct the QGraphicsScene. </div></div>
<div class="ttc" id="a00008_php_a7faff47f5c1b1ebc986f768c9b9732ec"><div class="ttname"><a href="../../d4/dee/a00008.php#a7faff47f5c1b1ebc986f768c9b9732ec">Scene::update</a></div><div class="ttdeci">virtual void update()=0</div><div class="ttdoc">A pure virtual method to redefine it in child classes. </div></div>
<div class="ttc" id="a00008_php"><div class="ttname"><a href="../../d4/dee/a00008.php">Scene</a></div><div class="ttdoc">An implementation of QGraphcsScene with an updator. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/db2/a00020_source.php#l00019">Scene.hpp:19</a></div></div>
<div class="ttc" id="a00008_php_a3b8cec2e32546713915f8c6303c951f1"><div class="ttname"><a href="../../d4/dee/a00008.php#a3b8cec2e32546713915f8c6303c951f1">Scene::~Scene</a></div><div class="ttdeci">~Scene()</div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_a02ca41573efbfa5a2fd3c2b5453f5e3.php">QTTests</a></li><li class="navelem"><a class="el" href="../../dir_241af41b803d499a248aecae0c64f982.php">Widgets</a></li><li class="navelem"><a class="el" href="../../db/db2/a00020.php">Scene.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
