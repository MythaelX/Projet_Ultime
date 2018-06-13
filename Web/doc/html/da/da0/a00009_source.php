<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: fonctions.js Source File</title>
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
$(document).ready(function(){initNavTree('da/da0/a00009_source.php','../../');});
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
<div class="title">fonctions.js</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../da/da0/a00009.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a1426a760631d33602005a8bb59e49c7a">    8</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a1426a760631d33602005a8bb59e49c7a">recupérationAvatar</a>() {</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;  var f = $(<span class="stringliteral">&quot;#boutonAvatar&quot;</span>);</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;  <span class="keywordflow">if</span> (f.files &amp;&amp; f.files[0] &amp;&amp; <a class="code" href="../../da/da0/a00009.php#a9d0e9578c0fb0424b8b09301ecffffd5">verifImage</a>()==<span class="keyword">false</span>) {</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;    var f = $(<span class="stringliteral">&quot;#boutonAvatar&quot;</span>);</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;    var reader= <span class="keyword">new</span> FileReader();</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;    reader.onload = <span class="keyword">function</span>(e) {</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;      $(<span class="stringliteral">&#39;#imageAvatar&#39;</span>).setAttribute(<span class="stringliteral">&#39;src&#39;</span>, e.target.result);</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;    }</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;    reader.readAsDataURL(f.files[0]);</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;  }</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;}</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">/*!*    \brief    Check if the value of the nickname is correct. */</span></div><div class="line"><a name="l00021"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a0db9c30b86d2f4aa120daa6247990007">   21</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a0db9c30b86d2f4aa120daa6247990007">verifPseudo</a>(){</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;  var <a class="code" href="../../dd/d1b/a00015.php#a1f0d86ab32405786812d806542ca3280">pseudo</a>=$(<span class="stringliteral">&#39;#pseudo&#39;</span>);</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;  var regex = <span class="keyword">new</span> RegExp(<span class="stringliteral">&quot;[-_.,*$?!@=+]&quot;</span>);</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;  <span class="keywordflow">if</span>(pseudo.value.length &lt; 2 || pseudo.value.length &gt;= 25 || regex.test(pseudo.value)){</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(pseudo, <span class="keyword">true</span>);</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;      <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;   }<span class="keywordflow">else</span>{</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(pseudo, <span class="keyword">false</span>);</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;      <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;   }</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;}</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="comment">/*!*    \brief    Check if the value of the password is correct.*/</span></div><div class="line"><a name="l00034"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a5e7778e2c5dd64ac673d79add217c6cf">   34</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a5e7778e2c5dd64ac673d79add217c6cf">verifMotDePasse</a>(){</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;  var mdp=$(<span class="stringliteral">&#39;#mdp&#39;</span>);</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;  var mdpVerif=$(<span class="stringliteral">&#39;#mdpVerif&#39;</span>);</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;  <span class="keywordflow">if</span>(mdp.value!=mdpVerif.value){</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;    <span class="keywordflow">if</span>(mdp.value==<span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">true</span>);</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">false</span>);</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;    }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(mdpVerif.value==<span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">false</span>);</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">true</span>);</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;    }<span class="keywordflow">else</span>{</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">true</span>);</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">true</span>);</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    }</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;  }<span class="keywordflow">else</span>{</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    <span class="keywordflow">if</span>(mdp.value==<span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">true</span>);</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">true</span>);</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;      <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    }<span class="keywordflow">else</span>{</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">false</span>);</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">false</span>);</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;      <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;    }</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;  }</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;}</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;<span class="comment">/*!*    \brief    Check if the value of the nickname is correct.*/</span></div><div class="line"><a name="l00063"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#ad853bfd925b71db5ce9624d60548b1b7">   63</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#ad853bfd925b71db5ce9624d60548b1b7">verifMotDePasse2</a>(){</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;  var mdp=$(<span class="stringliteral">&#39;#mdp&#39;</span>);</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;  var mdpVerif=$(<span class="stringliteral">&#39;#mdpVerif&#39;</span>);</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;  <span class="keywordflow">if</span>(mdp.value!=mdpVerif.value){</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    <span class="keywordflow">if</span>(mdp.value==<span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">true</span>);</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">false</span>);</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    }<span class="keywordflow">else</span> <span class="keywordflow">if</span>(mdpVerif.value==<span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">false</span>);</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">true</span>);</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    }<span class="keywordflow">else</span>{</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">true</span>);</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">true</span>);</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;    }</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;  }<span class="keywordflow">else</span>{</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdp, <span class="keyword">false</span>);</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpVerif, <span class="keyword">false</span>);</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;      <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;  }</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;}</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;<span class="comment">/*!*    \brief    Check if the value of the email is correct.*/</span></div><div class="line"><a name="l00086"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a4a822815e57b31479eb6d364e3003fa2">   86</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a4a822815e57b31479eb6d364e3003fa2">verifMail</a>(){</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;  <a class="code" href="../../dd/d1b/a00015.php#afabde1db53e2a42b1568728e0fc155f7">email</a>=$(<span class="stringliteral">&quot;#email&quot;</span>);</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;   <span class="keywordflow">if</span>(regex.test(<a class="code" href="../../dd/d1b/a00015.php#afabde1db53e2a42b1568728e0fc155f7">email</a>.value)){</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;     <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(<a class="code" href="../../dd/d1b/a00015.php#afabde1db53e2a42b1568728e0fc155f7">email</a>, <span class="keyword">false</span>);</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;     <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;   }<span class="keywordflow">else</span>{</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;     <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(<a class="code" href="../../dd/d1b/a00015.php#afabde1db53e2a42b1568728e0fc155f7">email</a>, <span class="keyword">true</span>);</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;     <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;   }</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;}</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;<span class="comment">/*!*    \brief    Check if the value of the password is correct compared to the database password.*/</span></div><div class="line"><a name="l00099"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a47d34320afdb9ab37a4214a0c33d4791">   99</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a47d34320afdb9ab37a4214a0c33d4791">mdpActuelVerif</a>(){</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;  var verification;</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;  var mdp=$(<span class="stringliteral">&#39;#mdpActuel&#39;</span>);</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;  <a class="code" href="../../d1/d7c/a00003.php#a2e3f7b2aca271c0d87c61a33b0030941">ajaxRequest</a>(<span class="stringliteral">&#39;GET&#39;</span>,<span class="stringliteral">&#39;php/request.php/verifMotDePasse&#39;</span>,<span class="keyword">function</span>(ajaxResponse){</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;    json= JSON.parse(ajaxResponse);</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;    <span class="keywordflow">if</span>(!json[<span class="stringliteral">&#39;verification&#39;</span>]){</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpActuel, <span class="keyword">false</span>);</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;      verification=<span class="keyword">false</span>;</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;    }<span class="keywordflow">else</span>{</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;      <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(mdpActuel, <span class="keyword">true</span>);</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;      verification=<span class="keyword">true</span>;</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;    }</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;  },<span class="stringliteral">&quot;mdp=&quot;</span>+mdp.value+<span class="stringliteral">&quot;&amp;pseudo=&quot;</span>+Cookies.get(<span class="stringliteral">&#39;pseudo&#39;</span>),<span class="keyword">function</span>(){},<span class="keyword">false</span>);</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;  <span class="keywordflow">return</span> verification;</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;}</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;<span class="comment">/*!*</span></div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;<span class="comment">*   \brief    check if the nickname is not taken.</span></div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;<span class="comment">*       \param[in]      ajaxResponse   The array of &quot;pseudo&quot;</span></div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;<span class="comment">*/</span></div><div class="line"><a name="l00119"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#ac5538f7db327e4d05dd85cbfb8db94d7">  119</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#ac5538f7db327e4d05dd85cbfb8db94d7">verifPseudoBDD</a>(ajaxResponse){</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;var json=JSON.parse(ajaxResponse);</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;<a class="code" href="../../dd/d1b/a00015.php#a1f0d86ab32405786812d806542ca3280">pseudo</a>=$(<span class="stringliteral">&#39;#pseudo&#39;</span>);</div><div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;<span class="keywordflow">if</span>(json[0]!=null){</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;  <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(<a class="code" href="../../dd/d1b/a00015.php#a1f0d86ab32405786812d806542ca3280">pseudo</a>, <span class="keyword">true</span>);</div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;  <a class="code" href="../../dd/d1b/a00015.php#a558403c3a40c010539026c0e7e8a7b49">verifBDDPseudo</a>=<span class="keyword">true</span>;</div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;}<span class="keywordflow">else</span>{</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;  <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(<a class="code" href="../../dd/d1b/a00015.php#a1f0d86ab32405786812d806542ca3280">pseudo</a>, <span class="keyword">false</span>);</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;  <a class="code" href="../../dd/d1b/a00015.php#a558403c3a40c010539026c0e7e8a7b49">verifBDDPseudo</a>=<span class="keyword">false</span>;</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;  }</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;}</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;</div><div class="line"><a name="l00135"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a24e23b6a325155daad0f098a989d6d41">  135</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a24e23b6a325155daad0f098a989d6d41">verifEmailBDD</a>(ajaxResponse){</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;var json=JSON.parse(ajaxResponse);</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;<span class="keywordflow">if</span>(json[0]!=null){</div><div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;  <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(<a class="code" href="../../dd/d1b/a00015.php#afabde1db53e2a42b1568728e0fc155f7">email</a>, <span class="keyword">true</span>);</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;  <a class="code" href="../../dd/d1b/a00015.php#adda857c7fc0ffa8117463c95f5ba277e">verifBDDEmail</a>=<span class="keyword">true</span>;</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;}<span class="keywordflow">else</span>{</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;  <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(<a class="code" href="../../dd/d1b/a00015.php#afabde1db53e2a42b1568728e0fc155f7">email</a>, <span class="keyword">false</span>);</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;  <a class="code" href="../../dd/d1b/a00015.php#adda857c7fc0ffa8117463c95f5ba277e">verifBDDEmail</a>=<span class="keyword">false</span>;</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;  }</div><div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;}</div><div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div><div class="line"><a name="l00151"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">  151</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a>(champ, erreur){</div><div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;   <span class="keywordflow">if</span>(erreur)</div><div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;      champ.style.backgroundColor = <span class="stringliteral">&quot;#fba&quot;</span>;</div><div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;   <span class="keywordflow">else</span></div><div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;      champ.style.backgroundColor = <span class="stringliteral">&quot;&quot;</span>;</div><div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;}</div><div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div><div class="line"><a name="l00162"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a34b3788c0664245d1de030f262f040ef">  162</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a34b3788c0664245d1de030f262f040ef">affichageDifficulte</a>(ajaxResponse){</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;  var text,json;</div><div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;  text=<span class="stringliteral">&quot;&quot;</span>;</div><div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;  json= JSON.parse(ajaxResponse);</div><div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;  <span class="keywordflow">for</span> (var i = 0; i &lt; json.length; i++) {</div><div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;    text+=<span class="stringliteral">&#39;&lt;option value=&quot;&#39;</span>+(i+1)+<span class="stringliteral">&#39;&quot;&gt;&#39;</span>+json[i][<span class="stringliteral">&#39;nom_difficulte&#39;</span>]+<span class="stringliteral">&#39;&lt;/option&gt;&#39;</span>;</div><div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;  }</div><div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;  $(<span class="stringliteral">&#39;#difficulte&#39;</span>).innerHTML= text;</div><div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;}</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;</div><div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;<span class="comment">/*!*    \brief  Check if the type of the avatar is a jpeg or jpg or gif or png  .*/</span></div><div class="line"><a name="l00173"></a><span class="lineno"><a class="line" href="../../da/da0/a00009.php#a9d0e9578c0fb0424b8b09301ecffffd5">  173</a></span>&#160;<span class="keyword">function</span> <a class="code" href="../../da/da0/a00009.php#a9d0e9578c0fb0424b8b09301ecffffd5">verifImage</a>(){</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;  var file,fileTypes;</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;  file=$(<span class="stringliteral">&#39;#boutonAvatar&#39;</span>);</div><div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;  fileTypes = [<span class="stringliteral">&#39;image/jpeg&#39;</span>,<span class="stringliteral">&#39;image/jpg&#39;</span>,<span class="stringliteral">&#39;image/png&#39;</span>,<span class="stringliteral">&#39;image/gif&#39;</span>];</div><div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;  <span class="keywordflow">for</span> (var i = 0; i &lt; fileTypes.length; i++) {</div><div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;    <span class="keywordflow">if</span>(file.files[0].type == fileTypes[i]) {</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;      <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;    }</div><div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;  }</div><div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;  <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;}</div><div class="ttc" id="a00009_php_a0db9c30b86d2f4aa120daa6247990007"><div class="ttname"><a href="../../da/da0/a00009.php#a0db9c30b86d2f4aa120daa6247990007">verifPseudo</a></div><div class="ttdeci">function verifPseudo()</div><div class="ttdoc">Check if the value of the nickname is correct. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00021">fonctions.js:21</a></div></div>
<div class="ttc" id="a00009_php_a47d34320afdb9ab37a4214a0c33d4791"><div class="ttname"><a href="../../da/da0/a00009.php#a47d34320afdb9ab37a4214a0c33d4791">mdpActuelVerif</a></div><div class="ttdeci">function mdpActuelVerif()</div><div class="ttdoc">Check if the value of the password is correct compared to the database password. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00099">fonctions.js:99</a></div></div>
<div class="ttc" id="a00009_php_a4a822815e57b31479eb6d364e3003fa2"><div class="ttname"><a href="../../da/da0/a00009.php#a4a822815e57b31479eb6d364e3003fa2">verifMail</a></div><div class="ttdeci">function verifMail()</div><div class="ttdoc">Check if the value of the email is correct. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00086">fonctions.js:86</a></div></div>
<div class="ttc" id="a00009_php_a5e7778e2c5dd64ac673d79add217c6cf"><div class="ttname"><a href="../../da/da0/a00009.php#a5e7778e2c5dd64ac673d79add217c6cf">verifMotDePasse</a></div><div class="ttdeci">function verifMotDePasse()</div><div class="ttdoc">Check if the value of the password is correct. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00034">fonctions.js:34</a></div></div>
<div class="ttc" id="a00009_php_ac5538f7db327e4d05dd85cbfb8db94d7"><div class="ttname"><a href="../../da/da0/a00009.php#ac5538f7db327e4d05dd85cbfb8db94d7">verifPseudoBDD</a></div><div class="ttdeci">function verifPseudoBDD(ajaxResponse)</div><div class="ttdoc">check if the nickname is not taken. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00119">fonctions.js:119</a></div></div>
<div class="ttc" id="a00009_php_a1426a760631d33602005a8bb59e49c7a"><div class="ttname"><a href="../../da/da0/a00009.php#a1426a760631d33602005a8bb59e49c7a">recupérationAvatar</a></div><div class="ttdeci">function recupérationAvatar()</div><div class="ttdoc">Displays the avatar chosen by the user on his computer. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00008">fonctions.js:8</a></div></div>
<div class="ttc" id="a00009_php_a24e23b6a325155daad0f098a989d6d41"><div class="ttname"><a href="../../da/da0/a00009.php#a24e23b6a325155daad0f098a989d6d41">verifEmailBDD</a></div><div class="ttdeci">function verifEmailBDD(ajaxResponse)</div><div class="ttdoc">Check if the email is not taken. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00135">fonctions.js:135</a></div></div>
<div class="ttc" id="a00009_php_a34b3788c0664245d1de030f262f040ef"><div class="ttname"><a href="../../da/da0/a00009.php#a34b3788c0664245d1de030f262f040ef">affichageDifficulte</a></div><div class="ttdeci">function affichageDifficulte(ajaxResponse)</div><div class="ttdoc">display difficulty with the html element &quot;option&quot; in a select. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00162">fonctions.js:162</a></div></div>
<div class="ttc" id="a00009_php_ad853bfd925b71db5ce9624d60548b1b7"><div class="ttname"><a href="../../da/da0/a00009.php#ad853bfd925b71db5ce9624d60548b1b7">verifMotDePasse2</a></div><div class="ttdeci">function verifMotDePasse2()</div><div class="ttdoc">Check if the value of the nickname is correct. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00063">fonctions.js:63</a></div></div>
<div class="ttc" id="a00015_php_adda857c7fc0ffa8117463c95f5ba277e"><div class="ttname"><a href="../../dd/d1b/a00015.php#adda857c7fc0ffa8117463c95f5ba277e">verifBDDEmail</a></div><div class="ttdeci">var verifBDDEmail</div><div class="ttdef"><b>Definition:</b> <a href="../../dd/d1b/a00015_source.php#l00031">inscription.js:31</a></div></div>
<div class="ttc" id="a00009_php_a9d0e9578c0fb0424b8b09301ecffffd5"><div class="ttname"><a href="../../da/da0/a00009.php#a9d0e9578c0fb0424b8b09301ecffffd5">verifImage</a></div><div class="ttdeci">function verifImage()</div><div class="ttdoc">Check if the type of the avatar is a jpeg or jpg or gif or png . </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00173">fonctions.js:173</a></div></div>
<div class="ttc" id="a00015_php_a1f0d86ab32405786812d806542ca3280"><div class="ttname"><a href="../../dd/d1b/a00015.php#a1f0d86ab32405786812d806542ca3280">pseudo</a></div><div class="ttdeci">var pseudo</div><div class="ttdef"><b>Definition:</b> <a href="../../dd/d1b/a00015_source.php#l00020">inscription.js:20</a></div></div>
<div class="ttc" id="a00015_php_a558403c3a40c010539026c0e7e8a7b49"><div class="ttname"><a href="../../dd/d1b/a00015.php#a558403c3a40c010539026c0e7e8a7b49">verifBDDPseudo</a></div><div class="ttdeci">var verifBDDPseudo</div><div class="ttdef"><b>Definition:</b> <a href="../../dd/d1b/a00015_source.php#l00030">inscription.js:30</a></div></div>
<div class="ttc" id="a00015_php_afabde1db53e2a42b1568728e0fc155f7"><div class="ttname"><a href="../../dd/d1b/a00015.php#afabde1db53e2a42b1568728e0fc155f7">email</a></div><div class="ttdeci">var email</div><div class="ttdef"><b>Definition:</b> <a href="../../dd/d1b/a00015_source.php#l00026">inscription.js:26</a></div></div>
<div class="ttc" id="a00003_php_a2e3f7b2aca271c0d87c61a33b0030941"><div class="ttname"><a href="../../d1/d7c/a00003.php#a2e3f7b2aca271c0d87c61a33b0030941">ajaxRequest</a></div><div class="ttdeci">ajaxRequest('GET','php/request.php/tableauDifficulte', affichageDifficulte)</div></div>
<div class="ttc" id="a00009_php_a76081b25499ce0257c512f37f1ad9988"><div class="ttname"><a href="../../da/da0/a00009.php#a76081b25499ce0257c512f37f1ad9988">surligne</a></div><div class="ttdeci">function surligne(champ, erreur)</div><div class="ttdoc">Change backgound color of the html element if there is an error or not. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00151">fonctions.js:151</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_2867b8401105090ba43035c8b1fd9c0c.php">js</a></li><li class="navelem"><a class="el" href="../../da/da0/a00009.php">fonctions.js</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
