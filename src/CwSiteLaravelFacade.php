
<?php 
namespace ConfrariaWeb\CwSiteLaravel;

use Illuminate\Support\Facades\Facade;

class CwSiteLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'CwSiteLaravel';
    }
}