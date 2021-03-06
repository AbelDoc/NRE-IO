<!-- HTML header for doxygen 1.8.8-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Mobile Devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
        <meta name="generator" content="Doxygen 1.8.11"/>
        <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
        <title>NRE-IO: /mnt/c/Users/abell/Documents/GitHub/NRE-IO/src/IO/FileStream/Input/Stream/NRE_InputStream.hpp Source File</title>
        <!--<link href="tabs.css" rel="stylesheet" type="text/css"/>-->
        <script type="text/javascript" src="dynsections.js"></script>
        <link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
        <link href="doxygen.css" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <?php
            include '../../php/navigation.php';
            if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == "dark") {
                echo '<link href="../../css/dark/bootstrap.css" rel="stylesheet">';
            } else {
                echo '<link href="../../css/light/bootstrap.css" rel="stylesheet">';
            }
        ?>
        <script src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="doxy-boot.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <header class="page-header">
                <a href="../../../index.php">
                    <img src="../../img/Logo.png" class="logo img-responsive"/>
                </a>
            </header>
            <?php addNavigationBarInl(false); ?>
            <div id="top" class="row"><!-- do not remove this div, it is closed by doxygen! -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
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

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_68267d1309a1af8e8297ef4c3efbcdba.php">src</a></li><li class="navelem"><a class="el" href="dir_fae119eb913a40fe8ed97cde8b98911e.php">IO</a></li><li class="navelem"><a class="el" href="dir_0ca3aa3018c3eba24bd0177e1bd7d738.php">FileStream</a></li><li class="navelem"><a class="el" href="dir_9053ba190c8c29c50b61e1de2414617c.php">Input</a></li><li class="navelem"><a class="el" href="dir_385fadae8ebd31bd7c950e4a430d7d42.php">Stream</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">NRE_InputStream.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="_n_r_e___input_stream_8hpp.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="preprocessor">     #pragma once</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">    #include &lt;fstream&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;</div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">    #include &lt;Header/NRE_Utility.hpp&gt;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    <span class="keyword">namespace </span><a class="code" href="namespace_n_r_e.php">NRE</a> {</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;        <span class="keyword">namespace </span><a class="code" href="namespace_i_o.php">IO</a> {</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div><div class="line"><a name="l00031"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_i_o_1_1_input_stream.php">   31</a></span>&#160;            <span class="keyword">class </span><a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php">InputStream</a> {</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;                <span class="keyword">public</span>:    <span class="comment">// Methods</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;                    <span class="comment">//## Constructor ##//</span></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#ae77d706d7e3c1a59353d88b0e1ff9476">InputStream</a>() = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;                    <span class="comment">//## Copy-Constructor ##//</span></div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#ae77d706d7e3c1a59353d88b0e1ff9476">InputStream</a>(<a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php">InputStream</a> <span class="keyword">const</span>&amp; i) = <span class="keyword">delete</span>;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;                    <span class="comment">//## Move-Constructor ##//</span></div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#ae77d706d7e3c1a59353d88b0e1ff9476">InputStream</a>(<a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php">InputStream</a> &amp;&amp; i) = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;                    <span class="comment">//## Deconstructor ##//</span></div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;<span class="comment"></span>                        <span class="keyword">virtual</span> <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a6640a5cd0ec7f081452aea53bde44f34">~InputStream</a>() = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;                    <span class="comment">//## Getter ##//</span></div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;<span class="comment"></span>                        <span class="keyword">virtual</span> std::fstream&amp; <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a4e61262f16391d9a592093cc13ed85d8">getStream</a>() = 0;</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;                        std::streampos <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#abbf6f1014d1be839a1841c51bad87b3c">getPosition</a>();</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;                    <span class="comment">//## Methods ##//</span></div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;<span class="comment"></span>                        <span class="keyword">template</span> &lt;<span class="keyword">class</span> T&gt;</div><div class="line"><a name="l00075"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a4863ac832c227dc838e4d8a74db97c6a">   75</a></span>&#160;                        <span class="keywordtype">void</span> <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a4863ac832c227dc838e4d8a74db97c6a">read</a>(T&amp; <span class="keywordtype">object</span>) {</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;                            <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a4e61262f16391d9a592093cc13ed85d8">getStream</a>() &gt;&gt; object;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;                        }</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;                        <span class="keywordtype">void</span> <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#af91eeb1fc3eb2a8ea3c623d0d140e6a4">readLine</a>(Utility::String&amp; line);</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;                        <span class="keywordtype">void</span> <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a7365375159cb13f7d4d1004e39a622c3">seekBegin</a>(<span class="keywordtype">size_t</span> offset = 0);</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;                        <span class="keywordtype">void</span> <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#ae0fbdbcce3b727547ad94f035608906d">seekEnd</a>(<span class="keywordtype">size_t</span> offset = 0);</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;                    <span class="comment">//## Assignment Operator ##//</span></div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php">InputStream</a>&amp; <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a5e95195616de0936b5c54377b7685e6c">operator =</a>(<a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php">InputStream</a> <span class="keyword">const</span>&amp; i) = <span class="keyword">delete</span>;</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php">InputStream</a>&amp; <a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a5e95195616de0936b5c54377b7685e6c">operator =</a>(<a class="code" href="class_n_r_e_1_1_i_o_1_1_input_stream.php">InputStream</a> &amp;&amp; i) = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;            };</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;        }</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;    }</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;<span class="preprocessor">    #include &quot;NRE_InputStream.tpp&quot;</span></div><div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_a6640a5cd0ec7f081452aea53bde44f34"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a6640a5cd0ec7f081452aea53bde44f34">NRE::IO::InputStream::~InputStream</a></div><div class="ttdeci">virtual ~InputStream()=default</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_abbf6f1014d1be839a1841c51bad87b3c"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#abbf6f1014d1be839a1841c51bad87b3c">NRE::IO::InputStream::getPosition</a></div><div class="ttdeci">std::streampos getPosition()</div></div>
<div class="ttc" id="namespace_i_o_php"><div class="ttname"><a href="namespace_i_o.php">IO</a></div><div class="ttdoc">IO&amp;#39;s API. </div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_ae77d706d7e3c1a59353d88b0e1ff9476"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#ae77d706d7e3c1a59353d88b0e1ff9476">NRE::IO::InputStream::InputStream</a></div><div class="ttdeci">InputStream()=default</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_a4e61262f16391d9a592093cc13ed85d8"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a4e61262f16391d9a592093cc13ed85d8">NRE::IO::InputStream::getStream</a></div><div class="ttdeci">virtual std::fstream &amp; getStream()=0</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_af91eeb1fc3eb2a8ea3c623d0d140e6a4"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#af91eeb1fc3eb2a8ea3c623d0d140e6a4">NRE::IO::InputStream::readLine</a></div><div class="ttdeci">void readLine(Utility::String &amp;line)</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_a7365375159cb13f7d4d1004e39a622c3"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a7365375159cb13f7d4d1004e39a622c3">NRE::IO::InputStream::seekBegin</a></div><div class="ttdeci">void seekBegin(size_t offset=0)</div></div>
<div class="ttc" id="namespace_n_r_e_php"><div class="ttname"><a href="namespace_n_r_e.php">NRE</a></div><div class="ttdoc">The NearlyRealEngine&amp;#39;s global namespace. </div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_ae0fbdbcce3b727547ad94f035608906d"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#ae0fbdbcce3b727547ad94f035608906d">NRE::IO::InputStream::seekEnd</a></div><div class="ttdeci">void seekEnd(size_t offset=0)</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php">NRE::IO::InputStream</a></div><div class="ttdoc">Base interface for input related stream. </div><div class="ttdef"><b>Definition:</b> NRE_InputStream.hpp:31</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_a5e95195616de0936b5c54377b7685e6c"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a5e95195616de0936b5c54377b7685e6c">NRE::IO::InputStream::operator=</a></div><div class="ttdeci">InputStream &amp; operator=(InputStream const &amp;i)=delete</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_input_stream_php_a4863ac832c227dc838e4d8a74db97c6a"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_input_stream.php#a4863ac832c227dc838e4d8a74db97c6a">NRE::IO::InputStream::read</a></div><div class="ttdeci">void read(T &amp;object)</div><div class="ttdef"><b>Definition:</b> NRE_InputStream.hpp:75</div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>
