<?php

namespace App\Helpers;

use PhpParser\Node\Stmt\Break_;
use App\Repositories\Shipments\ShipmentsRepositories;
use function PHPUnit\Framework\returnSelf;
use App\Models\Shipments;
use App\Models\ShipmentItems;

class AppHelper
{  

    public static function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function GetCountStatus($status)
    {
        return Shipments::where('shipment_status',$status)->count();
    }

    public static function SumShipmentPrice($id)
    {
        return  ShipmentItems::where('shItem_shipment_id',$id)->sum('shItem_price');
    }
    
    
    public static function getShipmentStatusLabel($status){
        if (empty($status))
            $status = 0;

        $statusLabel="";
        switch ($status) {
            case ShipmentsRepositories::SHIPMENT_STATUS_PENDING:
                $statusLabel = '<div class="badge badge-pill badge-light-warning">Pending</div>';
                break;
            // case 1:
            //     $statusLabel = '<div class="badge badge-pill badge-light-secondary">Scheduled</div>';
            //     break;
            case ShipmentsRepositories::SHIPMENT_STATUS_APPROVED:
                $statusLabel = '<div class="badge badge-pill badge-light-primary">Approved</div>';
                break;
            case ShipmentsRepositories::SHIPMENT_STATUS_SHIPPED:
                $statusLabel = '<div class="badge badge-pill badge-light-secondary">Shipped</div>';
                break;
            case ShipmentsRepositories::SHIPMENT_STATUS_COMPLETED:
                $statusLabel = '<div class="badge badge-pill badge-light-success">Completed</div>';
                break;
            // case 3:
            //     $statusLabel = '<div class="badge badge-pill badge-light-success">Delivered</div>';
            //     break;
            // case 4:
            //     $statusLabel = '<div class="badge badge-pill badge-light-danger">Returned</div>';
            //     break;
            case ShipmentsRepositories::SHIPMENT_STATUS_CANCELLED:
                $statusLabel = '<div class="badge badge-pill badge-light-danger">Cancelled</div>';
                break;
            case ShipmentsRepositories::SHIPMENT_STATUS_DELETE:
                $statusLabel = '<div class="badge badge-pill badge-light-danger">Deleted</div>';
                break;
            case ShipmentsRepositories::SHIPMENT_STATUS_SCHEDULE:
                $statusLabel = '<div class="badge badge-pill badge-light-secondary">Schedule</div>';
                break;

            case ShipmentsRepositories::SHIPMENT_STATUS_ACCOUNTING:
                $statusLabel = '<div class="badge badge-pill badge-light-primary">Accounting</div>';
                break;

            case ShipmentsRepositories::SHIPMENT_STATUS_FINAL_COMPLETED:
                $statusLabel = '<div class="badge badge-pill badge-light-success">Final Complete</div>';
                break;

        }
        return $statusLabel;
    }

}
?>
