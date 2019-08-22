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
        <title>NRE-IO: /mnt/c/Users/abell/Documents/GitHub/NRE-IO/src/IO/FileStream/BinaryOutput/File/NRE_BinaryOutputFile.hpp Source File</title>
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
<li class="navelem"><a class="el" href="dir_68267d1309a1af8e8297ef4c3efbcdba.php">src</a></li><li class="navelem"><a class="el" href="dir_fae119eb913a40fe8ed97cde8b98911e.php">IO</a></li><li class="navelem"><a class="el" href="dir_0ca3aa3018c3eba24bd0177e1bd7d738.php">FileStream</a></li><li class="navelem"><a class="el" href="dir_ad66b28deadb5904280584043f4e9ed0.php">BinaryOutput</a></li><li class="navelem"><a class="el" href="dir_5ef021d17c5c85d9bc2db94ee9874dbb.php">File</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">NRE_BinaryOutputFile.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="_n_r_e___binary_output_file_8hpp.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="preprocessor">     #pragma once</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">    #include &quot;../../Output/File/NRE_OutputFile.hpp&quot;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">    #include &quot;../Stream/NRE_BinaryOutputStream.hpp&quot;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    <span class="keyword">namespace </span><a class="code" href="namespace_n_r_e.php">NRE</a> {</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;        <span class="keyword">namespace </span><a class="code" href="namespace_i_o.php">IO</a> {</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php">   30</a></span>&#160;            <span class="keyword">class </span><a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php">BinaryOutputFile</a> : <span class="keyword">public</span> <a class="code" href="class_n_r_e_1_1_i_o_1_1_output_file.php">OutputFile</a>, <span class="keyword">public</span> <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_stream.php">BinaryOutputStream</a> {</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;                <span class="keyword">public</span>:    <span class="comment">// Methods</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;                    <span class="comment">//## Constructor ##//</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a871470082e331d4c4de52225fbdd6d5d">BinaryOutputFile</a>() = <span class="keyword">delete</span>;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a871470082e331d4c4de52225fbdd6d5d">BinaryOutputFile</a>(<a class="code" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> <span class="keyword">const</span>&amp; p);</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;                    <span class="comment">//## Move-Constructor ##//</span></div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a871470082e331d4c4de52225fbdd6d5d">BinaryOutputFile</a>(<a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php">BinaryOutputFile</a> &amp;&amp; o) = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;                    <span class="comment">//## Deconstructor ##//</span></div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a799573c27d504e89bd7512a57caee395">~BinaryOutputFile</a>() = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;                    <span class="comment">//## Methods ##//</span></div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;<span class="comment"></span>                        std::ios_base::openmode <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#aab5124d17d117c920d5f8ffe48e0226a">getMode</a>() <span class="keyword">const override</span>;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;                        std::fstream&amp; <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a226f850a5fc4d714d97c5688e94c1d7e">getStream</a>() <span class="keyword">override</span>;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;                    <span class="comment">//## Assignment Operator ##//</span></div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php">BinaryOutputFile</a>&amp; <a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a0e11dce33943c88dbcce066995fb67e2">operator =</a>(<a class="code" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php">BinaryOutputFile</a> &amp;&amp; o);</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;            };</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;        }</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;    }</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;<span class="preprocessor">    #include &quot;NRE_BinaryOutputFile.tpp&quot;</span></div><div class="ttc" id="class_n_r_e_1_1_i_o_1_1_file_php"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_file.php">NRE::IO::File</a></div><div class="ttdoc">Manage a file path and ensure that&amp;#39;s the file exist before accessing it. </div><div class="ttdef"><b>Definition:</b> NRE_File.hpp:32</div></div>
<div class="ttc" id="namespace_i_o_php"><div class="ttname"><a href="namespace_i_o.php">IO</a></div><div class="ttdoc">IO&amp;#39;s API. </div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_binary_output_file_php_aab5124d17d117c920d5f8ffe48e0226a"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#aab5124d17d117c920d5f8ffe48e0226a">NRE::IO::BinaryOutputFile::getMode</a></div><div class="ttdeci">std::ios_base::openmode getMode() const override</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_binary_output_file_php_a0e11dce33943c88dbcce066995fb67e2"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a0e11dce33943c88dbcce066995fb67e2">NRE::IO::BinaryOutputFile::operator=</a></div><div class="ttdeci">BinaryOutputFile &amp; operator=(BinaryOutputFile &amp;&amp;o)</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_output_file_php"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_output_file.php">NRE::IO::OutputFile</a></div><div class="ttdoc">Manage output file stream. </div><div class="ttdef"><b>Definition:</b> NRE_OutputFile.hpp:30</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_binary_output_file_php_a799573c27d504e89bd7512a57caee395"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a799573c27d504e89bd7512a57caee395">NRE::IO::BinaryOutputFile::~BinaryOutputFile</a></div><div class="ttdeci">~BinaryOutputFile()=default</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_binary_output_stream_php"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_binary_output_stream.php">NRE::IO::BinaryOutputStream</a></div><div class="ttdoc">Base interface for binary output related stream. </div><div class="ttdef"><b>Definition:</b> NRE_BinaryOutputStream.hpp:29</div></div>
<div class="ttc" id="namespace_n_r_e_php"><div class="ttname"><a href="namespace_n_r_e.php">NRE</a></div><div class="ttdoc">The NearlyRealEngine&amp;#39;s global namespace. </div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_binary_output_file_php_a871470082e331d4c4de52225fbdd6d5d"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a871470082e331d4c4de52225fbdd6d5d">NRE::IO::BinaryOutputFile::BinaryOutputFile</a></div><div class="ttdeci">BinaryOutputFile()=delete</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_binary_output_file_php"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php">NRE::IO::BinaryOutputFile</a></div><div class="ttdoc">Manage binary output file stream. </div><div class="ttdef"><b>Definition:</b> NRE_BinaryOutputFile.hpp:30</div></div>
<div class="ttc" id="class_n_r_e_1_1_i_o_1_1_binary_output_file_php_a226f850a5fc4d714d97c5688e94c1d7e"><div class="ttname"><a href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#a226f850a5fc4d714d97c5688e94c1d7e">NRE::IO::BinaryOutputFile::getStream</a></div><div class="ttdeci">std::fstream &amp; getStream() override</div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>