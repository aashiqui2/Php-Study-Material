<?php  

$food=array('orange','banana','apple','grapes','55');
echo in_array('orange',$food);//if true print 1 else nothing

$a=array(array(5,'h'),array('p','r'),'0');

//strict mode

// in_array(search, array, type)

// Parameter	Description
// search	Required. Specifies the what to search for
// array	Required. Specifies the array to search
// type	Optional. If this parameter is set to TRUE, the in_array() function searches for the search-string and specific type in the array.
if(in_array(array('5','h'),$a,true)){
    echo "found!";

}else{
    echo "not find";
}


?>