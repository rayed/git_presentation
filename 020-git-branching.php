<section>
<h2>Git Branching</h2>
</section>


<section>
<h2>Before ...</h2>
<p>
Your website repository have 3 commits:
</p>
<img src="img/br1.png" />
</section>


<section>
<h2>A New Issue</h2>
<p>
Start new branch to solve Issue #53
</p>
<pre><code>$ git branch iss53
$ git checkout iss53
</code></pre>
<img src="img/br2.png" />
</section>


<section>
<h2>Issue #53 ... 50% finished</h2>
<pre><code>$ vim index.html
$ git commit -a -m 'added a new footer [issue 53]'
</code></pre>
<img src="img/br3.png" />
</section>


<section>
<h2>Interruption!!</h2>
<p>
befroe finishing Issue #53 ... you get urgent request
</p>
<pre><code>$ git checkout master
$ git branch hotfix
$ git checkout hotfix
$ vim index.html
$ git commit -a -m 'fixed the broken email address'
</code></pre>
<img src="img/br4.png" />
</section>


<section>
<h2>Merging the Urget Request</h2>
<p>
You finish working on the urget request ... merge with master
</p>
<pre><code>$ git checkout master
$ git merge hotfix
</code></pre>
<img src="img/br5.png" />
</section>


<section>
<h2>Back to Issue #53</h2>
<p>
Checkout iss53 branch and finish it ... 100% done!
</p>
<pre><code>$ git checkout iss53
$ vim index.html
$ git commit -a -m 'finished the new footer [issue 53]'
</code></pre>
<img src="img/br6.png" />
</section>


<section>
<h2>Merge Issue #53</h2>
<p>
Issue #53 fixes should be part of the site ... Merge!
</p>
<pre><code>$ git checkout master
$ git merge iss53
</code></pre>
<img src="img/br7.png" />
</section>


<section>
<h2>Merging Conflicts</h2>
<pre class="fragment"><code>$ git merge iss53
Auto-merging index.html
CONFLICT (content): Merge conflict in index.html
Automatic merge failed; fix conflicts and then commit the result.
</code></pre>
<pre class="fragment"><code>$ git status
index.html: needs merge
# On branch master
# # Changes not staged for commit:
# #
# #   unmerged:   index.html
</code></pre>
<pre class="fragment"><code>&lt;&lt;&lt;&lt; HEAD:index.html
&lt;div id="footer"&gt;contact : email.support@github.com&lt;/div&gt;
=======
&lt;div id="footer"&gt; 
  please contact us at support@github.com
&lt;/div&gt; 
&gt;&gt;&gt;&gt; iss53:index.html
</code></pre>
</section>


<section>
<h2>Source</h2>
<p>
<a href="http://git-scm.com/book/en/Git-Branching-Basic-Branching-and-Merging">Git Book - Branching Basics</a>
</p>
</section>

