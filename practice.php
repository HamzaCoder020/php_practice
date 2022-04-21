<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP practice</title>
</head>

<body>
<?php

#//variables

    $var1 = 10;
    echo $var1;
    echo "<br />";

    $var1 = 200;
    echo $var1;

    $first_name = 'Hamza';
    $last_name = 'Javed';
    echo '</br>';

#//concatenation of strings

    echo $full_name = $first_name . " " . $last_name . '<br />';

    echo "hi, {$full_name}";

    $phrase1 = 'We all agreed;';
    $phrase2 = ' it was a magnificent evening .';
    $sentence = $phrase1;
    $sentence .= $phrase2;

    echo $sentence;

    ?>
<br/>

<!---------------string functions --------------->

to Upper Case : <?php echo strtoupper($sentence); ?><br/>

to lower Case : <?php echo strtolower($sentence); ?><br/>

to 1st Word : <?php echo ucfirst($sentence); ?><br/>

to Upper Case every word : <?php echo ucwords($sentence); ?> <br/>

String length : <?php echo strlen($sentence); ?> <br/>

how to trim the string : <?php echo 'A' . trim(" BCD ") . 'E'; ?> <br/>

Find Magnificent : <?php echo strstr($sentence , 'magnificent'); ?> <br/>

Replace Magnificent words : <?php echo str_replace('magnificent' , 'Great', $sentence); ?> <br/>

Repeat String  : <?php echo str_repeat($sentence , 2); ?> <br/>

Create sub String  : <?php echo substr($sentence , 2,8); ?> <br/>

Find Position of String  : <?php echo strpos($sentence , 'magnificent'); ?> <br/>

Find character  : <?php echo strchr($sentence , 't'); ?> <br/>


<!-------------------------Numbers Integers--------------------->


addition : <?php  echo $var1 += 10; ?>

subtraction : <?php  echo $var1 -= 10; ?> <br/>

Multiplication : <?php  echo $var1 *= 10; ?> <br/>

division : <?php  echo $var1 /= 10; ?> <br/>


squareroot : <?php echo sqrt($var1); ?> <br/>
Fmod : <?php echo fmod($var1,10); ?> <br/>
Rand : <?php echo rand($var1,1000); ?> <br/>


Increment : <?php  $var1++; echo $var1;?> <br/>
Decrement : <?php  $var1--; echo $var1;?> <br/>



<!----------------------Arrays ------------------>


<?php

 $numbers = array(1,2,3,4,5,6,7,8);

 echo "number at the 3rd index of array : ". $numbers[3] . "<br/>";

 $multipledata = ['car','bike',['silencer','ENGINE','GEAR'],'Truck','HYUNDAI'];

 echo "diplsay the values of aray at " . $multipledata[0] . " and " . $multipledata[2][1] . "<br/>";

 $multipledata[0] = "Sports Car";

 echo print_r($multipledata) . "<br/>";

?>

<!------------------------Functions-------------------->
<?php
function say_hello_to($Arsalan){
    echo "hello {$Arsalan}! <br>";
}

say_hello_to('PHP Developer');

function meating($greatings ,$target , $queries){
    echo $greatings . " " . $target . "! " . "What about your " . $queries . "<br>" ;
}
meating('AoA','Touseef','Health');



function add_subt($val1, $val2) {
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add,$subt);
}

$result_array = add_subt(10,5);

echo  ' Add : ' . $result_array[0] . '<br>';

echo  ' Sub : ' . $result_array[1] . '<br>';
?>


<!-----------------------Array Functions--------------------------->
<?php
    $arrayOfnums = [20,30,40,50,60,70,80,90];

    echo "total number in array" . count($arrayOfnums) .  '<br/>' ;
    echo "min number in array" . min($arrayOfnums) . "<br/>" ;
    echo "max number in array" . max($arrayOfnums) . "<br/>" ;


    echo " sort aRRAY : " . print_r(sort($arrayOfnums)) . '<br>' ;

    echo " desorting of aRRAY : " . print_r(rsort($arrayOfnums)) . '<br>' ;

    echo $string_num = implode('* ',$arrayOfnums) . '<br>';

    print_r(explode('* ',$string_num)) . '<br>';

    echo  in_array(40,$arrayOfnums) . "<br>" ;
?>
<!--------------------------Find the balancing index ----------------------------->



<hr>

<!--------------------Type casting & -->
<?php
 $age = '23 years';

 $age += 3;

 echo "the age is : " .  $age . "<br>" ;




?>


<hr>


<?php


$arrI = 0;
$arr_numbers = [6,5,4,3,7,4,8,7,2,3,7,6,2];
$sum = array_sum($arr_numbers);
    echo "half  :  ".$half = $sum/2;
    echo "<br>";

    for ( $i=0; $i<count($arr_numbers); $i++){
        echo 'index of array = ', $i ,'<br>';
        $arrI = $arr_numbers[$i] + $arrI;
        if ($arrI==$half){
            echo 'sum is equal to half ' , $i;
        }
        elseif ($arrI>$half){
            echo 'Index = ', $i, '<br>';
            echo 'total = ', $sum, '<br>';
            echo 'sum of half = ', $arrI, '<br>';
                $arr_numbers[$i] = $temp;
                $temp = $arr_numbers[$i + 1];
                $arr_numbers[$i] = $arr_numbers[$i + 1];
                if ($arrI==$half){
                    echo "sum completed by this number" , $arr_numbers[$i] , "<br>";
                    echo "sum completed at this index" , $i , "<br>";
                }


        }
    }

?>







</body>
</html>