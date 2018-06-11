<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: errors.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d6/d97/a00045_source.php','../../');});
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
<div class="title">errors.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d6/d97/a00045.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_ERRORS</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_ERRORS</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d8/d41/a00038.php">console.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d3/dea/a00046.php">files.hpp</a>&quot;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d3/d8b/a00059.php">time.hpp</a>&quot;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno"><a class="line" href="../../d6/d97/a00045.php#a08ee21f84a6b44ca59d7f045b55d6bfc">   18</a></span>&#160;<span class="preprocessor">#define line_number __LINE__</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#ifndef DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;    <span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    <span class="keywordtype">void</span> printArguments(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967">Colors</a> color, std::string arg, T in, <span class="keywordtype">size_t</span> line){</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;        std::cout &lt;&lt; <a class="code" href="../../d7/dec/a00010.php">Color</a>(color);</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;        std::cout &lt;&lt; Color(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a1e23852820b9154316c7c06e2b7ba051">Colors::NORMAL</a>, color) &lt;&lt; <span class="stringliteral">&quot;# &quot;</span>;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;        std::cout &lt;&lt; Color(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a2909dd0e0336f10b6da9735b859a3d19">Colors::BOLD</a>, color) &lt;&lt; arg;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;        std::cout &lt;&lt; Color(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a1e23852820b9154316c7c06e2b7ba051">Colors::NORMAL</a>, color) &lt;&lt; <span class="stringliteral">&quot;: &quot;</span>;</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;        std::cout &lt;&lt; Color(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a2909dd0e0336f10b6da9735b859a3d19">Colors::BOLD</a>, color) &lt;&lt; in;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;        std::cout &lt;&lt; Color(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a1e23852820b9154316c7c06e2b7ba051">Colors::NORMAL</a>, color) &lt;&lt; <span class="stringliteral">&quot; on line &quot;</span>;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;        std::cout &lt;&lt; Color(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a2909dd0e0336f10b6da9735b859a3d19">Colors::BOLD</a>, color) &lt;&lt; line &lt;&lt; std::endl;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        std::cout &lt;&lt; Color(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a1e23852820b9154316c7c06e2b7ba051">Colors::NORMAL</a>, color) &lt;&lt; <span class="stringliteral">&quot;\t&quot;</span>;</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;    }</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#endif //DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#ifndef DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;    <span class="keywordtype">void</span> errors_log();</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;    <span class="keyword">template</span>&lt;<span class="keyword">class </span>T, <span class="keyword">class </span>...Args&gt; <span class="keywordtype">void</span> errors_log(T in, Args... args){</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;        std::cout &lt;&lt; in;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;        errors_log(args...);</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;    }</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="preprocessor">#endif //DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div><div class="line"><a name="l00049"></a><span class="lineno"><a class="line" href="../../d6/d97/a00045.php#aae3e42b5bf8dba8bf6431f2dea60c67b">   49</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class </span>T, <span class="keyword">class </span>...Args&gt; <span class="keywordtype">void</span> <a class="code" href="../../d6/d97/a00045.php#aae3e42b5bf8dba8bf6431f2dea60c67b">error_log</a>(<span class="keywordtype">size_t</span> line, T in, Args... args){</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    printArguments(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a6c91c7a0d965eea06426a9d94fed419f">Colors::RED_F</a>, <span class="stringliteral">&quot; ERR&quot;</span>, in, line);</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    errors_log(args...);</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;}</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;<span class="preprocessor">#ifndef DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <span class="keywordtype">void</span> warnings_log();</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    <span class="keyword">template</span>&lt;<span class="keyword">class </span>T, <span class="keyword">class </span>...Args&gt; <span class="keywordtype">void</span> warnings_log(T in, Args... args){</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;        std::cout &lt;&lt; in;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;        warnings_log(args...);</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;    }</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;<span class="preprocessor">#endif //DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00069"></a><span class="lineno"><a class="line" href="../../d6/d97/a00045.php#ab02b1d548b1c53cda0de554f2e086e43">   69</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class </span>T, <span class="keyword">class </span>...Args&gt; <span class="keywordtype">void</span> <a class="code" href="../../d6/d97/a00045.php#ab02b1d548b1c53cda0de554f2e086e43">warning_log</a>(<span class="keywordtype">size_t</span> line, T in, Args... args){</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    printArguments(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a8a64c210ea569e6832792e099c006157">Colors::LIGHT_YELLOW_F</a>, <span class="stringliteral">&quot;WARN&quot;</span>, in, line);</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    warnings_log(args...);</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;}</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;<span class="preprocessor">#ifndef DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;    <span class="keywordtype">void</span> infos_log();</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;    <span class="keyword">template</span>&lt;<span class="keyword">class </span>T, <span class="keyword">class </span>...Args&gt; <span class="keywordtype">void</span> infos_log(T in, Args... args){</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;        std::cout &lt;&lt; in;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;        infos_log(args...);</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;    }</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;<span class="preprocessor">#endif //DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;</div><div class="line"><a name="l00089"></a><span class="lineno"><a class="line" href="../../d6/d97/a00045.php#a44a10c1b63e7f3384683e01f34ccd0e8">   89</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class </span>T, <span class="keyword">class </span>...Args&gt; <span class="keywordtype">void</span> <a class="code" href="../../d6/d97/a00045.php#a44a10c1b63e7f3384683e01f34ccd0e8">info_log</a>(<span class="keywordtype">size_t</span> line, T in, Args... args){</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;    printArguments(<a class="code" href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a131f0f8b48b6ef48d2d3093b20081110">Colors::CYAN_F</a>, <span class="stringliteral">&quot;INFO&quot;</span>, in, line);</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;    infos_log(args...);</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;}</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;<span class="preprocessor">#endif //HEADER_ERRORS</span></div><div class="ttc" id="a00038_php_a55ecd4f2ec2ebfe8d5b0163e4ac2a967a1e23852820b9154316c7c06e2b7ba051"><div class="ttname"><a href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a1e23852820b9154316c7c06e2b7ba051">Colors::NORMAL</a></div></div>
<div class="ttc" id="a00038_php_a55ecd4f2ec2ebfe8d5b0163e4ac2a967a2909dd0e0336f10b6da9735b859a3d19"><div class="ttname"><a href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a2909dd0e0336f10b6da9735b859a3d19">Colors::BOLD</a></div></div>
<div class="ttc" id="a00038_php_a55ecd4f2ec2ebfe8d5b0163e4ac2a967a8a64c210ea569e6832792e099c006157"><div class="ttname"><a href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a8a64c210ea569e6832792e099c006157">Colors::LIGHT_YELLOW_F</a></div></div>
<div class="ttc" id="a00038_php_a55ecd4f2ec2ebfe8d5b0163e4ac2a967a6c91c7a0d965eea06426a9d94fed419f"><div class="ttname"><a href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a6c91c7a0d965eea06426a9d94fed419f">Colors::RED_F</a></div></div>
<div class="ttc" id="a00045_php_a44a10c1b63e7f3384683e01f34ccd0e8"><div class="ttname"><a href="../../d6/d97/a00045.php#a44a10c1b63e7f3384683e01f34ccd0e8">info_log</a></div><div class="ttdeci">void info_log(size_t line, T in, Args...args)</div><div class="ttdoc">Print the given text like an information. </div><div class="ttdef"><b>Definition:</b> <a href="../../d6/d97/a00045_source.php#l00089">errors.hpp:89</a></div></div>
<div class="ttc" id="a00045_php_ab02b1d548b1c53cda0de554f2e086e43"><div class="ttname"><a href="../../d6/d97/a00045.php#ab02b1d548b1c53cda0de554f2e086e43">warning_log</a></div><div class="ttdeci">void warning_log(size_t line, T in, Args...args)</div><div class="ttdoc">Print the given text like a warning. </div><div class="ttdef"><b>Definition:</b> <a href="../../d6/d97/a00045_source.php#l00069">errors.hpp:69</a></div></div>
<div class="ttc" id="a00045_php_aae3e42b5bf8dba8bf6431f2dea60c67b"><div class="ttname"><a href="../../d6/d97/a00045.php#aae3e42b5bf8dba8bf6431f2dea60c67b">error_log</a></div><div class="ttdeci">void error_log(size_t line, T in, Args...args)</div><div class="ttdoc">Print the given text like an error. </div><div class="ttdef"><b>Definition:</b> <a href="../../d6/d97/a00045_source.php#l00049">errors.hpp:49</a></div></div>
<div class="ttc" id="a00046_php"><div class="ttname"><a href="../../d3/dea/a00046.php">files.hpp</a></div></div>
<div class="ttc" id="a00038_php_a55ecd4f2ec2ebfe8d5b0163e4ac2a967a131f0f8b48b6ef48d2d3093b20081110"><div class="ttname"><a href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967a131f0f8b48b6ef48d2d3093b20081110">Colors::CYAN_F</a></div></div>
<div class="ttc" id="a00059_php"><div class="ttname"><a href="../../d3/d8b/a00059.php">time.hpp</a></div></div>
<div class="ttc" id="a00038_php_a55ecd4f2ec2ebfe8d5b0163e4ac2a967"><div class="ttname"><a href="../../d8/d41/a00038.php#a55ecd4f2ec2ebfe8d5b0163e4ac2a967">Colors</a></div><div class="ttdeci">Colors</div><div class="ttdoc">Colors list. </div><div class="ttdef"><b>Definition:</b> <a href="../../d8/d41/a00038_source.php#l00015">console.hpp:15</a></div></div>
<div class="ttc" id="a00038_php"><div class="ttname"><a href="../../d8/d41/a00038.php">console.hpp</a></div></div>
<div class="ttc" id="a00010_php"><div class="ttname"><a href="../../d7/dec/a00010.php">Color</a></div><div class="ttdoc">Change the text color in the console. </div><div class="ttdef"><b>Definition:</b> <a href="../../d8/d41/a00038_source.php#l00062">console.hpp:62</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d6/d97/a00045.php">errors.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>