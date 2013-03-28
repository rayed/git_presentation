<section>
<h2>Source Code Managment</h2>
</section>

<section>
<h2>What is SCM?</h2>
<p>Manage Changes to Source Code</p>
</section>

<section>
<h2>Why Change Code?</h2>
<ul>
<li class="fragment">New Customer Requirement</li>
<li class="fragment">Bugs</li>
<li class="fragment">New Features</li>
<li class="fragment">Improvments: Performance, Desgin, Graphics, etc ...</li>
<li class="fragment">Mistakes: Delete, Modify</li>
</ul>
</section>

<section>
<h2>... So! Just change it!</h2>
</section>

<section>
<h2>What Could Go Wrong?</h2>
<ul>
<li class="fragment">Change is Buggy</li>
<li class="fragment">Design is Ugly</li>
<li class="fragment">Performance Degraded</li>
<li class="fragment">Undo Unintentional Deletes</li>
<li class="fragment">etc ...</li>
</ul>
<p class="fragment">Go Back to Old Code</p>
</section>

<section>
<h2> ... need for branches & tags ...</h2>
</section>

<section>
<h2> ... multi user access ...</h2>
</section>

<section>
<h2>Poor Man's SCM</h2>
<p>
Comment Old Code
<pre><code contenteditable>
/*
// Old code 
$password = md5($password);
*/
// Add Salt to Password
$password = md5($salt . $password);
</code></pre>
</p>
<p class="fragment">
Soon file will have 10% code 90% old code
<p>
</section>

<section>
<h2>Poor Man's SCM</h2>
<p>
Multiple Copies of the File:
<pre><code contenteditable>
$ ls -l
user_controller.php
user_controller_2012_03_12.php
user_controller_2012_01_23.php
user_controller_before_migration.php
user_model.php
user_model_2012_02_18.php
</code></pre>
</p>
<ul>
<li class="fragment">Pollute file system with old files</li>
<li class="fragment">Files depends on other files, version don't match!</li> 
</ul>
</section>

<section>
<h2>Poor Man's SCM</h2>
<p>
Multiple Copies of the whole project:
<pre><code contenteditable>
$ ls -l websites
customer1
customer1_website_2011_06_03
customer1_website_2012_04_22
customer1_website_new_design
customer1_website_new_design2
customer2
customer2_website_2011_08_11
customer2_website_2012_12_22
customer2_website_light_design
customer2_website_green_design
:
:
customer8_website_small_test
</code></pre>
</p>
<ul>
<li class="fragment">Large Size</li>
<li class="fragment">What changed between different versions</li>
</ul>
</section>


<section>
<h2>Why Git?</h2>
<ul>
<li class="fragment">Local: Serverless, Offline, Repository Copy</li>
<li class="fragment">Fast: Even for Large Projects</li>
<li class="fragment">Small: Less Disk Space</li>
<li class="fragment">Distributed: Copy the Whole Repository</li>
<li class="fragment">Easy to Learn: Productive After 1 Hour Tutorial</li>
<li class="fragment">The New Standard: GitHub, Android, Apache, Drupal, Eclipse, Fedora, Gnome, KDE, Linux, Perl, PHP, PostgreSQL, Qt, Rails, list go on ... </li>
</ul>
<p class="fragment"><a href="http://thkoch2001.github.com/whygitisbetter/">Why Git is Better than X</a></p>
</section>


