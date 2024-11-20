<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calender</title>
    <style>
        #table{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        table{
            width:80%;
            margin-top: 30px;
        }
        td{
            width:10%;
            height:50px;
            text-align: center;
        }
        #lastupdate{
            
            margin-left: 70%;
        }
    </style>
</head>
<body>
    <?php
        $query = 'select * from calender';
        $result = mysqli_query($conn , $query);
        $level = [];
        if($result){
            while($row = $result->fetch_assoc()){
                $level[] = $row;
            }
        }
    ?>
<div id="table">
        <table border="1">
            <tr>
                <th></th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
            </tr>
            <tr>
                <td>08.00</td>
                <td>
                    <?php 
                    $time = 08.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                
            </tr>
            <tr>
                <td>09.00</td>
                <td>
                    <?php 
                    $time = 09.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>
            <tr>
                <td>10.00</td>
                <td>
                    <?php 
                    $time = 10.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>11.00</td>
                <td>
                    <?php 
                    $time = 11.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>12.00</td>
                <td>
                    <?php 
                    $time = 12.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>13.00</td>
                <td>
                    <?php 
                    $time = 13.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>14.00</td>
                <td>
                    <?php 
                    $time = 14.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>15.00</td>
                <td>
                    <?php 
                    $time = 15.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>16.00</td>
                <td>
                    <?php 
                    $time = 16.00;
                    foreach ($level as $data){
                        if($data['week'] == "Monday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Tuesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Wednesday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";  
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Thursday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";    
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Friday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>

                <td>
                    <?php foreach ($level as $data){
                        if($data['week'] == "Saturday" && $data['time']==$time){
                            echo $data['level']." ".$data['course']." ".$data['lecture']."<br>";   
                        }
                    }
                ?>
                </td>
            </tr>
        </table>
    </div>
    <div id="lastupdate">
        <?php
            $quary = "select date , max(time) as time from changes where date=(select max(date) from changes )";
            $result = mysqli_query($conn,$quary);
            $row = $result->fetch_assoc();
            echo "Last updated: @ ".$row['time']." on ".$row['date'] ;
        ?>
    </div>
</body>
</html>