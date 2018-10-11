<html><head>
    <title>ReadTask</title>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">   
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>SubmitTask.css">
  </head>
  <body>
      
      <h3>My bided tasks</h3>
      <ul id="incompleted-tasks">
      <?php 
        if (isset($bided_tasks)) {
          foreach($bided_tasks as $task) { 		?>
            <li>
                <label> <?php echo htmlspecialchars($task->task_id, ENT_QUOTES, 'UTF-8');?> <label>
                <div class="clear"></div>
                <label> <?php echo htmlspecialchars($task->task_name, ENT_QUOTES, 'UTF-8');?> <label>
                <div class="clear"></div>
                <label> <?php echo htmlspecialchars($task->expect_point, ENT_QUOTES, 'UTF-8');?> <label>
                <div class="clear"></div>
                <label> <?php echo htmlspecialchars($task->description, ENT_QUOTES, 'UTF-8');?> <label>
                <div class="clear"></div>
                <label> <?php echo htmlspecialchars($task->owner_email, ENT_QUOTES, 'UTF-8');?> <label>
                <div class="clear"></div>
                <label> <?php echo htmlspecialchars($task->my_bid, ENT_QUOTES, 'UTF-8');?> <label>
                <div class="clear"></div>
                <button class="delete2" href="<?php echo URL; ?>task/detail/<?php echo $task -> task_id ?>">Detail</button>
            </li>
        <?php }
          } ?>
      </ul>
</body></html>