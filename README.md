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

```php
    echo vds(false);
```
this will echo the var_dump string.