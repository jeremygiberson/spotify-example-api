<?php


namespace Hotdog\SpotifyExampleApi;

use GuzzleHttp\Client;

class SpotifyApi implements SpotifyApiInterface
{
    const SPOTIFY_API = 'https://api.spotify.com/v1/';
    const TYPE_TRACK = 'track';
    const TYPE_ALBUM = 'album';


    /**
     * Query the Spotify API for an album search
     *
     * @param $query
     * @return mixed
     */
    public function search($query) {

        $client = new Client();

        $response = $client->get(self::SPOTIFY_API . 'search', [
            'query' => [
                'q' => urlencode($query),
                'type' => self::TYPE_ALBUM,
            ]
        ]);

        return $response->json()['albums'];
    }

    /**
     * Query the Spotify API for a specific Album
     *
     * @param $id
     * @return mixed
     */
    public function getAlbum($id) {

        $client = new Client();

        $response = $client->get(self::SPOTIFY_API . 'albums/' . $id);

        return $response->json();
    }
}