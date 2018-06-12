<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: Player.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d9/d2e/a00056_source.php','../../');});
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
<div class="title">Player.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d9/d2e/a00056.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_PLAYER</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_PLAYER</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d6/d97/a00045.php">Entities.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> PlayerParent&gt;</div><div class="line"><a name="l00018"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php">   18</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d3/d52/a00023.php">Player</a> : <span class="keyword">public</span> PlayerParent {</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;        <span class="comment">/* Constructor &amp; Destroyer */</span></div><div class="line"><a name="l00027"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a93132a47f0166fdbb23f3cd72f54c03a">   27</a></span>&#160;            <a class="code" href="../../d3/d52/a00023.php#a93132a47f0166fdbb23f3cd72f54c03a">Player</a>(<a class="code" href="../../d1/d2b/a00018.php">Map</a>* map = <span class="keyword">nullptr</span>, <a class="code" href="../../dc/de2/a00024.php">Point</a> pt = {0, 0, 0}, <a class="code" href="../../d7/dd4/a00013.php">ContraptionAttr</a> attr = {0, 0, 0}) :</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;                PlayerParent(map, pt, attr),</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;                <a class="code" href="../../d3/d52/a00023.php#a024d37d9bdf83c1cc6618df8cc574aa2">init</a>(<span class="keyword">false</span>),</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;                <a class="code" href="../../d3/d52/a00023.php#aefb2fbad6ea8b979f46de232a4ff9eaa">paused</a>(<span class="keyword">false</span>),</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;                <a class="code" href="../../d3/d52/a00023.php#ac3b3f61fa669c386bb9b2c912363d0b5">losted</a>(<span class="keyword">false</span>),</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;                mail(<span class="stringliteral">&quot;&quot;</span>),</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;                username(<span class="stringliteral">&quot;&quot;</span>),</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;                password(<span class="stringliteral">&quot;&quot;</span>),</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;                experience(0),</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;                experienceMax(0)</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;            {}</div><div class="line"><a name="l00039"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a3ce0168273b6d0be5f66b3b6136397ff">   39</a></span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../d3/d52/a00023.php#a3ce0168273b6d0be5f66b3b6136397ff">~Player</a>(){}</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#ab0075a5ffb42bfe0d6e84e36cad3e0ab">   48</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#ab0075a5ffb42bfe0d6e84e36cad3e0ab">setMail</a>(<span class="keyword">const</span> std::string mail){ this-&gt;mail = mail; }</div><div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a5b02ead36931c416ed8000b9a0a2d8aa">   55</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#a5b02ead36931c416ed8000b9a0a2d8aa">setUsername</a>(std::string username){ this-&gt;username = username; }</div><div class="line"><a name="l00062"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a809fc643a612879ac35690383dfd31e8">   62</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#a809fc643a612879ac35690383dfd31e8">setPassword</a>(std::string password){ this-&gt;password = password; }</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#af93214bdf82686e3c24401d6fb50ee4d">   70</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#af93214bdf82686e3c24401d6fb50ee4d">setExperience</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> experience){ this-&gt;experience = experience; }</div><div class="line"><a name="l00077"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a835918495707d8b37e0ebeed0d6cf439">   77</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#a835918495707d8b37e0ebeed0d6cf439">setExperienceMax</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> experienceMax){ this-&gt;experienceMax = experienceMax; }</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div><div class="line"><a name="l00085"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#aaf3aba878522716fba266caa573df8f9">   85</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#aaf3aba878522716fba266caa573df8f9">setId</a>(<span class="keywordtype">size_t</span> <span class="keywordtype">id</span>){ this-&gt;<span class="keywordtype">id</span> = id; }</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00089"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a1a42c147a927ee5f762e590e18c52352">   89</a></span>&#160;            std::string <a class="code" href="../../d3/d52/a00023.php#a1a42c147a927ee5f762e590e18c52352">getMail</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> mail; }</div><div class="line"><a name="l00091"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#ae840c70699458938568b36a422963a89">   91</a></span>&#160;            std::string <a class="code" href="../../d3/d52/a00023.php#ae840c70699458938568b36a422963a89">getUsername</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> username; }</div><div class="line"><a name="l00093"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#ab0fa81388a807469a2c5e45cb85bf57e">   93</a></span>&#160;            std::string <a class="code" href="../../d3/d52/a00023.php#ab0fa81388a807469a2c5e45cb85bf57e">getPassword</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> password; }</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div><div class="line"><a name="l00096"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a9f2475a2705e610e8dc7e4f1836d5e6b">   96</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d3/d52/a00023.php#a9f2475a2705e610e8dc7e4f1836d5e6b">getExperience</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> experience; }</div><div class="line"><a name="l00098"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a29b4d8d469f4c293926375d1d7060fd0">   98</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d3/d52/a00023.php#a29b4d8d469f4c293926375d1d7060fd0">getExperienceMax</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> experienceMax; }</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div><div class="line"><a name="l00101"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a256287b18c9b2bbafb22dd31ed51edba">  101</a></span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">size_t</span> <a class="code" href="../../d3/d52/a00023.php#a256287b18c9b2bbafb22dd31ed51edba">getId</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> id; }</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;        <span class="comment">/* Friends */</span></div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00112"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#ace955ce90f754ff7fdf23724e6c35d38">  112</a></span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#ace955ce90f754ff7fdf23724e6c35d38">printInfos</a>(std::ostream&amp; stream)<span class="keyword">const </span>{</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;                PlayerParent::printInfos(stream);</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;                stream &lt;&lt; <span class="stringliteral">&quot;\tPlayer attributes ;&quot;</span> &lt;&lt; std::endl;</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;                    stream &lt;&lt; <span class="stringliteral">&quot;\t\t- username : &#39;&quot;</span> &lt;&lt; username &lt;&lt; <span class="stringliteral">&quot;&#39;&quot;</span> &lt;&lt; std::endl;</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;                    stream &lt;&lt; <span class="stringliteral">&quot;\t\t- password : &#39;&quot;</span>;</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;                        <span class="keywordflow">if</span>(password != <span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;                            stream &lt;&lt; <span class="stringliteral">&quot;****&quot;</span>;</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;                        }</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;                    stream &lt;&lt; <span class="stringliteral">&quot;&#39;&quot;</span> &lt;&lt; std::endl;</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;                    stream &lt;&lt; <span class="stringliteral">&quot;\t\t- experience : &quot;</span> &lt;&lt; experience &lt;&lt; <span class="stringliteral">&quot;/&quot;</span> &lt;&lt; experienceMax &lt;&lt; std::endl;</div><div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;            }</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;</div><div class="line"><a name="l00128"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a02fef31489f23336518f8ff353a7a0db">  128</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#a02fef31489f23336518f8ff353a7a0db">pause</a>(){ <a class="code" href="../../d3/d52/a00023.php#aefb2fbad6ea8b979f46de232a4ff9eaa">paused</a> = <span class="keyword">true</span>; }</div><div class="line"><a name="l00133"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#adfa756f1570500ee9b9628ad4a990e2e">  133</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#adfa756f1570500ee9b9628ad4a990e2e">resume</a>(){ <a class="code" href="../../d3/d52/a00023.php#aefb2fbad6ea8b979f46de232a4ff9eaa">paused</a> = <span class="keyword">false</span>; }</div><div class="line"><a name="l00138"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#ae8d0cb2cfc31c311122543b16226cdb7">  138</a></span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../d3/d52/a00023.php#ae8d0cb2cfc31c311122543b16226cdb7">isPaused</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> <a class="code" href="../../d3/d52/a00023.php#aefb2fbad6ea8b979f46de232a4ff9eaa">paused</a>; }</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;</div><div class="line"><a name="l00144"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a606851799e5a0f58ea249f02751c45c1">  144</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#a606851799e5a0f58ea249f02751c45c1">lost</a>(){ <a class="code" href="../../d3/d52/a00023.php#ac3b3f61fa669c386bb9b2c912363d0b5">losted</a> = <span class="keyword">true</span>; }</div><div class="line"><a name="l00149"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a5c1f4f7b9404f7ec686dcb4038892a6c">  149</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d3/d52/a00023.php#a5c1f4f7b9404f7ec686dcb4038892a6c">retreive</a>(){ <a class="code" href="../../d3/d52/a00023.php#ac3b3f61fa669c386bb9b2c912363d0b5">losted</a> = <span class="keyword">false</span>; }</div><div class="line"><a name="l00154"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a1dec883e7f06a8c82a0e07635f200bcf">  154</a></span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../d3/d52/a00023.php#a1dec883e7f06a8c82a0e07635f200bcf">isLost</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> <a class="code" href="../../d3/d52/a00023.php#ac3b3f61fa669c386bb9b2c912363d0b5">losted</a>; }</div><div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div><div class="line"><a name="l00160"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a6ac0f9addd53f05fb5fce59ede276b68">  160</a></span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../d3/d52/a00023.php#a6ac0f9addd53f05fb5fce59ede276b68">isInit</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> <a class="code" href="../../d3/d52/a00023.php#a024d37d9bdf83c1cc6618df8cc574aa2">init</a>; }</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00163"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#a024d37d9bdf83c1cc6618df8cc574aa2">  163</a></span>&#160;        <span class="keywordtype">bool</span> <a class="code" href="../../d3/d52/a00023.php#a024d37d9bdf83c1cc6618df8cc574aa2">init</a>;</div><div class="line"><a name="l00164"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#aefb2fbad6ea8b979f46de232a4ff9eaa">  164</a></span>&#160;        <span class="keywordtype">bool</span> <a class="code" href="../../d3/d52/a00023.php#aefb2fbad6ea8b979f46de232a4ff9eaa">paused</a>;</div><div class="line"><a name="l00165"></a><span class="lineno"><a class="line" href="../../d3/d52/a00023.php#ac3b3f61fa669c386bb9b2c912363d0b5">  165</a></span>&#160;        <span class="keywordtype">bool</span> <a class="code" href="../../d3/d52/a00023.php#ac3b3f61fa669c386bb9b2c912363d0b5">losted</a>;</div><div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;</div><div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;        std::string mail;</div><div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;        std::string username;</div><div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;        std::string password;</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;</div><div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;        <span class="keywordtype">double</span> experience;</div><div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;        <span class="keywordtype">double</span> experienceMax;</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;        <span class="keywordtype">size_t</span> id;</div><div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;};</div><div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;</div><div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;<span class="preprocessor">#endif //HEADER_PLAYER</span></div><div class="ttc" id="a00023_php_a5c1f4f7b9404f7ec686dcb4038892a6c"><div class="ttname"><a href="../../d3/d52/a00023.php#a5c1f4f7b9404f7ec686dcb4038892a6c">Player::retreive</a></div><div class="ttdeci">void retreive()</div><div class="ttdoc">Regain the focus. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00149">Player.hpp:149</a></div></div>
<div class="ttc" id="a00023_php_a1dec883e7f06a8c82a0e07635f200bcf"><div class="ttname"><a href="../../d3/d52/a00023.php#a1dec883e7f06a8c82a0e07635f200bcf">Player::isLost</a></div><div class="ttdeci">bool isLost() const </div><div class="ttdoc">Verify if it has the focus. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00154">Player.hpp:154</a></div></div>
<div class="ttc" id="a00023_php_a9f2475a2705e610e8dc7e4f1836d5e6b"><div class="ttname"><a href="../../d3/d52/a00023.php#a9f2475a2705e610e8dc7e4f1836d5e6b">Player::getExperience</a></div><div class="ttdeci">double getExperience() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00096">Player.hpp:96</a></div></div>
<div class="ttc" id="a00023_php_a809fc643a612879ac35690383dfd31e8"><div class="ttname"><a href="../../d3/d52/a00023.php#a809fc643a612879ac35690383dfd31e8">Player::setPassword</a></div><div class="ttdeci">void setPassword(std::string password)</div><div class="ttdoc">Set the Player&amp;#39;s password. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00062">Player.hpp:62</a></div></div>
<div class="ttc" id="a00023_php_aefb2fbad6ea8b979f46de232a4ff9eaa"><div class="ttname"><a href="../../d3/d52/a00023.php#aefb2fbad6ea8b979f46de232a4ff9eaa">Player::paused</a></div><div class="ttdeci">bool paused</div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00164">Player.hpp:164</a></div></div>
<div class="ttc" id="a00023_php_a606851799e5a0f58ea249f02751c45c1"><div class="ttname"><a href="../../d3/d52/a00023.php#a606851799e5a0f58ea249f02751c45c1">Player::lost</a></div><div class="ttdeci">void lost()</div><div class="ttdoc">Lost the focus. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00144">Player.hpp:144</a></div></div>
<div class="ttc" id="a00023_php_adfa756f1570500ee9b9628ad4a990e2e"><div class="ttname"><a href="../../d3/d52/a00023.php#adfa756f1570500ee9b9628ad4a990e2e">Player::resume</a></div><div class="ttdeci">void resume()</div><div class="ttdoc">Resume the player. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00133">Player.hpp:133</a></div></div>
<div class="ttc" id="a00045_php"><div class="ttname"><a href="../../d6/d97/a00045.php">Entities.hpp</a></div></div>
<div class="ttc" id="a00024_php"><div class="ttname"><a href="../../dc/de2/a00024.php">Point</a></div><div class="ttdoc">A struct to define a point in space. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/df9/a00044_source.php#l00058">defines.hpp:58</a></div></div>
<div class="ttc" id="a00018_php"><div class="ttname"><a href="../../d1/d2b/a00018.php">Map</a></div><div class="ttdoc">A map class to have something common. </div><div class="ttdef"><b>Definition:</b> <a href="../../d2/d79/a00051_source.php#l00048">Map.hpp:48</a></div></div>
<div class="ttc" id="a00023_php_a3ce0168273b6d0be5f66b3b6136397ff"><div class="ttname"><a href="../../d3/d52/a00023.php#a3ce0168273b6d0be5f66b3b6136397ff">Player::~Player</a></div><div class="ttdeci">virtual ~Player()</div><div class="ttdoc">Virtual destructor. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00039">Player.hpp:39</a></div></div>
<div class="ttc" id="a00023_php_ace955ce90f754ff7fdf23724e6c35d38"><div class="ttname"><a href="../../d3/d52/a00023.php#ace955ce90f754ff7fdf23724e6c35d38">Player::printInfos</a></div><div class="ttdeci">virtual void printInfos(std::ostream &amp;stream) const </div><div class="ttdoc">Print the infos in the instance of the class in stream. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00112">Player.hpp:112</a></div></div>
<div class="ttc" id="a00023_php_a93132a47f0166fdbb23f3cd72f54c03a"><div class="ttname"><a href="../../d3/d52/a00023.php#a93132a47f0166fdbb23f3cd72f54c03a">Player::Player</a></div><div class="ttdeci">Player(Map *map=nullptr, Point pt={0, 0, 0}, ContraptionAttr attr={0, 0, 0})</div><div class="ttdoc">Constructor of the class. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00027">Player.hpp:27</a></div></div>
<div class="ttc" id="a00023_php_af93214bdf82686e3c24401d6fb50ee4d"><div class="ttname"><a href="../../d3/d52/a00023.php#af93214bdf82686e3c24401d6fb50ee4d">Player::setExperience</a></div><div class="ttdeci">void setExperience(const double experience)</div><div class="ttdoc">Set the Player&amp;#39;s experience. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00070">Player.hpp:70</a></div></div>
<div class="ttc" id="a00023_php_a256287b18c9b2bbafb22dd31ed51edba"><div class="ttname"><a href="../../d3/d52/a00023.php#a256287b18c9b2bbafb22dd31ed51edba">Player::getId</a></div><div class="ttdeci">virtual size_t getId() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00101">Player.hpp:101</a></div></div>
<div class="ttc" id="a00023_php_a02fef31489f23336518f8ff353a7a0db"><div class="ttname"><a href="../../d3/d52/a00023.php#a02fef31489f23336518f8ff353a7a0db">Player::pause</a></div><div class="ttdeci">void pause()</div><div class="ttdoc">Pause the player. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00128">Player.hpp:128</a></div></div>
<div class="ttc" id="a00023_php_a835918495707d8b37e0ebeed0d6cf439"><div class="ttname"><a href="../../d3/d52/a00023.php#a835918495707d8b37e0ebeed0d6cf439">Player::setExperienceMax</a></div><div class="ttdeci">void setExperienceMax(const double experienceMax)</div><div class="ttdoc">Set the Player&amp;#39;s max experience. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00077">Player.hpp:77</a></div></div>
<div class="ttc" id="a00023_php_ab0075a5ffb42bfe0d6e84e36cad3e0ab"><div class="ttname"><a href="../../d3/d52/a00023.php#ab0075a5ffb42bfe0d6e84e36cad3e0ab">Player::setMail</a></div><div class="ttdeci">void setMail(const std::string mail)</div><div class="ttdoc">Set the Player&amp;#39;s mail. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00048">Player.hpp:48</a></div></div>
<div class="ttc" id="a00023_php_aaf3aba878522716fba266caa573df8f9"><div class="ttname"><a href="../../d3/d52/a00023.php#aaf3aba878522716fba266caa573df8f9">Player::setId</a></div><div class="ttdeci">void setId(size_t id)</div><div class="ttdoc">Set the Player&amp;#39;s id. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00085">Player.hpp:85</a></div></div>
<div class="ttc" id="a00023_php_a5b02ead36931c416ed8000b9a0a2d8aa"><div class="ttname"><a href="../../d3/d52/a00023.php#a5b02ead36931c416ed8000b9a0a2d8aa">Player::setUsername</a></div><div class="ttdeci">void setUsername(std::string username)</div><div class="ttdoc">Set the Player&amp;#39;s username. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00055">Player.hpp:55</a></div></div>
<div class="ttc" id="a00023_php_a6ac0f9addd53f05fb5fce59ede276b68"><div class="ttname"><a href="../../d3/d52/a00023.php#a6ac0f9addd53f05fb5fce59ede276b68">Player::isInit</a></div><div class="ttdeci">bool isInit() const </div><div class="ttdoc">Verify if the player is initialized. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00160">Player.hpp:160</a></div></div>
<div class="ttc" id="a00023_php_a29b4d8d469f4c293926375d1d7060fd0"><div class="ttname"><a href="../../d3/d52/a00023.php#a29b4d8d469f4c293926375d1d7060fd0">Player::getExperienceMax</a></div><div class="ttdeci">double getExperienceMax() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00098">Player.hpp:98</a></div></div>
<div class="ttc" id="a00023_php"><div class="ttname"><a href="../../d3/d52/a00023.php">Player</a></div><div class="ttdoc">A player that can be a child from any class. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00018">Player.hpp:18</a></div></div>
<div class="ttc" id="a00023_php_ab0fa81388a807469a2c5e45cb85bf57e"><div class="ttname"><a href="../../d3/d52/a00023.php#ab0fa81388a807469a2c5e45cb85bf57e">Player::getPassword</a></div><div class="ttdeci">std::string getPassword() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00093">Player.hpp:93</a></div></div>
<div class="ttc" id="a00023_php_a1a42c147a927ee5f762e590e18c52352"><div class="ttname"><a href="../../d3/d52/a00023.php#a1a42c147a927ee5f762e590e18c52352">Player::getMail</a></div><div class="ttdeci">std::string getMail() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00089">Player.hpp:89</a></div></div>
<div class="ttc" id="a00023_php_a024d37d9bdf83c1cc6618df8cc574aa2"><div class="ttname"><a href="../../d3/d52/a00023.php#a024d37d9bdf83c1cc6618df8cc574aa2">Player::init</a></div><div class="ttdeci">bool init</div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00163">Player.hpp:163</a></div></div>
<div class="ttc" id="a00023_php_ac3b3f61fa669c386bb9b2c912363d0b5"><div class="ttname"><a href="../../d3/d52/a00023.php#ac3b3f61fa669c386bb9b2c912363d0b5">Player::losted</a></div><div class="ttdeci">bool losted</div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00165">Player.hpp:165</a></div></div>
<div class="ttc" id="a00023_php_ae8d0cb2cfc31c311122543b16226cdb7"><div class="ttname"><a href="../../d3/d52/a00023.php#ae8d0cb2cfc31c311122543b16226cdb7">Player::isPaused</a></div><div class="ttdeci">bool isPaused() const </div><div class="ttdoc">Verify if the player is paused. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00138">Player.hpp:138</a></div></div>
<div class="ttc" id="a00023_php_ae840c70699458938568b36a422963a89"><div class="ttname"><a href="../../d3/d52/a00023.php#ae840c70699458938568b36a422963a89">Player::getUsername</a></div><div class="ttdeci">std::string getUsername() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00091">Player.hpp:91</a></div></div>
<div class="ttc" id="a00013_php"><div class="ttname"><a href="../../d7/dd4/a00013.php">ContraptionAttr</a></div><div class="ttdoc">A struct to define Contraption attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/df9/a00044_source.php#l00068">defines.hpp:68</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d9/d2e/a00056.php">Player.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
