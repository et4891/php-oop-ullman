<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factory</title>
</head>
<body>
<!--Since no real html input being created we insert the below into url for testing purpose-->
<!--
    Rectangle Test:
    factory.php?shape=rectangle&dimensions[]=12&dimensions[]=14
    This will give the result of area = 168 and perimeter = 52
    ---------------------------------------
    Triangle Test:
    factory.php?shape=triangle&dimensions[]=12&dimensions[]=14&dimensions[]=5
    This will give the result of area = 29.230762904858 and perimeter = 31
    ---------------------------------------
    Shapes not exist Test:
    factory.php?shape=tfriangle&dimensions[]=12&dimensions[]=14&dimensions[]=5
-->
    <?php
        require ('ShapeFactory.php');
        require ('Shape.php');
        require ('Rectangle.php');
        require ('Triangle.php');

        //perform minimal validation
        if(isset($_GET['shape'], $_GET['dimensions'] )){
            //create the object
            $shape      = $_GET['shape'];
            $dimensions = $_GET['dimensions'];
            $obj = ShapeFactory::Create($shape, $dimensions);

            echo "<h2> Creating a {$shape} ...</h2>";
            /* As $obj is now some sort of Shape-based object, you know it has a getArea() method that can be called. */
            echo "<p>The area is " . $obj->getArea() . "</p>";
            echo "<p>The parameter is " . $obj->getPerimeter() . "</p>";
        }else{
            echo "<p>Please provide a shape type and size.</p>";
        }

        unset($obj, $shape, $dimensions);
    ?>
</body>
</html>