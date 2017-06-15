<?php
$biscuits = array(
    "custard cream",
    "rich tea",
    "cookie",
    "oreo",
    "bourbon",
    "jammie dodger",
    "digestive",
    "shortbread",
    "party ring"
);


//for ($iMax=1; $iMax <count($biscuits); $iMax++)
//{
//    echo '<li'.($i % 4 == 0 ? ' class="no-margin"' : '').'>'.$biscuits[$iMax].'</li>';
//}

echo "<table class='area_list'><tr>";
// Loop users within areas, divided up in 2 columns
$count = count($biscuits);
for ($i = 0; $i < $count; $i++) {
    $uid = $biscuits[$i];
    // get the modulus value + ceil for uneven numbers
    $rowCalc = ($i + 1) % ceil($count / 3);

    if ($rowCalc == 1) {
        echo "<td><ul>";
    }

    // OUTPUT the actual list item
    echo "<li>{$biscuits[$i]}</li>";

    if ($rowCalc == 0 && $i != 0) {
        echo "</ul></td>";
    }
}
echo "</tr></table>";