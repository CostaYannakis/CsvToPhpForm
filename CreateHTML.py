def create_html_form(thetitle, theheaders, theitems, thenofitems, thestates, thenoofstates):

    f = open("index.html", "w+")
    form = '<!DOCTYPE html>\n'
    form += '<html>\n'
    form += "<head>\n"
    form += "<style>"
    form += "table {\n"
    form += "font-family: arial, sans-serif;\n"
    form += "border-collapse: collapse;\n"
    form += "width: 100%;\n"
    form += "}\n"
    form += "td, th {\n"
    form += "border: 1px solid #dddddd;\n"
    form += "text-align: left;\n"
    form += "padding: 8px;\n"
    form += "}\n"
    form += "tr:nth-child(even) {\n"
    form += "background-color: #dddddd;\n"
    form += "}\n"
    form += "</style>\n"
    form += "</head>\n"
    form += '<body>\n'
    form += "<form action='/php/results.php' method='post'>"

    form += '<h2>' + thetitle[0] + '</h2>\n'
    form += "<label for='fname'>FileName:</label><br>"
    form += "<input type='text' id='fname' name='fname' value='Enter File Name Here'><br>"
    form += "<table style='width:100%'>\n"
    form += " <tr>\n"
    form += "  <th>" + theheaders[0] + "</th>\n" + "  <th>" + theheaders[1] + "</th>\n"
    form += " </tr>\n"

    for x in range(thenofitems):
        form += " <tr>\n"
        form += "  <td>\n"
        form += "    <label for='" + str(x) + "'>" + theitems[x] + "</label></td>\n"
        form += "  <td>\n"
        form += "    <select name=" + "'" + str(x) + "'" + ">\n"
        for y in range(thenoofstates):
            form += "     <option value=" + "'" + thestates[y] + "'" + ">" + thestates[y] + "</option>\n"
        form += "    </select>\n"
        form += "  </td>\n"
        form += " </tr>\n"
        form += "</select>\n"

    form += "<tr><td><input type='submit'></td></form>\n"
    form += '</table></body>\n'
    form += '</html>\n'
    f.write(form)
    f.close()
    return print(form)

