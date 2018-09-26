<?php
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'wildlife');
$q="select *from animal";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Profile</title>
    </head>
    <style>
        		body{
    					background-attachment: fixed;
							}

        ul {
            margin-left: 250px;
            margin-right: 0px;
            padding: 0px;
            list-style: none;
            font-family: arial;
            }

        ul li {
            margin-left: 40px;
            list-style: none;
            float: left;
            color:black;
            width: 200px;
            height: 40px;
            
            border: 3px solid pink;
            background-color: greenyellow;
            opacity: .8;
            line-height: 40px;
            text-align: center;
            font-size: 20px;
                }

        ul li a {
            padding:0 40px;
            line-height: 40px;
            outline-color: white;
            outline-style: outset;
                position: relative;
                font-size: 25px;
                text-decoration: none;
                color: darkgreen;
                display: block;
                }

        ul li a:hover {
            background-color: grey;
            border-radius: 15px;
            font-size:30px;
            color:greenyellow;
            padding: 2px 30px;
                }
			th{
				color:darkgreen;
				background-color:darkgrey;
			}
        table{
						
            border-style: solid;
            width:100%;
        }
        th, td{
						border: 1px solid green;
            text-align: center;
						padding: 20px;
        }
			tr:nth-child(even){
				background-color: #f2f2f2;
			}
    </style>
    <body  background="int/back1.jpg">
    <br><br>

        <h1>ANIMAL'S PROFILE</h1>
        <table>
            <tr>
				<th>animal_id</th>
                <th>animal_name</th>
                <th>type</th>
                <th>feed</th>
                <th>feed_cost</th>
            </tr>
            <?php
            for($i=1;$i<=$num;$i++)
            {
                $row=mysqli_fetch_array($result);
            ?>
            <tr>
                <td><?php echo $row['animal_id']?></td>
                <td><?php echo $row['animal_name']?></td>
                <td><?php echo $row['type']?></td>
                <td><?php echo $row['feed']?></td>
                <td><?php echo $row['feed_cost']?></td>
            </tr>
            <?php
            }
            ?>
        </table>

    </body>
</html>