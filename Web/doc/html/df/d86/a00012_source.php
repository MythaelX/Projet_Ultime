<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: formulaireInscription.php Source File</title>
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
   &#160;<span id="projectnumber">1.0</span>
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
      <li><a href="../../globals.php"><span>Globals</span></a></li>
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
$(document).ready(function(){initNavTree('df/d86/a00012_source.php','../../');});
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
<div class="title">formulaireInscription.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../df/d86/a00012.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;div <span class="keywordtype">id</span>=<span class="stringliteral">&quot;formulaireInscription&quot;</span>&gt;</div><div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;&lt;h1&gt;INSCRIPTION&lt;/h1&gt;</div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;&lt;form  method=<span class="stringliteral">&quot;post&quot;</span> action=<span class="stringliteral">&quot;php/register.php&quot;</span> target=<span class="stringliteral">&quot;_self&quot;</span> enctype=<span class="stringliteral">&quot;multipart/form-data&quot;</span>  <span class="keywordtype">id</span>=<span class="stringliteral">&quot;formulaireInscription&quot;</span>&gt;</div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;  &lt;div&gt;</div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;    &lt;label <span class="keywordflow">for</span>=<span class="stringliteral">&quot;pseudo&quot;</span>&gt;Pseudo :&lt;/label&gt;</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;    &lt;input type=<span class="stringliteral">&quot;text&quot;</span> name=<span class="stringliteral">&quot;pseudo&quot;</span> <span class="keywordtype">id</span>=<span class="stringliteral">&quot;pseudo&quot;</span> /&gt;</div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;  &lt;/div&gt;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;&lt;div&gt;</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;    &lt;label <span class="keywordflow">for</span>=<span class="stringliteral">&quot;pseudo&quot;</span>&gt;Mot de passe :&lt;/label&gt;</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;    &lt;input type=<span class="stringliteral">&quot;password&quot;</span> name=<span class="stringliteral">&quot;mdp&quot;</span> <span class="keywordtype">id</span>=<span class="stringliteral">&quot;mdp&quot;</span> min=<span class="stringliteral">&quot;2&quot;</span> max=<span class="stringliteral">&quot;25&quot;</span>/&gt;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;&lt;/div&gt;</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;&lt;div &gt;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;    &lt;label <span class="keywordflow">for</span>=<span class="stringliteral">&quot;mdp&quot;</span>&gt;Retapez mot de passe :&lt;/label&gt;</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;    &lt;input type=<span class="stringliteral">&quot;password&quot;</span> name=<span class="stringliteral">&quot;mdpVerif&quot;</span> <span class="keywordtype">id</span>=<span class="stringliteral">&quot;mdpVerif&quot;</span> /&gt;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;&lt;/div&gt;</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;&lt;div &gt;</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;    &lt;label <span class="keywordflow">for</span>=<span class="stringliteral">&quot;mdp&quot;</span>&gt;Email :&lt;/label&gt;</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    &lt;input type=<span class="stringliteral">&quot;email&quot;</span> name=<span class="stringliteral">&quot;email&quot;</span> <span class="keywordtype">id</span>=<span class="stringliteral">&quot;email&quot;</span> /&gt;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;&lt;/div&gt;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;&lt;div <span class="keywordtype">id</span>=<span class="stringliteral">&quot;blockAvatar&quot;</span>&gt;</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;    &lt;img src=<span class="stringliteral">&quot;design/img/avatardefaut.gif&quot;</span> alt=<span class="stringliteral">&quot;Icon avatar&quot;</span> <span class="keywordtype">id</span>=<span class="stringliteral">&quot;imageAvatar&quot;</span>&gt;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;  &lt;div&gt;</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;      &lt;input  type=<span class="stringliteral">&quot;file&quot;</span> name=<span class="stringliteral">&quot;boutonAvatar&quot;</span> value=<span class="stringliteral">&quot;Avatar&quot;</span> <span class="keywordtype">id</span>=<span class="stringliteral">&quot;boutonAvatar&quot;</span> accept=<span class="stringliteral">&quot;image/*&quot;</span>/&gt;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    &lt;button <span class="keywordtype">id</span>=<span class="stringliteral">&quot;boutonAvatar2&quot;</span>&gt;Choissez votre avatar&lt;/button&gt;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;  &lt;/div&gt;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;&lt;/div&gt;</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;&lt;div&gt;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;    &lt;input type=<span class="stringliteral">&quot;submit&quot;</span> <span class="keyword">class</span>=<span class="stringliteral">&quot;boutonvert&quot;</span> value=<span class="stringliteral">&quot;Inscription&quot;</span> <span class="keywordtype">id</span>=<span class="stringliteral">&quot;boutonInscription&quot;</span>/&gt;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;&lt;/div&gt;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;&lt;/form&gt;</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;&lt;/div&gt;</div></div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_05194b7bb14e4bdbd759acf3e4294839.php">php</a></li><li class="navelem"><a class="el" href="../../df/d86/a00012.php">formulaireInscription.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
