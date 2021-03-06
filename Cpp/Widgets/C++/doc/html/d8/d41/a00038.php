<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: array.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d8/d41/a00038.php','../../');});
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
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">array.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;iostream&gt;</code><br />
<code>#include &lt;vector&gt;</code><br />
<code>#include &lt;map&gt;</code><br />
<code>#include &lt;array&gt;</code><br />
<code>#include &lt;string&gt;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for array.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../db/db6/a00074.png" border="0" usemap="#array_8hpp" alt=""/></div>
<map name="array_8hpp" id="array_8hpp">
</map>
</div>
</div>
<p><a href="../../d8/d41/a00038_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d51/a00017.php">is_array&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template struct to test if T is an array, a vector or a map.  <a href="../../d4/d51/a00017.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d2b/a00018.php">jumble</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A dynamic array to store any type of variable.  <a href="../../d1/d2b/a00018.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a5090547d046a342ba3ac573e8248f628"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a5090547d046a342ba3ac573e8248f628"><td class="memTemplItemLeft" align="right" valign="top">std::string&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d8/d41/a00038.php#a5090547d046a342ba3ac573e8248f628">implode</a> (std::vector&lt; T &gt; a, std::string glue=&quot;&quot;)</td></tr>
<tr class="memdesc:a5090547d046a342ba3ac573e8248f628"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stick the <em>a</em> vector with the <em>glue</em> given.  <a href="#a5090547d046a342ba3ac573e8248f628">More...</a><br /></td></tr>
<tr class="separator:a5090547d046a342ba3ac573e8248f628"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad2b1019448d0599264d51172242e1be4"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ad2b1019448d0599264d51172242e1be4"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d8/d41/a00038.php#ad2b1019448d0599264d51172242e1be4">print_r</a> (std::vector&lt; T &gt; a)</td></tr>
<tr class="memdesc:ad2b1019448d0599264d51172242e1be4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the content of a vector.  <a href="#ad2b1019448d0599264d51172242e1be4">More...</a><br /></td></tr>
<tr class="separator:ad2b1019448d0599264d51172242e1be4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aeda2dbc3a1ec9d5f58f2991fb7d0ad13"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:aeda2dbc3a1ec9d5f58f2991fb7d0ad13"><td class="memTemplItemLeft" align="right" valign="top">std::enable_if&lt; std::is_array&lt; T &gt;::value &gt;::type&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d8/d41/a00038.php#aeda2dbc3a1ec9d5f58f2991fb7d0ad13">print_r</a> (T a)</td></tr>
<tr class="memdesc:aeda2dbc3a1ec9d5f58f2991fb7d0ad13"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the content of an array.  <a href="#aeda2dbc3a1ec9d5f58f2991fb7d0ad13">More...</a><br /></td></tr>
<tr class="separator:aeda2dbc3a1ec9d5f58f2991fb7d0ad13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:addfa691004e6d94461994bb7eccadf19"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:addfa691004e6d94461994bb7eccadf19"><td class="memTemplItemLeft" align="right" valign="top">std::vector&lt; V &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d8/d41/a00038.php#addfa691004e6d94461994bb7eccadf19">rewrite</a> (std::vector&lt; V &gt; table, unsigned index)</td></tr>
<tr class="memdesc:addfa691004e6d94461994bb7eccadf19"><td class="mdescLeft">&#160;</td><td class="mdescRight">Rewrite a vector array without the value at the given index.  <a href="#addfa691004e6d94461994bb7eccadf19">More...</a><br /></td></tr>
<tr class="separator:addfa691004e6d94461994bb7eccadf19"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a54f668e0211381d2d15ca45dcf3c55d0"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a54f668e0211381d2d15ca45dcf3c55d0"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d8/d41/a00038.php#a54f668e0211381d2d15ca45dcf3c55d0">contains</a> (std::vector&lt; T &gt; table, T value)</td></tr>
<tr class="memdesc:a54f668e0211381d2d15ca45dcf3c55d0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Verify if a vector contains or not something.  <a href="#a54f668e0211381d2d15ca45dcf3c55d0">More...</a><br /></td></tr>
<tr class="separator:a54f668e0211381d2d15ca45dcf3c55d0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4b73faece12295541488cb9e1c5396d6"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a4b73faece12295541488cb9e1c5396d6"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d8/d41/a00038.php#a4b73faece12295541488cb9e1c5396d6">concate</a> (T table)</td></tr>
<tr class="memdesc:a4b73faece12295541488cb9e1c5396d6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Concate an array when it only contains an array in a field.  <a href="#a4b73faece12295541488cb9e1c5396d6">More...</a><br /></td></tr>
<tr class="separator:a4b73faece12295541488cb9e1c5396d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>14 juin 2018 </dd></dl>

<p>Definition in file <a class="el" href="../../d8/d41/a00038_source.php">array.hpp</a>.</p>
</div><h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="a4b73faece12295541488cb9e1c5396d6"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">T concate </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>table</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Concate an array when it only contains an array in a field. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">table</td><td>The array to concate</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the concatenate array </dd></dl>
<dl class="todo"><dt><b><a class="el" href="../../d8/d84/a00001.php#_todo000001">Todo:</a></b></dt><dd>Do the function </dd></dl>

<p>Definition at line <a class="el" href="../../d8/d41/a00038_source.php#l00151">151</a> of file <a class="el" href="../../d8/d41/a00038_source.php">array.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a54f668e0211381d2d15ca45dcf3c55d0"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">bool contains </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; T &gt;&#160;</td>
          <td class="paramname"><em>table</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Verify if a vector contains or not something. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">table</td><td>The array in which to verify </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">value</td><td>The value to search</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd><b>true</b> or <b>false</b> </dd></dl>

<p>Definition at line <a class="el" href="../../d8/d41/a00038_source.php#l00127">127</a> of file <a class="el" href="../../d8/d41/a00038_source.php">array.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a5090547d046a342ba3ac573e8248f628"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">std::string implode </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; T &gt;&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::string&#160;</td>
          <td class="paramname"><em>glue</em> = <code>&quot;&quot;</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stick the <em>a</em> vector with the <em>glue</em> given. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">a</td><td>The arrau to stick </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">glue</td><td>The string to stick the array's elements</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a string of the array </dd></dl>

<p>Definition at line <a class="el" href="../../d8/d41/a00038_source.php#l00048">48</a> of file <a class="el" href="../../d8/d41/a00038_source.php">array.hpp</a>.</p>

<p><div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d8/d41/a00038_a5090547d046a342ba3ac573e8248f628_cgraph.png" border="0" usemap="#d8/d41/a00038_a5090547d046a342ba3ac573e8248f628_cgraph" alt=""/></div>
<map name="d8/d41/a00038_a5090547d046a342ba3ac573e8248f628_cgraph" id="d8/d41/a00038_a5090547d046a342ba3ac573e8248f628_cgraph">
<area shape="rect" id="node2" href="../../d6/d97/a00045.php#a09a70dbff0164874fba7fda6d3afd8c7" title="Convert an enum in string. " alt="" coords="120,5,160,32"/>
</map>
</div>
</p>

</div>
</div>
<a class="anchor" id="ad2b1019448d0599264d51172242e1be4"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">void print_r </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; T &gt;&#160;</td>
          <td class="paramname"><em>a</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Print the content of a vector. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">a</td><td>The vector to print</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

<p>Definition at line <a class="el" href="../../d8/d41/a00038_source.php#l00073">73</a> of file <a class="el" href="../../d8/d41/a00038_source.php">array.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="aeda2dbc3a1ec9d5f58f2991fb7d0ad13"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">std::enable_if&lt;std::is_array&lt;T&gt;::value&gt;::type print_r </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>a</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Print the content of an array. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">a</td><td>The array to print</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

<p>Definition at line <a class="el" href="../../d8/d41/a00038_source.php#l00089">89</a> of file <a class="el" href="../../d8/d41/a00038_source.php">array.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="addfa691004e6d94461994bb7eccadf19"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">std::vector&lt;V&gt; rewrite </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; V &gt;&#160;</td>
          <td class="paramname"><em>table</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>index</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Rewrite a vector array without the value at the given index. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">table</td><td>The array to rewrite </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">index</td><td>The index not to let in the array</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return an array without the <em>index</em> </dd></dl>

<p>Definition at line <a class="el" href="../../d8/d41/a00038_source.php#l00106">106</a> of file <a class="el" href="../../d8/d41/a00038_source.php">array.hpp</a>.</p>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d8/d41/a00038.php">array.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
