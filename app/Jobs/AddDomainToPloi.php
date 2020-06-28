<?php

namespace App\Jobs;

use App\Domain;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AddDomainToPloi implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $domain;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $guzzle = new Client([
            'base_uri' => 'https://ploi.io/api/',
            'http_errors' => false,
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.ploi.token'),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);

        $hostname = $this->domain->domain;

        $parts = explode('.', $hostname);
        if (count($parts) === 1) { // If subdomain
            $hostname = Domain::domainFromSubdomain($hostname);
        }

        $server = config('services.ploi.server');
        $site = config('services.ploi.site');

        $guzzle->post("servers/{$server}/sites/{$site}/aliases", [
            RequestOptions::JSON => [
                'aliases' => [$hostname]
            ],
        ]);

        $guzzle->post("servers/{$server}/sites/{$site}/certificates", [
            RequestOptions::JSON => [
                'certificate' => $hostname,
                'type' => 'letsencrypt',
            ],
        ]);
    }
}
