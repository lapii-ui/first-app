<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class ReceiptInfo extends Model
{
    use Notifiable;
    protected $table = "receipt_informations";
    protected $fillable = [
        'id', 'title', 'address', 'tel1', 'tel2', 'logo', 'note_kh', 'note_en', 'branch_name',
    ];
}
