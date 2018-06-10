<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: stars.js Source File</title>
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
$(document).ready(function(){initNavTree('df/d5f/a00064_source.php','../../');});
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
<div class="title">stars.js</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../df/d5f/a00064.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#ae2475e10618961c050dcba04e8c42331">   13</a></span>&#160;<span class="stringliteral">&#39;use strict&#39;</span>;</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00015"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a743f72d241d1185709756428de13d3af">   15</a></span>&#160;var <a class="code" href="../../df/d5f/a00064.php#a743f72d241d1185709756428de13d3af">starParent</a>;</div><div class="line"><a name="l00016"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">   16</a></span>&#160;var <a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a07a2aabd64594dc36dd810cad2669deb">   17</a></span>&#160;var <a class="code" href="../../df/d5f/a00064.php#a07a2aabd64594dc36dd810cad2669deb">input</a>;</div><div class="line"><a name="l00018"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#aa72e0c8a20e6bcc571d3a1c51846e627">   18</a></span>&#160;var <a class="code" href="../../df/d5f/a00064.php#aa72e0c8a20e6bcc571d3a1c51846e627">path</a>;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;</div><div class="line"><a name="l00021"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a8d8ff71978dcadc4b21e080d661d45dd">   21</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../df/d5f/a00064.php#a8d8ff71978dcadc4b21e080d661d45dd">initStars</a>(){</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#a743f72d241d1185709756428de13d3af">starParent</a> = document.getElementById(<span class="stringliteral">&quot;stars&quot;</span>);</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    <span class="keywordflow">if</span>(!<a class="code" href="../../df/d5f/a00064.php#a743f72d241d1185709756428de13d3af">starParent</a>){</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;        <span class="keywordflow">return</span>;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;    }</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;    var scripts = document.getElementsByTagName(<span class="stringliteral">&quot;script&quot;</span>);</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;    <span class="keywordflow">for</span>(var <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> = 0; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> &lt; scripts.length; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>++){</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;        var script = scripts[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>];</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;        var pos;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;        <span class="keywordflow">if</span>((pos = (script.src).search(<span class="stringliteral">&quot;stars/stars.js&quot;</span>)) != -1){</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;            <a class="code" href="../../df/d5f/a00064.php#aa72e0c8a20e6bcc571d3a1c51846e627">path</a> = (script.src).substring(0, pos);</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;        }</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;    }</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#a0c1449df7daaf21306568d1c11699946">createStars</a>();</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#a07a2aabd64594dc36dd810cad2669deb">input</a> = document.getElementById(<span class="stringliteral">&quot;starInput&quot;</span>);</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;}</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a0c1449df7daaf21306568d1c11699946">   44</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../df/d5f/a00064.php#a0c1449df7daaf21306568d1c11699946">createStars</a>(){</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    var link = document.createElement(<span class="stringliteral">&quot;link&quot;</span>);</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;    var head = document.getElementsByTagName(<span class="stringliteral">&quot;head&quot;</span>)[0];</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    link.rel = <span class="stringliteral">&quot;stylesheet&quot;</span>;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    link.href = <a class="code" href="../../df/d5f/a00064.php#aa72e0c8a20e6bcc571d3a1c51846e627">path</a>+<span class="stringliteral">&quot;stars/stars.css&quot;</span>;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    head.appendChild(link);</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;    var code = <span class="stringliteral">&quot;&quot;</span>;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <span class="keywordflow">for</span>(var <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> = 0; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> &lt; 5; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>++){</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;        var <a class="code" href="../../db/db2/a00020.php#ae8f6b400ed3390908c5cdeebed3a82b9">a</a> = <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>+0.5;</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;        var <a class="code" href="../../db/db2/a00020.php#ac0431efac4d7c393d1e70b86115cb93f">b</a> = <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>+1;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;        code += <span class="stringliteral">&quot;&lt;img src=\&quot;&quot;</span>+<a class="code" href="../../df/d5f/a00064.php#aa72e0c8a20e6bcc571d3a1c51846e627">path</a>+<span class="stringliteral">&quot;stars/img/starLV.png\&quot; alt=\&quot;left star &quot;</span>+b+<span class="stringliteral">&quot;\&quot; onmouseover=\&quot;enlight(&quot;</span>+a+<span class="stringliteral">&quot;);\&quot; onmouseout=\&quot;envoid();\&quot; onclick=\&quot;choose(&quot;</span>+a+<span class="stringliteral">&quot;);\&quot; class=\&quot;starChoice\&quot; /&gt;&quot;</span>;</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;        code += <span class="stringliteral">&quot;&lt;img src=\&quot;&quot;</span>+<a class="code" href="../../df/d5f/a00064.php#aa72e0c8a20e6bcc571d3a1c51846e627">path</a>+<span class="stringliteral">&quot;stars/img/starRV.png\&quot; alt=\&quot;right star &quot;</span>+b+<span class="stringliteral">&quot;\&quot; onmouseover=\&quot;enlight(&quot;</span>+b+<span class="stringliteral">&quot;);\&quot; onmouseout=\&quot;envoid();\&quot; onclick=\&quot;choose(&quot;</span>+b+<span class="stringliteral">&quot;);\&quot; class=\&quot;starChoice\&quot; /&gt;&quot;</span>;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    }</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    code += <span class="stringliteral">&quot;\n&lt;input type=\&quot;hidden\&quot; value=0 name=\&quot;stars\&quot; id=\&quot;starInput\&quot; /&gt;&quot;</span>;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#a743f72d241d1185709756428de13d3af">starParent</a>.innerHTML = code;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#ab033da43f4d9abb9484023adb3cbe8da">listImgs</a>();</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;}</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a386c3ec694dd3e8e178623e2d1cb302a">   70</a></span>&#160;var <a class="code" href="../../df/d5f/a00064.php#a386c3ec694dd3e8e178623e2d1cb302a">change</a> = 1;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div><div class="line"><a name="l00073"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#ab033da43f4d9abb9484023adb3cbe8da">   73</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../df/d5f/a00064.php#ab033da43f4d9abb9484023adb3cbe8da">listImgs</a>(){</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;    var imgs = document.getElementsByTagName(<span class="stringliteral">&quot;img&quot;</span>);</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a> = <span class="keyword">new</span> Array();</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keywordflow">for</span>(var <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> = 0; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> &lt; imgs.length; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>++){</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;        <span class="keywordflow">if</span>(imgs[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>].className == <span class="stringliteral">&quot;starChoice&quot;</span>){</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;            <a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>[<a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>.length] = imgs[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>];</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;        }</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    }</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;}</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00088"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a9ff16f762d4b2a92426066a7753ac288">   88</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../df/d5f/a00064.php#a9ff16f762d4b2a92426066a7753ac288">enlight</a>(val){</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    var index = (val * 2);</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;    <span class="keywordflow">for</span>(var <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> = 0; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> &lt; index; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>++){</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;        <a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>].src = (<a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>].src).replace(<span class="stringliteral">&quot;V&quot;</span>, <span class="stringliteral">&quot;P&quot;</span>);</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;    }</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#a386c3ec694dd3e8e178623e2d1cb302a">change</a> = 1;</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;}</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div><div class="line"><a name="l00099"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a1dfb32225dcbd4dd553ee4204d6f1d5f">   99</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../df/d5f/a00064.php#a1dfb32225dcbd4dd553ee4204d6f1d5f">envoid</a>(){</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;    <span class="keywordflow">if</span>(<a class="code" href="../../df/d5f/a00064.php#a386c3ec694dd3e8e178623e2d1cb302a">change</a>){</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;        <span class="keywordflow">for</span>(var <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> = 0; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> &lt; <a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>.length; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>++){</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;            <a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>].src = (<a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>].src).replace(<span class="stringliteral">&quot;P&quot;</span>, <span class="stringliteral">&quot;V&quot;</span>);</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;        }</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;    }</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;}</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div><div class="line"><a name="l00111"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a06b93344f587b996f3b18b0a0df6e151">  111</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../df/d5f/a00064.php#a06b93344f587b996f3b18b0a0df6e151">choose</a>(val){</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;    var index = (val * 2);</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;    <span class="keywordflow">for</span>(var <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> = 0; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a> &lt; index; <a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>++){</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;        <a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>].src = (<a class="code" href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a>[<a class="code" href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a>].src).replace(<span class="stringliteral">&quot;V&quot;</span>, <span class="stringliteral">&quot;P&quot;</span>);</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;    }</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#a07a2aabd64594dc36dd810cad2669deb">input</a>.value = val;</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;    <a class="code" href="../../df/d5f/a00064.php#a386c3ec694dd3e8e178623e2d1cb302a">change</a> = 0;</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;}</div><div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;<a class="code" href="../../df/d5f/a00064.php#a34b8ff6d001a03489d89d2104f8d1e66">addOnload</a>(<a class="code" href="../../df/d5f/a00064.php#a8d8ff71978dcadc4b21e080d661d45dd">initStars</a>);</div><div class="ttc" id="a00064_php_ab033da43f4d9abb9484023adb3cbe8da"><div class="ttname"><a href="../../df/d5f/a00064.php#ab033da43f4d9abb9484023adb3cbe8da">listImgs</a></div><div class="ttdeci">function listImgs()</div><div class="ttdoc">List the images for the stars. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00073">stars.js:73</a></div></div>
<div class="ttc" id="a00064_php_a0b952db6fba6e7a88c006f17bf0d01d5"><div class="ttname"><a href="../../df/d5f/a00064.php#a0b952db6fba6e7a88c006f17bf0d01d5">stars</a></div><div class="ttdeci">var stars</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00016">stars.js:16</a></div></div>
<div class="ttc" id="a00020_php_ae8f6b400ed3390908c5cdeebed3a82b9"><div class="ttname"><a href="../../db/db2/a00020.php#ae8f6b400ed3390908c5cdeebed3a82b9">a</a></div><div class="ttdeci">function a</div><div class="ttdef"><b>Definition:</b> <a href="../../db/db2/a00020_source.php#l00006">autres/bootstrap.min.js:6</a></div></div>
<div class="ttc" id="a00064_php_a1dfb32225dcbd4dd553ee4204d6f1d5f"><div class="ttname"><a href="../../df/d5f/a00064.php#a1dfb32225dcbd4dd553ee4204d6f1d5f">envoid</a></div><div class="ttdeci">function envoid()</div><div class="ttdoc">Envoid all the stars. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00099">stars.js:99</a></div></div>
<div class="ttc" id="a00046_php_a5e25b1d1bed9ab5f3174b76d6a722180"><div class="ttname"><a href="../../d3/dea/a00046.php#a5e25b1d1bed9ab5f3174b76d6a722180">i</a></div><div class="ttdeci">var i</div><div class="ttdef"><b>Definition:</b> <a href="../../d3/dea/a00046_source.php#l00002">jquery.min.js:2</a></div></div>
<div class="ttc" id="a00064_php_a9ff16f762d4b2a92426066a7753ac288"><div class="ttname"><a href="../../df/d5f/a00064.php#a9ff16f762d4b2a92426066a7753ac288">enlight</a></div><div class="ttdeci">function enlight(val)</div><div class="ttdoc">Enlight the stars to match with the value. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00088">stars.js:88</a></div></div>
<div class="ttc" id="a00064_php_a386c3ec694dd3e8e178623e2d1cb302a"><div class="ttname"><a href="../../df/d5f/a00064.php#a386c3ec694dd3e8e178623e2d1cb302a">change</a></div><div class="ttdeci">var change</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00070">stars.js:70</a></div></div>
<div class="ttc" id="a00064_php_a743f72d241d1185709756428de13d3af"><div class="ttname"><a href="../../df/d5f/a00064.php#a743f72d241d1185709756428de13d3af">starParent</a></div><div class="ttdeci">var starParent</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00015">stars.js:15</a></div></div>
<div class="ttc" id="a00064_php_a34b8ff6d001a03489d89d2104f8d1e66"><div class="ttname"><a href="../../df/d5f/a00064.php#a34b8ff6d001a03489d89d2104f8d1e66">addOnload</a></div><div class="ttdeci">addOnload(initStars)</div><div class="ttdoc">Add a function to the onloadFunction array and save the arguments. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dec/a00010_source.php#l00520">_script.js:520</a></div></div>
<div class="ttc" id="a00064_php_a06b93344f587b996f3b18b0a0df6e151"><div class="ttname"><a href="../../df/d5f/a00064.php#a06b93344f587b996f3b18b0a0df6e151">choose</a></div><div class="ttdeci">function choose(val)</div><div class="ttdoc">Enlight the stars and put the choosen value in the right input. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00111">stars.js:111</a></div></div>
<div class="ttc" id="a00064_php_a07a2aabd64594dc36dd810cad2669deb"><div class="ttname"><a href="../../df/d5f/a00064.php#a07a2aabd64594dc36dd810cad2669deb">input</a></div><div class="ttdeci">var input</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00017">stars.js:17</a></div></div>
<div class="ttc" id="a00064_php_a8d8ff71978dcadc4b21e080d661d45dd"><div class="ttname"><a href="../../df/d5f/a00064.php#a8d8ff71978dcadc4b21e080d661d45dd">initStars</a></div><div class="ttdeci">function initStars()</div><div class="ttdoc">Initialize the differents stars in the page. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00021">stars.js:21</a></div></div>
<div class="ttc" id="a00020_php_ac0431efac4d7c393d1e70b86115cb93f"><div class="ttname"><a href="../../db/db2/a00020.php#ac0431efac4d7c393d1e70b86115cb93f">b</a></div><div class="ttdeci">var b</div><div class="ttdef"><b>Definition:</b> <a href="../../db/db2/a00020_source.php#l00006">autres/bootstrap.min.js:6</a></div></div>
<div class="ttc" id="a00064_php_a0c1449df7daaf21306568d1c11699946"><div class="ttname"><a href="../../df/d5f/a00064.php#a0c1449df7daaf21306568d1c11699946">createStars</a></div><div class="ttdeci">function createStars()</div><div class="ttdoc">Create all the stars that will be shown in the page. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00044">stars.js:44</a></div></div>
<div class="ttc" id="a00064_php_aa72e0c8a20e6bcc571d3a1c51846e627"><div class="ttname"><a href="../../df/d5f/a00064.php#aa72e0c8a20e6bcc571d3a1c51846e627">path</a></div><div class="ttdeci">var path</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00018">stars.js:18</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_2867b8401105090ba43035c8b1fd9c0c.php">js</a></li><li class="navelem"><a class="el" href="../../dir_50bae84d6b514f2657cf039fb05a19d6.php">bases</a></li><li class="navelem"><a class="el" href="../../dir_ec12e7499930959167fb559b06c96237.php">stars</a></li><li class="navelem"><a class="el" href="../../df/d5f/a00064.php">stars.js</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
