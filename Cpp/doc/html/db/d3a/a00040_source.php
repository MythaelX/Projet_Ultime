<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>ProjetFinalCPP: bdd.hpp Source File</title>
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
   <div id="projectname">ProjetFinalCPP
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
$(document).ready(function(){initNavTree('db/d3a/a00040_source.php','../../');});
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
<a href="../../db/d3a/a00040.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_BDD</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_BDD</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;cppconn/driver.h&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;cppconn/exception.h&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;cppconn/resultset.h&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#include &lt;cppconn/statement.h&gt;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;mutex&gt;</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../db/db6/a00074.php">types.hpp</a>&quot;</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/d79/a00051.php">errors.hpp</a>&quot;</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../df/d5f/a00064.php">pointers.hpp</a>&quot;</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d0/d89/a00071.php">string.hpp</a>&quot;</span></div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d3/de7/a00039.php">array.hpp</a>&quot;</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div><div class="line"><a name="l00026"></a><span class="lineno"><a class="line" href="../../db/d3a/a00040.php#acb7362a3fb715f64e5ab3cd50794a52c">   26</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../db/d3a/a00040.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a> = std::vector&lt;std::map&lt;std::string, std::string&gt;&gt;;</div><div class="line"><a name="l00028"></a><span class="lineno"><a class="line" href="../../db/d3a/a00040.php#a6b6679f15a22e0f89297978d24dec56e">   28</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../db/d3a/a00040.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> = std::vector&lt;std::vector&lt;std::string&gt;&gt;;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php">   45</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dd/dad/a00005.php">BDD</a> {</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;        <span class="comment">/* Constructor et Destroyer */</span></div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;        <a class="code" href="../../dd/dad/a00005.php#aed1a6117c471a7575a224321eaf0dba2">BDD</a>(<span class="keywordtype">bool</span> fatal_error = <span class="keyword">true</span>);</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;        <a class="code" href="../../dd/dad/a00005.php#a865c7d7590e1c3f227346b1045713099">~BDD</a>();</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a786ee3b78b40472d4a547263a2e583fa">setDatabase</a>(std::string database);</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#afa848f628b17ea10115c828e1f97ba5b">try_database</a>(std::string database);</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#afd2408212ec7516e6f6234395bb4b48e">setTable</a>(std::string table);</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;            sql::ResultSet* <a class="code" href="../../dd/dad/a00005.php#a9d8f1885fa2114dd0fa34c13e4e99a5c">query</a>(std::string task);</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;            <a class="code" href="../../db/d3a/a00040.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a> <a class="code" href="../../dd/dad/a00005.php#a624539007ee74764ba5d8f6bb0e7a354">list</a>(std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../dd/dad/a00005.php#a059c72982d8075a1e0fcc175461b1430">insert</a>(std::string values, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a9635488b6707d5dd16c669c9ca967716">update</a>(std::string values, std::string conditions, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;            <span class="keywordtype">void</span> <span class="keyword">remove</span>(std::string condition, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a006fc2acc34962ebafb9ce19640ad18b">exists</a>(std::string task, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div><div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#ad1c844ddb0d47a2f698942b640853274">connect</a>(std::string url, std::string user, std::string pass);</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;</div><div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/dad/a00005.php#a1e496e66cfaf5dc0209f448480bead5e">try_connect</a>(std::string url, std::string user, std::string pass);</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;</div><div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a61fdb222ad3b05fb70a221d78da5a9c9">reset</a>();</div><div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;</div><div class="line"><a name="l00154"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">  154</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">debug</a>(){ m_debug = <span class="keyword">true</span>; }</div><div class="line"><a name="l00156"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">  156</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">undebug</a>(){ m_debug = <span class="keyword">false</span>; }</div><div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div><div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;            <a class="code" href="../../db/d3a/a00040.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a> <a class="code" href="../../dd/dad/a00005.php#a498e375deb333279886dd91cf389c986">getColumns</a>(std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../dd/dad/a00005.php#ae9ad54a4e2ca989e1f22dc497db4b43e">getCount</a>(std::string table = <span class="stringliteral">&quot;&quot;</span>, std::string conditions = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;</div><div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../dd/dad/a00005.php#a9a035bbfa977617239704b3d33c4c5ac">lastId</a>();</div><div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#ac99c0f8c86fab4de2efe6b91b22fb942">formatValues</a>(std::string&amp; values, std::string table);</div><div class="line"><a name="l00195"></a><span class="lineno">  195</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#af8d633320c008fade8c3ee5ff08cc821">formatConditions</a>(std::string&amp; conditions, std::string table);</div><div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a79cffc4dc63f93f9d9fce893c5b66a07">formatBdd</a>(std::vector&lt;std::string&gt;&amp; args);</div><div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;        std::string url;</div><div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;        std::string user;</div><div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;        std::string pass;</div><div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;</div><div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;        sql::Driver *driver;</div><div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;        sql::Connection *con;</div><div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;        sql::Statement *stmt;</div><div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;        sql::ResultSet *res;</div><div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;</div><div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;        std::string table;</div><div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;</div><div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;        <span class="keywordtype">bool</span> connected;</div><div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;        <span class="keywordtype">bool</span> databased;</div><div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;</div><div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;        std::mutex mutex;</div><div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;</div><div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;        <span class="keywordtype">bool</span> m_debug;</div><div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;        <span class="keywordtype">bool</span> fatal_error;</div><div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;};</div><div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;</div><div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;<span class="keyword">extern</span> <a class="code" href="../../dd/dad/a00005.php">BDD</a> <a class="code" href="../../db/d3a/a00040.php#a36ce5024f17ad7e4a5b2eff31629cd5c">bdd</a>;</div><div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;</div><div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;<span class="preprocessor">#endif //HEADER_BDD</span></div><div class="ttc" id="a00071_php"><div class="ttname"><a href="../../d0/d89/a00071.php">string.hpp</a></div></div>
<div class="ttc" id="a00005_php_ad1c844ddb0d47a2f698942b640853274"><div class="ttname"><a href="../../dd/dad/a00005.php#ad1c844ddb0d47a2f698942b640853274">BDD::connect</a></div><div class="ttdeci">void connect(std::string url, std::string user, std::string pass)</div><div class="ttdoc">Connection to a bdd. </div></div>
<div class="ttc" id="a00005_php_a9d8f1885fa2114dd0fa34c13e4e99a5c"><div class="ttname"><a href="../../dd/dad/a00005.php#a9d8f1885fa2114dd0fa34c13e4e99a5c">BDD::query</a></div><div class="ttdeci">sql::ResultSet * query(std::string task)</div><div class="ttdoc">Query the task to the database. </div></div>
<div class="ttc" id="a00005_php_afd2408212ec7516e6f6234395bb4b48e"><div class="ttname"><a href="../../dd/dad/a00005.php#afd2408212ec7516e6f6234395bb4b48e">BDD::setTable</a></div><div class="ttdeci">void setTable(std::string table)</div><div class="ttdoc">Choose the table to simplify the others functions. </div></div>
<div class="ttc" id="a00005_php_a9635488b6707d5dd16c669c9ca967716"><div class="ttname"><a href="../../dd/dad/a00005.php#a9635488b6707d5dd16c669c9ca967716">BDD::update</a></div><div class="ttdeci">void update(std::string values, std::string conditions, std::string args=&quot;&quot;, std::string table=&quot;&quot;)</div><div class="ttdoc">Use of the UPDATE in SQL. </div></div>
<div class="ttc" id="a00005_php"><div class="ttname"><a href="../../dd/dad/a00005.php">BDD</a></div><div class="ttdoc">A class to connect to a BDD. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/d3a/a00040_source.php#l00045">bdd.hpp:45</a></div></div>
<div class="ttc" id="a00005_php_ac99c0f8c86fab4de2efe6b91b22fb942"><div class="ttname"><a href="../../dd/dad/a00005.php#ac99c0f8c86fab4de2efe6b91b22fb942">BDD::formatValues</a></div><div class="ttdeci">void formatValues(std::string &amp;values, std::string table)</div><div class="ttdoc">Format the values string. </div></div>
<div class="ttc" id="a00005_php_a1e496e66cfaf5dc0209f448480bead5e"><div class="ttname"><a href="../../dd/dad/a00005.php#a1e496e66cfaf5dc0209f448480bead5e">BDD::try_connect</a></div><div class="ttdeci">bool try_connect(std::string url, std::string user, std::string pass)</div><div class="ttdoc">Try a connection to a bdd. </div></div>
<div class="ttc" id="a00005_php_a498e375deb333279886dd91cf389c986"><div class="ttname"><a href="../../dd/dad/a00005.php#a498e375deb333279886dd91cf389c986">BDD::getColumns</a></div><div class="ttdeci">ColsArray getColumns(std::string table=&quot;&quot;)</div><div class="ttdoc">Get all the columns of a table with their attributes. </div></div>
<div class="ttc" id="a00074_php"><div class="ttname"><a href="../../db/db6/a00074.php">types.hpp</a></div></div>
<div class="ttc" id="a00039_php"><div class="ttname"><a href="../../d3/de7/a00039.php">array.hpp</a></div></div>
<div class="ttc" id="a00040_php_acb7362a3fb715f64e5ab3cd50794a52c"><div class="ttname"><a href="../../db/d3a/a00040.php#acb7362a3fb715f64e5ab3cd50794a52c">ColsArray</a></div><div class="ttdeci">std::vector&lt; std::map&lt; std::string, std::string &gt;&gt; ColsArray</div><div class="ttdef"><b>Definition:</b> <a href="../../db/d3a/a00040_source.php#l00026">bdd.hpp:26</a></div></div>
<div class="ttc" id="a00005_php_a624539007ee74764ba5d8f6bb0e7a354"><div class="ttname"><a href="../../dd/dad/a00005.php#a624539007ee74764ba5d8f6bb0e7a354">BDD::list</a></div><div class="ttdeci">ListArray list(std::string table=&quot;&quot;)</div><div class="ttdoc">List the content of the given table. </div></div>
<div class="ttc" id="a00005_php_af8d633320c008fade8c3ee5ff08cc821"><div class="ttname"><a href="../../dd/dad/a00005.php#af8d633320c008fade8c3ee5ff08cc821">BDD::formatConditions</a></div><div class="ttdeci">void formatConditions(std::string &amp;conditions, std::string table)</div><div class="ttdoc">Format the conditions string. </div></div>
<div class="ttc" id="a00051_php"><div class="ttname"><a href="../../d2/d79/a00051.php">errors.hpp</a></div></div>
<div class="ttc" id="a00064_php"><div class="ttname"><a href="../../df/d5f/a00064.php">pointers.hpp</a></div></div>
<div class="ttc" id="a00005_php_a962782dc60b83f30a7ec387e0747178d"><div class="ttname"><a href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">BDD::undebug</a></div><div class="ttdeci">void undebug()</div><div class="ttdoc">Stop the debug for the class. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/d3a/a00040_source.php#l00156">bdd.hpp:156</a></div></div>
<div class="ttc" id="a00005_php_a79cffc4dc63f93f9d9fce893c5b66a07"><div class="ttname"><a href="../../dd/dad/a00005.php#a79cffc4dc63f93f9d9fce893c5b66a07">BDD::formatBdd</a></div><div class="ttdeci">void formatBdd(std::vector&lt; std::string &gt; &amp;args)</div><div class="ttdoc">Format values for the bdd. </div></div>
<div class="ttc" id="a00005_php_a280bf2b854a6a0e3a573fbd7c96c84c2"><div class="ttname"><a href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">BDD::debug</a></div><div class="ttdeci">void debug()</div><div class="ttdoc">Start the debug for the class. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/d3a/a00040_source.php#l00154">bdd.hpp:154</a></div></div>
<div class="ttc" id="a00005_php_a865c7d7590e1c3f227346b1045713099"><div class="ttname"><a href="../../dd/dad/a00005.php#a865c7d7590e1c3f227346b1045713099">BDD::~BDD</a></div><div class="ttdeci">~BDD()</div></div>
<div class="ttc" id="a00005_php_aed1a6117c471a7575a224321eaf0dba2"><div class="ttname"><a href="../../dd/dad/a00005.php#aed1a6117c471a7575a224321eaf0dba2">BDD::BDD</a></div><div class="ttdeci">BDD(bool fatal_error=true)</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00005_php_a61fdb222ad3b05fb70a221d78da5a9c9"><div class="ttname"><a href="../../dd/dad/a00005.php#a61fdb222ad3b05fb70a221d78da5a9c9">BDD::reset</a></div><div class="ttdeci">void reset()</div><div class="ttdoc">Reset the object. </div></div>
<div class="ttc" id="a00005_php_afa848f628b17ea10115c828e1f97ba5b"><div class="ttname"><a href="../../dd/dad/a00005.php#afa848f628b17ea10115c828e1f97ba5b">BDD::try_database</a></div><div class="ttdeci">bool try_database(std::string database)</div><div class="ttdoc">Try a connection to the database. </div></div>
<div class="ttc" id="a00005_php_a059c72982d8075a1e0fcc175461b1430"><div class="ttname"><a href="../../dd/dad/a00005.php#a059c72982d8075a1e0fcc175461b1430">BDD::insert</a></div><div class="ttdeci">size_t insert(std::string values, std::string args=&quot;&quot;, std::string table=&quot;&quot;)</div><div class="ttdoc">Use of the INSERT in SQL. </div></div>
<div class="ttc" id="a00005_php_a9a035bbfa977617239704b3d33c4c5ac"><div class="ttname"><a href="../../dd/dad/a00005.php#a9a035bbfa977617239704b3d33c4c5ac">BDD::lastId</a></div><div class="ttdeci">size_t lastId()</div><div class="ttdoc">Get the last created id in the table. </div></div>
<div class="ttc" id="a00005_php_a006fc2acc34962ebafb9ce19640ad18b"><div class="ttname"><a href="../../dd/dad/a00005.php#a006fc2acc34962ebafb9ce19640ad18b">BDD::exists</a></div><div class="ttdeci">bool exists(std::string task, std::string table=&quot;&quot;)</div><div class="ttdoc">Verify if something exist in the bdd. </div></div>
<div class="ttc" id="a00040_php_a36ce5024f17ad7e4a5b2eff31629cd5c"><div class="ttname"><a href="../../db/d3a/a00040.php#a36ce5024f17ad7e4a5b2eff31629cd5c">bdd</a></div><div class="ttdeci">BDD bdd</div><div class="ttdoc">A global bdd variable to connect to a database. </div></div>
<div class="ttc" id="a00005_php_ae9ad54a4e2ca989e1f22dc497db4b43e"><div class="ttname"><a href="../../dd/dad/a00005.php#ae9ad54a4e2ca989e1f22dc497db4b43e">BDD::getCount</a></div><div class="ttdeci">size_t getCount(std::string table=&quot;&quot;, std::string conditions=&quot;&quot;)</div><div class="ttdoc">Get the number of lines with the conditions. </div></div>
<div class="ttc" id="a00040_php_a6b6679f15a22e0f89297978d24dec56e"><div class="ttname"><a href="../../db/d3a/a00040.php#a6b6679f15a22e0f89297978d24dec56e">ListArray</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt;&gt; ListArray</div><div class="ttdef"><b>Definition:</b> <a href="../../db/d3a/a00040_source.php#l00028">bdd.hpp:28</a></div></div>
<div class="ttc" id="a00005_php_a786ee3b78b40472d4a547263a2e583fa"><div class="ttname"><a href="../../dd/dad/a00005.php#a786ee3b78b40472d4a547263a2e583fa">BDD::setDatabase</a></div><div class="ttdeci">void setDatabase(std::string database)</div><div class="ttdoc">Connection to the database. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../db/d3a/a00040.php">bdd.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
