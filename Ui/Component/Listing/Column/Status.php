<?php
namespace Chandan\Testimonial\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class Status extends Column
{
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                $status = $item['status'];
                $item['status'] = $status ? __('Active') : __('Inactive');
            }
        }
        return $dataSource;
    }
}
