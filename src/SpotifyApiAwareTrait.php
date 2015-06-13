<?php


namespace Hotdog\SpotifyExampleApi;

/**
 * Class SpotifyApiAwareTrait
 * @package Hotdog\Zf2Module\SpotifyApi
 * @satisfies SpotifyAwareInterface
 */
trait SpotifyApiAwareTrait
{
    /** @var  SpotifyApi */
    protected $spotifyApi;

    /**
     * @return SpotifyApi
     */
    public function getSpotifyApi()
    {
        return $this->spotifyApi;
    }

    /**
     * @param SpotifyApi $spotifyApi
     * @return self
     */
    public function setSpotifyApi(SpotifyApi $spotifyApi)
    {
        $this->spotifyApi = $spotifyApi;
        return $this;
    }

}