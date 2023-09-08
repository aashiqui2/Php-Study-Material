<?php  
$emp=[
    [1,"aashiqui","manager",50000],
    [2,"arun","salesman",120000],
    [3,"harish","computer operator",200000],
    [4,"gokul","driver",500000]
];
echo "<pre>";
print_r($emp);
echo "</pre>";
// echo $emp[1][2];


for($row=0;$row<4;$row++){
for($col=0;$col<4;$col++){
    echo $emp[$row][$col]." ";

}
echo "<br>";
}

echo "<table border=1 cellspacing=0 cellpadding=10>";

echo"<tr>";
echo"<th>Emp no</th>";
echo"<th>Emp name</th>";
echo"<th>Emp Designation</th>";
echo"<th>Salary</th>";
echo"</tr>";

foreach($emp as $v1){
    echo "<tr>";
foreach($v1 as $v2){
    echo "<td> $v2 </td>";
}
echo "<br>";
echo "</tr>";
}

echo "</table>";
