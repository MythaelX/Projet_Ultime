<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: cryptage.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d5/df9/a00044.php','../../');});
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
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">cryptage.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d6/d97/a00045_source.php">defines.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../dc/dee/a00053_source.php">maths.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for cryptage.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../da/dec/a00080.png" border="0" usemap="#cryptage_8hpp" alt=""/></div>
<map name="cryptage_8hpp" id="cryptage_8hpp">
<area shape="rect" id="node2" href="../../d6/d97/a00045.php" title="defines.hpp" alt="" coords="619,80,709,107"/>
<area shape="rect" id="node44" href="../../dc/dee/a00053.php" title="maths.hpp" alt="" coords="1327,80,1409,107"/>
<area shape="rect" id="node9" href="../../d1/dc6/a00037.php" title="bdd.hpp" alt="" coords="630,155,698,181"/>
<area shape="rect" id="node42" href="../../d4/d8c/a00035.php" title="Args.hpp" alt="" coords="743,155,817,181"/>
<area shape="rect" id="node14" href="../../d4/dca/a00048.php" title="errors.hpp" alt="" coords="749,229,829,256"/>
<area shape="rect" id="node36" href="../../d4/de8/a00061.php" title="string.hpp" alt="" coords="181,304,259,331"/>
<area shape="rect" id="node15" href="../../dd/d32/a00041.php" title="console.hpp" alt="" coords="523,304,615,331"/>
<area shape="rect" id="node25" href="../../d2/dee/a00049.php" title="files.hpp" alt="" coords="747,379,818,405"/>
<area shape="rect" id="node28" href="../../d1/d6f/a00063.php" title="time.hpp" alt="" coords="1097,304,1169,331"/>
<area shape="rect" id="node16" href="../../d6/d42/a00043.php" title="convert.hpp" alt="" coords="309,379,400,405"/>
<area shape="rect" id="node22" href="../../de/de1/a00065.php" title="types.hpp" alt="" coords="530,379,609,405"/>
<area shape="rect" id="node31" href="../../df/d03/a00062.php" title="Threadable.hpp" alt="" coords="1025,379,1135,405"/>
<area shape="rect" id="node35" href="../../d7/df7/a00058.php" title="pointers.hpp" alt="" coords="1237,453,1331,480"/>
<area shape="rect" id="node38" href="../../d2/d79/a00051.php" title="macro.hpp" alt="" coords="187,379,269,405"/>
<area shape="rect" id="node39" href="../../de/d8c/a00036.php" title="array.hpp" alt="" coords="842,379,918,405"/>
<area shape="rect" id="node40" href="../../d3/d8b/a00059.php" title="RNG.hpp" alt="" coords="85,379,163,405"/>
</map>
</div>
</div>
<p><a href="../../d5/df9/a00044_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/de7/a00014.php">Crypto</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to be the parent for every crypt class.  <a href="../../d2/de7/a00014.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d5e/a00007.php">Cesar</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to use the cesar algorithm for encryption.  <a href="../../de/d5e/a00007.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/d33/a00027.php">RSA</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to use the <a class="el" href="../../d0/d33/a00027.php" title="A class to use the RSA algorithm for encryption. ">RSA</a> algorithm for encryption.  <a href="../../d0/d33/a00027.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:a1e4758b1e3ca1aefc42b33e55b9d8fe4"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../de/d5e/a00007.php">Cesar</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df9/a00044.php#a1e4758b1e3ca1aefc42b33e55b9d8fe4">cesar</a></td></tr>
<tr class="memdesc:a1e4758b1e3ca1aefc42b33e55b9d8fe4"><td class="mdescLeft">&#160;</td><td class="mdescRight">A global cesar variable to crypt and decrypt message.  <a href="#a1e4758b1e3ca1aefc42b33e55b9d8fe4">More...</a><br /></td></tr>
<tr class="separator:a1e4758b1e3ca1aefc42b33e55b9d8fe4"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>12 juin 2018 </dd></dl>

<p>Definition in file <a class="el" href="../../d5/df9/a00044_source.php">cryptage.hpp</a>.</p>
</div><h2 class="groupheader">Variable Documentation</h2>
<a class="anchor" id="a1e4758b1e3ca1aefc42b33e55b9d8fe4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../de/d5e/a00007.php">Cesar</a> cesar</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>A global cesar variable to crypt and decrypt message. </p>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/df9/a00044.php">cryptage.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
