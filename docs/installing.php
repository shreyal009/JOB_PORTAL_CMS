
<html lang="en">
<head>
<meta charset="utf-8">

<title>Docs JOB Portal CMS</title>

<link rel="stylesheet" href="Stylesheets/styles.css">
</head>
<body class="docs">
<header id="top">

<div class="wrap">
<h1>Docs</h1>
</div>
</header>
<?php include "default.php";?>
<h1>Installing</h1>
<p>Before installing, make sure your platform has the <a href="/docs/getting-started/requirements">required</a> components to run JOB_PORTAL_CMS.</p>
<ol>
<li>Download the latest version of JOB_PORTAL_CMS.</li>
<li>Navigate to your downloading file and extract the contents.</li>
<li>Depending on your host there may be a few methods of getting files uploaded.
The most common is FTP/SFTP. In your favourite client, connect to your webhost
and upload the files into the <code>public</code> folder. <strong>Note:</strong> on different hosts,
this folder might be called <code>public_html</code>, <code>web</code>, or <code>httpdocs</code>.</li>
<li>Most server should be configured to allow the webserver to read and write to
your files and folders, but some do not, in this case you will have to change
the permissions on the <code>all folders and sub-folders</code> to <code>0777</code> for
the installer to run.</li>
<li>Enter the Database name you want to create</li>
<li>Navigate your browser to your Job-Portal-Master directory URL, if you have placed Job-Portal-Master
in a sub directory make sure you append the folder name to the URL:</li>
</ol>
</br>
</br>
</br>
<ol>
<li><p>Follow the instructions in the installer.</p></li>
<li><p>Once you have completed the install, make sure to delete the <code>install.php</code> file for
security purposes.</p></li>
</ol>


</section>
</section>



<script>
  !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
  arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
  d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
  insertBefore(d,q)}(window,document,'script','_gs');

  _gs('GSN-265753-H');
</script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-28956662-1', 'auto');
	ga('send', 'pageview');
</script>
</body>
</html>

