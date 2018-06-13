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
$(document).ready(function(){initNavTree('dc/d3c/a00028_source.php','../../');});
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
<a href="../../dc/d3c/a00028.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;require_once(<span class="stringliteral">&quot;bases/_functions.php&quot;</span>);</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;require_once(<span class="stringliteral">&quot;bases/getter.php&quot;</span>);</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;require_once(<span class="stringliteral">&quot;bases/errors.php&quot;</span>);</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;require_once(<span class="stringliteral">&quot;bases/bdd.php&quot;</span>);</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;require_once(<span class="stringliteral">&quot;bddConnect.inc&quot;</span>);</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno"><a class="line" href="../../dc/d3c/a00028.php#a94f91e878bce0991e2cd595c5dd79b3f">   13</a></span>&#160;<a class="code" href="../../dc/d3c/a00028.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a> = <span class="keyword">new</span> Bdd(<span class="stringliteral">&quot;mysql&quot;</span>, $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);</div><div class="line"><a name="l00014"></a><span class="lineno"><a class="line" href="../../dc/d3c/a00028.php#ad634f418b20382e2802f80532d76d3cd">   14</a></span>&#160;<a class="code" href="../../dc/d3c/a00028.php#ad634f418b20382e2802f80532d76d3cd">$email</a>=$_POST[<span class="stringliteral">&#39;email&#39;</span>];</div><div class="line"><a name="l00015"></a><span class="lineno"><a class="line" href="../../dc/d3c/a00028.php#a5aaec5de32a8e7a31b5104f80d58dec0">   15</a></span>&#160;<a class="code" href="../../dc/d3c/a00028.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a> = $_POST[<span class="stringliteral">&#39;pseudo&#39;</span>];</div><div class="line"><a name="l00016"></a><span class="lineno"><a class="line" href="../../dc/d3c/a00028.php#a8a65334de2f0d486a42b02ecf82fe8fb">   16</a></span>&#160;<a class="code" href="../../dc/d3c/a00028.php#a8a65334de2f0d486a42b02ecf82fe8fb">$mdp</a> = $_POST[<span class="stringliteral">&#39;mdp&#39;</span>];</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno"><a class="line" href="../../dc/d3c/a00028.php#ac62167326fcdc762297fe76407218b55">   18</a></span>&#160;<a class="code" href="../../dc/d3c/a00028.php#ac62167326fcdc762297fe76407218b55">$avatar</a>=saveFileTo($_FILES[<span class="stringliteral">&#39;boutonAvatar&#39;</span>],<span class="stringliteral">&quot;../files/img&quot;</span>);</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="keywordflow">if</span>(<a class="code" href="../../dc/d3c/a00028.php#ac62167326fcdc762297fe76407218b55">$avatar</a> != <span class="keyword">false</span>){</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;  <a class="code" href="../../dc/d3c/a00028.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;insert(<span class="stringliteral">&#39;utilisateurs&#39;</span>, <span class="stringliteral">&quot;&#39;&quot;</span>.<a class="code" href="../../dc/d3c/a00028.php#ad634f418b20382e2802f80532d76d3cd">$email</a>.<span class="stringliteral">&quot;&#39;,&#39;&quot;</span>.<a class="code" href="../../dc/d3c/a00028.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a>.<span class="stringliteral">&quot;&#39;,&#39;&quot;</span>.<a class="code" href="../../dc/d3c/a00028.php#a8a65334de2f0d486a42b02ecf82fe8fb">$mdp</a>.<span class="stringliteral">&quot;&#39;,&#39;files/img/&quot;</span>.<a class="code" href="../../dc/d3c/a00028.php#ac62167326fcdc762297fe76407218b55">$avatar</a>.<span class="stringliteral">&quot;&#39;,&#39; &#39;&quot;</span>);</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;  header(<span class="stringliteral">&#39;Location: ../inscription.php&#39;</span>);</div><div class="line"><a name="l00022"></a><span class="lineno"><a class="line" href="../../dc/d3c/a00028.php#a7a4107a18478ba654b01dd816130d8ba">   22</a></span>&#160;}<span class="keywordflow">else</span>{</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;  <a class="code" href="../../dc/d3c/a00028.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;insert(<span class="stringliteral">&#39;utilisateurs&#39;</span>, <span class="stringliteral">&quot;&#39;&quot;</span>.<a class="code" href="../../dc/d3c/a00028.php#ad634f418b20382e2802f80532d76d3cd">$email</a>.<span class="stringliteral">&quot;&#39;,&#39;&quot;</span>.<a class="code" href="../../dc/d3c/a00028.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a>.<span class="stringliteral">&quot;&#39;,&#39;&quot;</span>.<a class="code" href="../../dc/d3c/a00028.php#a8a65334de2f0d486a42b02ecf82fe8fb">$mdp</a>.<span class="stringliteral">&quot;&#39;,&#39;design/img/avatardefaut.png&#39;,&#39; &#39;&quot;</span>);</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;}</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;header(<span class="stringliteral">&#39;Location: ../index.php&#39;</span>);</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;?&gt;</div><div class="ttc" id="a00028_php_a8a65334de2f0d486a42b02ecf82fe8fb"><div class="ttname"><a href="../../dc/d3c/a00028.php#a8a65334de2f0d486a42b02ecf82fe8fb">$mdp</a></div><div class="ttdeci">$mdp</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/d3c/a00028_source.php#l00016">register.php:16</a></div></div>
<div class="ttc" id="a00028_php_a94f91e878bce0991e2cd595c5dd79b3f"><div class="ttname"><a href="../../dc/d3c/a00028.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a></div><div class="ttdeci">$bdd</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/d3c/a00028_source.php#l00013">register.php:13</a></div></div>
<div class="ttc" id="a00028_php_ac62167326fcdc762297fe76407218b55"><div class="ttname"><a href="../../dc/d3c/a00028.php#ac62167326fcdc762297fe76407218b55">$avatar</a></div><div class="ttdeci">$avatar</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/d3c/a00028_source.php#l00018">register.php:18</a></div></div>
<div class="ttc" id="a00028_php_a5aaec5de32a8e7a31b5104f80d58dec0"><div class="ttname"><a href="../../dc/d3c/a00028.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a></div><div class="ttdeci">$pseudo</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/d3c/a00028_source.php#l00015">register.php:15</a></div></div>
<div class="ttc" id="a00028_php_ad634f418b20382e2802f80532d76d3cd"><div class="ttname"><a href="../../dc/d3c/a00028.php#ad634f418b20382e2802f80532d76d3cd">$email</a></div><div class="ttdeci">$email</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/d3c/a00028_source.php#l00014">register.php:14</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_05194b7bb14e4bdbd759acf3e4294839.php">php</a></li><li class="navelem"><a class="el" href="../../dc/d3c/a00028.php">register.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
