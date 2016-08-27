<?php 
	include "MySQLFunc.php";
	$sql_connection=sqlconnect();
	$results=sqlquery("SELECT * FROM news_master order by NewsDate LIMIT 5");
	
?>
<html>
	<body>
		<form>
			<div class="header1">News Feeds</div>
			<div class="articles" id="newsid">
				<table id="newsfeed">
				<tr>
				<td>Date</td>
				<td>News</td>
				</tr>
				<?php 
					if($results)
					{
						while($row=sqlfetcharray($results))
						{
							?>
							<tr>
								<td>
									<?php echo $row["NewsDate"];?>
								</td>
								<td>
									<?php echo $row["News"];?>								
								</td>
							</tr>
							<?php 
						}					
					}
				?>
				</table>
			</div>
		</form>
		<br/>
		<br/>
	</body>
</html>
