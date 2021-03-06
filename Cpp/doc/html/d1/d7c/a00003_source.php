<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>ProjetFinalCPP: functions.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d1/d7c/a00003_source.php','../../');});
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
<div class="title">functions.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/d7c/a00003.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="preprocessor">#ifndef HEADER_FUNCTIONS</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="preprocessor">#define HEADER_FUNCTIONS</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#include &quot;Widgets/C++/C++.hpp&quot;</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#a487aa0a5ee1a53eddfa78ea676d3ff2b">list</a>(BDD&amp; bdd);</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">/* Users */</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;std::vector&lt;std::vector&lt;std::string&gt;&gt; <a class="code" href="../../d1/d7c/a00003.php#aa43b53615192bcce310fc51944bf217b">listUsers</a>(BDD&amp; bdd);</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#aff4b34ff516467549fc9daa6a8f3d4ac">addUsers</a>(BDD&amp; bdd, std::string args);</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#ac6acc509b5aa3caa3f76450ed835759e">updateUsers</a>(BDD&amp; bdd, std::string args, std::string condition);</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a4df7c0879644507b94167bd565cd88bc">deleteUsers</a>(BDD&amp; bdd, std::string condition);</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">/* Category */</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;std::vector&lt;std::vector&lt;std::string&gt;&gt; <a class="code" href="../../d1/d7c/a00003.php#af3143ec2b5319c969adf991c009373f0">listCategory</a>(BDD&amp; bdd);</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="keywordtype">size_t</span> <a class="code" href="../../d1/d7c/a00003.php#afeb2d8632fb1dad24def5d95d27f43f0">addCategory</a>(BDD&amp; bdd, std::string args);</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a2227326c53ffa5963bcc96c7983c6383">updateCategory</a>(BDD&amp; bdd, std::string args, std::string condition);</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a14880f51cece87ca27691c7acfa01d8a">deleteCategory</a>(BDD&amp; bdd, std::string condition);</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="comment">/* Difficulty */</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;std::vector&lt;std::vector&lt;std::string&gt;&gt; <a class="code" href="../../d1/d7c/a00003.php#ad63ee67279e62ee5eaf73bb188ba0b4a">listDifficulty</a>(BDD&amp; bdd);</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a4f84d201465ec63094f6407c0cdb6a8d">updateDifficulty</a>(BDD&amp; bdd, std::string args, std::string condition);</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">/* Game */</span></div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;std::vector&lt;std::vector&lt;std::string&gt;&gt; <a class="code" href="../../d1/d7c/a00003.php#a1caf2a7a9b33c712063314f6bac74470">listGame</a>(BDD&amp; bdd);</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="keywordtype">size_t</span> <a class="code" href="../../d1/d7c/a00003.php#a35ee2c6a333148aed442bb741b2bf82d">addGame</a>(BDD&amp; bdd, std::string args);</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a870df29ea630e53aa77c960373e0825f">updateGame</a>(BDD&amp; bdd, std::string args, std::string condition);</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a8205b4d8f60ec0146b15eace1d79d95a">deleteGame</a>(BDD&amp; bdd, std::string condition);</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="comment">/* Ask */</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;std::vector&lt;std::vector&lt;std::string&gt;&gt; <a class="code" href="../../d1/d7c/a00003.php#a0820a14dbb5072c112cf32466c8fc6c3">listAsk</a>(BDD&amp; bdd);</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keywordtype">size_t</span> <a class="code" href="../../d1/d7c/a00003.php#a2003fa6138007746e85c2b697d147b58">addAsk</a>(BDD&amp; bdd, std::string args);</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#aaee44428f5b0401f7b9ad5b073254fd3">updateAsk</a>(BDD&amp; bdd, std::string args, std::string condition);</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#af57e491c251eeaf366674ea6df624cd1">deleteAsk</a>(BDD&amp; bdd, std::string condition);</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="comment">/* Question */</span></div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;std::vector&lt;std::vector&lt;std::string&gt;&gt; <a class="code" href="../../d1/d7c/a00003.php#a887113739bafac257bbd35996edfeb81">listQuestion</a>(BDD&amp; bdd);</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keywordtype">size_t</span> <a class="code" href="../../d1/d7c/a00003.php#ad86a004962b3149094f4cc660ecb05d4">addQuestion</a>(BDD&amp; bdd, std::string args);</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#ae13343b52f992bcba9e6fcb79bddf71e">updateQuestion</a>(BDD&amp; bdd, std::string args, std::string condition);</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a0c5a4808a05a3628f1b8e88ac398c70a">deleteQuestion</a>(BDD&amp; bdd, std::string condition);</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="comment">/* Points */</span></div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;std::vector&lt;std::vector&lt;std::string&gt;&gt; <a class="code" href="../../d1/d7c/a00003.php#af34790c4f5c0c4ad30d069fa2766559c">listPoints</a>(BDD&amp; bdd);</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a46e754bfd8e03764969330bc39a1fa66">deletePoints</a>(BDD&amp; bdd, std::string condition);</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="preprocessor">#endif //HEADER_FUNCTIONS</span></div><div class="ttc" id="a00003_php_a2227326c53ffa5963bcc96c7983c6383"><div class="ttname"><a href="../../d1/d7c/a00003.php#a2227326c53ffa5963bcc96c7983c6383">updateCategory</a></div><div class="ttdeci">bool updateCategory(BDD &amp;bdd, std::string args, std::string condition)</div></div>
<div class="ttc" id="a00003_php_a870df29ea630e53aa77c960373e0825f"><div class="ttname"><a href="../../d1/d7c/a00003.php#a870df29ea630e53aa77c960373e0825f">updateGame</a></div><div class="ttdeci">bool updateGame(BDD &amp;bdd, std::string args, std::string condition)</div></div>
<div class="ttc" id="a00003_php_af34790c4f5c0c4ad30d069fa2766559c"><div class="ttname"><a href="../../d1/d7c/a00003.php#af34790c4f5c0c4ad30d069fa2766559c">listPoints</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt; &gt; listPoints(BDD &amp;bdd)</div></div>
<div class="ttc" id="a00003_php_a0c5a4808a05a3628f1b8e88ac398c70a"><div class="ttname"><a href="../../d1/d7c/a00003.php#a0c5a4808a05a3628f1b8e88ac398c70a">deleteQuestion</a></div><div class="ttdeci">bool deleteQuestion(BDD &amp;bdd, std::string condition)</div></div>
<div class="ttc" id="a00003_php_a1caf2a7a9b33c712063314f6bac74470"><div class="ttname"><a href="../../d1/d7c/a00003.php#a1caf2a7a9b33c712063314f6bac74470">listGame</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt; &gt; listGame(BDD &amp;bdd)</div></div>
<div class="ttc" id="a00003_php_a887113739bafac257bbd35996edfeb81"><div class="ttname"><a href="../../d1/d7c/a00003.php#a887113739bafac257bbd35996edfeb81">listQuestion</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt; &gt; listQuestion(BDD &amp;bdd)</div></div>
<div class="ttc" id="a00003_php_ac6acc509b5aa3caa3f76450ed835759e"><div class="ttname"><a href="../../d1/d7c/a00003.php#ac6acc509b5aa3caa3f76450ed835759e">updateUsers</a></div><div class="ttdeci">bool updateUsers(BDD &amp;bdd, std::string args, std::string condition)</div></div>
<div class="ttc" id="a00003_php_a46e754bfd8e03764969330bc39a1fa66"><div class="ttname"><a href="../../d1/d7c/a00003.php#a46e754bfd8e03764969330bc39a1fa66">deletePoints</a></div><div class="ttdeci">bool deletePoints(BDD &amp;bdd, std::string condition)</div></div>
<div class="ttc" id="a00003_php_aff4b34ff516467549fc9daa6a8f3d4ac"><div class="ttname"><a href="../../d1/d7c/a00003.php#aff4b34ff516467549fc9daa6a8f3d4ac">addUsers</a></div><div class="ttdeci">bool addUsers(BDD &amp;bdd, std::string args)</div></div>
<div class="ttc" id="a00003_php_a14880f51cece87ca27691c7acfa01d8a"><div class="ttname"><a href="../../d1/d7c/a00003.php#a14880f51cece87ca27691c7acfa01d8a">deleteCategory</a></div><div class="ttdeci">bool deleteCategory(BDD &amp;bdd, std::string condition)</div></div>
<div class="ttc" id="a00003_php_ad63ee67279e62ee5eaf73bb188ba0b4a"><div class="ttname"><a href="../../d1/d7c/a00003.php#ad63ee67279e62ee5eaf73bb188ba0b4a">listDifficulty</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt; &gt; listDifficulty(BDD &amp;bdd)</div></div>
<div class="ttc" id="a00003_php_aa43b53615192bcce310fc51944bf217b"><div class="ttname"><a href="../../d1/d7c/a00003.php#aa43b53615192bcce310fc51944bf217b">listUsers</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt; &gt; listUsers(BDD &amp;bdd)</div></div>
<div class="ttc" id="a00003_php_a4df7c0879644507b94167bd565cd88bc"><div class="ttname"><a href="../../d1/d7c/a00003.php#a4df7c0879644507b94167bd565cd88bc">deleteUsers</a></div><div class="ttdeci">bool deleteUsers(BDD &amp;bdd, std::string condition)</div></div>
<div class="ttc" id="a00003_php_afeb2d8632fb1dad24def5d95d27f43f0"><div class="ttname"><a href="../../d1/d7c/a00003.php#afeb2d8632fb1dad24def5d95d27f43f0">addCategory</a></div><div class="ttdeci">size_t addCategory(BDD &amp;bdd, std::string args)</div></div>
<div class="ttc" id="a00003_php_a0820a14dbb5072c112cf32466c8fc6c3"><div class="ttname"><a href="../../d1/d7c/a00003.php#a0820a14dbb5072c112cf32466c8fc6c3">listAsk</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt; &gt; listAsk(BDD &amp;bdd)</div></div>
<div class="ttc" id="a00003_php_aaee44428f5b0401f7b9ad5b073254fd3"><div class="ttname"><a href="../../d1/d7c/a00003.php#aaee44428f5b0401f7b9ad5b073254fd3">updateAsk</a></div><div class="ttdeci">bool updateAsk(BDD &amp;bdd, std::string args, std::string condition)</div></div>
<div class="ttc" id="a00003_php_a8205b4d8f60ec0146b15eace1d79d95a"><div class="ttname"><a href="../../d1/d7c/a00003.php#a8205b4d8f60ec0146b15eace1d79d95a">deleteGame</a></div><div class="ttdeci">bool deleteGame(BDD &amp;bdd, std::string condition)</div></div>
<div class="ttc" id="a00003_php_af3143ec2b5319c969adf991c009373f0"><div class="ttname"><a href="../../d1/d7c/a00003.php#af3143ec2b5319c969adf991c009373f0">listCategory</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt; &gt; listCategory(BDD &amp;bdd)</div></div>
<div class="ttc" id="a00003_php_ae13343b52f992bcba9e6fcb79bddf71e"><div class="ttname"><a href="../../d1/d7c/a00003.php#ae13343b52f992bcba9e6fcb79bddf71e">updateQuestion</a></div><div class="ttdeci">bool updateQuestion(BDD &amp;bdd, std::string args, std::string condition)</div></div>
<div class="ttc" id="a00003_php_ad86a004962b3149094f4cc660ecb05d4"><div class="ttname"><a href="../../d1/d7c/a00003.php#ad86a004962b3149094f4cc660ecb05d4">addQuestion</a></div><div class="ttdeci">size_t addQuestion(BDD &amp;bdd, std::string args)</div></div>
<div class="ttc" id="a00003_php_a487aa0a5ee1a53eddfa78ea676d3ff2b"><div class="ttname"><a href="../../d1/d7c/a00003.php#a487aa0a5ee1a53eddfa78ea676d3ff2b">list</a></div><div class="ttdeci">void list(BDD &amp;bdd)</div></div>
<div class="ttc" id="a00003_php_a35ee2c6a333148aed442bb741b2bf82d"><div class="ttname"><a href="../../d1/d7c/a00003.php#a35ee2c6a333148aed442bb741b2bf82d">addGame</a></div><div class="ttdeci">size_t addGame(BDD &amp;bdd, std::string args)</div></div>
<div class="ttc" id="a00003_php_af57e491c251eeaf366674ea6df624cd1"><div class="ttname"><a href="../../d1/d7c/a00003.php#af57e491c251eeaf366674ea6df624cd1">deleteAsk</a></div><div class="ttdeci">bool deleteAsk(BDD &amp;bdd, std::string condition)</div></div>
<div class="ttc" id="a00003_php_a4f84d201465ec63094f6407c0cdb6a8d"><div class="ttname"><a href="../../d1/d7c/a00003.php#a4f84d201465ec63094f6407c0cdb6a8d">updateDifficulty</a></div><div class="ttdeci">bool updateDifficulty(BDD &amp;bdd, std::string args, std::string condition)</div></div>
<div class="ttc" id="a00003_php_a2003fa6138007746e85c2b697d147b58"><div class="ttname"><a href="../../d1/d7c/a00003.php#a2003fa6138007746e85c2b697d147b58">addAsk</a></div><div class="ttdeci">size_t addAsk(BDD &amp;bdd, std::string args)</div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../d1/d7c/a00003.php">functions.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
