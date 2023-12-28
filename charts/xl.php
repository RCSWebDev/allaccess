<!DOCTYPE HTML>
<html>
<head>
	<title>Upload Excel and Convert to JSON</title>
</head>
<body>
	<h2>Upload an Excel file and convert to JSON</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="excel_file">
		<input type="submit" name="submit" value="Upload and Convert">
	</form>

	<?php
	if(isset($_POST['submit'])){
		require 'vendor/autoload.php'; // Include PhpSpreadsheet library

		$excel_file = $_FILES['excel_file']['tmp_name'];
	   
		// Read your Excel workbook
		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($excel_file);

		// Get the first worksheet
		$sheet = $spreadsheet->getSheet(0);

		// Check if the first row contains "Current Chart" or "dance"
		$firstRowValue = $sheet->getCell('A1')->getValue();
		$startRow = 1;
		$json_file_name = 'excel_data.json';  // Default file name

		if (stripos($firstRowValue, 'current chart') !== false) {
			$startRow = 2;
			$json_file_name = 'currents.json';
		} elseif (stripos($firstRowValue, 'dance') !== false) {
			$startRow = 2;
			$json_file_name = 'dance.json';
		}

		// Extract specific columns and round Impressions to the nearest whole number
		$data = [];
		$columns = ['A', 'B', 'C', 'D', 'E', 'F', 'G']; // Columns for Rank, Title, Artist, Spins Last Range, Spins This Range, Locations, and Impressions
		$rowIterator = $sheet->getRowIterator($startRow);
		while($rowIterator->valid()) {
			$rowData = [];
			foreach ($columns as $column) {
				$cellValue = $sheet->getCell($column . $rowIterator->current()->getRowIndex())->getValue();
				// Round the 'Impressions' column to the nearest whole number
				if ($column === 'G' && is_numeric($cellValue)) {
					$cellValue = round($cellValue);
				}
				$rowData[] = $cellValue;
			}
			$data[] = $rowData;
			$rowIterator->next();
		}

		// Convert the array to a JSON string and save the JSON to a file
		$json = json_encode($data);
		file_put_contents($json_file_name, $json);

		echo "Excel file has been successfully converted to JSON. <a href='$json_file_name' download>Download $json_file_name</a>";
	}
	?>

</body>
</html>