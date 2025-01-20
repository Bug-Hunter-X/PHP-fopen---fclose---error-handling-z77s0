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
This code has a potential problem.  If `fopen()` fails (returns `false`), the `fclose()` call will still be executed. This will generate a warning because `fclose()` is being called on a non-resource.

The better solution is to only call `fclose()` if the file opened successfully.

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