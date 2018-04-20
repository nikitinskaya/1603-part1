<?php
$ig = new class {
  function getDate() {
    date_default_timezone_set('Europe/Moscow');
    return date("d/m/Y h:i\n");
  }
};

echo '<h1>'.($ig -> getDate()).'</h1>';

if (isset($_GET['print'])) {
    header('Content-type: text/plain; charset=utf-8');
    echo file_get_contents(basename(__FILE__));
  };

if (isset($_GET['public'])) {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,POST,DELETE');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers');
  };

if (isset($_GET['info'])) {
    phpinfo();
  };

if (isset($_GET['author'])) {
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: GET,POST,DELETE');
  header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers');
  echo '<h4 id="author" title="GossJS">Вера Никитинская</h4>';
}
?>

