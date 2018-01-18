## LinyNewsRSS

# A simple rss reader with python<br>
This project is just for myself learning :)
<br>
if you want to use it put **index.php** in your localhost (wamp=www, xamp=htdocs, gnu/linux=/var/www/html)
<br>and in **index.php** file change this line: 
<br>$myPDO = new PDO('sqlite:[directory]'); 
<br>to this (for example) :
<br>$myPDO = new PDO('sqlite:/home/liniolon/projects/python/news.db');
<br>
<br>It's clear you must have install **sqlite3**, **feedparser**<br>
Install sqlite3:<br>
**pip install sqlite3**
<br>
Install feedparser:<br>
**pip install feedparser**<br>
