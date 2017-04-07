Welcome to the Store!
=====================

The purpose of this repository is to have the store-specific structure. Be sure to periodically make the repository writeable by the web process so that uploads work.


Making All the Symlinks
-----------------------
You basically are going to symlink the core directory here. You can symlink the following from the top level:



Then, you have to symlink the contents of the html directory.


Cron Jobs
---------

Configure cronjobs, like this, but with your directory:

<pre>
*	*	*	*	*	cd /var/www/6gearmotorsports.powersporttechnologies.com && php html/index.php croncontrol/emails
15	*	*	*	*	cd /var/www/6gearmotorsports.powersporttechnologies.com && php html/index.php croncontrol/hourly
0	2	*	*	*	cd /var/www/6gearmotorsports.powersporttechnologies.com && php html/index.php croncontrol/daily
0	22	*	*	6	cd /var/www/6gearmotorsports.powersporttechnologies.com && php html/index.php croncontrol/weeklys
0	0	1	*	*	cd /var/www/6gearmotorsports.powersporttechnologies.com && php html/index.php croncontrol/monthly
*	*	*	*	*	cd /var/www/6gearmotorsports.powersporttechnologies.com && php html/index.php croncontrol/processparts
</pre>


Environment File
----------------

There is a default environment file. 


Configuring Apache
------------------




