<?php
/******************************************************************************
 Mint
  
 Copyright 2004-2011 Shaun Inman. This code cannot be redistributed without
 permission from http://www.shauninman.com/
 
 More info at: http://www.haveamint.com/
 
 ******************************************************************************
 Configuration
 ******************************************************************************/
 if (!defined('MINT')) { header('Location:/'); } // Prevent viewing this file 

$Mint = new Mint (array
(
	'server'	=> 'db01-share',
	'username'	=> 'Custom App-11098',
	'password'	=> 'dakota91',
	'database'	=> 'awardwinningfjords-com',
	'tblPrefix'	=> 'mint_'
));