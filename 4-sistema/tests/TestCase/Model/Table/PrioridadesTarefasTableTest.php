<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrioridadesTarefasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrioridadesTarefasTable Test Case
 */
class PrioridadesTarefasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrioridadesTarefasTable
     */
    public $PrioridadesTarefas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prioridades_tarefas',
        'app.tarefas',
        'app.status_tarefas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PrioridadesTarefas') ? [] : ['className' => PrioridadesTarefasTable::class];
        $this->PrioridadesTarefas = TableRegistry::get('PrioridadesTarefas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PrioridadesTarefas);

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
