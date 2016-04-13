<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_topology_diff_obj_attr_u Union Reference<div class="ingroups"><a class="el" href="a00100.php">Topology differences</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00060_source.php">diff.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00047.php">hwloc_topology_diff_obj_attr_generic_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php">hwloc_topology_diff_obj_attr_string_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php">hwloc_topology_diff_obj_attr_uint64_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a68039c178e9961023345e0728382773b"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak" />
<a class="el" href="a00047.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_generic_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php#a68039c178e9961023345e0728382773b">generic</a></td></tr>
<tr class="separator:a68039c178e9961023345e0728382773b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abb15bfa7039ca8c97cd7ddfbdf779efa"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak" />
<a class="el" href="a00051.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_uint64_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php#abb15bfa7039ca8c97cd7ddfbdf779efa">uint64</a></td></tr>
<tr class="separator:abb15bfa7039ca8c97cd7ddfbdf779efa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a518a48e13168c31957589ce78820163e"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak" />
<a class="el" href="a00049.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php#a518a48e13168c31957589ce78820163e">string</a></td></tr>
<tr class="separator:a518a48e13168c31957589ce78820163e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>One object attribute difference. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="a68039c178e9961023345e0728382773b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00047.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_generic_s</a>  hwloc_topology_diff_obj_attr_u::generic</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a518a48e13168c31957589ce78820163e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00049.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a>  hwloc_topology_diff_obj_attr_u::string</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="abb15bfa7039ca8c97cd7ddfbdf779efa"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00051.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_uint64_s</a>  hwloc_topology_diff_obj_attr_u::uint64</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this union was generated from the following file:<ul>
<li><a class="el" href="a00060_source.php">diff.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");