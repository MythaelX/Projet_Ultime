<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: phantomLoader.js Source File</title>
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
$(document).ready(function(){initNavTree('d4/d6d/a00055_source.php','../../');});
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
<div class="title">phantomLoader.js</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d4/d6d/a00055.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/************************************************************************************/</span></div><div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">/*                                                                                  */</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">/*                  File : phantomLoader.js                                         */</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">/*                      Created by Mathias CABIOCH-DELALANDE                        */</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">/*                          Last modification : 21/04/2018                          */</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">/*                                                                                  */</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">/*                      Authorization : use only                                    */</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">/*                                                                                  */</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">/************************************************************************************/</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">/* It doesn&#39;t work */</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno"><a class="line" href="../../d4/d6d/a00055.php#a85d8b1b97106b359e1c9ee119ebe5832">   13</a></span>&#160;var <a class="code" href="../../d4/d6d/a00055.php#a85d8b1b97106b359e1c9ee119ebe5832">page</a> = require(<span class="stringliteral">&#39;webpage&#39;</span>).create();</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00015"></a><span class="lineno"><a class="line" href="../../d4/d6d/a00055.php#acdb77dc97eb44e91baaadd41d9d078fc">   15</a></span>&#160;var <a class="code" href="../../d4/d6d/a00055.php#acdb77dc97eb44e91baaadd41d9d078fc">system</a> = require(<span class="stringliteral">&#39;system&#39;</span>);</div><div class="line"><a name="l00016"></a><span class="lineno"><a class="line" href="../../d4/d6d/a00055.php#a64e5c861448a80a00f5c93e96de17d7a">   16</a></span>&#160;var <a class="code" href="../../d4/d6d/a00055.php#a64e5c861448a80a00f5c93e96de17d7a">args</a> = system.args;</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno"><a class="line" href="../../d4/d6d/a00055.php#a4f51755beb9f3b9cd734072db8452461">   18</a></span>&#160;<span class="keywordflow">if</span>(args.length === 1){</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    console.log(<span class="stringliteral">&#39;Try to pass some arguments when invoking this script!&#39;</span>);</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    phantom.exit();</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;}</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;</div><div class="line"><a name="l00023"></a><span class="lineno"><a class="line" href="../../d4/d6d/a00055.php#a777d340308efc2dc3c9640c6f390f098">   23</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../d4/d6d/a00055.php#a777d340308efc2dc3c9640c6f390f098">pageGetter</a>(){</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    <span class="keywordflow">return</span> document.getElementsByTagName(<span class="stringliteral">&#39;body&#39;</span>)[0].textContent;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;}</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00027"></a><span class="lineno"><a class="line" href="../../d4/d6d/a00055.php#a306ff2d1b3b3a0583f1bd137dbe7e6fb">   27</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../d4/d6d/a00055.php#a306ff2d1b3b3a0583f1bd137dbe7e6fb">pageTreatment</a>(status){</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;    </div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;    <span class="keywordflow">if</span>(status !== <span class="stringliteral">&quot;success&quot;</span>) {</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        console.log(<span class="stringliteral">&#39;Unable to load the page&#39;</span>);</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;        phantom.exit();</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;    }</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;    </div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;    var code = <a class="code" href="../../d4/d6d/a00055.php#a85d8b1b97106b359e1c9ee119ebe5832">page</a>.evaluate(<a class="code" href="../../d4/d6d/a00055.php#a777d340308efc2dc3c9640c6f390f098">pageGetter</a>);</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;    console.log(code);</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;    </div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;    phantom.exit();</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;}</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<a class="code" href="../../d4/d6d/a00055.php#a85d8b1b97106b359e1c9ee119ebe5832">page</a>.open(args[1], <a class="code" href="../../d4/d6d/a00055.php#a306ff2d1b3b3a0583f1bd137dbe7e6fb">pageTreatment</a>);</div><div class="ttc" id="a00055_php_a306ff2d1b3b3a0583f1bd137dbe7e6fb"><div class="ttname"><a href="../../d4/d6d/a00055.php#a306ff2d1b3b3a0583f1bd137dbe7e6fb">pageTreatment</a></div><div class="ttdeci">function pageTreatment(status)</div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d6d/a00055_source.php#l00027">phantomLoader.js:27</a></div></div>
<div class="ttc" id="a00055_php_a777d340308efc2dc3c9640c6f390f098"><div class="ttname"><a href="../../d4/d6d/a00055.php#a777d340308efc2dc3c9640c6f390f098">pageGetter</a></div><div class="ttdeci">function pageGetter()</div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d6d/a00055_source.php#l00023">phantomLoader.js:23</a></div></div>
<div class="ttc" id="a00055_php_a64e5c861448a80a00f5c93e96de17d7a"><div class="ttname"><a href="../../d4/d6d/a00055.php#a64e5c861448a80a00f5c93e96de17d7a">args</a></div><div class="ttdeci">var args</div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d6d/a00055_source.php#l00016">phantomLoader.js:16</a></div></div>
<div class="ttc" id="a00055_php_a85d8b1b97106b359e1c9ee119ebe5832"><div class="ttname"><a href="../../d4/d6d/a00055.php#a85d8b1b97106b359e1c9ee119ebe5832">page</a></div><div class="ttdeci">var page</div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d6d/a00055_source.php#l00013">phantomLoader.js:13</a></div></div>
<div class="ttc" id="a00055_php_acdb77dc97eb44e91baaadd41d9d078fc"><div class="ttname"><a href="../../d4/d6d/a00055.php#acdb77dc97eb44e91baaadd41d9d078fc">system</a></div><div class="ttdeci">var system</div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d6d/a00055_source.php#l00015">phantomLoader.js:15</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_2867b8401105090ba43035c8b1fd9c0c.php">js</a></li><li class="navelem"><a class="el" href="../../dir_50bae84d6b514f2657cf039fb05a19d6.php">bases</a></li><li class="navelem"><a class="el" href="../../d4/d6d/a00055.php">phantomLoader.js</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
