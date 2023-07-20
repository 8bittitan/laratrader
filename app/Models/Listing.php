<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

/**
 * App\Models\Listing
 *
 * @property-read \App\Models\User|null $owner
 * @method static \Database\Factories\ListingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Listing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing query()
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $price
 * @property string $make
 * @property string $model
 * @property int $year
 * @property int $zip
 * @property int $owner_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereMake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereZip($value)
 * @mixin \Eloquent
 */
class Listing extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
