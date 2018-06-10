<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Hot Dog QUIZ: WindowButton.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d0/d61/a00100_source.php','../../');});
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
<div class="title">WindowButton.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d0/d61/a00100.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="preprocessor">#ifndef HEADER_WINDOW_BUTTON</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="preprocessor">#define HEADER_WINDOW_BUTTON</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#include &lt;QtWidgets&gt;</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d9/d2e/a00056.php">C++/C++.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../df/d13/a00085.php">QtDefines.hpp</a>&quot;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php">   18</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d4/dca/a00048.php">WindowButton</a> : <span class="keyword">public</span> QAbstractButton{</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    Q_OBJECT</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00022"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084b">   22</a></span>&#160;        <span class="keyword">enum</span> <a class="code" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084b">ButtonType</a>{</div><div class="line"><a name="l00023"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084ba6f1f4ad27fa2618744b86d9b8bd2ab1d">   23</a></span>&#160;            <a class="code" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084ba6f1f4ad27fa2618744b86d9b8bd2ab1d">BUTTON_MINIMIZE</a>,</div><div class="line"><a name="l00024"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084ba1acf7aace7390523e419dcce457ca1f0">   24</a></span>&#160;            <a class="code" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084ba1acf7aace7390523e419dcce457ca1f0">BUTTON_MAXIMIZE</a>,</div><div class="line"><a name="l00025"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084baed872b32ab60b3aae044fdf829766e74">   25</a></span>&#160;            <a class="code" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084baed872b32ab60b3aae044fdf829766e74">BUTTON_CLOSE</a></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;        };</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;        <a class="code" href="../../d4/dca/a00048.php#ac4f0b135bb2c7d7a301c8ccd8ed14ef0">WindowButton</a>(<a class="code" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084b">ButtonType</a> type, QWidget *parent = <span class="keyword">nullptr</span>);</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;        <a class="code" href="../../d4/dca/a00048.php#af6a0e6f87bae8c50d9d2e57b371a548a">~WindowButton</a>();</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#a4babac31336534efca737c5f73710c1d">setNormalColor</a>(<span class="keywordtype">int</span> r, <span class="keywordtype">int</span> g, <span class="keywordtype">int</span> b, <span class="keywordtype">int</span> a = 255);</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#a6947ea55943b909c1d492ad2f79ae1f8">setHoveredColor</a>(<span class="keywordtype">int</span> r, <span class="keywordtype">int</span> g, <span class="keywordtype">int</span> b, <span class="keywordtype">int</span> a = 255);</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#a7a087338372f7592853b050d168df152">setClickedColor</a>(<span class="keywordtype">int</span> r, <span class="keywordtype">int</span> g, <span class="keywordtype">int</span> b, <span class="keywordtype">int</span> a = 255);</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#ac7b9d8d3e328e0285ef4664e20acb8d3">setBackground</a>(<span class="keywordtype">int</span> r, <span class="keywordtype">int</span> g, <span class="keywordtype">int</span> b, <span class="keywordtype">int</span> a = 255);</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#a434a8192bfe4dea8c7b4e1b052a1a943">setGradient</a>(<span class="keywordtype">int</span> r1, <span class="keywordtype">int</span> g1, <span class="keywordtype">int</span> b1, <span class="keywordtype">int</span> a1, <span class="keywordtype">int</span> r2, <span class="keywordtype">int</span> g2, <span class="keywordtype">int</span> b2, <span class="keywordtype">int</span> a2);</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#a2dd52661908250a571804fe967bcd316">resizeEvent</a>(QResizeEvent *event);</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#a9d63cf19bcf3f8ba8a7f03fe4f222f11">paintEvent</a>(QPaintEvent *event);</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#aab556dedddbb1c9832f572b747449055">enterEvent</a>(QEvent *event);</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#a8a89e083618d2f239a60bf5adb7c79a2">leaveEvent</a>(QEvent *event);</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#af7caa976fc5766ddc3d89eef1965a9c6">mousePressEvent</a>(QMouseEvent *event);</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d4/dca/a00048.php#afd414539e6cf2fc7072a175032a6f1ff">mouseReleaseEvent</a>(QMouseEvent *event);</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;</div><div class="line"><a name="l00089"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57e">   89</a></span>&#160;        <span class="keyword">enum</span> <a class="code" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57e">ButtonState</a>{</div><div class="line"><a name="l00090"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57ea802952130e11d0d17a6d8cb3b202ba97">   90</a></span>&#160;            <a class="code" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57ea802952130e11d0d17a6d8cb3b202ba97">STATE_NORMAL</a>,</div><div class="line"><a name="l00091"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57eaed6a113e687faedcd480bb6c24742b0e">   91</a></span>&#160;            <a class="code" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57eaed6a113e687faedcd480bb6c24742b0e">STATE_HOVERED</a>,</div><div class="line"><a name="l00092"></a><span class="lineno"><a class="line" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57ea22e18925772fb70a02ef5f93fd3f8be7">   92</a></span>&#160;            <a class="code" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57ea22e18925772fb70a02ef5f93fd3f8be7">STATE_CLICKED</a></div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;        };</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;        <a class="code" href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084b">ButtonType</a> m_Type;</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;        <a class="code" href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57e">ButtonState</a> m_State;</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;        QPixmap *m_Normal;</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;        QPixmap *m_Hovered;</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;        QPixmap *m_Clicked;</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;        <span class="keywordtype">void</span> InitPixmaps();</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;        <span class="keywordtype">void</span> InitPixmap(QPixmap **pixmap);</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;        <span class="keywordtype">void</span> InitMinimize();</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;        <span class="keywordtype">void</span> InitMaximize();</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;        <span class="keywordtype">void</span> InitClose();</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;        QColor gradientStart;</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;        QColor gradientEnd;</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;        QColor normalPen;</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;        QColor hoveredPen;</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;        QColor clickedPen;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;};</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;<span class="preprocessor">#endif //HEADER_WINDOW_BUTTON</span></div><div class="ttc" id="a00048_php_ac7b9d8d3e328e0285ef4664e20acb8d3"><div class="ttname"><a href="../../d4/dca/a00048.php#ac7b9d8d3e328e0285ef4664e20acb8d3">WindowButton::setBackground</a></div><div class="ttdeci">void setBackground(int r, int g, int b, int a=255)</div><div class="ttdoc">Set the background color of the button. </div></div>
<div class="ttc" id="a00048_php_a1a23c44a782fc06df076f22ea249084b"><div class="ttname"><a href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084b">WindowButton::ButtonType</a></div><div class="ttdeci">ButtonType</div><div class="ttdoc">The differents buttons type. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00022">WindowButton.hpp:22</a></div></div>
<div class="ttc" id="a00048_php_ac4f0b135bb2c7d7a301c8ccd8ed14ef0"><div class="ttname"><a href="../../d4/dca/a00048.php#ac4f0b135bb2c7d7a301c8ccd8ed14ef0">WindowButton::WindowButton</a></div><div class="ttdeci">WindowButton(ButtonType type, QWidget *parent=nullptr)</div><div class="ttdoc">The constructor. </div></div>
<div class="ttc" id="a00048_php_a1a23c44a782fc06df076f22ea249084ba1acf7aace7390523e419dcce457ca1f0"><div class="ttname"><a href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084ba1acf7aace7390523e419dcce457ca1f0">WindowButton::BUTTON_MAXIMIZE</a></div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00024">WindowButton.hpp:24</a></div></div>
<div class="ttc" id="a00048_php_a6947ea55943b909c1d492ad2f79ae1f8"><div class="ttname"><a href="../../d4/dca/a00048.php#a6947ea55943b909c1d492ad2f79ae1f8">WindowButton::setHoveredColor</a></div><div class="ttdeci">void setHoveredColor(int r, int g, int b, int a=255)</div><div class="ttdoc">Set the hovered color of the button lines. </div></div>
<div class="ttc" id="a00085_php"><div class="ttname"><a href="../../df/d13/a00085.php">QtDefines.hpp</a></div></div>
<div class="ttc" id="a00048_php_a52e7cf1fa9d4c97891ac0080c65dd57ea802952130e11d0d17a6d8cb3b202ba97"><div class="ttname"><a href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57ea802952130e11d0d17a6d8cb3b202ba97">WindowButton::STATE_NORMAL</a></div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00090">WindowButton.hpp:90</a></div></div>
<div class="ttc" id="a00048_php_a7a087338372f7592853b050d168df152"><div class="ttname"><a href="../../d4/dca/a00048.php#a7a087338372f7592853b050d168df152">WindowButton::setClickedColor</a></div><div class="ttdeci">void setClickedColor(int r, int g, int b, int a=255)</div><div class="ttdoc">Set the clicked color of the button lines. </div></div>
<div class="ttc" id="a00048_php_a52e7cf1fa9d4c97891ac0080c65dd57e"><div class="ttname"><a href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57e">WindowButton::ButtonState</a></div><div class="ttdeci">ButtonState</div><div class="ttdoc">The differents buttons states. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00089">WindowButton.hpp:89</a></div></div>
<div class="ttc" id="a00048_php_a1a23c44a782fc06df076f22ea249084ba6f1f4ad27fa2618744b86d9b8bd2ab1d"><div class="ttname"><a href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084ba6f1f4ad27fa2618744b86d9b8bd2ab1d">WindowButton::BUTTON_MINIMIZE</a></div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00023">WindowButton.hpp:23</a></div></div>
<div class="ttc" id="a00048_php_afd414539e6cf2fc7072a175032a6f1ff"><div class="ttname"><a href="../../d4/dca/a00048.php#afd414539e6cf2fc7072a175032a6f1ff">WindowButton::mouseReleaseEvent</a></div><div class="ttdeci">void mouseReleaseEvent(QMouseEvent *event)</div><div class="ttdoc">The mouse release event of the button. </div></div>
<div class="ttc" id="a00048_php_a52e7cf1fa9d4c97891ac0080c65dd57ea22e18925772fb70a02ef5f93fd3f8be7"><div class="ttname"><a href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57ea22e18925772fb70a02ef5f93fd3f8be7">WindowButton::STATE_CLICKED</a></div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00092">WindowButton.hpp:92</a></div></div>
<div class="ttc" id="a00056_php"><div class="ttname"><a href="../../d9/d2e/a00056.php">C++.hpp</a></div></div>
<div class="ttc" id="a00048_php_af7caa976fc5766ddc3d89eef1965a9c6"><div class="ttname"><a href="../../d4/dca/a00048.php#af7caa976fc5766ddc3d89eef1965a9c6">WindowButton::mousePressEvent</a></div><div class="ttdeci">void mousePressEvent(QMouseEvent *event)</div><div class="ttdoc">The mouse press event of the button. </div></div>
<div class="ttc" id="a00048_php"><div class="ttname"><a href="../../d4/dca/a00048.php">WindowButton</a></div><div class="ttdoc">The buttons for the WindowTitleBar and the Window. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00018">WindowButton.hpp:18</a></div></div>
<div class="ttc" id="a00048_php_af6a0e6f87bae8c50d9d2e57b371a548a"><div class="ttname"><a href="../../d4/dca/a00048.php#af6a0e6f87bae8c50d9d2e57b371a548a">WindowButton::~WindowButton</a></div><div class="ttdeci">~WindowButton()</div></div>
<div class="ttc" id="a00048_php_a1a23c44a782fc06df076f22ea249084baed872b32ab60b3aae044fdf829766e74"><div class="ttname"><a href="../../d4/dca/a00048.php#a1a23c44a782fc06df076f22ea249084baed872b32ab60b3aae044fdf829766e74">WindowButton::BUTTON_CLOSE</a></div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00025">WindowButton.hpp:25</a></div></div>
<div class="ttc" id="a00048_php_a52e7cf1fa9d4c97891ac0080c65dd57eaed6a113e687faedcd480bb6c24742b0e"><div class="ttname"><a href="../../d4/dca/a00048.php#a52e7cf1fa9d4c97891ac0080c65dd57eaed6a113e687faedcd480bb6c24742b0e">WindowButton::STATE_HOVERED</a></div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d61/a00100_source.php#l00091">WindowButton.hpp:91</a></div></div>
<div class="ttc" id="a00048_php_aab556dedddbb1c9832f572b747449055"><div class="ttname"><a href="../../d4/dca/a00048.php#aab556dedddbb1c9832f572b747449055">WindowButton::enterEvent</a></div><div class="ttdeci">void enterEvent(QEvent *event)</div><div class="ttdoc">The enter event of the button. </div></div>
<div class="ttc" id="a00048_php_a9d63cf19bcf3f8ba8a7f03fe4f222f11"><div class="ttname"><a href="../../d4/dca/a00048.php#a9d63cf19bcf3f8ba8a7f03fe4f222f11">WindowButton::paintEvent</a></div><div class="ttdeci">void paintEvent(QPaintEvent *event)</div><div class="ttdoc">The paint event of the button. </div></div>
<div class="ttc" id="a00048_php_a4babac31336534efca737c5f73710c1d"><div class="ttname"><a href="../../d4/dca/a00048.php#a4babac31336534efca737c5f73710c1d">WindowButton::setNormalColor</a></div><div class="ttdeci">void setNormalColor(int r, int g, int b, int a=255)</div><div class="ttdoc">Set the normal color of the button lines. </div></div>
<div class="ttc" id="a00048_php_a434a8192bfe4dea8c7b4e1b052a1a943"><div class="ttname"><a href="../../d4/dca/a00048.php#a434a8192bfe4dea8c7b4e1b052a1a943">WindowButton::setGradient</a></div><div class="ttdeci">void setGradient(int r1, int g1, int b1, int a1, int r2, int g2, int b2, int a2)</div><div class="ttdoc">Set the gradient background color of the button. </div></div>
<div class="ttc" id="a00048_php_a2dd52661908250a571804fe967bcd316"><div class="ttname"><a href="../../d4/dca/a00048.php#a2dd52661908250a571804fe967bcd316">WindowButton::resizeEvent</a></div><div class="ttdeci">void resizeEvent(QResizeEvent *event)</div><div class="ttdoc">The resize event of the button. </div></div>
<div class="ttc" id="a00048_php_a8a89e083618d2f239a60bf5adb7c79a2"><div class="ttname"><a href="../../d4/dca/a00048.php#a8a89e083618d2f239a60bf5adb7c79a2">WindowButton::leaveEvent</a></div><div class="ttdeci">void leaveEvent(QEvent *event)</div><div class="ttdoc">The leave event of the button. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_9cc7dab42d10c04902c95d2c14820089.php">Widgets</a></li><li class="navelem"><a class="el" href="../../d0/d61/a00100.php">WindowButton.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
