<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: Threadable.hpp Source File</title>
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
$(document).ready(function(){initNavTree('df/d5f/a00064_source.php','../../');});
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
<div class="title">Threadable.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../df/d5f/a00064.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_THREADABLE</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_THREADABLE</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &lt;thread&gt;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">#include &lt;mutex&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;functional&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d9/d73/a00060.php">pointers.hpp</a>&quot;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../df/d5f/a00064.php#a09979566ade438911265d3e17ecc3abc">   17</a></span>&#160;<span class="preprocessor">#define THREADABLE\</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">    public:\</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">\</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">        void launch(){\</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">            Threadable::launch(this);\</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">        }\</span></div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">\</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor">        void updater(){\</span></div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="preprocessor">            while(!this-&gt;hasToStop()){\</span></div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="preprocessor">                mutex.lock();\</span></div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="preprocessor">                this-&gt;update();\</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="preprocessor">                mutex.unlock();\</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">            }\</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">        }</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">template</span>&lt;<span class="keyword">class</span> C&gt;</div><div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php">   42</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d5/d16/a00029.php">Threadable</a> {</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a7b5a3de51a890d7899182f4ff75e9751">   45</a></span>&#160;        <a class="code" href="../../d5/d16/a00029.php#a7b5a3de51a890d7899182f4ff75e9751">Threadable</a>() : </div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;            m_loopThread(nullptr),</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;            m_threadStopper(false)</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;        {}</div><div class="line"><a name="l00049"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#aa389c613d710919ea274fc2c33f48129">   49</a></span>&#160;        <span class="keyword">virtual</span> <a class="code" href="../../d5/d16/a00029.php#aa389c613d710919ea274fc2c33f48129">~Threadable</a>(){</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;            <a class="code" href="../../d9/d73/a00060.php#a55f9782a77b1459ff662dd21a69edab3">deletePtr</a>(m_loopThread);</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;        }</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="preprocessor">        #ifndef DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> update() = 0;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d5/d16/a00029.php#a0b5b43b02f693cdde338ef942675234a">launch</a>(C* obj){</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;                m_loopThread = <span class="keyword">new</span> std::thread(&amp;C::updater, obj);</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;            }</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;<span class="preprocessor">        #endif //DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;        <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d5/d16/a00029.php#a0b5b43b02f693cdde338ef942675234a">launch</a>() = 0;</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div><div class="line"><a name="l00065"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a59161fb24a2a485aecb0ea1bbed67099">   65</a></span>&#160;        <span class="keywordtype">void</span> <a class="code" href="../../d5/d16/a00029.php#a59161fb24a2a485aecb0ea1bbed67099">stop</a>(){</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;            m_threadStopper = <span class="keyword">true</span>;</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;            <a class="code" href="../../d9/d73/a00060.php#a55f9782a77b1459ff662dd21a69edab3">deletePtr</a>(m_loopThread);</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;        }</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a0e164fd54cb5746f981e1ace8cd3fef0">   74</a></span>&#160;        <span class="keywordtype">bool</span> <a class="code" href="../../d5/d16/a00029.php#a0e164fd54cb5746f981e1ace8cd3fef0">hasToStop</a>(){</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;            <span class="keywordflow">return</span> m_threadStopper;</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;        }</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;<span class="preprocessor">        #ifndef DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;            std::thread* m_loopThread;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;            <span class="keywordtype">bool</span> m_threadStopper;</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;<span class="preprocessor">        #endif //DOXYGEN_SHOULD_SKIP_THIS</span></div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00085"></a><span class="lineno"><a class="line" href="../../d5/d16/a00029.php#a1fb118abc832fb483fb82f8d9d87521f">   85</a></span>&#160;        std::mutex <a class="code" href="../../d5/d16/a00029.php#a1fb118abc832fb483fb82f8d9d87521f">mutex</a>;</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;};</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;<span class="preprocessor">#endif //HEADER_THREADABLE</span></div><div class="ttc" id="a00060_php_a55f9782a77b1459ff662dd21a69edab3"><div class="ttname"><a href="../../d9/d73/a00060.php#a55f9782a77b1459ff662dd21a69edab3">deletePtr</a></div><div class="ttdeci">std::enable_if&lt; std::is_pointer&lt; T &gt;::value, void &gt;::type deletePtr(T &amp;pointer)</div><div class="ttdoc">Delete a pointer. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d73/a00060_source.php#l00040">pointers.hpp:40</a></div></div>
<div class="ttc" id="a00029_php_a0e164fd54cb5746f981e1ace8cd3fef0"><div class="ttname"><a href="../../d5/d16/a00029.php#a0e164fd54cb5746f981e1ace8cd3fef0">Threadable::hasToStop</a></div><div class="ttdeci">bool hasToStop()</div><div class="ttdoc">Return if the thread has to stop or not. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00074">Threadable.hpp:74</a></div></div>
<div class="ttc" id="a00029_php_a7b5a3de51a890d7899182f4ff75e9751"><div class="ttname"><a href="../../d5/d16/a00029.php#a7b5a3de51a890d7899182f4ff75e9751">Threadable::Threadable</a></div><div class="ttdeci">Threadable()</div><div class="ttdoc">The constructor of the Threadable class. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00045">Threadable.hpp:45</a></div></div>
<div class="ttc" id="a00029_php_a59161fb24a2a485aecb0ea1bbed67099"><div class="ttname"><a href="../../d5/d16/a00029.php#a59161fb24a2a485aecb0ea1bbed67099">Threadable::stop</a></div><div class="ttdeci">void stop()</div><div class="ttdoc">Stop the thread and delete the pointer correctly. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00065">Threadable.hpp:65</a></div></div>
<div class="ttc" id="a00029_php_a1fb118abc832fb483fb82f8d9d87521f"><div class="ttname"><a href="../../d5/d16/a00029.php#a1fb118abc832fb483fb82f8d9d87521f">Threadable::mutex</a></div><div class="ttdeci">std::mutex mutex</div><div class="ttdoc">The mutex variable to use in the thread. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00085">Threadable.hpp:85</a></div></div>
<div class="ttc" id="a00029_php"><div class="ttname"><a href="../../d5/d16/a00029.php">Threadable</a></div><div class="ttdoc">A class to let another one to be threadable with update() member in a thread. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00042">Threadable.hpp:42</a></div></div>
<div class="ttc" id="a00029_php_aa389c613d710919ea274fc2c33f48129"><div class="ttname"><a href="../../d5/d16/a00029.php#aa389c613d710919ea274fc2c33f48129">Threadable::~Threadable</a></div><div class="ttdeci">virtual ~Threadable()</div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00049">Threadable.hpp:49</a></div></div>
<div class="ttc" id="a00029_php_a0b5b43b02f693cdde338ef942675234a"><div class="ttname"><a href="../../d5/d16/a00029.php#a0b5b43b02f693cdde338ef942675234a">Threadable::launch</a></div><div class="ttdeci">virtual void launch()=0</div><div class="ttdoc">Start the thread. </div></div>
<div class="ttc" id="a00060_php"><div class="ttname"><a href="../../d9/d73/a00060.php">pointers.hpp</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../df/d5f/a00064.php">Threadable.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
