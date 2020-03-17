<?php

namespace App\Auth;

use Cake\Auth\AbstractPasswordHasher;

/**
 * パスワードハッシュクラス
 *
 * @package App\Auth
 */
class NonePasswordHasher extends AbstractPasswordHasher
{
    protected $_config = ['hashType' => null];

    /**
     * パスワードハッシュを生成する
     *
     * @param string $password ハッシュするプレーンテキストパスワード
     * @return false|string パスワードハッシュまたは失敗した場合はfalse
     */
    public function hash($password)
    {
        return $password;
    }

    /**
     * ハッシュ値のチェック
     * ユーザーが指定したパスワードのハッシュを生成し、既存のハッシュと照合する
     *
     * @param string $password ハッシュするプレーンテキストパスワード（入力値）
     * @param string $hashedPassword ハッシュ化されたパスワード（DB登録値）
     * @return bool ハッシュが一致する場合はtrue、そうでない場合はfalse
     */
    public function check($password, $hashedPassword)
    {
        return $hashedPassword === $password;
    }
}
