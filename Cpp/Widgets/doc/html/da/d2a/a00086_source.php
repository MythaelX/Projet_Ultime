<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>Qt: WindowTitleBar.hpp Source File</title>
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
$(document).ready(function(){initNavTree('da/d2a/a00086_source.php','../../');});
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
<div class="title">WindowTitleBar.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../da/d2a/a00086.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="preprocessor">#ifndef HEADER_WINDOW_TITLEBAR</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="preprocessor">#define HEADER_WINDOW_TITLEBAR</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#include &lt;QtWidgets&gt;</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../df/d13/a00085.php">WindowButton.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d6/d2d/a00047.php">C++/C++.hpp</a>&quot;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno"><a class="line" href="../../db/d3a/a00040.php">   18</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../db/d3a/a00040.php">WindowTitleBar</a> : <span class="keyword">public</span> <a class="code" href="../../d1/dc6/a00037.php">Widget</a>{</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    Q_OBJECT</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;        <a class="code" href="../../db/d3a/a00040.php#acbc4eaf9b9265fe9ac013aeba5e80e76">WindowTitleBar</a>(QWidget* parent = <span class="keyword">nullptr</span>);</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;        <a class="code" href="../../db/d3a/a00040.php#a8fa4e86180d7e76a04f68b864b5a8c3a">~WindowTitleBar</a>();</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;    <span class="keyword">public</span> slots:</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a5a96b7bd195f625fc4ffb6c7fe180709">UpdateWindowTitle</a>(QString title);</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a91ce1aab8c3ed4a14554a1ddc32a87f1">ApplyResizeChange</a>(<span class="keywordtype">bool</span> state);</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a4def0f2b659a07381fe8abaedd90e303">ApplyTitleBarState</a>(<span class="keywordtype">bool</span> state);</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#aae235853885d03ddd070efb8fef2f4e1">Minimized</a>();</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a7d91818e1ef1189dc5c0524729a62e34">Maximized</a>();</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a1604ff5ed446b01e08dbb4d05be48f63">Quit</a>();</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#aade75345fb7a4b62c361345c64884a82">resizeEvent</a>(QResizeEvent* event);</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a43be58f98c5d53bce63cd96999e7c71a">paintEvent</a>(QPaintEvent* event);</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a50b62b3569bb0e173904117cb875d157">mousePressEvent</a>(QMouseEvent* event);</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a5c3e48aa0d5bc65f2958b3037a0e1587">mouseReleaseEvent</a>(QMouseEvent* event);</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a5fa1f19401f127094ba42152928892a1">mouseMoveEvent</a>(QMouseEvent* event);</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a51c99fb3d787abe8bc647145272981f0">drawTitleBar</a>(QPainter&amp; painter);</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../db/d3a/a00040.php#a2929d886be76951491d9bb53a6e1ce9e">drawButtonsArea</a>(QPainter&amp; painter);</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;        QPixmap* m_Cache;</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;        QLabel m_Title;</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;        QPoint m_Diff;</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;        <a class="code" href="../../d3/de7/a00039.php">WindowButton</a> m_Minimize;</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;        <a class="code" href="../../d3/de7/a00039.php">WindowButton</a> m_Maximize;</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;        <a class="code" href="../../d3/de7/a00039.php">WindowButton</a> m_Close;</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;        <span class="keywordtype">bool</span> resized;</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;        <span class="keywordtype">bool</span> titleBar;</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;};</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;<span class="preprocessor">#endif //HEADER_WINDOW_TITLEBAR</span></div><div class="ttc" id="a00040_php_a50b62b3569bb0e173904117cb875d157"><div class="ttname"><a href="../../db/d3a/a00040.php#a50b62b3569bb0e173904117cb875d157">WindowTitleBar::mousePressEvent</a></div><div class="ttdeci">void mousePressEvent(QMouseEvent *event)</div><div class="ttdoc">The mouse press event of the titlebar. </div></div>
<div class="ttc" id="a00040_php_a5c3e48aa0d5bc65f2958b3037a0e1587"><div class="ttname"><a href="../../db/d3a/a00040.php#a5c3e48aa0d5bc65f2958b3037a0e1587">WindowTitleBar::mouseReleaseEvent</a></div><div class="ttdeci">void mouseReleaseEvent(QMouseEvent *event)</div><div class="ttdoc">The mouse release event of the titlebar. </div></div>
<div class="ttc" id="a00040_php_acbc4eaf9b9265fe9ac013aeba5e80e76"><div class="ttname"><a href="../../db/d3a/a00040.php#acbc4eaf9b9265fe9ac013aeba5e80e76">WindowTitleBar::WindowTitleBar</a></div><div class="ttdeci">WindowTitleBar(QWidget *parent=nullptr)</div><div class="ttdoc">The constructor. </div></div>
<div class="ttc" id="a00047_php"><div class="ttname"><a href="../../d6/d2d/a00047.php">C++.hpp</a></div></div>
<div class="ttc" id="a00040_php_a8fa4e86180d7e76a04f68b864b5a8c3a"><div class="ttname"><a href="../../db/d3a/a00040.php#a8fa4e86180d7e76a04f68b864b5a8c3a">WindowTitleBar::~WindowTitleBar</a></div><div class="ttdeci">~WindowTitleBar()</div></div>
<div class="ttc" id="a00040_php_aade75345fb7a4b62c361345c64884a82"><div class="ttname"><a href="../../db/d3a/a00040.php#aade75345fb7a4b62c361345c64884a82">WindowTitleBar::resizeEvent</a></div><div class="ttdeci">void resizeEvent(QResizeEvent *event)</div><div class="ttdoc">The resize event of the titlebar. </div></div>
<div class="ttc" id="a00040_php_a5fa1f19401f127094ba42152928892a1"><div class="ttname"><a href="../../db/d3a/a00040.php#a5fa1f19401f127094ba42152928892a1">WindowTitleBar::mouseMoveEvent</a></div><div class="ttdeci">void mouseMoveEvent(QMouseEvent *event)</div><div class="ttdoc">The mouse move event of the titlebar. </div></div>
<div class="ttc" id="a00040_php_a1604ff5ed446b01e08dbb4d05be48f63"><div class="ttname"><a href="../../db/d3a/a00040.php#a1604ff5ed446b01e08dbb4d05be48f63">WindowTitleBar::Quit</a></div><div class="ttdeci">void Quit()</div><div class="ttdoc">Quit the application. </div></div>
<div class="ttc" id="a00039_php"><div class="ttname"><a href="../../d3/de7/a00039.php">WindowButton</a></div><div class="ttdoc">The buttons for the WindowTitleBar and the Window. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d13/a00085_source.php#l00018">WindowButton.hpp:18</a></div></div>
<div class="ttc" id="a00040_php_a2929d886be76951491d9bb53a6e1ce9e"><div class="ttname"><a href="../../db/d3a/a00040.php#a2929d886be76951491d9bb53a6e1ce9e">WindowTitleBar::drawButtonsArea</a></div><div class="ttdeci">void drawButtonsArea(QPainter &amp;painter)</div><div class="ttdoc">Draw the buttons area. </div></div>
<div class="ttc" id="a00040_php"><div class="ttname"><a href="../../db/d3a/a00040.php">WindowTitleBar</a></div><div class="ttdoc">The titlebar of the Window class. </div><div class="ttdef"><b>Definition:</b> <a href="../../da/d2a/a00086_source.php#l00018">WindowTitleBar.hpp:18</a></div></div>
<div class="ttc" id="a00037_php"><div class="ttname"><a href="../../d1/dc6/a00037.php">Widget</a></div><div class="ttdoc">Create a personnalized Widget. </div><div class="ttdef"><b>Definition:</b> <a href="../../d2/d1f/a00083_source.php#l00017">Widget.hpp:17</a></div></div>
<div class="ttc" id="a00085_php"><div class="ttname"><a href="../../df/d13/a00085.php">WindowButton.hpp</a></div></div>
<div class="ttc" id="a00040_php_a51c99fb3d787abe8bc647145272981f0"><div class="ttname"><a href="../../db/d3a/a00040.php#a51c99fb3d787abe8bc647145272981f0">WindowTitleBar::drawTitleBar</a></div><div class="ttdeci">void drawTitleBar(QPainter &amp;painter)</div><div class="ttdoc">Draw the titlebar. </div></div>
<div class="ttc" id="a00040_php_a4def0f2b659a07381fe8abaedd90e303"><div class="ttname"><a href="../../db/d3a/a00040.php#a4def0f2b659a07381fe8abaedd90e303">WindowTitleBar::ApplyTitleBarState</a></div><div class="ttdeci">void ApplyTitleBarState(bool state)</div><div class="ttdoc">Show or hide the titlebar. </div></div>
<div class="ttc" id="a00040_php_aae235853885d03ddd070efb8fef2f4e1"><div class="ttname"><a href="../../db/d3a/a00040.php#aae235853885d03ddd070efb8fef2f4e1">WindowTitleBar::Minimized</a></div><div class="ttdeci">void Minimized()</div><div class="ttdoc">Minimize the window. </div></div>
<div class="ttc" id="a00040_php_a43be58f98c5d53bce63cd96999e7c71a"><div class="ttname"><a href="../../db/d3a/a00040.php#a43be58f98c5d53bce63cd96999e7c71a">WindowTitleBar::paintEvent</a></div><div class="ttdeci">void paintEvent(QPaintEvent *event)</div><div class="ttdoc">The paint event of the titlebar. </div></div>
<div class="ttc" id="a00040_php_a91ce1aab8c3ed4a14554a1ddc32a87f1"><div class="ttname"><a href="../../db/d3a/a00040.php#a91ce1aab8c3ed4a14554a1ddc32a87f1">WindowTitleBar::ApplyResizeChange</a></div><div class="ttdeci">void ApplyResizeChange(bool state)</div><div class="ttdoc">Apply the resize state change. </div></div>
<div class="ttc" id="a00040_php_a5a96b7bd195f625fc4ffb6c7fe180709"><div class="ttname"><a href="../../db/d3a/a00040.php#a5a96b7bd195f625fc4ffb6c7fe180709">WindowTitleBar::UpdateWindowTitle</a></div><div class="ttdeci">void UpdateWindowTitle(QString title)</div><div class="ttdoc">Update the window&amp;#39;s title. </div></div>
<div class="ttc" id="a00040_php_a7d91818e1ef1189dc5c0524729a62e34"><div class="ttname"><a href="../../db/d3a/a00040.php#a7d91818e1ef1189dc5c0524729a62e34">WindowTitleBar::Maximized</a></div><div class="ttdeci">void Maximized()</div><div class="ttdoc">Maximize the window. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_a02ca41573efbfa5a2fd3c2b5453f5e3.php">QTTests</a></li><li class="navelem"><a class="el" href="../../dir_241af41b803d499a248aecae0c64f982.php">Widgets</a></li><li class="navelem"><a class="el" href="../../da/d2a/a00086.php">WindowTitleBar.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>