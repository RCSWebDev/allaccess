<!DOCTYPE HTML>
<html>
<head>
	<title>Upload a Chart XL file and Convert to JSON</title>
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

		// Check if the first row contains "Current Chart"
		$firstRowValue = $sheet->getCell('A1')->getValue();
		$startRow = ($firstRowValue == "Current Chart") ? 2 : 1;

		// Extract specific columns
		$data = [];
		$columns = ['A', 'B', 'C', 'D', 'E', 'F', 'G']; // Columns for Rank, Title, Artist, Spins Last Range, Spins This Range, Locations, and Impressions
		$rowIterator = $sheet->getRowIterator($startRow);
		while($rowIterator->valid()) {
			$rowData = [];
			foreach ($columns as $column) {
				$cellValue = $sheet->getCell($column . $rowIterator->current()->getRowIndex())->getValue();
				$rowData[] = $cellValue;
			}
			$data[] = $rowData;
			$rowIterator->next();
		}

		// Convert the array to a JSON string
		$json = json_encode($data);

		// Determine the JSON file name and save the JSON to a file
		$json_file_name = ($firstRowValue == "Current Chart") ? 'currents.json' : 'excel_data.json';
		file_put_contents($json_file_name, $json);

		echo "Excel file has been successfully converted to JSON. <a href='$json_file_name' download>Download JSON</a>";
	}
	?>

</body>
</html>