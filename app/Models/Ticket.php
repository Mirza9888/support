<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Ticket extends Model
{
    protected $fillable = [
        'name',
        'description',
        'urgency',
        'attachment'
    ];
    public function user()
    {

        return $this->belongsTo(User::class);
    }


    public function getTicketUrgency()
    {
        $urgencies = [
            1 => 'Low',
            2 => 'Medium',
            3 => 'High'
        ];
        return $urgencies[$this->urgency];
    }
}
