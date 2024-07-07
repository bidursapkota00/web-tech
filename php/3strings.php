<?php
$variable = 'something';
$singleQuotedString = '$variable will not be parsed.\n';
echo $singleQuotedString;
// Output: $variable will not be parsed.\n

$doubleQuotedString = "\n\n$variable will not be parsed.\n\n";
echo $doubleQuotedString;
// Output: something will not be parsed.

$variable = 'world';
$heredocString = <<<EOT
Hello, $variable!
This is a multi-line string using heredoc syntax.\n\n
EOT;
echo $heredocString;
// Output: Hello, world!
//         This is a multi-line string using heredoc syntax.

$variable = 'world';
$nowdocString = <<<'EOT'
Hello, $variable!
This is a multi-line string using nowdoc syntax.
EOT;
echo $nowdocString;
// Output: Hello, $variable!
//         This is a multi-line string using nowdoc syntax.

echo "\n\n";
echo strlen("Hello, world!"); // Output: 13
echo "\n";
echo strpos("Hello, world!", "world"); // Output: 7
echo "\n";
echo substr("Hello, world!", 7, 5); // Output: world
echo "\n";
echo str_replace("world", "PHP", "Hello, world!"); // Output: Hello, PHP!
echo "\n";
echo strtolower("HELLO, WORLD!"); // Output: hello, world!
echo "\n";
echo strtoupper("hello, world!"); // Output: HELLO, WORLD!
echo "\n";
echo trim("  Hello, world!  "); // Output: Hello, world!
echo "\n";
$array = explode(", ", "Hello, world!");
print_r($array); // Output: Array ( [0] => Hello [1] => world! )

$string = implode(" ", $array);
echo $string; // Output: Hello world!
echo "\n";

$fruits = ['apple', 'banana', 'cherry'];
echo "I have an {$fruits[1]}."; // Output: I have a banana.
echo "\n";

class Fruit
{
    public $name = 'apple';
}

$fruit = new Fruit();
echo "This is an {$fruit->name}.";
