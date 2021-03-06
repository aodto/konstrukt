<?php
// Put default application configuration in this file.
// Individual sites (servers) can override it.
date_default_timezone_set('Europe/Paris');

require_once 'phemto/phemto.php';
function create_container() {
  $injector = new Phemto();
  // put application wiring here
  $template_dir = realpath(dirname(__FILE__) . '/../templates');
  $compile_dir = $template_dir . '_c';
  $injector->whenCreating('TemplateFactory')->forVariable('template_dir')->willUse(new Value($template_dir));
  $injector->whenCreating('TemplateFactory')->forVariable('compile_dir')->willUse(new Value($compile_dir));
  return $injector;
}
