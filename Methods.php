<?php
class Methods
{
	public function read()
	{
		$file_data = '';
		$file = fopen("data.txt", "r");
		while (!feof($file)) {
			$line = fgets($file);
			$file_data .= $line;
		}
		fclose($file);
		return $file_data;
	}

	public function	update($text)
	{
		$file = fopen("data.txt", "w");
		fwrite($file, $text);
		fclose($file);
	}

	public function append($text)
	{
		$file = fopen("data.txt", "a");
		fwrite($file, $text);
		fclose($file);
	}

	public function delete()
	{
		$file = fopen("data.txt", "w");
		fwrite($file, "");
		fclose($file);
	}
}
