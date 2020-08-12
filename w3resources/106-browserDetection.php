<?php
$break = "<br/>";
echo "I'm appearing in a browser.";
echo $break;
/**
 * Get the browser name.
 * @see http://stackoverflow.com/a/20934782/4255615
 * @return string Browser name
 */
function browser_name()
{

    $ua = $_SERVER['HTTP_USER_AGENT'];

    if (
        strpos(strtolower($ua), 'safari/') &&
        strpos(strtolower($ua), 'opr/')
    ) {
        // Opera
        $res = 'Opera';
    } elseif (
        strpos(strtolower($ua), 'safari/') &&
        strpos(strtolower($ua), 'chrome/')
    ) {
        // Chrome
        $res = 'Chrome';
    } elseif (
        strpos(strtolower($ua), 'msie') ||
        strpos(strtolower($ua), 'trident/')
    ) {
        // Internet Explorer
        $res = 'Internet Explorer';
    } elseif (strpos(strtolower($ua), 'firefox/')) {
        // Firefox
        $res = 'Firefox';
    } elseif (
        strpos(strtolower($ua), 'safari/') &&
        (strpos(strtolower($ua), 'opr/') === false) &&
        (strpos(strtolower($ua), 'chrome/') === false)
    ) {
        // Safari
        $res = 'Safari';
    } else {
        // Out of data
        $res = false;
    }

    return $res;
}

echo browser_name();
echo $break;
echo "Using another solution, I can say: " . $_SERVER['HTTP_USER_AGENT'];
?>