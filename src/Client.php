<?php
/**
 * Client automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function warning(): WarningTag
    {
        return new WarningTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function city(): CityTag
    {
        return new CityTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function district(): DistrictTag
    {
        return new DistrictTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function state(): StateTag
    {
        return new StateTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function bundestag(): BundestagTag
    {
        return new BundestagTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function bundesrat(): BundesratTag
    {
        return new BundesratTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function autobahn(): AutobahnTag
    {
        return new AutobahnTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function authorization(): AuthorizationTag
    {
        return new AuthorizationTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function meta(): MetaTag
    {
        return new MetaTag(
            $this->httpClient,
            $this->parser
        );
    }



    public static function build(string $clientId, string $clientSecret, ?TokenStoreInterface $tokenStore = null, ?array $scopes = null): self
    {
        return new self('https://api.deutschland-api.dev/', new Credentials\OAuth2($clientId, $clientSecret, 'https://api.deutschland-api.dev/authorization/token', '', $tokenStore, $scopes));
    }

    public static function buildAnonymous(): self
    {
        return new self('https://api.deutschland-api.dev/', new Credentials\Anonymous());
    }
}
