<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: time.hpp Source File</title>
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
$(document).ready(function(){initNavTree('df/d03/a00062_source.php','../../');});
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
<div class="title">time.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../df/d03/a00062.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_TIME</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_TIME</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;ctime&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;thread&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;mutex&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#include &lt;chrono&gt;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d4/de8/a00061.php">Threadable.hpp</a>&quot;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;std::time_t <a class="code" href="../../df/d03/a00062.php#a5834b1cc3c766f7520e829ca23284546">getSec</a>();</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;std::chrono::milliseconds <a class="code" href="../../df/d03/a00062.php#ae4c6c825f2c7a717a5c24349d50fef7c">getMilli</a>();</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00031"></a><span class="lineno"><a class="line" href="../../d4/dee/a00008.php">   31</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d4/dee/a00008.php">Clock</a> {</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;        <span class="comment">/* Constructor */</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;        <a class="code" href="../../d4/dee/a00008.php#adbc370eb6b5f8d01645cf440188160a8">Clock</a>();</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        std::time_t <a class="code" href="../../d4/dee/a00008.php#a38ca26b1111d2ecf1751f0d0d5e943e1">getElapsed</a>();</div><div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="../../d4/dee/a00008.php#ac195ced602d8b707b0fd7e5b15d103a7">   46</a></span>&#160;        std::time_t <a class="code" href="../../d4/dee/a00008.php#ac195ced602d8b707b0fd7e5b15d103a7">getStart</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> <a class="code" href="../../d4/dee/a00008.php#ad482076b35f14f806f688e956245483a">m_start</a>; }</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dee/a00008.php#a8a050959dcff11c85d695989e9099a8c">start</a>();</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dee/a00008.php#a775bf97123b58c768571868341d28b08">restart</a>();</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00059"></a><span class="lineno"><a class="line" href="../../d4/dee/a00008.php#ad482076b35f14f806f688e956245483a">   59</a></span>&#160;        std::time_t <a class="code" href="../../d4/dee/a00008.php#ad482076b35f14f806f688e956245483a">m_start</a>;</div><div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="../../d4/dee/a00008.php#aed945651f59f21f56df523af2719597e">   60</a></span>&#160;        <span class="keywordtype">bool</span> <a class="code" href="../../d4/dee/a00008.php#aed945651f59f21f56df523af2719597e">started</a>;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;};</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php">   68</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d5/d16/a00029.php">Timer</a> : <span class="keyword">public</span> <a class="code" href="../../dc/d3c/a00028.php">Threadable</a>&lt;Timer&gt; {</div><div class="line"><a name="l00069"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a2aeae96f6681e81e4800b8ec5aa8fbcd">   69</a></span>&#160;    <a class="code" href="../../d4/de8/a00061.php#a09979566ade438911265d3e17ecc3abc">THREADABLE</a></div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;        <span class="comment">/* Constructor */</span></div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;        <a class="code" href="../../d5/d16/a00029.php">Timer</a>();</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00075"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a56cf495a8c9da8907efe755a550c734c">   75</a></span>&#160;        std::time_t <a class="code" href="../../d5/d16/a00029.php#a56cf495a8c9da8907efe755a550c734c">getStart</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> <a class="code" href="../../d4/dee/a00008.php#ad482076b35f14f806f688e956245483a">m_start</a>; }</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dee/a00008.php#a8a050959dcff11c85d695989e9099a8c">start</a>(<span class="keywordtype">int</span> sec);</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dee/a00008.php#a775bf97123b58c768571868341d28b08">restart</a>(<span class="keywordtype">int</span> sec);</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00082"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a8fb741bf0ac74d067fcfcfafb2c8ab61">   82</a></span>&#160;        std::time_t <a class="code" href="../../d5/d16/a00029.php#a8fb741bf0ac74d067fcfcfafb2c8ab61">m_start</a>;</div><div class="line"><a name="l00083"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#ab3cd20a0909df03a384a09b1b8151d3e">   83</a></span>&#160;        <span class="keywordtype">bool</span> <a class="code" href="../../d5/d16/a00029.php#ab3cd20a0909df03a384a09b1b8151d3e">started</a>;</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;};</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;<span class="preprocessor">#endif //HEADER_TIME</span></div><div class="ttc" id="a00029_php_ab3cd20a0909df03a384a09b1b8151d3e"><div class="ttname"><a href="../../d5/d16/a00029.php#ab3cd20a0909df03a384a09b1b8151d3e">Timer::started</a></div><div class="ttdeci">bool started</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00083">time.hpp:83</a></div></div>
<div class="ttc" id="a00028_php"><div class="ttname"><a href="../../dc/d3c/a00028.php">Threadable</a></div><div class="ttdoc">A class to let another one to be threadable with update() member in a thread. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00042">Threadable.hpp:42</a></div></div>
<div class="ttc" id="a00061_php"><div class="ttname"><a href="../../d4/de8/a00061.php">Threadable.hpp</a></div></div>
<div class="ttc" id="a00008_php_a775bf97123b58c768571868341d28b08"><div class="ttname"><a href="../../d4/dee/a00008.php#a775bf97123b58c768571868341d28b08">Clock::restart</a></div><div class="ttdeci">void restart()</div></div>
<div class="ttc" id="a00029_php_a56cf495a8c9da8907efe755a550c734c"><div class="ttname"><a href="../../d5/d16/a00029.php#a56cf495a8c9da8907efe755a550c734c">Timer::getStart</a></div><div class="ttdeci">std::time_t getStart() const </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00075">time.hpp:75</a></div></div>
<div class="ttc" id="a00008_php_adbc370eb6b5f8d01645cf440188160a8"><div class="ttname"><a href="../../d4/dee/a00008.php#adbc370eb6b5f8d01645cf440188160a8">Clock::Clock</a></div><div class="ttdeci">Clock()</div></div>
<div class="ttc" id="a00008_php_ac195ced602d8b707b0fd7e5b15d103a7"><div class="ttname"><a href="../../d4/dee/a00008.php#ac195ced602d8b707b0fd7e5b15d103a7">Clock::getStart</a></div><div class="ttdeci">std::time_t getStart() const </div><div class="ttdoc">Get the time start. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00046">time.hpp:46</a></div></div>
<div class="ttc" id="a00008_php_aed945651f59f21f56df523af2719597e"><div class="ttname"><a href="../../d4/dee/a00008.php#aed945651f59f21f56df523af2719597e">Clock::started</a></div><div class="ttdeci">bool started</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00060">time.hpp:60</a></div></div>
<div class="ttc" id="a00029_php"><div class="ttname"><a href="../../d5/d16/a00029.php">Timer</a></div><div class="ttdoc">A timer to do something at the end. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00068">time.hpp:68</a></div></div>
<div class="ttc" id="a00008_php"><div class="ttname"><a href="../../d4/dee/a00008.php">Clock</a></div><div class="ttdoc">A clock to measure the elapsed time. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00031">time.hpp:31</a></div></div>
<div class="ttc" id="a00062_php_ae4c6c825f2c7a717a5c24349d50fef7c"><div class="ttname"><a href="../../df/d03/a00062.php#ae4c6c825f2c7a717a5c24349d50fef7c">getMilli</a></div><div class="ttdeci">std::chrono::milliseconds getMilli()</div><div class="ttdoc">Return the milliseconds since the Epoch. </div></div>
<div class="ttc" id="a00029_php_a8fb741bf0ac74d067fcfcfafb2c8ab61"><div class="ttname"><a href="../../d5/d16/a00029.php#a8fb741bf0ac74d067fcfcfafb2c8ab61">Timer::m_start</a></div><div class="ttdeci">std::time_t m_start</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00082">time.hpp:82</a></div></div>
<div class="ttc" id="a00008_php_ad482076b35f14f806f688e956245483a"><div class="ttname"><a href="../../d4/dee/a00008.php#ad482076b35f14f806f688e956245483a">Clock::m_start</a></div><div class="ttdeci">std::time_t m_start</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d03/a00062_source.php#l00059">time.hpp:59</a></div></div>
<div class="ttc" id="a00062_php_a5834b1cc3c766f7520e829ca23284546"><div class="ttname"><a href="../../df/d03/a00062.php#a5834b1cc3c766f7520e829ca23284546">getSec</a></div><div class="ttdeci">std::time_t getSec()</div><div class="ttdoc">Get the number of seconds since the Epoch. </div></div>
<div class="ttc" id="a00061_php_a09979566ade438911265d3e17ecc3abc"><div class="ttname"><a href="../../d4/de8/a00061.php#a09979566ade438911265d3e17ecc3abc">THREADABLE</a></div><div class="ttdeci">#define THREADABLE</div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00017">Threadable.hpp:17</a></div></div>
<div class="ttc" id="a00008_php_a38ca26b1111d2ecf1751f0d0d5e943e1"><div class="ttname"><a href="../../d4/dee/a00008.php#a38ca26b1111d2ecf1751f0d0d5e943e1">Clock::getElapsed</a></div><div class="ttdeci">std::time_t getElapsed()</div><div class="ttdoc">Get time elapsed. </div></div>
<div class="ttc" id="a00008_php_a8a050959dcff11c85d695989e9099a8c"><div class="ttname"><a href="../../d4/dee/a00008.php#a8a050959dcff11c85d695989e9099a8c">Clock::start</a></div><div class="ttdeci">void start()</div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../df/d03/a00062.php">time.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
