def test():
    print("yo1")

def CreatePHPResponsePage(theItems,theNoOfItems):

    f = open('php/results.php', 'w+')
    php = "<html>\n"
    php += " <body>\n\n"
    php += "<h1>Results</h1>"
    php += "<?php $filename=$_POST['fname']; $filename = $filename . '.txt';?>\n"
    phpfile = "<?php $resultsfile = fopen($filename, 'w') or die('Unable to open file!');?>\n"
    for x in range(theNoOfItems):
        php += '<strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["' + str(x) + '"];?>&nbsp;&nbsp;&nbsp;&nbsp;</strong>' + '<?php echo "' + theItems[x] + '";?><br><br>\n'
        phpfile += '<?php $txt = $_POST["' + str(x) + '"];\n'
        phpfile += '$txt = $txt . "   ";\n'
        phpfile += '$txt = $txt . "' + theItems[x] + '";\n'
        phpfile += '$txt = $txt . "\n";'
        phpfile += 'fwrite($resultsfile, $txt);?>'

    #Placeholder for email of results if needed
    #php += EmailLink()

    php += " </body>\n"
    php += "</html>\n"

    phpfile += '<?php fclose($resultsfile);?>'
    f.write(php)
    f.write(phpfile)
    f.close()
    return print(php)

