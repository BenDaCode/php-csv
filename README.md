# php-csv
A PHP simple class for creating CSV files for PHP 7

Include CSV.php in your project.

Example

create CSV object, filename is rquired, constructor expects string
$filename = "myFile.csv";
$csv = new CSV($filename);

set header of CSV (first line), expects array. 
$header=['Column1','Column2'];
$csv->setHeader($header);

set body of CSV. You need to run this function for each line
$body=['ContentColumn1','ContentColumn2'];
$csv->setBody($body);

or

foreach(data as line){
  $csv->setBody(['line']);
}

save file to folder or force download, expects TYPE and PATH (both strings and optional). On default ouput to browser. 
$csv->save(); //outpur to browser
$csv->save('local') // saves file to folder where the script is running
$csv->save('local', 'My/Save/Folder'); //saves file to My/Save/Folder

/*Optional Settings*/

set save path before instead of adding parameter to save() function
$csv->setPath("Path/To/My/Save/Folder");

set separator. Default seperator is ;. Expects string
$csv->setSeparator(',');

 get functions
 $csv->getName(); //get filename of object
 $csv->getHeader() //get header of object
 $csv->getBody // get body / content of object



