<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>ProjetFinalCPP: Entity.hpp Source File</title>
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
   <div id="projectname">ProjetFinalCPP
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
<div class="title">Entity.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d5/de0/a00050.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_ENTITY</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_ENTITY</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d5/df9/a00044.php">Contraption.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dd/d1b/a00015.php">Entity</a> : <span class="keyword">public</span> <a class="code" href="../../da/d45/a00011.php">Contraption</a> {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <span class="comment">/* Constructor &amp; Destroyer */</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;            <a class="code" href="../../dd/d1b/a00015.php#a8eb01833b85eafedca05d504d7be006b">Entity</a>(<a class="code" href="../../db/db2/a00020.php">Map</a>* map = <span class="keyword">nullptr</span>, <a class="code" href="../../d6/d5b/a00026.php">Point</a> pt = {0, 0, 0}, <a class="code" href="../../df/d86/a00012.php">ContraptionAttr</a> attr = {0, 0, 0});</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../dd/d1b/a00015.php#a588098978eea6a3486b7361605ff3f0f">~Entity</a>();</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00037"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#afd211ba2273c0fafef236763c80df4e9">   37</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#afd211ba2273c0fafef236763c80df4e9">setLife</a>(<span class="keywordtype">double</span> life){ this-&gt;life = life; }</div><div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#abcead1c3d42baabdcfb06b695b163a04">   44</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#abcead1c3d42baabdcfb06b695b163a04">setDamages</a>(<span class="keywordtype">double</span> damages){ this-&gt;damages = damages; }</div><div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a91d83b59b1f3bcae287c7185cc06f561">   51</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#a91d83b59b1f3bcae287c7185cc06f561">setResistance</a>(<span class="keywordtype">double</span> resistance){ this-&gt;resistance = resistance; }</div><div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a1dd5e5689f86ac1ddc9a539c498d82ec">   58</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#a1dd5e5689f86ac1ddc9a539c498d82ec">setAge</a>(<span class="keywordtype">double</span> age){ this-&gt;age = age; }</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;</div><div class="line"><a name="l00066"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a192bdf0dc40a986f8aed9be2d8607cb5">   66</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#a192bdf0dc40a986f8aed9be2d8607cb5">setReborn</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> reborn){ this-&gt;reborn = reborn; }</div><div class="line"><a name="l00073"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#ad52da0415cd4ba8b93f34ceb0c229569">   73</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#ad52da0415cd4ba8b93f34ceb0c229569">setTimeActReborn</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> time){ this-&gt;timeActReborn = time; }</div><div class="line"><a name="l00080"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a9150f012d86d1ef0f9c070d41da8e5ba">   80</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#a9150f012d86d1ef0f9c070d41da8e5ba">setTimePrecReborn</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> time){ this-&gt;timePrecReborn = time; }</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;</div><div class="line"><a name="l00088"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a5741125f8abd83cf979bc9a590712057">   88</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#a5741125f8abd83cf979bc9a590712057">setRegen</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> regen){ this-&gt;regen = regen; }</div><div class="line"><a name="l00095"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#ac4980b5bbf4fcba13d28be159c7c8739">   95</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#ac4980b5bbf4fcba13d28be159c7c8739">setTimeActRegen</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> time){ this-&gt;timeActRegen = time; }</div><div class="line"><a name="l00102"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a67c69bfc713e0275c704bd2ad40bf997">  102</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#a67c69bfc713e0275c704bd2ad40bf997">setTimePrecRegen</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> time){ this-&gt;timePrecRegen = time; }</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00106"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a04d2bf369c65382b8001db51b3f9568b">  106</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a04d2bf369c65382b8001db51b3f9568b">getLifeMax</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> life; }</div><div class="line"><a name="l00108"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a9b51aceb9bb22ddd39ce8c8acb378e2c">  108</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a9b51aceb9bb22ddd39ce8c8acb378e2c">getDamages</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> damages; }</div><div class="line"><a name="l00110"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#abbd4dc44c41c2f29d45666e73184a5c7">  110</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#abbd4dc44c41c2f29d45666e73184a5c7">getResistance</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> resistance; }</div><div class="line"><a name="l00112"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a3f9600c31ebb4ee8025204d86b2a0355">  112</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a3f9600c31ebb4ee8025204d86b2a0355">getAge</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> age; }</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div><div class="line"><a name="l00115"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a9a4ebc5d8f48e62f4ab322d6f7f35c48">  115</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a9a4ebc5d8f48e62f4ab322d6f7f35c48">getReborn</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> reborn; }</div><div class="line"><a name="l00117"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#af6020aac4cb48ab6efd0f8985fe58d5a">  117</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#af6020aac4cb48ab6efd0f8985fe58d5a">getTimeActReborn</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> timeActReborn; }</div><div class="line"><a name="l00119"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a5b727d71b80ecf08e26df9377b156f69">  119</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a5b727d71b80ecf08e26df9377b156f69">getTimePrecReborn</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> timePrecReborn; }</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div><div class="line"><a name="l00122"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a8fefea906129f4a978559a2f19814255">  122</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a8fefea906129f4a978559a2f19814255">getRegen</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> regen; }</div><div class="line"><a name="l00124"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a65a785f390af7af0bc58b69bd9aa964f">  124</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a65a785f390af7af0bc58b69bd9aa964f">getTimeActRegen</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> timeActRegen; }</div><div class="line"><a name="l00126"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a4ad4de93247ee864f07acfd798d2fd13">  126</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a4ad4de93247ee864f07acfd798d2fd13">getTimePrecRegen</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> timePrecRegen; }</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;        <span class="comment">/* Friends */</span></div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#a20e050d3112f769d9a911e1b52f2ac77">printInfos</a>(std::ostream&amp; stream)<span class="keyword">const</span>;</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#a0c839621027ac7ae02197923acd45fbd">grow</a>();</div><div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;</div><div class="line"><a name="l00146"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a5256532f85660d2c0b781888f4de7d0c">  146</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/d1b/a00015.php#a5256532f85660d2c0b781888f4de7d0c">getLife</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> (life-damages &lt; 0)?0:life-damages; }</div><div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div><div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/d1b/a00015.php#ad3f0d200294bf72ae5adb0ae752e93b9">hit</a>(<span class="keywordtype">double</span> damages);</div><div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div><div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div><div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;        <span class="keywordtype">double</span> life;</div><div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;        <span class="keywordtype">double</span> damages;</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;        <span class="keywordtype">double</span> resistance;</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div><div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;        <span class="keywordtype">double</span> age;</div><div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;</div><div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;        <span class="keywordtype">double</span> reborn;</div><div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;        <span class="keywordtype">double</span> timeActReborn;</div><div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;        <span class="keywordtype">double</span> timePrecReborn;</div><div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;</div><div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;        <span class="keywordtype">double</span> regen;</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;        <span class="keywordtype">double</span> timeActRegen;</div><div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;        <span class="keywordtype">double</span> timePrecRegen;</div><div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;};</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;<span class="preprocessor">#endif //HEADER_ENTITY</span></div><div class="ttc" id="a00015_php_a91d83b59b1f3bcae287c7185cc06f561"><div class="ttname"><a href="../../dd/d1b/a00015.php#a91d83b59b1f3bcae287c7185cc06f561">Entity::setResistance</a></div><div class="ttdeci">void setResistance(double resistance)</div><div class="ttdoc">Set the resistance of the entity. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00051">Entity.hpp:51</a></div></div>
<div class="ttc" id="a00015_php_a8fefea906129f4a978559a2f19814255"><div class="ttname"><a href="../../dd/d1b/a00015.php#a8fefea906129f4a978559a2f19814255">Entity::getRegen</a></div><div class="ttdeci">double getRegen() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00122">Entity.hpp:122</a></div></div>
<div class="ttc" id="a00015_php_a3f9600c31ebb4ee8025204d86b2a0355"><div class="ttname"><a href="../../dd/d1b/a00015.php#a3f9600c31ebb4ee8025204d86b2a0355">Entity::getAge</a></div><div class="ttdeci">double getAge() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00112">Entity.hpp:112</a></div></div>
<div class="ttc" id="a00015_php_a8eb01833b85eafedca05d504d7be006b"><div class="ttname"><a href="../../dd/d1b/a00015.php#a8eb01833b85eafedca05d504d7be006b">Entity::Entity</a></div><div class="ttdeci">Entity(Map *map=nullptr, Point pt={0, 0, 0}, ContraptionAttr attr={0, 0, 0})</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00015_php_ad52da0415cd4ba8b93f34ceb0c229569"><div class="ttname"><a href="../../dd/d1b/a00015.php#ad52da0415cd4ba8b93f34ceb0c229569">Entity::setTimeActReborn</a></div><div class="ttdeci">void setTimeActReborn(const double time)</div><div class="ttdoc">Set the actual time. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00073">Entity.hpp:73</a></div></div>
<div class="ttc" id="a00015_php_a588098978eea6a3486b7361605ff3f0f"><div class="ttname"><a href="../../dd/d1b/a00015.php#a588098978eea6a3486b7361605ff3f0f">Entity::~Entity</a></div><div class="ttdeci">virtual ~Entity()</div><div class="ttdoc">Virtual destructor. </div></div>
<div class="ttc" id="a00015_php_a1dd5e5689f86ac1ddc9a539c498d82ec"><div class="ttname"><a href="../../dd/d1b/a00015.php#a1dd5e5689f86ac1ddc9a539c498d82ec">Entity::setAge</a></div><div class="ttdeci">void setAge(double age)</div><div class="ttdoc">Set the age of the entity. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00058">Entity.hpp:58</a></div></div>
<div class="ttc" id="a00015_php_afd211ba2273c0fafef236763c80df4e9"><div class="ttname"><a href="../../dd/d1b/a00015.php#afd211ba2273c0fafef236763c80df4e9">Entity::setLife</a></div><div class="ttdeci">void setLife(double life)</div><div class="ttdoc">Set the life of the entity. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00037">Entity.hpp:37</a></div></div>
<div class="ttc" id="a00015_php_a5256532f85660d2c0b781888f4de7d0c"><div class="ttname"><a href="../../dd/d1b/a00015.php#a5256532f85660d2c0b781888f4de7d0c">Entity::getLife</a></div><div class="ttdeci">double getLife() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00146">Entity.hpp:146</a></div></div>
<div class="ttc" id="a00015_php_a65a785f390af7af0bc58b69bd9aa964f"><div class="ttname"><a href="../../dd/d1b/a00015.php#a65a785f390af7af0bc58b69bd9aa964f">Entity::getTimeActRegen</a></div><div class="ttdeci">double getTimeActRegen() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00124">Entity.hpp:124</a></div></div>
<div class="ttc" id="a00026_php"><div class="ttname"><a href="../../d6/d5b/a00026.php">Point</a></div><div class="ttdoc">A struct to define a point in space. </div><div class="ttdef"><b>Definition:</b> <a href="../../d6/d2d/a00047_source.php#l00065">defines.hpp:65</a></div></div>
<div class="ttc" id="a00015_php_a9a4ebc5d8f48e62f4ab322d6f7f35c48"><div class="ttname"><a href="../../dd/d1b/a00015.php#a9a4ebc5d8f48e62f4ab322d6f7f35c48">Entity::getReborn</a></div><div class="ttdeci">double getReborn() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00115">Entity.hpp:115</a></div></div>
<div class="ttc" id="a00011_php"><div class="ttname"><a href="../../da/d45/a00011.php">Contraption</a></div><div class="ttdoc">A contraption. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/df9/a00044_source.php#l00021">Contraption.hpp:21</a></div></div>
<div class="ttc" id="a00015_php_a4ad4de93247ee864f07acfd798d2fd13"><div class="ttname"><a href="../../dd/d1b/a00015.php#a4ad4de93247ee864f07acfd798d2fd13">Entity::getTimePrecRegen</a></div><div class="ttdeci">double getTimePrecRegen() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00126">Entity.hpp:126</a></div></div>
<div class="ttc" id="a00015_php_abbd4dc44c41c2f29d45666e73184a5c7"><div class="ttname"><a href="../../dd/d1b/a00015.php#abbd4dc44c41c2f29d45666e73184a5c7">Entity::getResistance</a></div><div class="ttdeci">double getResistance() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00110">Entity.hpp:110</a></div></div>
<div class="ttc" id="a00015_php_a67c69bfc713e0275c704bd2ad40bf997"><div class="ttname"><a href="../../dd/d1b/a00015.php#a67c69bfc713e0275c704bd2ad40bf997">Entity::setTimePrecRegen</a></div><div class="ttdeci">void setTimePrecRegen(const double time)</div><div class="ttdoc">Set the precedent time. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00102">Entity.hpp:102</a></div></div>
<div class="ttc" id="a00015_php_a20e050d3112f769d9a911e1b52f2ac77"><div class="ttname"><a href="../../dd/d1b/a00015.php#a20e050d3112f769d9a911e1b52f2ac77">Entity::printInfos</a></div><div class="ttdeci">virtual void printInfos(std::ostream &amp;stream) const </div><div class="ttdoc">Print the infos in the instance of the class in stream. </div></div>
<div class="ttc" id="a00015_php_ad3f0d200294bf72ae5adb0ae752e93b9"><div class="ttname"><a href="../../dd/d1b/a00015.php#ad3f0d200294bf72ae5adb0ae752e93b9">Entity::hit</a></div><div class="ttdeci">void hit(double damages)</div><div class="ttdoc">Hit an entity with damages. </div></div>
<div class="ttc" id="a00015_php_ac4980b5bbf4fcba13d28be159c7c8739"><div class="ttname"><a href="../../dd/d1b/a00015.php#ac4980b5bbf4fcba13d28be159c7c8739">Entity::setTimeActRegen</a></div><div class="ttdeci">void setTimeActRegen(const double time)</div><div class="ttdoc">Set the actual time. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00095">Entity.hpp:95</a></div></div>
<div class="ttc" id="a00015_php_a192bdf0dc40a986f8aed9be2d8607cb5"><div class="ttname"><a href="../../dd/d1b/a00015.php#a192bdf0dc40a986f8aed9be2d8607cb5">Entity::setReborn</a></div><div class="ttdeci">void setReborn(const double reborn)</div><div class="ttdoc">Set the reborn time. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00066">Entity.hpp:66</a></div></div>
<div class="ttc" id="a00015_php_a9150f012d86d1ef0f9c070d41da8e5ba"><div class="ttname"><a href="../../dd/d1b/a00015.php#a9150f012d86d1ef0f9c070d41da8e5ba">Entity::setTimePrecReborn</a></div><div class="ttdeci">void setTimePrecReborn(const double time)</div><div class="ttdoc">Set the precedent time. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00080">Entity.hpp:80</a></div></div>
<div class="ttc" id="a00015_php_a0c839621027ac7ae02197923acd45fbd"><div class="ttname"><a href="../../dd/d1b/a00015.php#a0c839621027ac7ae02197923acd45fbd">Entity::grow</a></div><div class="ttdeci">virtual void grow()</div><div class="ttdoc">Grow the entity. </div></div>
<div class="ttc" id="a00015_php_af6020aac4cb48ab6efd0f8985fe58d5a"><div class="ttname"><a href="../../dd/d1b/a00015.php#af6020aac4cb48ab6efd0f8985fe58d5a">Entity::getTimeActReborn</a></div><div class="ttdeci">double getTimeActReborn() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00117">Entity.hpp:117</a></div></div>
<div class="ttc" id="a00015_php_abcead1c3d42baabdcfb06b695b163a04"><div class="ttname"><a href="../../dd/d1b/a00015.php#abcead1c3d42baabdcfb06b695b163a04">Entity::setDamages</a></div><div class="ttdeci">void setDamages(double damages)</div><div class="ttdoc">The damages of the entity. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00044">Entity.hpp:44</a></div></div>
<div class="ttc" id="a00020_php"><div class="ttname"><a href="../../db/db2/a00020.php">Map</a></div><div class="ttdoc">A map class to have something common. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/df7/a00058_source.php#l00048">Map.hpp:48</a></div></div>
<div class="ttc" id="a00015_php_a5741125f8abd83cf979bc9a590712057"><div class="ttname"><a href="../../dd/d1b/a00015.php#a5741125f8abd83cf979bc9a590712057">Entity::setRegen</a></div><div class="ttdeci">void setRegen(const double regen)</div><div class="ttdoc">Set the regeneration time. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00088">Entity.hpp:88</a></div></div>
<div class="ttc" id="a00015_php_a5b727d71b80ecf08e26df9377b156f69"><div class="ttname"><a href="../../dd/d1b/a00015.php#a5b727d71b80ecf08e26df9377b156f69">Entity::getTimePrecReborn</a></div><div class="ttdeci">double getTimePrecReborn() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00119">Entity.hpp:119</a></div></div>
<div class="ttc" id="a00015_php_a04d2bf369c65382b8001db51b3f9568b"><div class="ttname"><a href="../../dd/d1b/a00015.php#a04d2bf369c65382b8001db51b3f9568b">Entity::getLifeMax</a></div><div class="ttdeci">double getLifeMax() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00106">Entity.hpp:106</a></div></div>
<div class="ttc" id="a00012_php"><div class="ttname"><a href="../../df/d86/a00012.php">ContraptionAttr</a></div><div class="ttdoc">A struct to define Contraption attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../d6/d2d/a00047_source.php#l00077">defines.hpp:77</a></div></div>
<div class="ttc" id="a00044_php"><div class="ttname"><a href="../../d5/df9/a00044.php">Contraption.hpp</a></div></div>
<div class="ttc" id="a00015_php"><div class="ttname"><a href="../../dd/d1b/a00015.php">Entity</a></div><div class="ttdoc">An entity. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00017">Entity.hpp:17</a></div></div>
<div class="ttc" id="a00015_php_a9b51aceb9bb22ddd39ce8c8acb378e2c"><div class="ttname"><a href="../../dd/d1b/a00015.php#a9b51aceb9bb22ddd39ce8c8acb378e2c">Entity::getDamages</a></div><div class="ttdeci">double getDamages() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/de0/a00050_source.php#l00108">Entity.hpp:108</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/de0/a00050.php">Entity.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>