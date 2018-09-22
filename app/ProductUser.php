<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Notifications\Notifiable;
use App\Notifications\InvoiceMade;

class ProductUser extends Pivot
{
    use Notifiable;

    protected $fillable = ['user_id', 'product_id', 'invoice_number'];

    protected $table = 'product_user';

    public static function boot()
    {
        parent::boot();
        static::creating(function($product_user) {
            $product_user->invoice_number = str_random(16);
        });
        static::created(function($invoice) {
            $invoice->user->notify(new InvoiceMade($invoice));
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
