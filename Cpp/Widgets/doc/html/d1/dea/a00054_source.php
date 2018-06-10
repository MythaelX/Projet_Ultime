<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: DrawScene.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d1/dea/a00054_source.php','../../');});
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
<div class="title">DrawScene.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/dea/a00054.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_DRAW_SCENE</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_DRAW_SCENE</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../db/db6/a00074.php">Scene.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dd/d1b/a00015.php">DrawScene</a> : <span class="keyword">public</span> <a class="code" href="../../d0/dc0/a00033.php">Scene</a> {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    Q_OBJECT</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;        <a class="code" href="../../dd/d1b/a00015.php#a1f57b8878a4c601e45990ab2f461fcba">DrawScene</a>(QObject* parent = NULL);</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;        <a class="code" href="../../dd/d1b/a00015.php#ab95069018a89de490bb75a7847a7c999">~DrawScene</a>();</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#aa9cd414cc46f3396f58e4a7af88d6b4c">setTilesize</a>(<span class="keywordtype">int</span> s);</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;    <span class="keyword">public</span> slots:</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#ad0292ea7a4d4c501a7bf5c9fb6282d7e">update</a>();</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;    signals:</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        </div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a124d4bd03677251c2159bd0dd4254306">   43</a></span>&#160;        <span class="keywordtype">int</span> <a class="code" href="../../dd/d1b/a00015.php#a124d4bd03677251c2159bd0dd4254306">tileSize</a>;</div><div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#aecb82ecbd590818d52d58227101a490d">   44</a></span>&#160;        <span class="keywordtype">bool</span> <a class="code" href="../../dd/d1b/a00015.php#aecb82ecbd590818d52d58227101a490d">printed_background</a>;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div><div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a99f3c0b81bbecfbf850e920ffc2f6f0a">   46</a></span>&#160;        std::map&lt;std::string, QPixmap&gt; <a class="code" href="../../dd/d1b/a00015.php#a99f3c0b81bbecfbf850e920ffc2f6f0a">pixmaps</a>;</div><div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#af1a71ac1ae84ae88e00810307b2f146d">   47</a></span>&#160;        std::map&lt;std::string, QPixmap&gt; <a class="code" href="../../dd/d1b/a00015.php#af1a71ac1ae84ae88e00810307b2f146d">scaled_pixmaps</a>;</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    </div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;};</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="preprocessor">#endif //HEADER_DRAW_SCENE</span></div><div class="ttc" id="a00015_php_aecb82ecbd590818d52d58227101a490d"><div class="ttname"><a href="../../dd/d1b/a00015.php#aecb82ecbd590818d52d58227101a490d">DrawScene::printed_background</a></div><div class="ttdeci">bool printed_background</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00044">DrawScene.hpp:44</a></div></div>
<div class="ttc" id="a00074_php"><div class="ttname"><a href="../../db/db6/a00074.php">Scene.hpp</a></div></div>
<div class="ttc" id="a00015_php_ab95069018a89de490bb75a7847a7c999"><div class="ttname"><a href="../../dd/d1b/a00015.php#ab95069018a89de490bb75a7847a7c999">DrawScene::~DrawScene</a></div><div class="ttdeci">~DrawScene()</div></div>
<div class="ttc" id="a00015_php_a99f3c0b81bbecfbf850e920ffc2f6f0a"><div class="ttname"><a href="../../dd/d1b/a00015.php#a99f3c0b81bbecfbf850e920ffc2f6f0a">DrawScene::pixmaps</a></div><div class="ttdeci">std::map&lt; std::string, QPixmap &gt; pixmaps</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00046">DrawScene.hpp:46</a></div></div>
<div class="ttc" id="a00015_php_af1a71ac1ae84ae88e00810307b2f146d"><div class="ttname"><a href="../../dd/d1b/a00015.php#af1a71ac1ae84ae88e00810307b2f146d">DrawScene::scaled_pixmaps</a></div><div class="ttdeci">std::map&lt; std::string, QPixmap &gt; scaled_pixmaps</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00047">DrawScene.hpp:47</a></div></div>
<div class="ttc" id="a00015_php_ad0292ea7a4d4c501a7bf5c9fb6282d7e"><div class="ttname"><a href="../../dd/d1b/a00015.php#ad0292ea7a4d4c501a7bf5c9fb6282d7e">DrawScene::update</a></div><div class="ttdeci">void update()</div><div class="ttdoc">Overload of the pur virtual parent method Scene::update() </div></div>
<div class="ttc" id="a00015_php_aa9cd414cc46f3396f58e4a7af88d6b4c"><div class="ttname"><a href="../../dd/d1b/a00015.php#aa9cd414cc46f3396f58e4a7af88d6b4c">DrawScene::setTilesize</a></div><div class="ttdeci">void setTilesize(int s)</div><div class="ttdoc">Set the tiles&amp;#39; size. </div></div>
<div class="ttc" id="a00033_php"><div class="ttname"><a href="../../d0/dc0/a00033.php">Scene</a></div><div class="ttdoc">An implementation of QGraphcsScene with an updator. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/db6/a00074_source.php#l00019">Scene.hpp:19</a></div></div>
<div class="ttc" id="a00015_php_a124d4bd03677251c2159bd0dd4254306"><div class="ttname"><a href="../../dd/d1b/a00015.php#a124d4bd03677251c2159bd0dd4254306">DrawScene::tileSize</a></div><div class="ttdeci">int tileSize</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00043">DrawScene.hpp:43</a></div></div>
<div class="ttc" id="a00015_php_a1f57b8878a4c601e45990ab2f461fcba"><div class="ttname"><a href="../../dd/d1b/a00015.php#a1f57b8878a4c601e45990ab2f461fcba">DrawScene::DrawScene</a></div><div class="ttdeci">DrawScene(QObject *parent=NULL)</div><div class="ttdoc">Create the DrawScene. </div></div>
<div class="ttc" id="a00015_php"><div class="ttname"><a href="../../dd/d1b/a00015.php">DrawScene</a></div><div class="ttdoc">A Scene implementation to draw with tiles system. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00017">DrawScene.hpp:17</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_a02ca41573efbfa5a2fd3c2b5453f5e3.php">QTTests</a></li><li class="navelem"><a class="el" href="../../dir_241af41b803d499a248aecae0c64f982.php">Widgets</a></li><li class="navelem"><a class="el" href="../../d1/dea/a00054.php">DrawScene.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
