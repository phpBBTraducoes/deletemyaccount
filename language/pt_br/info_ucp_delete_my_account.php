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

	'DELETE_MY_ACCOUNT' => 'Excluir minha conta',
	'DELETE_YOUR_ACCOUNT' => 'Excluir sua conta',
	'DELETE_MY_ACCOUNT_TEXT' => 'Você pode usar este formulário para excluir sua própria conta. Depois de concluído, todos os seus dados pessoais e particulares serão removidos deste site e você não poderá mais fazer login.',
	'REALY_DELETE' => 'Eu realmente desejo excluir minha conta.',
	'UNDERSTAND_DELETE' => 'Eu entendo que esta ação não pode ser desfeita.',
	'DELETE_MY_POSTS' => 'Também exclua meus posts (os posts se tornarão posts de visitantes se desmarcadas).',
	'ENTER_PASSWORD' => 'Coloque sua senha',
	'ENTER_PASSWORD_HERE' => 'digite sua senha aqui ...',
	'DELETED_USER' => 'Usuário excluido %s',
	'DELETE_FINAL' => 'Confirmação final',
	'DELETE_FINAL_CONFIRM' => '<p>Obrigado por ser um membro deste site. Lamentamos que você vá embora.</p><p>Sua solicitação foi validada. Esta é a confirmação final. Deseja excluir permanentemente sua conta?</p>',

	'LOG_USER_DELETED' => 'O usuário %s (ID %s) excluiu sua própria conta.',
	'LOG_POST_REMOVED' => 'Seus posts foram removidos.',
	'LOG_POST_RETAINED' => 'Seus posts foram mantidos.',
	'LOG_NO_POSTS' => 'Eles não tinham posts.',

	'REALLY_ERROR' => 'Você deve confirmar que realmente deseja excluir sua conta.',
	'UNDERSTAND_ERROR' => 'Você deve confirmar que entende que esse processo não pode ser desfeito.',
	'PASSWORD_ERROR' => 'A senha que você digitou não estava correta.',
	'FOUNDER_ERROR' => 'Os fundadores não podem usar o processo de auto-exclusão.',
	'BAD_FORM_KEY_ERROR' => 'O envio do formulário não pôde ser validado. Por favor, envie sua solicitação novamente.',
	'GOODBYE_ERROR' => 'Sua conta foi excluida.'

));
