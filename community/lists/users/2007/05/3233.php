<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 08:52:26 2007" -->
<!-- isoreceived="20070510125226" -->
<!-- sent="Thu, 10 May 2007 14:52:20 +0200" -->
<!-- isosent="20070510125220" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question. Please help." -->
<!-- id="1178801540.13743.10.camel_at_fkpc167.phc.chalmers.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Newbie question. Please help." -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 08:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Previous message:</strong> <a href="3232.php">Laurent Nguyen: "[OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Maybe in reply to:</strong> <a href="3214.php">Steven Truong: "[OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have previously been running parallel VASP happily with an old,
<br>
prerelease version of OpenMPI:
<br>
<p><p>[terry_at_nocona Vasp.4.6-OpenMPI]$
<br>
head /home/terry/Install_trees/OpenMPI-1.0rc6/config.log
<br>
This file contains any messages produced by compilers while
<br>
running configure, to aid debugging if configure makes a mistake.
<br>
<p>It was created by Open MPI configure 1.0rc6, which was
<br>
generated by GNU Autoconf 2.59.  Invocation command line was
<br>
<p>&nbsp;&nbsp;$ ./configure --enable-static --disable-shared
<br>
--prefix=/home/terry/bin/Local --enable-picky --disable-heterogeneous
<br>
--without-libnuma --without-slurm --without-tm F77=ifort
<br>
<p><p><p>In my VASP makefile:
<br>
<p>FC=/home/terry/bin/Local/bin/mpif90
<br>
<p>OFLAG= -O3 -xP -tpp7
<br>
<p>CPP = $(CPP_) -DMPI  -DHOST=\&quot;LinuxIFC\&quot; -DIFC -Dkind8 -DNGZhalf
<br>
-DCACHE_SIZE=12000 -DPGF90 -Davoidalloc -DMPI_BLOCK=500 -DRPROMU_DGEMV
<br>
-DRACCMU_DGEMV
<br>
<p>FFLAGS =  -FR -lowercase -assume byterecl
<br>
<p>As far as I can see (it was a long time ago!) I didn't use BLACS or
<br>
SCALAPACK libraries.  I used ATLAS.
<br>
<p><p><p>Maybe this will help.
<br>
<p><p><pre>
-- 
Dr Terry Frankcombe
Physical Chemistry, Department of Chemistry
G&#195;&#182;teborgs Universitet
SE-412 96 G&#195;&#182;teborg Sweden
Ph: +46 76 224 0887   Skype: terry.frankcombe
&lt;terry_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Previous message:</strong> <a href="3232.php">Laurent Nguyen: "[OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Maybe in reply to:</strong> <a href="3214.php">Steven Truong: "[OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>