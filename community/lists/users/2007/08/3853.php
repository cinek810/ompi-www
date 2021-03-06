<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 11:44:00 2007" -->
<!-- isoreceived="20070814154400" -->
<!-- sent="Tue, 14 Aug 2007 10:44:14 -0500" -->
<!-- isosent="20070814154414" -->
<!-- name="Adams, Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation faults" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E1DDFC61_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E14EEC70-A298-4BAC-A654-67DE9EEF0B4C_at_cisco.com" -->
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
<strong>From:</strong> Adams, Samuel D Contr AFRL/HEDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 11:44:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="3852.php">Durga Choudhury: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I ran valgrind on my code and it came up with a few thousand memory
<br>
errors, but none of them had anything to do with the code I wrote.  It
<br>
gave a few errors for the LDAP authentication stuff at the beginning,
<br>
but most of the error came from orte*.  The only part that made
<br>
reference to my code was in the main file on line 13 where I include
<br>
mpi.h.  This seems suspect to me to have so many &quot;error&quot; in well used
<br>
and test codes.  Also the stack trace errors that I previously posted
<br>
showed errors in places in my code that have been stable and unchanged
<br>
for about a year.  
<br>
<p>It seems like maybe this is some kind of error with the system
<br>
configuration or something like that.  It just seems too odd for these
<br>
memory faults to just appear like that.  
<br>
<p>Sam Adams
<br>
General Dynamics Information Technology
<br>
Phone: 210.536.5945
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Monday, August 13, 2007 4:13 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] segmentation faults
<br>
<p>It *looks* like a run-of-the-mill memory-badness kind of error, but  
<br>
it's impossible to say without more information.
<br>
<p>Are you able to run this through valgrind or some other memory- 
<br>
checking debugger?  It looks like the single process case may be the  
<br>
simplest to check...?
<br>
<p><p>On Aug 13, 2007, at 5:03 PM, Adams, Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt; I tried to run a code that I have running for a while now this  
</span><br>
<span class="quotelev1">&gt; morning,
</span><br>
<span class="quotelev1">&gt; but for some reason it is causing segmentation faults.  I can't really
</span><br>
<span class="quotelev1">&gt; think of anything that I have done recently that would be causing  
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev1">&gt; errors.  Does anyone have any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this running it on more than one processor......
</span><br>
<span class="quotelev1">&gt; [sam_at_prodnode1 all]$ mpirun -np 2 --prefix
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/ /home/sam/code/fdtd/fdtd_0.3/fdtd -t
</span><br>
<span class="quotelev1">&gt; /home/sam/code/fdtd/fdtd_0.3/test_files/tissue.txt -r
</span><br>
<span class="quotelev1">&gt; /home/sam/code/fdtd/fdtd_0.3/test_files/tester_x002y002z004.raw -v -f
</span><br>
<span class="quotelev1">&gt; 3000 --pw 90,0,1,0 -l test_log.out -a 1
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] Failing at address: 0x2aaaab000048
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] Failing at address: 0x2aaaab0a0a48
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] [ 0] /lib64/libpthread.so.0 [0x3aa840dd40]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(_int_malloc 
</span><br>
<span class="quotelev1">&gt; +0x2a5)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaafda345]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(calloc+0xaa)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaafdbd8a]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/sam/code/fdtd/fdtd_0.3/fdtd(parseTissues+0x23) [0x40c9d3]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/sam/code/fdtd/fdtd_0.3/fdtd(parseArgs+0x489) [0x404b09]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] [ 5] /home/sam/code/fdtd/fdtd_0.3/fdtd(main+0x41)
</span><br>
<span class="quotelev1">&gt; [0x404eb1]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3aa781d8a4]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] [ 7] /home/sam/code/fdtd/fdtd_0.3/fdtd [0x4034b9]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04400] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] [ 0] /lib64/libpthread.so.0 [0x3aa840dd40]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(_int_malloc 
</span><br>
<span class="quotelev1">&gt; +0x2a5)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaafda345]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(calloc+0xaa)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaafdbd8a]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/sam/code/fdtd/fdtd_0.3/fdtd(parseTissues+0x23) [0x40c9d3]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/sam/code/fdtd/fdtd_0.3/fdtd(parseArgs+0x489) [0x404b09]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] [ 5] /home/sam/code/fdtd/fdtd_0.3/fdtd(main+0x41)
</span><br>
<span class="quotelev1">&gt; [0x404eb1]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3aa781d8a4]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] [ 7] /home/sam/code/fdtd/fdtd_0.3/fdtd [0x4034b9]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04399] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 4399 on node
</span><br>
<span class="quotelev1">&gt; prodnode1.brooks.af.mil exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Or I get this if I run it on just one processor.
</span><br>
<span class="quotelev1">&gt; [sam_at_prodnode1 all]$ ./script2.sh [prodnode1:04405] *** Process  
</span><br>
<span class="quotelev1">&gt; received
</span><br>
<span class="quotelev1">&gt; signal ***
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] Failing at address: 0x18
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] [ 0] /lib64/libpthread.so.0 [0x3aa840dd40]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] [ 1] /home/sam/code/fdtd/fdtd_0.3/fdtd(calcMass 
</span><br>
<span class="quotelev1">&gt; +0xac)
</span><br>
<span class="quotelev1">&gt; [0x40443c]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/sam/code/fdtd/fdtd_0.3/fdtd(parseArgs+0x5a1) [0x404c21]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] [ 3] /home/sam/code/fdtd/fdtd_0.3/fdtd(main+0x41)
</span><br>
<span class="quotelev1">&gt; [0x404eb1]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] [ 4] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3aa781d8a4]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] [ 5] /home/sam/code/fdtd/fdtd_0.3/fdtd [0x4034b9]
</span><br>
<span class="quotelev1">&gt; [prodnode1:04405] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 4405 on node
</span><br>
<span class="quotelev1">&gt; prodnode1.brooks.af.mil exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; [sam_at_prodnode1 all]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam Adams
</span><br>
<span class="quotelev1">&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev1">&gt; Phone: 210.536.5945
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="3852.php">Durga Choudhury: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<!-- nextthread="start" -->
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
