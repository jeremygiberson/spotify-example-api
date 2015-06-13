<?php


namespace Hotdog\SpotifyExampleApi;


interface SpotifyApiAwareInterface
{
    /**
     * @param SpotifyApi $api
     */
    public function setSpotifyApi(SpotifyApi $api);

    /**
     * @return SpotifyApi
     */
    public function getSpotifyApi();
}