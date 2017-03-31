
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Insert your data:</h2>
    <form action="sessions_users_query.php" method="post">
      <table>
				<tr><td>
					User ID:<br>
					Password:</td>

					<td>
						<td><input type="text" name="id"><br>
							<input type="password" name="pw"><br>
						</tr>
					</td>
				</tr>
			</table>
      <input type="submit">
      <?php
        if (isset($_GET["mal"])) {
          printf("<br><br>Datuak txarto sartu dituzu!<br><img src=\"stop.jpg\">");
        }
       ?>
    </form>
  </body>
</html>
