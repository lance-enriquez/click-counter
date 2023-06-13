<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Click class.
 *
 * @package App\Models
 * @author Lorenzo Enriquez
 * @since 2023.06.14
 */
class Click extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    public $table = 't_clicks';

    /**
     * Primary key.
     *
     * @var string
     */
    public $primaryKey = 'click_id';

    /**
     * Table key: created_at.
     * 
     * @var string
     */
    public const KEY_CREATED_AT = 'created_at';

    /**
     * Sets timestamp usage.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are fillable.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        Click::KEY_CREATED_AT,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        Click::KEY_CREATED_AT => 'datetime:Y-m-d H:i:s'
    ];
}
