<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Tasks</title>
</head>
<body>
  <h2>
    Current To-Do List
  </h2>
  
  <?php
    /*
     * make_list()
     * Defining a recursive function
     * Create an ordered list for tasks, if there is a subtask, the function will be called again
     */
    function make_list($parent){
      global $tasks;
      
      echo '<ul>';
      
      // Loop through each sub-array
      foreach($parent as $task_id => $todo){
        // Display the item
        echo "<li>$todo";
        
        // Check for subtasks
        if(isset($tasks[$task_id])){
          // Call this function again
          make_list($tasks[$task_id]);
        }
        
        echo '</li>'; // Complete the list item
      }// end foreach
      
      echo '</ul>'; // Close the ordered list
    } // end make_list()
  
  
  
    //*****************************************************************************************  
    // Connect to database*********************************************************************
    //*****************************************************************************************
    $dbc = mysqli_connect('localhost', 'root', '', 'php-oop-ullman-ch1');
  
    // Check if the connection is successful *uncomment the below to check*
//     if (!$dbc) {
//         echo "Error: Unable to connect to MySQL." . PHP_EOL;
//         echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//         echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//         exit;
//     }else{
//         echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//         echo "Host information: " . mysqli_get_host_info($dbc) . PHP_EOL;
//     }
  
    // Retrieve all the uncompleted tasks
    $q = 'SELECT task_id, parent_id, task FROM tasks WHERE date_completed="0000-00-00 00:00:00" ORDER BY parent_id, date_added ASC';
    $r = mysqli_query($dbc, $q);
  
    // Initialize the storage array
    $tasks = [];
  
    // Loop through the results
    while(list($task_id, $parent_id, $task) = mysqli_fetch_array($r, MYSQLI_NUM)){
      // Add to the array
      $tasks[$parent_id][$task_id] = $task;
    }
  
    // For debugging
//     echo '<pre>' , print_r($tasks, 1), '</pre>';
  
    // Send the first array element to the make_list()
    make_list($tasks[0]);
  ?>
</body>
</html>