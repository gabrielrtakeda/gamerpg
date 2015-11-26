<!DOCTYPE html>
<html ng-app="app">
<head>
  {% block stylesheet %}
    {[{stylesheet_link('node_modules/bootstrap/dist/css/bootstrap.min.css')}]}
    {[{frontend.renderStylesheetTags()}]}
  {% endblock %}
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Phalcon PHP Framework</title>
</head>

<body>
  <article>
    {[{content()}]}
  </article>

  {% block scripts %}
    {[{javascript_include('node_modules/jquery/dist/jquery.min.js')}]}
    {[{javascript_include('node_modules/angular/angular.min.js')}]}
    {[{javascript_include('js/app.js')}]}
    {[{frontend.renderScriptTags()}]}
  {% endblock %}
</body>
</html>
