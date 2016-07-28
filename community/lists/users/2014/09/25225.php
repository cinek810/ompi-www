<?
$subject_val = "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 13:49:55 2014" -->
<!-- isoreceived="20140902174955" -->
<!-- sent="Tue, 2 Sep 2014 10:49:42 -0700" -->
<!-- isosent="20140902174942" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657" -->
<!-- id="944FF200-1F26-4512-8CC0-23F1AB5101C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201409021726.s82HQJCH016041_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 13:49:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25226.php">Ralph Castain: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25224.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<li><strong>Maybe in reply to:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25228.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see any line numbers on the errors I flagged - all I see are the usual memory offsets in bytes, which is of little help. I'm afraid I don't what what you'd have to do under SunOS to get line numbers, but I can't do much without it
<br>
<p><p>On Sep 2, 2014, at 10:26 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you please configure this OMPI install with --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt; so that gdb will provide line numbers where the error is occurring?
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, I'm having a hard time chasing this problem down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I always configure with &quot;--enable-debug&quot; and I used the following
</span><br>
<span class="quotelev1">&gt; command. I my original email I have had a backtrace with line
</span><br>
<span class="quotelev1">&gt; numbers for both my C and Java problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r32657-SunOS.sparc.64_cc 119 head config.log
</span><br>
<span class="quotelev1">&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was created by Open MPI configure 1.9a1, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.69.  Invocation command line was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  $ ../openmpi-1.9a1r32657/configure --prefix=/usr/local/openmpi-1.9_64_cc 
</span><br>
<span class="quotelev1">&gt; --libdir=/usr/local/openmpi-1.9_64_cc/lib64 
</span><br>
<span class="quotelev1">&gt; --with-jdk-bindir=/usr/local/jdk1.8.0/bin 
</span><br>
<span class="quotelev1">&gt; --with-jdk-headers=/usr/local/jdk1.8.0/include JAVA_HOME=/usr/local/jdk1.8.0 
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-m64 CC=cc CXX=CC FC=f95 CFLAGS=-m64 CXXFLAGS=-m64 -library=stlport4 
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-m64 CPP=cpp CXXCPP=cpp CPPFLAGS= CXXCPPFLAGS= --enable-mpi-cxx 
</span><br>
<span class="quotelev1">&gt; --enable-cxx-exceptions --enable-mpi-java --enable-heterogeneous 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --with-threads=posix --with-hwloc=internal 
</span><br>
<span class="quotelev1">&gt; --without-verbs --with-wrapper-cflags=-m64 --enable-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What can I do to provide line numbers for the &quot;mca_oob_tcp_accept:
</span><br>
<span class="quotelev1">&gt; accept() failed&quot; error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 2, 2014, at 6:01 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 111 mpiexec -np 1 --host linpc0 init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:00593] mca_oob_tcp_accept: accept() failed: 
</span><br>
<span class="quotelev1">&gt; Error 0 (11).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 112 mpiexec -np 1 --host sunpc0 init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:00597] mca_oob_tcp_accept: accept() failed: 
</span><br>
<span class="quotelev1">&gt; Error 0 (11).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 113 mpiexec -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00606] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00606] Signal: Bus Error (10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00606] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00606] Failing at address: ffffffff7fffd7fc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_back
</span><br>
<span class="quotelev1">&gt; trace_print+0x1c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1a4960
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev1">&gt; unpack_int64+0xf4 [ Signal 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2096416616 (?)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev1">&gt; unpack_buffer+0x168
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev1">&gt; unpack+0x24c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/openmpi/mca_pmix_native.so:0x1
</span><br>
<span class="quotelev1">&gt; 4e10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+
</span><br>
<span class="quotelev1">&gt; 0xd18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x26c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x12c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00606] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that process rank 0 with PID 606 on node tyr exited on 
</span><br>
<span class="quotelev1">&gt; signal 10 (Bus Error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 114 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gdb shows the following backtrace.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 115 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/bin/mpiexec 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; License GPLv3+: GNU GPL version 3 or later 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading symbols from 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun...done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run -np 1 --host tyr init_finalize   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 --host tyr 
</span><br>
<span class="quotelev1">&gt; init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00628] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00628] Signal: Bus Error (10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00628] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00628] Failing at address: ffffffff7fffd73c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_back
</span><br>
<span class="quotelev1">&gt; trace_print+0x1c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1a4960
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev1">&gt; unpack_int64+0xf4 [ Signal 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2096416616 (?)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev1">&gt; unpack_buffer+0x168
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev1">&gt; unpack+0x24c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/openmpi/mca_pmix_native.so:0x1
</span><br>
<span class="quotelev1">&gt; 4e10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+
</span><br>
<span class="quotelev1">&gt; 0xd18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x26c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x12c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:00628] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that process rank 0 with PID 628 on node tyr exited on 
</span><br>
<span class="quotelev1">&gt; signal 10 (Bus Error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25226.php">Ralph Castain: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25224.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<li><strong>Maybe in reply to:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25228.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
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