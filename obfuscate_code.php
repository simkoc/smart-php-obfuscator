<?php
require "class.obfuscator.php";

$sData = file_get_contents($argv[1]);
echo SmartObfuscator::obfuscate($sData);
