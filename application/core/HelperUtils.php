<?php

class HelperUtils
{

  public static function getControllerName()
  {
    if (Request::get('url')) {

        // split URL
        $url = trim(Request::get('url'), '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
      }

      // put URL parts into according properties
      return isset($url[0]) ? $url[0] : null;

  }
}
