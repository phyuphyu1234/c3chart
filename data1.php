<?php
header('Content-Type: application/json');
$con = mysqli_connect("127.0.0.1","root","opg1192","chart1");

// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $result = mysqli_query($con, "SELECT * FROM chartinfo");
    $num=0;
    while($row = mysqli_fetch_array($result))
    {        
        //$point = array("label" => $row['sub'] , "y" => $row['Maths']);
		//$point[] = array("name" => $row['name'] );
		//$point["datapoint"]=[$row['Maths'],$row['Eng'],$row['Phy']];
		
		/* $point[]=array("label" => "Maths" , "y" => $row['Maths']);
		$point[]=array("label" => "Eng" , "y" => $row['Eng']);
		$point[]=array("label" => "Phy" , "y" => $row['Phy']); */
        //$point["datapoint"]= $point2["Maths"]; 
		//$point["datapoint"]= $point3["Eng"]; 
		//$point["datapoint"]= $point4["Phy"]; 
		$point=array( $row['name'],$row['Eng'],$row['Maths'],$row['Phy'],);
		
        array_push($data_points, $point);  
		
    }
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);

?>