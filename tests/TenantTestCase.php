<?php

namespace Tests;

use App\Actions\CreateTenantAction;
use App\Tenant;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Routing\UrlGenerator;

abstract class TenantTestCase extends TestCase
{
    use DatabaseMigrations;

    /**
     * Create tenant and initialize tenancy?
     *
     * @var boolean
     */
    protected $tenancy = true;

    /**
     * Most tests don't need this. Unless they test the billing page.
     *
     * @var boolean
     */
    protected $createStripeCustomer = false;

    public function setUp(): void
    {
        parent::setUp();

        if ($this->tenancy) {
            $tenant = $this->createTenant();
            tenancy()->initialize($tenant);

            config(['app.url' => 'http://tenant.localhost']);

            /** @var UrlGenerator */
            $urlGenerator = url();
            $urlGenerator->forceRootUrl('http://tenant.localhost');

            $this->withServerVariables([
                'SERVER_NAME' => 'tenant.localhost',
                'HTTP_HOST' => 'tenant.localhost',
            ]);

            // Login as superuser
            auth()->loginUsingId(1);
        }
    }

    protected function createTenant(array $data = [], string $domain = 'tenant', bool $createStriperCustomer = null): Tenant
    {
        return (new CreateTenantAction)(array_merge([
            'company' => 'Foo company',
            'name' => 'John Doe',
            'email' => 'foo@tenant.localhost',
            'password' => bcrypt('password'),
        ], $data), $domain, $createStriperCustomer ?? $this->createStripeCustomer);
    }
}