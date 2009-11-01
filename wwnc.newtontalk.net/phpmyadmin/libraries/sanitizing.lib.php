<?php
/* $Id: sanitizing.lib.php,v 2.1 2005/08/22 21:00:52 nijel Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:

/**
 * Sanitizes $message, taking into account our special codes
 * for formatting
 *
 * @param   string   the message
 *
 * @return  string   the sanitized message
 *
 * @access  public
 */
function PMA_sanitize($message)
{
    $replace_pairs = array(
        '<'     => '&lt;',
        '>'     => '&gt;',
        '[i]'   => '<i>',
        '[/i]'  => '</i>',
        '[b]'   => '<b>',
        '[/b]'  => '</b>',
        '[tt]'   => '<tt>',
        '[/tt]'  => '</tt>',
        '[br]'  => '<br />',
        '[/a]'  => '</a>',
    );
    return preg_replace('/\[a@([^"@]*)@([^]"]*)\]/', '<a href="\1" target="\2">', strtr($message, $replace_pairs));
}

?>
