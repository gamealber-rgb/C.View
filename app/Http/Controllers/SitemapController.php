<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [
            route('home'),
            route('rooms.index'),
            route('menu'),
            route('services'),
            route('about'),
            route('policies'),
            route('contact'),
        ];

        Room::query()
            ->where('is_available', true)
            ->orderBy('number')
            ->pluck('number')
            ->each(function ($number) use (&$urls) {
                $urls[] = route('rooms.show', ['room' => $number]);
            });

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>'.htmlspecialchars($url, ENT_XML1).'</loc>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }
}
