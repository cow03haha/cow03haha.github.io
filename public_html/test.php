<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
    $ly = array("idl" => '1',"usernamel" => 'ly');
    $ngcx = array("idn" => '2',"usernamen" => 'ngcx');
    var_dump($ly+$ngcx);
    echo "</br>";
    $ly = array("id" => '1',"username" => 'ly');
    $ngcx = array("id" => '2',"username" => 'ngcx');
    var_dump($ngcx+$ly);
    echo "</br>";

    $t=date("H");
    echo $t . "</br>";
    if ($t <= "10")
    {
        echo "Good morning!" . "</br>";
    }
    else if ($t<"20")
    {
        echo "Have a good day!" . "</br>";
    }

    $favcolor="red";
    switch ($favcolor)
    {
    case "red":
        echo "你喜欢的颜色是红色!" . "</br>";
        break;
    case "blue":
        echo "你喜欢的颜色是蓝色! " . "</br>";
        break;
    case "green":
        echo "你喜欢的颜色是绿色!" . "</br>";
        break;
    default:
        echo "你喜欢的颜色不是 红, 蓝, 或绿色!" . "</br>";
    }


    $a=array("key1"=>"val1","key6"=>"val6","key3"=>"val1","key5"=>"val6","key4"=>"val8");
    echo var_dump($a) . "</br>";
    $a=array("key1"=>"val1","key6"=>"val6","key3"=>"val1","key5"=>"val6","key4"=>"val8");
    sort($a); // 會破壞key
    echo var_dump($a) . "</br>";
    $a=array("key1"=>"val1","key6"=>"val6","key3"=>"val1","key5"=>"val6","key4"=>"val8");
    rsort($a); // 會破壞key
    echo var_dump($a) . "</br>";
    $a=array("key1"=>"val1","key6"=>"val6","key3"=>"val1","key5"=>"val6","key4"=>"val8");
    asort($a); // 不會破壞key，依照value由小到大排
    echo var_dump($a) . "</br>";
    $a=array("key1"=>"val1","key6"=>"val6","key3"=>"val1","key5"=>"val6","key4"=>"val8");
    ksort($a); // 不會破壞key，依照key由小到大排
    echo var_dump($a) . "</br>";
    $a=array("key1"=>"val1","key6"=>"val6","key3"=>"val1","key5"=>"val6","key4"=>"val8");
    arsort($a); // 不會破壞key，依照value由大到小排
    echo var_dump($a) . "</br>";
    $a=array("key1"=>"val1","key6"=>"val6","key3"=>"val1","key5"=>"val6","key4"=>"val8");
    krsort($a); // 不會破壞key，依照key由大到小排
    echo var_dump($a) . "</br>";
    $cars=array("Volvo","BMW","Toyota");
    rsort($cars);
    echo var_dump($cars) . "</br>";

    $numArray =array(3,2,6,5,8,10);
    echo var_dump($numArray) . "</br>";
    $numCount = count($numArray);
    for($i=$numCount-1;$i>=0;$i--){
        for($j=0;$j<$i;$j++){
            if($numArray[$j]< $numArray[$j+1]){
                $aa = $numArray[$j+1];
                $numArray[$j+1]=$numArray[$j];
                $numArray[$j]=$aa;
            }
        }
    }

    foreach ($numArray as $key => $value) {
        echo "key  为 " . $key . "，对应的 value 为 ". $value . "</br>";
    }

    echo var_dump($numArray) . "</br>";

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "</br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "</br>";

    $i=1;
    while($i<=5)
    {
        echo "The number is " . $i . "<br>";
        $i++;
    }

    echo __FILE__ . "</br>";

    $name = $_REQUEST['fname']; 
    echo $name . "</br>";

    echo 'a\\b\n' . "</br>";
    echo substr("1220001", 0 ,2) . "<br>";
?>