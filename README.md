# Laravel Nova Country Code Select Field

A country code select field for Laravel Nova.

## Appearance

### Form
![select-country-code-form](https://raw.githubusercontent.com/TappNetwork/nova-select-country-code/main/docs/select-country-code-form.png)
![select-country-code-form1](https://raw.githubusercontent.com/TappNetwork/nova-select-country-code/main/docs/select-country-code-form1.png)

### Detail
![select-country-code-detail](https://raw.githubusercontent.com/TappNetwork/nova-select-country-code/main/docs/select-country-code-detail.png)

## Usage

Add the field to your resource in the ```fields``` method:
```php
use Tapp\SelectCountryCode\SelectCountryCode;

SelectCountryCode::make(__('Country Code')),
```

### Options

#### iconsDirectory

Default: ```'/vendor/tapp/nova-select-country-code'```.

If you want to use your own custom image icons, provide the directory of the images with this option:

```php
SelectCountryCode::make(__('Country Code'))
    ->iconsDirectory('/public/path/to/icons'),
```

#### iconsFormat

Default: ```'svg'```.

The image format of the flag icons.

```php
SelectCountryCode::make(__('Country Code'))
    ->iconsFormat('png'),
```

#### options

Array with the options to show on select. The array must contain the associative keys: ```'label'```, ```'country_code'```, and ```'iso_code'```.

Default: 
```php
[
    ['label' => 'Afghanistan', 'country_code' => '+93', 'iso_code' => 'AF'],
    ['label' => 'Albania', 'country_code' => '+355', 'iso_code' => 'AL'],
    // ...
]
```

```php
SelectCountryCode::make(__('Country Code'))
    ->options($optionsArray),
```

## Credits 

SVG of the countries' flags by:
- https://github.com/tabler/tabler
- https://github.com/hjnilsson/country-flags
