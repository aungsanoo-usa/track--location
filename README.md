# Visitor Tracker

This project contains a simple PHP script that tracks visitor information such as:
- IP Address
- Geolocation (Country, Region, City, Latitude, Longitude, ISP)
- Device and Browser Information

## How to Use
1. Clone this repository or download the ZIP file.
2. Upload the `track.php` file to your web server.
3. Create a `visitors.log` file in the same directory with write permissions.
4. Replace `https://example.com` with your desired redirect URL.

## Example Link
```html
<a href="track.php">Click Me</a>
```

When users click the link, their details will be logged, and they will be redirected to the specified URL.

## Requirements
- PHP 7.x or higher

## Disclaimer
This script is for educational purposes only. Ensure compliance with local privacy laws before using it in production.
