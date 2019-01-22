# php-csv

A PHP simple class for creating CSV files for PHP 7
Include CSV.php in your project.

Examples

Create CSV object, filename is rquired, constructor expects string
<pre>
$filename = "myFile.csv";
$csv = new CSV($filename);
</pre>

Set header of CSV (first line), expects array.
<pre>
$header=['Column1','Column2'];
$csv->setHeader($header);
</pre>

Set body of CSV. You need to run this function for each line
<pre>
$body=['ContentColumn1','ContentColumn2'];
$csv->setBody($body);
</pre>

or

<pre>
foreach(data as line){
	$csv->setBody(['line']);
}
</pre>

Save file to folder or force download, expects TYPE and PATH (both strings and optional). 
On default ouput to browser. 
<pre>
$csv->save(); //output to browser
$csv->save('local') //saves file to folder where the script is running
$csv->save('local', 'My/Save/Folder'); //saves file to My/Save/Folder
</pre>

Optional Settings

Set save path before instead of adding parameter to save() function
<pre>
$csv->setPath("Path/To/My/Save/Folder");
</pre>

Set separator. Default seperator is ;. Expects string
<pre>
$csv->setSeparator(',');
</pre>

Get functions
<pre>
$csv->getName(); //get filename of object
$csv->getHeader() //get header of object
$csv->getBody // get body / content of object

</pre>
