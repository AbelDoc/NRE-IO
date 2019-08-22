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
        <title>NRE-IO: NRE::IO::FileStream Class Reference</title>
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
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
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
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
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
<li class="navelem"><a class="el" href="namespace_n_r_e.php">NRE</a></li><li class="navelem"><b>IO</b></li><li class="navelem"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="class_n_r_e_1_1_i_o_1_1_file_stream-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">NRE::IO::FileStream Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span></div>  </div>
</div><!--header-->
<div class="contents">

<p>The base interface for Input, Output and <a class="el" href="namespace_i_o.php" title="IO&#39;s API. ">IO</a> file.  
 <a href="class_n_r_e_1_1_i_o_1_1_file_stream.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="_n_r_e___file_stream_8hpp_source.php">NRE_FileStream.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for NRE::IO::FileStream:</div>
<div class="dyncontent">
 <div class="center">
  <img src="class_n_r_e_1_1_i_o_1_1_file_stream.png" usemap="#NRE::IO::FileStream_map" alt=""/>
  <map id="NRE::IO::FileStream_map" name="NRE::IO::FileStream_map">
<area href="class_n_r_e_1_1_i_o_1_1_file.php" title="Manage a file path and ensure that&#39;s the file exist before accessing it. " alt="NRE::IO::File" shape="rect" coords="167,0,324,24"/>
<area href="class_n_r_e_1_1_i_o_1_1_input_file.php" title="Manage input file stream. " alt="NRE::IO::InputFile" shape="rect" coords="0,112,157,136"/>
<area href="class_n_r_e_1_1_i_o_1_1_i_o_file.php" title="Manage Input-Output file stream. " alt="NRE::IO::IOFile" shape="rect" coords="167,112,324,136"/>
<area href="class_n_r_e_1_1_i_o_1_1_output_file.php" title="Manage output file stream. " alt="NRE::IO::OutputFile" shape="rect" coords="334,112,491,136"/>
<area href="class_n_r_e_1_1_i_o_1_1_binary_input_file.php" title="Manage binary input file stream. " alt="NRE::IO::BinaryInputFile" shape="rect" coords="0,168,157,192"/>
<area href="class_n_r_e_1_1_i_o_1_1_binary_i_o_file.php" title="Manage Binary Input-Output file stream. " alt="NRE::IO::BinaryIOFile" shape="rect" coords="167,168,324,192"/>
<area href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php" title="Manage binary output file stream. " alt="NRE::IO::BinaryOutputFile" shape="rect" coords="334,168,491,192"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a7bef175fe08cc377c872103f61864859"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#a7bef175fe08cc377c872103f61864859">FileStream</a> ()=delete</td></tr>
<tr class="separator:a7bef175fe08cc377c872103f61864859"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a984be898303f6344d5c15efb5fa4e886"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#a984be898303f6344d5c15efb5fa4e886">FileStream</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> const &amp;p)</td></tr>
<tr class="separator:a984be898303f6344d5c15efb5fa4e886"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afc239902cef34ecfd890cf69a5172c6d"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#afc239902cef34ecfd890cf69a5172c6d">FileStream</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> const &amp;f)=delete</td></tr>
<tr class="separator:afc239902cef34ecfd890cf69a5172c6d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae9637c1e640b0dacecad04bf957a91f0"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#ae9637c1e640b0dacecad04bf957a91f0">FileStream</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> &amp;&amp;f)=default</td></tr>
<tr class="separator:ae9637c1e640b0dacecad04bf957a91f0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a85b97b37c6487fa16924773adcc90d12"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#a85b97b37c6487fa16924773adcc90d12">~FileStream</a> ()=default</td></tr>
<tr class="separator:a85b97b37c6487fa16924773adcc90d12"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abfef164a828872b9e1eb7d7e01344c1b"><td class="memItemLeft" align="right" valign="top">virtual std::ios_base::openmode&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#abfef164a828872b9e1eb7d7e01344c1b">getMode</a> () const =0</td></tr>
<tr class="separator:abfef164a828872b9e1eb7d7e01344c1b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6cb9f46d893839b4518cc86b3afe2178"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#a6cb9f46d893839b4518cc86b3afe2178">isOpen</a> () const </td></tr>
<tr class="separator:a6cb9f46d893839b4518cc86b3afe2178"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a24979d0affac7992e181820b881941eb"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#a24979d0affac7992e181820b881941eb">open</a> ()</td></tr>
<tr class="separator:a24979d0affac7992e181820b881941eb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af0677c0d90634a88472f629567ca5238"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#af0677c0d90634a88472f629567ca5238">openEmpty</a> ()</td></tr>
<tr class="separator:af0677c0d90634a88472f629567ca5238"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a357c757b87bc7876f0b1f2fb7f96edb1"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#a357c757b87bc7876f0b1f2fb7f96edb1">operator=</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> const &amp;f)=delete</td></tr>
<tr class="separator:a357c757b87bc7876f0b1f2fb7f96edb1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aeba406b1cbfa2d9a0f21882e8e1815d6"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#aeba406b1cbfa2d9a0f21882e8e1815d6">operator=</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> &amp;&amp;f)=default</td></tr>
<tr class="separator:aeba406b1cbfa2d9a0f21882e8e1815d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_class_n_r_e_1_1_i_o_1_1_file')"><img src="closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">NRE::IO::File</a></td></tr>
<tr class="memitem:ae31e8c433fdbda9a37130168b5fb2858 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#ae31e8c433fdbda9a37130168b5fb2858">File</a> ()=default</td></tr>
<tr class="separator:ae31e8c433fdbda9a37130168b5fb2858 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a71392564fdd4bdcbad2a9dec89a0aee1 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a71392564fdd4bdcbad2a9dec89a0aee1">File</a> (Utility::String const &amp;p)</td></tr>
<tr class="separator:a71392564fdd4bdcbad2a9dec89a0aee1 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af49f63c9e981ee77ebe0d71caa65cfad inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#af49f63c9e981ee77ebe0d71caa65cfad">File</a> (char const p[])</td></tr>
<tr class="separator:af49f63c9e981ee77ebe0d71caa65cfad inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ada63f8f00e27c1d6ec5ea6f09b5f9c75 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#ada63f8f00e27c1d6ec5ea6f09b5f9c75">File</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> const &amp;f)=default</td></tr>
<tr class="separator:ada63f8f00e27c1d6ec5ea6f09b5f9c75 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9860259838f1a163a7a931b3cbae3174 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a9860259838f1a163a7a931b3cbae3174">File</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> &amp;&amp;f)=default</td></tr>
<tr class="separator:a9860259838f1a163a7a931b3cbae3174 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a915cdede01e62ea1c8a0a970480a53af inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a915cdede01e62ea1c8a0a970480a53af">~File</a> ()=default</td></tr>
<tr class="separator:a915cdede01e62ea1c8a0a970480a53af inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6ff1d432623961e08ed64eeb97d547c7 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">Utility::String const &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a6ff1d432623961e08ed64eeb97d547c7">getPath</a> () const </td></tr>
<tr class="separator:a6ff1d432623961e08ed64eeb97d547c7 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1414f962cf4bcae9450b66643f8e3d67 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a1414f962cf4bcae9450b66643f8e3d67">setPath</a> (Utility::String const &amp;p)</td></tr>
<tr class="separator:a1414f962cf4bcae9450b66643f8e3d67 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae955f8bc07d667649e7f045c2bbbef49 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#ae955f8bc07d667649e7f045c2bbbef49">exist</a> () const </td></tr>
<tr class="separator:ae955f8bc07d667649e7f045c2bbbef49 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a94972246304fc4df0e029d0f657b86ae inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a94972246304fc4df0e029d0f657b86ae">operator=</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> const &amp;f)=default</td></tr>
<tr class="separator:a94972246304fc4df0e029d0f657b86ae inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a980fc1b961a9974d6331991af204cc3d inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a980fc1b961a9974d6331991af204cc3d">operator=</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> &amp;&amp;f)=default</td></tr>
<tr class="separator:a980fc1b961a9974d6331991af204cc3d inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af5e129d3ca95bbc6db8c43ad84aaaf6c inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">Utility::String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#af5e129d3ca95bbc6db8c43ad84aaaf6c">operator+</a> (Utility::String const &amp;s) const </td></tr>
<tr class="separator:af5e129d3ca95bbc6db8c43ad84aaaf6c inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2009e071a45be3a88bcfc03bd7868b50 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a2009e071a45be3a88bcfc03bd7868b50">operator+</a> (<a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> const &amp;f) const </td></tr>
<tr class="separator:a2009e071a45be3a88bcfc03bd7868b50 inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0137a4cc6e43c091bc88e485eb29b91f inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memItemLeft" align="right" valign="top">Utility::String const &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php#a0137a4cc6e43c091bc88e485eb29b91f">toString</a> () const </td></tr>
<tr class="separator:a0137a4cc6e43c091bc88e485eb29b91f inherit pub_methods_class_n_r_e_1_1_i_o_1_1_file"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a36c7a3ca5e4e79e6f706577d04d3bffe"><td class="memItemLeft" align="right" valign="top">std::fstream &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php#a36c7a3ca5e4e79e6f706577d04d3bffe">getStream</a> ()</td></tr>
<tr class="separator:a36c7a3ca5e4e79e6f706577d04d3bffe"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>The base interface for Input, Output and <a class="el" href="namespace_i_o.php" title="IO&#39;s API. ">IO</a> file. </p>
<p><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php" title="The base interface for Input, Output and IO file. ">FileStream</a> </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a7bef175fe08cc377c872103f61864859"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::IO::FileStream::FileStream </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">delete</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Default Constructor </p>

</div>
</div>
<a class="anchor" id="a984be898303f6344d5c15efb5fa4e886"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">NRE::IO::FileStream::FileStream </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file.php">File</a> const &amp;&#160;</td>
          <td class="paramname"><em>p</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Construct a file stream with a given file's path </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">p</td><td>the file's stream path </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="afc239902cef34ecfd890cf69a5172c6d"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::IO::FileStream::FileStream </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> const &amp;&#160;</td>
          <td class="paramname"><em>f</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">delete</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Copy forbidden </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">f</td><td>the file stream to copy </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="ae9637c1e640b0dacecad04bf957a91f0"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::IO::FileStream::FileStream </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>f</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Move f into this </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">f</td><td>the file stream to move </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a85b97b37c6487fa16924773adcc90d12"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual NRE::IO::FileStream::~FileStream </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php" title="The base interface for Input, Output and IO file. ">FileStream</a> Deconstructor </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="abfef164a828872b9e1eb7d7e01344c1b"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::ios_base::openmode NRE::IO::FileStream::getMode </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<dl class="section return"><dt>Returns</dt><dd>the file stream opening mode </dd></dl>

<p>Implemented in <a class="el" href="class_n_r_e_1_1_i_o_1_1_binary_i_o_file.php#a6006dcdd0149b41dfc935b0eb2132237">NRE::IO::BinaryIOFile</a>, <a class="el" href="class_n_r_e_1_1_i_o_1_1_i_o_file.php#a88546f6403e21b1b0cfafe956033c32f">NRE::IO::IOFile</a>, <a class="el" href="class_n_r_e_1_1_i_o_1_1_binary_input_file.php#a263d8103d171e7cc001c8e1c9ec3b6f2">NRE::IO::BinaryInputFile</a>, <a class="el" href="class_n_r_e_1_1_i_o_1_1_binary_output_file.php#aab5124d17d117c920d5f8ffe48e0226a">NRE::IO::BinaryOutputFile</a>, <a class="el" href="class_n_r_e_1_1_i_o_1_1_input_file.php#a4c8886a207655e70e21f23f1a694e3dd">NRE::IO::InputFile</a>, and <a class="el" href="class_n_r_e_1_1_i_o_1_1_output_file.php#a8878a1a46a6487059844d6dcf495c3a3">NRE::IO::OutputFile</a>.</p>

</div>
</div>
<a class="anchor" id="a36c7a3ca5e4e79e6f706577d04d3bffe"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::fstream&amp; NRE::IO::FileStream::getStream </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<dl class="section return"><dt>Returns</dt><dd>the input file's stream </dd></dl>

</div>
</div>
<a class="anchor" id="a6cb9f46d893839b4518cc86b3afe2178"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool NRE::IO::FileStream::isOpen </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">
<dl class="section return"><dt>Returns</dt><dd>the file's stream opening state </dd></dl>

</div>
</div>
<a class="anchor" id="a24979d0affac7992e181820b881941eb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void NRE::IO::FileStream::open </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Open the file stream with the file's path and file stream opening mode </p>

</div>
</div>
<a class="anchor" id="af0677c0d90634a88472f629567ca5238"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void NRE::IO::FileStream::openEmpty </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Open the file stream but truncate all data inside the file </p>

</div>
</div>
<a class="anchor" id="a357c757b87bc7876f0b1f2fb7f96edb1"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a>&amp; NRE::IO::FileStream::operator= </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> const &amp;&#160;</td>
          <td class="paramname"><em>f</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">delete</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Copy assignment forbidden </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">f</td><td>the file stream to copy </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the reference of himself </dd></dl>

</div>
</div>
<a class="anchor" id="aeba406b1cbfa2d9a0f21882e8e1815d6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a>&amp; NRE::IO::FileStream::operator= </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_i_o_1_1_file_stream.php">FileStream</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>f</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Move assignment of f into this </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">f</td><td>the file stream to move </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the reference of himself </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li>/mnt/c/Users/abell/Documents/GitHub/NRE-IO/src/IO/FileStream/<a class="el" href="_n_r_e___file_stream_8hpp_source.php">NRE_FileStream.hpp</a></li>
</ul>
</div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>