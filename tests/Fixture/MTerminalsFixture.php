<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MTerminalsFixture
 */
class MTerminalsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '???L?[', 'autoIncrement' => true, 'precision' => null],
        'nickname' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?_????', 'precision' => null, 'fixed' => null],
        'device' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?f?o?C?XID', 'precision' => null, 'fixed' => null],
        'storeNoPonta' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => 'Ponta?X?ܔԍ?', 'precision' => null, 'fixed' => null],
        'storeNoCoGCa' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => 'CoGCa?X?ܔԍ?', 'precision' => null, 'fixed' => null],
        'address' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?Z??', 'precision' => null, 'fixed' => null],
        'tel' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?d?b?ԍ?', 'precision' => null, 'fixed' => null],
        'dhcp' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => 'DHCP???p?敪', 'precision' => null, 'fixed' => null],
        'ip' => ['type' => 'string', 'length' => 15, 'fixed' => true, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => 'IP?A?h???X', 'precision' => null],
        'mask' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?T?u?l?b?g?}?X?N', 'precision' => null, 'fixed' => null],
        'gw' => ['type' => 'string', 'length' => 15, 'fixed' => true, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?f?t?H???g?Q?[?g?E?F?C', 'precision' => null],
        'poweron' => ['type' => 'string', 'length' => 5, 'fixed' => true, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?d??????????', 'precision' => null],
        'poweroff' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '?d???Ւf????', 'precision' => null, 'fixed' => null],
        'volume' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '????', 'precision' => null, 'fixed' => null],
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
                'device' => 'Lorem ipsum dolor ',
                'storeNoPonta' => 'Lorem ipsum dolor ',
                'storeNoCoGCa' => 'Lorem ipsum dolor ',
                'address' => 'Lorem ipsum dolor sit amet',
                'tel' => 'Lorem ipsum',
                'dhcp' => 'Lorem ipsum',
                'ip' => 'Lorem ipsum d',
                'mask' => 'Lorem ipsum d',
                'gw' => 'Lorem ipsum d',
                'poweron' => 'Lor',
                'poweroff' => 'Lor',
                'volume' => 'Lor',
                'note' => 'Lorem ipsum dolor sit amet',
                'status' => 'L',
                'rgst' => 1576831724,
                'rgstId' => 1,
                'updt' => 1576831724,
                'updtId' => 1,
            ],
        ];
        parent::init();
    }
}
