## Breaking Core Web Vitals on purpose

Each one of the pages in this website will purposefully create bad [Core Web Vitals](https://web.dev/vitals) scores. You can check those using Google's Chrome Extension [Web Vitals](https://chrome.google.com/webstore/detail/web-vitals/ahfhijdlegdabablpippeagghigmibma).
	
Note that FID is harder to replicate. You need to try to click in the button immediatelly after the page loads and it will vary from computer to computer. If you are implementing this demo, try changing the <code>busyBrowser()</code> function in the files. We used PHP only to demonstrate how server-side rendering can improve your CLS (see <code>cls_good.php</code>).

The website is at https://cwv.caiobarros.com

## This is also a Repl

Check it at https://replit.com/@ElykSorab/Breaking-Core-Web-Vitals