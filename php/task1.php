<html>
    <head>
        <title>datatypes,controlstatements,functions,arrays</title>
        <style>
        .first{
            float:bottom;
            background-color:green;
            padding:20px;
        }

        .second{
            float:top;
            background-color:yellow;
            padding:20px;
            border:1px solid black;
        }

        .third{
            float:bottom;
            background-color:orange;
            padding:20px;
        }

        .fourth{
            float:bottom;
            background-color:skyblue;
            padding:20px;
        }

        .fifth{
            float:bottom;
            background-color:pink;
            padding:20px;
        }
        </style>
    </head>
    <body>

    <div class="first">
        <h2>Data Types in PHP</h2>
    <?php
    $x = "vamsi";//string
    $y = 10;//integer
    $z = 10.23;//float
    $a = true;//boolean
    $arr = array("a","b","c");//array
    $b = null;
    echo "<h3>";
    echo "1.string:".$x."<br>";
    echo "2.Integer:".$y."<br>";
    echo "3.float:".$z."<br>";
    echo "4.boolean:".$a."<br>";
    echo "5.array values are:<br>";

    for($i=0;$i<3;$i++){
        echo $arr[$i].",";
    }
    echo "<br>";
    echo "6.null:".$b;
    echo "</h3>";
    ?>
    </div>


    <div class="second">
        <h2>control statements in php</h2>
        <?php
        echo "<h4>If statement:</h4>";
        $age = 50;

        if ($age > 30)
        {
          echo "your age is greater than 30!";
        }
        echo "<br><br>";
        echo "<h4>If else statement:</h4>";
        if ($age < 30)
        {
          echo "Your age is less than 30!";
        }
        else
        {
            echo "Your age is greater than or equal to 30!";
        }
        echo "<br><br>";

        echo "<h4>Else If statement:</h4>";
        if ($age < 30)
        {
            echo "Your age is less than 30!";
        }
        elseif ($age > 30 && $age < 40)
        {
            echo "Your age is between 30 and 40!";
        }
        elseif ($age > 40 && $age < 50)
        {
            echo "Your age is between 40 and 50!";
        }
        else
        {
            echo "Your age is greater than 50!";
        }
        echo "<br><br>";
        echo "<h4>Switch statement:</h4>";
        $favourite_site = 'Code';

        switch ($favourite_site) {
            case 'Business':
                echo "My favourite site is business.tutsplus.com!";
                break;
            case 'Code':
                echo "My favourite site is code.tutsplus.com!";
                break;
            case 'Web Design':
                echo "My favourite site is webdesign.tutsplus.com!";
                break;
            case 'Music':
                echo "My favourite site is music.tutsplus.com!";
                break;
            case 'Photography':
                echo "My favourite site is photography.tutsplus.com!";
                break;
            default:
                echo "I like everything at tutsplus.com!";
        }
        ?>
    </div>

    <div class="third">
        <h2>Looping statements:</h2>
        <?php
        echo "<h4>While Loop:</h4>";

        $max = 0;  
        echo $i = 0;
        echo ",";
        echo $j = 1;  
        echo ",";
        $result=0;

        while ($max < 10 )  
        {  
            $result = $i + $j;  

            $i = $j;  
            $j = $result;  

            $max = $max + 1;  
            echo $result;
            echo ",";
        }

        echo "<br><br>";
        echo "<h4>do-while Loop:</h4>";
        echo "<br>";
        $i = 10;
        do
        {
            echo $i.",";
            $i--;
        } while($i>=0);

        echo "<br><br>";
        echo "<h4>For-Loop:</h4>";
        for ($i=1; $i<=10; ++$i)
        {
            echo sprintf("The square of %d is %d.</br>", $i, $i*$i);
        }

        echo "<br><br>";
        echo "<h4>For-each loop:</h4>";
        $fruits = array('apple', 'banana', 'orange', 'grapes');
        foreach ($fruits as $fruit)
        {
            echo $fruit;
            echo "<br/>";
        }
        ?>
    </div>

    <div class="fourth">
        <h2>Functions:</h2>
        <?php
        echo "<h4>function without arguments:</h4>";
        function writeMsg() {
            echo "Hello world!";
        }
        writeMsg();

        echo "<br><br>";
        echo "<h4>functions with arguments:</h4>";
        function familyName($fname, $year) {
            echo "$fname Refsnes. Born in $year <br>";
          }
          
          familyName("Hege", "1975");
          familyName("Stale", "1978");
          familyName("Kai Jim", "1983");
          
          echo "<br><br>";
          echo "<h4>functions with default argument values:</h4>";
          function setHeight(int $minheight = 50) {
            echo "The height is : $minheight <br>";
          }
          
          setHeight(350);
          setHeight(); // will use the default value of 50
          setHeight(135);
          setHeight(80);

          echo "<br><br>";
          echo "<h4>Function with returning values:</h4>";
          function sum(int $x, int $y) {
            $z = $x + $y;
            return $z;
          }
          
          echo "5 + 10 = " . sum(5, 10) . "<br>";
          echo "7 + 13 = " . sum(7, 13) . "<br>";
          echo "2 + 4 = " . sum(2, 4);
        ?>
    </div>

    <div class="fifth">
        <h2>Arrays:</h2>
        <?php
        echo "single dimensional array:";
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; 

        echo "<br><br>";
        echo "<h2>Associative array:</h2><br>";
        echo "These types of arrays are similar to the indexed arrays but instead of linear storage, every value can be assigned with a user-defined key of string type.<br>";
        $name_one = array("Zack"=>"Zara", "Anthony"=>"Any",
                  "Ram"=>"Rani", "Salim"=>"Sara",
                  "Raghav"=>"Ravina");
        echo "<br>";
        echo "<h4>Looping using foreach:</h4>";
        foreach ($name_one as $val => $val_value){
            echo "Husband is ".$val." and Wife is ".$val_value."<br>";
        }

        echo "<br><br>";
        echo "<h4>Multidimensional Arrays:</h4>";

        $favorites = array(
            array("DavePunk","568","davepunk@gmail.com"),
            array("MontySmith","258","montysmith@gmail.com"),
            array("JohnFlinch","987","johnflinch@gmail.com")
        );
        echo "printing elements from multidimensional array using for loop:<br>";
        for($i=0;$i<3;$i++){
            for($j=0;$j<3;$j++){
                for($k=0;$k<3;$k++){
                    echo $favorites[$i][$j][$k];
                }
                echo "<br>";
            }
            echo "<br>";
        }

        echo "<br><br>";
        echo "<h4>Indexed Arrays:</h4><br>";
        $name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");
        echo "Accessing the 1st array elements directly:";
        $n = count($name_one);
        for($i=0;$i<$n;$i++){
            echo "<li>" . $name_one[$i]. "</li>";
        }
        ?>
    </div>
</body>
</html>
