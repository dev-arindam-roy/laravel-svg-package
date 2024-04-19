<?php
  
namespace Arindam\Svg\Svg;
use Illuminate\Support\Facades\Facade;
  
class SvgClassFacade extends Facade
{
    protected static function getFacadeAccessor() 
    { 
        return 'svgclass'; 
    }
}