# DebugFunctions


### Usage

```php
    dvd('hej',false);
```
Outputs the same as:
```php
    echo '<pre>';
    var_dump('hej');
    var_dump(false);
    die();
```


if you want your var_dump as a string.
```php
    echo vds(false);
```
