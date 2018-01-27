<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusTarefasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusTarefasTable Test Case
 */
class StatusTarefasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusTarefasTable
     */
    public $StatusTarefas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.status_tarefas',
        'app.tarefas',
        'app.prioridades_tarefas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatusTarefas') ? [] : ['className' => StatusTarefasTable::class];
        $this->StatusTarefas = TableRegistry::get('StatusTarefas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatusTarefas);

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
