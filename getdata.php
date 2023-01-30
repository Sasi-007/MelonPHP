<?php 
include 'dbconn.php';
$search=$_REQUEST["search"];
if($search=="start"){
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "0 results";
    }
}else{
    $sql = "SELECT * FROM jobs where title like '%$search%'";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "0 results";
    }
}

echo json_encode($data);
?>