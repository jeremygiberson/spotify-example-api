<?php


namespace Hotdog\SpotifyExampleApi;


interface SpotifyApiAwareInterface
{
    /**
     * @param SpotifyApiInterface $api
     */
    public function setSpotifyApi(SpotifyApiInterface $api);

    /**
     * @return SpotifyApiInterface
     */
    public function getSpotifyApi();
}