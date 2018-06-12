<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: pointers.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d1/d22/a00057_source.php','../../');});
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
<div class="title">pointers.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/d22/a00057.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_POINTERS</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_POINTERS</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;iostream&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#ifndef DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="keyword">typename</span> std::enable_if&lt;std::is_same&lt;T, std::thread*&gt;::value, <span class="keywordtype">void</span>&gt;::type</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;deleteThreadPtr(T&amp; pointer){</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;    <span class="keywordflow">if</span>(pointer-&gt;joinable()){</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;        pointer-&gt;join();</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    }</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;}</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* DOXYGEN_SHOULD_SKIP_THIS */</span><span class="preprocessor"></span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#ifndef DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="keyword">typename</span> std::enable_if&lt;!std::is_same&lt;T, std::thread*&gt;::value, <span class="keywordtype">void</span>&gt;::type</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;deleteThreadPtr(T&amp;){}</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* DOXYGEN_SHOULD_SKIP_THIS */</span><span class="preprocessor"></span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">typename</span> std::enable_if&lt;std::is_pointer&lt;T&gt;::value, <span class="keywordtype">void</span>&gt;::type</div><div class="line"><a name="l00039"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#a55f9782a77b1459ff662dd21a69edab3">   39</a></span>&#160;<a class="code" href="../../d1/d22/a00057.php#a55f9782a77b1459ff662dd21a69edab3">deletePtr</a>(T&amp; pointer){</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;    <span class="keywordflow">if</span>(pointer == <span class="keyword">nullptr</span>){</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        <span class="keywordflow">return</span>;</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;    }</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;    <span class="keywordflow">if</span>(std::is_same&lt;T, std::thread*&gt;::value){</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;        deleteThreadPtr(pointer);</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    }</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    <span class="keyword">delete</span> pointer;</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    pointer = <span class="keyword">nullptr</span>;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;}</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="preprocessor">#endif //HEADER_POINTERS</span></div><div class="ttc" id="a00057_php_a55f9782a77b1459ff662dd21a69edab3"><div class="ttname"><a href="../../d1/d22/a00057.php#a55f9782a77b1459ff662dd21a69edab3">deletePtr</a></div><div class="ttdeci">std::enable_if&lt; std::is_pointer&lt; T &gt;::value, void &gt;::type deletePtr(T &amp;pointer)</div><div class="ttdoc">Delete a pointer. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00039">pointers.hpp:39</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d1/d22/a00057.php">pointers.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
