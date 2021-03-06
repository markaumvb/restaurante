<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosTable Test Case
 */
class PedidosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosTable
     */
    public $Pedidos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedidos',
        'app.mesas',
        'app.agregacoes',
        'app.contas',
        'app.quotas_contas',
        'app.reservas',
        'app.clientes',
        'app.enderecos',
        'app.mesas_reservas',
        'app.cardapios',
        'app.pedidos_cardapios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pedidos') ? [] : ['className' => PedidosTable::class];
        $this->Pedidos = TableRegistry::get('Pedidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pedidos);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
