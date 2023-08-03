<?php
namespace Chandan\Testimonial\Ui\DataProvider;

use Chandan\Testimonial\Model\ResourceModel\Testimonial\CollectionFactory;

class TestimonialDataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $testimonialCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $testimonialCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        return [];
    }
}
