<?php
// Put this in a file like lab2.php and open in a browser.

echo "<h2>WEB TECHNOLOGIES – Getting into PHP</h2>";

// 1. Area & perimeter of a rectangle
$length = 5;
$width  = 3;
$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "<h3>1. Area and Perimeter of a Rectangle</h3>";
echo "Length = $length, Width = $width<br>";
echo "Area = $area<br>";
echo "Perimeter = $perimeter<br><hr>";


// 2. VAT (15%) on an amount
$amount = 200;
$vatRate = 0.15;
$vat = $amount * $vatRate;
$total = $amount + $vat;

echo "<h3>2. VAT on an Amount</h3>";
echo "Amount = $amount<br>";
echo "VAT (15%) = $vat<br>";
echo "Total with VAT = $total<br><hr>";


// 3. Check odd or even (IF–ELSE)
$number = 17;

echo "<h3>3. Odd or Even</h3>";
echo "Number = $number is ";
if ($number % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}
echo "<br><hr>";


// 4. Largest of three numbers (IF–ELSE)
$a = 12;
$b = 5;
$c = 30;
$largest = $a;

if ($b > $largest) {
    $largest = $b;
}
if ($c > $largest) {
    $largest = $c;
}

echo "<h3>4. Largest of Three Numbers</h3>";
echo "Numbers: $a, $b, $c<br>";
echo "Largest = $largest<br><hr>";


// 5. All odd numbers between 10 and 100 (LOOP + IF–ELSE)
echo "<h3>5. Odd Numbers Between 10 and 100</h3>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br><hr>";


// 6. Search an element in an array (LOOP + IF–ELSE + ARRAY)
$numbers = array(3, 7, 10, 15, 21, 30);
$search = 15;
$found = false;
$index = -1;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        $found = true;
        $index = $i;
        break;
    }
}

echo "<h3>6. Search an Element from an Array</h3>";
echo "Array: " . implode(", ", $numbers) . "<br>";
echo "Searching for: $search<br>";

if ($found) {
    echo "Result: Found at index $index<br>";
} else {
    echo "Result: Not found<br>";
}
echo "<hr>";


// 7. Print the following shapes (NESTED LOOP)
echo "<h3>7. Print Shapes (Nested Loops)</h3>";
echo "<pre>";

// 7a) Star shape
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
echo "\n";

// 7b) Number shape: 1 2 3 / 1 2 / 1
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
        if ($i == 3) echo " ";   // space only on first row to match 1 2 3
    }
    echo "\n";
}
echo "\n";

// 7c) Letter shape: A / B C / D E F
$ch = ord('A');
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo chr($ch);
        if ($col < $row) echo " ";
        $ch++;
    }
    echo "\n";
}
echo "</pre><hr>";


// 8. 2D array + nested loop
echo "<h3>8. 2D Array and Shapes</h3>";

// Declare the 2D array exactly like the sheet
$array2D = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);

echo "<b>The array to declare:</b><br>";
echo "<pre>";
for ($i = 0; $i < count($array2D); $i++) {
    for ($j = 0; $j < count($array2D[$i]); $j++) {
        echo $array2D[$i][$j] . " ";
    }
    echo "\n";
}
echo "</pre>";

echo "<b>Shapes to print:</b>";
echo "<pre>";

// From the array: number shape (1 2 3 / 12 / 1)
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $array2D[$i][0 + $j];
        if ($i == 0 && $j < 2) echo " ";
    }
    echo "\n";
}
echo "\n";

// From the array: letter shape (A / B C / D E F)
echo $array2D[0][3] . "\n";
echo $array2D[1][2] . " " . $array2D[1][3] . "\n";
echo $array2D[2][1] . " " . $array2D[2][2] . " " . $array2D[2][3] . "\n";

echo "</pre><hr>";
?>
