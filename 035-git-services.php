<section>
<h2>GitHub &amp; Hiroku</h2>
</section>


<section>
<h2>GitHub</h2>
<p class="fragment"><a href="http://github.com/">GitHub.com</a></p>
<p class="fragment">Repository Hosting</p>
<p class="fragment">Public Reposisotry: Free, Unlimited Numbers</p>
<p class="fragment">Private Reposisotry: Paid</p>
</section>

<section>
<h2>GitHub</h2>
<p>
<span class="fragment">Create Account</span>
<span class="fragment">, Create Repo</span>
<span class="fragment">, Clone</span>
</p>
<pre class="fragment"><code>$ git clone git://github.com/username/repo_name.git</code></pre>
<p class="fragment">Read only; uses Git protocol</p>
<pre class="fragment"><code>$ git clone git@github.com:username/repo_name.git</code></pre>
<p class="fragment">Read/Write ; uses SSH protocol</p>
<p class="fragment">But how to Authenticate?!</p>
</section>


<section>
<h2>GitHub</h2>
<p class="fragment">Authenticate using SSH Keys</p>
<p class="fragment">From your machine, create Public&amp;Private Keys:</p>
<pre class="fragment"><code>$ ssh-keygen</code></pre>
<pre class="fragment"><code>$ more ~/.ssh/id_rsa.pub
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDX6e0N3Xq+tXiRp5HzfnTLtGI7j8VOB8HmBhbKJJa6zfT3Unxq67aDw0pLbZuxFBBQ7ejlOK1FauDLsLk3tyAF+D84owXgFIRXb8m2y2kuae65I/A5TVnRlzLvwkqWivy8a8yMccjfnX3LB9JGmY4undKq7aA72We0V9+c/1o4s0TaQkkDVLb0Pkvw4dlfUD rayed@Rayed-MacBook-Pro.local
</code></pre>
<p class="fragment">
Copy and add to your GitHub.com account:
<br>
Account Settings &gt; SSH Keys &gt; Add SSH key
</p>
<small class="fragment"><a href="https://help.github.com/articles/generating-ssh-keys">Detailed Steps</a></small>
</section>


<section>
<h2>Complete Flow</h2>
<p class="fragment">First Time</p>
<pre class="fragment"><code>$ git clone git@github.com:username/repo_name.git</code></pre>
<pre class="fragment"><code>
$ cd repo_name
$ edit files
$ git add .
$ git commit -m "Commit Message"
$ git push
</code></pre>
<p class="fragment">Cloned Already?</p>
<pre class="fragment"><code>$ git pull</code></pre>
</section>


<section>
<h2>GitHub: Existing Project</h2>
<pre class="fragment"><code>$ git remote add origin git@github.com:user/repo_name.git</code></pre>
<pre class="fragment"><code>$ git push -u origin master</code></pre>
</section>


<section>
<h2>Heroku</h2>
<p class="fragment">Platform as a service (PaaS) Provider</p>
<p class="fragment">Fire your System Admin</p>
<p class="fragment">Paas vs Iaas vs Saas</p>
</section>


<section>
<h2>Heroku Addon</h2>
<p class="fragment">
PostgreSQL, Memcached, Redis, CouchDB, Solr, MongoDB, Mail, Message Queue
</p>
</section>


<section>
<h2>Heroku Deployment</h2>
<pre class="fragment"><code>$ django-admin.py startproejct mysite</code></pre>
<pre class="fragment"><code>$ pip freeze &gt; requirements.txt</code></pre>
<pre class="fragment"><code>$ echo "web: python manage.py runserver 0.0.0.0:$PORT --noreload" &gt; Procfile</code></pre>
<pre class="fragment"><code>$ git init
$ git add .
$ git commit -m "my django app"</code></pre>
<pre class="fragment"><code>$ heroku create</code></pre>
<pre class="fragment"><code>$ git push heroku master</code></pre>
<p class="fragment">Enjoy Your App</p>
</section>

