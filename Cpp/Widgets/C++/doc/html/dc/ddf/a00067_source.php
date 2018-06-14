<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: types.hpp Source File</title>
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
$(document).ready(function(){initNavTree('dc/ddf/a00067_source.php','../../');});
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
<div class="title">types.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../dc/ddf/a00067.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_TYPES</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_TYPES</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;iostream&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;typeinfo&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> C&gt;</div><div class="line"><a name="l00021"></a><span class="lineno"><a class="line" href="../../dc/ddf/a00067.php#aecf59a2b719b8c7121eee69d1bb737e8">   21</a></span>&#160;<span class="keywordtype">void</span> <a class="code" href="../../dc/ddf/a00067.php#aecf59a2b719b8c7121eee69d1bb737e8">printType</a>(C&amp; obj){</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    std::cout &lt;&lt; <span class="stringliteral">&quot;Object type : &#39;&quot;</span> &lt;&lt; <span class="keyword">typeid</span>(obj).name() &lt;&lt; <span class="stringliteral">&quot;&#39;&quot;</span> &lt;&lt; std::endl;</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;}</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div><div class="line"><a name="l00025"></a><span class="lineno"><a class="line" href="../../d4/d31/a00069.php">   25</a></span>&#160;<span class="keyword">namespace </span><a class="code" href="../../d4/d31/a00069.php">Typer</a>{</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;    <span class="keywordtype">size_t</span> <a class="code" href="../../d4/d31/a00069.php#ad2c2baf0c63c7c94b50ef7407851cc8e">firstLetter</a>(std::string in);</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;};</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> C&gt;</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">typename</span> std::enable_if&lt;!std::is_pointer&lt;C&gt;::value, std::string&gt;::type</div><div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="../../dc/ddf/a00067.php#a6d01957e99131ce0c8d0902a9a8cdf38">   43</a></span>&#160;<a class="code" href="../../dc/ddf/a00067.php#a6d01957e99131ce0c8d0902a9a8cdf38">getType</a>(C&amp; obj){</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;    std::string <span class="keywordtype">id</span>{<span class="keyword">typeid</span>(obj).name()};</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    <span class="keywordflow">return</span> <span class="keywordtype">id</span>.substr(<a class="code" href="../../d4/d31/a00069.php#ad2c2baf0c63c7c94b50ef7407851cc8e">Typer::firstLetter</a>(<span class="keywordtype">id</span>));</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;}</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> C&gt;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="keyword">typename</span> std::enable_if&lt;std::is_pointer&lt;C&gt;::value, std::string&gt;::type</div><div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="../../dc/ddf/a00067.php#ae549f98d8a0469bd0533f807c2b51b84">   56</a></span>&#160;<a class="code" href="../../dc/ddf/a00067.php#a6d01957e99131ce0c8d0902a9a8cdf38">getType</a>(C obj){</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;    std::string <span class="keywordtype">id</span>{<span class="keyword">typeid</span>(*obj).name()};</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;    <span class="keywordflow">return</span> <span class="keywordtype">id</span>.substr(<a class="code" href="../../d4/d31/a00069.php#ad2c2baf0c63c7c94b50ef7407851cc8e">Typer::firstLetter</a>(<span class="keywordtype">id</span>));</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;}</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;<span class="preprocessor">#endif //HEADER_TYPES</span></div><div class="ttc" id="a00067_php_aecf59a2b719b8c7121eee69d1bb737e8"><div class="ttname"><a href="../../dc/ddf/a00067.php#aecf59a2b719b8c7121eee69d1bb737e8">printType</a></div><div class="ttdeci">void printType(C &amp;obj)</div><div class="ttdoc">Print the type of \â obj. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/ddf/a00067_source.php#l00021">types.hpp:21</a></div></div>
<div class="ttc" id="a00069_php"><div class="ttname"><a href="../../d4/d31/a00069.php">Typer</a></div><div class="ttdef"><b>Definition:</b> <a href="../../dc/ddf/a00067_source.php#l00025">types.hpp:25</a></div></div>
<div class="ttc" id="a00067_php_a6d01957e99131ce0c8d0902a9a8cdf38"><div class="ttname"><a href="../../dc/ddf/a00067.php#a6d01957e99131ce0c8d0902a9a8cdf38">getType</a></div><div class="ttdeci">std::enable_if&lt;!std::is_pointer&lt; C &gt;::value, std::string &gt;::type getType(C &amp;obj)</div><div class="ttdoc">Get the type of obj in a string. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/ddf/a00067_source.php#l00043">types.hpp:43</a></div></div>
<div class="ttc" id="a00069_php_ad2c2baf0c63c7c94b50ef7407851cc8e"><div class="ttname"><a href="../../d4/d31/a00069.php#ad2c2baf0c63c7c94b50ef7407851cc8e">Typer::firstLetter</a></div><div class="ttdeci">size_t firstLetter(std::string in)</div><div class="ttdoc">Get the position of the first letter in the in string. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dc/ddf/a00067.php">types.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
