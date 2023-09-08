<?php  

$emp=[
    [1,"aashiqui","manager",50000],
    [2,"arun","salesman",120000],
    [3,"harish","computer operator",200000],
    [4,"gokul","driver",500000]
];
$emp=[
    [
        "id"=>1,
        "name"=>"aashiqui",
        "designation"=>"manager",
        "salary"=>50000

    ],
    [
        "id"=>2,
        "name"=>"arun",
        "designation"=>"salesman",
        "salary"=>120000

    ],
    [
        "id"=>3,
        "name"=>"harish",
        "designation"=>"computer operator",
        "salary"=>200000

    ],
    [
        "id"=>4,
        "name"=>"gokul",
        "designation"=>"driver",
        "salary"=>500000

    ],

];


echo "<table border=1 cellspacing=0 cellpadding=10>";
echo"<tr>";
echo"<th>Emp no</th>";
echo"<th>Emp name</th>";
echo"<th>Emp Designation</th>";
echo"<th>Salary</th>";
echo"</tr>";
foreach($emp as list("id"=>$a,"name"=>$b,"designation"=>$c,"salary"=>$d)){
    echo "<tr><td>$a</td> <td>$b</td> <td>$c</td> <td>$d</td></tr>";
   
}
echo "</table>";

?>