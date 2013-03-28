<section>
<h2>Git on the Server</h2>
</section>


<section>
<h2>Do I need a Server?</h2>
<ul>
<li>For Collaboration</li>
<li>GitHub.com Free Hosting; but Public</li>
<li>Very Easy: SSH + Git</li>
</section>


<section>
<h2>Protocols</h2>
<ul>
<li class="fragment">Local: Another Directory; + Simple ; - Sharing is Hard</li>
<li class="fragment">SSH: + Easy Secure Sharing ; - No Anonymous</li>
<li class="fragment">Git Protocol: + Fastest ; - No Authentcation, Read Only, Setup Required</li>
<li class="fragment">HTTP/S: + Easy, Firewall Friendly, RO or RW ; - Slower, Read Write is harder</li>
</ul>
<p class="fragment">Rule of Thumb: SSH for Read/Write Access</p>
<p class="fragment">Git protocol for Read Access </p>
</section>


<section>
<h2>Bare Repository</h2>
<p class="fragment">Repository without a Working Directory</p>
<p class="fragment">Normal Repository: mysite</p>
<pre class="fragment"><code> .git/
	COMMIT_EDITMSG
	FETCH_HEAD
	HEAD
	ORIG_HEAD
	:
img/
css/
js/
index.html
</code></pre>

<p class="fragment">Bare Repository: mysite.git</p>
<pre class="fragment"><code>COMMIT_EDITMSG
FETCH_HEAD
HEAD
ORIG_HEAD
:
</code></pre>
</section>


<section>
<h2>Creating Bare Repository</h2>
<pre class="fragment"><code>$ git clone --bare mysite mysite.git </code></pre>
<p class="fragment">Roughly equivalent to: </p>
<pre class="fragment"><code>$ cp -Rf mysite/.git mysite.git </code></pre>
</section>


<section>
<h2>Put the Bare Repository on a Server</h2>
<pre class="fragment"><code>$ scp -r mysite.git user@git.example.com:/opt/git</code></pre>
<p class="fragment">Other Users can Clone Now: </p>
<pre class="fragment"><code>$ git clone user@git.example.com:/opt/git/mysite.git </code></pre>
</section>


<section>
<h2>Typical Workflow: First Time</h2>
<p class="fragment">Online</p>
<pre class="fragment"><code>$ git clone user@git.example.com:/opt/git/mysite.git</code></pre>
<p class="fragment">Offline</p>
<pre class="fragment"><code>$ edit files
$ git add files
$ git commit -m "Another Great Commit"

... Repeat as much as you want ...
</code></pre>
<p class="fragment">Online</p>
<pre class="fragment"><code>$ git push</code></pre>
</section>



<section>
<h2>Typical Workflow: Next Time</h2>
<p class="fragment">Online</p>
<pre class="fragment"><code>$ git pull</code></pre>
<p class="fragment">Offline</p>
<pre class="fragment"><code>$ edit files
$ git add files
$ git commit -m "Another Great Commit"

... Repeat as much as you want ...
</code></pre>
<p class="fragment">Online</p>
<pre class="fragment"><code>$ git push</code></pre>
</section>

<section>
<h2>Where Pull &amp; Push Go</h2>
<pre><code class="shell">
$ git remote -v
origin	user@git.example.com:/opt/git/mysite.git (fetch)
origin	user@git.example.com:/opt/git/mysite.git (push)
</code></pre>
</section>
