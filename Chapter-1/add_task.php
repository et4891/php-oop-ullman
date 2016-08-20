<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add a Task</title>
</head>
<body>
  <?php
    // Connect to database
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
  
//   die();
  
    // Check if the form has been submitted
    // Test the request is 'POST' and the input text box named task is not empty
    if(($_SERVER['REQUEST_METHOD'] == 'POST') && !empty($_POST['task'])){
      // Sanctify the input
      
      // The parent_id must be an integer
      // The filter extension is used to guarantee that the value is an integer greater than 1 in case someone hacked the form to send text as the parent_id which would break the query
      if(isset($_POST['parent_id']) && filter_var($_POST['parent_id'], FILTER_VALIDATE_INT, array('min_range' => 1))){
        $parent_id = $_POST['parent_id'];
      }else{
        $parent_id = 0;
      }
      
      // Escape the task
      // remove tags entered in the inputs
      $task = mysqli_real_escape_string($dbc, strip_tags($_POST['task']));
      
      // Add the task to the database
      $q = "INSERT INTO tasks (parent_id, task) VALUES ($parent_id, '$task')";
      $r = mysqli_query($dbc, $q);
      
      // Report on the results
      // if no rows is affected the result would be -1 which would return the else block
      if(mysqli_affected_rows($dbc) == 1){
        echo '<p>The task has been added!</p>';
      }else{
        echo '<p>The task could not be added!</p>';
      }
    } //END OF THE SUBMISSION IF
  
  // Display the form
  echo '<form action="add_task.php" method="post">
        <fieldset>
          <legend><Add a Task</legend>
          <p>Task: <input name="task" type="text" size="60" maxlength="100" required></p>
          <p>Parent Task: <select name="parent_id"><option value="0">None</option>';
  
  // Retrieve all the uncompleted tasks
  $q = 'SELECT task_id, parent_id, task FROM tasks WHERE date_completed="0000-00-00 00:00:00" ORDER BY date_added ASC';
  $r = mysqli_query($dbc, $q);
    
  // Also store the tasks in an array for use later
  $tasks = array();
  
  // Fetch the records
  while(list($task_id, $parent_id, $task) = mysqli_fetch_array($r, MYSQLI_NUM)){
    // Add to the select menu
    echo "<option value=\"$task_id\">$task</optin>\n";
    
    // Add to the array
    $tasks[] = array('task_id' => $task_id, 'parent_id' => $parent_id, 'task' => $task);
  } //End while loop
  
  // Complete the form
  echo '</select></p>
        <input name="submit" type="submit" value="Add This Task">
        </fieldset>
        </form>';
  
  // Sort the tasks by parent_id
  function parent_sort($x, $y){
    return ($x['parent_id'] > $y['parent_id']);
  }
  usort($tasks, 'parent_sort');
  
  // Display all the tasks    //echo '<pre>',print_r($tasks,1),'</pre>';
  echo '<h2>Current To-Do List</h2><ul>';
  foreach ($tasks as $task){
    echo "<li data-task-id='{$task['task_id']}' data-parent-id='{$task['parent_id']}'>{$task['task']}</li>\n";
  }
  echo '</ul>';
  
  function print_pre($data){
    echo '<pre>',print_r($data,1),'</pre>';
  }
  ?>
</body>
</html>