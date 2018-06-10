<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: defines.hpp Source File</title>
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
   <div id="projectname">Qt
   &#160;<span id="projectnumber">1.0</span>
   </div>
   <div id="projectbrief">Specific widgets for Qt</div>
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
$(document).ready(function(){initNavTree('dc/dee/a00053_source.php','../../');});
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
<div class="title">defines.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../dc/dee/a00053.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_DEFINES</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_DEFINES</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;limits&gt;</span></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor">#include &lt;utility&gt;</span></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="preprocessor">#include &lt;memory&gt;</span></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="preprocessor">#include &lt;iterator&gt;</span></div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="preprocessor">#include &lt;tuple&gt;</span></div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="preprocessor">#include &lt;ios&gt;</span></div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d3/dea/a00046.php">bdd.hpp</a>&quot;</span></div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d5/df9/a00044.php">Args.hpp</a>&quot;</span></div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d6e/a00073.php">RNG.hpp</a>&quot;</span></div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/d79/a00051.php">convert.hpp</a>&quot;</span></div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d09/a00077.php">string.hpp</a>&quot;</span></div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d51/a00079.php">time.hpp</a>&quot;</span></div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../df/d5f/a00064.php">maths.hpp</a>&quot;</span></div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d7/df7/a00058.php">files.hpp</a>&quot;</span></div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d4/d31/a00069.php">pointers.hpp</a>&quot;</span></div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="comment">/* Some defines */</span></div><div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="../../dc/dee/a00053.php#a44dfccd15fd47aa8db19125945f8af08">   55</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../dc/dee/a00053.php#a44dfccd15fd47aa8db19125945f8af08">VI</a> = std::vector&lt;int&gt;;</div><div class="line"><a name="l00057"></a><span class="lineno"><a class="line" href="../../dc/dee/a00053.php#a44aff682fd9726ed5ca19159f23b2e6b">   57</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../dc/dee/a00053.php#a44aff682fd9726ed5ca19159f23b2e6b">VS</a> = std::vector&lt;std::string&gt;;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div><div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="../../d0/d33/a00027.php">   60</a></span>&#160;<span class="keyword">struct </span><a class="code" href="../../d0/d33/a00027.php">Point</a> {</div><div class="line"><a name="l00062"></a><span class="lineno"><a class="line" href="../../d0/d33/a00027.php#ab99c56589bc8ad5fa5071387110a5bc7">   62</a></span>&#160;    <span class="keywordtype">double</span> <a class="code" href="../../d0/d33/a00027.php#ab99c56589bc8ad5fa5071387110a5bc7">x</a>;</div><div class="line"><a name="l00064"></a><span class="lineno"><a class="line" href="../../d0/d33/a00027.php#afa38be143ae800e6ad69ce8ed4df62d8">   64</a></span>&#160;    <span class="keywordtype">double</span> <a class="code" href="../../d0/d33/a00027.php#afa38be143ae800e6ad69ce8ed4df62d8">y</a>;</div><div class="line"><a name="l00066"></a><span class="lineno"><a class="line" href="../../d0/d33/a00027.php#a05ba3b1dfcb19430582ae953cbbfbded">   66</a></span>&#160;    <span class="keywordtype">double</span> <a class="code" href="../../d0/d33/a00027.php#a05ba3b1dfcb19430582ae953cbbfbded">z</a> = 0;</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;};</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php">   70</a></span>&#160;<span class="keyword">struct </span><a class="code" href="../../d7/dd4/a00013.php">ContraptionAttr</a>{</div><div class="line"><a name="l00072"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a949dbd15efa71ddbb294abf15517d8b0">   72</a></span>&#160;    <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#a949dbd15efa71ddbb294abf15517d8b0">w</a>;</div><div class="line"><a name="l00074"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a480fb32edc0218d9d1cead0a8e6f9d15">   74</a></span>&#160;    <span class="keywordtype">double</span> <a class="code" href="../../d7/dd4/a00013.php#a480fb32edc0218d9d1cead0a8e6f9d15">h</a>;</div><div class="line"><a name="l00076"></a><span class="lineno"><a class="line" href="../../d7/dd4/a00013.php#a062e1a4fe2f7d6f8d771f13f10844a19">   76</a></span>&#160;    <span class="keywordtype">double</span> angle = 0;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;};</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div><div class="line"><a name="l00080"></a><span class="lineno"><a class="line" href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aa">   80</a></span>&#160;<span class="keyword">enum class</span> <a class="code" href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aa">Direction</a> {</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <a class="code" href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaafbaedde498cdead4f2780217646e9ba1">UP</a>,</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;    <a class="code" href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaac4e0e4e3118472beeb2ae75827450f1f">DOWN</a>,</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    <a class="code" href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaa21507b40c80068eda19865706fdc2403">RIGHT</a>,</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;    <a class="code" href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaa684d325a7303f52e64011467ff5c5758">LEFT</a>,</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <a class="code" href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaab50339a10e1de285ac99d4c3990b8693">NONE</a></div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;};</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;<span class="preprocessor">#endif //HEADER_DEFINES</span></div><div class="ttc" id="a00053_php_a224b9163917ac32fc95a60d8c1eec3aa"><div class="ttname"><a href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aa">Direction</a></div><div class="ttdeci">Direction</div><div class="ttdoc">Directions to move. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00080">defines.hpp:80</a></div></div>
<div class="ttc" id="a00053_php_a224b9163917ac32fc95a60d8c1eec3aaa684d325a7303f52e64011467ff5c5758"><div class="ttname"><a href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaa684d325a7303f52e64011467ff5c5758">Direction::LEFT</a></div></div>
<div class="ttc" id="a00053_php_a224b9163917ac32fc95a60d8c1eec3aaa21507b40c80068eda19865706fdc2403"><div class="ttname"><a href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaa21507b40c80068eda19865706fdc2403">Direction::RIGHT</a></div></div>
<div class="ttc" id="a00027_php_a05ba3b1dfcb19430582ae953cbbfbded"><div class="ttname"><a href="../../d0/d33/a00027.php#a05ba3b1dfcb19430582ae953cbbfbded">Point::z</a></div><div class="ttdeci">double z</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00066">defines.hpp:66</a></div></div>
<div class="ttc" id="a00053_php_a224b9163917ac32fc95a60d8c1eec3aaafbaedde498cdead4f2780217646e9ba1"><div class="ttname"><a href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaafbaedde498cdead4f2780217646e9ba1">Direction::UP</a></div></div>
<div class="ttc" id="a00013_php_a480fb32edc0218d9d1cead0a8e6f9d15"><div class="ttname"><a href="../../d7/dd4/a00013.php#a480fb32edc0218d9d1cead0a8e6f9d15">ContraptionAttr::h</a></div><div class="ttdeci">double h</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00074">defines.hpp:74</a></div></div>
<div class="ttc" id="a00079_php"><div class="ttname"><a href="../../d1/d51/a00079.php">time.hpp</a></div></div>
<div class="ttc" id="a00053_php_a44aff682fd9726ed5ca19159f23b2e6b"><div class="ttname"><a href="../../dc/dee/a00053.php#a44aff682fd9726ed5ca19159f23b2e6b">VS</a></div><div class="ttdeci">std::vector&lt; std::string &gt; VS</div><div class="ttdoc">Alias for std::vector&lt;std::string&gt; </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00057">defines.hpp:57</a></div></div>
<div class="ttc" id="a00051_php"><div class="ttname"><a href="../../d2/d79/a00051.php">convert.hpp</a></div></div>
<div class="ttc" id="a00064_php"><div class="ttname"><a href="../../df/d5f/a00064.php">maths.hpp</a></div></div>
<div class="ttc" id="a00058_php"><div class="ttname"><a href="../../d7/df7/a00058.php">files.hpp</a></div></div>
<div class="ttc" id="a00053_php_a224b9163917ac32fc95a60d8c1eec3aaac4e0e4e3118472beeb2ae75827450f1f"><div class="ttname"><a href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaac4e0e4e3118472beeb2ae75827450f1f">Direction::DOWN</a></div></div>
<div class="ttc" id="a00077_php"><div class="ttname"><a href="../../d1/d09/a00077.php">string.hpp</a></div></div>
<div class="ttc" id="a00027_php"><div class="ttname"><a href="../../d0/d33/a00027.php">Point</a></div><div class="ttdoc">A struct to define a point in space. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00060">defines.hpp:60</a></div></div>
<div class="ttc" id="a00069_php"><div class="ttname"><a href="../../d4/d31/a00069.php">pointers.hpp</a></div></div>
<div class="ttc" id="a00013_php_a949dbd15efa71ddbb294abf15517d8b0"><div class="ttname"><a href="../../d7/dd4/a00013.php#a949dbd15efa71ddbb294abf15517d8b0">ContraptionAttr::w</a></div><div class="ttdeci">double w</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00072">defines.hpp:72</a></div></div>
<div class="ttc" id="a00073_php"><div class="ttname"><a href="../../d1/d6e/a00073.php">RNG.hpp</a></div></div>
<div class="ttc" id="a00053_php_a224b9163917ac32fc95a60d8c1eec3aaab50339a10e1de285ac99d4c3990b8693"><div class="ttname"><a href="../../dc/dee/a00053.php#a224b9163917ac32fc95a60d8c1eec3aaab50339a10e1de285ac99d4c3990b8693">Direction::NONE</a></div></div>
<div class="ttc" id="a00046_php"><div class="ttname"><a href="../../d3/dea/a00046.php">bdd.hpp</a></div></div>
<div class="ttc" id="a00053_php_a44dfccd15fd47aa8db19125945f8af08"><div class="ttname"><a href="../../dc/dee/a00053.php#a44dfccd15fd47aa8db19125945f8af08">VI</a></div><div class="ttdeci">std::vector&lt; int &gt; VI</div><div class="ttdoc">Alias for std::vector&lt;int&gt; </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00055">defines.hpp:55</a></div></div>
<div class="ttc" id="a00044_php"><div class="ttname"><a href="../../d5/df9/a00044.php">Args.hpp</a></div></div>
<div class="ttc" id="a00027_php_ab99c56589bc8ad5fa5071387110a5bc7"><div class="ttname"><a href="../../d0/d33/a00027.php#ab99c56589bc8ad5fa5071387110a5bc7">Point::x</a></div><div class="ttdeci">double x</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00062">defines.hpp:62</a></div></div>
<div class="ttc" id="a00027_php_afa38be143ae800e6ad69ce8ed4df62d8"><div class="ttname"><a href="../../d0/d33/a00027.php#afa38be143ae800e6ad69ce8ed4df62d8">Point::y</a></div><div class="ttdeci">double y</div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00064">defines.hpp:64</a></div></div>
<div class="ttc" id="a00013_php"><div class="ttname"><a href="../../d7/dd4/a00013.php">ContraptionAttr</a></div><div class="ttdoc">A struct to define Contraption attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../dc/dee/a00053_source.php#l00070">defines.hpp:70</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dc/dee/a00053.php">defines.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
