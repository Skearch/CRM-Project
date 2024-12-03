<?php

namespace App\Models;

use CodeIgniter\Model;

class SalespersonModel extends Model
{
    protected $table            = 'salespersons';
    protected $primaryKey       = 'salespersonid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['first_name','last_name','email','phone','hire_date','sales_target'];

}