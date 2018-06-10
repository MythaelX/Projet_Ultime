<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: errors.php Source File</title>
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
$(document).ready(function(){initNavTree('d0/dc0/a00033_source.php','../../');});
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
<div class="title">errors.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d0/dc0/a00033.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div><div class="line"><a name="l00014"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">   14</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>($error, $exit){</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;        header(<span class="stringliteral">&#39;HTTP/1.1 &#39;</span> . $error);</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;        <span class="keywordflow">if</span>($exit === <span class="keyword">true</span>){</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;            <a class="code" href="../../d7/df7/a00058.php#afb00944b44575a6b06d388e807358cd5">exit</a>;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        }</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    }</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;</div><div class="line"><a name="l00023"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a49566ba58b1bc3e0fe9c6e031bcba7a7">   23</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#a49566ba58b1bc3e0fe9c6e031bcba7a7">badRequest</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;400&quot;</span>, $exit);</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;    }</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00028"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a69b3252462672dfe02aed986c9ad420c">   28</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#a69b3252462672dfe02aed986c9ad420c">unauthorized</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;401&quot;</span>, $exit);</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;    }</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#ac64b33d00115e0de4cc70856413f5a29">   33</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#ac64b33d00115e0de4cc70856413f5a29">forbidden</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;403&quot;</span>, $exit);</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;    }</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00038"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a97ae92c22c1e5668410ba32acb032ac0">   38</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#a97ae92c22c1e5668410ba32acb032ac0">notFound</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;404&quot;</span>, $exit);</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;    }</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div><div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a35117e28b8ed5b266466f2f509a39e28">   43</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#a35117e28b8ed5b266466f2f509a39e28">laugth</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;418 I&#39;m a teapot&quot;</span>, $exit);</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    }</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div><div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#acbd041cd9910f5f824af42ec0d252b5c">   48</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#acbd041cd9910f5f824af42ec0d252b5c">serverError</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;500&quot;</span>, $exit);</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    }</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a856ce32f72a512d154b16e4bea83b469">   53</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#a856ce32f72a512d154b16e4bea83b469">notImplemented</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;501&quot;</span>, $exit);</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    }</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div><div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a8a97be188d3b0d8fe3c9ad0794b83173">   58</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#a8a97be188d3b0d8fe3c9ad0794b83173">badGateway</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;502&quot;</span>, $exit);</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    }</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00063"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#ac653444828c80c7f9242e306b5d591fd">   63</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#ac653444828c80c7f9242e306b5d591fd">unavailable</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;503&quot;</span>, $exit);</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    }</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#ac78ddc67fc721a1acddd93679e9c51ab">   68</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d0/dc0/a00033.php#ac78ddc67fc721a1acddd93679e9c51ab">error</a>($exit = <span class="keyword">true</span>){</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a>(<span class="stringliteral">&quot;520&quot;</span>, $exit);</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    }</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;?&gt;</div><div class="ttc" id="a00033_php_ac64b33d00115e0de4cc70856413f5a29"><div class="ttname"><a href="../../d0/dc0/a00033.php#ac64b33d00115e0de4cc70856413f5a29">forbidden</a></div><div class="ttdeci">forbidden($exit=true)</div><div class="ttdoc">Forbidden access error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00033">errors.php:33</a></div></div>
<div class="ttc" id="a00033_php_a69b3252462672dfe02aed986c9ad420c"><div class="ttname"><a href="../../d0/dc0/a00033.php#a69b3252462672dfe02aed986c9ad420c">unauthorized</a></div><div class="ttdeci">unauthorized($exit=true)</div><div class="ttdoc">Unauthorized error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00028">errors.php:28</a></div></div>
<div class="ttc" id="a00033_php_ac78ddc67fc721a1acddd93679e9c51ab"><div class="ttname"><a href="../../d0/dc0/a00033.php#ac78ddc67fc721a1acddd93679e9c51ab">error</a></div><div class="ttdeci">error($exit=true)</div><div class="ttdoc">General error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00068">errors.php:68</a></div></div>
<div class="ttc" id="a00033_php_a8a97be188d3b0d8fe3c9ad0794b83173"><div class="ttname"><a href="../../d0/dc0/a00033.php#a8a97be188d3b0d8fe3c9ad0794b83173">badGateway</a></div><div class="ttdeci">badGateway($exit=true)</div><div class="ttdoc">Bad gateway error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00058">errors.php:58</a></div></div>
<div class="ttc" id="a00058_php_afb00944b44575a6b06d388e807358cd5"><div class="ttname"><a href="../../d7/df7/a00058.php#afb00944b44575a6b06d388e807358cd5">exit</a></div><div class="ttdeci">switch($type) exit</div><div class="ttdef"><b>Definition:</b> <a href="../../d7/df7/a00058_source.php#l00016">request.php:16</a></div></div>
<div class="ttc" id="a00033_php_a35117e28b8ed5b266466f2f509a39e28"><div class="ttname"><a href="../../d0/dc0/a00033.php#a35117e28b8ed5b266466f2f509a39e28">laugth</a></div><div class="ttdeci">laugth($exit=true)</div><div class="ttdoc">I am a teapot. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00043">errors.php:43</a></div></div>
<div class="ttc" id="a00033_php_a856ce32f72a512d154b16e4bea83b469"><div class="ttname"><a href="../../d0/dc0/a00033.php#a856ce32f72a512d154b16e4bea83b469">notImplemented</a></div><div class="ttdeci">notImplemented($exit=true)</div><div class="ttdoc">Not implemented error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00053">errors.php:53</a></div></div>
<div class="ttc" id="a00033_php_a4c6673203933d2acfbb6719aead6a500"><div class="ttname"><a href="../../d0/dc0/a00033.php#a4c6673203933d2acfbb6719aead6a500">setError</a></div><div class="ttdeci">setError($error, $exit)</div><div class="ttdoc">Return an error and exit the script if $exit = true. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00014">errors.php:14</a></div></div>
<div class="ttc" id="a00033_php_a49566ba58b1bc3e0fe9c6e031bcba7a7"><div class="ttname"><a href="../../d0/dc0/a00033.php#a49566ba58b1bc3e0fe9c6e031bcba7a7">badRequest</a></div><div class="ttdeci">badRequest($exit=true)</div><div class="ttdoc">Bad request error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00023">errors.php:23</a></div></div>
<div class="ttc" id="a00033_php_ac653444828c80c7f9242e306b5d591fd"><div class="ttname"><a href="../../d0/dc0/a00033.php#ac653444828c80c7f9242e306b5d591fd">unavailable</a></div><div class="ttdeci">unavailable($exit=true)</div><div class="ttdoc">Unavailable error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00063">errors.php:63</a></div></div>
<div class="ttc" id="a00033_php_acbd041cd9910f5f824af42ec0d252b5c"><div class="ttname"><a href="../../d0/dc0/a00033.php#acbd041cd9910f5f824af42ec0d252b5c">serverError</a></div><div class="ttdeci">serverError($exit=true)</div><div class="ttdoc">Internal server error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00048">errors.php:48</a></div></div>
<div class="ttc" id="a00033_php_a97ae92c22c1e5668410ba32acb032ac0"><div class="ttname"><a href="../../d0/dc0/a00033.php#a97ae92c22c1e5668410ba32acb032ac0">notFound</a></div><div class="ttdeci">notFound($exit=true)</div><div class="ttdoc">Not found error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00038">errors.php:38</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_05194b7bb14e4bdbd759acf3e4294839.php">php</a></li><li class="navelem"><a class="el" href="../../dir_272b8c85f84b9c47a49e8b7a9d6744ed.php">bases</a></li><li class="navelem"><a class="el" href="../../d0/dc0/a00033.php">errors.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
