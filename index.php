<?PHP
include 'config.php';
if (isset($_GET["plugin"])) {
  echo '<?PHPxml version="1.0" encoding="UTF-8"?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"
                       xmlns:moz="http://www.mozilla.org/2006/browser/search/">
  <ShortName>'.$title.'</ShortName>
  <Description>'.$description.'</Description>
  <InputEncoding>UTF-8</InputEncoding>
  <Image width="16" height="16" type="image/x-icon">'.$iconurl.'</Image>
  <Url type="text/html" method="GET" template="'.$myStarturl.'?q={searchTerms}">
  </Url>
  <moz:SearchForm>'.$myStarturl.'</moz:SearchForm>
</OpenSearchDescription>';
  die;
}

if (isset($_GET["c"])) {
  $category = $_GET["c"];
} else {
  $category = $categoryNames[0];
}

if (isset($_GET["q"])) {
  $search = $_GET["q"];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?PHP echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="search" type="application/opensearchdescription+xml" title="<?PHP echo $title.' - '.$description; ?>" href="<?PHP echo $myStarturl; ?>?plugin=1">
    <link href="myStart-bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
    .spacer {
      margin-top: 70px;
    }
    .spacer2 {
      margin-top:20px;
    }
    </style>
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?PHP echo $myStarturl; ?>"><?PHP echo $title; ?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?PHP 
            foreach ($categoryNames as $catNames) {
              echo '<li ';
              if ($catNames == $category) {
                echo ' class="active"';
              }
              echo '><a href="'.$myStarturl.'?c='.$catNames;
              if (isset($search)) {
                echo'&q='.$search;
              }
              echo '">'.$catNames.'</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="spacer"></div>
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Quick Links</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <?PHP foreach ($links as $link) {
              echo '<li><a href="'.$link[1].'">'.$link[0].'</a></li>'."\n";
            }
            ?>
          </ul>
        </div>
      </nav>
      <div class="spacer2"></div>
<?PHP
foreach ($categories[$category] as $engines) {
  echo '      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">'.$engines[0].'</h3>
          <small>'.$engines[1].'</small>
        </div>
        <div class="panel-body">
          <form class="form-search" method="'.$engines[2].'" action="'.$engines[3].'">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search..."';
  if (isset($search)){
    echo ' value="'.$search.'" ';
  }
  echo ' name="'.$engines[4].'">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Go!</button>
              </span>
            </div>
          </form>
        </div>
      </div>';
}
?>
    </div>
	<script src="myStart-bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  </body>
</html>