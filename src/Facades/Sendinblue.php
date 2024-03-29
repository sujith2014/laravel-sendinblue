<?php

/**
 * @package    Sujith\Sendinblue
 * @author     Thomas Van Steenwinckel <code@1234.pm>
 * @link       https://github.com/Sujith/laravel-sendinblue
 * @license    https://github.com/Sujith/laravel-sendinblue/blob/master/license.md (MIT License)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sujith\Sendinblue\Facades;

use Illuminate\Support\Facades\Facade;

class Sendinblue extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sendinblue';
    }
}
