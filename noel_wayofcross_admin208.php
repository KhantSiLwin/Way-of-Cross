<?php 
    include "function.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    
<p><?php echo countTotal('iviewers') ?></p>
<p><?php echo countTotal('pviewers') ?></p>
<table class="table table-border table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Device</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach(iviewers() as $v){ ?>
                            <tr>
                                
                                <td><?php echo $v['id']; ?></td>
                                <td><?php echo $v['device']; ?></td>
                                <td class="text-nowrap"><?php echo $v['created_at']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                    <table class="table table-border table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Device</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach(pviewers() as $v){ ?>
                            <tr>
                                
                                <td><?php echo $v['id']; ?></td>
                                <td><?php echo $v['device']; ?></td>
                                <td class="text-nowrap"><?php echo $v['created_at']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
</body>
</html>