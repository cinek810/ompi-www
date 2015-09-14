<?php
$topdir = "../../..";
$title = "opal_crs(7) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: opal_crs(7)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
         <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<p>
<h2><a name='sect0' href='#toc0'>Name</a></h2>
 OPAL_CRS - Open PAL MCA Checkpoint/Restart Service (CRS):
Overview of Open PAL&rsquo;s CRS framework, and selected modules.  Open MPI 1.10.0.

<h2><a name='sect1' href='#toc1'>Description</a></h2>
 <p>
Open PAL can involuntarily checkpoint and restart sequential
programs. Doing so requires that Open PAL was compiled with thread support
and that the back-end checkpointing systems are available at run-time.
<h3><a name='sect2' href='#toc2'>Phases
of Checkpoint / Restart</a></h3>
<p>
Open PAL defines three phases for checkpoint / restart
support in a procress:
<dl>

<dt>Checkpoint </dt>
<dd>When the checkpoint request arrives,
the procress is notified of the  request before the checkpoint is taken.
 </dd>

<dt>Continue </dt>
<dd>After a checkpoint has successfully completed, the same process
as the checkpoint is notified of its successful continuation of execution.
 </dd>

<dt>Restart </dt>
<dd>After a checkpoint has successfully completed, a new / restarted
process is notified of its successful restart.  </dd>
</dl>
<p>
The Continue and Restart
phases are identical except for the process in which they are invoked. The
Continue phase is invoked in the same process as the Checkpoint phase was
invoked. The Restart phase is only invoked in newly restarted processes.

<h2><a name='sect3' href='#toc3'>General Process Requirements</a></h2>
<p>
In order for a process to use the Open
PAL CRS components it must adhear to a few programmatic requirements. <p>
First,
the program must call <i>OPAL_INIT</i> early in its execution. This should only
be called once, and it is not possible to checkpoint the process without
it first having called this function. <p>
The program must call <i>OPAL_FINALIZE</i>
before termination. This does a  significant amount of cleanup. If it is
not called, then it is very likely that remnants are left in the filesystem.
<p>
To checkpoint and restart a process you must use the Open PAL tools to
do so. Using the backend checkpointer&rsquo;s checkpoint and restart tools will
lead to undefined behavior. To checkpoint a process use <i>opal_checkpoint</i>
(<i>opal_checkpoint(1)</i>). To restart a process use <i>opal_restart</i> (<i>opal_restart(1)</i>).

<h2><a name='sect4' href='#toc4'>Available Components</a></h2>
<p>
Open PAL ships with two CRS components: <i>self</i> and
<i>blcr</i>.  <p>
The following MCA parameters apply to all components:
<dl>

<dt>crs_base_verbose
</dt>
<dd>Set the verbosity level for all components. Default is 0, or silent except
on error.    </dd>
</dl>

<h3><a name='sect5' href='#toc5'>self CRS Component</a></h3>
<p>
The <i>self</i> component invokes user-defined functions
to save and restore checkpoints. It is simply a mechanism for user-defined
functions to be invoked at Open PAL&rsquo;s Checkpoint, Continue, and Restart
phases. Hence, the only data that is saved during the checkpoint is what
is written in the user&rsquo;s checkpoint function. No libary state is saved at
all.  <p>
As such, the model for the <i>self</i> component is slightly differnt than
for other components. Specifically, the Restart function is not invoked
in the same process image of the process that was checkpointed. The Restart
phase is invoked during <b>OPAL_INIT</b> of the new instance of the applicaiton
(i.e., it starts over from main()).  <p>
The <i>self</i> component has the following
MCA parameters:
<dl>

<dt>crs_self_prefix </dt>
<dd>Speficy a string prefix for the name of
the checkpoint, continue, and restart functions that Open PAL will invoke
during the respective stages. That is, by specifying "-mca crs_self_prefix
foo" means that Open PAL expects to find three functions at run-time:
<p>
  int foo_checkpoint()<br>

<p>    int foo_continue()<br>

<p>    int foo_restart()<br>

<p> By default, the prefix is set to "opal_crs_self_user".  </dd>

<dt>crs_self_priority
</dt>
<dd>Set the <i>self</i> components default priority  </dd>

<dt>crs_self_verbose </dt>
<dd>Set the verbosity
level. Default is 0, or silent except on error.  </dd>

<dt>crs_self_do_restart </dt>
<dd>This
is mostly internally used. A general user should never need to set this
value. This is set to non-0 when a the new process should invoke the restart
callback in <i>OPAL_INIT</i>. Default is 0, or normal execution.    </dd>
</dl>

<h3><a name='sect6' href='#toc6'>blcr CRS Component</a></h3>
<p>
The
Berkeley Lab Checkpoint/Restart (BLCR) single-process checkpoint is a software
system developed at Lawrence Berkeley National Laboratory. See the project
website for more details:
<p>    <i> <i>http://ftg.lbl.gov/CheckpointRestart/CheckpointRestart.shtml</i>
</i><br>
  <p>
The <i>blcr</i> component has the following MCA parameters:
<dl>

<dt>crs_blcr_priority
</dt>
<dd>Set the <i>blcr</i> components default priority.  </dd>

<dt>crs_blcr_verbose </dt>
<dd>Set the verbosity
level. Default is 0, or silent except on error.    </dd>
</dl>

<h3><a name='sect7' href='#toc7'>none CRS Component</a></h3>
<p>
The
<i>none</i> component simply selects no CRS component. All of the CRS function
calls return immediately with OPAL_SUCCESS.   <p>
This component is the last
component to be selected by default. This means that if another component
is available, and the <i>none</i> component was not explicity requested then OPAL
will attempt to activate all of the available components before falling
back to this component.
<h2><a name='sect8' href='#toc8'>See Also</a></h2>
  <i>opal_checkpoint(1)</i>, <i>opal_restart(1)</i><br>
  <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Description</a></li>
<ul>
<li><a name='toc2' href='#sect2'>Phases of Checkpoint / Restart</a></li>
</ul>
<li><a name='toc3' href='#sect3'>General Process Requirements</a></li>
<li><a name='toc4' href='#sect4'>Available Components</a></li>
<ul>
<li><a name='toc5' href='#sect5'>self CRS Component</a></li>
<li><a name='toc6' href='#sect6'>blcr CRS Component</a></li>
<li><a name='toc7' href='#sect7'>none CRS Component</a></li>
</ul>
<li><a name='toc8' href='#sect8'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");