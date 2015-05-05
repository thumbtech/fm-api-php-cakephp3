# FM-API-PHP-CakePHP3
Updated FM_API_for_PHP_Standalone Code for PHP 5.4 / CakePHP 3.0 use ...

This is a copy of FM_API_for_PHP_Standalone library delivered with FileMaker Server 14 subject to the following terms:

> Copyright © 2005-2007, FileMaker, Inc. All rights reserved.
> NOTE: Use of this source code is subject to the terms of the FileMaker Software License which accompanies the code. Your use of this source code signifies your agreement to such license terms and conditions. Except as expressly granted in the Software License, no other copyright, patent, or other intellectual property license or right is granted, either expressly or by implication, by FileMaker.

Even though this is the library delivered with FileMaker Server 14, it is quite old. It reports:

- API Version: 1.1
- Minimum Server Version: 10.0.0.0
 
I've made extensive use of this library outside of CakePHP and it works well. (However, it is just a wrapper on the Custom Web Publishing engine of FileMaker server and I have never understood why it is so convoluted. Seriously ... was the author trying to win a "crazy code" contest?)

Sadly, because class constructors are named after classes (instead of __construct) and no namespaces are defined, the API as delivered by FileMaker is a non-starter for use with CakePHP 3.0.

This version only tries to glue things together for use with CakePHP 3.0 and provide support for composer & autoloading of the *many* classes.

To use, in the composer.json file for your app, include something like:

```
...
"require": {
    ...
    "thumbtech/fm-api-php-cakephp3": "1.*",
    ...
    },
...
```

Eventually, I would like to develop a custom CakePHP 3 datasource for FileMaker that will leverage the PHP API!
