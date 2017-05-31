
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>title</title>
	<script type="text/javascript" src="d3.v3.min.js"></script>
	<script type="text/javascript" src="c3.js"></script>
	<script src="jquery.js"></script>
	<link href="c3.css" rel="stylesheet" type="text/css">
	
	
	
		<div id="chart"></div>
		 <script type="text/javascript">
		
	 $(document).ready(function () {

            $.getJSON("data1.php", function (result) {
	
		var chart = c3.generate({
		bindto: '#chart',
		data: {			
		  columns: result,
		  axes: {
			data2: 'y2'
		  },
		  
		},
		axis: {
			x: {
            label: {
                text: 'Subject',
                position: 'outer-center'				
                }
			},
			y: {
				label: {
				  text: 'Marks',
				  position: 'outer-middle'
				}
			},		 
			x:{
				type: 'category',
				categories: ["English","Maths","Physics"]   
			}						
		}
});

    });
        });				
		</script>
</head>

</html>