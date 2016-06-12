<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Composite</title>
</head>
<body>
    <h1>Using Composite</h1>
    <?php
        require ('WorkUnit.php');
        require ('Team.php');
        require ('Employee.php');
        //create objects
        //one team and three employees
        $alpha      = new Team('Alpha');
        $john       = new Employee('John');
        $cynthia    = new Employee('Cynthia');
        $rashid     = new Employee('Rashid');

        //assign two employees to the team
        $alpha->add($john);
        $alpha->add($rashid);

        echo "now alpha team has {$alpha->getCount()} employee(s)";

        //assign tasks
        $alpha->assignTask('Do something great.');
        $cynthia->assignTask('Do something grand');
        $john->assignTask('Another task needs to be done');
        $john->completeTask('Another task needs to be done');

        //complete a task ad remove a team member
        $alpha->completeTask('Do something great.');
        $alpha->remove($john);
        echo "now alpha team has {$alpha->getCount()} employee(s)";

        unset($alpha, $john, $cynthia, $rashid);
    ?>
</body>
</html>