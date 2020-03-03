def email_link(mail):
    email = "<p>\n"
    email += "This is an email link:"
    email += "<a href='mailto:'" + mail + "?Body=Hello%20again' target='_top'>Send Mail</a>\n"
    email += "</p>"
    return email
