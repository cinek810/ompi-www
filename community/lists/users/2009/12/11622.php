<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:31:04 2009" -->
<!-- isoreceived="20091221143104" -->
<!-- sent="Mon, 21 Dec 2009 07:30:43 -0700" -->
<!-- isosent="20091221143043" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="0CCD6047-920B-4DEC-9F55-CAF9CD95529C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="fa4af8200912210037h1dd46617s91606ddcf829223d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] fault tolerance in open mpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-21 09:30:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11623.php">jody: "Re: [OMPI users] man-files not installed"</a>
<li><strong>Previous message:</strong> <a href="11621.php">Ralph Castain: "Re: [OMPI users] man-files not installed"</a>
<li><strong>In reply to:</strong> <a href="11618.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11634.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="11634.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disconnect is a -collective- operation. Both parent and child have to call it. Your child process is &quot;hanging&quot; while it waits for the parent.
<br>
<p>On Dec 21, 2009, at 1:37 AM, vipin kumar wrote:
<br>
<p><span class="quotelev1">&gt; Hello folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I explained my problem earlier, I am looking for Fault Tolerance in MPI Programs. I read in Open MPI 2.1 standard document that two DISCONNECTED processes does not affect each other, i.e. they can die or can be killed without whithout affecting other processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I was trying this to achieve fault tolerance using MPI::Comm::Disconnect() to disconnect the CHILD process with PARENT process, which was spawned by calling MPI::Comm::spawn(). I am calling MPI::Comm::Disconnect() from CHILD process immediatly after calling MPI::Init(). It seems that CHILD process is not returning from this call. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried MPI::Comm::Free() too, but this is also not working. Process is not progressing from this point of call. If I comment these statements, everything works fine. Note that I have tried this in Solaris as well as in Linux (fedora core).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is, whether Open-mpi suports to disconnect two processes( like child from parent). And if it is, then how?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 23, 2009 at 6:41 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Unfortunately I cannot provide a precise time frame for availability at this point, but we are targeting the v1.5 release series. There is a handful of core developers working on this issue at the moment. Pieces of this  work have already made it into the Open MPI development trunk. If you want to play around with what is available try turning on the resilient mapper:
</span><br>
<span class="quotelev1">&gt;  -mca rmaps resilient
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We will be sure to email the list once this work becomes more stable and available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2009, at 2:56 AM, vipin kumar wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is good to hear from you that work is in progress towards resiliency of Open-MPI. I was and I am waiting for this capability in Open-MPI. I have almost finished my development work and waiting for this to happen so that I can test my programs. It will be good if you can tell how long it will take to make Open-MPI a resilient impementation. Here by resiliency I mean abnormal termination or intentionally killing a process should not cause any(parent or sibling) process to be terminated, given that processes are connected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 3, 2009 at 8:37 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Task-farm or manager/worker recovery models typically depend on intercommunicators (i.e., from MPI_Comm_spawn) and a resilient MPI implementation. William Gropp and Ewing Lusk have a paper entitled &quot;Fault Tolerance in MPI Programs&quot; that outlines how an application might take advantage of these features in order to recover from process failure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, these techniques strongly depend upon resilient MPI implementations, and behaviors that, some may argue, are non-standard. Unfortunately there are not many MPI implementations that are sufficiently resilient in the face of process failure to support failure in task-farm scenarios. Though Open MPI supports the current MPI 2.1 standard, it is not as resilient to process failure as it could be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are a number of people working on improving the resiliency of Open MPI in the face of network and process failure (including myself). We have started to move some of the resiliency work into the Open MPI trunk. Resiliency in Open MPI has been improving over the past few months, but I would not assess it as ready quite yet. Most of the work has focused on the runtime level (ORTE), and there are still some MPI level (OMPI) issues that need to be worked out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With all of that being said, I would try some of the techniques presented in the Gropp/Lusk paper in your application. Then test it with Open MPI and let us know how it goes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2009, at 10:30 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that kind of approach possible within an MPI framework? Perhaps a
</span><br>
<span class="quotelev1">&gt; grid approach would be better. More experienced people, speak up,
</span><br>
<span class="quotelev1">&gt; please?
</span><br>
<span class="quotelev1">&gt; (The reason I say that is that I too am interested in the solution of
</span><br>
<span class="quotelev1">&gt; that kind of problem, where an individual blade of a blade server
</span><br>
<span class="quotelev1">&gt; fails and correcting for that failure on the fly is better than taking
</span><br>
<span class="quotelev1">&gt; checkpoints and restarting the whole process excluding the failed
</span><br>
<span class="quotelev1">&gt; blade.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 3, 2009 at 9:21 AM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess &quot;task-farming&quot; could give you a certain amount of the kind of
</span><br>
<span class="quotelev1">&gt; fault-tolerance you want.
</span><br>
<span class="quotelev1">&gt; (i.e. a master process distributes tasks to idle slave processors -
</span><br>
<span class="quotelev1">&gt; however, this will only work
</span><br>
<span class="quotelev1">&gt; if the slave processes don't need to communicate with each other)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 3, 2009 at 1:24 PM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Durga for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, once you wrote code for Mandelbrot set to demonstrate fault tolerance
</span><br>
<span class="quotelev1">&gt; in LAM-MPI. i. e. killing any slave process doesn't
</span><br>
<span class="quotelev1">&gt; affect others. Exact behaviour I am looking for in Open MPI. I attempted,
</span><br>
<span class="quotelev1">&gt; but no luck. Can you please tell how to write such programs in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2009 at 8:30 PM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although I have perhaps the least experience on the topic in this
</span><br>
<span class="quotelev1">&gt; list, I will take a shot; more experienced people, please correct me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI standards specify communication mechanism, not fault tolerance at
</span><br>
<span class="quotelev1">&gt; any level. You may achieve network tolerance at the IP level by
</span><br>
<span class="quotelev1">&gt; implementing 'equal cost multipath' routes (which means two equally
</span><br>
<span class="quotelev1">&gt; capable NIC cards connecting to the same destination and modifying the
</span><br>
<span class="quotelev1">&gt; kernel routing table to use both cards; the kernel will dynamically
</span><br>
<span class="quotelev1">&gt; load balance.). At the MAC level, you can achieve the same effect by
</span><br>
<span class="quotelev1">&gt; trunking multiple network cards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can achieve process level fault tolerance by a checkpointing
</span><br>
<span class="quotelev1">&gt; scheme such as BLCR, which has been tested to work with OpenMPI (and
</span><br>
<span class="quotelev1">&gt; other processes as well)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2009 at 4:57 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to know whether open mpi supports Network and process fault
</span><br>
<span class="quotelev1">&gt; tolerance
</span><br>
<span class="quotelev1">&gt; or not? If there is any example demonstrating these features that will
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev1">&gt; best.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11622/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11623.php">jody: "Re: [OMPI users] man-files not installed"</a>
<li><strong>Previous message:</strong> <a href="11621.php">Ralph Castain: "Re: [OMPI users] man-files not installed"</a>
<li><strong>In reply to:</strong> <a href="11618.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11634.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="11634.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
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