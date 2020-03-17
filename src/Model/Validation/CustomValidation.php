<?php
namespace App\Model\Validation;

use Cake\Validation\Validation;

class CustomValidation extends Validation
{
    /**
     * customUpload
     *
     * @param string $data from MProgramsTable.php name
     * @return \Cake\Http\Response|null return to MProgramsTable.php name
     */
    public static function customUpload($data)
    {
        if ($data) {
            if (strlen($data) !== mb_strlen($data)) {
                $message = 'ファイル名にマルチバイト文字が含まれています';

                return $message;
            } else {
                return true;
            }
        }
    }
}
