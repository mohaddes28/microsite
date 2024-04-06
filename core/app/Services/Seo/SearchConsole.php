<?php

namespace App\Services\Seo;

class SearchConsole
{
    public function callCurl($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $httpCode;
    }

    public function runIndexing($blog)
    {
        $blogUrl = route('frontend/posts/details', $blog->slug);
        return [
            'google' => $this->indexGoogle($blogUrl),
            'bing' => $this->indexBing($blogUrl),
            'ask' => $this->indexAsk($blogUrl),
        ];
    }

    public function indexGoogle($blogUrl)
    {
        $url = "http://www.google.com/webmasters/sitemaps/ping?sitemap=" . $blogUrl;
        return $this->callCurl($url);
    }

    public function indexBing($blogUrl)
    {
        $url = " https://www.bing.com/webmaster/ping.aspx?siteMap=" . $blogUrl;
        return $this->callCurl($url);
    }

    public function indexAsk($blogUrl)
    {
        $url = "http://submissions.ask.com/ping?sitemap=" . $blogUrl;
        return $this->callCurl($url);
    }
}
