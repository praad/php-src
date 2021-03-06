--TEST--
Check XSLTProcessor::hasExsltSupport() with 1 parameter
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
--SKIPIF--
<?php extension_loaded('xsl') or die('skip xsl extension is not available'); ?>
--FILE--
<?php
$proc = new XSLTProcessor();
try {
    $proc->hasExsltSupport('stringValue');
} catch (ArgumentCountError $exception) {
    echo $exception->getMessage() . "\n";
}
?>
--EXPECT--
XSLTProcessor::hasExsltSupport() expects exactly 0 parameters, 1 given
