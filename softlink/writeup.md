This challenge should be solved with the knowledge of linux softlink.

First, create a soft link so called, test , which links to /var/www/html/uploads/
```
ln -s /var/www/html/uploads/ test
```

And then , compress the softlink into a zip file with symbolic parameter.
```
zip -y tmp1.zip test
```

Next , create a folder named `test` and create `test/shell.php`, which contains the webshell, and compress it 

```
zip -r tmp2.zip test
```

Finally , upload tmp1.zip and tmp2.zip by sequence, the softlink in tmp1.zip will be released under /tmp/xxxxxx/ , which points to /var/www/html/uploads/ , while the webshell `shell.php` in tmp2.zip will be released under `test` directory, as `test` links to /var/www/html/uploads/ , the webshell will also be released under /var/www/html/uploads/ 
