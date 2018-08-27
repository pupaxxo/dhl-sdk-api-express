<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Request\Tracking\MessageInterface;
use Dhl\Express\Api\Data\TrackingRequestInterface;

/**
 * TrackingRequest Class.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingRequest implements TrackingRequestInterface
{
    /**
     * @var MessageInterface
     */
    private $message;

    /**
     * @var string[]
     */
    private $awbNumber;

    /**
     * @var string
     */
    private $levelOfDetails;

    /**
     * @var string
     */
    private $piecesEnabled;

    /**
     * @var bool
     */
    private $estimatedDeliveryDate;

    /**
     * TrackingRequest constructor.
     *
     * @param MessageInterface $message
     * @param string[]         $awbNumber
     * @param string           $levelOfDetails
     * @param string           $piecesEnabled
     * @param bool             $estimatedDeliveryDate
     */
    public function __construct(
        MessageInterface $message,
        array $awbNumber,
        string $levelOfDetails,
        string $piecesEnabled,
        bool $estimatedDeliveryDate
    ) {
        $this->message = $message;
        $this->awbNumber = $awbNumber;
        $this->levelOfDetails = $levelOfDetails;
        $this->piecesEnabled = $piecesEnabled;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
    }

    public function getMessage(): MessageInterface
    {
        return $this->message;
    }

    public function getAwbNumber(): array
    {
        return $this->awbNumber;
    }

    public function getLevelOfDetails(): string
    {
        return $this->levelOfDetails;
    }

    public function getPiecesEnabled(): string
    {
        return $this->piecesEnabled;
    }

    /**
     * @return bool
     */
    public function isEstimatedDeliveryDateRequested(): bool
    {
        return $this->estimatedDeliveryDate;
    }
}
