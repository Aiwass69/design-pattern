

<table border="1">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
	</tr>
	    <?php

foreach ($user as $u) {
    echo "<tr><td>" . $u['id'] . "</td><td>" . $u['name'] . "</td></tr>";
}
?>
    </table>

