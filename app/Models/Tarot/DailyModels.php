<?php

namespace App\Models\Tarot;

use Illuminate\Database\Eloquent\Model;

class DailyModels extends Model
{
    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'daily';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['type', 'number'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
}