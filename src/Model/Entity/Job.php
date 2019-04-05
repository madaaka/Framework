<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $ID
 * @property string $Jobtitel
 * @property string $Vollzeit
 * @property \Cake\I18n\FrozenDate $Startdatum
 * @property string|null $Firma
 * @property string|null $Firmenadresse
 * @property string $Firmenbeschreibung
 * @property string|null $Aufgaben
 * @property string $Profil
 * @property string $Angebot
 * @property \Cake\I18n\FrozenDate|null $Frist
 * @property string|null $Stadt
 * @property string|null $Region
 * @property string|null $Ansprechpartner
 */
class Job extends Entity
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
        'Jobtitel' => true,
        'Vollzeit' => true,
        'Startdatum' => true,
        'Firma' => true,
        'Firmenadresse' => true,
        'Firmenbeschreibung' => true,
        'Aufgaben' => true,
        'Profil' => true,
        'Angebot' => true,
        'Frist' => true,
        'Stadt' => true,
        'Region' => true,
        'Ansprechpartner' => true
    ];
}
