<?php
/**
 * Klarna Exceptions
 *
 * PHP Version 5.3
 *
 * @category  Payment
 * @package   KlarnaAPI
 * @author    Klarna <support@klarna.com>
 * @copyright 2012 Klarna AB (http://klarna.com)
 * @license   http://opensource.org/licenses/BSD-2-Clause BSD-2
 * @link      https://developers.klarna.com/
 */

/**
 * Exception for Missing Address Fields
 *
 * @category  Payment
 * @package   KlarnaAPI
 * @author    Klarna <support@klarna.com>
 * @copyright 2012 Klarna AB (http://klarna.com)
 * @license   http://opensource.org/licenses/BSD-2-Clause BSD-2
 * @link      https://developers.klarna.com/
 */
class Klarna_AddressFieldMissingException extends KlarnaException
{
    /**
     * Constructor
     *
     * @param string $argument argument
     */
    public function __construct($argument)
    {
        parent::__construct("'{$argument}' not set!", 50015);
    }
}
