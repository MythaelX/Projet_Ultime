<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: files.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d4/d31/a00069_source.php','../../');});
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
<div class="title">files.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d4/d31/a00069.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_FILES</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_FILES</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;fstream&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="keywordtype">void</span> <a class="code" href="../../d4/d31/a00069.php#a42e1aa02e585ad4e35d14ef5c133395a">fileFormat</a>(std::string&amp; line);</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="keywordtype">size_t</span> <a class="code" href="../../d4/d31/a00069.php#ab148021dd478aa69c83029819b268737">getFileSize</a>(<span class="keyword">const</span> std::string&amp; path);</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;std::vector&lt;std::string&gt; <a class="code" href="../../d4/d31/a00069.php#a2917d2eb46f63f2c97b1a30de55ec3c5">getlines</a>(std::ifstream&amp; input);</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d4/d31/a00069.php#aa9034f20bf3b289424ebda507e52e427">setlines</a>(std::ofstream&amp; output, std::vector&lt;std::string&gt; lines);</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="keyword">extern</span> std::ifstream <a class="code" href="../../d4/d31/a00069.php#a76c27f6a40c6f54d0c76ce2498fae8d7">reader</a>;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="keyword">extern</span> std::ofstream <a class="code" href="../../d4/d31/a00069.php#a5c037aab5abffa1d77dad2a0f0295b0e">writer</a>;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;<span class="preprocessor">#endif //HEADER_FILES</span></div><div class="ttc" id="a00069_php_a76c27f6a40c6f54d0c76ce2498fae8d7"><div class="ttname"><a href="../../d4/d31/a00069.php#a76c27f6a40c6f54d0c76ce2498fae8d7">reader</a></div><div class="ttdeci">std::ifstream reader</div><div class="ttdoc">Define a global file reader. </div></div>
<div class="ttc" id="a00069_php_a42e1aa02e585ad4e35d14ef5c133395a"><div class="ttname"><a href="../../d4/d31/a00069.php#a42e1aa02e585ad4e35d14ef5c133395a">fileFormat</a></div><div class="ttdeci">void fileFormat(std::string &amp;line)</div><div class="ttdoc">Format a given line for files. </div></div>
<div class="ttc" id="a00069_php_aa9034f20bf3b289424ebda507e52e427"><div class="ttname"><a href="../../d4/d31/a00069.php#aa9034f20bf3b289424ebda507e52e427">setlines</a></div><div class="ttdeci">bool setlines(std::ofstream &amp;output, std::vector&lt; std::string &gt; lines)</div><div class="ttdoc">Write all the lines in a given file. </div></div>
<div class="ttc" id="a00069_php_ab148021dd478aa69c83029819b268737"><div class="ttname"><a href="../../d4/d31/a00069.php#ab148021dd478aa69c83029819b268737">getFileSize</a></div><div class="ttdeci">size_t getFileSize(const std::string &amp;path)</div><div class="ttdoc">Get the file size. </div></div>
<div class="ttc" id="a00069_php_a2917d2eb46f63f2c97b1a30de55ec3c5"><div class="ttname"><a href="../../d4/d31/a00069.php#a2917d2eb46f63f2c97b1a30de55ec3c5">getlines</a></div><div class="ttdeci">std::vector&lt; std::string &gt; getlines(std::ifstream &amp;input)</div><div class="ttdoc">Get all the lines in a given file. </div></div>
<div class="ttc" id="a00069_php_a5c037aab5abffa1d77dad2a0f0295b0e"><div class="ttname"><a href="../../d4/d31/a00069.php#a5c037aab5abffa1d77dad2a0f0295b0e">writer</a></div><div class="ttdeci">std::ofstream writer</div><div class="ttdoc">Define a global file writer. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_9cc7dab42d10c04902c95d2c14820089.php">Widgets</a></li><li class="navelem"><a class="el" href="../../dir_42c90fb9218922ddd8984da73ce0d59c.php">C++</a></li><li class="navelem"><a class="el" href="../../d4/d31/a00069.php">files.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
