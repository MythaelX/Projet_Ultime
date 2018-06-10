<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: class-Head_Creator.php Source File</title>
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
$(document).ready(function(){initNavTree('d1/d2b/a00018_source.php','../../');});
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
<div class="title">class-Head_Creator.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/d2b/a00018.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div><div class="line"><a name="l00013"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php">   13</a></span>&#160;    <span class="keyword">class </span><a class="code" href="../../dd/dad/a00005.php">Head_Creator</a>{</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;        <span class="keyword">private</span> $_head;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;        <span class="keyword">private</span> $_path;</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a5ded9c06403143740e1488cb0484ce75">   18</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#a5ded9c06403143740e1488cb0484ce75">__construct</a>($path, $session = 1){</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;            $this-&gt;_head = <span class="stringliteral">&quot;&quot;</span>;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;            $this-&gt;_path = <span class="stringliteral">&quot;./&quot;</span>;</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;            <span class="keywordflow">if</span>($session){</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;                $this-&gt;startSession();</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;            }</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;            $this-&gt;_head = <span class="stringliteral">&quot;&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n\t&lt;head&gt;\n&quot;</span></div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;                         . <span class="stringliteral">&quot;\t\t&lt;base href=\&quot;&quot;</span> . $path . <span class="stringliteral">&quot;\&quot; target=\&quot;_blank\&quot; /&gt;\n&quot;</span></div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;                         . <span class="stringliteral">&quot;\t\t&lt;meta name=\&quot;viewport\&quot; content=\&quot;width=device-width, initial-scale=1\&quot;&gt;\n&quot;</span>;</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;        }</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a2b8e3779f5bd8c38f70307574859bd36">   34</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#a2b8e3779f5bd8c38f70307574859bd36">show</a>(){</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;            echo $this-&gt;_head;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;        }</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div><div class="line"><a name="l00039"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#ac33ee765f5ad9f134540bac393721cfe">   39</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <span class="keyword">get</span>(){</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;            <span class="keywordflow">return</span> $this-&gt;_head;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        }</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a30c5c67b2bf8e2e2ccc7e361faa20afe">   44</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#a30c5c67b2bf8e2e2ccc7e361faa20afe">getPath</a>(){</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;            <span class="keywordflow">return</span> $this-&gt;_path;</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;        }</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00049"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a430a3789448e01e6065f8e333cb1b125">   49</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#a430a3789448e01e6065f8e333cb1b125">head_charset</a>($charset){</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;meta charset=\&quot;$charset\&quot; /&gt;\n&quot;</span>;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;        }</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#aa43c80f5f1a78836df5a420c19039ae2">   54</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#aa43c80f5f1a78836df5a420c19039ae2">head_title</a>($title){</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;title&gt;$title&lt;/title&gt;\n&quot;</span>;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;        }</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div><div class="line"><a name="l00059"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a188aa00aa6a06c372d127766263475f6">   59</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#a188aa00aa6a06c372d127766263475f6">head_style</a>($style, $media = <span class="stringliteral">&quot;all&quot;</span>){</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;link rel=\&quot;&quot;</span>;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;            <span class="keywordflow">if</span>(strpos($style, <span class="stringliteral">&quot;less&quot;</span>)){</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;                $this-&gt;_head .= <span class="stringliteral">&quot;stylesheet/less&quot;</span>;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;            } <span class="keywordflow">else</span> {</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;                $this-&gt;_head .= <span class="stringliteral">&quot;stylesheet&quot;</span>;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;            }</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\&quot; type=\&quot;text/css\&quot; media=\&quot;$media\&quot; href=\&quot;&quot;</span>;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;            <span class="keywordflow">if</span>(strpos($style, <span class="stringliteral">&quot;http&quot;</span>) === <span class="keyword">false</span>){</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;                $this-&gt;_head .= $this-&gt;_path;</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;            }</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;$style\&quot; /&gt;\n&quot;</span>;</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;        }</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#a08c1d01593bf0932c7b145bf400c6741">   78</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#a08c1d01593bf0932c7b145bf400c6741">head_icon</a>($logo){</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;link rel=\&quot;icon\&quot; type=\&quot;image/png\&quot; href=\&quot;&quot;</span> . $this-&gt;_path . <span class="stringliteral">&quot;$logo\&quot; /&gt;\n&quot;</span>;</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;        }</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;</div><div class="line"><a name="l00083"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#ae78d4883da66be1886478e16d7a49f44">   83</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#ae78d4883da66be1886478e16d7a49f44">head_script</a>($script, $async=<span class="keyword">false</span>, $defer=<span class="keyword">true</span>){</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;script src=\&quot;&quot;</span>;</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;            <span class="keywordflow">if</span>(strpos($script, <span class="stringliteral">&quot;http&quot;</span>) === <span class="keyword">false</span>){</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;                $this-&gt;_head .= $this-&gt;_path;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;            }</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;$script\&quot; type=\&quot;text/javascript\&quot; &quot;</span>;</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;            <span class="keywordflow">if</span>($async){</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;                $this-&gt;_head .= <span class="stringliteral">&quot;async&quot;</span>;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;            }</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot; &quot;</span>;</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;            <span class="keywordflow">if</span>($defer){</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;                $this-&gt;_head .= <span class="stringliteral">&quot;defer&quot;</span>;</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;            }</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;&gt;&lt;/script&gt;\n&quot;</span>;</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;        }</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div><div class="line"><a name="l00106"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#aa898558bc0d0266e506d7bec663f0006">  106</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#aa898558bc0d0266e506d7bec663f0006">head_ownScript</a>($script, $async=<span class="keyword">false</span>, $defer=<span class="keyword">true</span>){</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;script type=\&quot;text/javascript\&quot; &quot;</span>;</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;            <span class="keywordflow">if</span>($async){</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;                $this-&gt;_head .= <span class="stringliteral">&quot;async&quot;</span>;</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;            }</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot; &quot;</span>;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;            <span class="keywordflow">if</span>($defer){</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;                $this-&gt;_head .= <span class="stringliteral">&quot;defer&quot;</span>;</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;            }</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;&gt;$script&lt;/script&gt;\n&quot;</span>;</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;        }</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;</div><div class="line"><a name="l00123"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#ab0bc446a7c2066d231e70c4f80cf6295">  123</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#ab0bc446a7c2066d231e70c4f80cf6295">head_keywords</a>($keywords, $lang = <span class="stringliteral">&quot;fr&quot;</span>){</div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;meta name=\&quot;keywords\&quot; lang=\&quot;$lang\&quot; content=\&quot;$keywords\&quot; /&gt;\n&quot;</span>;</div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;        }</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;</div><div class="line"><a name="l00128"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#ae98e3c53d7591af4c2f364e35036b9cf">  128</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#ae98e3c53d7591af4c2f364e35036b9cf">head_description</a>($description){</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;meta name=\&quot;description\&quot; content=\&quot;$description\&quot; /&gt;\n&quot;</span>;</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;        }</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;</div><div class="line"><a name="l00133"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#ae6cf60b35b43af81291f4d94d6f0ca23">  133</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#ae6cf60b35b43af81291f4d94d6f0ca23">head_language</a>($lang){</div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;meta http-equiv=\&quot;Content-Language\&quot; content=\&quot;$lang\&quot; /&gt;\n&quot;</span>;</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;        }</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;</div><div class="line"><a name="l00138"></a><span class="lineno"><a class="line" href="../../dd/dad/a00005.php#aa95ce8d212ecc24430742654778db708">  138</a></span>&#160;        <span class="keyword">public</span> <span class="keyword">function</span> <a class="code" href="../../dd/dad/a00005.php#aa95ce8d212ecc24430742654778db708">head_author</a>($author, $lang = <span class="stringliteral">&quot;fr&quot;</span>){</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;            $this-&gt;_head .= <span class="stringliteral">&quot;\t\t&lt;meta name=\&quot;author\&quot; lang=\&quot;$lang\&quot; content=\&quot;$author\&quot; /&gt;\n&quot;</span>;</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;        }</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;        <span class="keyword">private</span> <span class="keyword">function</span> startSession(){</div><div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;            session_start();</div><div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;        }</div><div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;    }</div><div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;?&gt;</div><div class="ttc" id="a00005_php_aa898558bc0d0266e506d7bec663f0006"><div class="ttname"><a href="../../dd/dad/a00005.php#aa898558bc0d0266e506d7bec663f0006">Head_Creator\head_ownScript</a></div><div class="ttdeci">head_ownScript($script, $async=false, $defer=true)</div><div class="ttdoc">Definition of a JavaScript tag with JS source code. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00106">class-Head_Creator.php:106</a></div></div>
<div class="ttc" id="a00005_php"><div class="ttname"><a href="../../dd/dad/a00005.php">Head_Creator</a></div><div class="ttdoc">A class to create the html head of a page. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00013">class-Head_Creator.php:13</a></div></div>
<div class="ttc" id="a00005_php_a430a3789448e01e6065f8e333cb1b125"><div class="ttname"><a href="../../dd/dad/a00005.php#a430a3789448e01e6065f8e333cb1b125">Head_Creator\head_charset</a></div><div class="ttdeci">head_charset($charset)</div><div class="ttdoc">Definition of the charset. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00049">class-Head_Creator.php:49</a></div></div>
<div class="ttc" id="a00005_php_ab0bc446a7c2066d231e70c4f80cf6295"><div class="ttname"><a href="../../dd/dad/a00005.php#ab0bc446a7c2066d231e70c4f80cf6295">Head_Creator\head_keywords</a></div><div class="ttdeci">head_keywords($keywords, $lang=&quot;fr&quot;)</div><div class="ttdoc">Definition of the page keywords. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00123">class-Head_Creator.php:123</a></div></div>
<div class="ttc" id="a00005_php_ae98e3c53d7591af4c2f364e35036b9cf"><div class="ttname"><a href="../../dd/dad/a00005.php#ae98e3c53d7591af4c2f364e35036b9cf">Head_Creator\head_description</a></div><div class="ttdeci">head_description($description)</div><div class="ttdoc">Definition of the page description. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00128">class-Head_Creator.php:128</a></div></div>
<div class="ttc" id="a00005_php_a30c5c67b2bf8e2e2ccc7e361faa20afe"><div class="ttname"><a href="../../dd/dad/a00005.php#a30c5c67b2bf8e2e2ccc7e361faa20afe">Head_Creator\getPath</a></div><div class="ttdeci">getPath()</div><div class="ttdoc">Recovery of the saved path. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00044">class-Head_Creator.php:44</a></div></div>
<div class="ttc" id="a00005_php_ae6cf60b35b43af81291f4d94d6f0ca23"><div class="ttname"><a href="../../dd/dad/a00005.php#ae6cf60b35b43af81291f4d94d6f0ca23">Head_Creator\head_language</a></div><div class="ttdeci">head_language($lang)</div><div class="ttdoc">Definition of the page language. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00133">class-Head_Creator.php:133</a></div></div>
<div class="ttc" id="a00005_php_a2b8e3779f5bd8c38f70307574859bd36"><div class="ttname"><a href="../../dd/dad/a00005.php#a2b8e3779f5bd8c38f70307574859bd36">Head_Creator\show</a></div><div class="ttdeci">show()</div><div class="ttdoc">Show the head tag. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00034">class-Head_Creator.php:34</a></div></div>
<div class="ttc" id="a00005_php_a188aa00aa6a06c372d127766263475f6"><div class="ttname"><a href="../../dd/dad/a00005.php#a188aa00aa6a06c372d127766263475f6">Head_Creator\head_style</a></div><div class="ttdeci">head_style($style, $media=&quot;all&quot;)</div><div class="ttdoc">Definition of a style tag to a stylesheet. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00059">class-Head_Creator.php:59</a></div></div>
<div class="ttc" id="a00005_php_a08c1d01593bf0932c7b145bf400c6741"><div class="ttname"><a href="../../dd/dad/a00005.php#a08c1d01593bf0932c7b145bf400c6741">Head_Creator\head_icon</a></div><div class="ttdeci">head_icon($logo)</div><div class="ttdoc">Definition of the page icon. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00078">class-Head_Creator.php:78</a></div></div>
<div class="ttc" id="a00005_php_aa43c80f5f1a78836df5a420c19039ae2"><div class="ttname"><a href="../../dd/dad/a00005.php#aa43c80f5f1a78836df5a420c19039ae2">Head_Creator\head_title</a></div><div class="ttdeci">head_title($title)</div><div class="ttdoc">Definition of the page title. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00054">class-Head_Creator.php:54</a></div></div>
<div class="ttc" id="a00005_php_aa95ce8d212ecc24430742654778db708"><div class="ttname"><a href="../../dd/dad/a00005.php#aa95ce8d212ecc24430742654778db708">Head_Creator\head_author</a></div><div class="ttdeci">head_author($author, $lang=&quot;fr&quot;)</div><div class="ttdoc">Definition of the page author. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00138">class-Head_Creator.php:138</a></div></div>
<div class="ttc" id="a00005_php_a5ded9c06403143740e1488cb0484ce75"><div class="ttname"><a href="../../dd/dad/a00005.php#a5ded9c06403143740e1488cb0484ce75">Head_Creator\__construct</a></div><div class="ttdeci">__construct($path, $session=1)</div><div class="ttdoc">Class constructor. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00018">class-Head_Creator.php:18</a></div></div>
<div class="ttc" id="a00005_php_ae78d4883da66be1886478e16d7a49f44"><div class="ttname"><a href="../../dd/dad/a00005.php#ae78d4883da66be1886478e16d7a49f44">Head_Creator\head_script</a></div><div class="ttdeci">head_script($script, $async=false, $defer=true)</div><div class="ttdoc">Definition of a script tag to a javaScript file. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d2b/a00018_source.php#l00083">class-Head_Creator.php:83</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_05194b7bb14e4bdbd759acf3e4294839.php">php</a></li><li class="navelem"><a class="el" href="../../dir_272b8c85f84b9c47a49e8b7a9d6744ed.php">bases</a></li><li class="navelem"><a class="el" href="../../d1/d2b/a00018.php">class-Head_Creator.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
