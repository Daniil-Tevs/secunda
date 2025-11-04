<?php

  namespace Database\Seeders;

  use App\Models\Building;
  use App\Models\Organization;
  use App\Models\OrganizationPhone;
  use Illuminate\Database\Console\Seeds\WithoutModelEvents;
  use Illuminate\Database\Seeder;

  class BuildingSeeder extends Seeder
  {
    public function run(): void
    {
      Building::factory()
        ->count(20)
        ->has(Organization::factory()
          ->count(10)
          ->hasPhones(OrganizationPhone::factory()->count(3)),
          'organization')
        ->create();
    }
  }
