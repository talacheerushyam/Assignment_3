<?php

$restaurant = array ("Chama Gaucha"=>"$40.50",
                     "Aviva by Kameel"=>"$15.00",
                     "Bone’s Restaurant"=>"$65.00",
                     "Umi Sushi Buckhead"=>"$40.50",
                     "Fandangles"=>"$30.00",
                     "Capital Grille"=>"$60.50",
                     "Canoe"=>"$35.50",
                     "One Flew South"=>"$21.00",
                     "Fox Bros. BBQ"=>"$15.00",
                     "South City Kitchen Midtown"=>"$29.00");
print "<table border='1'>\n";
print"<tr><th>Restaurant Name </th><th>Average Cost </th></tr>";
foreach ($restaurant as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}
print '</table>';


print "<br>The Elements Ordered by Price<br/>";
asort($restaurant);//sort by Average Cost
//code to test sort by cost
print "<table border='5'>";
foreach ($restaurant as $key => $val)
{
    print "<tr><td>$key</td><td> $val</tr></td>\n";
}
print'</table>';
print "<br>The Elements Ordered by Name<br/>";
ksort($restaurant);
print "<table border='5'>";
foreach ($restaurant as $key => $val)
{
    print "<tr><td>$key</td><td> $val</tr></td>\n";
}
print'</table>';

?>