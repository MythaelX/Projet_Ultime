<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: coder.js Source File</title>
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
      <li><a href="../../annotated.php"><span>Data&#160;Structures</span></a></li>
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
      <li><a href="../../globals.php"><span>Globals</span></a></li>
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
$(document).ready(function(){initNavTree('d6/d5b/a00026_source.php','../../');});
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
<div class="title">coder.js</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d6/d5b/a00026.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00014"></a><span class="lineno"><a class="line" href="../../d6/d5b/a00026.php#a9feccf800829cefff3a1214b7aaf1e51">   14</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../d6/d5b/a00026.php#a9feccf800829cefff3a1214b7aaf1e51">html_encode</a>(str) {</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;    <span class="keywordflow">return</span> String(str).replace(/&amp;amp;/<a class="code" href="../../de/d11/a00021.php#a103df269476e78897c9c4c6cb8f4eb06">g</a>, <span class="charliteral">&#39;&amp;&#39;</span>).replace(/&amp;<a class="code" href="../../d1/d2b/a00018.php#aa2929dd9fabdb939070c7f14050c5667">lt</a>;/<a class="code" href="../../de/d11/a00021.php#a103df269476e78897c9c4c6cb8f4eb06">g</a>, <span class="charliteral">&#39;&lt;&#39;</span>).replace(/&amp;<a class="code" href="../../d1/d2b/a00018.php#a28160a2164860422bf08b0407ae89d91">gt</a>;/<a class="code" href="../../de/d11/a00021.php#a103df269476e78897c9c4c6cb8f4eb06">g</a>, <span class="charliteral">&#39;&gt;&#39;</span>).replace(/&amp;quot;/<a class="code" href="../../de/d11/a00021.php#a103df269476e78897c9c4c6cb8f4eb06">g</a>, <span class="charliteral">&#39;&quot;&#39;</span>);</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;}</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;</div><div class="line"><a name="l00024"></a><span class="lineno"><a class="line" href="../../d6/d5b/a00026.php#a45e51b85c4813b1c858c8c4ed7fed67f">   24</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../d6/d5b/a00026.php#a45e51b85c4813b1c858c8c4ed7fed67f">html_decode</a>(str) {</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;    <span class="keywordflow">return</span> String(str).replace(/&amp;/<a class="code" href="../../de/d11/a00021.php#a103df269476e78897c9c4c6cb8f4eb06">g</a>, <span class="stringliteral">&#39;&amp;amp;&#39;</span>).replace(/&lt;/<a class="code" href="../../de/d11/a00021.php#a103df269476e78897c9c4c6cb8f4eb06">g</a>, <span class="stringliteral">&#39;&amp;lt;&#39;</span>).replace(/&gt;/<a class="code" href="../../de/d11/a00021.php#a103df269476e78897c9c4c6cb8f4eb06">g</a>, <span class="stringliteral">&#39;&amp;gt;&#39;</span>).replace(/<span class="stringliteral">&quot;/g, &#39;&amp;quot;&#39;);</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="stringliteral">}</span></div><div class="ttc" id="a00018_php_aa2929dd9fabdb939070c7f14050c5667"><div class="ttname"><a href="../../d1/d2b/a00018.php#aa2929dd9fabdb939070c7f14050c5667">lt</a></div><div class="ttdeci">function lt(t, e, n, i, r)</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00006">bootstrap.bundle.min.js:6</a></div></div>
<div class="ttc" id="a00026_php_a45e51b85c4813b1c858c8c4ed7fed67f"><div class="ttname"><a href="../../d6/d5b/a00026.php#a45e51b85c4813b1c858c8c4ed7fed67f">html_decode</a></div><div class="ttdeci">function html_decode(str)</div><div class="ttdoc">Decode html caracters in string. </div><div class="ttdef"><b>Definition:</b> <a href="../../d6/d5b/a00026_source.php#l00024">coder.js:24</a></div></div>
<div class="ttc" id="a00018_php_a28160a2164860422bf08b0407ae89d91"><div class="ttname"><a href="../../d1/d2b/a00018.php#a28160a2164860422bf08b0407ae89d91">gt</a></div><div class="ttdeci">function gt(t, e)</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00006">bootstrap.bundle.min.js:6</a></div></div>
<div class="ttc" id="a00026_php_a9feccf800829cefff3a1214b7aaf1e51"><div class="ttname"><a href="../../d6/d5b/a00026.php#a9feccf800829cefff3a1214b7aaf1e51">html_encode</a></div><div class="ttdeci">function html_encode(str)</div><div class="ttdoc">Encode html caracters in string. </div><div class="ttdef"><b>Definition:</b> <a href="../../d6/d5b/a00026_source.php#l00014">coder.js:14</a></div></div>
<div class="ttc" id="a00021_php_a103df269476e78897c9c4c6cb8f4eb06"><div class="ttname"><a href="../../de/d11/a00021.php#a103df269476e78897c9c4c6cb8f4eb06">g</a></div><div class="ttdeci">var g</div><div class="ttdef"><b>Definition:</b> <a href="../../de/d11/a00021_source.php#l00006">bootstrap/bootstrap.min.js:6</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_2867b8401105090ba43035c8b1fd9c0c.php">js</a></li><li class="navelem"><a class="el" href="../../dir_50bae84d6b514f2657cf039fb05a19d6.php">bases</a></li><li class="navelem"><a class="el" href="../../d6/d5b/a00026.php">coder.js</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
