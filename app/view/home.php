<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Students list</title>
</head>
<body class="success">
                <?php
                    // foreach($batches as $ba){
                    //         $c_name = [];
                    //     foreach($classes as $class){
                    //         if($class['id']==$ba['class_id']){
                    //             $c_name = $class['name'];
                    //         }
                    //     }
                    //     var_dump($c_name)  ."<br>";
                    // }                    
               ?>
<div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-striped bg-info">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Class_ID</th>
                            <th>Class_Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($batches as $ba) { ?>
                            <tr>
                                <?php $c_name=[];
                                    foreach($classes as $class){
                                        if($ba['class_id']==$class['id']){
                                            $c_name = $class['name'];
                                        }
                                    }
                                ?>
                                <td><?php echo $ba['id']; ?></td>
                                <td><?php echo $ba['class_id']; ?></td>
                                <td><?php echo $c_name; ?></td>
                            </tr>
                         <?php }?>
                    </tbody>
                </table>






                <h1>Students</h1>
                <table class="table table-striped bg-info">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($students as $stu) { ?>
                            <tr>
                                <td><?php echo $stu['id']; ?></td>
                                <td><?php echo $stu['name']; ?></td>
                                <td><?php echo $stu['phone_no']; ?></td>
                            </tr>
                         <?php } ?>
                    </tbody>
                </table>
                            <br>
                            <h1>Classes</h1>
                <table class="table table-striped bg-success">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($classes as $class) { ?>
                            <tr>
                                <td><?php echo $class['id']; ?></td>
                                <td><?php echo $class['name']; ?></td>
                            </tr>
                         <?php } ?>
                    </tbody>
                </table>
                            <br>
                            <h1>Batches</h1>
                <table class="table table-striped bg-info">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Class_ID</th>
                            <th>Batches</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($batches as $batch) { ?>
                            <tr>
                                <td><?php echo $batch['id']; ?></td>
                                <td><?php echo $batch['class_id']; ?></td>
                                <td><?php echo $batch['batch']; ?></td>
                            </tr>
                         <?php } ?>
                    </tbody>
                </table>
                    <br>
                    
                    <h1>Students_Batches</h1>
                    <table class="table table-striped bg-success">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student_id</th>
                            <th>Batch_id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($student_batch as $sbatch) { ?>
                            <tr>
                                <td><?php echo $sbatch['id']; ?></td>
                                <td><?php echo $sbatch['student_id']; ?></td>
                                <td><?php echo $sbatch['batch_id']; ?></td>
                            </tr>
                         <?php } ?>
                    </tbody>
                </table>
                    

                
            </div>
        </div>
    </div>
</body>
</html>