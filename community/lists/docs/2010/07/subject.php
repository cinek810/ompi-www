<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
?>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2010/01/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2010/10/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">6 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-09-14 14:30:58</em></td>
  <th>Ending:</th><td><em>2016-03-29 09:20:51</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[OMPI docs] Errors in man pages (on the web, anyway), dead wiki</strong>
<ul><li><a href="0143.php">Jeff Squyres</a> <a name="143"><em>(2010-07-29 15:17:13)</em></a></li></ul>
<ul><li><a href="0142.php">Ralph Castain</a> <a name="142"><em>(2010-07-29 13:10:18)</em></a></li></ul>
<ul><li><a href="0141.php">Jeff Squyres</a> <a name="141"><em>(2010-07-29 12:03:01)</em></a></li></ul>
<ul><li><a href="0140.php">Jeff Squyres</a> <a name="140"><em>(2010-07-29 12:00:29)</em></a></li></ul>
<ul><li><a href="0139.php">John Hsu</a> <a name="139"><em>(2010-07-28 21:13:52)</em></a></li></ul>
<ul><li><a href="0138.php">Radu C</a> <a name="138"><em>(2010-07-28 20:58:34)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-03-29 09:20:51</em></td>
<th>Archived on: </th><td><em>2016-03-29 09:20:53 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2010/01/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2010/10/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<!-- trailer="footer" -->
<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER{'REQUEST_URI'})) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>