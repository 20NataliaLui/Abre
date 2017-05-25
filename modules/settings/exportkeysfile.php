<?php

	/*
	* Copyright 2015 Hamilton City School District
	*
	* This program is free software: you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation, either version 3 of the License, or
    * (at your option) any later version.
	*
    * This program is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    * GNU General Public License for more details.
	*
    * You should have received a copy of the GNU General Public License
    * along with this program.  If not, see <http://www.gnu.org/licenses/>.
    */

	//Required configuration files
	require(dirname(__FILE__) . '/../../configuration.php');
	require_once(dirname(__FILE__) . '/../../core/abre_verification.php');
	require_once('permissions.php');
	require_once(dirname(__FILE__) . '/../../core/abre_functions.php');

	if(superadmin())
	{

		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=tokendata.csv');

		$output = fopen('php://output', 'w');

		fputcsv($output, array('Student ID','First Name','Last Name','Token'));
		include "../../core/abre_dbconnect.php";
		$rows = mysqli_query($db, 'SELECT * FROM student_tokens');

		while ($row = mysqli_fetch_assoc($rows)) {
			$sql = mysqli_query($db, "SELECT * FROM Abre_Students WHERE StudentId='".$row['studentId']."'");
			$row2 = mysqli_fetch_assoc($sql);

			$studentid=htmlspecialchars($row["studentId"], ENT_QUOTES);
			$firstname=htmlspecialchars($row2["FirstName"], ENT_QUOTES);
			$lastname=htmlspecialchars($row2["LastName"], ENT_QUOTES);
			$token=htmlspecialchars($row["token"], ENT_QUOTES);
			$token=decrypt($token, "");

			$data = [$studentid,$firstname,$lastname,$token];
			fputcsv($output, $data);
		}
		fclose($output);
		mysqli_close($db);
		exit();

	}

?>
