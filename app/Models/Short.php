<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Short extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'short';
    protected $primaryKey = 'id_short';
    protected $guarded = ['_token'];

    public function categoria (): BelongsTo {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
    public function usuario (): BelongsTo {
        return $this->belongsTo(usuario::class, 'id_usuario');
    }
}
