<?php
/**
 * PlanetTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Starwars;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class PlanetTag extends TagAbstract
{
    /**
     * Get all the planets
     *
     * @param string|null $search
     * @return PlanetCollection
     * @throws ClientException
     */
    public function getAll(?string $search = null): PlanetCollection
    {
        $url = $this->parser->url('/planets', [
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

            return $this->parser->parse($data, PlanetCollection::class);
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
     * Get a specific planet
     *
     * @param string $id
     * @return Planet
     * @throws ClientException
     */
    public function get(string $id): Planet
    {
        $url = $this->parser->url('/planets/:id', [
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

            return $this->parser->parse($data, Planet::class);
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
