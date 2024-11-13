<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customers';
    protected $primaryKey       = 'customerid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['first_name','last_name','email','phone','address','registration_date','assigned_salesperson'];

}