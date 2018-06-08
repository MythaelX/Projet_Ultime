<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: CheckBox.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d7/dec/a00010_source.php','../../');});
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
<div class="title">CheckBox.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d7/dec/a00010.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_CHECKBOX</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_CHECKBOX</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;QtWidgets&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../d8/d84/a00001.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d8/d84/a00001.php">CheckBox</a> : <span class="keyword">public</span> QCheckBox {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    Q_OBJECT</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;        <a class="code" href="../../d8/d84/a00001.php#afe6e081ee7a25541ffcebb2063181b3d">CheckBox</a>(QWidget* parent = <span class="keyword">nullptr</span>);</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    </div><div class="line"><a name="l00024"></a><span class="lineno"><a class="line" href="../../d8/d84/a00001.php#ad24f0483b08b440dad2d4569be54a1ff">   24</a></span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d8/d84/a00001.php#ad24f0483b08b440dad2d4569be54a1ff">setTable</a>(std::string table){ this-&gt;table = table; }</div><div class="line"><a name="l00026"></a><span class="lineno"><a class="line" href="../../d8/d84/a00001.php#af473fc46af7d680963e7aca100aae1f3">   26</a></span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d8/d84/a00001.php#af473fc46af7d680963e7aca100aae1f3">setIndex</a>(std::string index){ this-&gt;index = index; }</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno"><a class="line" href="../../d8/d84/a00001.php#a8750f3494181edef39fda4e23e13a0cb">   29</a></span>&#160;        std::string <a class="code" href="../../d8/d84/a00001.php#a8750f3494181edef39fda4e23e13a0cb">getTable</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> table; }</div><div class="line"><a name="l00031"></a><span class="lineno"><a class="line" href="../../d8/d84/a00001.php#a087c4b9b8bcc8d631756e53a5c795efb">   31</a></span>&#160;        std::string <a class="code" href="../../d8/d84/a00001.php#a087c4b9b8bcc8d631756e53a5c795efb">getIndex</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> index; }</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;    <span class="keyword">public</span> slots:</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d8/d84/a00001.php#a2d303cb0c794df8e046e6ee38b7b2be0">changeActive</a>(<span class="keywordtype">int</span> state);</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;        </div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;    signals:</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d8/d84/a00001.php#a2a8d7c87f758badc4fcb643519e7d78a">stateChanged</a>(<span class="keywordtype">int</span> state, std::string table, std::string index);</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;        </div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;        std::string table;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;        std::string index;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;};</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="preprocessor">#endif //HEADER_CHECKBOX</span></div><div class="ttc" id="a00001_php_af473fc46af7d680963e7aca100aae1f3"><div class="ttname"><a href="../../d8/d84/a00001.php#af473fc46af7d680963e7aca100aae1f3">CheckBox::setIndex</a></div><div class="ttdeci">void setIndex(std::string index)</div><div class="ttdoc">Set the index linked to the checkbox. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dec/a00010_source.php#l00026">CheckBox.hpp:26</a></div></div>
<div class="ttc" id="a00001_php_a2d303cb0c794df8e046e6ee38b7b2be0"><div class="ttname"><a href="../../d8/d84/a00001.php#a2d303cb0c794df8e046e6ee38b7b2be0">CheckBox::changeActive</a></div><div class="ttdeci">void changeActive(int state)</div><div class="ttdoc">Change the active state of a value. </div></div>
<div class="ttc" id="a00001_php_a2a8d7c87f758badc4fcb643519e7d78a"><div class="ttname"><a href="../../d8/d84/a00001.php#a2a8d7c87f758badc4fcb643519e7d78a">CheckBox::stateChanged</a></div><div class="ttdeci">void stateChanged(int state, std::string table, std::string index)</div><div class="ttdoc">Overload of the stateChanged signal. </div></div>
<div class="ttc" id="a00001_php_afe6e081ee7a25541ffcebb2063181b3d"><div class="ttname"><a href="../../d8/d84/a00001.php#afe6e081ee7a25541ffcebb2063181b3d">CheckBox::CheckBox</a></div><div class="ttdeci">CheckBox(QWidget *parent=nullptr)</div><div class="ttdoc">Create a QCheckBox. </div></div>
<div class="ttc" id="a00001_php_a8750f3494181edef39fda4e23e13a0cb"><div class="ttname"><a href="../../d8/d84/a00001.php#a8750f3494181edef39fda4e23e13a0cb">CheckBox::getTable</a></div><div class="ttdeci">std::string getTable() const </div><div class="ttdoc">Return the table. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dec/a00010_source.php#l00029">CheckBox.hpp:29</a></div></div>
<div class="ttc" id="a00001_php"><div class="ttname"><a href="../../d8/d84/a00001.php">CheckBox</a></div><div class="ttdoc">An implementation of QCheckBox for the software. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dec/a00010_source.php#l00017">CheckBox.hpp:17</a></div></div>
<div class="ttc" id="a00001_php_a087c4b9b8bcc8d631756e53a5c795efb"><div class="ttname"><a href="../../d8/d84/a00001.php#a087c4b9b8bcc8d631756e53a5c795efb">CheckBox::getIndex</a></div><div class="ttdeci">std::string getIndex() const </div><div class="ttdoc">Return the index. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dec/a00010_source.php#l00031">CheckBox.hpp:31</a></div></div>
<div class="ttc" id="a00001_php_ad24f0483b08b440dad2d4569be54a1ff"><div class="ttname"><a href="../../d8/d84/a00001.php#ad24f0483b08b440dad2d4569be54a1ff">CheckBox::setTable</a></div><div class="ttdeci">void setTable(std::string table)</div><div class="ttdoc">Set the table linked to the checkbox. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dec/a00010_source.php#l00024">CheckBox.hpp:24</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../d7/dec/a00010.php">CheckBox.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>