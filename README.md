# WebSaleParser
## ------------- Version 0.1 ---------------(April 09)
### List of files:
- ***index.php -*** The main file, the entry point to the program, starts all other files, and uses the functionality of all the files that are connected to it.
- ***connection.php -*** Connecting to a database.
- ***curl.php -*** CURL request to the 'OLX.ua' web site.
- ***BuildingClass.php -*** Class that contains information (fields and functions) about parsed buildings.
- ***oldFunc.php -*** Contains old versions of the main parsing functions without associated array.
- ***simple-php-dom.php -*** Simple php dom Library.

### Features avaiulable now:
- Parsing main page with specific request.
- Select the desired number of pages for subsequent parsing.
- Parsing the page selected in the previous step and writing the result to an array of results.
- Displaying the results on the screen.

## ------------- Version 0.1.1 -------------(April 10)

### What's new:
- ***createURL.php -*** New file for creating string for URL request to OLX.ua server from the web site fields.
- New ***parseArrayOfURLs*** function which allows you to parse the page addresses obtained earlier by other functions.
- Design and optimization of the code.
- New ***printTable*** function which allows you to print thr result of parsing with a table.

## ------------- Version 0.2 -------------(April 12)

### What's new:
- ***download.php -*** New file for downloading Excel files from the server.
- ***excel.php -*** New file for creating Excel files by the request.
- Some functions became not actual, some began to work differently, but both versions still remain in the project.
- Design and optimization of the code.
- You need PHPExcel library for correct program work.
## [look at the result now](https://bossyandeks.000webhostapp.com/)
