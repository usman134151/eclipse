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
     * @return boolean
     */
    public function addDomain(Domain $domain): bool
    {
        if ($domain->isSubdomain() || ! $this->token) {
            return false;
        }

        if (gethostbyname($domain->domain) !== gethostbyname(Domain::domainFromSubdomain(tenant()->fallback_domain->domain))) {
            return false;
        }

        Http::withToken($this->token)->asJson()
            ->post("https://ploi.io/api/servers/{$this->server}/sites/{$this->site}/tenants", [
                'tenants' => [$domain->domain],
            ]
        );

        return true;
    }

    /**
     * Remove a tenant :80 host.
     *
     * @param Domain $domain
     * @return boolean
     */
    public function removeDomain(Domain $domain): bool
    {
        if ($domain->isSubdomain() || ! $this->token) {
            return false;
        }

        Http::withToken($this->token)->asJson()
            ->delete("https://ploi.io/api/servers/{$this->server}/sites/{$this->site}/tenants/$domain->domain");

        return true;
    }

    /**
     * Request a certificate for a tenant host.
     *
     * @param Domain $domain
     * @return boolean
     */
    public function requestCertificate(Domain $domain): bool
    {
        if ($domain->isSubdomain() || ! $this->token) {
            return false;
        }

        Http::withToken($this->token)->asJson()
            ->post("https://ploi.io/api/servers/{$this->server}/sites/{$this->site}/tenants/{$domain->domain}/request-certificate", [
                'webhook' => tenant()->route('tenant.ploi.certificate.issued'),
            ]
        );

        $domain->update(['certificate_status' => 'pending']);

        return true;
    }

    /**
     * Revoke a certificate for a tenant host.
     *
     * @param Domain $domain
     * @return boolean
     */
    public function revokeCertificate(Domain $domain): bool
    {
        if ($domain->isSubdomain() || ! $this->token) {
            return false;
        }

        Http::withToken($this->token)->asJson()
            ->post("https://ploi.io/api/servers/{$this->server}/sites/{$this->site}/tenants/{$domain->domain}/revoke-certificate", [
                'webhook' => tenant()->route('tenant.ploi.certificate.revoked'),
            ]
        );

        $domain->update(['certificate_status' => 'pending']);

        return true;
    }
}
