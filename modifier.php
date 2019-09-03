<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title>Menus de la semaine</title>
        <link rel ="stylesheet" href="Style2.css">
    </head>
    <body>
      <section>   
      		<table>

      				<tr>

      				<td>Entree</td>
      			<td>
		 <form method="post" action="traitement.php">
		 <p><input type="text" name="pseudo" placeholder="Ex : salade" size="30" maxlength="10"/></p>
		</form>
		    </td>
      				</tr>

      				<tr>

      				<td>Plat</td>
      		<td>
		 <form method="post" action="traitement.php">
		 <p><input type="text" name="pseudo" placeholder="Ex : riz" size="30" maxlength="10"/></p>
		</form>
		    </td>
      				</tr>

      				<tr>

      				<td>Dessert</td>
      				<td>
		 <form method="post" action="traitement.php">
		 <p><input type="text" name="pseudo"placeholder="Ex : Yaourt" size="30" maxlength="10" /></p>
		</form>
		    </td>
      				</tr>

      				<tr>

      				<td>Boisson</td>
      				<td>
		 <form method="post" action="traitement.php">
		 <p><input type="text" name="pseudo"placeholder="Ex : eau" size="30" maxlength="10" /></p>
		</form>
		    </td>
      				</tr>


      		</table>
      		<br/><br/>
      		<input class = "favorite styled" type = submit>
      </section>

    </body>
    </html>