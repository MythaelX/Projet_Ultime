<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: getter.php Source File</title>
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
$(document).ready(function(){initNavTree('d4/d8c/a00035_source.php','../../');});
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
<div class="title">getter.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d4/d8c/a00035.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;    header(<span class="stringliteral">&quot;Content-Type: text/plain; charset=utf-8&quot;</span>);</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;    header(<span class="stringliteral">&quot;Cache-control: no-store, no-cache, must-revalidate&quot;</span>);</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;    header(<span class="stringliteral">&quot;Pragma: no-cache&quot;</span>);</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div><div class="line"><a name="l00020"></a><span class="lineno"><a class="line" href="../../d4/d8c/a00035.php#a9a4a6fba2208984cabb3afacadf33919">   20</a></span>&#160;    <a class="code" href="../../d4/d8c/a00035.php#a9a4a6fba2208984cabb3afacadf33919">$type</a> = $_SERVER[<span class="stringliteral">&quot;REQUEST_METHOD&quot;</span>];</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    <span class="keywordflow">if</span>(<a class="code" href="../../d7/dec/a00010.php#a9e0d51979af70f1e0d06bb7bb7047898">isset</a>($_SERVER[<span class="stringliteral">&quot;PATH_INFO&quot;</span>])){</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;        $serverRequest = substr($_SERVER[<span class="stringliteral">&quot;PATH_INFO&quot;</span>], 1);</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;        $serverRequest = explode(<span class="stringliteral">&quot;/&quot;</span>, $serverRequest);</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;    }</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;    <span class="keywordflow">if</span>(<a class="code" href="../../d4/d8c/a00035.php#a9a4a6fba2208984cabb3afacadf33919">$type</a> == <span class="stringliteral">&quot;PUT&quot;</span>){</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;        parse_str(file_get_contents(<span class="stringliteral">&quot;php://input&quot;</span>), $_PUT);</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;    } <span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d4/d8c/a00035.php#a9a4a6fba2208984cabb3afacadf33919">$type</a> == <span class="stringliteral">&quot;DELETE&quot;</span>){</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        $_DELETE = $_GET;</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;    }</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00038"></a><span class="lineno"><a class="line" href="../../d4/d8c/a00035.php#a443ea3a863c29aed90f572de52c0b04d">   38</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d4/d8c/a00035.php#a443ea3a863c29aed90f572de52c0b04d">nextRes</a>(){</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;        <span class="keywordflow">if</span>(<a class="code" href="../../d7/dec/a00010.php#a9e0d51979af70f1e0d06bb7bb7047898">isset</a>($GLOBALS[<span class="stringliteral">&quot;serverRequest&quot;</span>])){</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;            <span class="keywordflow">return</span> array_shift($GLOBALS[<span class="stringliteral">&quot;serverRequest&quot;</span>]);</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        }</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;        <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;    }</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div><div class="line"><a name="l00050"></a><span class="lineno"><a class="line" href="../../d4/d8c/a00035.php#ab1aeaedb8bf332eee5b85200acfee982">   50</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d4/d8c/a00035.php#ab1aeaedb8bf332eee5b85200acfee982">resNumber</a>(){</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;        <span class="keywordflow">if</span>(<a class="code" href="../../d7/dec/a00010.php#a9e0d51979af70f1e0d06bb7bb7047898">isset</a>($GLOBALS[<span class="stringliteral">&quot;serverRequest&quot;</span>])){</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;            <span class="keywordflow">return</span> sizeOf($GLOBALS[<span class="stringliteral">&quot;serverRequest&quot;</span>]);</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;        }</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;        <span class="keywordflow">return</span> 0;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    }</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;?&gt;</div><div class="ttc" id="a00010_php_a9e0d51979af70f1e0d06bb7bb7047898"><div class="ttname"><a href="../../d7/dec/a00010.php#a9e0d51979af70f1e0d06bb7bb7047898">isset</a></div><div class="ttdeci">function isset()</div><div class="ttdoc">Function to know if a variable exist. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dec/a00010_source.php#l00406">_script.js:406</a></div></div>
<div class="ttc" id="a00035_php_ab1aeaedb8bf332eee5b85200acfee982"><div class="ttname"><a href="../../d4/d8c/a00035.php#ab1aeaedb8bf332eee5b85200acfee982">resNumber</a></div><div class="ttdeci">resNumber()</div><div class="ttdoc">Return the number of arguments in the array. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d8c/a00035_source.php#l00050">getter.php:50</a></div></div>
<div class="ttc" id="a00035_php_a9a4a6fba2208984cabb3afacadf33919"><div class="ttname"><a href="../../d4/d8c/a00035.php#a9a4a6fba2208984cabb3afacadf33919">$type</a></div><div class="ttdeci">$type</div><div class="ttdoc">Get the server method type. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d8c/a00035_source.php#l00020">getter.php:20</a></div></div>
<div class="ttc" id="a00035_php_a443ea3a863c29aed90f572de52c0b04d"><div class="ttname"><a href="../../d4/d8c/a00035.php#a443ea3a863c29aed90f572de52c0b04d">nextRes</a></div><div class="ttdeci">nextRes()</div><div class="ttdoc">Return the next ressource in the array or false. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d8c/a00035_source.php#l00038">getter.php:38</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_05194b7bb14e4bdbd759acf3e4294839.php">php</a></li><li class="navelem"><a class="el" href="../../dir_272b8c85f84b9c47a49e8b7a9d6744ed.php">bases</a></li><li class="navelem"><a class="el" href="../../d4/d8c/a00035.php">getter.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
