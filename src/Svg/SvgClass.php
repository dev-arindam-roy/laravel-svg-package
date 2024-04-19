<?php
  
namespace Arindam\Svg\Svg;
  
class SvgClass 
{
    
    public function __construct()
    {
        
    }

    public function hey()
    {
        return 'Hello Arindam, the SVG pack is ready for you !!';
    }

    public function svgCodeToImageSave($rawSvgCode, $filename = '')
    {
        if (empty($rawSvgCode)) {
            return "Please pass the raw svg code as parameter";
        }
        if (empty($filename)) {
            $filename = md5(strtotime(microtime(TRUE))) . '.svg';
        }
        $saveInStorage = file_put_contents(storage_path($filename), $rawSvgCode);
        if (!file_exists(storage_path($filename))) {
            return "Unable to create/save file into the storage folder. Please check the permission";
        }
        return $filename;
    }

    public function svgCodeToImageDownload($rawSvgCode, $filename = '')
    {
        if (empty($rawSvgCode)) {
            return "Please pass the raw svg code as parameter";
        }
        if (empty($filename)) {
            $filename = md5(strtotime(microtime(TRUE))) . '.svg';
        }
        $saveInStorage = file_put_contents(storage_path($filename), $rawSvgCode);
        if (!file_exists(storage_path($filename))) {
            return "Unable to create/save file into the storage folder. Please check the permission";
        }
        return storage_path($filename);
    }

    public function svgCodeToImageRender($rawSvgCode, $filename = '')
    {
        if (empty($rawSvgCode)) {
            return "Please pass the raw svg code as parameter";
        }
        return trim($rawSvgCode);
    }
}