<html>
 <body>

<h1>Results</h1><?php $filename=$_POST['fname']; $filename = $filename . '.txt';?>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["0"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Update users login class in EICC and change the Department under the General>Security tab";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["1"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Adjust the user's Active Directory group membership to reflect the new role.";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["2"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Move AD ComputerMove user's computer to the correct OU in Liberty Workstations.";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["3"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Change exchange Custom attribute 4 to team";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["4"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Move the user's personal folder to the relevant site on iHub.";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["5"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Remove the user from their old iHub Team List and add them to the new one.";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["6"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Adjust Direct reports";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["7"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Remove Shared mailboxes and apply new ones where applicable";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["8"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Adjust permissions in Application Security Management Tool";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["9"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Change the user's allocation settings in ACM User Management Tool to manual if applicable";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["10"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Check permissions are reflected and active";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["11"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Slack *Name Change only; Access the profile and amend email username and Name and amend where applicable";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["12"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Microsoft Dynamics GP (Great Plains)Check if user needs this access applied or removed";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["13"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Enable or disable them from QMS.";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["14"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Update users login class in EICC and change the Department under the General>Security tab";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["15"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Check if user currently has a MobileIron device (is this needed now? If not retire device and delete profile";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["16"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Set the user up on MobileIron if necessary and add the Introducers contacts folder in Outlook if they are moving into a BDM role.";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["17"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "ManageEngine:Adjust roles if required:";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["18"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Adobe Acrobat Reader DC: Remove licence if applicable";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["19"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Determine if staff needs to be removed or added  Esendex";?><br><br>
<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["20"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo "Check if printers need to be added and if the user is needed to removed from their former";?><br><br>
 </body>
</html>
<?php $resultsfile = fopen($filename, 'w') or die('Unable to open file!');?>
<?php $txt = $_POST["0"];
$txt = $txt . "   ";
$txt = $txt . "Update users login class in EICC and change the Department under the General>Security tab";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["1"];
$txt = $txt . "   ";
$txt = $txt . "Adjust the user's Active Directory group membership to reflect the new role.";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["2"];
$txt = $txt . "   ";
$txt = $txt . "Move AD ComputerMove user's computer to the correct OU in Liberty Workstations.";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["3"];
$txt = $txt . "   ";
$txt = $txt . "Change exchange Custom attribute 4 to team";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["4"];
$txt = $txt . "   ";
$txt = $txt . "Move the user's personal folder to the relevant site on iHub.";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["5"];
$txt = $txt . "   ";
$txt = $txt . "Remove the user from their old iHub Team List and add them to the new one.";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["6"];
$txt = $txt . "   ";
$txt = $txt . "Adjust Direct reports";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["7"];
$txt = $txt . "   ";
$txt = $txt . "Remove Shared mailboxes and apply new ones where applicable";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["8"];
$txt = $txt . "   ";
$txt = $txt . "Adjust permissions in Application Security Management Tool";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["9"];
$txt = $txt . "   ";
$txt = $txt . "Change the user's allocation settings in ACM User Management Tool to manual if applicable";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["10"];
$txt = $txt . "   ";
$txt = $txt . "Check permissions are reflected and active";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["11"];
$txt = $txt . "   ";
$txt = $txt . "Slack *Name Change only; Access the profile and amend email username and Name and amend where applicable";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["12"];
$txt = $txt . "   ";
$txt = $txt . "Microsoft Dynamics GP (Great Plains)Check if user needs this access applied or removed";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["13"];
$txt = $txt . "   ";
$txt = $txt . "Enable or disable them from QMS.";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["14"];
$txt = $txt . "   ";
$txt = $txt . "Update users login class in EICC and change the Department under the General>Security tab";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["15"];
$txt = $txt . "   ";
$txt = $txt . "Check if user currently has a MobileIron device (is this needed now? If not retire device and delete profile";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["16"];
$txt = $txt . "   ";
$txt = $txt . "Set the user up on MobileIron if necessary and add the Introducers contacts folder in Outlook if they are moving into a BDM role.";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["17"];
$txt = $txt . "   ";
$txt = $txt . "ManageEngine:Adjust roles if required:";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["18"];
$txt = $txt . "   ";
$txt = $txt . "Adobe Acrobat Reader DC: Remove licence if applicable";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["19"];
$txt = $txt . "   ";
$txt = $txt . "Determine if staff needs to be removed or added  Esendex";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php $txt = $_POST["20"];
$txt = $txt . "   ";
$txt = $txt . "Check if printers need to be added and if the user is needed to removed from their former";
$txt = $txt . "
";fwrite($resultsfile, $txt);?><?php fclose($resultsfile);?>