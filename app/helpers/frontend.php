<?php

/*
|--------------------------------------------------------------------------
| Register custom macros
|--------------------------------------------------------------------------
|
| Register custom macros for blade view.
*/

/**
 * Macro untuk membuat divider
 * @return  string html
 */
HTML::macro('divider', function() {
  return "<hr class=\"uk-article-divider\">";
});

/**
 * Macro untuk membuat tombol tambah
 * @param $path string url to route (if any)
 * @return  string generate anchor
 */
HTML::macro('buttonAdd', function($path = null) {
    if ($path) {
      $url = $path;
    } else {
      $url = explode('.', Route::currentRouteName());
      array_pop($url);
      array_push($url, 'create');
      $url = implode('.', $url);
      $url = route($url);
    }

    return '<a class="btn btn-block btn-primary" href="'.$url.'">Tambah</a>';
});

/**
 * Macro for UIKIT label
 * @return string html
 */
Form::macro('labelUI', function($name, $placeholder) {
   return Form::label($name, $placeholder);
});

Form::macro('labelUIHorizontal', function($name, $placeholder) {
   return Form::label($name,null,array('class' => 'col-sm-2 control-label', 'placeholder'=>$placeholder));
});
/**
 * Macro for UIKIT text
 * @return string html
 */
Form::macro('textUI', function($name, $placeholder = null, $icon = null) {
  $html = '';
  $html .= "<div class=\"input-group\"><div class=\"input-group-addon\">
            <i class=\"$icon\"></i></div>";
  $html .= Form::text($name, null, array('class' => 'form-control','placeholder'=>$placeholder));
  $html .= "</div>";

  return $html;
});

Form::macro('textUIDisabled', function($name, $placeholder = null, $icon = null) {
  $html = '';
  $html .= "<div class=\"input-group\"><div class=\"input-group-addon\">
            <i class=\"$icon\"></i></div>";
  $html .= Form::text($name, $placeholder, array('class' => 'form-control','placeholder'=>$placeholder, 'disabled'=>''));
  $html .= "</div>";

  return $html;
});

Form::macro('submitUk', function($title) {
  return "<input type=\"submit\" value=\"$title\" class=\"btn btn-block btn-primary\">";
});

Form::macro('submitUI', function($title) {
  return "<input type=\"submit\" value=\"$title\" class=\"btn btn-block btn-primary\">";
});

/**
 * Macro untuk navigasi yang aktif sesuai URL di address bar
 * @return  string html
 */
HTML::macro('smartNav', function($url, $title) {
  $class = '';
  if ($url == Request::url()) {
    $class = 'active';
  }
  return "<li class=\"$class\"><a href=\"$url\">$title</a></li>";
});

/**
 * Macro for UIKIT text
 * @return string html
 */
Form::macro('passwordUI', function($name, $placeholder = null, $icon = null) {
  $html = '';
  $html .= "<div class=\"input-group\"><div class=\"input-group-addon\">
            <i class=\"$icon\"></i></div>";
  $html .= Form::password($name, array('class' => 'form-control','placeholder'=>$placeholder));
  $html .= "</div>";

  return $html;
});