<?php  

$marks=[
    "aashiqui"=>[
        "physics"=>85,
        "maths"=>78,
        "chemistry"=>89

    ],
    "arun"=>[
        "physics"=>64,
        "maths"=>73,
        "chemistry"=>36

    ],
    "gokul"=>[
        "physics"=>36,
        "maths"=>64,
        "chemistry"=>46

    ],
    "diviya"=>[
        "physics"=>85,
        "maths"=>68,
        "chemistry"=>75

    ],

];

echo "<pre>";
print_r($marks);
echo "</pre>";


echo "<table border=1 cellspacing=0 cellpadding=10>";
echo"<tr>";
echo"<th>Student Name</th>";
echo"<th>Physics</th>";
echo"<th>Maths</th>";
echo"<th>Chemistry</th>";
echo"</tr>";

foreach($marks as $key=>$v1){

    echo "<tr><td>$key</td>";
    foreach($v1 as $v2){
        echo "<td>$v2</td>";
        
    }
    echo "</tr>";
}
echo "</table>";
