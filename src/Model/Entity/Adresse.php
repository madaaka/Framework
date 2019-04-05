<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adresse Entity
 *
 * @property string $stadt
 * @property string $Hausnr
 * @property string $strasse
 * @property string $region
 * @property int $adresseId
 */
class Adresse extends Entity
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
        'stadt' => true,
        'Hausnr' => true,
        'strasse' => true,
        'region' => true
    ];
}
