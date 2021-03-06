<?php

/**
 * Smarty plugin "link"
 * -------------------------------------------------------------
 * File:    block.link.php
 * Type:    block
 * Name:    Typolink
 * Version: 2.0
 * Author:    Simon Tuck <stu@rtp.ch>, Rueegg Tuck Partner GmbH
 * Purpose: Return a linked text using the typolink function
 * Example:    {link setup="lib.link" parameter="10"}click here{/link}
 * Note:    link is an alias for typolink
 * Note:    You can add any property valid for the TypoScript typolink object, e.g. useCacheHash="1"
 *            For example, parameter="1" or useCacheHash="1" or addQueryString.exclude="id,L" etc.
 *            For details of available parameters check the typolink documentation at:
 *             http://typo3.org/documentation/document-library/references/doc_core_tsref/4.1.0/view/5/8/
 * Note:    The parameter "setup" will reference the global template scope, so you can pass a typoscript
 *            object which defines your link configuratiopn.
 *            For example, if your TypoScript setup contains an element lib.myLink, adding
 *            setup="lib.myLInk" will use the TypoScript configuration from lib.myLink to build the link
 * Note:    Any parameters inside the typolink tag will override the corresponding parameters in a TypoScript
 *            object. For example, {typolink setup="lib.link" parameter="10"}click here{/typolink} will use
 *            the TypoScript configuration from lib.link, but set the property 'parameter' to 10
 * Note:    If you haven't defined a title for the link the content between the tags will automatically be used
 *             for the link title attribute.
 * -------------------------------------------------------------
 *
 * @param $params
 * @param $content
 * @param Smarty_Internal_Template $template
 * @param $repeat
 * @return mixed|string
 */
//@codingStandardsIgnoreStart
function smarty_block_link($params, $content, Smarty_Internal_Template $template, &$repeat)
{
//@codingStandardsIgnoreEnd
    Tx_Smarty_Service_Smarty::loadPlugin($template, 'smarty_block_typolink');
    return smarty_block_typolink($params, $content, $template, $repeat);
}
