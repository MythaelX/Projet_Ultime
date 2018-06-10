<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: array.hpp Source File</title>
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
<div class="title">array.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d0/dc0/a00033.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_ARRAY</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_ARRAY</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;iostream&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00023"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a5090547d046a342ba3ac573e8248f628">   23</a></span>&#160;std::string <a class="code" href="../../d0/dc0/a00033.php#a5090547d046a342ba3ac573e8248f628">implode</a>(std::vector&lt;T&gt; a, std::string glue = <span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    std::string out{<span class="stringliteral">&quot;&quot;</span>};</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;    <span class="keywordtype">size_t</span> size = a.size();</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;    <span class="keywordtype">size_t</span> index = 0;</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;    <span class="keywordflow">for</span>(<span class="keyword">auto</span>&amp; elem : a){</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;        out += <a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(elem);</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;        <span class="keywordflow">if</span>(index+1 &lt; size){</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;            out += glue;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;        }</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;        index ++;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;    }</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;}</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#ad2b1019448d0599264d51172242e1be4">   48</a></span>&#160;<span class="keywordtype">void</span> <a class="code" href="../../d0/dc0/a00033.php#ad2b1019448d0599264d51172242e1be4">print_r</a>(std::vector&lt;T&gt; a){</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="keywordtype">size_t</span> index{0};</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    <span class="keywordflow">for</span>(<span class="keyword">auto</span>&amp; elem : a){</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;        std::cout &lt;&lt; index &lt;&lt; <span class="stringliteral">&quot; : &#39;&quot;</span> &lt;&lt; elem &lt;&lt; <span class="stringliteral">&quot;&#39;&quot;</span> &lt;&lt; std::endl;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;        index++;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    }</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;}</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;<span class="keyword">typename</span> std::enable_if&lt;std::is_array&lt;T&gt;::value&gt;::type</div><div class="line"><a name="l00065"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#aeda2dbc3a1ec9d5f58f2991fb7d0ad13">   65</a></span>&#160;<a class="code" href="../../d0/dc0/a00033.php#ad2b1019448d0599264d51172242e1be4">print_r</a>(T a){</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    <span class="keywordtype">size_t</span> index{0};</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    <span class="keywordflow">for</span>(<span class="keyword">auto</span>&amp; elem : a){</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;        std::cout &lt;&lt; index &lt;&lt; <span class="stringliteral">&quot; : &#39;&quot;</span> &lt;&lt; elem &lt;&lt; <span class="stringliteral">&quot;&#39;&quot;</span> &lt;&lt; std::endl;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;        index++;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    }</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;}</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00082"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#addfa691004e6d94461994bb7eccadf19">   82</a></span>&#160;std::vector&lt;V&gt; <a class="code" href="../../d0/dc0/a00033.php#addfa691004e6d94461994bb7eccadf19">rewrite</a>(std::vector&lt;V&gt; table, <span class="keywordtype">unsigned</span> index) {</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    std::vector&lt;V&gt; out;</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <span class="keywordflow">for</span>(<span class="keywordtype">unsigned</span> i{0}; i &lt; index; ++i){</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        out.push_back(table[i]);</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    }</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    <span class="keywordflow">for</span>(<span class="keywordtype">unsigned</span> i{index+1}; i &lt; table.size(); ++i){</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;        out.push_back(table[i]);</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;    }</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;};</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00103"></a><span class="lineno"><a class="line" href="../../d0/dc0/a00033.php#a54f668e0211381d2d15ca45dcf3c55d0">  103</a></span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d0/dc0/a00033.php#a54f668e0211381d2d15ca45dcf3c55d0">contains</a>(std::vector&lt;T&gt; table, T value){</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;    <span class="comment">/*std::cout &lt;&lt; &quot;Contains ;&quot; &lt;&lt; std::endl;</span></div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;<span class="comment">    std::cout &lt;&lt; &quot;\t- value : &#39;&quot; &lt;&lt; value &lt;&lt; &quot;&#39;&quot; &lt;&lt; std::endl;</span></div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;<span class="comment">    std::cout &lt;&lt; &quot;\t- table.size() = &quot; &lt;&lt; table.size() &lt;&lt; std::endl;</span></div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;<span class="comment">    std::cout &lt;&lt; &quot;\t- table ;&quot; &lt;&lt; std::endl;</span></div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;<span class="comment">    for(size_t i{0}; i &lt; table.size(); ++i){</span></div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;<span class="comment">        std::cout &lt;&lt; &quot;\t\t- table[&quot; &lt;&lt; i &lt;&lt; &quot;] = &#39;&quot; &lt;&lt; table[i] &lt;&lt; &quot;&#39;&quot; &lt;&lt; std::endl;</span></div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;<span class="comment">    }*/</span></div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;    <span class="keywordflow">if</span>(table.empty()){ <span class="keywordflow">return</span> <span class="keyword">false</span>; }</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;    <span class="keywordflow">if</span>(<a class="code" href="../../d3/d8b/a00059.php#a653f604d83b424493ac7d0d3d586a3c2">std::find</a>(table.begin(), table.end(), value) == table.end()){ <span class="keywordflow">return</span> <span class="keyword">false</span>; }</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;    <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;}</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div><div class="line"><a name="l00124"></a><span class="lineno"><a class="line" href="../../d7/d7a/a00016.php">  124</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d7/d7a/a00016.php">jumble</a> {</div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;        <span class="comment">/* Constructor et Destroyer */</span></div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;        <a class="code" href="../../d7/d7a/a00016.php#a4f82dc848cfaed87d3c8c41d11611cdf">jumble</a>();</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;        <a class="code" href="../../d7/d7a/a00016.php#a6a130a7d5490029afb5cf14fb7d37ee3">~jumble</a>();</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div><div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;        std::vector&lt;std::pair&lt;std::string, std::string&gt;&gt; contents;</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;};</div><div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;<span class="preprocessor">#endif //HEADER_ARRAY</span></div><div class="ttc" id="a00016_php_a4f82dc848cfaed87d3c8c41d11611cdf"><div class="ttname"><a href="../../d7/d7a/a00016.php#a4f82dc848cfaed87d3c8c41d11611cdf">jumble::jumble</a></div><div class="ttdeci">jumble()</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00033_php_a5090547d046a342ba3ac573e8248f628"><div class="ttname"><a href="../../d0/dc0/a00033.php#a5090547d046a342ba3ac573e8248f628">implode</a></div><div class="ttdeci">std::string implode(std::vector&lt; T &gt; a, std::string glue=&quot;&quot;)</div><div class="ttdoc">Stick the a vector with the glue given. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00023">array.hpp:23</a></div></div>
<div class="ttc" id="a00016_php"><div class="ttname"><a href="../../d7/d7a/a00016.php">jumble</a></div><div class="ttdoc">A dynamic array to store any type of variable. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00124">array.hpp:124</a></div></div>
<div class="ttc" id="a00033_php_ad2b1019448d0599264d51172242e1be4"><div class="ttname"><a href="../../d0/dc0/a00033.php#ad2b1019448d0599264d51172242e1be4">print_r</a></div><div class="ttdeci">void print_r(std::vector&lt; T &gt; a)</div><div class="ttdoc">Print the content of a vector. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00048">array.hpp:48</a></div></div>
<div class="ttc" id="a00033_php_addfa691004e6d94461994bb7eccadf19"><div class="ttname"><a href="../../d0/dc0/a00033.php#addfa691004e6d94461994bb7eccadf19">rewrite</a></div><div class="ttdeci">std::vector&lt; V &gt; rewrite(std::vector&lt; V &gt; table, unsigned index)</div><div class="ttdoc">Rewrite a vector array without the value at the given index. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00082">array.hpp:82</a></div></div>
<div class="ttc" id="a00016_php_a6a130a7d5490029afb5cf14fb7d37ee3"><div class="ttname"><a href="../../d7/d7a/a00016.php#a6a130a7d5490029afb5cf14fb7d37ee3">jumble::~jumble</a></div><div class="ttdeci">~jumble()</div></div>
<div class="ttc" id="a00059_php_a653f604d83b424493ac7d0d3d586a3c2"><div class="ttname"><a href="../../d3/d8b/a00059.php#a653f604d83b424493ac7d0d3d586a3c2">find</a></div><div class="ttdeci">std::pair&lt; Node&lt; T &gt; *, std::string &gt; find(T value, Node&lt; T &gt; *root)</div><div class="ttdoc">Find a value in the tree and return the node and the path to the node. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/d8b/a00059_source.php#l00515">tree.hpp:515</a></div></div>
<div class="ttc" id="a00033_php_a54f668e0211381d2d15ca45dcf3c55d0"><div class="ttname"><a href="../../d0/dc0/a00033.php#a54f668e0211381d2d15ca45dcf3c55d0">contains</a></div><div class="ttdeci">bool contains(std::vector&lt; T &gt; table, T value)</div><div class="ttdoc">Verify if a vector contains or not something. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/dc0/a00033_source.php#l00103">array.hpp:103</a></div></div>
<div class="ttc" id="a00039_php_a09a70dbff0164874fba7fda6d3afd8c7"><div class="ttname"><a href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a></div><div class="ttdeci">std::enable_if&lt; std::is_enum&lt; V &gt;::value, std::string &gt;::type tos(V in)</div><div class="ttdoc">Convert an enum in string. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/de7/a00039_source.php#l00029">convert.hpp:29</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d0/dc0/a00033.php">array.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
