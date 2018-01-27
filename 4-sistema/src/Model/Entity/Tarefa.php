<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tarefa Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property int $prioridades_tarefa_id
 * @property int $status_tarefa_id
 *
 * @property \App\Model\Entity\PrioridadesTarefa $prioridades_tarefa
 * @property \App\Model\Entity\StatusTarefa $status_tarefa
 */
class Tarefa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'descricao' => true,
        'prioridades_tarefa_id' => true,
        'status_tarefa_id' => true,
        'prioridades_tarefa' => true,
        'status_tarefa' => true
    ];
}
