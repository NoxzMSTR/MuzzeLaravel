<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.main.index');
    }
    public function myAccount()
    {
        return view('pages.main.my-account');
    }
    public function pageNotFound()
    {
        return view('pages.maintenance.404');
    }
    public function artist()
    {
        return view('pages.main.collections.artist');
    }
    public function collectionType1()
    {
        return view('pages.main.collections.collection-type-1');
    }
    public function collectionType2()
    {
        return view('pages.main.collections.collection-type-2');
    }
    public function singleArtist()
    {
        return view('pages.main.collections.single-artist');
    }
    public function singleWorks()
    {
        return view('pages.main.collections.single-works');
    }
    public function eventCompact()
    {
        return view('pages.main.events.event-compact');
    }
    public function eventGrid()
    {
        return view('pages.main.events.event-grid');
    }
    public function eventList()
    {
        return view('pages.main.events.events-list');
    }
    public function singleEvent()
    {
        return view('pages.main.events.single-events');
    }
    public function exhibitionCompact()
    {
        return view('pages.main.exhibition.exhibition-compact');
    }
    public function exhibitionGrid()
    {
        return view('pages.main.exhibition.exhibition-grid');
    }
    public function exhibitionList()
    {
        return view('pages.main.exhibition.exhibition-list');
    }
    public function singleExhibition()
    {
        return view('pages.main.exhibition.single-exhibition');
    }    
    public function facilityRental()
    {
        return view('pages.main.facility-rental');
    }
    public function galleryCaption()
    {
        return view('pages.main.gallery.gallery-caption');
    }
    public function galleryFullwidth()
    {
        return view('pages.main.gallery.gallery-fullwidth');
    }
    public function galleryGrid()
    {
        return view('pages.main.gallery.gallery-grid');
    }
    public function galleryMasonry()
    {
        return view('pages.main.gallery.gallery-masonry');
    }
    public function imageGallery()
    {
        return view('pages.main.gallery.image-gallery');
    }
    public function newsClassic()
    {
        return view('pages.main.news.news-classic');
    }
    public function newsGrid()
    {
        return view('pages.main.news.news-grid');
    }
    public function newsList()
    {
        return view('pages.main.news.news-list');
    }
    public function singlePost()
    {
        return view('pages.main.news.single-post');
    }
    public function cart()
    {
        return view('pages.main.shop.cart');
    }
    public function checkout()
    {
        return view('pages.main.shop.checkout');
    }
    public function shop()
    {
        return view('pages.main.shop.shop');
    }
    public function singleProduct()
    {
        return view('pages.main.shop.single-product');
    }
    public function boardStaff()
    {
        return view('pages.main.board-staff');
    }
    public function career()
    {
        return view('pages.main.career');
    }
    public function careerDetails()
    {
        return view('pages.main.career-details');
    }
    public function contactUs()
    {
        return view('pages.main.contact-us');
    }
    public function faq()
    {
        return view('pages.main.faq');
    }
    public function donate()
    {
        return view('pages.main.donate');
    }
    public function membership()
    {
        return view('pages.main.membership');
    }
    public function sponsers()
    {
        return view('pages.main.sponsers');
    }
    public function missionHistory()
    {
        return view('pages.main.mission-history');
    }
    public function venues()
    {
        return view('pages.main.venues');
    }    
    public function visitUsBlock()
    {
        return view('pages.main.visit-us-block');
    }
}
