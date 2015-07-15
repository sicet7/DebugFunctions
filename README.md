# DebugFunctions

git tag -a 1.0.0

## Requirements

- PHP >= 5.0

### Usage

```php
    dvd('hej',false);
```
Outputs the same as:
```php
    <?php
    echo '<pre>';
    var_dump('hej');
    var_dump(false);
    die();
```


if you want your var_dump as a string.
```php
    <?php
    echo vds(false);
```

## License 

MIT