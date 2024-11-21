<?php

$states = "Mississippi, Alabama, Massachusetts, Kansas";

$statesArray = explode(", ", $states);

$statesEndingInXas = array_filter($statesArray, function($state) {
    return preg_match("/xas$/i", $state);
});

$statesBeginningWithMAndEndingWithS = array_filter($statesArray, function($state) {
    return preg_match("/^M.*s$/i", $state);
});

echo "<h3>States that end in 'xas':</h3>";
if (!empty($statesEndingInXas)) {
    echo implode(", ", $statesEndingInXas) . "<br>";
} else {
    echo "No states found ending with 'xas'.<br>";
}

echo "<h3>States that begin with 'M' and end with 's':</h3>";
if (!empty($statesBeginningWithMAndEndingWithS)) {
    echo implode(", ", $statesBeginningWithMAndEndingWithS) . "<br>";
} else {
    echo "No states found beginning with 'M' and ending with 's'.<br>";
}

echo "<h3>All States:</h3>";
echo implode(", ", $statesArray) . "<br>";
?>
