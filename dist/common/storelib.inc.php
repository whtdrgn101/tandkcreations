<?php

    class storelib {
        
        private static function getStoreItemsUrl() {
            // API request variables
            $endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
            $version = '1.0.0';  
            $appid = 'TKCreati-252a-4475-8395-a293609502b4';
            $globalid = 'EBAY-US';
            $storename = 'Wood-Creations-by-T-K';
            $safestore = urlencode($storename);
            
            // Construct the findItemsIneBayStores HTTP GET call
            $apicall = "$endpoint?";
            $apicall .= "OPERATION-NAME=findItemsIneBayStores";
            $apicall .= "&RESPONSE-DATA-FORMAT=JSON";
            $apicall .= "&SERVICE-VERSION=$version";
            $apicall .= "&SECURITY-APPNAME=$appid";
            $apicall .= "&GLOBAL-ID=$globalid";
            $apicall .= "&storeName=$safestore";
            
            return $apicall;
        }
        public static function getStoreItems() {
            
            // Load the call and capture the document returned by eBay API
            $url = storelib::getStoreItemsUrl();
            $options = array(
                CURLOPT_URL => $url,
                CURLOPT_HEADER => 0, 
                CURLOPT_RETURNTRANSFER => TRUE);
            $ch = curl_init(); 
            curl_setopt_array($ch, ($options));
            
            //Items array
            $items = array();
            $itemsindex = 0;
            try
            {
                $resp = json_decode(curl_exec($ch));
                foreach($resp->findItemsIneBayStoresResponse[0]->searchResult[0]->item as $result) {
                    $items[$itemsindex] = array(
                            "Name" => $result->title[0],
                            "LinkURL" => $result->viewItemURL[0],
                            "ImageURL" => $result->galleryURL[0],
                            "Category" => $result->primaryCategory[0]->categoryName[0],
                            "Shipping" => $result->shippingInfo[0]->shippingServiceCost[0]->__value__,
                            "Price" => $result->sellingStatus[0]->currentPrice[0]->__value__
                        );
                    $itemsindex++;
                }
                return $items;
                
            } catch(Exception $ex) {
                echo $ex->getMessage();
            } finally {
                curl_close($ch);
            }
        }
    }
    
?>