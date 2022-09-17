add_filter('gettext', 'change_vendor_string');
function change_vendor_string($translated) {
    $translated = str_ireplace('Old String', 'New String here', $translated);
    return $translated;
}
