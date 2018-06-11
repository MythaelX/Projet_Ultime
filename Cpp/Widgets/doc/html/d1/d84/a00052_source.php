<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: cryptage.hpp Source File</title>
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
   <div id="projectname">Qt
   &#160;<span id="projectnumber">1.0</span>
   </div>
   <div id="projectbrief">Specific widgets for Qt</div>
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
$(document).ready(function(){initNavTree('d1/d84/a00052_source.php','../../');});
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
<div class="title">cryptage.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/d84/a00052.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_CRYPTAGE</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_CRYPTAGE</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../dc/dee/a00053.php">defines.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../d2/de7/a00014.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d2/de7/a00014.php">Crypto</a> {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <span class="comment">/* Constructor */</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;        <a class="code" href="../../d2/de7/a00014.php#abc5714d83e17c9961258646a94e75079">Crypto</a>();</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;        <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d2/de7/a00014.php#a76d99d39d43cf53d9b18a00bec7a8132">crypt</a>() = 0;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;};</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div><div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="../../de/d5e/a00007.php">   42</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../de/d5e/a00007.php">Cesar</a> : <span class="keyword">public</span> <a class="code" href="../../d2/de7/a00014.php">Crypto</a> {</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;        <span class="comment">/* Constructor */</span></div><div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="../../de/d5e/a00007.php#a9a70a4a1e758085855fd550404687388">   45</a></span>&#160;        <a class="code" href="../../de/d5e/a00007.php#a9a70a4a1e758085855fd550404687388">Cesar</a>(){}</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;        std::string <a class="code" href="../../d2/de7/a00014.php#a76d99d39d43cf53d9b18a00bec7a8132">crypt</a>(std::string message, <span class="keywordtype">int</span> decal = 0);</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;        std::string decrypt(std::string message, <span class="keywordtype">int</span> decal = 0);</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno"><a class="line" href="../../de/d5e/a00007.php#a09635aa52fa6a1245a6b2b4fbe024f1e">   74</a></span>&#160;        <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../de/d5e/a00007.php#a09635aa52fa6a1245a6b2b4fbe024f1e">crypt</a>(){}</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;};</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div><div class="line"><a name="l00084"></a><span class="lineno"><a class="line" href="../../dc/d87/a00032.php">   84</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dc/d87/a00032.php">RSA</a> : <span class="keyword">public</span> <a class="code" href="../../d2/de7/a00014.php">Crypto</a> {</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        <span class="comment">/* Constructor */</span></div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;        <a class="code" href="../../dc/d87/a00032.php">RSA</a>();</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;        std::string getPublic();</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;        std::string getPrivate();</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;        <span class="keywordtype">void</span> setPublic(std::string key=<span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;        <span class="keywordtype">void</span> setPrivate(std::string key=<span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;        std::string <a class="code" href="../../d2/de7/a00014.php#a76d99d39d43cf53d9b18a00bec7a8132">crypt</a>(std::string message);</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;        std::string decrypt(std::string message);</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div><div class="line"><a name="l00138"></a><span class="lineno"><a class="line" href="../../dc/d87/a00032.php#ab84588271f2e5417d47251be249951b4">  138</a></span>&#160;        <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../dc/d87/a00032.php#ab84588271f2e5417d47251be249951b4">crypt</a>(){}</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00140"></a><span class="lineno"><a class="line" href="../../dc/d87/a00032.php#a7d293f0a39aacf8eb05abc7355d436e2">  140</a></span>&#160;        std::string <a class="code" href="../../dc/d87/a00032.php#a7d293f0a39aacf8eb05abc7355d436e2">publicK</a>;</div><div class="line"><a name="l00141"></a><span class="lineno"><a class="line" href="../../dc/d87/a00032.php#a933f86ffad0a7a2d5d5e6099bdb5f1be">  141</a></span>&#160;        std::string <a class="code" href="../../dc/d87/a00032.php#a933f86ffad0a7a2d5d5e6099bdb5f1be">privateK</a>;</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;};</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;</div><div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;<span class="keyword">extern</span> <a class="code" href="../../de/d5e/a00007.php">Cesar</a> <a class="code" href="../../d1/d84/a00052.php#a1e4758b1e3ca1aefc42b33e55b9d8fe4">cesar</a>;</div><div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;<span class="preprocessor">#endif //HEADER_CRYPTAGE</span></div><div class="ttc" id="a00007_php"><div class="ttname"><a href="../../de/d5e/a00007.php">Cesar</a></div><div class="ttdoc">A class to use the cesar algorithm for encryption. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00042">cryptage.hpp:42</a></div></div>
<div class="ttc" id="a00014_php_a76d99d39d43cf53d9b18a00bec7a8132"><div class="ttname"><a href="../../d2/de7/a00014.php#a76d99d39d43cf53d9b18a00bec7a8132">Crypto::crypt</a></div><div class="ttdeci">virtual void crypt()=0</div></div>
<div class="ttc" id="a00053_php"><div class="ttname"><a href="../../dc/dee/a00053.php">defines.hpp</a></div></div>
<div class="ttc" id="a00007_php_a09635aa52fa6a1245a6b2b4fbe024f1e"><div class="ttname"><a href="../../de/d5e/a00007.php#a09635aa52fa6a1245a6b2b4fbe024f1e">Cesar::crypt</a></div><div class="ttdeci">virtual void crypt()</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00074">cryptage.hpp:74</a></div></div>
<div class="ttc" id="a00032_php_ab84588271f2e5417d47251be249951b4"><div class="ttname"><a href="../../dc/d87/a00032.php#ab84588271f2e5417d47251be249951b4">RSA::crypt</a></div><div class="ttdeci">virtual void crypt()</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00138">cryptage.hpp:138</a></div></div>
<div class="ttc" id="a00014_php_abc5714d83e17c9961258646a94e75079"><div class="ttname"><a href="../../d2/de7/a00014.php#abc5714d83e17c9961258646a94e75079">Crypto::Crypto</a></div><div class="ttdeci">Crypto()</div></div>
<div class="ttc" id="a00032_php"><div class="ttname"><a href="../../dc/d87/a00032.php">RSA</a></div><div class="ttdoc">A class to use the RSA algorithm for encryption. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00084">cryptage.hpp:84</a></div></div>
<div class="ttc" id="a00052_php_a1e4758b1e3ca1aefc42b33e55b9d8fe4"><div class="ttname"><a href="../../d1/d84/a00052.php#a1e4758b1e3ca1aefc42b33e55b9d8fe4">cesar</a></div><div class="ttdeci">Cesar cesar</div><div class="ttdoc">A global cesar variable to crypt and decrypt message. </div></div>
<div class="ttc" id="a00014_php"><div class="ttname"><a href="../../d2/de7/a00014.php">Crypto</a></div><div class="ttdoc">A class to be the parent for every crypt class. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00017">cryptage.hpp:17</a></div></div>
<div class="ttc" id="a00007_php_a9a70a4a1e758085855fd550404687388"><div class="ttname"><a href="../../de/d5e/a00007.php#a9a70a4a1e758085855fd550404687388">Cesar::Cesar</a></div><div class="ttdeci">Cesar()</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00045">cryptage.hpp:45</a></div></div>
<div class="ttc" id="a00032_php_a933f86ffad0a7a2d5d5e6099bdb5f1be"><div class="ttname"><a href="../../dc/d87/a00032.php#a933f86ffad0a7a2d5d5e6099bdb5f1be">RSA::privateK</a></div><div class="ttdeci">std::string privateK</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00141">cryptage.hpp:141</a></div></div>
<div class="ttc" id="a00032_php_a7d293f0a39aacf8eb05abc7355d436e2"><div class="ttname"><a href="../../dc/d87/a00032.php#a7d293f0a39aacf8eb05abc7355d436e2">RSA::publicK</a></div><div class="ttdeci">std::string publicK</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00140">cryptage.hpp:140</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d1/d84/a00052.php">cryptage.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>