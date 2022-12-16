<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Webhook extends Model
{
    use Authenticatable, Authorizable, HasFactory;

    protected $table = "tbl_webhooks";

    protected $fillable = [
        'from',
        'message_id',
        'message',
        'timestamp',
        'type',
        'sender_name',
        'sender_wp_id'
    ];


}
