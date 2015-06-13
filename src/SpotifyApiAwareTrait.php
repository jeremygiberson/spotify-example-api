<?php


namespace Hotdog\SpotifyExampleApi;

/**
 * Class SpotifyApiAwareTrait
 * @package Hotdog\Zf2Module\SpotifyApi
 * @satisfies SpotifyAwareInterface
 */
trait SpotifyApiAwareTrait
{
    /** @var  SpotifyApiInterface */
    private $spotifyApi;

    /**
     * @return SpotifyApiInterface
     */
    public function getSpotifyApi()
    {
        return $this->spotifyApi;
    }

    /**
     * @param SpotifyApiInterface $spotifyApi
     * @return self
     */
    public function setSpotifyApi(SpotifyApiInterface $spotifyApi)
    {
        $this->spotifyApi = $spotifyApi;
        return $this;
    }

}