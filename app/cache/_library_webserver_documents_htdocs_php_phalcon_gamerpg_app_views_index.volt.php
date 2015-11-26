<!DOCTYPE html>
<html ng-app="app">
<head>
  
    <?php echo $this->tag->stylesheetLink('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>
    <?php echo $this->frontend->renderStylesheetTags(); ?>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Phalcon PHP Framework</title>
</head>

<body>
  <article>
    <?php echo $this->getContent(); ?>
  </article>

  
    <?php echo $this->tag->javascriptInclude('node_modules/jquery/dist/jquery.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('node_modules/angular/angular.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/app.js'); ?>
    <?php echo $this->frontend->renderScriptTags(); ?>
  
</body>
</html>
