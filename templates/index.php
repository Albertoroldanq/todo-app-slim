<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <style>
        body {
            margin: 50px 0 0 0;
            padding: 0;
            width: 100%;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            color: #aaa;
            font-size: 18px;
        }

        h1 {
            color: #719e40;
            letter-spacing: -3px;
            font-family: 'Lato', sans-serif;
            font-size: 100px;
            font-weight: 200;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<h1>To-do list</h1>
<form method="post" action="/addtask">
    <input type="text" name="newTask">
    <input type="submit" value="Add task">
</form>
<ul>
    <?php
        foreach($data as $task) {
            echo '<li>';
            echo $task['title'];
            echo '<a href="/markascompleted/' . $task['id'] . '">Done</a>';
            echo '</li>';
        }
    ?>
</ul>
</body>
</html>
