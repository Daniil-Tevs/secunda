<?php

  namespace App\Models;

  use App\Services\ActivityService;
  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Database\Eloquent\Model;
  use Illuminate\Database\Eloquent\Relations\BelongsTo;
  use Illuminate\Database\Eloquent\Relations\HasMany;

  class Activity extends Model
  {
    use HasFactory;

    protected $fillable = [
      'is_active',
      'sort',
      'name',
      'parent_id',
    ];

    public $timestamps = false;

    public static function boot()
    {
      parent::boot();

      static::saving(function ($model) {
        if (ActivityService::getParentAmount($model) > 3) {
          throw new \Exception("Превышен максимальный уровень вложенности 3");
        }
      });
    }

    public function parent(): BelongsTo
    {
      return $this->belongsTo(Activity::class, 'parent_id');
    }

    public function children(): HasMany
    {
      return $this->hasMany(Activity::class, 'parent_id');
    }
  }
