<!DOCTYPE html>
<html>
    <head>
        <title>我婆</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script type="text/javascript">

        </script>
    </head>

    <body>
        <?php
        /*
        echo "OOF";
        echo "<br/>";
        $x = 3;
        $y = 4;
        $z = $x + $y;
        echo $z;
        */

        $x=5; // 全局变量

        function myTest()
        {
            global $x;
            $y = 10; // 局部变量
            echo "<p>测试函数内变量:<p>";
            echo "变量 x 为: $x";
            echo "<br>";
            echo "变量 y 为: $y";
        } 

        myTest();

        echo "<p>测试函数外变量:<p>";
        echo "变量 x 为: $x";
        echo "<br>";
        echo "变量 y 为: $y";
        ?>
    </body>
</html>