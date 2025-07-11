<?php
/**
 * AutobahnParkingLorryTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class AutobahnParkingLorryTag extends TagAbstract
{
    /**
     * Returns available parking lorries for a specific autobahn
     *
     * @param string $autobahnId
     * @return AutobahnParkingLorryCollection
     * @throws ResponseException
     * @throws ClientException
     */
    public function getAll(string $autobahnId): AutobahnParkingLorryCollection
    {
        $url = $this->parser->url('/autobahn/:autobahn_id/parking_lorry', [
            'autobahn_id' => $autobahnId,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(AutobahnParkingLorryCollection::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 400) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Response::class));

                throw new ResponseException($data);
            }

            if ($statusCode === 404) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Response::class));

                throw new ResponseException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Response::class));

                throw new ResponseException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
