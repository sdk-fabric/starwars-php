<?php
/**
 * PeopleTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Starwars;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class PeopleTag extends TagAbstract
{
    /**
     * Get all the people
     *
     * @param string|null $search
     * @return PeopleCollection
     * @throws ClientException
     */
    public function getAll(?string $search = null): PeopleCollection
    {
        $url = $this->parser->url('/people', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
                'search' => $search,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, PeopleCollection::class);

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Get a specific people
     *
     * @param string $id
     * @return People
     * @throws ClientException
     */
    public function get(string $id): People
    {
        $url = $this->parser->url('/people/:id', [
            'id' => $id,
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

            $data = $this->parser->parse((string) $body, People::class);

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
