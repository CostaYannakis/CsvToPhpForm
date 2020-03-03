import sys
import csv
import CreatePHPResponsePage
import CreateHTML

# Define array
List = []

# Help break up output for debugging
print_break = '*****************************************************************'

# The location of the reference csv file for your list
fileName = 'simplelist.csv'

with open(fileName) as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0

    for row in csv_reader:
        List.append(row)

# place array strings in their own defined arrays
Title = List[0]
Headers = List[1]
States = List[2]
noOfStates = len(States)
Items = List[3]
noOfItems = len(Items)


# Below outputs to console for troubleshooting
def display_array():
    print(print_break)
    print('Title:')
    print(Title)
    print(print_break)
    print('Headers:')
    print(Headers)
    print(print_break)
    print('States:')
    print(States)
    print(print_break)
    print('Items:')
    print(Items)


display_array()
CreateHTML.create_html_form(Title, Headers, Items, noOfItems, States, noOfStates)
CreatePHPResponsePage.CreatePHPResponsePage(Items, noOfItems)

