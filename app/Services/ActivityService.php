<?php

  namespace App\Services;

  use App\Models\Activity;

  class ActivityService
  {
    public static function getParentAmount(Activity $activity): int
    {
      $depth = 0;
      if (empty($activity->parent_id)) return $depth;

      while ($activity = $activity->parent()->select('id', 'parent_id')->first()) {
        if ($depth > 3) return $depth;
        $depth++;
      }
      return $depth;
    }
  }
