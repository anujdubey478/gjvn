<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate XML sitemap for search engines.
     */
    public function index(): Response
    {
        $now = now()->toAtomString();

        $urls = [
            [
                'loc' => url('/'),
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => '1.0',
            ],
            [
                'loc' => url('/#about'),
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => url('/#toppers'),
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'loc' => url('/#nwhs-main-content'),
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'loc' => url('/#programs'),
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => url('/#campus'),
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => url('/#faculty'),
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ],
            [
                'loc' => url('/#contact'),
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
        ];

        return response()
            ->view('sitemap', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}
