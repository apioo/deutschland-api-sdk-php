<?php
/**
 * DistrictTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class DistrictTag extends TagAbstract
{
    /**
     * Returns a specific district
     *
     * @param string $districtId
     * @return District
     * @throws ResponseException
     * @throws ClientException
     */
    public function get(string $districtId): District
    {
        $url = $this->parser->url('/district/:district_id', [
            'district_id' => $districtId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, District::class);
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
     * Returns all available districts
     *
     * @param int|null $startIndex
     * @param string|null $state
     * @param string|null $name
     * @return DistrictCollection
     * @throws ResponseException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?string $state = null, ?string $name = null): DistrictCollection
    {
        $url = $this->parser->url('/district', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'state' => $state,
                'name' => $name,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, DistrictCollection::class);
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
