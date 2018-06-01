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
<a href="../../db/d3a/a00040.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_BDD</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_BDD</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;cppconn/driver.h&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;cppconn/exception.h&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;cppconn/resultset.h&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#include &lt;cppconn/statement.h&gt;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;mutex&gt;</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d6e/a00073.php">types.hpp</a>&quot;</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/d79/a00051.php">errors.hpp</a>&quot;</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../df/d5f/a00064.php">pointers.hpp</a>&quot;</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/db1/a00070.php">string.hpp</a>&quot;</span></div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d3/de7/a00039.php">array.hpp</a>&quot;</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div><div class="line"><a name="l00040"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php">   40</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dd/dad/a00005.php">BDD</a> {</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;        <span class="comment">/* Constructor et Destroyer */</span></div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;        <a class="code" href="../../dd/dad/a00005.php#abc551344b2e136090b8d2d82ab6ff0f2">BDD</a>();</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;        <a class="code" href="../../dd/dad/a00005.php#a865c7d7590e1c3f227346b1045713099">~BDD</a>();</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a786ee3b78b40472d4a547263a2e583fa">setDatabase</a>(std::string database);</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#afd2408212ec7516e6f6234395bb4b48e">setTable</a>(std::string table);</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;            sql::ResultSet* <a class="code" href="../../dd/dad/a00005.php#a9d8f1885fa2114dd0fa34c13e4e99a5c">query</a>(std::string task);</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;            std::vector&lt;std::vector&lt;std::string&gt;&gt; <a class="code" href="../../dd/dad/a00005.php#a15f69ee85ca2665b59c1c0c6f4562b91">list</a>(std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#ad08567615df2acb02c83690050a872d9">insert</a>(std::string values, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a9635488b6707d5dd16c669c9ca967716">update</a>(std::string values, std::string conditions, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;            <span class="keywordtype">void</span> <span class="keyword">remove</span>(std::string condition, std::string args = <span class="stringliteral">&quot;&quot;</span>, std::string table = <span class="stringliteral">&quot;&quot;</span>);</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#ad1c844ddb0d47a2f698942b640853274">connect</a>(std::string url, std::string user, std::string pass);</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div><div class="line"><a name="l00119"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">  119</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">debug</a>(){ m_debug = <span class="keyword">true</span>; }</div><div class="line"><a name="l00121"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">  121</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">undebug</a>(){ m_debug = <span class="keyword">false</span>; }</div><div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../dd/dad/a00005.php#a686232a011e8b4552e00cdcea1bf8b66">formatValues</a>(std::string&amp; values);</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;        std::string url;</div><div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;        std::string user;</div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;        std::string pass;</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;        sql::Driver *driver;</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;        sql::Connection *con;</div><div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;        sql::Statement *stmt;</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;        sql::ResultSet *res;</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;        std::string table;</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;        <span class="keywordtype">bool</span> connected;</div><div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;        <span class="keywordtype">bool</span> databased;</div><div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div><div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;        std::mutex mutex;</div><div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div><div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;        <span class="keywordtype">bool</span> m_debug;</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;};</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;</div><div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;<span class="keyword">extern</span> <a class="code" href="../../dd/dad/a00005.php">BDD</a> <a class="code" href="../../db/d3a/a00040.php#a36ce5024f17ad7e4a5b2eff31629cd5c">bdd</a>;</div><div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div><div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;<span class="preprocessor">#endif //HEADER_BDD</span></div><div class="ttc" id="a00005_php_ad1c844ddb0d47a2f698942b640853274"><div class="ttname"><a href="../../dd/dad/a00005.php#ad1c844ddb0d47a2f698942b640853274">BDD::connect</a></div><div class="ttdeci">void connect(std::string url, std::string user, std::string pass)</div><div class="ttdoc">Connection to a bdd. </div></div>
<div class="ttc" id="a00005_php_a9d8f1885fa2114dd0fa34c13e4e99a5c"><div class="ttname"><a href="../../dd/dad/a00005.php#a9d8f1885fa2114dd0fa34c13e4e99a5c">BDD::query</a></div><div class="ttdeci">sql::ResultSet * query(std::string task)</div><div class="ttdoc">Query the task to the database. </div></div>
<div class="ttc" id="a00005_php_afd2408212ec7516e6f6234395bb4b48e"><div class="ttname"><a href="../../dd/dad/a00005.php#afd2408212ec7516e6f6234395bb4b48e">BDD::setTable</a></div><div class="ttdeci">void setTable(std::string table)</div><div class="ttdoc">Choose the table to simplify the others functions. </div></div>
<div class="ttc" id="a00005_php_a686232a011e8b4552e00cdcea1bf8b66"><div class="ttname"><a href="../../dd/dad/a00005.php#a686232a011e8b4552e00cdcea1bf8b66">BDD::formatValues</a></div><div class="ttdeci">void formatValues(std::string &amp;values)</div><div class="ttdoc">Format the values string. </div></div>
<div class="ttc" id="a00005_php_a9635488b6707d5dd16c669c9ca967716"><div class="ttname"><a href="../../dd/dad/a00005.php#a9635488b6707d5dd16c669c9ca967716">BDD::update</a></div><div class="ttdeci">void update(std::string values, std::string conditions, std::string args=&quot;&quot;, std::string table=&quot;&quot;)</div><div class="ttdoc">Use of the UPDATE in SQL. </div></div>
<div class="ttc" id="a00005_php"><div class="ttname"><a href="../../dd/dad/a00005.php">BDD</a></div><div class="ttdoc">A class to connect to a BDD. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/d3a/a00040_source.php#l00040">bdd.hpp:40</a></div></div>
<div class="ttc" id="a00039_php"><div class="ttname"><a href="../../d3/de7/a00039.php">array.hpp</a></div></div>
<div class="ttc" id="a00051_php"><div class="ttname"><a href="../../d2/d79/a00051.php">errors.hpp</a></div></div>
<div class="ttc" id="a00064_php"><div class="ttname"><a href="../../df/d5f/a00064.php">pointers.hpp</a></div></div>
<div class="ttc" id="a00005_php_a962782dc60b83f30a7ec387e0747178d"><div class="ttname"><a href="../../dd/dad/a00005.php#a962782dc60b83f30a7ec387e0747178d">BDD::undebug</a></div><div class="ttdeci">void undebug()</div><div class="ttdoc">Stop the debug for the class. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/d3a/a00040_source.php#l00121">bdd.hpp:121</a></div></div>
<div class="ttc" id="a00005_php_a280bf2b854a6a0e3a573fbd7c96c84c2"><div class="ttname"><a href="../../dd/dad/a00005.php#a280bf2b854a6a0e3a573fbd7c96c84c2">BDD::debug</a></div><div class="ttdeci">void debug()</div><div class="ttdoc">Start the debug for the class. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/d3a/a00040_source.php#l00119">bdd.hpp:119</a></div></div>
<div class="ttc" id="a00005_php_a865c7d7590e1c3f227346b1045713099"><div class="ttname"><a href="../../dd/dad/a00005.php#a865c7d7590e1c3f227346b1045713099">BDD::~BDD</a></div><div class="ttdeci">~BDD()</div></div>
<div class="ttc" id="a00005_php_abc551344b2e136090b8d2d82ab6ff0f2"><div class="ttname"><a href="../../dd/dad/a00005.php#abc551344b2e136090b8d2d82ab6ff0f2">BDD::BDD</a></div><div class="ttdeci">BDD()</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00070_php"><div class="ttname"><a href="../../d2/db1/a00070.php">string.hpp</a></div></div>
<div class="ttc" id="a00073_php"><div class="ttname"><a href="../../d1/d6e/a00073.php">types.hpp</a></div></div>
<div class="ttc" id="a00005_php_ad08567615df2acb02c83690050a872d9"><div class="ttname"><a href="../../dd/dad/a00005.php#ad08567615df2acb02c83690050a872d9">BDD::insert</a></div><div class="ttdeci">void insert(std::string values, std::string args=&quot;&quot;, std::string table=&quot;&quot;)</div><div class="ttdoc">Use of the INSERT in SQL. </div></div>
<div class="ttc" id="a00040_php_a36ce5024f17ad7e4a5b2eff31629cd5c"><div class="ttname"><a href="../../db/d3a/a00040.php#a36ce5024f17ad7e4a5b2eff31629cd5c">bdd</a></div><div class="ttdeci">BDD bdd</div><div class="ttdoc">A global bdd variable to connect to a database. </div></div>
<div class="ttc" id="a00005_php_a15f69ee85ca2665b59c1c0c6f4562b91"><div class="ttname"><a href="../../dd/dad/a00005.php#a15f69ee85ca2665b59c1c0c6f4562b91">BDD::list</a></div><div class="ttdeci">std::vector&lt; std::vector&lt; std::string &gt; &gt; list(std::string table=&quot;&quot;)</div><div class="ttdoc">List the content of the given table. </div></div>
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