<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: convert.hpp Source File</title>
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
   <div id="projectname">C++
   &#160;<span id="projectnumber">1.0</span>
   </div>
   <div id="projectbrief">My own functions in C++</div>
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
$(document).ready(function(){initNavTree('d3/de7/a00039_source.php','../../');});
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
<div class="title">convert.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d3/de7/a00039.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_CONVERT</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_CONVERT</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;sstream&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#include &lt;algorithm&gt;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#include &lt;numeric&gt;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &lt;type_traits&gt;</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="keyword">typename</span> std::enable_if&lt;</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;    std::is_enum&lt;V&gt;::value,</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;    std::string</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;&gt;::type</div><div class="line"><a name="l00029"></a><span class="lineno"><a class="line" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">   29</a></span>&#160;<a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(V in){</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;    std::stringstream out;</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;    out &lt;&lt; static_cast&lt;typename std::underlying_type&lt;V&gt;::type&gt;(in);</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;    <span class="keywordflow">return</span> out.str();</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;}</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">typename</span> std::enable_if&lt;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    !std::is_enum&lt;V&gt;::value,</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;    std::string</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;&gt;::type</div><div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="../../d3/de7/a00039.php#a78b4ad7bc552ad244dec369856aa8d91">   48</a></span>&#160;<a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(V in){</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    std::stringstream out;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    out &lt;&lt; in;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;    <span class="keywordflow">return</span> out.str();</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;}</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00063"></a><span class="lineno"><a class="line" href="../../d3/de7/a00039.php#a0de9d90c31d0a16f1d173f84be9e091a">   63</a></span>&#160;<span class="keywordtype">int</span> <a class="code" href="../../d3/de7/a00039.php#a0de9d90c31d0a16f1d173f84be9e091a">toi</a>(V in) {</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    std::stringstream tmp;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <span class="keywordtype">int</span> out;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    tmp &lt;&lt; <a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(in);</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    tmp &gt;&gt; out;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;}</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00080"></a><span class="lineno"><a class="line" href="../../d3/de7/a00039.php#a2432d9eaa9d57e487a6813a01993e8ef">   80</a></span>&#160;<span class="keywordtype">double</span> <a class="code" href="../../d3/de7/a00039.php#a2432d9eaa9d57e487a6813a01993e8ef">tod</a>(V in) {</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    std::stringstream tmp;</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;    <span class="keywordtype">double</span> out;</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;    tmp &lt;&lt; <a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(in);</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    tmp &gt;&gt; out;</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;}</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00097"></a><span class="lineno"><a class="line" href="../../d3/de7/a00039.php#a28ef26e9e217e572497d67676081f08e">   97</a></span>&#160;<span class="keywordtype">float</span> <a class="code" href="../../d3/de7/a00039.php#a28ef26e9e217e572497d67676081f08e">tof</a>(V in) {</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    std::stringstream tmp;</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;    <span class="keywordtype">float</span> out;</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;    tmp &lt;&lt; <a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(in);</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    tmp &gt;&gt; out;</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;}</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00114"></a><span class="lineno"><a class="line" href="../../d3/de7/a00039.php#a046732bd284eb239dc2eda5a92a17681">  114</a></span>&#160;<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="../../d3/de7/a00039.php#a046732bd284eb239dc2eda5a92a17681">tou</a>(V in) {</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;    std::stringstream tmp;</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> out;</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;    tmp &lt;&lt; <a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(in);</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;    tmp &gt;&gt; out;</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;}</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00131"></a><span class="lineno"><a class="line" href="../../d3/de7/a00039.php#aa70ef73b7fa30f68e3f14a6b60de10eb">  131</a></span>&#160;<span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <span class="keywordtype">long</span> <span class="keywordtype">int</span> <a class="code" href="../../d3/de7/a00039.php#aa70ef73b7fa30f68e3f14a6b60de10eb">tov</a>(V in) {</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;    std::stringstream tmp;</div><div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <span class="keywordtype">long</span> <span class="keywordtype">int</span> out;</div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;    tmp &lt;&lt; <a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(in);</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;    tmp &gt;&gt; out;</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;</div><div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;}</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;</div><div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">typename</span> V&gt;</div><div class="line"><a name="l00148"></a><span class="lineno"><a class="line" href="../../d3/de7/a00039.php#a013b8a84340b1ab68401095a566cc0ea">  148</a></span>&#160;<span class="keywordtype">size_t</span> <a class="code" href="../../d3/de7/a00039.php#a013b8a84340b1ab68401095a566cc0ea">tost</a>(V in) {</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;    std::stringstream tmp;</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;    <span class="keywordtype">size_t</span> out;</div><div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;</div><div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;    tmp &lt;&lt; <a class="code" href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a>(in);</div><div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;    tmp &gt;&gt; out;</div><div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;</div><div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;    <span class="keywordflow">return</span> out;</div><div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;}</div><div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div><div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;<span class="preprocessor">#endif //HEADER_CONVERT</span></div><div class="ttc" id="a00039_php_a013b8a84340b1ab68401095a566cc0ea"><div class="ttname"><a href="../../d3/de7/a00039.php#a013b8a84340b1ab68401095a566cc0ea">tost</a></div><div class="ttdeci">size_t tost(V in)</div><div class="ttdoc">Convert in variable in size_t. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/de7/a00039_source.php#l00148">convert.hpp:148</a></div></div>
<div class="ttc" id="a00039_php_a2432d9eaa9d57e487a6813a01993e8ef"><div class="ttname"><a href="../../d3/de7/a00039.php#a2432d9eaa9d57e487a6813a01993e8ef">tod</a></div><div class="ttdeci">double tod(V in)</div><div class="ttdoc">Convert in variable in double. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/de7/a00039_source.php#l00080">convert.hpp:80</a></div></div>
<div class="ttc" id="a00039_php_a0de9d90c31d0a16f1d173f84be9e091a"><div class="ttname"><a href="../../d3/de7/a00039.php#a0de9d90c31d0a16f1d173f84be9e091a">toi</a></div><div class="ttdeci">int toi(V in)</div><div class="ttdoc">Convert in variable in int. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/de7/a00039_source.php#l00063">convert.hpp:63</a></div></div>
<div class="ttc" id="a00039_php_aa70ef73b7fa30f68e3f14a6b60de10eb"><div class="ttname"><a href="../../d3/de7/a00039.php#aa70ef73b7fa30f68e3f14a6b60de10eb">tov</a></div><div class="ttdeci">unsigned long long int tov(V in)</div><div class="ttdoc">Convert in variable in unsigned long long int. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/de7/a00039_source.php#l00131">convert.hpp:131</a></div></div>
<div class="ttc" id="a00039_php_a046732bd284eb239dc2eda5a92a17681"><div class="ttname"><a href="../../d3/de7/a00039.php#a046732bd284eb239dc2eda5a92a17681">tou</a></div><div class="ttdeci">unsigned int tou(V in)</div><div class="ttdoc">Convert in variable in unsigned int. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/de7/a00039_source.php#l00114">convert.hpp:114</a></div></div>
<div class="ttc" id="a00039_php_a28ef26e9e217e572497d67676081f08e"><div class="ttname"><a href="../../d3/de7/a00039.php#a28ef26e9e217e572497d67676081f08e">tof</a></div><div class="ttdeci">float tof(V in)</div><div class="ttdoc">Convert in variable in float. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/de7/a00039_source.php#l00097">convert.hpp:97</a></div></div>
<div class="ttc" id="a00039_php_a09a70dbff0164874fba7fda6d3afd8c7"><div class="ttname"><a href="../../d3/de7/a00039.php#a09a70dbff0164874fba7fda6d3afd8c7">tos</a></div><div class="ttdeci">std::enable_if&lt; std::is_enum&lt; V &gt;::value, std::string &gt;::type tos(V in)</div><div class="ttdoc">Convert an enum in string. </div><div class="ttdef"><b>Definition:</b> <a href="../../d3/de7/a00039_source.php#l00029">convert.hpp:29</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d3/de7/a00039.php">convert.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
