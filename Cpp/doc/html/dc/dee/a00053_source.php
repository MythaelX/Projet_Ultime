<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: Args.hpp Source File</title>
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
   &#160;<span id="projectnumber">2.0</span>
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
$(document).ready(function(){initNavTree('dc/dee/a00053_source.php','../../');});
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
<div class="title">Args.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../dc/dee/a00053.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_ARGS</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_ARGS</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;map&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../da/d24/a00068.php">errors.hpp</a>&quot;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d4/de8/a00061.php">convert.hpp</a>&quot;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/dea/a00054.php">array.hpp</a>&quot;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d4/d7d/a00093.php">time.hpp</a>&quot;</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;</div><div class="line"><a name="l00023"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php">   23</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dd/dad/a00005.php">Arguments</a> {</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;        <span class="comment">/* Constructor et Destroyer */</span></div><div class="line"><a name="l00027"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#afe56d8477bfae32c239771056c233311">   27</a></span>&#160;            <a class="code" href="../../dd/dad/a00005.php#afe56d8477bfae32c239771056c233311">Arguments</a>(){}</div><div class="line"><a name="l00028"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a97b9ddc9cc652310880db4d6f1f175f2">   28</a></span>&#160;            <a class="code" href="../../dd/dad/a00005.php#a97b9ddc9cc652310880db4d6f1f175f2">~Arguments</a>(){}</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a126d62fd1d3eed743b06cb1b83f9093d">addProg</a>(<span class="keywordtype">int</span> argc, <span class="keywordtype">char</span>** argv);</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;            <span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a0e9d109a0cf2783b6ab6bfab6df719f3">   47</a></span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a0e9d109a0cf2783b6ab6bfab6df719f3">add</a>(std::string category, T value){</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;                mutex.lock();</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;                    <span class="keywordflow">if</span>(<a class="code" href="../../d1/dea/a00054.php#a54f668e0211381d2d15ca45dcf3c55d0">contains</a>(indexs, category)){</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;                        <span class="keyword">auto</span>&amp; cat = args[category];</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;                        cat.push_back(<a class="code" href="../../d4/de8/a00061.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(value));</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;                    } <span class="keywordflow">else</span> {</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;                        indexs.push_back(category);</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;                        std::vector&lt;std::string&gt; cat;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;                        cat.push_back(<a class="code" href="../../d4/de8/a00061.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(value));</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;                        args[category] = cat;</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;                    }</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;                mutex.unlock();</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;                <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;            }</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;            std::vector&lt;std::string&gt;&amp; <a class="code" href="../../dd/dad/a00005.php#a2758413e36333940451ed0bf8c902706">operator[]</a>(std::string index);</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a06e8b4b5a2f3f46f111e571cd90f6c9c">print</a>(std::string index = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;        std::map&lt;std::string, std::vector&lt;std::string&gt;&gt; args;</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        std::vector&lt;std::string&gt; indexs;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;        std::vector&lt;std::string&gt; error;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;        std::mutex mutex;</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;};</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;<span class="keyword">extern</span> <a class="code" href="../../dd/dad/a00005.php">Arguments</a> <a class="code" href="../../dc/dee/a00053.php#ada59c388a54132792188bb23541d03c1">arguments</a>;</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;<span class="preprocessor">#endif //HEADER_ARGS</span></div><div class="ttc" id="a00005_php"><div class="ttname"><a href="../../dd/dad/a00005.php">Arguments</a></div><div class="ttdoc">A class to manage the arguments. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00023">Args.hpp:23</a></div></div>
<div class="ttc" id="a00061_php"><div class="ttname"><a href="../../d4/de8/a00061.php">convert.hpp</a></div></div>
<div class="ttc" id="a00005_php_a06e8b4b5a2f3f46f111e571cd90f6c9c"><div class="ttname"><a href="../../dd/dad/a00005.php#a06e8b4b5a2f3f46f111e571cd90f6c9c">Arguments::print</a></div><div class="ttdeci">void print(std::string index=&quot;&quot;)</div><div class="ttdoc">Print all the arguments in the index. </div></div>
<div class="ttc" id="a00005_php_a2758413e36333940451ed0bf8c902706"><div class="ttname"><a href="../../dd/dad/a00005.php#a2758413e36333940451ed0bf8c902706">Arguments::operator[]</a></div><div class="ttdeci">std::vector&lt; std::string &gt; &amp; operator[](std::string index)</div><div class="ttdoc">Get the arguments in an index. </div></div>
<div class="ttc" id="a00093_php"><div class="ttname"><a href="../../d4/d7d/a00093.php">time.hpp</a></div></div>
<div class="ttc" id="a00068_php"><div class="ttname"><a href="../../da/d24/a00068.php">errors.hpp</a></div></div>
<div class="ttc" id="a00053_php_ada59c388a54132792188bb23541d03c1"><div class="ttname"><a href="../../dc/dee/a00053.php#ada59c388a54132792188bb23541d03c1">arguments</a></div><div class="ttdeci">Arguments arguments</div><div class="ttdoc">A global arguments variable to save and keep some arguments. </div></div>
<div class="ttc" id="a00005_php_a126d62fd1d3eed743b06cb1b83f9093d"><div class="ttname"><a href="../../dd/dad/a00005.php#a126d62fd1d3eed743b06cb1b83f9093d">Arguments::addProg</a></div><div class="ttdeci">bool addProg(int argc, char **argv)</div><div class="ttdoc">Add the arguments of the main to the object. </div></div>
<div class="ttc" id="a00005_php_a0e9d109a0cf2783b6ab6bfab6df719f3"><div class="ttname"><a href="../../dd/dad/a00005.php#a0e9d109a0cf2783b6ab6bfab6df719f3">Arguments::add</a></div><div class="ttdeci">bool add(std::string category, T value)</div><div class="ttdoc">Add a value to a part of the array. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00047">Args.hpp:47</a></div></div>
<div class="ttc" id="a00005_php_afe56d8477bfae32c239771056c233311"><div class="ttname"><a href="../../dd/dad/a00005.php#afe56d8477bfae32c239771056c233311">Arguments::Arguments</a></div><div class="ttdeci">Arguments()</div><div class="ttdoc">Constructor of the class. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00027">Args.hpp:27</a></div></div>
<div class="ttc" id="a00054_php"><div class="ttname"><a href="../../d1/dea/a00054.php">array.hpp</a></div></div>
<div class="ttc" id="a00061_php_a09a70dbff0164874fba7fda6d3afd8c7"><div class="ttname"><a href="../../d4/de8/a00061.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a></div><div class="ttdeci">std::enable_if&lt; std::is_enum&lt; V &gt;::value, std::string &gt;::type tos(V in)</div><div class="ttdoc">Convert an enum in string. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00029">convert.hpp:29</a></div></div>
<div class="ttc" id="a00054_php_a54f668e0211381d2d15ca45dcf3c55d0"><div class="ttname"><a href="../../d1/dea/a00054.php#a54f668e0211381d2d15ca45dcf3c55d0">contains</a></div><div class="ttdeci">bool contains(std::vector&lt; T &gt; table, T value)</div><div class="ttdoc">Verify if a vector contains or not something. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00103">array.hpp:103</a></div></div>
<div class="ttc" id="a00005_php_a97b9ddc9cc652310880db4d6f1f175f2"><div class="ttname"><a href="../../dd/dad/a00005.php#a97b9ddc9cc652310880db4d6f1f175f2">Arguments::~Arguments</a></div><div class="ttdeci">~Arguments()</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00028">Args.hpp:28</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_9cc7dab42d10c04902c95d2c14820089.php">Widgets</a></li><li class="navelem"><a class="el" href="../../dir_42c90fb9218922ddd8984da73ce0d59c.php">C++</a></li><li class="navelem"><a class="el" href="../../dc/dee/a00053.php">Args.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
