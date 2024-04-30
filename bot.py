import requests
from bs4 import BeautifulSoup

URL = "https://myanimelist.net/topanime.php"
page = requests.get(URL)

soup = BeautifulSoup(page.content, "html.parser")

# Find the element at the specified XPath location
desired_element = soup.select_one(r"html\body\div[1]\div[2]\div[4]\div[2]\div[4]\table\tbody\tr[2]\td[2]")

# Print the content of the found element
if desired_element:
    print("Content of the desired element:")
    print(desired_element.prettify())
else:
    print("Element not found.")