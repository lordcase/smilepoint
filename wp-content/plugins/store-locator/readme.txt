=== WordPress Store Locator ===
Contributors: viadat
Tags: business locations, admin, dealer locator, dealer locater, store locator, post, store locater, mapping, mapper, google, google maps, ajax, shop locator, shop finder, shortcode, location finder, places, widget, stores, plugin, maps, coordinates, latitude, longitude, posts, geo, geocoding, jquery, shops, page, zipcode, zip code, zip code search, store finder, address map, address location map, map maker, map creator, mapping software, map tools, mapping tools, locator maps, map of addresses, map multiple locations, wordpress locator, store locator map
Requires at least: 3.3
Tested up to: 3.8.1
Stable tag: 2.20

A WordPress-integrated map & location management interface. Quickly create store locator maps -- provides several top-level addon features

== Description ==
Power your site with this WordPress-integrated map making & location management system possessing mapping tools to create store locators, store finders, and other location address maps. Manage and display a few or thousands of your important stores, points of interest, or product locations anywhere on Earth using Google Maps. 

Its strength is in its flexibility to allow you to easily manage any number of locations from your WordPress admin interface and the several addons featuring top-level features that are available to further boost its capabilities. Also referred to as an address map, address location map, locator map, store finder, dealer locator (locater), shop finder, and zip code or zipcode search. 

= Important Links =
[All Downloads](http://www.viadat.com/store-locator/) | [Addons & Themes](http://www.viadat.com/products-page/) | [New Features & Updates Blog](http://www.viadat.com/category/store-locator/) | [Documentation](http://docs.viadat.com/)

= New in Version 2 =
* __Now uses Google Maps V3__
* Streamlined admin interface (more powerful yet much simplier)
* Implemented much faster code (reduced database use {insert/update/delete} in code by 81.4% & applied fastest functions throughout)
* __Admin Dashboard:__ Pull-out interface that provides you with the latest Store Locator news, installation & usage instructions, your website's hosting server information, available shortcode parameters to create multiple maps of specific groups of locations, general settings, and the activation interface for the Addons Platform & G1 (Generation 1) addons
* __Availability of the Addons Platform:__ (more details in Other Notes)
* Ability to auto-locate your website visitors in order to show locations based on where visitor is currently located
* 40+ new Google Maps country domains
* New address map icons
* __New default fields:__ Fax & Email Address

= Target Users =
* Those of you who create sites for clients using WordPress
* Those of you who want to show your important locations (stores, buildings, points of interest, etc.) in an easily searchable manner.

= Great Built-In Functionality & Features =
* You can use it for numerous countries, which will continue to be added as Google adds new countries to their Google Maps API.  See the documentation for the latest
* Supports international languages/translations and character sets 
* Allows you to use unique map icons or your own custom map icons --- great for branding your map
* Gives your map the desired look by using our MapDesigner&trade; settings interface in the WordPress admin section
* Pick other cool Google Maps options, such as an inset box, zoom level, map types (street, satellite, hybrid, physical), and more
* You can use miles or kilometers
* Automatically restricts loading of Javascript & CSS to only pages that display the map (or that might need access to the JS & CSS) for better site performance
* Option to show dropdown list of cities allows visitors to quickly see where your locations are and choose their search accordingly

= Upgrades =
If you need additional features, enhance your store locator with addons & themes. [Upgrade Here](http://www.viadat.com/products-page/)

= Addons Platform =
The [Addons Platform](http://docs.viadat.com/Main_Page#Addons) provides you with a growing number of __free__ Generation 2 (G2; comes with the Addons Platform) addons & themes to save you time, provide you highly-advanced features, and impress your clients. Below is a list of some of the addons available, starting in Store Locator Version 2 ([view documentation](http://docs.viadat.com/Main_Page#Addons) for more details on each):

* Categorizer
* Multiple Mapper
* Advanced Theme Manager
* Location Pages
* CSV Importer/Exporter G2
* DB Importer G2
* Multiple-Field Updater G2
* Custom Field Manager

The above addons are only a few of the addons available via the Addons Platform -- install them with one click directly from your admin interface's Addons Marketplace.  These G2 addons also communicate with each other to make full benefit of the Addons Platform's API. 

All addons available previous to Store Locator 2.0 are now called "G1" (Generation 1) addons, and can still be used, with or without the Addons Platform installed (if you purchased an addon prior to 2.0, re-download it via the emailed link of your purchase and install a slighty updated version that allows it to work with 2.0).  

In addition to the 8 addons listed above, there are currently 8 additional bonus addons -- visible to those with the Addons Platform installed: Currently, 3 are active, 1 is yet-to-be-released, and 4 more addons are in development.

= Special Thanks to Translators (Email new translations to info{at}viadat{dot}com) =
* Simon Schmid: German (Deutsche), Italian (Italiano), Czech (Cestina), French (Francais)
* Gwyn Fisher: Spanish (Espanol)
* [Josef Klimosz](http://pepa.rudice.eu/): Czech (Cestina)(updated)
* [Willem-Jan Korsten](http://www.ezhome.nl/): Dutch (Nederlands)
* [Marcelo V. Araujo](http://www.mgerais.net/): Portuguese (Portugues)
* [Reno](http://www.creaprime.fr): French (Francais)(updated)
* [Alf Vidar Snaeland](http://www.fastfrilans.no): Norwegian (Norsk)
* [Laifeilim](http://www.fileem.com): Simplified Chinese
* Victor Ukhimenko: Russian
* [Rene](http://wpwebshop.com): Turkish
* [Outshine Solutions](http://outshinesolutions.com): Hindi
* [Diana S.](http://www.wpcouponshop.com): Serbian
* [Esa Immonen](http://www.probeautyscandinavia.com): Finnish
* [Quickloop](http://quickloop.ro): Romanian

([How to submit your translation](http://www.viadat.com/2009/02/store-locator-translation-files-wanted-you-might-just-get-something-nice-in-return/) | If you provide your web address, we'll link back to you)

== Installation ==
= Main Plugin =
1. Upload the `store-locator` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Sign up for a Google Maps API Key for your domain (not required in Maps V3, unless needed for high usage sites). Instructions: https://developers.google.com/maps/documentation/javascript/tutorial#api_key
4. Add your locations through the 'Locations' page in the Store Locator admin area
5. Place the shortcode `[STORE-LOCATOR]` in the body of a Page or a Post to display your store locator

= Addons =
1. Unzip & Upload the entire addon folder to the `/wp-content/uploads/sl-uploads/addons` directory
2. Activate the addon by submitting the activation key (which you receive after purchasing it) to the "Activation Keys" section of your pull-out admin dashboard (If you have the Addons Platform installed, you submit activation keys on the 'Addons' > 'Settings' page)

= Themes =
1. Unzip & Upload the entire theme folder to the `/wp-content/uploads/sl-uploads/themes` directory
2. Select theme from the theme dropdown menu under the "Design" section on the "MapDesigner&trade;" Page

= Icons =
1. There are some default icons in the `/wp-content/plugins/store-locator/icons` directory
2. Add your own custom icons in to `/wp-content/uploads/sl-uploads/custom-icons`

= Custom CSS (Stylesheet) =
1. You can modify the default 'store-locator.css' and place it under `/wp-content/uploads/sl-uploads/custom-css/`
2. The store locator will give priority to the 'store-locator.css' in the `/wp-content/uploads/sl-uploads/custom-css/` folder over the default 'store-locator.css' in the main `store-locator/` folder. This allows you to upgrade the main store locator plugin without worrying about losing your custom styling.

== Screenshots ==
1. Showcase of Store Locator Usage By Well-Known Organizations, With Some Having Customized it to Their Brands
2. News & Upgrades: See the Latest News and Available Addons for Your Store Locator
3. Manage Locations: Easily Manage a Few or Many Locations, Sortable by Name, City, etc.
4. Add Locations: Once You Add a Location, it is Automatically Given Coordinates
5. MapDesigner&trade;: Choose the Important Options For the Look & Feel of Your Map
6. Addons Platform: Increase Your Store Locator's Capabilities With Numerous Addons & Themes that are Included
7. Quickly Upload Many Locations From a Spreadsheet to Save Time (Addon: CSV/XML Importer/Exporter)
8. Bulk Update More than just the Tags Field (Addon: Multiple-Field Updater)
9. Examples of the Store Locator's Basic and Upgraded User Interfaces

== Changelog ==
= 2.20 =
* Update to allow Store Locator to load JS/CSS and display, even if theme is missing the standard head hooks

= 2.19 =
* Update to allow Store Locator to display on all post types, including custom post types

= 2.18 =
* Front-end interface CSS enhancement
* New Store Locator admin menu for convenient access from WordPress Admin Toolbar
* Modular & Pull-out Admin Dashboard updates
* WP Admin dashboard news bugfix
* Version bump: WP 3.3 (due to menu in WP Admin Toolbar)

= 2.17 =
* Dashboard/Admin update/fix
* Functional update

= 2.16 =
* More WP 3.8 integration updates
* Location Management / Admin CSS improvements
* MapDesigner update

= 2.15.x =
* Several Store Locator admin updates due to significant WP admin interface changes introduced in WordPress v3.8.  Elements fixed include:
* Pull-Out Dashboard & Modules
* MapDesigner page
* All Sectional headers
* Addons Platform Settings page
* Admin CSS fixes
* Still maintains good appearance for pre-WP v3.8 installs also

= 2.14 =
* Update for better directory/file management. Should improve overall/addons' functionality, display of web content such as search buttons on sites w/more strict or custom hosting setups (such as GoDaddy)
* Same-origin fix for websites that allow display of both 'www.domain.com' and 'domain.com' versions of their sites, to make sure locations load properly on both versions

= 2.13.1 =
* Fix for properly registering option choosing whether to display search results when loading locations by default
* Minor fix for city dropdown option

= 2.13 =
* Pull-out Dashboard fixes: operates more gracefully for those with certain functionality absent (file_get_contents, cURL, etc)
* Fixed issue of blank admin area for small segment of users
* Added SL_VERSION to defined constants
* Interface/marker Infowindow CSS update

= 2.12.x =
* Fixed issue causing 'geo_success' warning in Firefox. Better auto-location for Firefox browsers now.
* Addon/Theme Updates:
* [addon] [Categorizer](http://docs.viadat.com/Categorizer) - updates: category search form; readme file

= 2.11.x =
* Faster environment load
* Added debugging abilities
* Addon/Theme Updates:
* [addon] [Addons Platform](http://docs.viadat.com/Addons_Platform) - update: navigation flexibility, admin display
* [addon] [Custom Field Manager](http://docs.viadat.com/Custom_Field_Manager) - enhancement/fix: prefixing when adding new custom field; default db field type filled in
* [addon] [Location Pages](http://docs.viadat.com/Location_Pages) - enhancement: new display filtering feature
* [addon] [Advanced Theme Manager](http://docs.viadat.com/Advanced_Theme_Manager) - enhancement: new display filtering feature
* [theme] Compact RIght - custom search button

= 2.10 =
* Admin area notification updates
* HTTPS support for those using secure site connections for e-commerce, etc.
* Location management interface/view update
* Minimun required version bumped up to WP v3.1 (due to 'wp_dequeue_script' function)
* Google Maps region biasing. Focuses user searches better based on country selected in MapDesigner admin section
* Very important fix to maintain data integrity for some doing dev to live server transitions (had given some sensor warnings)

= 2.9 =
* Location management interface refresh/improvement (location management bar w/forms & links -- much better)
* Admin CSS updates/improvements
* Important admin/addons notification updates

= 2.8.x =
* Location management fixes/patches
* Admin Interface updates - Manage Locations, admin menu
* File view update

= 2.7.x =
* Store Locator interface CSS update
* Admin updates - now displays version number, informational updates caching
* Important fixes / updates - JS & folders
* FAQs update - more detailed

= 2.6.x =
* Added Romanian translation (thank you [Quickloop](http://quickloop.ro)). Copy translation into `/wp-content/uploads/sl-uploads/languages/` to use
* Store Locator CSS updates
* v1.x -> v2.x transition updates/improvements

= 2.5.x =
* Added Finnish translation (Thank you [Esa Immonen](http://www.probeautyscandinavia.com)). Copy translation into `/wp-content/uploads/sl-uploads/languages/` to use
* Store Locator CSS updates/improvements

= 2.4 =
* New option in MapDesigner&trade; admin page to decide whether or not to show search results listing in addition to map icons when loading locations by default
* Updated deprecated regex functions, to faster ones
* Wrapped new strings for [translation](http://www.viadat.com/2009/02/store-locator-translation-files-wanted-you-might-just-get-something-nice-in-return)

= 2.3.x =
* New fields in MapDesigner&trade; admin page to modify the messages to website visitors when a searched location doesn't exist or there are no results after performing a search
* Further location loading enhancements
* Admin CSS Update for News & Upgrades Page
* Image updates

= 2.2 =
* Improved loading of XML of locations for those loading locations by default
* Re-introducing "News & Upgrades" page
* Added Screenshots
* Now uses more stable Google Maps API V3 

= 2.1 =
* Improved Version 1.x.x to Version 2.x.x transition -- better map loading on Store Locator page

= 2.0 =
* Fully Uses Google Maps API V3 -- both for displaying maps, geocoding locations, and performing reverse geocoding.  Transition from V2 is automatic and seamless -- no extra steps on your part.
* New default fields added: Fax & Email Address
* Streamlined interface
* Benchmarked coding improvements for fastest code performance
* Greatly reduced database usage (reduced by 81.4%)
* New pull-out Dashboard for important settings & management tasks
* New option to perform automatic search based on visitor's current location (auto-location)
* 40+ new Google maps country domains
* New address map icons
* Addons Platform: boosts your Store Locator's abilities dramatically, based off of your most-requested features & paid customizations: 11+ free G2 addons. 8 listed above in 'Description' section, 3 visible only to those with the Addons Platform installed, 1 yet-to-be-released, 4+ currently in development, and compatible with the 3 main addons prior to Store Locator 2.0 (CSV/XML Importer/Exporter, DB Importer, & Multiple Field Updater; the Point, Click, Add Mapper will be retired).  For those who purchased addons prior to 2.0, you can re-visit the email link sent to you when you purchased the addon, then re-download and install the updated version which makes it compatible with 2.0.

= 1.9.7 =
* Update for geocoding of locations for those previously having Google Geocoding API issues

= 1.9.6.x =
* Added Serbian translation (Thank you [Diana S.](http://wpcouponshop.com)). Copy translation into `/wp-content/uploads/sl-uploads/languages/` to use.
* Additional updates/fixes added

= 1.9.1 =
* Update/fix for re-geocoding (thank you Seb M.)

= 1.8 =
* Added Hindi translation (Thank you [Outshine Solutions](http://outshinesolutions.com)). Copy translation into `/wp-content/uploads/sl-uploads/languages/` to use.

= 1.5 =
* Circular loading/processing image next to search button during search to know that locator is actively performing search
* Zooms out when showing 1 location on initial load or search is zoomed in too close
* Smoother initial loading of locations by default
* Numerous CSS fixes to map interface
* Ability to determine maximum number of locations shown in search results for DB health (uses same value for number of locations loaded by default)

= 1.2.42 =
* Added Russian translation (Thank you Victor Ukhimenko)
* Added Turkish translation (Thank you [Rene](http://wpwebshop.com))
* Updated Norwegian translation to proper abbreviation (no_NO -> nb_NO). Copy translations into `/wp-content/uploads/sl-uploads/languages/` to use.
* Several CSS fixes, noticeable only for certain themes

= 1.2.41 =
* Added Portuguese translation (Thank you [Marcelo V. Araujo](http://www.mgerais.net))

= 1.2.40 =
* Added updated French translation (Thank you [Reno](http://www.creaprime.fr))
* Added Norwegian translation (Thank you [Alf Vidar Snaeland](http://www.fastfrilans.no))
* Added Simplified Chinese translation (Thank you [Laifeilim](http://www.fileem.com)). Copy translations into `/wp-content/uploads/sl-uploads/languages/` to use
* Small fix for export link path
* Small fix for navigation links when viewing locations and clicking 'Next' or 'Previous'
* Added translation wrappers to labels 'Update Central' ('News & Upgrades' page) and 'Additional Information' ('Add Locations' page)

= 1.2.39.3 =
* Added Dutch translation (Thank you [Willem-Jan](http://www.ezhome.nl/)). Place translation in `/wp-content/uploads/sl-uploads/languages/` to use.
* Added translation wrappers to text currently without them

= 1.2.39.1 =
* Updated the Czech translation (Thanks to [Josef](http://pepa.rudice.eu/))
* Small fix to make URLs of icons point to correct directory on first use

= 1.2.37.1 =
* Moved more inline styles classes & ids in 'store-locator.css' for better styling of store locator map
* Updated automatic folder creation and moving of addons, themes, languages, images, etc. in the 'uploads/sl-uploads' folder.  
* Very important -- make sure to update from version 1.2.37 to avoid any map issues

= 1.2.37 =
* Updated default database, server, & connection character set and collation.  Should complete international language support.
* A few XHTML Transitional 1.0 validation fixes
* Different url encoding for map directions
* Directory structure update: Upgrades (addons, themes), icons, languages, images, custom css moved to 'wp-content/uploads/sl-uploads' directory (moved automatically).  
* WordPress default one-click updater is now active again.  (Custom quick updater introduced in version 1.2.21 is no longer needed)
* Moved inline styles to stylesheet classes for search result text and columns, and for text in info bubble on map.  Fully customizable from 'store-locator.css' now.
* NOTE: As a result of the updated directory structure, you no longer need to worry about losing any of your customizations (CSS, addons, themes, icons, images, languages)! Place any customizations that you make into the corresponding folder in the 'wp-content/uploads/sl-uploads' directory and they will be safe during upgrades to newer, better versions (For example: if place 'store-locator.css' in the 'wp-content/uploads/sl-uploads/custom-css' folder, the plugin will use those styles instead of the styles of any 'store-locator.css' in the main `store-locator` directory.  So, when an update is performed --- you don't lose your style customizations!)

== Frequently Asked Questions ==
Make sure to check http://docs.viadat.com for the most updated information

= I'm getting 'failed to geocode' error messages! Why? =
* Have you updated your Store Locator? [It's mandatory to be using Store Locator v2.x](http://www.viadat.com/2013/10/important-update-store-locator-v2-uses-google-maps-api-v3) if you want anything to work

= Bought the CSV Importer ... =
* Nearly all your questions [have been answered here](http://docs.viadat.com/CSV_Importer_Geocoder_Exporter_XML_Exporter). If you follow these instructions & answers exactly, you should be fine

= I'm using an updated Store Locator, but still no luck geocoding when adding a location =
* [Google's Geocoding API v3 has 2,500 geocode per day limit](https://developers.google.com/maps/documentation/geocoding/index#Limits), so you may need to wait several hours, and try to add your locations again

= Is this plugin USA-only? / Does it support locations in multiple countries? =
This plugin in not USA-only, and yes, it supports locations all over the world -- as long as the Google Maps API properly supports it:

* On the MapDesigner admin page (v2.x), you can select your main country. This gives the Google Maps API a region to focus on
* [For non-USA addresses, use the 'State' field for the Country / Region](http://docs.viadat.com/Main_Page#How_do_I_enter_non-US_addresses.3F) containing the city & location you are submitting (regions, such as country, province, territory, arrondissement, protectorate, S.A.R, state, etc.). When you use any of these types of regions, the Google Maps API will still geocode (give coordinates) to them
* [It has been translated](http://docs.viadat.com/Main_Page#Special_Thanks_to_Translators) into 15+ languages -- if you would like to [provide a new or updated translation](http://www.viadat.com/2009/02/store-locator-translation-files-wanted-you-might-just-get-something-nice-in-return/), please do so

= Oh no! I'm seeing a 'Google Maps is disabled', or other Google Maps error messages on my website when viewing my Store Locator =
* Are you using Store Locator v1.9.7 or earlier?  You must update immediately

= If I need to rename my folder from the older 'wordpress-store-locator-location-finder' to 'store-locator', will I lose my locations? =
* No. You won't lose them. And make sure to re-select your home & end map markers in MapDesigner after renaming

= How can I have more than one Store Locator map on my website? =
* The [Multiple Mapper addon](http://docs.viadat.com/Multiple_Mapper)

= I would like to show different icons for different locations -- can that be done? =
* Yes, the [Categorizer addon](http://docs.viadat.com/Categorizer)

= Do I need a Google Account to use this store locator? =
Since Store Locator v2.x, which uses Google Maps API v3, it is not required like it was in Google Maps API v2. However, high-usage sites may still need an API key to monitor usage. Thus, if needed:

1. To sign up for a Google Account, visit: https://www.google.com/accounts/
2. To sign up for a Google Maps API Key, visit: https://developers.google.com/maps/documentation/javascript/tutorial#api_key

= How Do I use a Translation? =
1. Place .po & .mo translation files into the `/wp-content/uploads/sl-uploads/languages` folder, and then change the `WPLANG` constant to the corresponding language abbreviation in the `wp-config.php` file in the root wordpress directory
2. Example: to use French, make sure `lol-fr_FR.po` & `lol-fr_FR.mo` are in the `/wp-content/uploads/sl-uploads/languages` folder, then make sure to update the code in `wp-config.php` to read `define('WPLANG', 'fr_FR')`, and Voila, Il sera en francais (It will be in French).

= Which countries is this compatible with? =
This plugin is compatible with all countries that have Google Map domains. This includes:
* Algeria
* American Samoa
* Angola
* Argentina
* Australia
* Austria
* Bangladesh
* Bahrain
* Belgium
* Belize
* Benin
* Botswana
* Brazil
* Bulgaria
* Burundi
* Canada
* Central African Republic
* Chile
* China
* Congo
* Czech Republic
* Djibouti
* Dem. Republic of Congo
* Denmark
* Ethiopia
* Finland
* France
* Gabon
* Gambia
* Germany
* Ghana
* Greece
* Hong Kong
* Hungary
* India
* Indonesia
* Italy
* Japan
* Kenya
* Lesotho
* Liechtenstein
* Macedonia
* Madagascar
* Malawi
* Malaysia
* Mauritius
* Mexico
* Mozambique
* Namibia
* Netherlands
* New Zealand
* Nigeria
* Norway
* Philippines
* Poland
* Portugal
* Reunion
* Romania
* Russia
* Rwanda
* Sao Tome & Principe
* Senegal
* Seychelles
* Sierra Leone
* Singapore
* South Africa
* South Korea
* Spain
* Sri Lanka
* Sweden
* Switzerland
* Taiwan
* Tanzania
* Thailand
* Togo
* Uganda
* United Arab Emirates
* United Kingdom
* United States
* Venezuela
* Zambia
* Zimbabwe