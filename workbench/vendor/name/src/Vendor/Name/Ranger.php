<?php
namespace Vendor\Name;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Schema\Blueprint as Table;
class Ranger extends Eloquent
{
    public static $tableName = 'rangers';
    protected $guarded = array();
}