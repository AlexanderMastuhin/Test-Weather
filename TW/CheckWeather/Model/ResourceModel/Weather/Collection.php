<?php
declare(strict_types=1);

namespace TW\CheckWeather\Model\ResourceModel\Weather;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \TW\CheckWeather\Model\DataModel::class,
            \TW\CheckWeather\Model\ResourceModel\DataResource::class
        );
    }
}
