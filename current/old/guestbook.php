<?php	include('header.php');?>
<h3>Guest Book &amp; Contact</h3>
<p>
  <?php
if (isset($_REQUEST['email']) && ($_REQUEST['hash'] == md5($_REQUEST['sum'])))
//if "email" is filled out, send email
{
  //send email
  $email = $_REQUEST['email'] ; 
  $name = $_REQUEST['name'] ;
  $message = $_REQUEST['message'] ;
  $fromemail = "no-reply@aero.iitb.ac.in" ;
    mail( "antariksh.bothale@gmail.com", "Pratham Feedback",
        "Feedback received on 'Pratham' Website.\nE-mail ID : $email\nName : $name\nMessage : $message",
        "From:  $fromemail\nReply-to: $email" );
  echo "<p>Thank you for filling in the guest book!</p>";
}
else
//if "email" is not filled out, display the form
{
    include("capdcha.php");
	echo "<p>If you have any queries regarding the project or want to give feedback, please feel free to do so! In case you wish to access the Project Documents, please provide your <b>name and university/organisation</b></p>
			<form method='post' action='guestbook.php'>
			<p>Name: <input name='name' type='text' />
			Email: <input name='email' type='text' /></p>
			<p>Message:<br />
			<textarea name='message' rows='10' cols='65'>
			</textarea><br /><br />".
            (isset($_REQUEST['email']) ? "<span class=\"color: #f00;\">Please enter the correct sum in the textbox below (spam-filter): </span><br />" : "")
            .generate_capdcha()."
            <input type='text' size='10' name='sum' />
			<input type='submit' value='Submit Feedback' />
			</form></p>";
}
?>
  
</p>
<p>&nbsp;</p>
<p align="justify">Our Contact details:</p>
<p>Project Managers</p>
<table width="541" height="110" border="0">
  <tr>
    <td><span class="style1" style="font-size: 1.3em; font-weight: bold">Sanyam Suhas Mulay </span></td>
    <td><span class="style1"></span></td>
    <td><div align="left" class="style1" style="font-size: 1.3em; font-weight: bold"> Jha Jhonny Santosh</div></td>
  </tr>
  <tr>
    <td><span class="style1" style="font-size: 1.3em">sanyams@iitb.ac.in</span></td>
    <td><span class="style1"></span></td>
    <td><div align="left" class="style1" style="font-size: 1.3em">Jhonny@iitb.ac.in jhajhonny@gmail.com</div></td>
  </tr>
  <tr>
    <td><span class="style1" style="font-size: 1.3em">+91-8097297848</span></td>
    <td><span class="style1"></span></td>
    <td><div align="left" class="style1" style="font-size: 1.3em">+91-9833224163</div></td>
  </tr>
</table>
<p> Ex Project Managers </p>
<table width="541" height="60" border="0">
  <tr>
    <td><span class="style1" style="font-size: 1.3em; font-weight: bold">Shashank Tamaskar</span></td>
    <td><span class="style1"></span></td>
  </tr>
  <tr>
    <td><span class="style1" style="font-size: 1.3em">tamaskar@iitb.ac.in</span></td>
    <td><span class="style1"></span></td>
  </tr>
</table>
<table width="541" height="60" border="0">
  <tr>
    <td><span class="style1" style="font-size: 1.3em; font-weight: bold">Saptarshi Bandyopadhyay </span></td>
  </tr>
  <tr>
    <td><span class="style1" style="font-size: 1.3em">saptarshi_b@iitb.ac.in</span></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php	include('footer.php');?>