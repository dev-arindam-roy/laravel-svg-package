# Laravel SVG Handler
### A laravel package that convert SVG code to image file and download as well

## Installation

> **No dependency on PHP version and LARAVEL version**

### STEP 1: Run the composer command:

```shell
composer require arindam/svg
```

### STEP 2: Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

> In providers section
```php
Arindam\Svg\ArindamSvgServiceProvider::class,
```

> In aliases section
```php
'SVG' => Arindam\Svg\Svg\SvgClassFacade::class,
```

## All Done! Now it ready to use

> **If You Want To Convert Any Raw SVG Code To .svg Image File

```php

// just pass the raw svg code
SVG::svgCodeToImageSave($rawSvgCode));
// OUTPUT: 

// also want, you can pass file name as well
SVG::svgCodeToImageSave($rawSvgCode, "mysvg.svg"));
//OUTPUT: mysvg.svg

```

> **If You Want To Convert & Download it as well

```php
$svg = SVG::svgCodeToImageDownload($rawSvgCode);
return response()->download($svg, "mysvg2.svg", array('Content-type' => 'image/svg+xml'));
```

> **If You Want To Directly Render the SVG in a Link

```php
$svg = SVG::svgCodeToImageRender($rawSvgCode);
return response($svg, 200, array('Content-type' => 'image/svg+xml'));
```


## license:
The MIT License (MIT). Please see [License File](https://github.com/dev-arindam-roy/Laravel-Page-Loader-Package-/blob/master/LICENSE) for more information.

## Post Issues: if found any
If have any issue please [write me](https://github.com/dev-arindam-roy/Laravel-Page-Loader-Package-/issues).


