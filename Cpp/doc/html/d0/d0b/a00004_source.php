<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>ProjetFinalCPP: MainWindow.h Source File</title>
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
$(document).ready(function(){initNavTree('d0/d0b/a00004_source.php','../../');});
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
<div class="title">MainWindow.h</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d0/d0b/a00004.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="preprocessor">#ifndef HEADER_MAINWINDOW</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="preprocessor">#define HEADER_MAINWINDOW</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;</div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#include &lt;QtWidgets&gt;</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d7c/a00003.php">functions.hpp</a>&quot;</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;Widgets/QtDefines.hpp&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../d7/d46/a00002.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d7/d46/a00002.php">MainWindow</a> : <span class="keyword">public</span> QMainWindow {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    Q_OBJECT</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;        <a class="code" href="../../d7/d46/a00002.php#a08a133d21fea8948f84acc105ab5fc33">MainWindow</a>(QWidget* parent = NULL);</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;        <a class="code" href="../../d7/d46/a00002.php#ae98d00a93bc118200eeef9f9bba1dba7">~MainWindow</a>();</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;    </div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    <span class="keyword">public</span> slots:</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a430b81b3bb84b8561b4e63fe76e28c39">connections</a>();</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;        </div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;    signals:</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;        </div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        </div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;        <span class="comment">/* Connection */</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a78ab18fed76eb54bda4508dc9be4b64b">createConnectWidgets</a>();</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a5cfeb89a38b9225a3b3964e6d688ba60">initConnectWidgets</a>();</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a9da75111decb2a68a08c06dec6796d8a">setContentConnectWidgets</a>();</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#aad6ca3020e583fffe727258905c15629">useConnectWidgets</a>();</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        </div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a70aa06cbac136bf2ce8bee98b9bebd27">verifyConnection</a>();</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;        </div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a63c8b347f526518517340a5f912c5575">createConnectDialog</a>();</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a79d1533b5cbbc9040c5d78c9dfb29d38">initConnectDialog</a>();</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a3338456a91f9f32f2f30b9e702df5ea4">setContentConnectDialog</a>();</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a79a619ed1dd1d17b8b3624d919fefe4e">useConnectDialog</a>();</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;        <span class="comment">/**************/</span></div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;        <span class="comment">/* Since connected */</span></div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a2364ae069aba1f220ac4cd2fecaf4d6c">createAdminWidgets</a>();</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#a601d88aa6fbda83575e07d7dc9e19a15">initAdminWidgets</a>();</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#af0aca5335b2f075de2cdbf0fe9c33645">setContentAdminWidgets</a>();</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#ac5cd67fa4d5e5aace91a9c98cc8feec7">useAdminWidgets</a>();</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d7/d46/a00002.php#aceb5bf98f0d68be0d164584da0605624">adminWidgets</a>();</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;        <span class="comment">/*******************/</span></div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;        </div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;        std::string config_file;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;        std::map&lt;std::string, QLabel*&gt; labels;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;        std::map&lt;std::string, QLineEdit*&gt; lines;</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;        std::map&lt;std::string, QHBoxLayout*&gt; hLayouts;</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;        std::map&lt;std::string, QVBoxLayout*&gt; vLayouts;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;        std::map&lt;std::string, QPushButton*&gt; buttons;</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;        std::map&lt;std::string, QWidget*&gt; tabs;</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;        QDialog* messageBox;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;        QWidget* center;</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;        QTabWidget* tabWidget;</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;        ListArray tablesList;</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;};</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="preprocessor">#endif //HEADER_MAINWINDOW</span></div><div class="ttc" id="a00002_php_a08a133d21fea8948f84acc105ab5fc33"><div class="ttname"><a href="../../d7/d46/a00002.php#a08a133d21fea8948f84acc105ab5fc33">MainWindow::MainWindow</a></div><div class="ttdeci">MainWindow(QWidget *parent=NULL)</div><div class="ttdoc">Create the window to connect to the database. </div></div>
<div class="ttc" id="a00002_php"><div class="ttname"><a href="../../d7/d46/a00002.php">MainWindow</a></div><div class="ttdoc">The window that is shown. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d0b/a00004_source.php#l00017">MainWindow.h:17</a></div></div>
<div class="ttc" id="a00002_php_af0aca5335b2f075de2cdbf0fe9c33645"><div class="ttname"><a href="../../d7/d46/a00002.php#af0aca5335b2f075de2cdbf0fe9c33645">MainWindow::setContentAdminWidgets</a></div><div class="ttdeci">void setContentAdminWidgets()</div><div class="ttdoc">Do all the add for these widgets. </div></div>
<div class="ttc" id="a00003_php"><div class="ttname"><a href="../../d1/d7c/a00003.php">functions.hpp</a></div></div>
<div class="ttc" id="a00002_php_a601d88aa6fbda83575e07d7dc9e19a15"><div class="ttname"><a href="../../d7/d46/a00002.php#a601d88aa6fbda83575e07d7dc9e19a15">MainWindow::initAdminWidgets</a></div><div class="ttdeci">void initAdminWidgets()</div></div>
<div class="ttc" id="a00002_php_ac5cd67fa4d5e5aace91a9c98cc8feec7"><div class="ttname"><a href="../../d7/d46/a00002.php#ac5cd67fa4d5e5aace91a9c98cc8feec7">MainWindow::useAdminWidgets</a></div><div class="ttdeci">void useAdminWidgets()</div></div>
<div class="ttc" id="a00002_php_a79a619ed1dd1d17b8b3624d919fefe4e"><div class="ttname"><a href="../../d7/d46/a00002.php#a79a619ed1dd1d17b8b3624d919fefe4e">MainWindow::useConnectDialog</a></div><div class="ttdeci">void useConnectDialog()</div><div class="ttdoc">Show the QDialog. </div></div>
<div class="ttc" id="a00002_php_aad6ca3020e583fffe727258905c15629"><div class="ttname"><a href="../../d7/d46/a00002.php#aad6ca3020e583fffe727258905c15629">MainWindow::useConnectWidgets</a></div><div class="ttdeci">void useConnectWidgets()</div><div class="ttdoc">Show only the connection&amp;#39;s widgets. </div></div>
<div class="ttc" id="a00002_php_a78ab18fed76eb54bda4508dc9be4b64b"><div class="ttname"><a href="../../d7/d46/a00002.php#a78ab18fed76eb54bda4508dc9be4b64b">MainWindow::createConnectWidgets</a></div><div class="ttdeci">void createConnectWidgets()</div><div class="ttdoc">Create all the connection&amp;#39;s widgets. </div></div>
<div class="ttc" id="a00002_php_a63c8b347f526518517340a5f912c5575"><div class="ttname"><a href="../../d7/d46/a00002.php#a63c8b347f526518517340a5f912c5575">MainWindow::createConnectDialog</a></div><div class="ttdeci">void createConnectDialog()</div><div class="ttdoc">Create the connection QDialog message on error. </div></div>
<div class="ttc" id="a00002_php_a3338456a91f9f32f2f30b9e702df5ea4"><div class="ttname"><a href="../../d7/d46/a00002.php#a3338456a91f9f32f2f30b9e702df5ea4">MainWindow::setContentConnectDialog</a></div><div class="ttdeci">void setContentConnectDialog()</div><div class="ttdoc">Do all the add for these widgets. </div></div>
<div class="ttc" id="a00002_php_a430b81b3bb84b8561b4e63fe76e28c39"><div class="ttname"><a href="../../d7/d46/a00002.php#a430b81b3bb84b8561b4e63fe76e28c39">MainWindow::connections</a></div><div class="ttdeci">void connections()</div><div class="ttdoc">Try and verify the connection. </div></div>
<div class="ttc" id="a00002_php_a5cfeb89a38b9225a3b3964e6d688ba60"><div class="ttname"><a href="../../d7/d46/a00002.php#a5cfeb89a38b9225a3b3964e6d688ba60">MainWindow::initConnectWidgets</a></div><div class="ttdeci">void initConnectWidgets()</div><div class="ttdoc">Initialize all the connection&amp;#39;s widgets. </div></div>
<div class="ttc" id="a00002_php_aceb5bf98f0d68be0d164584da0605624"><div class="ttname"><a href="../../d7/d46/a00002.php#aceb5bf98f0d68be0d164584da0605624">MainWindow::adminWidgets</a></div><div class="ttdeci">void adminWidgets()</div></div>
<div class="ttc" id="a00002_php_a2364ae069aba1f220ac4cd2fecaf4d6c"><div class="ttname"><a href="../../d7/d46/a00002.php#a2364ae069aba1f220ac4cd2fecaf4d6c">MainWindow::createAdminWidgets</a></div><div class="ttdeci">void createAdminWidgets()</div></div>
<div class="ttc" id="a00002_php_a70aa06cbac136bf2ce8bee98b9bebd27"><div class="ttname"><a href="../../d7/d46/a00002.php#a70aa06cbac136bf2ce8bee98b9bebd27">MainWindow::verifyConnection</a></div><div class="ttdeci">void verifyConnection()</div><div class="ttdoc">Create the page after a connection. </div></div>
<div class="ttc" id="a00002_php_a9da75111decb2a68a08c06dec6796d8a"><div class="ttname"><a href="../../d7/d46/a00002.php#a9da75111decb2a68a08c06dec6796d8a">MainWindow::setContentConnectWidgets</a></div><div class="ttdeci">void setContentConnectWidgets()</div><div class="ttdoc">Do all the add for these widgets. </div></div>
<div class="ttc" id="a00002_php_ae98d00a93bc118200eeef9f9bba1dba7"><div class="ttname"><a href="../../d7/d46/a00002.php#ae98d00a93bc118200eeef9f9bba1dba7">MainWindow::~MainWindow</a></div><div class="ttdeci">~MainWindow()</div></div>
<div class="ttc" id="a00002_php_a79d1533b5cbbc9040c5d78c9dfb29d38"><div class="ttname"><a href="../../d7/d46/a00002.php#a79d1533b5cbbc9040c5d78c9dfb29d38">MainWindow::initConnectDialog</a></div><div class="ttdeci">void initConnectDialog()</div><div class="ttdoc">Initialize all the widgets of the QDialog. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../d0/d0b/a00004.php">MainWindow.h</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>