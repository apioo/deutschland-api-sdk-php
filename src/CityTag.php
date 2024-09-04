<?php
/**
 * CityTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class CityTag extends TagAbstract
{
    /**
     * Returns a specific city
     *
     * @param string $cityId
     * @return City
     * @throws ResponseException
     * @throws ClientException
     */
    public function get(string $cityId): City
    {
        $url = $this->parser->url('/city/:city_id', [
            'city_id' => $cityId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, City::class);
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
     * Returns all available cities
     *
     * @param int|null $startIndex
     * @param string|null $state
     * @param string|null $district
     * @param string|null $name
     * @param string|null $zipCode
     * @return CityCollection
     * @throws ResponseException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?string $state = null, ?string $district = null, ?string $name = null, ?string $zipCode = null): CityCollection
    {
        $url = $this->parser->url('/city', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'state' => $state,
                'district' => $district,
                'name' => $name,
                'zipCode' => $zipCode,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, CityCollection::class);
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
