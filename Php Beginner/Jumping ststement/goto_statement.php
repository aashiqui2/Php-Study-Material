<?php  

echo "hello World<br>";
echo "hello World<br>";
echo "hello World<br>";
goto abc;
echo "hello World<br>";
echo "hello World<br>";
echo "hello World<br>";
echo "hello World<br>";
abc:
echo "hey this is label abc<br><br>";

for($i=0;$i<=10;$i++){
    if($i==3){
        goto abcd;
    }
    echo $i,"<br>";
}

abcd:
echo "this is new code";



?>