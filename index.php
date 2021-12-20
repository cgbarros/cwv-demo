<html>
  <head>
    <title>CWV Workshop</title>
  </head>
  <body>
    <h1>CWV Demo</h1>
    
		<p>
		  Each one of the pages below will purposefully create bad <a href="https://web.dev/vitals">Core Web Vitals</a> scores. You can check those using Google's Chrome Extension <a href="https://chrome.google.com/webstore/detail/web-vitals/ahfhijdlegdabablpippeagghigmibma">Web Vitals</a>.
		</p>
		<p>
		  Note that FID is harder to replicate. You need to try to click in the button immediatelly after the page loads and it will vary from computer to computer. If you are implementing this demo, try changing the <code>busyBrowser()</code> function in the files. We used PHP only to demonstrate how server-side rendering can improve your CLS (see <code>cls_good.php</code>)
		</p>

    <h2>LCP</h2>
    <p>
      <a href="lcp_good.php">Good</a> (LCP < 2.5s)
    </p>
    <p>
      <a href="lcp_medium.php">Medium</a> (2.5s < LCP < 4.0s)
    </p>
    <p>
      <a href="lcp_bad.php">Bad</a> (LCP > 4.0s)
    </p>

    <h2>FID</h2>
    <p>
      <a href="fid_good.php">Good</a> (FID < 100ms)
    </p>
    <p>
      <a href="fid_medium.php">Medium</a> (100ms < FID < 300ms)
    </p>
    <p>
      <a href="fid_bad.php">Bad</a> (FID > 300ms)
    </p>

		<h2>CLS</h2>
		<p>
		  <a href="cls_good.php">Good</a> (CLS < 0.1)
		</p>
		<p>
		  <a href="cls_medium.php">Medium</a> (0.1 < CLS < 0.25)
		</p>
		<p>
	    <a href="cls_bad.php">Bad</a> (CLS > 0.25)
		</p>

  </body>
</html>