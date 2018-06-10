<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: maths.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d5/de0/a00050_source.php','../../');});
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
<div class="title">maths.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d5/de0/a00050.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_MATHS</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_MATHS</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;iostream&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;cmath&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;</div><div class="line"><a name="l00020"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#ab5254a19797bf686467bc0f475bf6fdd">   20</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt; V <a class="code" href="../../d5/de0/a00050.php#ab5254a19797bf686467bc0f475bf6fdd">wholePart</a>(V a){</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;    <span class="keywordflow">return</span> <span class="keyword">static_cast&lt;</span>V<span class="keyword">&gt;</span>(std::floor(a));</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;}</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#a6a8af65111300da455bef67651f83c73">   30</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt; V <a class="code" href="../../d5/de0/a00050.php#a6a8af65111300da455bef67651f83c73">decimalPart</a>(V a){</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;    <span class="keywordflow">return</span> a - <a class="code" href="../../d5/de0/a00050.php#ab5254a19797bf686467bc0f475bf6fdd">wholePart</a>(a);</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;}</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#a9f362f22a77587bb719f13bc7fb185a2">   41</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V, <span class="keyword">typename</span> U&gt; V <a class="code" href="../../d5/de0/a00050.php#a9f362f22a77587bb719f13bc7fb185a2">mod</a>(V a, U b){</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;    <span class="keywordtype">double</span> factA;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;    <span class="keywordtype">double</span> factB;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    <span class="keywordflow">for</span>(factA = 1; <a class="code" href="../../d5/de0/a00050.php#a6a8af65111300da455bef67651f83c73">decimalPart</a>(a*factA) != 0; factA *= 10){}</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;    <span class="keywordflow">for</span>(factB = 1; <a class="code" href="../../d5/de0/a00050.php#a6a8af65111300da455bef67651f83c73">decimalPart</a>(b*factB) != 0; factB *= 10){}</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    V out = <span class="keyword">static_cast&lt;</span>V<span class="keyword">&gt;</span>(<span class="keyword">static_cast&lt;</span><span class="keywordtype">long</span> <span class="keywordtype">long</span> <span class="keywordtype">int</span><span class="keyword">&gt;</span>(a*factA) % static_cast&lt;long long int&gt;(b*factB)) / static_cast&lt;V&gt;(factA*factB);</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="comment">//out = static_cast&lt;V&gt;(static_cast&lt;long long int&gt;(a) % static_cast&lt;long long int&gt;(b));</span></div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;}</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00061"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#a6e9b223b45f9c0ef8d93fa65db1a8f98">   61</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt; V <a class="code" href="../../d5/de0/a00050.php#a6e9b223b45f9c0ef8d93fa65db1a8f98">pgcd</a>(V a, V b){</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    V r(0);</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    <span class="keywordflow">if</span>(a &lt; b){</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;        std::swap(a, b);</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    }</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    <span class="keywordflow">if</span>(!(r = <a class="code" href="../../d5/de0/a00050.php#a9f362f22a77587bb719f13bc7fb185a2">mod</a>(a, b))){</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;        <span class="keywordflow">return</span> b;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    } <span class="keywordflow">else</span> {</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;        <span class="keywordflow">return</span> <a class="code" href="../../d5/de0/a00050.php#a6e9b223b45f9c0ef8d93fa65db1a8f98">pgcd</a>(b, r);</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;    }</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;}</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div><div class="line"><a name="l00082"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#ab60083feca94427f7b2c4dfaeb249f07">   82</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt; V <a class="code" href="../../d5/de0/a00050.php#ab60083feca94427f7b2c4dfaeb249f07">eucl</a>(V a, V b){</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    V r(a), u(1), v(0), r2(b), u2(0), v2(1);</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;    <span class="keywordtype">int</span> q;</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    V rs, us, vs;</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keywordflow">while</span>(r2){</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;        q = <span class="keyword">static_cast&lt;</span><span class="keywordtype">int</span><span class="keyword">&gt;</span>(r/r2);</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;        rs = r;</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;        us = u;</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;        vs = v;</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;        r = r2;</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;        u = u2;</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;        v = v2;</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;        r2 = rs-<span class="keyword">static_cast&lt;</span><span class="keywordtype">float</span><span class="keyword">&gt;</span>(q)*r;</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;        u2 = us-<span class="keyword">static_cast&lt;</span><span class="keywordtype">float</span><span class="keyword">&gt;</span>(q)*u;</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;        v2 = vs-<span class="keyword">static_cast&lt;</span><span class="keywordtype">float</span><span class="keyword">&gt;</span>(q)*v;</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;    }</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;    V k(0);</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    <span class="keywordflow">if</span>(u-1*b &lt; u){</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;        <span class="keywordflow">while</span>(u-k*b &lt; 2 || u-k*b &gt; b){</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;            k--;</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;        }</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;    } <span class="keywordflow">else</span> {</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;        <span class="keywordflow">while</span>(u-k*b &lt; 2 || u-k*b &gt; b){</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;            k++;</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;        }</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    }</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;    <span class="keywordflow">return</span> u-k*b;</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;}</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div><div class="line"><a name="l00129"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#aa7446c664998ff110eeaf6c2bab19772">  129</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> T&gt; <span class="keyword">inline</span> T <a class="code" href="../../d5/de0/a00050.php#aa7446c664998ff110eeaf6c2bab19772">dist</a>(T x1, T x2, T y1, T y2, T z1=0, T z2=0) {</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;    <span class="keywordflow">return</span> <span class="keyword">static_cast&lt;</span>T<span class="keyword">&gt;</span>(sqrt(((x1-x2)*(x1-x2)) + ((y1-y2)*(y1-y2)) + ((z1-z2)*(z1-z2))));</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;}</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div><div class="line"><a name="l00139"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#a54a702d8a0a5aa317cc65f5b01ed4ee6">  139</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> T&gt; <span class="keyword">inline</span> T <a class="code" href="../../d5/de0/a00050.php#a54a702d8a0a5aa317cc65f5b01ed4ee6">sq</a>(T in) {</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;    <span class="keywordflow">return</span> in*in;</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;}</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div><div class="line"><a name="l00149"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#ad44dc8b9cd6eaa619880db19cf171751">  149</a></span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> T&gt; <span class="keyword">inline</span> T <a class="code" href="../../d5/de0/a00050.php#ad44dc8b9cd6eaa619880db19cf171751">abs</a>(T in) {</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;    <span class="keywordflow">return</span> (in &lt; 0)?(-1)*in:in;</div><div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;}</div><div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;</div><div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;<span class="keyword">template</span>&lt;</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;    <span class="keyword">typename</span> T,</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;    <span class="keyword">typename</span> V,</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;    <span class="keyword">typename</span> U = <span class="keyword">typename</span> std::conditional&lt;</div><div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;        std::is_integral&lt;T&gt;::value &amp;&amp; std::is_integral&lt;V&gt;::value || std::is_floating_point&lt;T&gt;::value &amp;&amp; std::is_floating_point&lt;V&gt;::value,</div><div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;        <span class="keyword">typename</span> std::conditional&lt;</div><div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;            <span class="keyword">sizeof</span>(T) &gt;= <span class="keyword">sizeof</span>(V),</div><div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;            T,</div><div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;            V</div><div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;        &gt;::type,</div><div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;        <span class="keyword">typename</span> std::conditional&lt;</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;            std::is_floating_point&lt;T&gt;::value &amp;&amp; std::is_integral&lt;V&gt;::value,</div><div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;            T,</div><div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;            <span class="keyword">typename</span> std::conditional&lt;</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;                std::is_floating_point&lt;V&gt;::value &amp;&amp; std::is_integral&lt;T&gt;::value,</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;                V,</div><div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;                V</div><div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;            &gt;::type</div><div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;        &gt;::type</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    &gt;::type</div><div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;&gt;</div><div class="line"><a name="l00181"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#a193486f414e3b93b2284a85977a4a02c">  181</a></span>&#160;U <a class="code" href="../../d5/de0/a00050.php#a193486f414e3b93b2284a85977a4a02c">min</a>(T a, V b){</div><div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;    U c = <span class="keyword">static_cast&lt;</span>U<span class="keyword">&gt;</span>(a);</div><div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;    U d = <span class="keyword">static_cast&lt;</span>U<span class="keyword">&gt;</span>(b);</div><div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;    <span class="keywordflow">return</span> (c &lt; d)?c:d;</div><div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;}</div><div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div><div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;<span class="keyword">template</span>&lt;</div><div class="line"><a name="l00195"></a><span class="lineno">  195</span>&#160;    <span class="keyword">typename</span> T,</div><div class="line"><a name="l00196"></a><span class="lineno">  196</span>&#160;    <span class="keyword">typename</span> V,</div><div class="line"><a name="l00197"></a><span class="lineno">  197</span>&#160;    <span class="keyword">typename</span> U = <span class="keyword">typename</span> std::conditional&lt;</div><div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;        std::is_integral&lt;T&gt;::value &amp;&amp; std::is_integral&lt;V&gt;::value || std::is_floating_point&lt;T&gt;::value &amp;&amp; std::is_floating_point&lt;V&gt;::value,</div><div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;        <span class="keyword">typename</span> std::conditional&lt;</div><div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;            <span class="keyword">sizeof</span>(T) &gt;= <span class="keyword">sizeof</span>(V),</div><div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;            T,</div><div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;            V</div><div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;        &gt;::type,</div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;        <span class="keyword">typename</span> std::conditional&lt;</div><div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;            std::is_floating_point&lt;T&gt;::value &amp;&amp; std::is_integral&lt;V&gt;::value,</div><div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;            T,</div><div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;            <span class="keyword">typename</span> std::conditional&lt;</div><div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;                std::is_floating_point&lt;V&gt;::value &amp;&amp; std::is_integral&lt;T&gt;::value,</div><div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;                V,</div><div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;                V</div><div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;            &gt;::type</div><div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;        &gt;::type</div><div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;    &gt;::type</div><div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;&gt;</div><div class="line"><a name="l00215"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#ac5673d3f9fc79ba39127c4a339dea626">  215</a></span>&#160;U <a class="code" href="../../d5/de0/a00050.php#ac5673d3f9fc79ba39127c4a339dea626">max</a>(T a, V b){</div><div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;    U c = <span class="keyword">static_cast&lt;</span>U<span class="keyword">&gt;</span>(a);</div><div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;    U d = <span class="keyword">static_cast&lt;</span>U<span class="keyword">&gt;</span>(b);</div><div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;    <span class="keywordflow">return</span> (c &gt; d)?c:d;</div><div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;}</div><div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;</div><div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> T&gt;</div><div class="line"><a name="l00229"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#a709c7dabaae9dea50d277980278081e0">  229</a></span>&#160;T <a class="code" href="../../d5/de0/a00050.php#a709c7dabaae9dea50d277980278081e0">round</a>(T a, <span class="keywordtype">int</span> zeros=0){</div><div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;    <span class="keywordtype">double</span> fact = 1;</div><div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;</div><div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;    <span class="keywordflow">while</span>(zeros){</div><div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;        fact *= 10;</div><div class="line"><a name="l00234"></a><span class="lineno">  234</span>&#160;        zeros--;</div><div class="line"><a name="l00235"></a><span class="lineno">  235</span>&#160;    }</div><div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;</div><div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;    <span class="keywordflow">return</span> <span class="keyword">static_cast&lt;</span>T<span class="keyword">&gt;</span>(<span class="keyword">static_cast&lt;</span><span class="keywordtype">double</span><span class="keyword">&gt;</span>(<span class="keyword">static_cast&lt;</span><span class="keywordtype">long</span> <span class="keywordtype">long</span> <span class="keywordtype">int</span><span class="keyword">&gt;</span>(a * fact)) / fact);</div><div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;}</div><div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160;</div><div class="line"><a name="l00246"></a><span class="lineno">  246</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d5/de0/a00050.php#a94305b67cb0435c3395b548ec8283154">isPrime</a>(<span class="keywordtype">float</span> nb);</div><div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d5/de0/a00050.php#a65b1640156c68ea7687a41428022c1d8">isNumber</a>(<span class="keywordtype">char</span> c);</div><div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;</div><div class="line"><a name="l00261"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#af667d8a0d7e420b313a26791c49359fb">  261</a></span>&#160;<span class="keyword">inline</span> <span class="keywordtype">double</span> <a class="code" href="../../d5/de0/a00050.php#af667d8a0d7e420b313a26791c49359fb">sigmoide</a>(<span class="keywordtype">double</span> in){</div><div class="line"><a name="l00262"></a><span class="lineno">  262</span>&#160;    <span class="keywordflow">return</span> (1 / (1 + std::exp(-1 * in)));</div><div class="line"><a name="l00263"></a><span class="lineno">  263</span>&#160;}</div><div class="line"><a name="l00264"></a><span class="lineno">  264</span>&#160;</div><div class="line"><a name="l00271"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#aaa55b9d8528b25fa5167908db82dff21">  271</a></span>&#160;<span class="keyword">inline</span> <span class="keywordtype">double</span> <a class="code" href="../../d5/de0/a00050.php#aaa55b9d8528b25fa5167908db82dff21">dsigmoide</a>(<span class="keywordtype">double</span> in){</div><div class="line"><a name="l00272"></a><span class="lineno">  272</span>&#160;    <span class="keywordflow">return</span> (std::exp(-1 * in) / <a class="code" href="../../d5/de0/a00050.php#a54a702d8a0a5aa317cc65f5b01ed4ee6">sq</a>(1 + std::exp(-1 * in)));</div><div class="line"><a name="l00273"></a><span class="lineno">  273</span>&#160;}</div><div class="line"><a name="l00274"></a><span class="lineno">  274</span>&#160;</div><div class="line"><a name="l00281"></a><span class="lineno"><a class="line" href="../../d5/de0/a00050.php#a75105ac3cb9ee25de080d973f0bfe112">  281</a></span>&#160;<span class="keyword">inline</span> <span class="keywordtype">int</span> <a class="code" href="../../d5/de0/a00050.php#a75105ac3cb9ee25de080d973f0bfe112">log2p</a>(<span class="keywordtype">int</span> x){</div><div class="line"><a name="l00282"></a><span class="lineno">  282</span>&#160;    <span class="keywordflow">return</span> <span class="keyword">static_cast&lt;</span><span class="keywordtype">int</span><span class="keyword">&gt;</span>(log(x) / log(2));</div><div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;}</div><div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;</div><div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160;<span class="preprocessor">#endif //HEADER_MATHS</span></div><div class="ttc" id="a00050_php_a65b1640156c68ea7687a41428022c1d8"><div class="ttname"><a href="../../d5/de0/a00050.php#a65b1640156c68ea7687a41428022c1d8">isNumber</a></div><div class="ttdeci">bool isNumber(char c)</div><div class="ttdoc">Return true if the caracter is a number. </div></div>
<div class="ttc" id="a00050_php_ab5254a19797bf686467bc0f475bf6fdd"><div class="ttname"><a href="../../d5/de0/a00050.php#ab5254a19797bf686467bc0f475bf6fdd">wholePart</a></div><div class="ttdeci">V wholePart(V a)</div><div class="ttdoc">Return the whole part of the given number. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00020">maths.hpp:20</a></div></div>
<div class="ttc" id="a00050_php_a193486f414e3b93b2284a85977a4a02c"><div class="ttname"><a href="../../d5/de0/a00050.php#a193486f414e3b93b2284a85977a4a02c">min</a></div><div class="ttdeci">::type U min(T a, V b)</div><div class="ttdoc">Return the minimum of the arguments. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00181">maths.hpp:181</a></div></div>
<div class="ttc" id="a00050_php_a9f362f22a77587bb719f13bc7fb185a2"><div class="ttname"><a href="../../d5/de0/a00050.php#a9f362f22a77587bb719f13bc7fb185a2">mod</a></div><div class="ttdeci">V mod(V a, U b)</div><div class="ttdoc">Return the modulo of two numbers. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00041">maths.hpp:41</a></div></div>
<div class="ttc" id="a00050_php_a94305b67cb0435c3395b548ec8283154"><div class="ttname"><a href="../../d5/de0/a00050.php#a94305b67cb0435c3395b548ec8283154">isPrime</a></div><div class="ttdeci">bool isPrime(float nb)</div><div class="ttdoc">Return true if the given number is prime, false either. </div></div>
<div class="ttc" id="a00050_php_ac5673d3f9fc79ba39127c4a339dea626"><div class="ttname"><a href="../../d5/de0/a00050.php#ac5673d3f9fc79ba39127c4a339dea626">max</a></div><div class="ttdeci">::type U max(T a, V b)</div><div class="ttdoc">Return the maximum of the arguments. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00215">maths.hpp:215</a></div></div>
<div class="ttc" id="a00050_php_af667d8a0d7e420b313a26791c49359fb"><div class="ttname"><a href="../../d5/de0/a00050.php#af667d8a0d7e420b313a26791c49359fb">sigmoide</a></div><div class="ttdeci">double sigmoide(double in)</div><div class="ttdoc">Return the result of the sigmoide function. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00261">maths.hpp:261</a></div></div>
<div class="ttc" id="a00050_php_aaa55b9d8528b25fa5167908db82dff21"><div class="ttname"><a href="../../d5/de0/a00050.php#aaa55b9d8528b25fa5167908db82dff21">dsigmoide</a></div><div class="ttdeci">double dsigmoide(double in)</div><div class="ttdoc">Compute with the derivated sigmoide. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00271">maths.hpp:271</a></div></div>
<div class="ttc" id="a00050_php_ab60083feca94427f7b2c4dfaeb249f07"><div class="ttname"><a href="../../d5/de0/a00050.php#ab60083feca94427f7b2c4dfaeb249f07">eucl</a></div><div class="ttdeci">V eucl(V a, V b)</div><div class="ttdoc">Return the result of the euclidian function. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00082">maths.hpp:82</a></div></div>
<div class="ttc" id="a00050_php_a75105ac3cb9ee25de080d973f0bfe112"><div class="ttname"><a href="../../d5/de0/a00050.php#a75105ac3cb9ee25de080d973f0bfe112">log2p</a></div><div class="ttdeci">int log2p(int x)</div><div class="ttdoc">Do the log of x in base 2. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00281">maths.hpp:281</a></div></div>
<div class="ttc" id="a00050_php_a6a8af65111300da455bef67651f83c73"><div class="ttname"><a href="../../d5/de0/a00050.php#a6a8af65111300da455bef67651f83c73">decimalPart</a></div><div class="ttdeci">V decimalPart(V a)</div><div class="ttdoc">Return the decimal part of the given number. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00030">maths.hpp:30</a></div></div>
<div class="ttc" id="a00050_php_aa7446c664998ff110eeaf6c2bab19772"><div class="ttname"><a href="../../d5/de0/a00050.php#aa7446c664998ff110eeaf6c2bab19772">dist</a></div><div class="ttdeci">T dist(T x1, T x2, T y1, T y2, T z1=0, T z2=0)</div><div class="ttdoc">Return the distance of the given coordinates. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00129">maths.hpp:129</a></div></div>
<div class="ttc" id="a00050_php_ad44dc8b9cd6eaa619880db19cf171751"><div class="ttname"><a href="../../d5/de0/a00050.php#ad44dc8b9cd6eaa619880db19cf171751">abs</a></div><div class="ttdeci">T abs(T in)</div><div class="ttdoc">Return the absolute value of the given number. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00149">maths.hpp:149</a></div></div>
<div class="ttc" id="a00050_php_a6e9b223b45f9c0ef8d93fa65db1a8f98"><div class="ttname"><a href="../../d5/de0/a00050.php#a6e9b223b45f9c0ef8d93fa65db1a8f98">pgcd</a></div><div class="ttdeci">V pgcd(V a, V b)</div><div class="ttdoc">Return the result of the pgcd. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00061">maths.hpp:61</a></div></div>
<div class="ttc" id="a00050_php_a709c7dabaae9dea50d277980278081e0"><div class="ttname"><a href="../../d5/de0/a00050.php#a709c7dabaae9dea50d277980278081e0">round</a></div><div class="ttdeci">T round(T a, int zeros=0)</div><div class="ttdoc">Return the round of the given number. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00229">maths.hpp:229</a></div></div>
<div class="ttc" id="a00050_php_a54a702d8a0a5aa317cc65f5b01ed4ee6"><div class="ttname"><a href="../../d5/de0/a00050.php#a54a702d8a0a5aa317cc65f5b01ed4ee6">sq</a></div><div class="ttdeci">T sq(T in)</div><div class="ttdoc">Return the square of the given number. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00139">maths.hpp:139</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/de0/a00050.php">maths.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
