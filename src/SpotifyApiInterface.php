<?php


namespace Hotdog\SpotifyExampleApi;


interface SpotifyApiInterface
{
    /**
     * Query the Spotify API for an album search
     *
     * @param $query
     * @return mixed
     */
    public function search($query);

    /**
     * Query the Spotify API for a specific Album
     *
     * @param $id
     * @return mixed
     */
    public function getAlbum($id);
}