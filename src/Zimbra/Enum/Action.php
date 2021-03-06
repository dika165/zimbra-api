<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Enum;

/**
 * Action enum class
 *
 * @package   Zimbra
 * @category  Enum
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class Action extends Base
{
    /**
     * Constant for value 'edit'
     * @return string 'edit'
     */
    const EDIT = 'edit';

    /**
     * Constant for value 'revoke'
     * @return string 'revoke'
     */
    const REVOKE = 'revoke';

    /**
     * Constant for value 'expire'
     * @return string 'expire'
     */
    const EXPIRE = 'expire';

    /**
     * Constant for value 'start'
     * @return string 'start'
     */
    const START = 'start';

    /**
     * Constant for value 'status'
     * @return string 'status'
     */
    const STATUS = 'status';

    /**
     * Constant for value 'stop'
     * @return string 'stop'
     */
    const STOP = 'stop';
}
