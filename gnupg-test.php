<?php

putenv('GPGME_DEBUG=9:' . __DIR__ . '/gnupg.log');
putenv('GNUPGHOME=' . __DIR__ . '/.gnupg');

$gnupg = new \gnupg();

$private = $gnupg->import("-----BEGIN PGP PRIVATE KEY BLOCK-----
Version: BCPG C# v1.6.1.0

lQOsBFkJqkwBCACUxJJzsC6AHrh/rsN8xRGrDOzgVUJRjESleU+rmV9hXWPm55Vt
CAAZyJKD+vjF5h2lLSvTEeHqL4WZxn/ru3N9edO5DF7xzwsNrrEwyoE2VW3FLE7l
aumi281uXsh4kEzaVyLtoDnV+hy8As0UpyPu/ceDQ+z9wfTPWVmpgBtcVgSf8eLt
2BePG5wjSjbnUPzH57qA5QbzRzNbZGBc/QpkI4zZb3PTDWf45H1V18HKW46wag4W
Lc0w0kFntJyLDQS5YP/l6LI9Dxk2SM9p8lRCxaQy/u0nQO/ystu3sq2BGt4G4smH
tfI+RizMpk9FSCGjSlWpEtIsz2+Qe2eIkq5lABEBAAH/AwMCUGBIAP3EuKdgKEJY
sznjn4cV9MSf3EpqmKRYK2wvWBn9xID2wsNaszWKvOcU0038Del4SbfKx05mpeLE
pMJ7eCu3YadT4uNjyp0rqNXl1GkssMa/u5hqzJTeEeNjfpBx6cpXuSRpzW+7iUja
IzXEx39uRkh8RB/5FwE7c2zAfriToVPTOb+quM7ymHG9VjcrGxQQtwXTxZNcCWB9
lYxG68QA5cegjS47kW/2829aiTw4etcc1obkSDCAcC/15gEEmqrlE7kC1cN4mZUO
ZLLKfANih1eSzI0jWQ3BRFfl55b9ES7BL99KMJ0t2QimdoGTnz4tEv8acnbI0WmY
6SpliXvr7r0qWIDeklo4yQYVwdFFKp08Wa0o7Dlqk2OBlVISMNCA9ZbBOjEhwkNm
8zzDJNaf8WIQFyN8HuC0nCc160I4I/Q1H34jKmn9g+vgMVO2nWRqyKvP2jR7A9Ha
vO5J9KLU6GUQy5BIXGvy+MCWeERnT4L5PmcbGI+iAWREmvvAY8+bcBy1yJmmWwPl
pN1k1JJO5HwWvsl9gufDt0pdEXaNjCbyZQExNPu/Bd6Dapak8rhDUegziWjz01x/
pzdaZ3j2sjRdpCe7t5MBl6/XHWHN+SAMbWflH4BMOV5BILDqVRlSXZyQYwRvm39X
6wuAwKj7b6YsrYMAX4bn2vm/7LEZBJHA/j4qohtAUVhPSloDTnii+Z5ITJJDAr1a
ftby+pBmpjd2mcqBaJ4Q7a5JTVbD4kafvci9Oy/RwE+w5rFhNI+b4lj8vyNBZO+a
fbLDmxPqxLc4pVVqinOXQ0+rQvHhBP4E3aMlZdy4hrLjHylURYosPxEn+F8KTsJ2
AOf2RzRi4i6ykneJqfhNoYDf2kHF7ktnZ/SX/jVSCrQAiQEcBBABAgAGBQJZCapM
AAoJELCdTTD0kaN83+0H/3sURCjruopTJ9zRr+1nbHLebB4ILlhDfAQQ9F2EEmkh
6dowkWE4xiae5QJ1TY7MVuUwjvFNlPlvQP9p+Aa9tEmW6SHRWU5sTIcqNWgt6kK3
7KnC778EubrgGvj9RrzaqlaF9hmXJ8WDDBUCoAPVKs92ybCv3tG+v8iENC/NTffl
GrbS7beE0eR3cJQo5HwzJ6h5ws5F87idbtBMsTfmiobsHbTA4iRroth3vRAYRR/g
is835TwKCo0a8sFyIqa7sJ3H5LDXeED+S9x+cKOjRbhpaMHNXp0sZXUWP9n6a22k
KfKGHtKzYw9pbSCcUMsKLItqsUeNy+KhhlTNOtEwuaE=
=D6HD
-----END PGP PRIVATE KEY BLOCK-----");
var_dump($gnupg->geterror());
var_dump($private);
$gnupg->addsignkey($private['fingerprint']);
$gnupg->setsignmode(GNUPG_SIG_MODE_DETACH);
