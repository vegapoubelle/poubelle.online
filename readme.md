# poubelle.online
le site internet

you need the `connect.php` file that has the creds for the mysql server
~~only [x4m3](https://philippeloctaux.com) has it~~ (*he lost the file*)

## server requirements
some mysql server for the database stored
a http server + php (i used nginx and some php thing)

here's the mysql structure if you wanna do the same thing: ![mysql structure](mysql.png)

the database name is **poubelle**, the table name is **masse**.

## git hook on the server

i have a git repo on the server where everything is hosted, and when the website is being pushed to the server, the hook grabs the contents from this git repo and puts the **connect.php** file with the correct credentials for the mysql server, and puts everything into the folder for the web server:

```bash
#!/bin/sh

GIT_REPO=https://github.com/vegapoubelle/poubelle.online.git
TMP_GIT_CLONE=/tmp/la-poubelle
PUBLIC_WWW=/srv/www/poubelle.online

echo "starting"
git clone $GIT_REPO $TMP_GIT_CLONE --depth=1
echo "git repo cloned"
cd $TMP_GIT_CLONE
echo "building"
cp ~/poubelle-connect.php src/php/connect.php
cp src/* $PUBLIC_WWW -r -v
rm -Rf $TMP_GIT_CLONE
echo "built and ready to be served"
exit
```
