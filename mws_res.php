<?php

error_reporting(0);
echo '<pre>';
//echo strlen('Jane Iredale Dream Tint Moisture Tint SPF 15  Warm Bronze  7.4ml x 3 Travel size');exit;
$response1 = '<?xml version="1.0" encoding="UTF-8"?>
<GetFulfillmentOrderResponse
  xmlns="http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/">
  <GetFulfillmentOrderResult>
    <FulfillmentOrderItem>
      <member>
        <SellerSKU>SKU100</SellerSKU>
        <GiftMessage>giftwrap_message</GiftMessage>
        <SellerFulfillmentOrderItemId>merchant_order_item_id_2
          </SellerFulfillmentOrderItemId>
        <EstimatedShipDateTime>2014-01-03T07:07:53Z</EstimatedShipDateTime>
        <DisplayableComment>Example comment</DisplayableComment>
        <UnfulfillableQuantity>0</UnfulfillableQuantity>
        <CancelledQuantity>1</CancelledQuantity>
        <Quantity>5</Quantity>
        <EstimatedArrivalDateTime>2014-01-05T08:07:53Z
          </EstimatedArrivalDateTime>
        <PerUnitPrice>
          <CurrencyCode>JPY</CurrencyCode>
          <Value>2500</Value>
        </PerUnitPrice>
        <PerUnitTax>
          <CurrencyCode>JPY</CurrencyCode>
          <Value>5000</Value>
        </PerUnitTax>
      </member>
      <member>
        <SellerSKU>SKU101</SellerSKU>
        <GiftMessage>giftwrap_message</GiftMessage>
        <SellerFulfillmentOrderItemId>merchant_order_item_id_1
          </SellerFulfillmentOrderItemId>
        <EstimatedShipDateTime>2014-01-03T07:07:53Z</EstimatedShipDateTime>
        <DisplayableComment>Example comment</DisplayableComment>
        <UnfulfillableQuantity>2</UnfulfillableQuantity>
        <CancelledQuantity>1</CancelledQuantity>
        <Quantity>5</Quantity>
        <EstimatedArrivalDateTime>2014-01-05T08:07:53Z
          </EstimatedArrivalDateTime>
        <PerUnitPrice>
          <CurrencyCode>JPY</CurrencyCode>
          <Value>1000</Value>
        </PerUnitPrice>
        <PerUnitTax>
          <CurrencyCode>JPY</CurrencyCode>
          <Value>2000</Value>
        </PerUnitTax>
      </member>
      <member>
        <SellerSKU>SKU102</SellerSKU>
        <GiftMessage>giftwrap_message</GiftMessage>
        <SellerFulfillmentOrderItemId>merchant_order_item_id_2
          </SellerFulfillmentOrderItemId>
        <EstimatedShipDateTime>2014-01-03T07:07:53Z</EstimatedShipDateTime>
        <DisplayableComment>Example comment</DisplayableComment>
        <UnfulfillableQuantity>2</UnfulfillableQuantity>
        <CancelledQuantity>1</CancelledQuantity>
        <Quantity>5</Quantity>
        <EstimatedArrivalDateTime>2014-01-05T08:07:53Z
          </EstimatedArrivalDateTime>
        <PerUnitPrice>
          <CurrencyCode>JPY</CurrencyCode>
          <Value>1000</Value>
        </PerUnitPrice>
        <PerUnitTax>
          <CurrencyCode>JPY</CurrencyCode>
          <Value>2000</Value>
        </PerUnitTax>
      </member>
    </FulfillmentOrderItem>
    <FulfillmentOrder>
      <ShippingSpeedCategory>ScheduledDelivery</ShippingSpeedCategory>
      <DeliveryWindow>
        <StartDateTime>2014-01-05T03:00:00Z</StartDateTime>
        <EndDateTime>2014-01-05T05:00:00Z</EndDateTime>
      </DeliveryWindow>
      <NotificationEmailList>
        <member>o8c2EXAMPLsfr7o@marketplace.amazon.com</member>
      </NotificationEmailList>
      <StatusUpdatedDateTime>2014-01-02T23:48:48Z</StatusUpdatedDateTime>
      <SellerFulfillmentOrderId>extern_id_1154539615776
        </SellerFulfillmentOrderId>
      <DestinationAddress>
        <PostalCode>153-0002</PostalCode>
        <Name>Amazon Taro</Name>
        <CountryCode>JP</CountryCode>
        <Line1>Meguro-ku Shimomeguro 12-34-56</Line1>
        <StateOrProvinceCode>Tokyo</StateOrProvinceCode>
        <Line2>XXX building 101</Line2>
      </DestinationAddress>
      <DisplayableOrderDateTime>2014-01-02T17:26:56Z </DisplayableOrderDateTime>
      <FulfillmentPolicy>FillOrKill</FulfillmentPolicy>
      <ReceivedDateTime>2014-01-02T17:26:56Z</ReceivedDateTime>
      <DisplayableOrderId>test_displayable_id</DisplayableOrderId>
      <DisplayableOrderComment>Sample comment</DisplayableOrderComment>
      <CODSettings>
        <IsCODRequired>true</IsCODRequired>
        <CODCharge>
          <Value>4000</Value>
          <CurrencyCode>JPY</CurrencyCode>
        </CODCharge>
        <CODChargeTax>
          <Value>300</Value>
          <CurrencyCode>JPY</CurrencyCode>
        </CODChargeTax>
        <ShippingCharge>
          <Value>1000</Value>
          <CurrencyCode>JPY</CurrencyCode>
        </ShippingCharge>
        <ShippingChargeTax>
          <Value>75</Value>
          <CurrencyCode>JPY</CurrencyCode>
        </ShippingChargeTax>
      </CODSettings>
      <FulfillmentOrderStatus>COMPLETE_PARTIALLED</FulfillmentOrderStatus>
      <FulfillmentAction>Ship</FulfillmentAction>
      <MarketplaceId>ATVPDKIKX0DER </MarketplaceId>
    </FulfillmentOrder>
    <FulfillmentShipment>
      <member>
        <FulfillmentShipmentStatus>SHIPPED</FulfillmentShipmentStatus>
        <FulfillmentShipmentItem>
          <member>
            <SellerSKU>SKU100</SellerSKU>
            <SellerFulfillmentOrderItemId>merchant_order_item_id_0</SellerFulfillmentOrderItemId>
            <Quantity>2</Quantity>
            <PackageNumber>1</PackageNumber>
          </member>
        </FulfillmentShipmentItem>
        <AmazonShipmentId>DnMDLWJWN</AmazonShipmentId>
        <ShippingDateTime>2014-01-03T07:00:00Z</ShippingDateTime>
        <FulfillmentShipmentPackage>
          <member>
            <TrackingNumber>93ZZ00</TrackingNumber>
            <CarrierCode>UPS</CarrierCode>
            <PackageNumber>1</PackageNumber>
          </member>
        </FulfillmentShipmentPackage>
        <FulfillmentCenterId>RNO1</FulfillmentCenterId>
        <EstimatedArrivalDateTime>2014-01-04T07:00:00Z
          </EstimatedArrivalDateTime>
      </member>
      <member>
        <FulfillmentShipmentStatus>SHIPPED</FulfillmentShipmentStatus>
        <FulfillmentShipmentItem>
          <member>
            <SellerSKU>SKU101</SellerSKU>
            <SellerFulfillmentOrderItemId>merchant_order_item_id_1</SellerFulfillmentOrderItemId>
            <Quantity>1</Quantity>
            <PackageNumber>2</PackageNumber>
          </member>
        </FulfillmentShipmentItem>
        <AmazonShipmentId>DKMKLXJmN</AmazonShipmentId>
        <ShippingDateTime>2014-01-03T07:00:00Z</ShippingDateTime>
        <FulfillmentShipmentPackage>
          <member>
            <TrackingNumber>93ZZ01</TrackingNumber>
            <CarrierCode>UPS</CarrierCode>
            <PackageNumber>2</PackageNumber>
          </member>
        </FulfillmentShipmentPackage>
        <FulfillmentCenterId>TST1</FulfillmentCenterId>
        <EstimatedArrivalDateTime>2014-01-05T07:00:00Z
          </EstimatedArrivalDateTime>
      </member>
      <member>
        <FulfillmentShipmentStatus>CANCELLED_BY_FULFILLER</FulfillmentShipmentStatus>
        <FulfillmentShipmentItem>
          <member>
            <SellerSKU>SKU102</SellerSKU>
            <SellerFulfillmentOrderItemId>merchant_order_item_id_2</SellerFulfillmentOrderItemId>
            <Quantity>1</Quantity>
            <PackageNumber>3</PackageNumber>
          </member>
        </FulfillmentShipmentItem>
        <AmazonShipmentId>DKMKLXJmO</AmazonShipmentId>
        <ShippingDateTime>2014-01-03T07:00:00Z</ShippingDateTime>        
        <FulfillmentCenterId>TST1</FulfillmentCenterId>
        <EstimatedArrivalDateTime>2014-01-05T07:00:00Z
          </EstimatedArrivalDateTime>
      </member>
    </FulfillmentShipment>
  </GetFulfillmentOrderResult>
  <ResponseMetadata>
    <RequestId>5e5e5694-8e76-11df-929f-87c80302f8f6</RequestId>
  </ResponseMetadata>
</GetFulfillmentOrderResponse>';

function date_T_Z($date) {
    return str_replace(array('T', 'Z'), array(' ', ''), $date);
}
function date_T_Z1($date) {
    return str_replace('Z', '.6069933Z', $date);
}
function date_T_Z2($date) {
    return str_replace('Z', date('-h:m'), $date);
}
function date_T_Z3($date) {
    return str_replace('Z', date('-h:m'), $date);
 }

$response = simplexml_load_string($response1);
$FulfillmentOrder = $response->GetFulfillmentOrderResult->FulfillmentOrder;
$FulfillmentOrderStatus = (string) $FulfillmentOrder->FulfillmentOrderStatus;
$ShippingSpeedCategory = (string) $FulfillmentOrder->ShippingSpeedCategory;

//print_r($response);

if ($FulfillmentOrderStatus == 'CANCELLED' || $FulfillmentOrderStatus == 'UNFULFILLABLE' || $FulfillmentOrderStatus == 'INVALID') {
    $mysqli->query("UPDATE orders SET fba_cancelled = fba_sent, fba_shipped_status = 'n' WHERE merchant_order_id='" . $jet_orderNo . "'");
} else if ($FulfillmentOrderStatus == 'COMPLETE' || $FulfillmentOrderStatus == 'COMPLETE_PARTIALLED') {
    
    $pending_sku_arr = $shipped_sku_arr = $cancelled_f_sku_arr = $cancelled_s_sku_arr = array();
    
    $FulfillmentOrderItem = $response->GetFulfillmentOrderResult->FulfillmentOrderItem;
    $FulfillmentShipment  = $response->GetFulfillmentOrderResult->FulfillmentShipment->member;
    
    foreach ($FulfillmentShipment as $key => $value) {
        $ShipmentStatus             = (string) $value->FulfillmentShipmentStatus;
        $AmazonShipmentId           = (string) $value->AmazonShipmentId;
        $FulfillmentCenterId        = (string) $value->FulfillmentCenterId;
        $ShippingDateTime           = date_T_Z1((string) $value->ShippingDateTime);
        $EstimatedArrivalDateTime   = date_T_Z1((string) $value->EstimatedArrivalDateTime);
        if ($ShipmentStatus == 'SHIPPED') {
            $FulfillmentShipmentItem = $value->FulfillmentShipmentItem->member;
            $FulfillmentShipmentPackage = $value->FulfillmentShipmentPackage->member;
            foreach ($FulfillmentShipmentPackage as $k2 => $ShipmentPackage) {
                
                $PackageNumber                                     = (string) $ShipmentPackage->PackageNumber;
                $Orders_order_details['request_shipping_carrier']  = (string) $ShipmentPackage->CarrierCode;
                $Orders_order_details['request_service_level']     = $ShippingSpeedCategory;
                $Orders_order_details['request_ship_by']           = $ShippingDateTime;
                $Orders_order_details['request_delivery_by']       = $EstimatedArrivalDateTime;
                
                $Orders_shipments['alt_shipment_id']               = $AmazonShipmentId;
                $Orders_shipments['carrier']                       = (string) $ShipmentPackage->CarrierCode;
                $Orders_shipments['response_shipment_date']        = date_T_Z2($ShippingDateTime);
                $Orders_shipments['ship_from_zip_code']            = "12061";
                $Orders_shipments['shipment_id']                   = $AmazonShipmentId; 
                //$Orders_shipments['response_shipment_method']     = $ShippingSpeedCategory;     
                //$Orders_shipments['expected_delivery_date']       = date_T_Z2((string) $ShipmentPackage->EstimatedArrivalDateTime);
                
                $package_label[$PackageNumber]['shipment_tracking_number']  = (string) $ShipmentPackage->TrackingNumber;                        
                $package_label[$PackageNumber]['request_shipping_carrier']  = (string) $ShipmentPackage->CarrierCode;
                $package_label[$PackageNumber]['request_service_level']     = $ShippingSpeedCategory;
                $package_label[$PackageNumber]['request_ship_by']           = $ShippingDateTime;                        
                $package_label[$PackageNumber]['request_delivery_by']       = date_T_Z1((string) $ShipmentPackage->EstimatedArrivalDateTime);

            }
           
            foreach ($FulfillmentShipmentItem as $k1 => $ShipmentItem) {                
                $SellerSKU          = (string) $ShipmentItem->SellerSKU;
                $shipped_sku_arr[]  = (string) $ShipmentItem->SellerSKU;
                $PackageNumber      = (string) $ShipmentItem->PackageNumber;
                
                $Orders_shipments['shipment_items'][] = array(
                    'shipment_id' => (string) $ShipmentItem->SellerFulfillmentOrderItemId,
                    'alt_shipment_item_id' => (string) $ShipmentItem->SellerFulfillmentOrderItemId,
                    'merchant_sku' => (string) $ShipmentItem->SellerSKU, 
                    'response_shipment_sku_quantity' => (string) $ShipmentItem->Quantity
                        );
                                
                $Orders_orders_update[]['request'] = '{
                                "alt_order_id": "'.$alt_orderid.'",
                                  "shipments": [
                                    {
                                      "shipment_tracking_number": "' . $package_label[$PackageNumber]['shipment_tracking_number'] . '",
                                      "response_shipment_date": "' . date_T_Z2($ShippingDateTime) . '",
                                      "response_shipment_method": "' . $ShippingSpeedCategory. '",
                                      "ship_from_zip_code": "12061",
                                      "expected_delivery_date": "'. date_T_Z2($EstimatedArrivalDateTime) .'",
                                      "carrier": "' . $package_label[$PackageNumber]['request_shipping_carrier'] . '",
                                      "shipment_items": [
                                        {
                                          "shipment_item_id": "' . (string) $ShipmentItem->SellerFulfillmentOrderItemId . '",
                                          "merchant_sku": "' . (string) $ShipmentItem->SellerSKU . '",
                                          "response_shipment_sku_quantity":' . (string) $ShipmentItem->Quantity . ' ,
                                          "response_shipment_cancel_qty": 0
                                        }
                                      ]
                                    }
                                  ]
                                }';
                    //$Orders_orders_update['status'] = 'new';
                    //$Orders_orders_update['message'] = 'Information about orders successfully! Please wait while system update this order on jet.com';
            } // End of foreach for $FulfillmentShipmentItem
            $Orders_shipments['shipment_message_date']            = (string) $value->ShippingDateTime;
            $Orders_shipments['shipment_tracking_number']         = $package_label[$PackageNumber]['shipment_tracking_number'];
            
        }
        else if ($ShipmentStatus == 'CANCELLED_BY_FULFILLER') {
            foreach($FulfillmentShipmentItem as $ShipmentItem) {
                $cancelled_f_sku_arr[] = (string) $ShipmentItem->SellerSKU;
            }
        }
        else if ($ShipmentStatus == 'CANCELLED_BY_SELLER') {
            foreach($FulfillmentShipmentItem as $ShipmentItem) {
                $cancelled_s_sku_arr[] = (string) $ShipmentItem->SellerSKU;
            }
        }
    }
    $fba_shipped   = count($shipped_sku_arr);
    $fba_cancelled = count($cancelled_f_sku_arr) + count($cancelled_s_sku_arr);
    foreach($Orders_orders_update as $key => $order_update_insert) {        
            $Insert_Orders_Update_Qry = "INSERT INTO orders_update (`cred_id`, `merchant_order_id`, `request`, `status`, `message`) VALUES('$cred_id', '$merchant_order_id', '".$order_update_insert['request']."', 'new', 'Information about orders successfully! Please wait while system update this order on jet.com')"; 
    }
    $Update_Orders_Qry = "UPDATE orders SET order_detail = '".json_encode($Orders_order_details)."', shipments = '".json_encode($Orders_shipments)."', fba_cancelled = '$fba_cancelled', fba_shipped = '$fba_shipped' WHERE merchant_order_id='".$merchant_order_id."' AND cred_id='".$cred_id."'";
    $Insert_Ship_Orders_Qry   = "INSERT INTO ship_orders (ship_order) VALUES('".$merchant_order_id."')";
    
    echo '<br>'.$Update_Orders_Qry;
} //End of else if for $FulfillmentOrderStatus
        
echo '<br>'; 
//echo '<pre>';print_r($response);

