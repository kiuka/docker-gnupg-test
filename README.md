```
$ ver
Microsoft Windows [Version 10.0.14393]

$ docker -v
Docker version 17.05.0-ce-rc1, build 2878a85

$ docker-compose -v
docker-compose version 1.12.0, build ee0f34e1
```

# setup
```
docker-compose build
docker-compose up -d
```

# docker-compose tests
```
$ docker-compose.exe exec www php gnupg-test.php
string(13) "import failed"
bool(false)
```

# run in new container
```
$ docker-compose run www php gnupg-test.php
bool(false)
array(9) {
  ["imported"]=>
  int(0)
  ["unchanged"]=>
  int(0)
  ["newuserids"]=>
  int(0)
  ["newsubkeys"]=>
  int(0)
  ["secretimported"]=>
  int(0)
  ["secretunchanged"]=>
  int(1)
  ["newsignatures"]=>
  int(0)
  ["skippedkeys"]=>
  int(0)
  ["fingerprint"]=>
  string(40) "107D1ED38EE1272BA86BE60BB09D4D30F491A37C"
}
```

# docker test inside the running container
```
$ docker exec dockertest_www_1 php gnupg-test.php
bool(false)
array(9) {
  ["imported"]=>
  int(0)
  ["unchanged"]=>
  int(0)
  ["newuserids"]=>
  int(0)
  ["newsubkeys"]=>
  int(0)
  ["secretimported"]=>
  int(0)
  ["secretunchanged"]=>
  int(1)
  ["newsignatures"]=>
  int(0)
  ["skippedkeys"]=>
  int(0)
  ["fingerprint"]=>
  string(40) "107D1ED38EE1272BA86BE60BB09D4D30F491A37C"
}
```

```
$ docker exec -it dockertest_www_1 bash
root@85d8b36d880b:/var/www/html# php gnupg-test.php
string(13) "import failed"
bool(false)
```
