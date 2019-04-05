<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Benutzer Entity
 *
 * @property string $Benutzername
 * @property string $Name
 * @property string $Passwort
 * @property string $Email
 * @property int $Id
 */
class Benutzer extends Entity
{
    protected function _setPasswort($value){
      $hasher = new DefaultPasswordHasher();
      return $hasher->hash($value);
    }
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
        'Benutzername' => true,
        'Name' => true,
        'Passwort' => true,
        'Email' => true
    ];
}
