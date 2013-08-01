<?php
lmb_require('limb/web_app/src/controller/lmbController.class.php');
lmb_require('src/model/News.class.php');


class NewsController extends lmbController {
  function doDisplay() {
    $this->news = lmbActiveRecord::find('News');
  }
}
?>
