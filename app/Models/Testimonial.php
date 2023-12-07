<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Testimonial extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc'); // Adjust the column name as needed
    }


    public function platform()
    {
        return $this->belongsTo(TestimonialPlatform::class);
    }
    protected $dates = ['created_at', 'updated_at'];

    public function getCreatedAtAttribute($value)
    {
        return $this->formatTimestamp($value);
    }

    public function getUpdatedAtAttribute($value)
    {
        return $this->formatTimestamp($value);
    }

    private function formatTimestamp($timestamp)
    {
        $carbonTimestamp = new Carbon($timestamp);

        // Calculate the difference in days from now
        $daysDifference = $carbonTimestamp->diffInDays(Carbon::now());

        if ($daysDifference === 0) {
            // If the timestamp is from today, display "just now"
            return 'just now';
        } elseif ($daysDifference === 1) {
            // If the timestamp is from yesterday, display "1 day ago"
            return '1 day ago';
        } elseif ($daysDifference <= 7) {
            // If the timestamp is within the last week, display "X days ago"
            return $daysDifference . ' days ago';
        } elseif ($daysDifference <= 30) {
            // If the timestamp is within the last month, display "X weeks ago"
            $weeksDifference = ceil($daysDifference / 7);
            return $weeksDifference == 1 ? '1 week ago' : $weeksDifference . ' weeks ago';
        } elseif ($daysDifference <= 365) {
            // If the timestamp is within the last year, display "X months ago"
            $monthsDifference = $carbonTimestamp->diffInMonths(Carbon::now());
            return $monthsDifference == 1 ? '1 month ago' : $monthsDifference . ' months ago';
        } else {
            // If the timestamp is older than a year, display "X years ago"
            $yearsDifference = $carbonTimestamp->diffInYears(Carbon::now());
            return $yearsDifference == 1 ? '1 year ago' : $yearsDifference . ' years ago';
        }
    }

}

