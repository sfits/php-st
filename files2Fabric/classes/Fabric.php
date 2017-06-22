<?php
class Factory
{
	static function writeTo()
	{
		$file = file_get_contents('config.txt');
        $filename = [];
        $fileConfig = explode(':', $file);
        $filename = $fileConfig[1];
        $filanameTo = explode('.', $filename);
        $sFilename = $filanameTo[0];

        return new $sFilename;
	}
}