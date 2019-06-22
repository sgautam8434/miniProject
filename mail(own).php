<?php
$to = "nishank127@gmail.com";
$subject = "Registration Successful";
$headers="From: DeCoders <sit.cse.decoders@gmail.com>\r\n";
$headers .= "Content-type: text/html\r\n";
$body = "<table border='border'>
<tr>
<th>Roll </th>
<th>Name </th>
<th>DOB </th>
<th>Department </th>
</tr>
<tr>
<td>1</td>
<td>Nishank</td>
<td>01/09/96</td>
<td>CSE</td>
</tr>
<tr>
<td>2</td>
<td>Rajat</td>
<td>16/02/96</td>
<td>CSE</td>
</tr>
<tr>
<td>3</td>
<td>Rahul</td>
<td>18/04/96</td>
<td>CSE</td>
</tr>
</table>";

sendMail($to,$subject,$body,$headers);

function sendMail($to,$subject,$body,$headers)
		{
			if(mail($to,$subject,$body,$headers))
			{
				echo "mail Sent to ".$to;
			}
			else
			{
				echo 'error sending mail';
			}
		}


 ?>
