<!DOCTYPE html>
<html>
	<head>
  		<title>PHP Test</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
		<style>
			.student-table
			{
				margin-top: 40px;
			}
		</style>

		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  
  		<script>
  			$(document).ready(function(){

		  		$('a.student-name').on('click', function(eventObj){
		  			eventObj.preventDefault();

		  			//close all expanded detail row
		  			$("tr.detail-row").hide();

		  			//expand the detail row of the selected student row
		  			var dataIdAttr = $(eventObj.target).attr("data-id");
		  			$("tr.detail-row[data-id='" + dataIdAttr + "']").show();
		  		});
  			});
  		</script>
 	</head>
	 <body>
	 	<div class="container">
		 	<table class="student-table table table-bordered">
			 	<tr>
			 		<th>STUDENT NAME</th>
			 		<th>DIAGNOSTIC SCORE</th>
			 		<th>MOST RECENT SCORE</th>
			 	</tr>
			 	<tr class="active">
			 		<td><a href="#" data-id="Abercrombie-Mckenna" class="student-name">Abercrombie, Mckenna</a></td>
			 		<td>18</td>
			 		<td>31</td>
			 	</tr>
			 	<tr class="detail-row" data-id="Abercrombie-Mckenna" style="display: none">
			 		<td colspan="3">
			 			<div>
			 				<h4>STUDENT SUMMARY</h4>
			 				<table class="table">
			 					<tr>
			 						<th>ASSIGNMENT</th>
			 						<th>SCORE</th>
			 						<th>PERCENTILE</th>
			 					</tr>
			 					<tr>
			 						<td>Kaplan Full-Length 5</td>
			 						<td>31</td>
			 						<td>82</td>
			 					</tr>
			 					<tr>
			 						<td>Kaplan Full-Length 4</td>
			 						<td>23</td>
			 						<td>35</td>
			 					</tr>
			 					<tr>
			 						<td>Kaplan Full-Length 3</td>
			 						<td>27</td>
			 						<td>59</td>
			 					</tr>
			 				</table>
			 			</div>
			 		</td>
			 	</tr>
			 	<tr class="active">
			 		<td><a href="#" data-id="VanderWel-Rachel" class="student-name">VanderWel, Rachel</a></td>
			 		<td>22</td>
			 		<td>31</td>
			 	</tr>
		 		<tr class="detail-row" data-id="VanderWel-Rachel" style="display: none">
		 			<td colspan="3">
		 				<div>
		 					<h4>STUDENT SUMMARY</h4>
			 				<table class="table">
			 					<tr>
			 						<th>ASSIGNMENT</th>
			 						<th>SCORE</th>
			 						<th>PERCENTILE</th>
			 					</tr>
			 					<tr>
			 						<td>AAMC Practice Test 11</td>
			 						<td>31</td>
			 						<td>82</td>
			 					</tr>
			 					<tr>
			 						<td>AAMC Practice Test 10</td>
			 						<td>23</td>
			 						<td>35</td>
			 					</tr>
			 					<tr>
			 						<td>Kaplan Full-Length 1</td>
			 						<td>27</td>
			 						<td>59</td>
			 					</tr>
			 				</table>
	 					</div>
					</td>
	 			</tr>
	 		</table> 
		</div>
	</body>
</html>