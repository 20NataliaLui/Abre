<?php

	/*
	* Copyright (C) 2016-2018 Abre.io Inc.
	*
	* This program is free software: you can redistribute it and/or modify
    * it under the terms of the Affero General Public License version 3
    * as published by the Free Software Foundation.
	*
    * This program is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    * GNU Affero General Public License for more details.
	*
    * You should have received a copy of the Affero General Public License
    * version 3 along with this program.  If not, see https://www.gnu.org/licenses/agpl-3.0.en.html.
    */

	//Required configuration files
	require_once(dirname(__FILE__) . '/../../core/abre_verification.php');
	require(dirname(__FILE__) . '/../../core/abre_dbconnect.php');
	require_once(dirname(__FILE__) . '/../../core/abre_functions.php');

	//Check for installation
	if(admin()){ require('installer.php'); }

	$pageview=1;
	$drawerhidden=0;
	$pageorder=2;
	$pagetitle="Books";
	$description="An ePub reader for digital books.";
	$version="2.2.2";
	$repo=NULL;
	$pageicon="local_library";
	$pagepath="books";

	require_once('permissions.php');

	echo "<link rel='stylesheet' type='text/css' href='/modules/".basename(__DIR__)."/css/main_0.0.9.css'>";

?>