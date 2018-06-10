<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: register.php Source File</title>
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
      <li><a href="../../namespaces.php"><span>Namespaces</span></a></li>
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
<div class="title">register.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/d22/a00057.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div><div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;require_once(<span class="stringliteral">&quot;bases/_functions.php&quot;</span>);</div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;require_once(<span class="stringliteral">&quot;bases/getter.php&quot;</span>);</div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;require_once(<span class="stringliteral">&quot;bases/errors.php&quot;</span>);</div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;require_once(<span class="stringliteral">&quot;bases/bdd.php&quot;</span>);</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;require_once(<span class="stringliteral">&quot;bddConnect.inc&quot;</span>);</div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#a94f91e878bce0991e2cd595c5dd79b3f">    8</a></span>&#160;<a class="code" href="../../d1/d22/a00057.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a> = <span class="keyword">new</span> <a class="code" href="../../d1/d7c/a00003.php">Bdd</a>(<span class="stringliteral">&quot;mysql&quot;</span>, $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);</div><div class="line"><a name="l00009"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#ad634f418b20382e2802f80532d76d3cd">    9</a></span>&#160;<a class="code" href="../../d1/d22/a00057.php#ad634f418b20382e2802f80532d76d3cd">$email</a>=$_POST[<span class="stringliteral">&#39;email&#39;</span>];</div><div class="line"><a name="l00010"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#a5aaec5de32a8e7a31b5104f80d58dec0">   10</a></span>&#160;<a class="code" href="../../d1/d22/a00057.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a> = $_POST[<span class="stringliteral">&#39;pseudo&#39;</span>];</div><div class="line"><a name="l00011"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#a8a65334de2f0d486a42b02ecf82fe8fb">   11</a></span>&#160;<a class="code" href="../../d1/d22/a00057.php#a8a65334de2f0d486a42b02ecf82fe8fb">$mdp</a> = $_POST[<span class="stringliteral">&#39;mdp&#39;</span>];</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#ac62167326fcdc762297fe76407218b55">   13</a></span>&#160;<a class="code" href="../../d1/d22/a00057.php#ac62167326fcdc762297fe76407218b55">$avatar</a>=<a class="code" href="../../db/df3/a00034.php#a7fc3f2f4db9af0955fcc004c4bf83a24">saveFileTo</a>($_FILES[<span class="stringliteral">&#39;boutonAvatar&#39;</span>],<span class="stringliteral">&quot;../files/img&quot;</span>);</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="keywordflow">if</span>(<a class="code" href="../../d1/d22/a00057.php#ac62167326fcdc762297fe76407218b55">$avatar</a> !== <span class="keyword">false</span>){</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;  <a class="code" href="../../d1/d22/a00057.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;insert(<span class="stringliteral">&#39;utilisateurs&#39;</span>, <span class="stringliteral">&quot;&#39;&quot;</span>.<a class="code" href="../../d1/d22/a00057.php#ad634f418b20382e2802f80532d76d3cd">$email</a>.<span class="stringliteral">&quot;&#39;,&#39;&quot;</span>.<a class="code" href="../../d1/d22/a00057.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a>.<span class="stringliteral">&quot;&#39;,&#39;&quot;</span>.<a class="code" href="../../d1/d22/a00057.php#a8a65334de2f0d486a42b02ecf82fe8fb">$mdp</a>.<span class="stringliteral">&quot;&#39;,&#39;&quot;</span>.<a class="code" href="../../d1/d22/a00057.php#ac62167326fcdc762297fe76407218b55">$avatar</a>.<span class="stringliteral">&quot;&#39;,&#39; &#39;&quot;</span>);</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;  header(<span class="stringliteral">&#39;Location: ../inscription.php&#39;</span>);</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;}</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;header(<span class="stringliteral">&#39;Location: ../index.php&#39;</span>);</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;?&gt;</div><div class="ttc" id="a00003_php"><div class="ttname"><a href="../../d1/d7c/a00003.php">Bdd</a></div><div class="ttdoc">A class to connect to a database. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/d7a/a00016_source.php#l00017">bdd.php:17</a></div></div>
<div class="ttc" id="a00057_php_ad634f418b20382e2802f80532d76d3cd"><div class="ttname"><a href="../../d1/d22/a00057.php#ad634f418b20382e2802f80532d76d3cd">$email</a></div><div class="ttdeci">$email</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00009">register.php:9</a></div></div>
<div class="ttc" id="a00034_php_a7fc3f2f4db9af0955fcc004c4bf83a24"><div class="ttname"><a href="../../db/df3/a00034.php#a7fc3f2f4db9af0955fcc004c4bf83a24">saveFileTo</a></div><div class="ttdeci">saveFileTo($FILE, $folder, $name=&quot;&quot;)</div><div class="ttdoc">Function that save a file in the given directory. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/df3/a00034_source.php#l00051">files.php:51</a></div></div>
<div class="ttc" id="a00057_php_a94f91e878bce0991e2cd595c5dd79b3f"><div class="ttname"><a href="../../d1/d22/a00057.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a></div><div class="ttdeci">$bdd</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00008">register.php:8</a></div></div>
<div class="ttc" id="a00057_php_ac62167326fcdc762297fe76407218b55"><div class="ttname"><a href="../../d1/d22/a00057.php#ac62167326fcdc762297fe76407218b55">$avatar</a></div><div class="ttdeci">$avatar</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00013">register.php:13</a></div></div>
<div class="ttc" id="a00057_php_a5aaec5de32a8e7a31b5104f80d58dec0"><div class="ttname"><a href="../../d1/d22/a00057.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a></div><div class="ttdeci">$pseudo</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00010">register.php:10</a></div></div>
<div class="ttc" id="a00057_php_a8a65334de2f0d486a42b02ecf82fe8fb"><div class="ttname"><a href="../../d1/d22/a00057.php#a8a65334de2f0d486a42b02ecf82fe8fb">$mdp</a></div><div class="ttdeci">$mdp</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00011">register.php:11</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_05194b7bb14e4bdbd759acf3e4294839.php">php</a></li><li class="navelem"><a class="el" href="../../d1/d22/a00057.php">register.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
