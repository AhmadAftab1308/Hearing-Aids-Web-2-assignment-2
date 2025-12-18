<?php

namespace Tests\Feature;

use App\Models\Brand;
use App\Models\HearingAid;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FavoritesTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_favorite_and_unfavorite_a_hearing_aid(): void
    {
        $user = User::factory()->create(['is_admin' => false]);

        $brand = Brand::create(['name' => 'Test Brand']);
        $aid = HearingAid::create([
            'brand_id' => $brand->id,
            'instrument' => 'Test Model',
            'price_per_pair' => 123.45,
            'rechargeable' => true,
            'sound_quality' => 3,
            'suitability_active_lifestyles' => 3,
            'suitability_small_groups' => 3,
            'social_situations' => 3,
            'description' => 'Test',
        ]);

        $this->actingAs($user)
            ->post("/favorites/{$aid->id}")
            ->assertStatus(302);

        $this->assertDatabaseHas('favorites', [
            'user_id' => $user->id,
            'hearing_aid_id' => $aid->id,
        ]);

        $this->actingAs($user)
            ->delete("/favorites/{$aid->id}")
            ->assertStatus(302);

        $this->assertDatabaseMissing('favorites', [
            'user_id' => $user->id,
            'hearing_aid_id' => $aid->id,
        ]);
    }
}
