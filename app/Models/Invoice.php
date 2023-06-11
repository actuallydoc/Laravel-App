<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'invoice_due_date',
        'invoice_status',
        'user_id',
        'id'
    ];

    protected static function boot()
    {
        parent::boot();

        // Automatically set the user ID when creating a new invoice
        static::creating(function ($invoice) {
            $invoice->user_id = Auth::id();
        });
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
