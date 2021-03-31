<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nome', 'endereco', 'email', 'telefone'];
    protected $table = 'Funcionario';

    public function cliente(){
        return $this->belongsTo(Vendas::class, 'idCliente');
    }
/*
 * é possível mudar a primary key assim:
 *  protected $primaryKey = 'nomeDaPK'
 *  se não quiser que seja auto_increment:
 *  public $increment = false;
 *  para definir o tipo:
 *  pretected $keyType = 'string';
 *  para tirar os campos timestamps:
 *  public $timestamps = false;
 */

}
