	<?php

	session_start();
require_once("db.php");
	
	$cause = mysqli_real_escape_string($conn,$_POST['dropdown']);

								$str = str_replace("_", " ", $cause);

		
							$query="select ngoname,cause from registration where cause='$str'";
							$result= mysqli_query($conn,$query);

							echo "<table>
											<tr>	<th>

											NGO Name
											</th> </tr>
											";

						while ($row = mysqli_fetch_array($result)) {

											echo "
											<tr>
											<td style='padding:0.7em;'>
											<input type='radio' name='ngoname' value=".$row['ngoname'].">
											"
											.$row['ngoname'].
											"
											</td>
											</tr>
									
										";
									}

									echo "</table>";	

									mysqli_close($conn);		

							?>