<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function searches()
    {
        return $this->hasMany(Search::class);
    }

    public function seller()
    {
        return $this->hasOne(Seller::class, 'user_id');
    }
    public function sellerPackages()
    {
        return $this->belongsToMany(SellerPackage::class, 'user_seller_package', 'user_id', 'seller_package_id');
    }

    public function sellerPackagePayments()
    {
        return $this->hasMany(SellerPackagePayment::class, 'user_id');
    }

    public function withdrawRequests()
    {
        return $this->hasMany(SellerWithdrawRequest::class, 'user_id');
    }

    public function shop()
    {
        return $this->hasOne(Shop::class, 'user_id');
    }

    public function staff()
    {
        return $this->hasOne(Staff::class, 'user_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'user_id');
    }

    public function ticketReplies()
    {
        return $this->hasMany(TicketReply::class, 'user_id');
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'user_id');
    }

    public function uploads()
    {
        return $this->hasMany(Upload::class, 'user_id');
    }

    public function customerPackage()
    {
        return $this->belongsTo(CustomerPackage::class, 'customer_package_id');
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class, 'user_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'user_id');
    }
}
