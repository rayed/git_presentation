<section>
<h2>Tips</h2>
</section>


<section>
<h2>Before You Start</h2>
<p>Setup Your Git Environment</p>
<pre><code contenteditable>
git config --global user.name "Rayed Alrashed"
git config --global user.email "rayed@example.com"
git config --global color.ui true
</code></pre>
</section>


<section>
<h2>No Passwords</h1>
<p>Don't put password in the repository</p>
<p class="fragment">(also Secrets, Keys, Tokens)</p>
<p class="fragment">Where to Store?</p>
<pre class="fragment"><code contenteditable>
$ more settings.php
:
$db_pass = $ENV['db_pass'];   &lt;==== Stored in Enviroument Variable
:
</code></pre>
<pre class="fragment"><code contenteditable>
$ more settings.php
:
include '/etc/myapp.conf';    &lt;==== Stored Out of Repository File
:

$ more /etc/myapp.conf
$db_pass = $ENV['db_pass'];

</code></pre>
</section>


<section>
<h2>Multiple Settings</h2>
<p class="fragment">Prepare multiple configuration files for different enviourment</p>
<p><span class="fragment">Production</span> <span class="fragment">, Development</span> <span class="fragment">, Staging</span></p>
<pre class="fragment"><code contenteditable>
$ more settings-prod.php
debug = false;
</code></pre>
<pre class="fragment"><code contenteditable>
$ more settings-dev.php
debug = true;
</code></pre>
</section>


<section>
<h2>Change Web Site Flow</h2>

<p class="fragment">Developer Side</p>
<pre class="fragment"><code contenteditable>$ git pull
# If the first time use: "git clone git@github.com:rayed/mysite.git"
</code></pre>
<pre class="fragment"><code contenteditable>$ edit files
$ git add .
$ git commit -m "Fixed encoding bug"
</code></pre>
<pre class="fragment"><code contenteditable>$ git push </code></pre>

<p class="fragment">Server Side</p>
<pre class="fragment"><code contenteditable>
$ cd mysite
$ git pull
</code></pre>

</section>


<section>
<h2>Resources</h2>
<ul>
	<li><a href="http://git-scm.com/">Git Web Site</a></li>
	<li><a href="http://try.github.com/">Try Git: Interactive Git Tutorial</a></li>
	<li><a href="http://git-scm.com/book">Git Book</a></li>
	<li><a href="https://na1.salesforce.com/help/doc/en/salesforce_git_developer_cheatsheet.pdf">Printable Cheat Sheet</a></li>
	<li><a href="http://ndpsoftware.com/git-cheatsheet.html">Interactive Cheat Sheet</a></li>
</ul>
</section>

