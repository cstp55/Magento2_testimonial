<?php
namespace Chandan\Testimonial\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class ApprovalStatus extends Column
{
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                $approvalStatus = $item['approval_status'];
                $item['approval_status'] = $approvalStatus ? __('Approved') : __('Pending');
            }
        }
        return $dataSource;
    }
}
