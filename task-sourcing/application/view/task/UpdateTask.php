<html><head>
    <title>UpdateTasks</title>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">   
    <link rel="stylesheet" href="SubmitTask.css"> 
  </head>
  <body>
      
      <h3>UPDATE TASKS</h3>
      <br>


        <form action="/task/updateTask/<?php echo $task -> task_id;?>" method="post">   
            Task ID*: <?php echo $task -> task_id; ?>
            <br>
            <br>
            Task Name*: <input type="text" name="newTaskname" placeholder="Please enter new taskname" required="required">
            <br>
            <br>
            Task Description: <textarea name="newDes" cols="40" rows="5" placeholder="Please enter new task description"></textarea>
            <br>
            <br>
            Lowest Required Point*: <input type="text" name="newPoint" placeholder="Please enter new bidding point" required="required">
            <br>
            <br>

            <input type="reset" value="reset">
            <input type="submit" value="update">
        </form>


</body></html>