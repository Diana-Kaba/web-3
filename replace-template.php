<?php

$template = "<p>Права пользователей:</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul><p>Права пользователей:</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul>";
echo preg_replace('/<li>(\w+)<\/li>/', '<a href="http://www.php.kh.ua/script.php?role=$1">$1</a></li>', $template);