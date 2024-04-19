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


```php

// sample raw svg code
$rawSvgCode = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"/></svg>';
```

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
The MIT License (MIT). Please see [License File](https://github.com/dev-arindam-roy/laravel-svg-package/blob/master/LICENSE) for more information.

## Post Issues: if found any
If have any issue please [write me](https://github.com/dev-arindam-roy/laravel-svg-package/issues).


