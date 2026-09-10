<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KnowledgebaseController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\VpsController;
use App\Http\Controllers\EmailProController;
use App\Http\Controllers\HebergementController;
use App\Http\Controllers\SslCertificateController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SubmitticketController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

Route::get('/',                           [HomeController::class,            'index'])->name('home');
Route::get('/contact',                    [ContactController::class,         'index'])->name('contact');
Route::get('/knowledgebase',              [KnowledgebaseController::class,   'index'])->name('knowledgebase');
Route::get('/downloads',                  [DownloadsController::class,       'index'])->name('downloads');
Route::get('/announcements',              [AnnouncementsController::class,   'index'])->name('announcements');
Route::get('/domain/transfer',            [DomainController::class,          'transfer'])->name('domain.transfer');
Route::get('/domain/pricing',             [DomainController::class,          'pricing'])->name('domain.pricing');
Route::get('/domain/register',            [DomainController::class,          'register'])->name('domain.register');
Route::get('/terms-of-service',           [TermsController::class,           'index'])->name('terms');
Route::get('/privacy-policy',             [PrivacyController::class,         'index'])->name('privacy');
Route::get('/vps',                        [VpsController::class,             'index'])->name('vps');
Route::get('/email-pro',                  [EmailProController::class,        'index'])->name('email-pro');
Route::get('/store/hebergement-mutualise',[HebergementController::class,     'index'])->name('hebergement.mutualise');
Route::get('/ssl-certificate',            [SslCertificateController::class,  'index'])->name('ssl.certificate');
Route::get('/submitticket',               [SubmitticketController::class,    'index'])->name('submitticket');
Route::get('/cart',                       [CartController::class,            'index'])->name('cart');
