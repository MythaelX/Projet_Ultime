<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: request.php Source File</title>
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
$(document).ready(function(){initNavTree('d2/dee/a00049_source.php','../../');});
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
<div class="title">request.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d2/dee/a00049.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div><div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;    require_once(<span class="stringliteral">&quot;bases/_functions.php&quot;</span>);</div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;    require_once(<span class="stringliteral">&quot;bases/getter.php&quot;</span>);</div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;    require_once(<span class="stringliteral">&quot;bases/errors.php&quot;</span>);</div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;    require_once(<span class="stringliteral">&quot;bases/bdd.php&quot;</span>);</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;    require_once(<span class="stringliteral">&quot;bddConnect.inc&quot;</span>);</div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;    require_once(<span class="stringliteral">&quot;fonctions.php&quot;</span>);</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;    <span class="comment">// Database connexion.</span></div><div class="line"><a name="l00010"></a><span class="lineno"><a class="line" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">   10</a></span>&#160;    <a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a> = <span class="keyword">new</span> <a class="code" href="../../d1/d7c/a00003.php">Bdd</a>(<span class="stringliteral">&quot;mysql&quot;</span>, $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;    <span class="comment">/* Récupération de la prochaine ressource */</span></div><div class="line"><a name="l00013"></a><span class="lineno"><a class="line" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">   13</a></span>&#160;    <a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> = <a class="code" href="../../d4/d8c/a00035.php#a443ea3a863c29aed90f572de52c0b04d">nextRes</a>();</div><div class="line"><a name="l00014"></a><span class="lineno"><a class="line" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">   14</a></span>&#160;    <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a> = NULL;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;    <span class="comment">/* Action selon le type d&#39;envoie */</span></div><div class="line"><a name="l00016"></a><span class="lineno"><a class="line" href="../../d2/dee/a00049.php#afb00944b44575a6b06d388e807358cd5">   16</a></span>&#160;    <span class="keywordflow">switch</span>(<a class="code" href="../../d4/d8c/a00035.php#a9a4a6fba2208984cabb3afacadf33919">$type</a>){</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;        <span class="keywordflow">case</span> <span class="stringliteral">&quot;POST&quot;</span>:</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;        <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;creerPartie&#39;</span>){</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;            $themes=explode(<span class="stringliteral">&quot;,&quot;</span>,$_POST[<span class="stringliteral">&#39;themes&#39;</span>]);</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;            $themesSQL=<span class="stringliteral">&quot;(&quot;</span>;</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;            <span class="keywordflow">for</span> ($i=0; $i &lt;<span class="keyword">sizeof</span>($themes)-1 ; $i++) {</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;                $themesSQL=$themesSQL.<span class="stringliteral">&quot;c.nom_categorie=&#39;&quot;</span>.$themes[$i].<span class="stringliteral">&quot;&#39; OR &quot;</span>;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;            }</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;            $themesSQL=$themesSQL.<span class="stringliteral">&quot;c.nom_categorie=&#39;&quot;</span>.$themes[$i].<span class="stringliteral">&quot;&#39;) AND &quot;</span>;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;            <span class="comment">/*******************/</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;            $tabQuestions=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT q.id_question FROM question AS q,categorie AS c WHERE &quot;</span>.$themesSQL.<span class="stringliteral">&quot; c.id_categorie=q.id_categorie ORDER BY RAND()&quot;</span>);</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;            <a class="code" href="../../d5/d79/a00030.php#a724c1f237bf9d61e65f9190f327a36ca">creationPartie</a>(<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>,$tabQuestions);</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;        }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;jeu&#39;</span>){</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;            <a class="code" href="../../d5/d79/a00030.php#af5fde6a754bc0e9c7872a974abde85a8">score</a>(<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>);</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;        }</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;            <span class="keywordflow">break</span>;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;        <span class="keywordflow">case</span> <span class="stringliteral">&quot;GET&quot;</span>:</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;            <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;tableauPalmares&#39;</span>){</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;                $difficulte=$_GET[<span class="stringliteral">&#39;difficulte&#39;</span>];</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;                <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT j.valeur_score AS score, j.temps_score AS temps, j.date_score, u.pseudo FROM joue_a AS j, utilisateurs AS u, partie AS p WHERE j.mail = u.mail AND j.id_partie=p.id_partie AND p.id_difficulte=&quot;</span>.$difficulte.<span class="stringliteral">&quot; ORDER BY j.valeur_score DESC LIMIT 15&quot;</span>);</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;            }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;authentification&#39;</span>){</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;                <a class="code" href="../../d5/d79/a00030.php#a4c00ed23cbac293dc1b0c38b4ca6e3b6">authentification</a>(<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>);</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;            }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;navInfo&#39;</span>){</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;                <a class="code" href="../../d4/dca/a00048.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a> = $_GET[<span class="stringliteral">&#39;pseudo&#39;</span>];</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;                <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT pseudo,avatar FROM utilisateurs WHERE pseudo=&#39;$pseudo&#39;&quot;</span>);</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;            }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;tableauParties&#39;</span>){</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;                $difficulte=$_GET[<span class="stringliteral">&#39;difficulte&#39;</span>];</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;                <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT id_partie FROM partie WHERE id_difficulte=&quot;</span>.$difficulte.<span class="stringliteral">&quot; AND partie_actif=1&quot;</span>);</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;            }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;tableauThemes&#39;</span>){</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;                <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT nom_categorie FROM categorie WHERE categorie_actif=1&quot;</span>);</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;            }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;tableauDifficulte&#39;</span>){</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;                <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT nom_difficulte FROM difficulte WHERE 1&quot;</span>);</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;            }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;nomDifficulte&#39;</span>){</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;                $id_partie=$_GET[<span class="stringliteral">&#39;id_partie&#39;</span>];</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;                <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT d.nom_difficulte FROM partie AS p,difficulte As d Where p.id_partie=&quot;</span>.$id_partie.<span class="stringliteral">&quot; And d.id_difficulte=p.id_difficulte&quot;</span>);</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;            }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;questions&#39;</span>){</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;                $id_partie=$_GET[<span class="stringliteral">&#39;id_partie&#39;</span>];</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;                <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT q.id_question,q.solution_un,q.solution_deux FROM question As q,contient AS c WHERE c.id_question=q.id_question AND q.question_actif=1 AND c.id_partie=&quot;</span>.$id_partie.<span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;            }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;propositions&#39;</span>){</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;                $id_question=$_GET[<span class="stringliteral">&#39;id_question&#39;</span>];</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;                <a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>=<a class="code" href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a>-&gt;query(<span class="stringliteral">&quot;SELECT texte_proposition,solution_proposition FROM proposition Where id_question=&quot;</span>.$id_question.<span class="stringliteral">&quot; AND proposition_actif=1 ORDER BY RAND() LIMIT 3&quot;</span>);</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;            }</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;            <a class="code" href="../../d5/d79/a00030.php#afcef1294902ca07027096e59292f89c1">sendJsonData</a>(<a class="code" href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a>,<span class="stringliteral">&#39;HTTP/1.1 200 OK&#39;</span>);</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;            <span class="keywordflow">break</span>;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;        <span class="keywordflow">case</span> <span class="stringliteral">&quot;PUT&quot;</span>:</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;            <span class="keywordflow">break</span>;</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;        <span class="keywordflow">case</span> <span class="stringliteral">&quot;DELETE&quot;</span>:</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;            <span class="keywordflow">if</span>(<a class="code" href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a> == <span class="stringliteral">&#39;sessionDestroy&#39;</span>){</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;                session_destroy();</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;            }</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;            <span class="keywordflow">break</span>;</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;        <span class="keywordflow">default</span>:</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    }</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="comment">//$pseudo=verifieToken($bdd);</span></div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <a class="code" href="../../d2/dee/a00049.php#afb00944b44575a6b06d388e807358cd5">exit</a>;</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;?&gt;</div><div class="ttc" id="a00030_php_a724c1f237bf9d61e65f9190f327a36ca"><div class="ttname"><a href="../../d5/d79/a00030.php#a724c1f237bf9d61e65f9190f327a36ca">creationPartie</a></div><div class="ttdeci">creationPartie($bdd, $tabQuestions)</div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d79/a00030_source.php#l00041">fonctions.php:41</a></div></div>
<div class="ttc" id="a00003_php"><div class="ttname"><a href="../../d1/d7c/a00003.php">Bdd</a></div><div class="ttdoc">A class to connect to a database. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/d7a/a00016_source.php#l00017">bdd.php:17</a></div></div>
<div class="ttc" id="a00049_php_a7fd0384e6fc79c4dac5e25ab16d186ba"><div class="ttname"><a href="../../d2/dee/a00049.php#a7fd0384e6fc79c4dac5e25ab16d186ba">$requestRessource</a></div><div class="ttdeci">$requestRessource</div><div class="ttdef"><b>Definition:</b> <a href="../../d2/dee/a00049_source.php#l00013">request.php:13</a></div></div>
<div class="ttc" id="a00030_php_afcef1294902ca07027096e59292f89c1"><div class="ttname"><a href="../../d5/d79/a00030.php#afcef1294902ca07027096e59292f89c1">sendJsonData</a></div><div class="ttdeci">sendJsonData($message, $h)</div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d79/a00030_source.php#l00003">fonctions.php:3</a></div></div>
<div class="ttc" id="a00030_php_a4c00ed23cbac293dc1b0c38b4ca6e3b6"><div class="ttname"><a href="../../d5/d79/a00030.php#a4c00ed23cbac293dc1b0c38b4ca6e3b6">authentification</a></div><div class="ttdeci">authentification($bdd)</div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d79/a00030_source.php#l00011">fonctions.php:11</a></div></div>
<div class="ttc" id="a00035_php_a9a4a6fba2208984cabb3afacadf33919"><div class="ttname"><a href="../../d4/d8c/a00035.php#a9a4a6fba2208984cabb3afacadf33919">$type</a></div><div class="ttdeci">$type</div><div class="ttdoc">Get the server method type. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d8c/a00035_source.php#l00020">getter.php:20</a></div></div>
<div class="ttc" id="a00030_php_af5fde6a754bc0e9c7872a974abde85a8"><div class="ttname"><a href="../../d5/d79/a00030.php#af5fde6a754bc0e9c7872a974abde85a8">score</a></div><div class="ttdeci">score($bdd)</div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d79/a00030_source.php#l00053">fonctions.php:53</a></div></div>
<div class="ttc" id="a00049_php_a94f91e878bce0991e2cd595c5dd79b3f"><div class="ttname"><a href="../../d2/dee/a00049.php#a94f91e878bce0991e2cd595c5dd79b3f">$bdd</a></div><div class="ttdeci">$bdd</div><div class="ttdef"><b>Definition:</b> <a href="../../d2/dee/a00049_source.php#l00010">request.php:10</a></div></div>
<div class="ttc" id="a00049_php_a6efc15b5a2314dd4b5aaa556a375c6d6"><div class="ttname"><a href="../../d2/dee/a00049.php#a6efc15b5a2314dd4b5aaa556a375c6d6">$data</a></div><div class="ttdeci">$data</div><div class="ttdef"><b>Definition:</b> <a href="../../d2/dee/a00049_source.php#l00014">request.php:14</a></div></div>
<div class="ttc" id="a00049_php_afb00944b44575a6b06d388e807358cd5"><div class="ttname"><a href="../../d2/dee/a00049.php#afb00944b44575a6b06d388e807358cd5">exit</a></div><div class="ttdeci">switch($type) exit</div><div class="ttdef"><b>Definition:</b> <a href="../../d2/dee/a00049_source.php#l00016">request.php:16</a></div></div>
<div class="ttc" id="a00048_php_a5aaec5de32a8e7a31b5104f80d58dec0"><div class="ttname"><a href="../../d4/dca/a00048.php#a5aaec5de32a8e7a31b5104f80d58dec0">$pseudo</a></div><div class="ttdeci">$pseudo</div><div class="ttdef"><b>Definition:</b> <a href="../../d4/dca/a00048_source.php#l00010">register.php:10</a></div></div>
<div class="ttc" id="a00035_php_a443ea3a863c29aed90f572de52c0b04d"><div class="ttname"><a href="../../d4/d8c/a00035.php#a443ea3a863c29aed90f572de52c0b04d">nextRes</a></div><div class="ttdeci">nextRes()</div><div class="ttdoc">Return the next ressource in the array or false. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d8c/a00035_source.php#l00038">getter.php:38</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_05194b7bb14e4bdbd759acf3e4294839.php">php</a></li><li class="navelem"><a class="el" href="../../d2/dee/a00049.php">request.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
