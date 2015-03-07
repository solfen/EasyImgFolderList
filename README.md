# EasyImgFolderList
A simple way to list all the src of your images in your project.
By default it searches all the .png in the folder bin/assets and all of its subfolders

#Disclaimer
This was made for my personal use in a pixi.js. It does not aim to be the perfect tool for everyone and every project. But it's pretty simple to modify it for your own needs

#How to Use
1 Take the file filereader.php and put it in your project folder.

2 Open the file in a code editor and change the "findfiles" function call with your parameters the parameters are :
	- The path of your images folder
	- The regex that every file you search need to match (go to [regex101](https://regex101.com/) to test your regex and learn how to make some)
	- the callback function (unless you want an other callback function you don't need to change it)

3 Open the file in your favorite browser (which should be Firefox by the way), a list of your images will then be displayed

#What no line break ???
Yeah well this code is taken from the web and I didn't manage to print the break lines. 
But if you really want some break line you can use the power of Sublime text to make it (or you can modify the file and fix it).

#Ok I have Sublime but hwo do I do it ?
Well because this is the best code editor ever, it comes whith a power full regex selector. Here's how to break lines : 
- Select the line (ctrl + L)
- Open the search tool (ctrl+F)
- Select the regex mode (.* button)
- Select the "In selection" option
- Enter the regex : " +" (white space and +)
- Click "Find All"
- Just press enter to remplace white spaces by line breaks





