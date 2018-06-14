<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: convert.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d6/d97/a00045.php','../../');});
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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">convert.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;sstream&gt;</code><br />
<code>#include &lt;string&gt;</code><br />
<code>#include &lt;algorithm&gt;</code><br />
<code>#include &lt;numeric&gt;</code><br />
<code>#include &lt;type_traits&gt;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for convert.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d8/d53/a00081.png" border="0" usemap="#convert_8hpp" alt=""/></div>
<map name="convert_8hpp" id="convert_8hpp">
</map>
</div>
</div>
<p><a href="../../d6/d97/a00045_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a09a70dbff0164874fba7fda6d3afd8c7"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a09a70dbff0164874fba7fda6d3afd8c7"><td class="memTemplItemLeft" align="right" valign="top">std::enable_if&lt; std::is_enum&lt; V &gt;::value, std::string &gt;::type&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d97/a00045.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a> (V in)</td></tr>
<tr class="memdesc:a09a70dbff0164874fba7fda6d3afd8c7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert an enum in string.  <a href="#a09a70dbff0164874fba7fda6d3afd8c7">More...</a><br /></td></tr>
<tr class="separator:a09a70dbff0164874fba7fda6d3afd8c7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a78b4ad7bc552ad244dec369856aa8d91"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a78b4ad7bc552ad244dec369856aa8d91"><td class="memTemplItemLeft" align="right" valign="top">std::enable_if&lt; !std::is_enum&lt; V &gt;::value, std::string &gt;::type&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d97/a00045.php#a78b4ad7bc552ad244dec369856aa8d91">tos</a> (V in)</td></tr>
<tr class="memdesc:a78b4ad7bc552ad244dec369856aa8d91"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in string.  <a href="#a78b4ad7bc552ad244dec369856aa8d91">More...</a><br /></td></tr>
<tr class="separator:a78b4ad7bc552ad244dec369856aa8d91"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0de9d90c31d0a16f1d173f84be9e091a"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a0de9d90c31d0a16f1d173f84be9e091a"><td class="memTemplItemLeft" align="right" valign="top">int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d97/a00045.php#a0de9d90c31d0a16f1d173f84be9e091a">toi</a> (V in)</td></tr>
<tr class="memdesc:a0de9d90c31d0a16f1d173f84be9e091a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in int.  <a href="#a0de9d90c31d0a16f1d173f84be9e091a">More...</a><br /></td></tr>
<tr class="separator:a0de9d90c31d0a16f1d173f84be9e091a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2432d9eaa9d57e487a6813a01993e8ef"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a2432d9eaa9d57e487a6813a01993e8ef"><td class="memTemplItemLeft" align="right" valign="top">double&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d97/a00045.php#a2432d9eaa9d57e487a6813a01993e8ef">tod</a> (V in)</td></tr>
<tr class="memdesc:a2432d9eaa9d57e487a6813a01993e8ef"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in double.  <a href="#a2432d9eaa9d57e487a6813a01993e8ef">More...</a><br /></td></tr>
<tr class="separator:a2432d9eaa9d57e487a6813a01993e8ef"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a28ef26e9e217e572497d67676081f08e"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a28ef26e9e217e572497d67676081f08e"><td class="memTemplItemLeft" align="right" valign="top">float&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d97/a00045.php#a28ef26e9e217e572497d67676081f08e">tof</a> (V in)</td></tr>
<tr class="memdesc:a28ef26e9e217e572497d67676081f08e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in float.  <a href="#a28ef26e9e217e572497d67676081f08e">More...</a><br /></td></tr>
<tr class="separator:a28ef26e9e217e572497d67676081f08e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a046732bd284eb239dc2eda5a92a17681"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a046732bd284eb239dc2eda5a92a17681"><td class="memTemplItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d97/a00045.php#a046732bd284eb239dc2eda5a92a17681">tou</a> (V in)</td></tr>
<tr class="memdesc:a046732bd284eb239dc2eda5a92a17681"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in unsigned int.  <a href="#a046732bd284eb239dc2eda5a92a17681">More...</a><br /></td></tr>
<tr class="separator:a046732bd284eb239dc2eda5a92a17681"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa70ef73b7fa30f68e3f14a6b60de10eb"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:aa70ef73b7fa30f68e3f14a6b60de10eb"><td class="memTemplItemLeft" align="right" valign="top">unsigned long long int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d97/a00045.php#aa70ef73b7fa30f68e3f14a6b60de10eb">tov</a> (V in)</td></tr>
<tr class="memdesc:aa70ef73b7fa30f68e3f14a6b60de10eb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in unsigned long long int.  <a href="#aa70ef73b7fa30f68e3f14a6b60de10eb">More...</a><br /></td></tr>
<tr class="separator:aa70ef73b7fa30f68e3f14a6b60de10eb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a013b8a84340b1ab68401095a566cc0ea"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a013b8a84340b1ab68401095a566cc0ea"><td class="memTemplItemLeft" align="right" valign="top">size_t&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d97/a00045.php#a013b8a84340b1ab68401095a566cc0ea">tost</a> (V in)</td></tr>
<tr class="memdesc:a013b8a84340b1ab68401095a566cc0ea"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in size_t.  <a href="#a013b8a84340b1ab68401095a566cc0ea">More...</a><br /></td></tr>
<tr class="separator:a013b8a84340b1ab68401095a566cc0ea"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>01 juin 2018 </dd></dl>

<p>Definition in file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>
</div><h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="a2432d9eaa9d57e487a6813a01993e8ef"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">double tod </td>
          <td>(</td>
          <td class="paramtype">V&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert <em>in</em> variable in double. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The variable to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a double </dd></dl>

<p>Definition at line <a class="el" href="../../d6/d97/a00045_source.php#l00080">80</a> of file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>

<p><div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d97/a00045_a2432d9eaa9d57e487a6813a01993e8ef_cgraph.png" border="0" usemap="#d6/d97/a00045_a2432d9eaa9d57e487a6813a01993e8ef_cgraph" alt=""/></div>
<map name="d6/d97/a00045_a2432d9eaa9d57e487a6813a01993e8ef_cgraph" id="d6/d97/a00045_a2432d9eaa9d57e487a6813a01993e8ef_cgraph">
<area shape="rect" id="node2" href="../../d6/d97/a00045.php#a09a70dbff0164874fba7fda6d3afd8c7" title="Convert an enum in string. " alt="" coords="93,5,133,32"/>
</map>
</div>
</p>

</div>
</div>
<a class="anchor" id="a28ef26e9e217e572497d67676081f08e"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">float tof </td>
          <td>(</td>
          <td class="paramtype">V&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert <em>in</em> variable in float. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The variable to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a float </dd></dl>

<p>Definition at line <a class="el" href="../../d6/d97/a00045_source.php#l00097">97</a> of file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>

<p><div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d97/a00045_a28ef26e9e217e572497d67676081f08e_cgraph.png" border="0" usemap="#d6/d97/a00045_a28ef26e9e217e572497d67676081f08e_cgraph" alt=""/></div>
<map name="d6/d97/a00045_a28ef26e9e217e572497d67676081f08e_cgraph" id="d6/d97/a00045_a28ef26e9e217e572497d67676081f08e_cgraph">
<area shape="rect" id="node2" href="../../d6/d97/a00045.php#a09a70dbff0164874fba7fda6d3afd8c7" title="Convert an enum in string. " alt="" coords="92,5,132,32"/>
</map>
</div>
</p>

</div>
</div>
<a class="anchor" id="a0de9d90c31d0a16f1d173f84be9e091a"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">int toi </td>
          <td>(</td>
          <td class="paramtype">V&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert <em>in</em> variable in int. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The variable to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return an int </dd></dl>

<p>Definition at line <a class="el" href="../../d6/d97/a00045_source.php#l00063">63</a> of file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>

<p><div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d97/a00045_a0de9d90c31d0a16f1d173f84be9e091a_cgraph.png" border="0" usemap="#d6/d97/a00045_a0de9d90c31d0a16f1d173f84be9e091a_cgraph" alt=""/></div>
<map name="d6/d97/a00045_a0de9d90c31d0a16f1d173f84be9e091a_cgraph" id="d6/d97/a00045_a0de9d90c31d0a16f1d173f84be9e091a_cgraph">
<area shape="rect" id="node2" href="../../d6/d97/a00045.php#a09a70dbff0164874fba7fda6d3afd8c7" title="Convert an enum in string. " alt="" coords="92,5,132,32"/>
</map>
</div>
</p>

</div>
</div>
<a class="anchor" id="a09a70dbff0164874fba7fda6d3afd8c7"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">std::enable_if&lt; std::is_enum&lt;V&gt;::value, std::string&gt;::type tos </td>
          <td>(</td>
          <td class="paramtype">V&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert an enum in string. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The variable to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a string </dd></dl>

<p>Definition at line <a class="el" href="../../d6/d97/a00045_source.php#l00029">29</a> of file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a78b4ad7bc552ad244dec369856aa8d91"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">std::enable_if&lt; !std::is_enum&lt;V&gt;::value, std::string&gt;::type tos </td>
          <td>(</td>
          <td class="paramtype">V&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert <em>in</em> variable in string. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The variable to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a string </dd></dl>

<p>Definition at line <a class="el" href="../../d6/d97/a00045_source.php#l00048">48</a> of file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a013b8a84340b1ab68401095a566cc0ea"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">size_t tost </td>
          <td>(</td>
          <td class="paramtype">V&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert <em>in</em> variable in size_t. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The variable to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a size_t </dd></dl>

<p>Definition at line <a class="el" href="../../d6/d97/a00045_source.php#l00148">148</a> of file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>

<p><div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d97/a00045_a013b8a84340b1ab68401095a566cc0ea_cgraph.png" border="0" usemap="#d6/d97/a00045_a013b8a84340b1ab68401095a566cc0ea_cgraph" alt=""/></div>
<map name="d6/d97/a00045_a013b8a84340b1ab68401095a566cc0ea_cgraph" id="d6/d97/a00045_a013b8a84340b1ab68401095a566cc0ea_cgraph">
<area shape="rect" id="node2" href="../../d6/d97/a00045.php#a09a70dbff0164874fba7fda6d3afd8c7" title="Convert an enum in string. " alt="" coords="97,5,137,32"/>
</map>
</div>
</p>

</div>
</div>
<a class="anchor" id="a046732bd284eb239dc2eda5a92a17681"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">unsigned int tou </td>
          <td>(</td>
          <td class="paramtype">V&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert <em>in</em> variable in unsigned int. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The variable to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return an unsigned int </dd></dl>

<p>Definition at line <a class="el" href="../../d6/d97/a00045_source.php#l00114">114</a> of file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>

<p><div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d97/a00045_a046732bd284eb239dc2eda5a92a17681_cgraph.png" border="0" usemap="#d6/d97/a00045_a046732bd284eb239dc2eda5a92a17681_cgraph" alt=""/></div>
<map name="d6/d97/a00045_a046732bd284eb239dc2eda5a92a17681_cgraph" id="d6/d97/a00045_a046732bd284eb239dc2eda5a92a17681_cgraph">
<area shape="rect" id="node2" href="../../d6/d97/a00045.php#a09a70dbff0164874fba7fda6d3afd8c7" title="Convert an enum in string. " alt="" coords="93,5,133,32"/>
</map>
</div>
</p>

</div>
</div>
<a class="anchor" id="aa70ef73b7fa30f68e3f14a6b60de10eb"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename V &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">unsigned long long int tov </td>
          <td>(</td>
          <td class="paramtype">V&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert <em>in</em> variable in unsigned long long int. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The variable to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return an unsigned long long int </dd></dl>

<p>Definition at line <a class="el" href="../../d6/d97/a00045_source.php#l00131">131</a> of file <a class="el" href="../../d6/d97/a00045_source.php">convert.hpp</a>.</p>

<p><div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d97/a00045_aa70ef73b7fa30f68e3f14a6b60de10eb_cgraph.png" border="0" usemap="#d6/d97/a00045_aa70ef73b7fa30f68e3f14a6b60de10eb_cgraph" alt=""/></div>
<map name="d6/d97/a00045_aa70ef73b7fa30f68e3f14a6b60de10eb_cgraph" id="d6/d97/a00045_aa70ef73b7fa30f68e3f14a6b60de10eb_cgraph">
<area shape="rect" id="node2" href="../../d6/d97/a00045.php#a09a70dbff0164874fba7fda6d3afd8c7" title="Convert an enum in string. " alt="" coords="93,5,133,32"/>
</map>
</div>
</p>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d6/d97/a00045.php">convert.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
