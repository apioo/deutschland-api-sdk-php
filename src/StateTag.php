<?php
/**
 * StateTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class StateTag extends TagAbstract
{
    /**
     * Returns a specific state
     *
     * @param string $stateId
     * @return State
     * @throws ResponseException
     * @throws ClientException
     */
    public function get(string $stateId): State
    {
        $url = $this->parser->url('/state/:state_id', [
            'state_id' => $stateId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, State::class);
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
     * Returns all available states
     *
     * @param int|null $startIndex
     * @param string|null $name
     * @return StateCollection
     * @throws ResponseException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?string $name = null): StateCollection
    {
        $url = $this->parser->url('/state', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'name' => $name,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, StateCollection::class);
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
