<?php

  namespace Database\Seeders;

  use App\Models\Activity;
  use App\Models\Organization;
  use Illuminate\Database\Console\Seeds\WithoutModelEvents;
  use Illuminate\Database\Seeder;
  use Illuminate\Support\Facades\DB;

  class OrganizationSeeder extends Seeder
  {
    public function run(): void
    {
      $activities = Activity::query()->doesntHave('children')->pluck('id');
      $organizations = Organization::query()->select('id')->get();

      $insertData = [];

      foreach ($organizations as $organization) {
        $insertData = [
          ...$insertData,
          ...$activities->random(3)->map(fn($id) => ['organization_id' => $organization->id, 'activity_id' => $id,])->toArray()
        ];
      }

      DB::table('organization_activities')->truncate();
      DB::table('organization_activities')->insert($insertData);
    }
  }
