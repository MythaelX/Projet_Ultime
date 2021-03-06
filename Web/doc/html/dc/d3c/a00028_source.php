<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: script.js Source File</title>
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
$(document).ready(function(){initNavTree('dc/d3c/a00028_source.php','../../');});
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
<div class="title">script.js</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../dc/d3c/a00028.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">/*!*    \brief    set marginTop for the style for all pages*/</span></div><div class="line"><a name="l00008"></a><span class="lineno"><a class="line" href="../../dc/d3c/a00028.php#a2e6e5ecd2bc858e1a18619005717e38a">    8</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../dc/d3c/a00028.php#a2e6e5ecd2bc858e1a18619005717e38a">posMain</a>(){</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;    var main = $(<span class="stringliteral">&quot;main&quot;</span>);</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;    <span class="keywordflow">if</span>(isIn(<span class="stringliteral">&quot;index.php&quot;</span>)){</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;        <span class="keywordflow">if</span>(main.style.display == <span class="stringliteral">&quot;none&quot;</span>){</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;            main.style.marginTop = <span class="stringliteral">&quot;5%&quot;</span>;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;        } <span class="keywordflow">else</span> {</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;            main.style.marginTop = <span class="stringliteral">&quot;8%&quot;</span>;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;        }</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;    } <span class="keywordflow">else</span> <span class="keywordflow">if</span>(isIn(<span class="stringliteral">&quot;connexion.php&quot;</span>)){</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;        main.style.marginTop = <span class="stringliteral">&quot;5%&quot;</span>;</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    } <span class="keywordflow">else</span> <span class="keywordflow">if</span>(isIn(<span class="stringliteral">&quot;inscription.php&quot;</span>)){</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        main.style.marginTop = <span class="stringliteral">&quot;3%&quot;</span>;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    } <span class="keywordflow">else</span> <span class="keywordflow">if</span>(isIn(<span class="stringliteral">&quot;palmares.php&quot;</span>)){</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;        main.style.marginTop = <span class="stringliteral">&quot;2%&quot;</span>;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(isIn(<span class="stringliteral">&quot;creer-une-partie.php&quot;</span>)){</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;        main.style.marginTop = <span class="stringliteral">&quot;3%&quot;</span>;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(isIn(<span class="stringliteral">&quot;jeu.php&quot;</span>)){</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;        main.style.marginTop = <span class="stringliteral">&quot;3%&quot;</span>;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;    }</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;    addOnresize(<a class="code" href="../../dc/d3c/a00028.php#a2e6e5ecd2bc858e1a18619005717e38a">posMain</a>);</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;}</div><div class="ttc" id="a00028_php_a2e6e5ecd2bc858e1a18619005717e38a"><div class="ttname"><a href="../../dc/d3c/a00028.php#a2e6e5ecd2bc858e1a18619005717e38a">posMain</a></div><div class="ttdeci">function posMain()</div><div class="ttdoc">set marginTop for the style for all pages </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/d3c/a00028_source.php#l00008">script.js:8</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_2867b8401105090ba43035c8b1fd9c0c.php">js</a></li><li class="navelem"><a class="el" href="../../dc/d3c/a00028.php">script.js</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
