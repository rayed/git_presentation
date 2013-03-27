<section>
<h2>Git Basics</h2>
</section>


<section>
<h2>Local Repository</h2>
<p>Life without Git</p>
<pre class="fragment"><code>
$ ls -l
img/
css/
js/
index.html
</code></pre>

<pre class="fragment"><code>
$ git status
fatal: Not a git repository (or any of the parent directories): .git
</code></pre>
</section>


<section>
<h2>Local Repository</h2>
<p>Create Local Repository</p>
<pre class="fragment"><code>
$ git init .
</code></pre>

<pre class="fragment"><code>
$ ls -la
.git  &lt;=======  Git Local Repo
img/
css/
js/
index.html
</code></pre>
</section>


<section>
<h2>Local Repository</h2>
<p>Untracked</p>
<pre class="fragment"><code>
$ git status
# On branch master
#
# Initial commit
#
# Untracked files:
#   (use "git add <file>..." to include in what will be committed)
#
#	css/
#	img/
#	index.html
#	js/
nothing added to commit but untracked files present (use "git add" to track)
</code></pre>
</section>


<section>
<h2>Local Repository</h2>
<p>Track and Stage</p>
<pre class="fragment"><code>
$ git add .  &lt;====== "." everything in current dir
</code></pre>

<pre class="fragment"><code>
$ git status
# On branch master
#
# Initial commit
#
# Changes to be committed:
#   (use "git rm --cached <file>..." to unstage)
#
#	new file:   css/sample
#	new file:   img/sample
#	new file:   index.html
#	new file:   js/sample
#
</code></pre>
</section>


<section>
<h2>Local Repository</h2>
<p>Commit!!</p>
<pre class="fragment"><code>
$ git commit -m "My First Commit"
</code></pre>

<pre class="fragment"><code>
$ git status
# On branch master
nothing to commit, working directory clean
</code></pre>
</section>


<section>
<h2>Local Repository</h2>
<p>Change Code</p>
<pre class="fragment"><code>
$ edit index.html  &lt;============== CHANGE FILE
$ edit about.html  &lt;============== NEW FILE
</code></pre>
<pre class="fragment"><code>
$ git status
# Changes not staged for commit:
#	modified:   index.html
#
# Untracked files:
#	about.html
no changes added to commit (use "git add" and/or "git commit -a")
</code></pre>
<p class="fragment">index.html: Tracked ... NOT Staged</p>
<p class="fragment">about.html: NOT Tracked ... NOT Staged</p>
</section>


<section>
<h2>Local Repository</h2>
<p>Stage <span class="fragment">and Track</span></p>
<pre class="fragment"><code>
$ git add index.html  &lt; ============== Stage
</code></pre>
<pre class="fragment"><code>
$ git add about.html  &lt; ============== Track and Stage
</code></pre>
<pre class="fragment"><code>
$ git status
# Changes to be committed:
#	new file:   about.html
#	modified:   index.html
</code></pre>
<p class="fragment">Not Commited Yet!!</p>
</section>


<section>
<h2>Local Repository</h2>
<p>My Second Commit</p>
<pre class="fragment"><code>
$ git commit -m "Added About page"
</code></pre>
<pre class="fragment"><code>
$ git status 
# On branch master
nothing to commit, working directory clean
</code></pre>
</section>


<section>
<h2>Local Repository</h2>
<h3>When to Stage and When to Commit?</h3>
<p class="fragment">
Stage when file reach working state
</p>
<p class="fragment">
Commit when project reach working state
</p>
</section>


<section>
<h2>Recap with Graphs</h2>
<p>Fancy Graphs</p>
</section>


<section>
<h2>Time Machine</h2>
<p>... or what if I commit my code!</p>
</section>


<section>
<h2>git log</h2>
<pre class="fragment"><code>
$ git log
</code></pre>

<pre class="fragment"><code>
commit e78205f5b61fa5ef8f94af7bae5a5783bb8a0625
Author: Rayed Alrashed &lt;rayed@example.com&gt;
Date:   Tue Mar 12 23:28:54 2013 +0000

Added About page
</code></pre>

<pre class="fragment"><code>
commit 45b30fc4324e116db551845e588c9086aa26a625
Author: Rayed Alrashed &lt;rayed@example.com&gt;
Date:   Wed Mar 27 06:28:02 2013 +0000

My first commit
</code></pre>

<p>
<span class="fragment">What?</span>
<span class="fragment">When?</span>
<span class="fragment">Who?</span>
<span class="fragment">ID</span>
</p>

</section>


<section>
<h2>Travel to the Past</h2>
<pre class="fragment"><code>
$ git checkout 45b30fc4324e116db551845e588c9086aa26a625
</code></pre>

<pre class="fragment"><code>
$ ls -l
.git
img/
css/
js/
index.html  &gt; ==== Our OLD index
    &gt; ==== about.html gone!
</code></pre>
<p class="fragment">Warning: You can't change the past ...</p>
<p class="fragment"> ... may be in a parallel universe 
<span class="fragment"> (AKA branch)</span>
</p>
</section>


<section>
<h2>Return to the Present</h2>
<pre class="fragment"><code>
$ git checkout master
</code></pre>

<pre class="fragment"><code>
$ ls -l
.git
img/
css/
js/
index.html  &gt; ==== Latest index
about.html  &gt; ==== about.html is Back
</code></pre>
</section>


<section>
<h2>What Changed</h2>
<p>Show code changes between 2 commits</p>
<pre class="fragment"><code>
$ git diff 45b30fc4324e116db551845e588c9086aa26a625 
</code></pre>
<pre class="fragment"><code>
--- a/about.html
+++ b/about.html
@@ -1 +1 @@
-&lt;h1&gt;About Us&lt;/h1&gt;
+&lt;h1&gt;About the Company&lt;/h1&gt;
</code></pre>

</section>

