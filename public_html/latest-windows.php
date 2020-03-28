<?php
// 2019.01.01 - AniLeo
// Permalink to latest Windows Build

/*
Usage:
> wget
wget --content-disposition https://rpcs3.net/latest-windows

> curl
curl -JLO https://rpcs3.net/latest-windows
*/

require "lib/compat/objects/Build.php";
$build = Build::getLatest();
header("Content-Disposition: attachment; filename={$filename_windows}");
header("Location: {$build->url_windows}");
?>
