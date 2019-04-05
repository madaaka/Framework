<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FirmaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FirmaTable Test Case
 */
class FirmaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FirmaTable
     */
    public $Firma;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Firma'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Firma') ? [] : ['className' => FirmaTable::class];
        $this->Firma = TableRegistry::getTableLocator()->get('Firma', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Firma);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
