<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: Contraption.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d9/d73/a00060_source.php','../../');});
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
<div class="title">Contraption.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d9/d73/a00060.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_CONTRAPTION</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_CONTRAPTION</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d6f/a00063.php">defines.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d7/df7/a00058.php">collides.hpp</a>&quot;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d9/df8/a00096.php">types.hpp</a>&quot;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../db/df8/a00076.php">Map.hpp</a>&quot;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;</div><div class="line"><a name="l00021"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php">   21</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d7/dd4/a00013.php">Contraption</a> {</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;        <span class="comment">/* Constructor &amp; Destroyer */</span></div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;            <a class="code" href="../../d7/dd4/a00013.php#ac80a221d48732cc349d5ccef1e4ad319">Contraption</a>(<a class="code" href="../../d0/d33/a00027.php">Map</a>* map = <span class="keyword">nullptr</span>, <a class="code" href="../../d0/dc0/a00033.php">Point</a> pt = {0, 0, 0}, <a class="code" href="../../d2/de7/a00014.php">ContraptionAttr</a> attr = {0, 0, 0});</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../d7/dd4/a00013.php#acfdea93e7835722a3b211ba2b8dd1463">~Contraption</a>();</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a05facc668dcb27c1bab72118aa5bafe7">   41</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a05facc668dcb27c1bab72118aa5bafe7">setPosition</a>(<a class="code" href="../../d0/dc0/a00033.php">Point</a> pt){ <a class="code" href="../../d7/dd4/a00013.php#a05facc668dcb27c1bab72118aa5bafe7">setPosition</a>(pt.<a class="code" href="../../d0/dc0/a00033.php#ab99c56589bc8ad5fa5071387110a5bc7">x</a>, pt.<a class="code" href="../../d0/dc0/a00033.php#afa38be143ae800e6ad69ce8ed4df62d8">y</a>, pt.<a class="code" href="../../d0/dc0/a00033.php#a05ba3b1dfcb19430582ae953cbbfbded">z</a>); }</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a05facc668dcb27c1bab72118aa5bafe7">setPosition</a>(<span class="keywordtype">double</span> x, <span class="keywordtype">double</span> y, <span class="keywordtype">double</span> z = 0);</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#ab14db8239bfc09ba3c5c6e07a23033b7">setX</a>(<span class="keywordtype">double</span> x);</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a9a260fe681d3f4be9cb08546dff4d3d4">setY</a>(<span class="keywordtype">double</span> y);</div><div class="line"><a name="l00072"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a61b34301ffd55f3f9b6bc319020e691d">   72</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a61b34301ffd55f3f9b6bc319020e691d">setZ</a>(<span class="keywordtype">double</span> z){ this-&gt;pt.<a class="code" href="../../d0/dc0/a00033.php#a05ba3b1dfcb19430582ae953cbbfbded">z</a> = z; }</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div><div class="line"><a name="l00080"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a3e221cb1cdd414d2d06492b575ec7120">   80</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a3e221cb1cdd414d2d06492b575ec7120">setAttributes</a>(<a class="code" href="../../d2/de7/a00014.php">ContraptionAttr</a> attr){ <a class="code" href="../../d7/dd4/a00013.php#a3e221cb1cdd414d2d06492b575ec7120">setAttributes</a>(attr.<a class="code" href="../../d2/de7/a00014.php#a949dbd15efa71ddbb294abf15517d8b0">w</a>, attr.<a class="code" href="../../d2/de7/a00014.php#a480fb32edc0218d9d1cead0a8e6f9d15">h</a>, attr.<a class="code" href="../../d2/de7/a00014.php#a062e1a4fe2f7d6f8d771f13f10844a19">angle</a>); }</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a3e221cb1cdd414d2d06492b575ec7120">setAttributes</a>(<span class="keywordtype">double</span> w, <span class="keywordtype">double</span> h, <span class="keywordtype">double</span> angle = 0);</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div><div class="line"><a name="l00097"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a83d954f1cb764a7410de01d33cb9e396">   97</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a83d954f1cb764a7410de01d33cb9e396">setW</a>(<span class="keywordtype">double</span> w){ this-&gt;attr.<a class="code" href="../../d2/de7/a00014.php#a949dbd15efa71ddbb294abf15517d8b0">w</a> = w; }</div><div class="line"><a name="l00104"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#afb8030a7a7df2bef59356c293f845487">  104</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#afb8030a7a7df2bef59356c293f845487">setH</a>(<span class="keywordtype">double</span> h){ this-&gt;attr.<a class="code" href="../../d2/de7/a00014.php#a480fb32edc0218d9d1cead0a8e6f9d15">h</a> = h; }</div><div class="line"><a name="l00111"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#ad1482208cab08d738341ab2265b37deb">  111</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#ad1482208cab08d738341ab2265b37deb">setA</a>(<span class="keywordtype">double</span> angle){ this-&gt;attr.<a class="code" href="../../d2/de7/a00014.php#a062e1a4fe2f7d6f8d771f13f10844a19">angle</a> = angle; }</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;</div><div class="line"><a name="l00119"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a0d88e87317d6f003471fcf52808a4a25">  119</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a0d88e87317d6f003471fcf52808a4a25">setMap</a>(<a class="code" href="../../d0/d33/a00027.php">Map</a>* map){ this-&gt;map = map; }</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div><div class="line"><a name="l00127"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#ae9131d3133c67c22f8692d4bd806187e">  127</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#ae9131d3133c67c22f8692d4bd806187e">setLevel</a>(<span class="keywordtype">size_t</span> level){ this-&gt;level = level; }</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00131"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#abc9cc2cd7e06c45e4c0edf96f405bae2">  131</a></span>&#160;            <a class="code" href="../../d0/dc0/a00033.php">Point</a> <a class="code" href="../../d7/dd4/a00013.php#abc9cc2cd7e06c45e4c0edf96f405bae2">getPosition</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> pt; }</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div><div class="line"><a name="l00134"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a8eddeb512a0133271555e8f1ef888dc3">  134</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#a8eddeb512a0133271555e8f1ef888dc3">getX</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> pt.<a class="code" href="../../d0/dc0/a00033.php#ab99c56589bc8ad5fa5071387110a5bc7">x</a>; }</div><div class="line"><a name="l00136"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a1cf1642c874236857eff096f32f3285c">  136</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#a1cf1642c874236857eff096f32f3285c">getY</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> pt.<a class="code" href="../../d0/dc0/a00033.php#afa38be143ae800e6ad69ce8ed4df62d8">y</a>; }</div><div class="line"><a name="l00138"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a3365e9eda5d1c8426910522dcbb14d52">  138</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#a3365e9eda5d1c8426910522dcbb14d52">getZ</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> pt.<a class="code" href="../../d0/dc0/a00033.php#a05ba3b1dfcb19430582ae953cbbfbded">z</a>; }</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;</div><div class="line"><a name="l00141"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a9993ab6cac0ce33ea91485965572cba9">  141</a></span>&#160;            <a class="code" href="../../d2/de7/a00014.php">ContraptionAttr</a> <a class="code" href="../../d7/dd4/a00013.php#a9993ab6cac0ce33ea91485965572cba9">getAttributes</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> attr; }</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div><div class="line"><a name="l00144"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#acf50efec2040353189fe1b46152ba8d0">  144</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#acf50efec2040353189fe1b46152ba8d0">getW</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> attr.<a class="code" href="../../d2/de7/a00014.php#a949dbd15efa71ddbb294abf15517d8b0">w</a>; }</div><div class="line"><a name="l00146"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#aa468a3b0582bb0e073f2f642611c10f1">  146</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#aa468a3b0582bb0e073f2f642611c10f1">getH</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> attr.<a class="code" href="../../d2/de7/a00014.php#a480fb32edc0218d9d1cead0a8e6f9d15">h</a>; }</div><div class="line"><a name="l00148"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a08d8bb97ba4e9b6238f5a80af9800579">  148</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#a08d8bb97ba4e9b6238f5a80af9800579">getA</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> attr.<a class="code" href="../../d2/de7/a00014.php#a062e1a4fe2f7d6f8d771f13f10844a19">angle</a>; }</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;</div><div class="line"><a name="l00151"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a3ca9a1e5aff93640d295576af62b7202">  151</a></span>&#160;            <a class="code" href="../../d0/d33/a00027.php">Map</a>* <a class="code" href="../../d7/dd4/a00013.php#a3ca9a1e5aff93640d295576af62b7202">getMap</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> map; }</div><div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;</div><div class="line"><a name="l00154"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a3b6d4a5f2d520dfa5e58afe5b421a126">  154</a></span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../d7/dd4/a00013.php#a3b6d4a5f2d520dfa5e58afe5b421a126">getLevel</a>()<span class="keyword">const</span>{ <span class="keywordflow">return</span> level; }</div><div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div><div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;        <span class="comment">/* Friends */</span></div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;            <span class="keyword">friend</span> std::ostream&amp; <a class="code" href="../../d7/dd4/a00013.php#a763a20bdd6cf99e565f2516d1c4bb161">operator&lt;&lt;</a>(std::ostream&amp; stream, <a class="code" href="../../d7/dd4/a00013.php">Contraption</a> <span class="keyword">const</span> &amp;in);</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a6dedcd33d891a22ae7d6ce4d7e1d6a37">printInfos</a>(std::ostream&amp; stream)<span class="keyword">const</span>;</div><div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#afd10a73d032a10e48c57e7b3252c58c2">getRelativeZ</a>(<a class="code" href="../../d7/dd4/a00013.php">Contraption</a>&amp; obj);</div><div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a3af679109317a6740c661fe5164158ff">addPosition</a>(<span class="keywordtype">double</span> x, <span class="keywordtype">double</span> y, <span class="keywordtype">double</span> z = 0);</div><div class="line"><a name="l00192"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#ab69fdcd66f63e0a038a4006d43ecb9b6">  192</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#ab69fdcd66f63e0a038a4006d43ecb9b6">turnLeft</a>(){ <a class="code" href="../../d7/dd4/a00013.php#ad1482208cab08d738341ab2265b37deb">setA</a>(<a class="code" href="../../d7/dd4/a00013.php#a08d8bb97ba4e9b6238f5a80af9800579">getA</a>() - 90); }</div><div class="line"><a name="l00197"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a20f271c846ea0c8bc96c618616a260ba">  197</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/dd4/a00013.php#a20f271c846ea0c8bc96c618616a260ba">turnRight</a>(){ <a class="code" href="../../d7/dd4/a00013.php#ad1482208cab08d738341ab2265b37deb">setA</a>(<a class="code" href="../../d7/dd4/a00013.php#a08d8bb97ba4e9b6238f5a80af9800579">getA</a>() + 90); }</div><div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;</div><div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;</div><div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;</div><div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;</div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;</div><div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;        <a class="code" href="../../d0/d33/a00027.php">Map</a>* map;</div><div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;</div><div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;        <a class="code" href="../../d0/dc0/a00033.php">Point</a> pt;</div><div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;        <a class="code" href="../../d2/de7/a00014.php">ContraptionAttr</a> attr;</div><div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;</div><div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;        <span class="keywordtype">size_t</span> level;</div><div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;};</div><div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;</div><div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;<span class="preprocessor">#endif //HEADER_CONTRAPTION</span></div><div class="ttc" id="a00013_php_a9993ab6cac0ce33ea91485965572cba9"><div class="ttname"><a href="../../d7/dd4/a00013.php#a9993ab6cac0ce33ea91485965572cba9">Contraption::getAttributes</a></div><div class="ttdeci">ContraptionAttr getAttributes() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00141">Contraption.hpp:141</a></div></div>
<div class="ttc" id="a00013_php_aa468a3b0582bb0e073f2f642611c10f1"><div class="ttname"><a href="../../d7/dd4/a00013.php#aa468a3b0582bb0e073f2f642611c10f1">Contraption::getH</a></div><div class="ttdeci">double getH() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00146">Contraption.hpp:146</a></div></div>
<div class="ttc" id="a00013_php_a3ca9a1e5aff93640d295576af62b7202"><div class="ttname"><a href="../../d7/dd4/a00013.php#a3ca9a1e5aff93640d295576af62b7202">Contraption::getMap</a></div><div class="ttdeci">Map * getMap() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00151">Contraption.hpp:151</a></div></div>
<div class="ttc" id="a00076_php"><div class="ttname"><a href="../../db/df8/a00076.php">Map.hpp</a></div></div>
<div class="ttc" id="a00013_php_ab69fdcd66f63e0a038a4006d43ecb9b6"><div class="ttname"><a href="../../d7/dd4/a00013.php#ab69fdcd66f63e0a038a4006d43ecb9b6">Contraption::turnLeft</a></div><div class="ttdeci">void turnLeft()</div><div class="ttdoc">Turn the Contraption to the left. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00192">Contraption.hpp:192</a></div></div>
<div class="ttc" id="a00013_php_a3e221cb1cdd414d2d06492b575ec7120"><div class="ttname"><a href="../../d7/dd4/a00013.php#a3e221cb1cdd414d2d06492b575ec7120">Contraption::setAttributes</a></div><div class="ttdeci">void setAttributes(ContraptionAttr attr)</div><div class="ttdoc">Set the attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00080">Contraption.hpp:80</a></div></div>
<div class="ttc" id="a00013_php_a9a260fe681d3f4be9cb08546dff4d3d4"><div class="ttname"><a href="../../d7/dd4/a00013.php#a9a260fe681d3f4be9cb08546dff4d3d4">Contraption::setY</a></div><div class="ttdeci">void setY(double y)</div><div class="ttdoc">Set the y coordinate. </div></div>
<div class="ttc" id="a00013_php_ac80a221d48732cc349d5ccef1e4ad319"><div class="ttname"><a href="../../d7/dd4/a00013.php#ac80a221d48732cc349d5ccef1e4ad319">Contraption::Contraption</a></div><div class="ttdeci">Contraption(Map *map=nullptr, Point pt={0, 0, 0}, ContraptionAttr attr={0, 0, 0})</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00033_php_afa38be143ae800e6ad69ce8ed4df62d8"><div class="ttname"><a href="../../d0/dc0/a00033.php#afa38be143ae800e6ad69ce8ed4df62d8">Point::y</a></div><div class="ttdeci">double y</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00062">defines.hpp:62</a></div></div>
<div class="ttc" id="a00013_php_a08d8bb97ba4e9b6238f5a80af9800579"><div class="ttname"><a href="../../d7/dd4/a00013.php#a08d8bb97ba4e9b6238f5a80af9800579">Contraption::getA</a></div><div class="ttdeci">double getA() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00148">Contraption.hpp:148</a></div></div>
<div class="ttc" id="a00013_php_a3365e9eda5d1c8426910522dcbb14d52"><div class="ttname"><a href="../../d7/dd4/a00013.php#a3365e9eda5d1c8426910522dcbb14d52">Contraption::getZ</a></div><div class="ttdeci">double getZ() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00138">Contraption.hpp:138</a></div></div>
<div class="ttc" id="a00013_php_abc9cc2cd7e06c45e4c0edf96f405bae2"><div class="ttname"><a href="../../d7/dd4/a00013.php#abc9cc2cd7e06c45e4c0edf96f405bae2">Contraption::getPosition</a></div><div class="ttdeci">Point getPosition() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00131">Contraption.hpp:131</a></div></div>
<div class="ttc" id="a00033_php_a05ba3b1dfcb19430582ae953cbbfbded"><div class="ttname"><a href="../../d0/dc0/a00033.php#a05ba3b1dfcb19430582ae953cbbfbded">Point::z</a></div><div class="ttdeci">double z</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00064">defines.hpp:64</a></div></div>
<div class="ttc" id="a00013_php_a1cf1642c874236857eff096f32f3285c"><div class="ttname"><a href="../../d7/dd4/a00013.php#a1cf1642c874236857eff096f32f3285c">Contraption::getY</a></div><div class="ttdeci">double getY() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00136">Contraption.hpp:136</a></div></div>
<div class="ttc" id="a00013_php_a763a20bdd6cf99e565f2516d1c4bb161"><div class="ttname"><a href="../../d7/dd4/a00013.php#a763a20bdd6cf99e565f2516d1c4bb161">Contraption::operator&lt;&lt;</a></div><div class="ttdeci">friend std::ostream &amp; operator&lt;&lt;(std::ostream &amp;stream, Contraption const &amp;in)</div><div class="ttdoc">Overload of the &lt;&lt; operator. </div></div>
<div class="ttc" id="a00013_php_a6dedcd33d891a22ae7d6ce4d7e1d6a37"><div class="ttname"><a href="../../d7/dd4/a00013.php#a6dedcd33d891a22ae7d6ce4d7e1d6a37">Contraption::printInfos</a></div><div class="ttdeci">virtual void printInfos(std::ostream &amp;stream) const </div><div class="ttdoc">Print the infos in the instance of the class in stream. </div></div>
<div class="ttc" id="a00058_php"><div class="ttname"><a href="../../d7/df7/a00058.php">collides.hpp</a></div></div>
<div class="ttc" id="a00013_php_ae9131d3133c67c22f8692d4bd806187e"><div class="ttname"><a href="../../d7/dd4/a00013.php#ae9131d3133c67c22f8692d4bd806187e">Contraption::setLevel</a></div><div class="ttdeci">void setLevel(size_t level)</div><div class="ttdoc">Set the level. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00127">Contraption.hpp:127</a></div></div>
<div class="ttc" id="a00014_php"><div class="ttname"><a href="../../d2/de7/a00014.php">ContraptionAttr</a></div><div class="ttdoc">A struct to define Contraption attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00068">defines.hpp:68</a></div></div>
<div class="ttc" id="a00013_php_a3af679109317a6740c661fe5164158ff"><div class="ttname"><a href="../../d7/dd4/a00013.php#a3af679109317a6740c661fe5164158ff">Contraption::addPosition</a></div><div class="ttdeci">void addPosition(double x, double y, double z=0)</div><div class="ttdoc">Add coordinates to the actual position. </div></div>
<div class="ttc" id="a00033_php"><div class="ttname"><a href="../../d0/dc0/a00033.php">Point</a></div><div class="ttdoc">A struct to define a point in space. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00058">defines.hpp:58</a></div></div>
<div class="ttc" id="a00013_php_acfdea93e7835722a3b211ba2b8dd1463"><div class="ttname"><a href="../../d7/dd4/a00013.php#acfdea93e7835722a3b211ba2b8dd1463">Contraption::~Contraption</a></div><div class="ttdeci">virtual ~Contraption()</div><div class="ttdoc">Virtual destructor. </div></div>
<div class="ttc" id="a00027_php"><div class="ttname"><a href="../../d0/d33/a00027.php">Map</a></div><div class="ttdoc">A map class to have something common. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/df8/a00076_source.php#l00048">Map.hpp:48</a></div></div>
<div class="ttc" id="a00013_php_a3b6d4a5f2d520dfa5e58afe5b421a126"><div class="ttname"><a href="../../d7/dd4/a00013.php#a3b6d4a5f2d520dfa5e58afe5b421a126">Contraption::getLevel</a></div><div class="ttdeci">size_t getLevel() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00154">Contraption.hpp:154</a></div></div>
<div class="ttc" id="a00033_php_ab99c56589bc8ad5fa5071387110a5bc7"><div class="ttname"><a href="../../d0/dc0/a00033.php#ab99c56589bc8ad5fa5071387110a5bc7">Point::x</a></div><div class="ttdeci">double x</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00060">defines.hpp:60</a></div></div>
<div class="ttc" id="a00013_php_afd10a73d032a10e48c57e7b3252c58c2"><div class="ttname"><a href="../../d7/dd4/a00013.php#afd10a73d032a10e48c57e7b3252c58c2">Contraption::getRelativeZ</a></div><div class="ttdeci">virtual double getRelativeZ(Contraption &amp;obj)</div><div class="ttdoc">Compute a z with the obstacles. </div></div>
<div class="ttc" id="a00013_php_a61b34301ffd55f3f9b6bc319020e691d"><div class="ttname"><a href="../../d7/dd4/a00013.php#a61b34301ffd55f3f9b6bc319020e691d">Contraption::setZ</a></div><div class="ttdeci">void setZ(double z)</div><div class="ttdoc">Set the z coordinate. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00072">Contraption.hpp:72</a></div></div>
<div class="ttc" id="a00096_php"><div class="ttname"><a href="../../d9/df8/a00096.php">types.hpp</a></div></div>
<div class="ttc" id="a00014_php_a062e1a4fe2f7d6f8d771f13f10844a19"><div class="ttname"><a href="../../d2/de7/a00014.php#a062e1a4fe2f7d6f8d771f13f10844a19">ContraptionAttr::angle</a></div><div class="ttdeci">double angle</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00074">defines.hpp:74</a></div></div>
<div class="ttc" id="a00013_php_a8eddeb512a0133271555e8f1ef888dc3"><div class="ttname"><a href="../../d7/dd4/a00013.php#a8eddeb512a0133271555e8f1ef888dc3">Contraption::getX</a></div><div class="ttdeci">double getX() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00134">Contraption.hpp:134</a></div></div>
<div class="ttc" id="a00013_php_ad1482208cab08d738341ab2265b37deb"><div class="ttname"><a href="../../d7/dd4/a00013.php#ad1482208cab08d738341ab2265b37deb">Contraption::setA</a></div><div class="ttdeci">void setA(double angle)</div><div class="ttdoc">Set the angle. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00111">Contraption.hpp:111</a></div></div>
<div class="ttc" id="a00013_php_a20f271c846ea0c8bc96c618616a260ba"><div class="ttname"><a href="../../d7/dd4/a00013.php#a20f271c846ea0c8bc96c618616a260ba">Contraption::turnRight</a></div><div class="ttdeci">void turnRight()</div><div class="ttdoc">Turn the Contraption to the right. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00197">Contraption.hpp:197</a></div></div>
<div class="ttc" id="a00014_php_a480fb32edc0218d9d1cead0a8e6f9d15"><div class="ttname"><a href="../../d2/de7/a00014.php#a480fb32edc0218d9d1cead0a8e6f9d15">ContraptionAttr::h</a></div><div class="ttdeci">double h</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00072">defines.hpp:72</a></div></div>
<div class="ttc" id="a00013_php_afb8030a7a7df2bef59356c293f845487"><div class="ttname"><a href="../../d7/dd4/a00013.php#afb8030a7a7df2bef59356c293f845487">Contraption::setH</a></div><div class="ttdeci">void setH(double h)</div><div class="ttdoc">Set the height. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00104">Contraption.hpp:104</a></div></div>
<div class="ttc" id="a00013_php_a0d88e87317d6f003471fcf52808a4a25"><div class="ttname"><a href="../../d7/dd4/a00013.php#a0d88e87317d6f003471fcf52808a4a25">Contraption::setMap</a></div><div class="ttdeci">void setMap(Map *map)</div><div class="ttdoc">Set the map. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00119">Contraption.hpp:119</a></div></div>
<div class="ttc" id="a00013_php_a83d954f1cb764a7410de01d33cb9e396"><div class="ttname"><a href="../../d7/dd4/a00013.php#a83d954f1cb764a7410de01d33cb9e396">Contraption::setW</a></div><div class="ttdeci">void setW(double w)</div><div class="ttdoc">Set the width. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00097">Contraption.hpp:97</a></div></div>
<div class="ttc" id="a00013_php_acf50efec2040353189fe1b46152ba8d0"><div class="ttname"><a href="../../d7/dd4/a00013.php#acf50efec2040353189fe1b46152ba8d0">Contraption::getW</a></div><div class="ttdeci">double getW() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00144">Contraption.hpp:144</a></div></div>
<div class="ttc" id="a00013_php_a05facc668dcb27c1bab72118aa5bafe7"><div class="ttname"><a href="../../d7/dd4/a00013.php#a05facc668dcb27c1bab72118aa5bafe7">Contraption::setPosition</a></div><div class="ttdeci">void setPosition(Point pt)</div><div class="ttdoc">Set the position. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00041">Contraption.hpp:41</a></div></div>
<div class="ttc" id="a00063_php"><div class="ttname"><a href="../../d1/d6f/a00063.php">defines.hpp</a></div></div>
<div class="ttc" id="a00014_php_a949dbd15efa71ddbb294abf15517d8b0"><div class="ttname"><a href="../../d2/de7/a00014.php#a949dbd15efa71ddbb294abf15517d8b0">ContraptionAttr::w</a></div><div class="ttdeci">double w</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00070">defines.hpp:70</a></div></div>
<div class="ttc" id="a00013_php_ab14db8239bfc09ba3c5c6e07a23033b7"><div class="ttname"><a href="../../d7/dd4/a00013.php#ab14db8239bfc09ba3c5c6e07a23033b7">Contraption::setX</a></div><div class="ttdeci">void setX(double x)</div><div class="ttdoc">Set the x coordinate. </div></div>
<div class="ttc" id="a00013_php"><div class="ttname"><a href="../../d7/dd4/a00013.php">Contraption</a></div><div class="ttdoc">A contraption. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00021">Contraption.hpp:21</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_9cc7dab42d10c04902c95d2c14820089.php">Widgets</a></li><li class="navelem"><a class="el" href="../../dir_42c90fb9218922ddd8984da73ce0d59c.php">C++</a></li><li class="navelem"><a class="el" href="../../d9/d73/a00060.php">Contraption.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
