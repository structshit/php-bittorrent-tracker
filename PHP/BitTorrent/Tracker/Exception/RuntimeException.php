<?php
/**
 * This file is part of the PHP BitTorrent Tracker package
 *
 * (c) Christer Edvartsen <cogo@starzinger.net>
 *
 * For the full copyright and license information, please view the LICENSE file that was
 * distributed with this source code.
 */

namespace PHP\BitTorrent\Tracker\Exception;

use PHP\BitTorrent\Tracker\Exception,
    PHP\BitTorrent\EncoderInterface,
    RuntimeException as SplRuntimeException;

/**
 * Runtime exception
 *
 * @package Tracker\Exception
 * @author Christer Edvartsen <cogo@starzinger.net>
 */
class RuntimeException extends SplRuntimeException implements Exception {
    /**
     * {@inheritdoc}
     */
    public function getMessageEncoded(EncoderInterface $encoder) {
        return $encoder->encodeDictionary(array(
            'failure reason' => $this->getMessage(),
        ));
    }
}
