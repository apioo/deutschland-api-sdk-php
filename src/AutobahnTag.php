<?php
/**
 * AutobahnTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class AutobahnTag extends TagAbstract
{
    public function warning(): AutobahnWarningTag
    {
        return new AutobahnWarningTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function parkingLorry(): AutobahnParkingLorryTag
    {
        return new AutobahnParkingLorryTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function closure(): AutobahnClosureTag
    {
        return new AutobahnClosureTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function chargingStation(): AutobahnChargingStationTag
    {
        return new AutobahnChargingStationTag(
            $this->httpClient,
            $this->parser
        );
    }

    /**
     * Returns all available autobahns
     *
     * @return AutobahnCollection
     * @throws ResponseException
     * @throws ClientException
     */
    public function getAll(): AutobahnCollection
    {
        $url = $this->parser->url('/autobahn', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, AutobahnCollection::class);
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
