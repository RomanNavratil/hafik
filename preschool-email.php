<?php

$email = '';

$email .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'.
'<html xmlns="http://www.w3.org/1999/xhtml">'.
'<head>'.
	'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.
	'<meta name="viewport" content="width=device-width, initial-scale=1.0"/>'.
	'<title>Notifications from Arctrack</title>'.
	'<style type="text/css">'.
		'#outlook a {padding:0;}'.
		'body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}'.
		'.ExternalClass {width:100%;}'.
		'.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}'.
		'#backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}'.

		'@media only screen and (max-device-width: 480px) {'.
		'a[href^="tel"], a[href^="sms"] {'.
		'text-decoration: none;'.
		'color: #ba68c8;'.
		'pointer-events: none;'.
		'cursor: default;'.
		'}'.

		'.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {'.
		'text-decoration: default;'.
		'color: #ba68c8 !important;'.
		'pointer-events: auto;'.
		'cursor: default;'.
		'}'.
		'}'.

		'@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {'.
		'a[href^="tel"], a[href^="sms"] {'.
		'text-decoration: none;'.
		'color: #ba68c8; /* or whatever your want */'.
		'pointer-events: none;'.
		'cursor: default;'.
		'}'.

		'.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {'.
		'text-decoration: default;'.
		'color: #ba68c8 !important;'.
		'pointer-events: auto;'.
		'cursor: default;'.
		'}'.
		'}'.
		'</style>'.
	'</head>'.
'<body>';
$email .= '<table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="width: 800px">';
$email .=	'<tr>';
$email .=		'<td>';
$email .=			'<p>';
$email .=				'<b>Přihláška pro přijetí dítěte na hlídání v centru Hafík - hlídání dětí s.r.o.</b><br>';
$email .=			'Se sídlem Míru 426, 280 02 Kolín, IČ <strong>04498518</strong> provozovna: Štefánikova 102/7, Kutná Hora';
$email .=			'</p>';
$email .= '<p>Zákonný zástupce dítěte:</p>';
$email .=			'<table>';
$email .=				'<tr>';
$email .=					'<td>Jméno a příjmení: '. $cleanedFields['guardianName'] .' '. $cleanedFields['guardianSurname'] .'</td>';
$email .=					'<td>, č. OP '. $cleanedFields['guardianIDCard'] .'</td>';
$email .=					'<td>, r. č. '. $cleanedFields['guardianID'] .'</td>';
$email .=				'</tr>';
$email .=				'<tr>';
$email .=					'<td colspan="3">Bydliště: '. $cleanedFields['guardianAddress'] .', ' . $cleanedFields['guardianCity'] .' '. $cleanedFields['guardianZIP'] .'</td>';
$email .=				'</tr>';
$email .=				'<tr>';
$email .=					'<td>Kontakt telefon: '. $cleanedFields['guardianPhone'] .'</td>';
$email .=					'<td colspan="2">E-mail: '. $cleanedFields['guardianEmail'] .'</td>';
$email .=				'</tr>';
$email .=				'</table>';
$email .=			'<p>přihlašuje <strong>dítě</strong>:</p>';
$email .=			'<table>';
$email .=			'<tr>';
$email .=					'<td colspan="2">Jméno a příjmení: '. $cleanedFields['childName'] .' '. $cleanedFields['childSurname'] .'</td>';
$email .=				'</tr>';
$email .=				'<tr>';
$email .=					'<td>Datum narození: '. $cleanedFields['childBirth'] .'</td>';
$email .=					'<td>Rodné číslo: '. $cleanedFields['childID'] .'</td>';
$email .=				'</tr>';
$email .=				'<tr>';
$email .=					'<td colspan="2">Bydliště: '. $cleanedFields['childAddress'] .', '. $cleanedFields['childCity'] .' '. $cleanedFields['childZIP'] .'</td>';
$email .=				'</tr>';
$email .=				'<tr>';
$email .=					'<td colspan="2">Zdravotní pojišťovna: '. $cleanedFields['childHealthInsurance'] .'</td>';
$email .=				'</tr>';
$email .=				'<tr><td colspan="2">Zdravotní stav (v případě alergie, zdravotního omezení aj., prosím specifikujte):</td></tr>';
$email .=				'<tr><td colspan="2">'. $cleanedFields['childImportantInfo'] .'</td></tr>';
$email .=				'</table>';
$email .=			'<p>';
$email .=				'na hlídání v centru Hafík – hlídání dětí s.r.o., se sídlem  Míru 426, 280 02 Kolín, IČ <strong>04498518</strong>, v provozovně Štefánikova 102/7, 284 01 Kutná Hora (dále také jen „Centrum Hafík“)';
$email .=			'</p>';
$email .=			'<p>';
$email .=				'<b>Osoby oprávněné k vyzvednutí dítěte</b>:';
$email .=			'</p>';
$email .=			'<table>';
$email .=				'<tr>
							<th>Jméno a příjmení</th>
							<th>Telefon</th>
						</tr>';
						foreach ($cleanedFields['otherGuardians'] as $otherGuardian) {
$email .=				'<tr>';
$email .=					'<td>'. $otherGuardian['name'] .' '. $otherGuardian['surname'] .'</td>';
$email .=					'<td>'. $otherGuardian['phone'] .'</td>';
$email .=				'<tr>';
						}
$email .=			'</table>';
$email .=			'<p>';
$email .=				'<ul>';
$email .=				'<li>Prohlašuji, že jsem se seznámil/a s Ceníkem za poskytované služby a Provozním řádem Centra Hafík – hlídání dětí s.r.o., ve kterém jsou uvedeny veškeré podrobnosti týkající se hlídací služby, a tento se zavazuji respektovat.</li>';
$email .=				'<li>Prohlašuji, že všechny mnou uvedené údaje jsou pravdivé a správné. </li>';
$email .=				'<li>Prohlašuji, že souhlasím s  monitorováním dítěte kdykoliv po předání do Centra Hafík, jeho focením a pořízením videa a s následným umístěním videa či fotografie dítěte na webové stránky Hafíka. </li>';
$email .=				'<li>Prohlašuji, že souhlasím se zpracováním osobních údajů svých a svého dítěte, pro evidenční potřeby centra Hafík</li>';
						if ($cleanedFields['vaccinationStatement'] == 'on') {
$email .=				'<li>Prohlašuji, že dítě <b>bylo/<s>nebylo</s></b>   očkováno proti infekčním nemocem (tedy absolvovalo povinná očkování), zejména dle vyhlášky Ministerstva zdravotnictví MZ č.537/2006 Sb. </li>';
						} else {
$email .=				'<li>Prohlašuji, že dítě <b><s>bylo</s>/nebylo</b>   očkováno proti infekčním nemocem (tedy absolvovalo povinná očkování), zejména dle vyhlášky Ministerstva zdravotnictví MZ č.537/2006 Sb. </li>';
						}
$email .=				'</ul>';
$email .=			'</p>';
$email .=			'<p>';
$email .=				'V Kutné Hoře dne ' . date('d.m.Y');
$email .=				'</p>';
$email .=	'<p>Podpis zákonného zástupce:</p>';
$email .=	'<p>Dítě bylo oprávněnou osobou v pořádku převzato dne ................... v ........... hod</p>';
$email .=	'<p>Podpis oprávněné osoby:</p>';
$email .=	'</td>';
$email .=	'</tr>';
$email .= '</table>';
$email .= '</body>';
$email .= '</html>';

return $email;