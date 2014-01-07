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

		  			//collapse expanded detail rows
		  			$("tr.detail-row").hide();

		  			//get studen data
		  			var studentName = $(eventObj.target).attr("data-id");
		  			$.get('api.php', { action: 'getstudentdata', name: studentName}, function(data, textStatus){
		  				if (textStatus === 'success')
		  				{
		  					//Build detail data html
		  					var studentDataHtml = [];
		  					studentDataHtml.push('<h4>STUDENT SUMMARY</h4>');
		  					studentDataHtml.push('<table class="table"><tr><th>ASSIGNMENT</th><th>SCORE</th><th>PERCENTILE</th></tr>');
		  					$.each(data.studentData, function(index, value){
		  						studentDataHtml.push('<tr>');
			 					studentDataHtml.push('<td>' + value.assignment + '</td>');
			 					studentDataHtml.push('<td>' + value.score + '</td>');
			 					studentDataHtml.push('<td>' + value.percentile + '</td>');
			 					studentDataHtml.push('</tr>');
		  					});
		  					studentDataHtml.push('</table>');
		  					
		  					//append student data html to the div container
		  					$("tr.detail-row[data-id='" + studentName + "'] div.detail-data-container").html(studentDataHtml.join(''));
		  					//show student data row
		  					$("tr.detail-row[data-id='" + studentName + "']").show();
		  				}
		  			}, "json");
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
			 			<div class="detail-data-container">
			 				<!-- Data will be coming from the server using AJAX call -->
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
		 				<div class="detail-data-container">
		 					<!-- Data will be coming from the server using AJAX call -->
		 				</div>
					</td>
	 			</tr>
	 		</table> 
		</div>
	</body>
</html>