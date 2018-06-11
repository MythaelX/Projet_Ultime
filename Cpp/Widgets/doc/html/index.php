<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: My own Qt Widgets &amp; Features</title>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="dynsections.js"></script>
<link href="navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="resize.js"></script>
<script type="text/javascript" src="navtreedata.js"></script>
<script type="text/javascript" src="navtree.js"></script>
<script type="text/javascript">
  $(document).ready(initResizable);
  $(window).load(resizeHeight);
</script>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
<link href="doxygen.css" rel="stylesheet" type="text/css" />
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
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li class="current"><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
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
$(document).ready(function(){initNavTree('index.php','');});
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
<div class="title">My own Qt Widgets &amp; Features </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><dl class="section user"><dt>Widgets</dt><dd><ul>
<li><a class="el" href="d7/dec/a00010.php" title="Create a personnalized Widget. ">Widget</a></li>
<li><a class="el" href="de/d21/a00006.php" title="An implementation of QSpacerItem. ">QHSpacerItem</a></li>
<li><a class="el" href="de/d5e/a00007.php" title="An implementation of QSpacerItem. ">QVSpacerItem</a></li>
<li><a class="el" href="da/da0/a00009.php" title="Create a personnalized TableWidget. ">TableWidget</a></li>
<li><a class="el" href="da/d45/a00011.php" title="A custom window. ">Window</a><ul>
<li><a class="el" href="d7/dd4/a00013.php" title="The titlebar of the Window class. ">WindowTitleBar</a><ul>
<li><a class="el" href="df/d86/a00012.php" title="The buttons for the WindowTitleBar and the Window. ">WindowButton</a> </li>
</ul>
</li>
</ul>
</li>
</ul>
</dd></dl>
<dl class="section user"><dt>Objects</dt><dd><ul>
<li><a class="el" href="d1/d7c/a00003.php" title="A Scene implementation to draw with tiles system. ">DrawScene</a></li>
<li><a class="el" href="dd/dad/a00005.php" title="A Scene implementation to draw graphs. ">GraphScene</a></li>
<li><a class="el" href="d0/d0b/a00004.php" title="A class to treat fonts with QFont. ">Font</a></li>
<li>abstract <a class="el" href="d4/dee/a00008.php" title="An implementation of QGraphcsScene with an updator. ">Scene</a> </li>
</ul>
</dd></dl>
<dl class="section user"><dt>Some structures &amp; defines</dt><dd><ul>
<li>QtWindow (A struct that contains <b>w</b>, <b>h</b>, <b>angle</b> attributes) </li>
</ul>
</dd></dl>
<dl class="section user"><dt>Functions</dt><dd><ul>
<li><a class="el" href="d0/d0b/a00004.php#a1b263a092a8579ac1058af09e39389e0" title="Load a font from a file. ">Font::load(QString)</a></li>
<li><a class="el" href="dd/da2/a00019.php#a0272cd6761e50151f46337d1d7f793f2" title="Get the size of the desktop. ">getDesktopSize()</a></li>
<li><a class="el" href="dd/da2/a00019.php#a7a5b8564155df959a2ed36b171090ec2" title="Get the width of the desktop. ">getDesktopWidth()</a></li>
<li><a class="el" href="dd/da2/a00019.php#a4e89aa67e6219267f0f2965567c447a5" title="Get the height of the desktop. ">getDesktopHeight()</a></li>
<li><a class="el" href="dd/da2/a00019.php#ac35a8acbe17be1d705ecf8d940eacc95" title="Read a Cascade Style Sheet and translate it for Qt. ">cssReader(std::string)</a></li>
</ul>
</dd></dl>
<dl class="section date"><dt>Date</dt><dd>10 juin 2018 </dd></dl>
<dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>