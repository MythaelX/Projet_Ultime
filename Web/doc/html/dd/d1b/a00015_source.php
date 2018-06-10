<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: authentification.js Source File</title>
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
      <li><a href="../../pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="../../annotated.php"><span>Data&#160;Structures</span></a></li>
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
$(document).ready(function(){initNavTree('dd/d1b/a00015_source.php','../../');});
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
<div class="title">authentification.js</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../dd/d1b/a00015.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#ae2475e10618961c050dcba04e8c42331">    1</a></span>&#160;<span class="stringliteral">&#39;use strict&#39;</span>;</div><div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;$(<span class="stringliteral">&quot;#boutonConnexion&quot;</span>).addEventListener(<span class="stringliteral">&#39;click&#39;</span>,<a class="code" href="../../dd/d1b/a00015.php#a1e3a84965da657b293ee3d8b023ad1fb">valideLogin</a>);</div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;</div><div class="line"><a name="l00004"></a><span class="lineno"><a class="line" href="../../dd/d1b/a00015.php#a1e3a84965da657b293ee3d8b023ad1fb">    4</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../dd/d1b/a00015.php#a1e3a84965da657b293ee3d8b023ad1fb">valideLogin</a>(event) {</div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;    var <a class="code" href="../../d6/d42/a00043.php#a1f0d86ab32405786812d806542ca3280">pseudo</a>, mdp, text, xhr;</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;    <span class="keyword">event</span>.preventDefault();</div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;    pseudo = $(<span class="stringliteral">&#39;#pseudo&#39;</span>).value;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;    mdp = $(<span class="stringliteral">&#39;#mdp&#39;</span>).value;</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;    <span class="keywordflow">if</span> (pseudo == <span class="stringliteral">&#39;&#39;</span> || mdp == <span class="stringliteral">&#39;&#39;</span>) {</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;        text = <span class="stringliteral">&#39;L\&#39;un des champs est vide.&#39;</span>;</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;        <a class="code" href="../../d7/dd4/a00013.php#aa048c2d0291f4b7a55ba31de642c5a9a">httpErrors</a>(400,text)</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;    } <span class="keywordflow">else</span> {</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;    <a class="code" href="../../d7/dd4/a00013.php#abef425142325124458ad69a853742275">ajaxRequest</a>(<span class="stringliteral">&#39;AUTH&#39;</span>,<span class="stringliteral">&#39;php/request.php/authentification&#39;</span>,<span class="keyword">function</span>(token){</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;      Cookies.set(<span class="stringliteral">&#39;token&#39;</span>, token);</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;      Cookies.set(<span class="stringliteral">&#39;pseudo&#39;</span>, pseudo);</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;      document.location=<span class="stringliteral">&quot;./index.php&quot;</span>;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    },pseudo + <span class="charliteral">&#39;:&#39;</span> + mdp);</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;  }</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;}</div><div class="ttc" id="a00015_php_a1e3a84965da657b293ee3d8b023ad1fb"><div class="ttname"><a href="../../dd/d1b/a00015.php#a1e3a84965da657b293ee3d8b023ad1fb">valideLogin</a></div><div class="ttdeci">function valideLogin(event)</div><div class="ttdef"><b>Definition:</b> <a href="../../dd/d1b/a00015_source.php#l00004">authentification.js:4</a></div></div>
<div class="ttc" id="a00013_php_abef425142325124458ad69a853742275"><div class="ttname"><a href="../../d7/dd4/a00013.php#abef425142325124458ad69a853742275">ajaxRequest</a></div><div class="ttdeci">function ajaxRequest(type, request, callback, data=null, errorCallback=function(){}, async=true)</div><div class="ttdoc">The function that start an ajax request. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dd4/a00013_source.php#l00099">ajax.js:99</a></div></div>
<div class="ttc" id="a00013_php_aa048c2d0291f4b7a55ba31de642c5a9a"><div class="ttname"><a href="../../d7/dd4/a00013.php#aa048c2d0291f4b7a55ba31de642c5a9a">httpErrors</a></div><div class="ttdeci">function httpErrors(errorNumber, errorText)</div><div class="ttdoc">Initialize the error div. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dd4/a00013_source.php#l00020">ajax.js:20</a></div></div>
<div class="ttc" id="a00043_php_a1f0d86ab32405786812d806542ca3280"><div class="ttname"><a href="../../d6/d42/a00043.php#a1f0d86ab32405786812d806542ca3280">pseudo</a></div><div class="ttdeci">var pseudo</div><div class="ttdef"><b>Definition:</b> <a href="../../d6/d42/a00043_source.php#l00003">navBar.js:3</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_2867b8401105090ba43035c8b1fd9c0c.php">js</a></li><li class="navelem"><a class="el" href="../../dd/d1b/a00015.php">authentification.js</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
