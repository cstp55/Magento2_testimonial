<?php
namespace Chandan\Testimonial\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;
use Magento\Framework\UrlInterface;

class TestimonialActions extends Column
{
    protected $urlBuilder;

    public function __construct(
        Context $context,
        UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $components, $data);
    }

    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                $item[$this->getData('name')] = [
                    'edit' => [
                        'href' => $this->urlBuilder->getUrl(
                            'chandan_testimonial/testimonial/edit',
                            ['id' => $item['id']]
                        ),
                        'label' => __('Edit'),
                    ],
                    'delete' => [
                        'href' => $this->urlBuilder->getUrl(
                            'chandan_testimonial/testimonial/delete',
                            ['id' => $item['id']]
                        ),
                        'label' => __('Delete'),
                        'confirm' => [
                            'title' => __('Delete "${ $.$data.customer_name }"'),
                            'message' => __('Are you sure you want to delete the testimonial "${ $.$data.customer_name }"?'),
                        ],
                    ],
                ];
            }
        }
        return $dataSource;
    }
}
