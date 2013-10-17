<?PHP
/*
Template for new stuff
  "" => array(
    array("","","","","")
  )
*/
$title = "myStart";
$description = "myStart is a self-hosted, customizable \"start\" page with a browser plugin.";
$iconurl = "";
$myStarturl = "https://tyler.li/start/index.php";
$myStartdir = "https://tyler.li/start/";
$categoryNames = array("Favorites","General","Social","Media","Maps","Shopping");

$links = array(
  array("Reddit","http://reddit.com/"),
  array("Hacker News","https://news.ycombinator.com/"),
  array("Tumblr","http://www.tumblr.com/dashboard"),
  array("XDA (Droid DNA)","http://forum.xda-developers.com/forumdisplay.php?f=1962"),
  array("xkcd","http://xkcd.com/")
);

$categories = array(
  "Favorites" => array(
    array("DuckDuckGo","Privacy-oriented, feature rich search that pulls information from many sources.","GET","https://duckduckgo.com/","q"),
    array("Ixquick","Ixquick returns the top ten results from multiple search engines.","GET","https://www.ixquick.com/do/search","query"),
    array("Google","Google Search is the most-used search engine on the World Wide Web.","GET","https://encrypted.google.com/search","q"),
    array("YouTube","","GET","https://www.youtube.com/results","search_query"),
  ),
  "General" => array(
    array("Google","Google Search is the most-used search engine on the World Wide Web.","GET","https://encrypted.google.com/search","q"),
    array("DuckDuckGo","Privacy-oriented, feature rich search that pulls information from many sources.","GET","https://duckduckgo.com/","q"),
    array("Startpage","Startpage returns Google results for maximum privacy. Ran by Ixquick.","GET","https://startpage.com/do/search","query"),
    array("Ixquick","Ixquick returns the top ten results from multiple search engines.","GET","https://www.ixquick.com/do/search","query"),
    array("Yandex","A Russian Internet company which operates the largest search engine in Russia with about 60% market share in that country.","GET","http://www.yandex.com/yandsearch","text")
  ),
  "Social" => array(
    array("","","","","")
  ),
  "Media" => array(
    array("YouTube","","GET","https://www.youtube.com/results","search_query"),
    array("Vimeo","","GET","http://vimeo.com/search","q"),
    array("SoundCloud","","GET","https://soundcloud.com/search","q")
  ),
  "Maps" => array(
    array("Google Maps","","GET","https://maps.google.com/maps","q"),
    array("OpenStreetMap","","GET","http://nominatim.openstreetmap.org/search.php","q")
  ),
  "Shopping" => array(
    array("Amazon","","GET","http://www.amazon.com/s/","field-keywords"),
    array("eBay","","GET","http://www.ebay.com/sch/i.html","_nkw")
  )
);
?>