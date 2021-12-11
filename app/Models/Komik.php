<?php
namespace App\Models;
use CodeIgniter\Model;
class KomikModel extends Model
{
    protected $table = 'device';
    protected $allowedFields = ['Nama', 'Brand', 'Quatity']
}