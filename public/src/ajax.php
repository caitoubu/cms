<?php
namespace vestibulum;

isset($this) && $this instanceof Vestibulum or die('Sorry can be executed only from Vestibulum');

// check AJAX request
Request::isAjax() or json(['message' => 'Not AJAX request, but nice try :-)'], 44);

// response all AJAX requests
json(['message' => 'Well done! It\'s AJAX request']);