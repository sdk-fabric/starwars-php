<?php
/**
 * StarshipTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Starwars;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class StarshipTag extends TagAbstract
{
    /**
     * Get all the starships
     *
     * @param string|null $search
     * @return StarshipCollection
     * @throws ClientException
     */
    public function getAll(?string $search = null): StarshipCollection
    {
        $url = $this->parser->url('/starships', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'search' => $search,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, StarshipCollection::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Get a specific starship
     *
     * @param string $id
     * @return Starship
     * @throws ClientException
     */
    public function get(string $id): Starship
    {
        $url = $this->parser->url('/starships/:id', [
            'id' => $id,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Starship::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
