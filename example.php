<?php

// Require the file with the function CleanURL
require('cleanUrl.php');

// Set charset to UTF-8
echo '<meta charset="UTF-8">';

print_r('<strong>English sample sentence</strong><br />');
$string = "I'm your function & I will convert your string 100%!";
print_r('<em>String:</em> ' . $string);
print_r('<br />');
print_r('<em>Result:</em> ' . cleanUrl($string));

print_r('<br /><br />');

print_r('<strong>Caps to lowecase</strong><br />');
$string = "THERE WILL BE NO CAPS HERE!";
print_r('<em>String:</em> ' . $string);
print_r('<br />');
print_r('<em>Result:</em> ' . cleanUrl($string));

print_r('<br /><br />');

print_r('<strong>Cyrillic alphabet characters</strong><br />');
$string = 'Фирма на клуч';
print_r('<em>String:</em> ' . $string);
print_r('<br />');
print_r('<em>Result:</em> ' . cleanUrl($string));

print_r('<br /><br />');

print_r('<strong>Accented characters</strong><br />');
$string = 'Fußgängerübergänge, Größenmaßstäbe, Größenordnungsmäßig';
print_r('<em>String:</em> ' . $string);
print_r('<br />');
print_r('<em>Result:</em> ' . cleanUrl($string));

print_r('<br /><br />');

print_r('<strong>Currency symbols</strong><br />');
$string = 'I have 100 € and 50 $';
print_r('<em>String:</em> ' . $string);
print_r('<br />');
print_r('<em>Result:</em> ' . cleanUrl($string));

print_r('<br /><br />');

print_r('<strong>Unsafe characters</strong><br />');
$string = 'No unsafe characters here %20 &nbsp; & + , //  / \r\n \n';
print_r('<em>String:</em> ' . $string);
print_r('<br />');
print_r('<em>Result:</em> ' . cleanUrl($string));