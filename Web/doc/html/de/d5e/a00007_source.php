<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: creer-une-partie.php Source File</title>
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
$(document).ready(function(){initNavTree('de/d5e/a00007_source.php','../../');});
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
<div class="title">creer-une-partie.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../de/d5e/a00007.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div><div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;    require_once(<span class="stringliteral">&quot;php/bases/class-Head_Creator.php&quot;</span>);</div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;    require_once(<span class="stringliteral">&quot;php/bases/_functions.php&quot;</span>);</div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;    require_once(<span class="stringliteral">&quot;php/bases/bdd.php&quot;</span>);</div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;    require_once(<span class="stringliteral">&quot;php/bddConnect.inc&quot;</span>);</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;</div><div class="line"><a name="l00007"></a><span class="lineno"><a class="line" href="../../de/d5e/a00007.php#a94f91e878bce0991e2cd595c5dd79b3f">    7</a></span>&#160;    <a class="code" href="../../de/d5e/a00007.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a> = <span class="keyword">new</span> Bdd(<span class="stringliteral">&quot;mysql&quot;</span>, $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);</div><div class="line"><a name="l00008"></a><span class="lineno"><a class="line" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">    8</a></span>&#160;    <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a> = <span class="keyword">new</span> Head_Creator(<span class="stringliteral">&quot;./&quot;</span>);</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;    <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_title(get_site_name(<a class="code" href="../../de/d5e/a00007.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>));</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;    <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_charset(<span class="stringliteral">&quot;utf-8&quot;</span>);</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;    <span class="comment">/* Styles du site */</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;        <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_style(<span class="stringliteral">&quot;design/css/home_made.less&quot;</span>);</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;        <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_style(<span class="stringliteral">&quot;design/css/style.less&quot;</span>);</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;    <span class="comment">/******************/</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="comment">/* Scripts de base du site */</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_script(<span class="stringliteral">&quot;js/bases/_script.js&quot;</span>);</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;        <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_script(<span class="stringliteral">&quot;js/bases/ajax.js&quot;</span>);</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;        <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_script(<span class="stringliteral">&quot;js/bases/less.min.js&quot;</span>);</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;        <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_script(<span class="stringliteral">&quot;js/bases/js.cookie.js&quot;</span>);</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;    <span class="comment">/***************************/</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;    <span class="comment">/* Scripts du site */</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;    <span class="comment">/*******************/</span></div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;    <span class="comment">/* Scripts personnels */</span></div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;    <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_script(<span class="stringliteral">&quot;js/navBar.js&quot;</span>);</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;    <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;head_script(<span class="stringliteral">&quot;js/Creation.js&quot;</span>);</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;    <span class="comment">/***************************/</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;    <a class="code" href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a>-&gt;show();  <span class="comment">//Affichage du code de l&#39;en-tête</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;?&gt;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;    &lt;body <span class="keywordtype">id</span>=<span class="stringliteral">&quot;body&quot;</span>&gt;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;        &lt;header&gt;&lt;?php require_once(<span class="stringliteral">&quot;php/header.temp.inc&quot;</span>); ?&gt;&lt;/header&gt;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;        &lt;nav&gt;&lt;?php require_once(<span class="stringliteral">&quot;php/nav.temp.inc&quot;</span>); ?&gt;&lt;/nav&gt;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;        &lt;main&gt;</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;            &lt;?php require_once(<span class="stringliteral">&quot;php/creation.php&quot;</span>);?&gt;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;            &lt;div&gt;</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;        &lt;/main&gt;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;        &lt;footer&gt;&lt;?php require_once(<span class="stringliteral">&quot;php/footer.temp.inc&quot;</span>); ?&gt;&lt;/footer&gt;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;    &lt;/div&gt;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    &lt;/body&gt;</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;&lt;/html&gt;</div><div class="ttc" id="a00007_php_a687ea7fcd78263867b5bd34ed56b6379"><div class="ttname"><a href="../../de/d5e/a00007.php#a687ea7fcd78263867b5bd34ed56b6379">$head</a></div><div class="ttdeci">$head</div><div class="ttdef"><b>Definition:</b> <a href="../../de/d5e/a00007_source.php#l00008">creer-une-partie.php:8</a></div></div>
<div class="ttc" id="a00007_php_a94f91e878bce0991e2cd595c5dd79b3f"><div class="ttname"><a href="../../de/d5e/a00007.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a></div><div class="ttdeci">$bdd</div><div class="ttdef"><b>Definition:</b> <a href="../../de/d5e/a00007_source.php#l00007">creer-une-partie.php:7</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../de/d5e/a00007.php">creer-une-partie.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
