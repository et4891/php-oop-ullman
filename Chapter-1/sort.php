<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sorting Multidimensional Arrays</title>
</head>
<body>
  <?php
    /*
     *This page creates a multidimensional array of names and grades
     *The array is then sorted twice: once by name and once by grade.
     *uasort would keep the key such as the example below would be the 256,2,9,364,68
     *usort would drop those keys and start from 0,1,2,3,4 as the keys
     */
  
    //Create the array
    //studentID => array('name' => 'Name', 'grade' => xx.x)
    $students = array(
      256   => array('name' => 'Jon', 'grade' => 98.5),
      2     => array('name' => 'Vance', 'grade' => 85.1),
      9     => array('name' => 'Stephen', 'grade' => 94.0),
      364   => array('name' => 'Steve', 'grade' => 85.1),
      68    => array('name' => 'Rob', 'grade' => 74.6),
    );
  
    // Name sorting function
    function name_sort($x, $y){
      return strcasecmp($x['name'], $y['name']);
    }
  
    //  Grade sorting function
    function grade_sort($x, $y){
      return ($x['grade'] < $y['grade']);
    }
  
    // Print the array as is:
    echo '<h2>Array As Is</h2><pre>' . print_r($students, 1) . '</pre>';
  
    // Sort by name
    uasort($students, 'name_sort');
    echo '<h2>Array Sorted By Name</h2><pre>' . print_r($students, 1) . '</pre>';
  
    // Sort by grade
    uasort($students, 'grade_sort');
    echo '<h2>Array Sorted By Grade</h2><pre>' . print_r($students, 1) . '</pre>';
  
  
  ?>
</body>
</html>