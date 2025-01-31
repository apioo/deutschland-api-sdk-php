<?php
/**
 * BundestagMemberTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BundestagMemberTag extends TagAbstract
{
    /**
     * Returns specific member of the Bundestag
     *
     * @param string $memberId
     * @return BundestagMember
     * @throws ResponseException
     * @throws ClientException
     */
    public function get(string $memberId): BundestagMember
    {
        $url = $this->parser->url('/bundestag/member/:member_id', [
            'member_id' => $memberId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BundestagMember::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new ResponseException($this->parser->parse($data, Response::class));
                case 404:
                    throw new ResponseException($this->parser->parse($data, Response::class));
                case 500:
                    throw new ResponseException($this->parser->parse($data, Response::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Returns all current members of the Bundestag
     *
     * @return BundestagMemberCollection
     * @throws ResponseException
     * @throws ClientException
     */
    public function getAll(): BundestagMemberCollection
    {
        $url = $this->parser->url('/bundestag/member', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BundestagMemberCollection::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new ResponseException($this->parser->parse($data, Response::class));
                case 404:
                    throw new ResponseException($this->parser->parse($data, Response::class));
                case 500:
                    throw new ResponseException($this->parser->parse($data, Response::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
