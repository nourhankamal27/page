<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calling</title>
</head>
<style>
    table{
        width:100%;
        border : 1px solid #ccc;
        border-spacing: 5px;
    }
    table td{
        padding: 15px;
        background-color:#EEE;
        /* border-spacing: 10px; */
    }
    table thead td{
        background-color: #f44336;
        color:#fff;
        font-weight: bold;
        text-align: center;
        border-color: #f35246;
    }
</style>
<body>
    <?php
    
    $connection=new mysqli("localhost","root","","contant");
    $stmt=$connection->prepare("select * from contant_use");
    $stmt->execute();
    
    $result = $stmt->get_result();
    echo "<table>";
    echo "<thead> <tr><td>Id</td><td>الاسم</td><td>الايميل</td><td>رقم الهاتف</td><td>رسالة</td></tr></thead>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row ['id'] . "</td>
        <td>" . $row ['user'] . "</td>
        <td>" . $row ['email'] . "</td>
        <td>" . $row ['mobile'] . "</td>
        <td>" . $row ['comment'] . "</td></tr>";
        // echo $row["id"];
        
    }
    
    echo "</table>";
    ?>
</body>
</html>