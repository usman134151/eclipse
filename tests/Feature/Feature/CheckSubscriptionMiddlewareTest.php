<?php

namespace Tests\Feature\Feature;

use App\Actions\CreateTenantAction;
use App\Tenant;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckSubscriptionMiddlewareTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function the_tenant_is_taken_to_the_billing_screen_if_he_doesnt_have_a_subscription_or_trial()
    {
        $tenant = (new CreateTenantAction)([ // todo move to a method
            'company' => 'Foo company',
            'name' => 'John Doe',
            'email' => 'foo@bar.local',
            'password' => bcrypt('password'),
        ], 'tenant1.localhost');

        // Log in
        $this->get($tenant->impersonationUrl(1));

        $this->get('http://tenant1.localhost/posts')
            ->assertStatus(200);

        $tenant->update([
            'trial_ends_at' => Carbon::now()->subtract('30d'),
        ]);

        tenant()->refresh(); // Update model persisted on Tenancy singleton

        $this->get('http://tenant1.localhost/posts')
            ->assertRedirect('/settings/application');

        $this->get('http://tenant1.localhost/settings/application')
            ->assertSee('not subscribed');
    }
}
