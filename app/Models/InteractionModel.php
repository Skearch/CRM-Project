<?php

namespace App\Models;

use CodeIgniter\Model;

class InteractionModel extends Model
{
    protected $table            = 'interactions';
    protected $primaryKey       = 'interactionid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['interaction_date','interaction_type','notes','customerid','salespersonid'];

}