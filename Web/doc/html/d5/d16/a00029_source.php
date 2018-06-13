<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: files.php Source File</title>
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
$(document).ready(function(){initNavTree('d5/d16/a00029_source.php','../../');});
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
<div class="title">files.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d5/d16/a00029.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div><div class="line"><a name="l00015"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#acb0efa95907a3a4868eebcdb960143e6">   15</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d5/d16/a00029.php#acb0efa95907a3a4868eebcdb960143e6">createDir</a>($path, $recurs = <span class="keyword">true</span>){</div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;        <span class="keywordflow">try</span> {</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;            mkdir($path, 0777, $recurs);</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;        } <span class="keywordflow">catch</span>(Exception $e){</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;            error_log(<span class="stringliteral">&quot;Error : Impossible to create the folder(s) -&gt; &quot;</span> . $e-&gt;getMessage());</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;        }</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;    }</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;</div><div class="line"><a name="l00028"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a813a54acf7a62363dfa223e6b172b1c9">   28</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d5/d16/a00029.php#a813a54acf7a62363dfa223e6b172b1c9">deleteFile</a>($path){</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;        <span class="keywordflow">if</span>(file_exists($path)){</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;            <span class="keywordflow">if</span>(!is_dir($path)){</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;                <span class="keywordflow">if</span>(!unlink($path)){</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;                    error_log(<span class="stringliteral">&quot;Impossible to delete the file &#39;&quot;</span> . $path . <span class="stringliteral">&quot;&#39;. Verify your rights in the folder&quot;</span>);</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;                }</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;            } <span class="keywordflow">else</span> {</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;                <span class="keywordflow">if</span>(!rmdir($path)){</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;                    error_log(<span class="stringliteral">&quot;Impossible to delete the folder &#39;&quot;</span> . $path . <span class="stringliteral">&quot;&#39;. Verify if the folder is empty or your rights on the folder&quot;</span>);</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;                }</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;            }</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;        } <span class="keywordflow">else</span> {</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;            error_log(<span class="stringliteral">&quot;Impossible to delete the file &#39;&quot;</span> . $path . <span class="stringliteral">&quot;&#39;. The file doesn&#39;t exists, verify the path&quot;</span>);</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        }</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;    }</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a7fc3f2f4db9af0955fcc004c4bf83a24">   51</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d5/d16/a00029.php#a7fc3f2f4db9af0955fcc004c4bf83a24">saveFileTo</a>($FILE, $folder, $name=<span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;        <span class="keywordflow">if</span>(!is_dir($folder)){</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;            error_log(<span class="stringliteral">&quot;The given folder &#39;&quot;</span> . $folder . <span class="stringliteral">&quot;&#39; is not a useable directory&quot;</span>);</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;            <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;        }</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;        <span class="keywordflow">switch</span>($FILE[<span class="stringliteral">&quot;error&quot;</span>]){</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;            <span class="keywordflow">case</span> UPLOAD_ERR_NO_FILE:</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;                error_log(<span class="stringliteral">&quot;The file &#39;&quot;</span> . $FILE[<span class="stringliteral">&quot;name&quot;</span>] . <span class="stringliteral">&quot;&#39; is missing&quot;</span>);</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;                <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;                <span class="keywordflow">break</span>;</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;            <span class="keywordflow">case</span> UPLOAD_ERR_INI_SIZE:</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;                error_log(<span class="stringliteral">&quot;The file &#39;&quot;</span> . $FILE[<span class="stringliteral">&quot;name&quot;</span>] . <span class="stringliteral">&quot;&#39; is too big for PHP : &quot;</span> . $FILE[<span class="stringliteral">&quot;size&quot;</span>] . <span class="stringliteral">&quot; byts&quot;</span>);</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;                <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;                <span class="keywordflow">break</span>;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;            <span class="keywordflow">case</span> UPLOAD_ERR_FORM_SIZE:</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;                error_log(<span class="stringliteral">&quot;The file &#39;&quot;</span> . $FILE[<span class="stringliteral">&quot;name&quot;</span>] . <span class="stringliteral">&quot;&#39; is too big as said by the sender form : &quot;</span> . $FILE[<span class="stringliteral">&quot;size&quot;</span>] . <span class="stringliteral">&quot;byts&quot;</span>);</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;                <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;                <span class="keywordflow">break</span>;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;            <span class="keywordflow">case</span> UPLOAD_ERR_PARTIAL:</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;                error_log(<span class="stringliteral">&quot;The file &#39;&quot;</span> . $FILE[<span class="stringliteral">&quot;name&quot;</span>] . <span class="stringliteral">&quot;&#39; has been partially transfered&quot;</span>);</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;                <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;                <span class="keywordflow">break</span>;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;        }</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;        <span class="keywordflow">if</span>($name === <span class="stringliteral">&quot;&quot;</span>){</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;            $name = $FILE[<span class="stringliteral">&quot;name&quot;</span>];</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;            $name = <a class="code" href="../../da/da0/a00009.php#aa8164d5dea5ca9fbc23c9cf879692df5">createId</a>() . <span class="stringliteral">&quot;_&quot;</span> . $name;</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;        }</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;        $name = <a class="code" href="../../d7/dec/a00010.php#ae62433ff7c2d58fccafe252a4e010720">replace_all</a>(<span class="stringliteral">&quot; &quot;</span>, <span class="stringliteral">&quot;_&quot;</span>, $name);</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;        $name = <a class="code" href="../../d7/dec/a00010.php#ae62433ff7c2d58fccafe252a4e010720">replace_all</a>(<span class="stringliteral">&quot;-&quot;</span>, <span class="stringliteral">&quot;_&quot;</span>, $name);</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;        <span class="keywordflow">if</span>(!move_uploaded_file($FILE[<span class="stringliteral">&quot;tmp_name&quot;</span>], $folder . <span class="stringliteral">&quot;/&quot;</span> . $name)){</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;            error_log(<span class="stringliteral">&quot;The file &#39;&quot;</span> . $FILE[<span class="stringliteral">&quot;name&quot;</span>] . <span class="stringliteral">&quot;&#39; can&#39;t be moved to &#39;&quot;</span> . $folder . <span class="stringliteral">&quot;&#39;&quot;</span>);</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        }</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;        <span class="keywordflow">return</span> $name;</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    }</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div><div class="line"><a name="l00096"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a64d5d1874afee2516d03e95bc3d06a55">   96</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d5/d16/a00029.php#a64d5d1874afee2516d03e95bc3d06a55">get_all_in</a>($folder){</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;        $index = 0;</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;        $files = array();</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;        <span class="keywordflow">if</span>(!is_dir($folder)){</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;            error_log(<span class="stringliteral">&quot;The given path \&quot;&quot;</span> . $folder . <span class="stringliteral">&quot;\&quot; is not correct&quot;</span>);</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;            <span class="keywordflow">return</span> $files;</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;        }</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;        $dir = opendir($folder);</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;        <span class="keywordflow">while</span>(($file = readdir($dir)) !== <span class="keyword">false</span>){</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;            $files[$index++] = $file;</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;        }</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;        closedir($dir);</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;        <span class="keywordflow">return</span> $files;</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    }</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div><div class="line"><a name="l00120"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a022ec27ee87cab272994184667e4038e">  120</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d5/d16/a00029.php#a022ec27ee87cab272994184667e4038e">get_all_files_in</a>($folder){</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;        $index = 0;</div><div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;        $temp = <a class="code" href="../../d5/d16/a00029.php#a64d5d1874afee2516d03e95bc3d06a55">get_all_in</a>($folder);</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;</div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;        <span class="keywordflow">for</span>($i = 0; $i &lt; sizeOf($temp); ++$i){</div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;            <span class="keywordflow">if</span>(!is_dir($folder . $temp[$i])){</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;                $files[$index++] = $temp[$i];</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;            }</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;        }</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;        <span class="keywordflow">return</span> $files;</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;    }</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div><div class="line"><a name="l00138"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#afda7401cac35d24c6b1d436cf67e2be6">  138</a></span>&#160;    <span class="keyword">function</span> <a class="code" href="../../d5/d16/a00029.php#afda7401cac35d24c6b1d436cf67e2be6">get_all_folders_in</a>($folder){</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;        $index = 0;</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;        $temp = <a class="code" href="../../d5/d16/a00029.php#a64d5d1874afee2516d03e95bc3d06a55">get_all_in</a>($folder);</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;        <span class="keywordflow">for</span>($i = 0; $i &lt; sizeOf($temp); ++$i){</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;            <span class="keywordflow">if</span>(is_dir($folder . $temp[$i])){</div><div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;                $files[$index++] = $temp[$i];</div><div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;            }</div><div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;        }</div><div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div><div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;        <span class="keywordflow">return</span> $files;</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;    }</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;?&gt;</div><div class="ttc" id="a00010_php_ae62433ff7c2d58fccafe252a4e010720"><div class="ttname"><a href="../../d7/dec/a00010.php#ae62433ff7c2d58fccafe252a4e010720">replace_all</a></div><div class="ttdeci">function replace_all(from, to, str)</div><div class="ttdoc">Function that replace all occurences in a string. </div><div class="ttdef"><b>Definition:</b> <a href="../../d7/dec/a00010_source.php#l00507">_script.js:507</a></div></div>
<div class="ttc" id="a00029_php_a813a54acf7a62363dfa223e6b172b1c9"><div class="ttname"><a href="../../d5/d16/a00029.php#a813a54acf7a62363dfa223e6b172b1c9">deleteFile</a></div><div class="ttdeci">deleteFile($path)</div><div class="ttdoc">Function that delete a given file. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d16/a00029_source.php#l00028">files.php:28</a></div></div>
<div class="ttc" id="a00029_php_afda7401cac35d24c6b1d436cf67e2be6"><div class="ttname"><a href="../../d5/d16/a00029.php#afda7401cac35d24c6b1d436cf67e2be6">get_all_folders_in</a></div><div class="ttdeci">get_all_folders_in($folder)</div><div class="ttdoc">Function that return all the folders of a folder. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d16/a00029_source.php#l00138">files.php:138</a></div></div>
<div class="ttc" id="a00029_php_a7fc3f2f4db9af0955fcc004c4bf83a24"><div class="ttname"><a href="../../d5/d16/a00029.php#a7fc3f2f4db9af0955fcc004c4bf83a24">saveFileTo</a></div><div class="ttdeci">saveFileTo($FILE, $folder, $name=&quot;&quot;)</div><div class="ttdoc">Function that save a file in the given directory. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d16/a00029_source.php#l00051">files.php:51</a></div></div>
<div class="ttc" id="a00009_php_aa8164d5dea5ca9fbc23c9cf879692df5"><div class="ttname"><a href="../../da/da0/a00009.php#aa8164d5dea5ca9fbc23c9cf879692df5">createId</a></div><div class="ttdeci">createId()</div><div class="ttdoc">Function to create a complecated uniqid. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/da0/a00009_source.php#l00091">_functions.php:91</a></div></div>
<div class="ttc" id="a00029_php_a022ec27ee87cab272994184667e4038e"><div class="ttname"><a href="../../d5/d16/a00029.php#a022ec27ee87cab272994184667e4038e">get_all_files_in</a></div><div class="ttdeci">get_all_files_in($folder)</div><div class="ttdoc">Function that return all the files of a folder. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d16/a00029_source.php#l00120">files.php:120</a></div></div>
<div class="ttc" id="a00029_php_acb0efa95907a3a4868eebcdb960143e6"><div class="ttname"><a href="../../d5/d16/a00029.php#acb0efa95907a3a4868eebcdb960143e6">createDir</a></div><div class="ttdeci">createDir($path, $recurs=true)</div><div class="ttdoc">Create a directory to the given path. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d16/a00029_source.php#l00015">files.php:15</a></div></div>
<div class="ttc" id="a00029_php_a64d5d1874afee2516d03e95bc3d06a55"><div class="ttname"><a href="../../d5/d16/a00029.php#a64d5d1874afee2516d03e95bc3d06a55">get_all_in</a></div><div class="ttdeci">get_all_in($folder)</div><div class="ttdoc">Function that return all the content of a folder. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/d16/a00029_source.php#l00096">files.php:96</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_05194b7bb14e4bdbd759acf3e4294839.php">php</a></li><li class="navelem"><a class="el" href="../../dir_272b8c85f84b9c47a49e8b7a9d6744ed.php">bases</a></li><li class="navelem"><a class="el" href="../../d5/d16/a00029.php">files.php</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
