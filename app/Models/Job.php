<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{

    use HasFactory;

    protected $table = 'job_listings';

//    protected $fillable = ['employer_id', 'title', 'salary'];

//    protected $guarded = [];

    public function employer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
}
