```php
$file = fopen("myfile.txt", "r+");
if ($file) {
    // ... process the file ...
    fclose($file);
} else {
    // Handle error: file could not be opened
    echo "Error opening file.";
}
```
This corrected code only closes the file if it was opened successfully. It also includes better error handling for when the file cannot be opened.