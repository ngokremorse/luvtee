<?php
    global $pdpEvent;
    if(!class_exists("PDPEvent")) {
       
        class PDPEvent {
            private function updateDashboard($device = "", $productId = "", $view = 0, $atc = 0, $checkout = 0, $orderCount = 0, $orderItem = 0, $orderAmount = 0, $utm_source = "", $utm_medium = "", $utm_campaign = "") {
                global $pdpRepo;
                $pdpRepo->upsertDashboard($device, $productId, $view, $atc, $checkout, $orderCount, $orderItem, $orderAmount, $utm_source, $utm_medium, $utm_campaign);
            }

            public function updateProductTracking($view = 0, $atc = 0, $checkout = 0, $orderCount = 0, $orderItem = 0, $orderAmount = 0, $productId = NULL) {
                global $product;
                $client  = $this->getDeviceInformation();
                $this->updateDashboard(
                    $client['device_type'].'/'. $client['operating_system'],
                    isset ($product) ? $product->get_id() : $productId,
                    $view,$atc,$checkout, $orderCount, $orderItem, $orderAmount,
                    !isset($_COOKIE['utm_source']) ? 'n/a' : $_COOKIE['utm_source'],
                    !isset($_COOKIE['utm_medium']) ? 'n/a' : $_COOKIE['utm_medium'],
                    !isset($_COOKIE['utm_campaign']) ? 'n/a': $_COOKIE['utm_campaign']
                );
            }
            private function getDeviceInformation() {
                $deviceInfo = array();
            
                // User Agent
                $deviceInfo['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
            
                // IP Address
                $deviceInfo['ip_address'] = $_SERVER['REMOTE_ADDR'];
            
                // Operating System
                $deviceInfo['operating_system'] = $this->getOperatingSystem($deviceInfo['user_agent']);
            
                // Browser
                $deviceInfo['browser'] = $this->getBrowser($deviceInfo['user_agent']);
            
                // Device Type
                $deviceInfo['device_type'] = $this->getDeviceType($deviceInfo['user_agent']);
            
                // Language
                $deviceInfo['language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
            
                return $deviceInfo;
            }
            
            private function getOperatingSystem($userAgent) {
                $operatingSystems = array(
                    'Windows NT' => 'Windows',
                    'Mac OS X' => 'macOS',
                    'Linux' => 'Linux',
                    'Android' => 'Android',
                    'iOS' => 'iOS',
                );
            
                foreach ($operatingSystems as $pattern => $os) {
                    if (preg_match("/$pattern/", $userAgent)) {
                        return $os;
                    }
                }
            
                return 'Unknown';
            }
            
            private function getBrowser($userAgent) {
                $browsers = array(
                    'Chrome' => 'Chrome',
                    'Firefox' => 'Firefox',
                    'Safari' => 'Safari',
                    'Edge' => 'Edge',
                    'Opera' => 'Opera',
                );
            
                foreach ($browsers as $pattern => $browser) {
                    if (preg_match("/$pattern/", $userAgent)) {
                        return $browser;
                    }
                }
            
                return 'Unknown';
            }
            
            private function getDeviceType($userAgent) {
                $deviceTypes = array(
                    'Mobile' => array('Android', 'iOS', 'Windows Phone'),
                    'Desktop' => array('Windows NT', 'Mac OS X', 'Linux'),
                    'Tablet' => array('iPad', 'Android Tablet'),
                );
            
                foreach ($deviceTypes as $type => $osPatterns) {
                    foreach ($osPatterns as $pattern) {
                        if (preg_match("/$pattern/", $userAgent)) {
                            return $type;
                        }
                    }
                }
            
                return 'Unknown';
            }
        
        }
        $pdpEvent = new PDPEvent();
    }


