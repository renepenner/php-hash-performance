<?php

$interations = 1000000;

$content = 'some random content';

echo 'md5: ';
echo $md5 = md5($content);
echo PHP_EOL;

$before = microtime(true);
for($i = 1; $i < $interations; $i++){
    md5($content . $i);
}
$after = microtime(true);
echo ($after-$before) . " sec\n";


echo 'sha1: ';
echo $sha1 = sha1($content);
echo PHP_EOL;

$before = microtime(true);
for($i = 1; $i < $interations; $i++){
    sha1($content . $i);
}
$after = microtime(true);
echo ($after-$before) . " sec\n";


echo 'sha2 (256): ';
echo $sha256 = hash('sha256', $content);
echo PHP_EOL;

$before = microtime(true);
for($i = 1; $i < $interations; $i++){
    hash('sha256', $content . $i);
}
$after = microtime(true);
echo ($after-$before) . " sec\n";


echo 'sha2 (512): ';
echo $sha256 = hash('sha512', $content);
echo PHP_EOL;

$before = microtime(true);
for($i = 1; $i < $interations; $i++){
    hash('sha512', $content . $i);
}
$after = microtime(true);
echo ($after-$before) . " sec\n";
