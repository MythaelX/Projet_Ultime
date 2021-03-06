<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: Hostile.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d4/de8/a00061_source.php','../../');});
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
<div class="title">Hostile.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d4/de8/a00061.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_HOSTILE</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_HOSTILE</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d9/d2e/a00056.php">Entity.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../dd/da2/a00019.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../dd/da2/a00019.php">Hostile</a> {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <span class="comment">/* Constructor &amp; Destroyer */</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;            <a class="code" href="../../dd/da2/a00019.php#ab5ee3eebdea8943c1cb6ebd1b875bbf1">Hostile</a>();</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../dd/da2/a00019.php#af1c3ba743ce0c9b50d501fb86f4127f8">~Hostile</a>();</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00032"></a><span class="lineno"><a class="line" href="../../dd/da2/a00019.php#a49702b5127cacf36d0e401dee60bc341">   32</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/da2/a00019.php#a49702b5127cacf36d0e401dee60bc341">setStrength</a>(<span class="keywordtype">double</span> strength){ this-&gt;strength = strength; }</div><div class="line"><a name="l00039"></a><span class="lineno"><a class="line" href="../../dd/da2/a00019.php#ab2f44509aba02128b145f53b45ae3d6e">   39</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/da2/a00019.php#ab2f44509aba02128b145f53b45ae3d6e">setTarget</a>(<a class="code" href="../../d7/d7a/a00016.php">Entity</a>* <a class="code" href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">target</a>){ this-&gt;target = <a class="code" href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">target</a>; }</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="../../dd/da2/a00019.php#a2e41323724ce153631596d0a2e037197">   46</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../dd/da2/a00019.php#a2e41323724ce153631596d0a2e037197">getStrength</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> strength; }</div><div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="../../dd/da2/a00019.php#ae9646e71bc0ee3240492aa98060e4942">   51</a></span>&#160;            <a class="code" href="../../d7/d7a/a00016.php">Entity</a>* <a class="code" href="../../dd/da2/a00019.php#ae9646e71bc0ee3240492aa98060e4942">getTarget</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> <a class="code" href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">target</a>; }</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;        <span class="comment">/* Friends */</span></div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../dd/da2/a00019.php#a1640c2447984cd193da200e3c76e0859">printInfos</a>(std::ostream&amp; stream)<span class="keyword">const</span>;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;            <span class="keywordtype">bool</span> <a class="code" href="../../dd/da2/a00019.php#a7ad578b926f0be7cf84ee0f45665fa1f">hurt</a>(<a class="code" href="../../d7/d7a/a00016.php">Entity</a>* <a class="code" href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">target</a> = <span class="keyword">nullptr</span>);</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">bool</span> <a class="code" href="../../dd/da2/a00019.php#aa3fec9f067507361ca93e6f4edf4b731">attack</a>(<a class="code" href="../../d7/d7a/a00016.php">Entity</a>* <a class="code" href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">target</a> = <span class="keyword">nullptr</span>) = 0;</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div><div class="line"><a name="l00084"></a><span class="lineno"><a class="line" href="../../dd/da2/a00019.php#a4b91ff7920ded02f9662134608f11d6f">   84</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../dd/da2/a00019.php#a4b91ff7920ded02f9662134608f11d6f">untarget</a>(){ <a class="code" href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">target</a> = <span class="keyword">nullptr</span>; }</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00087"></a><span class="lineno"><a class="line" href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">   87</a></span>&#160;        <a class="code" href="../../d7/d7a/a00016.php">Entity</a>* <a class="code" href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">target</a>;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;        <span class="keywordtype">double</span> strength;</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;};</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;<span class="preprocessor">#endif //HEADER_HOSTILE</span></div><div class="ttc" id="a00019_php_a4b91ff7920ded02f9662134608f11d6f"><div class="ttname"><a href="../../dd/da2/a00019.php#a4b91ff7920ded02f9662134608f11d6f">Hostile::untarget</a></div><div class="ttdeci">void untarget()</div><div class="ttdoc">Set the target to null. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00084">Hostile.hpp:84</a></div></div>
<div class="ttc" id="a00019_php_aa3fec9f067507361ca93e6f4edf4b731"><div class="ttname"><a href="../../dd/da2/a00019.php#aa3fec9f067507361ca93e6f4edf4b731">Hostile::attack</a></div><div class="ttdeci">virtual bool attack(Entity *target=nullptr)=0</div><div class="ttdoc">Attack. </div></div>
<div class="ttc" id="a00016_php"><div class="ttname"><a href="../../d7/d7a/a00016.php">Entity</a></div><div class="ttdoc">An entity. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00017">Entity.hpp:17</a></div></div>
<div class="ttc" id="a00056_php"><div class="ttname"><a href="../../d9/d2e/a00056.php">Entity.hpp</a></div></div>
<div class="ttc" id="a00019_php_a49702b5127cacf36d0e401dee60bc341"><div class="ttname"><a href="../../dd/da2/a00019.php#a49702b5127cacf36d0e401dee60bc341">Hostile::setStrength</a></div><div class="ttdeci">void setStrength(double strength)</div><div class="ttdoc">Set the Hostile&amp;#39;s strength. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00032">Hostile.hpp:32</a></div></div>
<div class="ttc" id="a00019_php_ab2f44509aba02128b145f53b45ae3d6e"><div class="ttname"><a href="../../dd/da2/a00019.php#ab2f44509aba02128b145f53b45ae3d6e">Hostile::setTarget</a></div><div class="ttdeci">void setTarget(Entity *target)</div><div class="ttdoc">Set the Hostile&amp;#39;s strength. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00039">Hostile.hpp:39</a></div></div>
<div class="ttc" id="a00019_php_ab5ee3eebdea8943c1cb6ebd1b875bbf1"><div class="ttname"><a href="../../dd/da2/a00019.php#ab5ee3eebdea8943c1cb6ebd1b875bbf1">Hostile::Hostile</a></div><div class="ttdeci">Hostile()</div><div class="ttdoc">The constructor of the class. </div></div>
<div class="ttc" id="a00019_php_a7ad578b926f0be7cf84ee0f45665fa1f"><div class="ttname"><a href="../../dd/da2/a00019.php#a7ad578b926f0be7cf84ee0f45665fa1f">Hostile::hurt</a></div><div class="ttdeci">bool hurt(Entity *target=nullptr)</div><div class="ttdoc">Hurt the target. </div></div>
<div class="ttc" id="a00019_php"><div class="ttname"><a href="../../dd/da2/a00019.php">Hostile</a></div><div class="ttdoc">A class to derivate from when the thing can attack. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00017">Hostile.hpp:17</a></div></div>
<div class="ttc" id="a00019_php_ae9646e71bc0ee3240492aa98060e4942"><div class="ttname"><a href="../../dd/da2/a00019.php#ae9646e71bc0ee3240492aa98060e4942">Hostile::getTarget</a></div><div class="ttdeci">Entity * getTarget() const </div><div class="ttdoc">Get the Hotsile&amp;#39;s target. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00051">Hostile.hpp:51</a></div></div>
<div class="ttc" id="a00019_php_a1640c2447984cd193da200e3c76e0859"><div class="ttname"><a href="../../dd/da2/a00019.php#a1640c2447984cd193da200e3c76e0859">Hostile::printInfos</a></div><div class="ttdeci">virtual void printInfos(std::ostream &amp;stream) const </div><div class="ttdoc">Print the infos in the instance of the class in stream. </div></div>
<div class="ttc" id="a00019_php_af1c3ba743ce0c9b50d501fb86f4127f8"><div class="ttname"><a href="../../dd/da2/a00019.php#af1c3ba743ce0c9b50d501fb86f4127f8">Hostile::~Hostile</a></div><div class="ttdeci">virtual ~Hostile()</div><div class="ttdoc">Virtual destructor. </div></div>
<div class="ttc" id="a00019_php_a54cd84496707554686bc5fc43b57a4f8"><div class="ttname"><a href="../../dd/da2/a00019.php#a54cd84496707554686bc5fc43b57a4f8">Hostile::target</a></div><div class="ttdeci">Entity * target</div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00087">Hostile.hpp:87</a></div></div>
<div class="ttc" id="a00019_php_a2e41323724ce153631596d0a2e037197"><div class="ttname"><a href="../../dd/da2/a00019.php#a2e41323724ce153631596d0a2e037197">Hostile::getStrength</a></div><div class="ttdeci">double getStrength() const </div><div class="ttdoc">Get the Hotsile&amp;#39;s strength. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/de8/a00061_source.php#l00046">Hostile.hpp:46</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../d4/de8/a00061.php">Hostile.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
