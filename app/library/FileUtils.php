<?php
/**
 * Created by PhpStorm.
 * User: samlv
 * Date: 2016/3/15
 * Time: 17:09
 */

final class FileUtils
{

    public static function deleteDirectoryContents($dir)
    {
        if (!is_string($dir)) {
            throw new InvalidArgumentException('$directoryPath is not a string');
        }

        $paths = scandir($dir);
        if ($paths === false) {
            throw new Exception("cannot list directory '{$dir}'");
        }

        $dh=opendir($dir);
        while ($file=readdir($dh)) {
            if($file!="." && $file!="..") {
                $fullpath=$dir."/".$file;
                if(!is_dir($fullpath)) {
                    unlink($fullpath);
                } else {
                    rmdir($fullpath);
                }
            }
        }

        closedir($dh);
        //删除当前文件夹：
        if(rmdir($dir)) {
            return true;
        } else {
            return false;
        }
    }


    public static function delete($path)
    {
        if (!is_string($path) || trim($path) === '') {
            throw new InvalidArgumentException($path.' is not a string or is whitespace');
        }

        if (!file_exists($path)) {
            return;
        }

        try {
            if (unlink($path) === false) {
                throw new Exception("unlink returned false for $path");
            }
        } catch (Exception $e) {
            if (file_exists($path)) {
                throw $e;
            }
        }
    }

    /**
     * 将目录$dir中所有文件替换为$contentFile，本身文件名不变
     * @param $dir
     * @param $contentFile
     */
    public static function replaceTo($dir,$contentFile){
        $dh = opendir($dir);
        chdir($dir);
        while(($file = readdir($dh))){
            if($file === '.' || $file === '..' || $contentFile === $file) continue;

            unlink($file);
            copy($contentFile,strtolower($file));
        }
        closedir($dh);
    }

    public static function emptyPath($dirName){
        if(file_exists($dirName) && $handle=opendir($dirName)){
            while(false!==($item = readdir($handle))){
                if($item!= "." && $item != ".."){
                    if(file_exists($dirName."/".$item) && is_dir($dirName."/".$item)){
                        self::emptyPath($dirName."/".$item);
                        @rmdir($dirName.'/'.$item);
                    }else{
                        if(unlink($dirName."/".$item))return true;
                    }
                }
            }
            closedir( $handle);
        }
    }
}

//FileUtils::emptyPath("E:/www/dbuilder/app/storage/cache");