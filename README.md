Crewbie on Pails
================

Requirements
------------

You need to have a config.php file in the main directory that contains the following:

```
<?php
  define("ADMIN_USER","insert admin username here");
  define("ADMIN_PASS","insert admin password here");
?>
```

You then need to have a crewbie.json file that is writeable by your webserver.

    $ chmod 777 crewbie.json


Data storage
------------

We store all user data in a json file. This is an array of objects.

We define a crewbie as a:
```
{
  "name":"John Doe",
  "points":"56",
  "achievements":["Webdev master", "Other"]
}
```

In Racket this would be similar to:
```
(define-struct crewbie (name points achievements))
(make-crewbie "John Doe" 56 ("Webdev master" "other"))
```

LDAP
----
There is a branch for using LDAP name lookups to convert usernames to full names. The way to activate this is
```
git checkout ldap
```


Memcache
--------
On top of the ldap branch, there is a memcache branch that exists to speed up queries for everything, including the datastore.
```
apt-get install memcached
git checkout memcache
```

You then have to add this line to config.php
```
define("MEMCACHE_SERVER", "wherever your memcache server is, probably localhost");
```

