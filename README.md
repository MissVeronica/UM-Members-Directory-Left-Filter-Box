# UM Members Directory Left Filter Box
Member Directory Filter &amp; Search box moved from the top to the left side of the page with a single column with filters.

## Installation ##
Create a directory ```/ultimate-member/templates/``` in your active theme or child-theme 

Download from this repository and upload to your ```/ultimate-member/templates/``` folder the ```members.php``` file

https://docs.ultimatemember.com/article/1516-templates-map

## Notices ##
* Server/CDN or plugin caching are supported with this mobile template solution.
* Mobile browsers with changed setting to use "Desktop view" are not supported if not site site is possible to be excluded by the User.
## Updates ##
* Version 2.0  Date 2022-10-11 Now support for full screen pages
* Version 2.1 Date 2022-10-14 Add this CSS to your Theme's appearance setting and "Additional CSS" for better alignment in left column.

```
.um-search-filter select { 
	padding-bottom:10px !important;
	display:inline-block !important; 
	width:100% !important;
    -moz-box-sizing: border-box !important;
    -webkit-box-sizing: border-box !important;
	box-sizing: border-box !important;
}
.um-search-filter.um-select-filter-type .select2 {
    width: 100% !important;
}
```
* Version 2.2  Date 2022-12-14  Updated security from the UM 2.5.2 release ( in line 57 )
* Version 2.3 Date 2023-06-09 Updated to UM Version 2.6.1
* Version 2.4 Date 2023-06-12 Updated to UM Version 2.6.3
* Version 2.5 Date 2023-09-06 Updated to UM Version 2.6.8

* Version 3.0 
* Date 2024-02-20 How to use "Left side template" for Screens and default UM template for Tablets and Mobiles.
1. Rename your current Custom template from members.php to members-screen.php
2. Create a new members.php file in your active theme’s template folder.
3. Download and save this code-snippet.php into this new template file.

Update 2024-08-20 Addition of members-25.php with left column 25% of screen width, members.php is using 15%. Requires file rename before usage.

"Additional CSS" addition of

<code>.um-search-filter.um-select-filter-type .select2 {
    width: 100% !important;
}</code>

* 2025-01-14: code-snippet.php mobile/tablet support for UM 2.9.2

* Version 4.0
* 2025-08-23 Update with log function to find new mobile User agents if WP_DEBUG is set to true output to .../wp-content/um_browser_detection_log.html



