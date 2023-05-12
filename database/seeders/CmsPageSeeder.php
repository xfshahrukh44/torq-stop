<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\CMS\Models\CmsPage;
use Webkul\CMS\Models\CmsPageTranslation;

class CmsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_page = CmsPage::create([]);
        CmsPageTranslation::firstOrCreate([
            'Page_title' => 'CMS_PAGE',
            'url_key' => 'cms_page',
        'locale' => 'en',
        ], [
            'cms_page_id' => $new_page->id,
            'content' => json_encode([

                'homeHeading' => "HOME",
                'sliderHeading0' => "PROTECT YOUR INVESTMENT AND KEEP YOUR FLEET RUNNING STRONG WHILE STAYING ON BUDGET.",
                'sliderHeading1' => "LIGHT AND MEDIUM-DUTY ",
                'sliderDes1' => "FULL RANGE OF HYDRAULIC BRAKE PARTS FOR LIGHT AND MEDIUM DUTY TRUCKS CLASS 1-7, INCLUDING LAST MILE DELIVERY VEHICLES. ",
                'sliderHeading2' => " ALL TORQSTOP PRODUCTS ARE 100% ALL NEW – NO CORES ",
                'sliderDes2' => "ULTRA-PREMIUM-QUALITY PARTS PROVIDE EXCEPTIONAL VALUE AND LOWEST COST PER MILE. ",
                'content' => "With over 90 years manufacturing experience, OPC Parts produces OE-quality, 100% NEW Light, Medium and Heavy-Duty Commercial Vehicle brake components under the TorqStop™ brand or under your own Private Label.OPC Parts believes in building longstanding, mutually beneficial relationships. Customer service is paramount. Our products are high-quality, competitively priced, and readily available to keep your equipment running and safe.",
                'infoHeading0' => "Catalogs and Literature ",
                'infoHeading1' => "Distributor Portal ",
                'infoHeading2' => "e-CATALOG ",
                'infoHeading3' => "CONTACT YOUR TERRITORY REPRESENTATIVE",
                'infoHeading4' => "Find a Distributor ",
                'aboutHeading' => "About Us",
                'about_sec_des' => "With over 90 years combined experience in the automotive and heavy-duty aftermarket, the founders of OPC Parts had a vision to bring the next level of quality, value and service to the industry.",
                'about_sec_des2' => "TorqStop™ offers a wide range of premium brake products, manufactured in ISO 9001:2015 and IATF16949: 2016 certified factories. All of our light, medium and heavy-duty brake products conform to applicable FMVSS 105, FMVSS 135, FMVSS 121 and ECE R90 requirements. Our broad coverage, outstanding value and user-friendly lookup tools make TorqStop™ an easy choice for all of your commercial vehicle brake parts needs. All products are 100% NEW and CORE-FREE – saving you time, money and unnecessary handling of dirty, expensive cores.",
                'aboutHeading1' => "WHY CHOOSE US ",
                'about_sec_des3' => "First three reasons: Quality, Quality and Quality. We do not compromise on this subject.
                                     IATF 16949:2016 Certified Factories
                                     ISO 9001:2015 Certified
                                     FMVSS 121 Compliant",
                'aboutHeading2' => "OUR PRINCIPLES",
                'about_sec_des4' => "We are focused on building long-term relationships, not short-term profits. We will always act with Integrity and transparency to build trust, and always live up to our commitments. We will operate efficiently to keep overhead low, so we can provide the most competitive programs to our customers. We will maintain product and market expertise, playing a consultative role to our customers and providing valuable insights for better decision making. First to market with new product introductions, giving our customers an edge in the marketplace. Focused on long-term relationships, not short-term profits Strong belief in integrity and transparency Low Overhead allows for competitive programs Speed to market on New Product Introduction",
                'aboutHeading3' => "Our Vision ",
                'about_sec_des5' => "To be a leading aftermarket supplier, widely recognized for providing high-quality brake components and world-class customer service at competitive prices; delivering maximum value to our customers",
                'aboutHeading4' => "Our Mission",
                'about_sec_des6' => "To exceed our customer’s expectations in quality, delivery, and cost, through close customer interaction and continuous improvement. We will offer best-in-class cataloging, website, and product data in order to ensure our customers get the right part, on time, at the right price",
                'newsTitle' => "Sign Up For Our Newsletter",
                'footerHeading' => "Footer",
                'phoneIcon' => "fas fa-phone-alt",
                'trollNum' => "1-888-996-6896 (Toll-Free)",
                'localNum' => "1-980-987-7272 (Local)",
                'emailIcon' => "fas fa-envelope",
                'email' => "info@torqstop.com",
                'addIcon' => "fas fa-map-marker-alt",
                'address' => "P.O. Box 761, Denver, NC 28037",
                'faceIcon' => "fab fa-facebook-f",
                'faceLink' => "https://www.facebook.com/",
                'twitIcon' => "fab fa-twitter",
                'twitLink' => "https://www.twitter.com/",
                'instaIcon' => "fab fa-instagram",
                'instaLink' => "https://www.instagram.com/",
                'youtIcon' => "fab fa-youtube",
                'youtLink' => "https://www.youtube.com/",
                'copyRight' => "Copyright © 2023. All Right Reserved.",



            ])
        ]);
    }
}
