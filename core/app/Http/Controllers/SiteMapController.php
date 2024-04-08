<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog\BlogPost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;

class SiteMapController extends Controller
{
    public function index()
    {
        try {
            Sitemap::create()
                ->add(Url::create('/')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(1))

                ->add(Url::create('/download')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.9))

                ->add(Url::create('/about-us')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                    ->setPriority(0.8))

                ->add(Url::create('/contact')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                    ->setPriority(0.7))

                ->add(Url::create('/disclaimer')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                    ->setPriority(0.7))

                ->add(Url::create('/privacy-policy')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                    ->setPriority(0.7))

                ->add(Url::create('/terms-conditions')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                    ->setPriority(0.7))

                ->writeToFile('sitemap/pages.xml');

            $sitemap = Sitemap::create();
            BlogPost::all()->each(function(BlogPost $post) use ($sitemap){
                $sitemap->add(Url::create('/blog/'.$post->slug)
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.6));
            });
            $sitemap->writeToFile('sitemap/posts.xml');

            SitemapIndex::create(url('/'))
                ->add('sitemap/pages.xml')
                ->add('sitemap/posts.xml')
                ->writeToFile('sitemap.xml');
            return redirect()->back()->with('success', 'Sitemap Updated Successfully!');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
