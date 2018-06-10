<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: sorting.hpp Source File</title>
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
   <div id="projectname">C++
   &#160;<span id="projectnumber">1.0</span>
   </div>
   <div id="projectbrief">My own functions in C++</div>
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
$(document).ready(function(){initNavTree('d1/d22/a00057_source.php','../../');});
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
<div class="title">sorting.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/d22/a00057.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_SORTING</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_SORTING</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;iostream&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;algorithm&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;map&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#include &lt;set&gt;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#include &lt;functional&gt;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> Key, <span class="keyword">typename</span> Value&gt;</div><div class="line"><a name="l00024"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#a26ed92f1897ceffb429cd8f436460a3e">   24</a></span>&#160;<span class="keyword">auto</span> <a class="code" href="../../d1/d22/a00057.php#a26ed92f1897ceffb429cd8f436460a3e">sortAsc</a>(std::map&lt;Key, Value&gt; map){</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;    std::vector&lt;std::pair&lt;Key, Value&gt;&gt; out;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;    <span class="keyword">typedef</span> std::function&lt;bool(std::pair&lt;Key, Value&gt;, std::pair&lt;Key, Value&gt;)&gt; Comparator;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;    Comparator asc =</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        [](std::pair&lt;Key, Value&gt; elem1, std::pair&lt;Key, Value&gt; elem2){</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;            <span class="keywordflow">return</span> elem1.second &lt; elem2.second;</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;        };</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;    std::set&lt;std::pair&lt;Key, Value&gt;, Comparator&gt; <span class="keyword">set</span>(</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;        map.begin(), map.end(), asc);</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;    <span class="keywordflow">for</span>(<span class="keyword">auto</span> s : <span class="keyword">set</span>){</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;        out.push_back(s);</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;    }</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;}</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> Key, <span class="keyword">class</span> Value&gt;</div><div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#a3d14862e28ea7d3bb92662b4068f5763">   51</a></span>&#160;<span class="keyword">auto</span> <a class="code" href="../../d1/d22/a00057.php#a3d14862e28ea7d3bb92662b4068f5763">sortDesc</a>(std::map&lt;Key, Value&gt; map){</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    std::vector&lt;std::pair&lt;Key, Value&gt;&gt; out;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    <span class="keyword">typedef</span> std::function&lt;bool(std::pair&lt;Key, Value&gt;, std::pair&lt;Key, Value&gt;)&gt; Comparator;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    Comparator desc =</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;        [](std::pair&lt;Key, Value&gt; elem1, std::pair&lt;Key, Value&gt; elem2){</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;            <span class="keywordflow">return</span> elem1.second &gt; elem2.second;</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;        };</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    std::set&lt;std::pair&lt;Key, Value&gt;, Comparator&gt; <span class="keyword">set</span>(</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;        map.begin(), map.end(), desc);</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    <span class="keywordflow">for</span>(<span class="keyword">auto</span> s : <span class="keyword">set</span>){</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;        out.push_back(s);</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    }</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;}</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;<span class="preprocessor">#endif //HEADER_SORTING</span></div><div class="ttc" id="a00057_php_a26ed92f1897ceffb429cd8f436460a3e"><div class="ttname"><a href="../../d1/d22/a00057.php#a26ed92f1897ceffb429cd8f436460a3e">sortAsc</a></div><div class="ttdeci">auto sortAsc(std::map&lt; Key, Value &gt; map)</div><div class="ttdoc">sort a map ascendently </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00024">sorting.hpp:24</a></div></div>
<div class="ttc" id="a00057_php_a3d14862e28ea7d3bb92662b4068f5763"><div class="ttname"><a href="../../d1/d22/a00057.php#a3d14862e28ea7d3bb92662b4068f5763">sortDesc</a></div><div class="ttdeci">auto sortDesc(std::map&lt; Key, Value &gt; map)</div><div class="ttdoc">Sort a map descendently. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00051">sorting.hpp:51</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d1/d22/a00057.php">sorting.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
