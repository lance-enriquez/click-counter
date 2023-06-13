<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Counter class.
 *
 * @package App\Models
 * @author Lorenzo Enriquez
 * @since 2023.06.14
 */
class Counter extends Model
{
    use HasFactory;

    /**
     * Table name.
     *
     * @var string
     */
    public $table = 't_counter';

    /**
     * Primary key.
     *
     * @var string
     */
    public $primaryKey = 'counter_id';

    /**
     * Sets timestamp usage.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];
}