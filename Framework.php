<?php
namespace SlGuo;

class Framework {
    function init() {
        $filePaths = [
            './../../../src/controller',
            './../../../src/model',
            './../../../src/validate',
        ];
        foreach ($filePaths as $filePath) {
            if (!file_exists($filePath)) {
                mkdir($filePath, 0777, true);
            }
        }
    }
}
