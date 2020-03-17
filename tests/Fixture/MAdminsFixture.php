<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MAdminsFixture
 */
class MAdminsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '???L?[', 'autoIncrement' => true, 'precision' => null],
        'nickname' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?_????', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '???[??', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?p?X???[?h', 'precision' => null, 'fixed' => null],
        'authority' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '????', 'precision' => null, 'autoIncrement' => null],
        'note' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '???l', 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'null' => false, 'default' => '0', 'collate' => 'utf8_general_ci', 'comment' => '?X?e?[?^?X', 'precision' => null],
        'rgst' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => '?o?^????', 'precision' => null],
        'rgstId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '?o?^?S????', 'precision' => null, 'autoIncrement' => null],
        'updt' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => '?ŏI?X?V????', 'precision' => null],
        'updtId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '?ŏI?X?V??', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'nickname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'authority' => 1,
                'note' => 'Lorem ipsum dolor sit amet',
                'status' => 'L',
                'rgst' => 1576216654,
                'rgstId' => 1,
                'updt' => 1576216654,
                'updtId' => 1,
            ],
        ];
        parent::init();
    }
}
