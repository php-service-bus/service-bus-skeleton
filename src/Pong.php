<?php

/**
 * PHP Service Bus (publish-subscribe pattern implementation) demo
 * Supports Saga pattern and Event Sourcing
 *
 * @author  Maksim Masiukevich <desperado@minsk-info.ru>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace App;

use Desperado\ServiceBus\Common\Contract\Messages\Event;

/**
 * @api
 * @see Ping
 */
final class Pong implements Event
{

}
