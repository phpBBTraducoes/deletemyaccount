<?php
/**
 *
 * Delete My Account. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese  translation by eunaumtenhoid [2019][ver 1.0.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017 BrokenCrust
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

	'ACL_U_DELETE_MY_ACCOUNT_POSTS' => 'Pode excluir os posts ao excluir a conta'

));
