<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class GroupTable extends Model
{
    use Notifiable;
    protected $table = 'group_tables';
    protected $fillable = [
        'id', 'name', 'type', 'remark', 'status',
    ];
    public function sub_table() {
        return $this->hasMany(SubTable::class, 'group_id', 'id');
    }
}
