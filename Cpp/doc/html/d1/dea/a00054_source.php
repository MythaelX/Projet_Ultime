<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: bdd.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d1/dea/a00054_source.php','../../');});
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
<div class="title">bdd.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/dea/a00054.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_BDD</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_BDD</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;cppconn/driver.h&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;cppconn/exception.h&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;cppconn/resultset.h&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#include &lt;cppconn/statement.h&gt;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;mutex&gt;</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">#include &lt;functional&gt;</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d9/d77/a00095.php">types.hpp</a>&quot;</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../dc/ddf/a00067.php">errors.hpp</a>&quot;</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d8/d53/a00081.php">pointers.hpp</a>&quot;</span></div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d9/dec/a00090.php">string.hpp</a>&quot;</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../dc/dee/a00053.php">array.hpp</a>&quot;</span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div><div class="line"><a name="l00027"></a><span class="lineno"><a class="line" href="../../d1/dea/a00054.php#acb7362a3fb715f64e5ab3cd50794a52c">   27</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../d1/dea/a00054.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a> = std::vector&lt;std::map&lt;std::string, std::string&gt;&gt;;</div><div class="line"><a name="l00029"></a><span class="lineno"><a class="line" href="../../d1/dea/a00054.php#a6b6679f15a22e0f89297978d24dec56e">   29</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../d1/dea/a00054.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> = std::vector&lt;std::vector&lt;std::string&gt;&gt;;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php">   47</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dd/dad/a00005.php">BDD</a> {</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;        <span class="comment">/* Constructor et Destroyer */</span></div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;        <a class="code" href="../../dd/dad/a00005.php#aed1a6117c471a7575a224321eaf0dba2">BDD</a>(<span class="keywordtype">bool</span> fatal_error = <span class="keyword">true</span>);</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;        <a class="code" href="../../dd/dad/a00005.php#a865c7d7590e1c3f227346b1045713099">~BDD</a>();</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a14ed61f03ce957690801dcc27e59930a">setDatabase</a>(std::string database);</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#afa848f628b17ea10115c828e1f97ba5b">try_database</a>(std::string database);</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#aa6720203c42f48b71f4d9a97f64b687f">setTable</a>(std::string table);</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;            sql::ResultSet* <a class="code" href="../../dd/dad/a00005.php#a9d8f1885fa2114dd0fa34c13e4e99a5c">query</a>(std::string task);</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;            <a class="code" href="../../d1/dea/a00054.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> <a class="code" href="../../dd/dad/a00005.php#a624539007ee74764ba5d8f6bb0e7a354">list</a>(std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../dd/dad/a00005.php#a059c72982d8075a1e0fcc175461b1430">insert</a>(std::string values, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#ad18c3bdb5afcce76344b9bb201362b95">update</a>(std::string values, std::string conditions, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#ad18c3bdb5afcce76344b9bb201362b95">update</a>(std::vector&lt;std::string&gt; values, std::string conditions, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;            <span class="keywordtype">bool</span> <span class="keyword">remove</span>(std::string condition, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a006fc2acc34962ebafb9ce19640ad18b">exists</a>(std::string task, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a359d41a12c304f95abb33d77698bd5ba">connect</a>(std::string url, std::string user, std::string pass);</div><div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;</div><div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a1e496e66cfaf5dc0209f448480bead5e">try_connect</a>(std::string url, std::string user, std::string pass);</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a61fdb222ad3b05fb70a221d78da5a9c9">reset</a>();</div><div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;</div><div class="line"><a name="l00166"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">  166</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">debug</a>(){ m_debug = <span class="keyword">true</span>; }</div><div class="line"><a name="l00168"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">  168</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">undebug</a>(){ m_debug = <span class="keyword">false</span>; }</div><div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;</div><div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;            <a class="code" href="../../d1/dea/a00054.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a> <a class="code" href="../../dd/dad/a00005.php#a498e375deb333279886dd91cf389c986">getColumns</a>(std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;</div><div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a84c0df9de34d028bfa4a6711f3ff38ed">hasAutoincrement</a>(std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;</div><div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../dd/dad/a00005.php#ae9ad54a4e2ca989e1f22dc497db4b43e">getCount</a>(std::string table = <span class="stringliteral">&quot;&quot;</span>, std::string conditions = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;</div><div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;            <a class="code" href="../../d1/dea/a00054.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> <a class="code" href="../../dd/dad/a00005.php#ac02190012120478141702fb616c89ab1">tables</a>();</div><div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;</div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../dd/dad/a00005.php#a9a035bbfa977617239704b3d33c4c5ac">lastId</a>();</div><div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;</div><div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;            <span class="keyword">static</span> std::string <a class="code" href="../../dd/dad/a00005.php#a3a309489e289988579ec94eae459f8df">formatColumn</a>(std::string name);</div><div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;</div><div class="line"><a name="l00218"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a1c3535db0b4aa44778421c5f35c379ff">  218</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a1c3535db0b4aa44778421c5f35c379ff">setFatal</a>(<span class="keywordtype">bool</span> state){ fatal_error = state; }</div><div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;</div><div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;            <span class="keyword">template</span>&lt;<span class="keyword">typename</span> Func, <span class="keyword">class </span>C, <span class="keyword">typename</span>... Args&gt;</div><div class="line"><a name="l00229"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a57fd2669fe6febe24cde0db73b5a438f">  229</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a57fd2669fe6febe24cde0db73b5a438f">applyForEach</a>(Func&amp;&amp; f, C obj, std::string table, Args&amp;&amp;... args){</div><div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;                <span class="keyword">auto</span> cols = this-&gt;<a class="code" href="../../dd/dad/a00005.php#a498e375deb333279886dd91cf389c986">getColumns</a>(table);</div><div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;                <span class="keyword">auto</span> func = std::mem_fn(f);</div><div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;</div><div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;                <span class="keywordtype">size_t</span> index = 0;</div><div class="line"><a name="l00234"></a><span class="lineno">  234</span>&#160;                <span class="keywordflow">for</span>(<span class="keyword">auto</span>&amp; col : cols){</div><div class="line"><a name="l00235"></a><span class="lineno">  235</span>&#160;                    func(obj, table, col, index, args...);</div><div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;                    index++;</div><div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;                }</div><div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;            }</div><div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160;</div><div class="line"><a name="l00248"></a><span class="lineno">  248</span>&#160;            <span class="keyword">template</span>&lt;<span class="keyword">typename</span> Func, <span class="keyword">typename</span>... Args&gt;</div><div class="line"><a name="l00249"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#ab15af0cd596105ba8f678fa38af6697a">  249</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#ab15af0cd596105ba8f678fa38af6697a">applyForEach</a>(Func&amp;&amp; f, std::string table, Args&amp;&amp;... args){</div><div class="line"><a name="l00250"></a><span class="lineno">  250</span>&#160;                <span class="keyword">auto</span> cols = this-&gt;<a class="code" href="../../dd/dad/a00005.php#a498e375deb333279886dd91cf389c986">getColumns</a>(table);</div><div class="line"><a name="l00251"></a><span class="lineno">  251</span>&#160;</div><div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160;                <span class="keywordtype">size_t</span> index = 0;</div><div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;                <span class="keywordflow">for</span>(<span class="keyword">auto</span>&amp; col : cols){</div><div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;                    f(table, col, index, args...);</div><div class="line"><a name="l00255"></a><span class="lineno">  255</span>&#160;                    index++;</div><div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;                }</div><div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;            }</div><div class="line"><a name="l00258"></a><span class="lineno">  258</span>&#160;</div><div class="line"><a name="l00259"></a><span class="lineno">  259</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#ac99c0f8c86fab4de2efe6b91b22fb942">formatValues</a>(std::string&amp; values, std::string table);</div><div class="line"><a name="l00275"></a><span class="lineno">  275</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#af8d633320c008fade8c3ee5ff08cc821">formatConditions</a>(std::string&amp; conditions, std::string table);</div><div class="line"><a name="l00282"></a><span class="lineno">  282</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a79cffc4dc63f93f9d9fce893c5b66a07">formatBdd</a>(std::vector&lt;std::string&gt;&amp; args);</div><div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;        std::string url;</div><div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160;        std::string user;</div><div class="line"><a name="l00286"></a><span class="lineno">  286</span>&#160;        std::string pass;</div><div class="line"><a name="l00287"></a><span class="lineno">  287</span>&#160;        std::string database;</div><div class="line"><a name="l00288"></a><span class="lineno">  288</span>&#160;</div><div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;        sql::Driver *driver;</div><div class="line"><a name="l00290"></a><span class="lineno">  290</span>&#160;        sql::Connection *con;</div><div class="line"><a name="l00291"></a><span class="lineno">  291</span>&#160;        sql::Statement *stmt;</div><div class="line"><a name="l00292"></a><span class="lineno">  292</span>&#160;        sql::ResultSet *res;</div><div class="line"><a name="l00293"></a><span class="lineno">  293</span>&#160;</div><div class="line"><a name="l00294"></a><span class="lineno">  294</span>&#160;        std::string table;</div><div class="line"><a name="l00295"></a><span class="lineno">  295</span>&#160;</div><div class="line"><a name="l00296"></a><span class="lineno">  296</span>&#160;        <span class="keywordtype">bool</span> connected;</div><div class="line"><a name="l00297"></a><span class="lineno">  297</span>&#160;        <span class="keywordtype">bool</span> databased;</div><div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;</div><div class="line"><a name="l00299"></a><span class="lineno">  299</span>&#160;        std::mutex mutex;</div><div class="line"><a name="l00300"></a><span class="lineno">  300</span>&#160;</div><div class="line"><a name="l00301"></a><span class="lineno">  301</span>&#160;        <span class="keywordtype">bool</span> m_debug;</div><div class="line"><a name="l00302"></a><span class="lineno">  302</span>&#160;        <span class="keywordtype">bool</span> fatal_error;</div><div class="line"><a name="l00303"></a><span class="lineno">  303</span>&#160;};</div><div class="line"><a name="l00304"></a><span class="lineno">  304</span>&#160;</div><div class="line"><a name="l00308"></a><span class="lineno">  308</span>&#160;<span class="keyword">extern</span> <a class="code" href="../../dd/dad/a00005.php">BDD</a> <a class="code" href="../../d1/dea/a00054.php#a36ce5024f17ad7e4a5b2eff31629cd5c">bdd</a>;</div><div class="line"><a name="l00309"></a><span class="lineno">  309</span>&#160;</div><div class="line"><a name="l00310"></a><span class="lineno">  310</span>&#160;<span class="preprocessor">#endif //HEADER_BDD</span></div><div class="ttc" id="a00005_php_a359d41a12c304f95abb33d77698bd5ba"><div class="ttname"><a href="../../dd/dad/a00005.php#a359d41a12c304f95abb33d77698bd5ba">BDD::connect</a></div><div class="ttdeci">bool connect(std::string url, std::string user, std::string pass)</div><div class="ttdoc">Connection to a bdd. </div></div>
<div class="ttc" id="a00005_php_a9d8f1885fa2114dd0fa34c13e4e99a5c"><div class="ttname"><a href="../../dd/dad/a00005.php#a9d8f1885fa2114dd0fa34c13e4e99a5c">BDD::query</a></div><div class="ttdeci">sql::ResultSet * query(std::string task)</div><div class="ttdoc">Query the task to the database. </div></div>
<div class="ttc" id="a00005_php"><div class="ttname"><a href="../../dd/dad/a00005.php">BDD</a></div><div class="ttdoc">A class to connect to a BDD. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00047">bdd.hpp:47</a></div></div>
<div class="ttc" id="a00005_php_ac99c0f8c86fab4de2efe6b91b22fb942"><div class="ttname"><a href="../../dd/dad/a00005.php#ac99c0f8c86fab4de2efe6b91b22fb942">BDD::formatValues</a></div><div class="ttdeci">void formatValues(std::string &amp;values, std::string table)</div><div class="ttdoc">Format the values string. </div></div>
<div class="ttc" id="a00053_php"><div class="ttname"><a href="../../dc/dee/a00053.php">array.hpp</a></div></div>
<div class="ttc" id="a00005_php_a1e496e66cfaf5dc0209f448480bead5e"><div class="ttname"><a href="../../dd/dad/a00005.php#a1e496e66cfaf5dc0209f448480bead5e">BDD::try_connect</a></div><div class="ttdeci">bool try_connect(std::string url, std::string user, std::string pass)</div><div class="ttdoc">Try a connection to a bdd. </div></div>
<div class="ttc" id="a00095_php"><div class="ttname"><a href="../../d9/d77/a00095.php">types.hpp</a></div></div>
<div class="ttc" id="a00005_php_a498e375deb333279886dd91cf389c986"><div class="ttname"><a href="../../dd/dad/a00005.php#a498e375deb333279886dd91cf389c986">BDD::getColumns</a></div><div class="ttdeci">ColsArray getColumns(std::string table=&quot;&quot;)</div><div class="ttdoc">Get all the columns of a table with their attributes. </div></div>
<div class="ttc" id="a00090_php"><div class="ttname"><a href="../../d9/dec/a00090.php">string.hpp</a></div></div>
<div class="ttc" id="a00005_php_ad18c3bdb5afcce76344b9bb201362b95"><div class="ttname"><a href="../../dd/dad/a00005.php#ad18c3bdb5afcce76344b9bb201362b95">BDD::update</a></div><div class="ttdeci">bool update(std::string values, std::string conditions, std::string args=&quot;&quot;, std::string table=&quot;&quot;)</div><div class="ttdoc">Use of the UPDATE in SQL. </div></div>
<div class="ttc" id="a00005_php_a84c0df9de34d028bfa4a6711f3ff38ed"><div class="ttname"><a href="../../dd/dad/a00005.php#a84c0df9de34d028bfa4a6711f3ff38ed">BDD::hasAutoincrement</a></div><div class="ttdeci">bool hasAutoincrement(std::string table=&quot;&quot;)</div><div class="ttdoc">Verify if a table contains an autoincremented column. </div></div>
<div class="ttc" id="a00005_php_a624539007ee74764ba5d8f6bb0e7a354"><div class="ttname"><a href="../../dd/dad/a00005.php#a624539007ee74764ba5d8f6bb0e7a354">BDD::list</a></div><div class="ttdeci">ListArray list(std::string table=&quot;&quot;)</div><div class="ttdoc">List the content of the given table. </div></div>
<div class="ttc" id="a00005_php_af8d633320c008fade8c3ee5ff08cc821"><div class="ttname"><a href="../../dd/dad/a00005.php#af8d633320c008fade8c3ee5ff08cc821">BDD::formatConditions</a></div><div class="ttdeci">void formatConditions(std::string &amp;conditions, std::string table)</div><div class="ttdoc">Format the conditions string. </div></div>
<div class="ttc" id="a00005_php_ab15af0cd596105ba8f678fa38af6697a"><div class="ttname"><a href="../../dd/dad/a00005.php#ab15af0cd596105ba8f678fa38af6697a">BDD::applyForEach</a></div><div class="ttdeci">void applyForEach(Func &amp;&amp;f, std::string table, Args &amp;&amp;...args)</div><div class="ttdoc">Run a function for each column of the table. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00249">bdd.hpp:249</a></div></div>
<div class="ttc" id="a00005_php_a962782dc60b83f30a7ec387e0747178d"><div class="ttname"><a href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">BDD::undebug</a></div><div class="ttdeci">void undebug()</div><div class="ttdoc">Stop the debug for the class. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00168">bdd.hpp:168</a></div></div>
<div class="ttc" id="a00005_php_a79cffc4dc63f93f9d9fce893c5b66a07"><div class="ttname"><a href="../../dd/dad/a00005.php#a79cffc4dc63f93f9d9fce893c5b66a07">BDD::formatBdd</a></div><div class="ttdeci">void formatBdd(std::vector&lt; std::string &gt; &amp;args)</div><div class="ttdoc">Format values for the bdd. </div></div>
<div class="ttc" id="a00005_php_a280bf2b854a6a0e3a573fbd7c96c84c2"><div class="ttname"><a href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">BDD::debug</a></div><div class="ttdeci">void debug()</div><div class="ttdoc">Start the debug for the class. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00166">bdd.hpp:166</a></div></div>
<div class="ttc" id="a00005_php_a865c7d7590e1c3f227346b1045713099"><div class="ttname"><a href="../../dd/dad/a00005.php#a865c7d7590e1c3f227346b1045713099">BDD::~BDD</a></div><div class="ttdeci">~BDD()</div></div>
<div class="ttc" id="a00005_php_aed1a6117c471a7575a224321eaf0dba2"><div class="ttname"><a href="../../dd/dad/a00005.php#aed1a6117c471a7575a224321eaf0dba2">BDD::BDD</a></div><div class="ttdeci">BDD(bool fatal_error=true)</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00005_php_a61fdb222ad3b05fb70a221d78da5a9c9"><div class="ttname"><a href="../../dd/dad/a00005.php#a61fdb222ad3b05fb70a221d78da5a9c9">BDD::reset</a></div><div class="ttdeci">void reset()</div><div class="ttdoc">Reset the object. </div></div>
<div class="ttc" id="a00005_php_afa848f628b17ea10115c828e1f97ba5b"><div class="ttname"><a href="../../dd/dad/a00005.php#afa848f628b17ea10115c828e1f97ba5b">BDD::try_database</a></div><div class="ttdeci">bool try_database(std::string database)</div><div class="ttdoc">Try a connection to the database. </div></div>
<div class="ttc" id="a00005_php_a059c72982d8075a1e0fcc175461b1430"><div class="ttname"><a href="../../dd/dad/a00005.php#a059c72982d8075a1e0fcc175461b1430">BDD::insert</a></div><div class="ttdeci">size_t insert(std::string values, std::string args=&quot;&quot;, std::string table=&quot;&quot;)</div><div class="ttdoc">Use of the INSERT in SQL. </div></div>
<div class="ttc" id="a00005_php_a1c3535db0b4aa44778421c5f35c379ff"><div class="ttname"><a href="../../dd/dad/a00005.php#a1c3535db0b4aa44778421c5f35c379ff">BDD::setFatal</a></div><div class="ttdeci">void setFatal(bool state)</div><div class="ttdoc">Set if an error is fatal or just like a warning. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00218">bdd.hpp:218</a></div></div>
<div class="ttc" id="a00005_php_a9a035bbfa977617239704b3d33c4c5ac"><div class="ttname"><a href="../../dd/dad/a00005.php#a9a035bbfa977617239704b3d33c4c5ac">BDD::lastId</a></div><div class="ttdeci">size_t lastId()</div><div class="ttdoc">Get the last created id in the table. </div></div>
<div class="ttc" id="a00067_php"><div class="ttname"><a href="../../dc/ddf/a00067.php">errors.hpp</a></div></div>
<div class="ttc" id="a00054_php_acb7362a3fb715f64e5ab3cd50794a52c"><div class="ttname"><a href="../../d1/dea/a00054.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a></div><div class="ttdeci">std::vector&lt; std::map&lt; std::string, std::string &gt;&gt; ColsArray</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00027">bdd.hpp:27</a></div></div>
<div class="ttc" id="a00054_php_a36ce5024f17ad7e4a5b2eff31629cd5c"><div class="ttname"><a href="../../d1/dea/a00054.php#a36ce5024f17ad7e4a5b2eff31629cd5c">bdd</a></div><div class="ttdeci">BDD bdd</div><div class="ttdoc">A global bdd variable to connect to a database. </div></div>
<div class="ttc" id="a00005_php_a006fc2acc34962ebafb9ce19640ad18b"><div class="ttname"><a href="../../dd/dad/a00005.php#a006fc2acc34962ebafb9ce19640ad18b">BDD::exists</a></div><div class="ttdeci">bool exists(std::string task, std::string table=&quot;&quot;)</div><div class="ttdoc">Verify if something exist in the bdd. </div></div>
<div class="ttc" id="a00005_php_a3a309489e289988579ec94eae459f8df"><div class="ttname"><a href="../../dd/dad/a00005.php#a3a309489e289988579ec94eae459f8df">BDD::formatColumn</a></div><div class="ttdeci">static std::string formatColumn(std::string name)</div><div class="ttdoc">Format a column name for text. </div></div>
<div class="ttc" id="a00081_php"><div class="ttname"><a href="../../d8/d53/a00081.php">pointers.hpp</a></div></div>
<div class="ttc" id="a00005_php_aa6720203c42f48b71f4d9a97f64b687f"><div class="ttname"><a href="../../dd/dad/a00005.php#aa6720203c42f48b71f4d9a97f64b687f">BDD::setTable</a></div><div class="ttdeci">bool setTable(std::string table)</div><div class="ttdoc">Choose the table to simplify the others functions. </div></div>
<div class="ttc" id="a00005_php_ae9ad54a4e2ca989e1f22dc497db4b43e"><div class="ttname"><a href="../../dd/dad/a00005.php#ae9ad54a4e2ca989e1f22dc497db4b43e">BDD::getCount</a></div><div class="ttdeci">size_t getCount(std::string table=&quot;&quot;, std::string conditions=&quot;&quot;)</div><div class="ttdoc">Get the number of lines with the conditions. </div></div>
<div class="ttc" id="a00005_php_a14ed61f03ce957690801dcc27e59930a"><div class="ttname"><a href="../../dd/dad/a00005.php#a14ed61f03ce957690801dcc27e59930a">BDD::setDatabase</a></div><div class="ttdeci">bool setDatabase(std::string database)</div><div class="ttdoc">Connection to the database. </div></div>
<div class="ttc" id="a00005_php_a57fd2669fe6febe24cde0db73b5a438f"><div class="ttname"><a href="../../dd/dad/a00005.php#a57fd2669fe6febe24cde0db73b5a438f">BDD::applyForEach</a></div><div class="ttdeci">void applyForEach(Func &amp;&amp;f, C obj, std::string table, Args &amp;&amp;...args)</div><div class="ttdoc">Run an object method for each column of the table. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00229">bdd.hpp:229</a></div></div>
<div class="ttc" id="a00005_php_ac02190012120478141702fb616c89ab1"><div class="ttname"><a href="../../dd/dad/a00005.php#ac02190012120478141702fb616c89ab1">BDD::tables</a></div><div class="ttdeci">ListArray tables()</div><div class="ttdoc">Get all the tables of the database. </div></div>
<div class="ttc" id="a00054_php_a6b6679f15a22e0f89297978d24dec56e"><div class="ttname"><a href="../../d1/dea/a00054.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt;&gt; ListArray</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/dea/a00054_source.php#l00029">bdd.hpp:29</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d1/dea/a00054.php">bdd.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
