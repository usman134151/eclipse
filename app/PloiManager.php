<?php

namespace App;

use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Http;

class PloiManager
{
    /** @var string */
    protected $site;

    /** @var string */
    protected $token;

    /** @var string */
    protected $server;

    public function __construct(Repository $config)
    {
        $this->site = $config->get('services.ploi.site');
        $this->token = $config->get('services.ploi.token');
        $this->server = $config->get('services.ploi.server');
    }

    /**
     * Add tenant :80 vhost
     *
     * @param Domain $domain
     * @return void
     */
    public function addDomain(Domain $domain): void
    {
        if ($domain->isSubdomain() || ! $this->token) {
            return;
        }

        if (gethostbyname($domain->domain) !== gethostbyname(Domain::domainFromSubdomain(tenant()->fallback_domain->domain))) {
            return;
        }

        Http::withToken($this->token)->asJson()
            ->post("https://ploi.io/api/servers/{$this->server}/sites/{$this->site}/tenants", [
                'tenants' => [$domain->domain],
            ]
        );
    }

    /**
     * Remove a tenant :80 host.
     *
     * @param Domain $domain
     * @return void
     */
    public function removeDomain(Domain $domain)
    {
        if ($domain->isSubdomain() || ! $this->token) {
            return;
        }

        Http::withToken($this->token)->asJson()
            ->delete("https://ploi.io/api/servers/{$this->server}/sites/{$this->site}/tenants/$domain->domain");
    }

    /**
     * Request a certificate for a tenant host.
     *
     * @param Domain $domain
     * @return void
     */
    public function requestCertificate(Domain $domain): void
    {
        if ($domain->isSubdomain() || ! $this->token) {
            return;
        }

        Http::withToken($this->token)->asJson()
            ->post("https://ploi.io/api/servers/{$this->server}/sites/{$this->site}/tenants/{$domain->domain}/request-certificate", [
                'webhook' => tenant()->route('tenant.ploi.certificate.issued'),
            ]
        );

        $domain->update(['certificate_status' => 'pending']);
    }

    /**
     * Revoke a certificate for a tenant host.
     *
     * @param Domain $domain
     * @return void
     */
    public function revokeCertificate(Domain $domain): void
    {
        if ($domain->isSubdomain() || ! $this->token) {
            return;
        }

        Http::withToken($this->token)->asJson()
            ->post("https://ploi.io/api/servers/{$this->server}/sites/{$this->site}/tenants/{$domain->domain}/revoke-certificate", [
                'webhook' => tenant()->route('tenant.ploi.certificate.revoked'),
            ]
        );

        $domain->update(['certificate_status' => 'pending']);
    }

    public function acknowledgeDatabase(string $databaseName): void
    {
        if (! $this->token) {
            return;
        }

        Http::withToken($this->token)->asJson()
            ->post("https://ploi.io/api/servers/{$this->server}/databases/acknowledge", [
                'name' => $databaseName,
                'description' => 'Tenant database',
            ]);
    }

    public function forgetDatabase(string $databaseName): void
    {
        if (! $this->token) {
            return;
        }

        Http::withToken($this->token)->asJson()
            ->delete("https://ploi.io/api/servers/{$this->server}/databases/$databaseName/forget");
    }
}
