<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DesktopComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LandingPage\LandingPage;
use App\Http\Livewire\LaptopComponent;
use App\Http\Livewire\MonitorComponent;
use App\Http\Livewire\MonitorDetails;
use App\Http\Livewire\PrivacyPolicy;
use App\Http\Livewire\ProductDetails;
use App\Http\Livewire\Products\AddProductsComponent;
use App\Http\Livewire\Products\EditProductsComponent;
use App\Http\Livewire\Products\ProductsComponent;
use App\Http\Livewire\Services\DataBackup;
use App\Http\Livewire\Services\HardwareUpdates;
use App\Http\Livewire\Services\LaptopRepair;
use App\Http\Livewire\Services\MacRepair;
use App\Http\Livewire\Services\PCRepair;
use App\Http\Livewire\Services\SoftwareInstallation;
use App\Http\Livewire\TermsCondition;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('/laptop-repair-service-in-bangalore', LandingPage::class)->name('landing-page');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/laptop', LaptopComponent::class)->name('laptop');
Route::get('/desktop', DesktopComponent::class)->name('desktop');
Route::get('/monitor', MonitorComponent::class)->name('monitor');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/terms-and-conditions', TermsCondition::class)->name('terms-and-conditions');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/product/{slug}', ProductDetails::class)->name('product.details');
Route::get('/monitor/{slug}', MonitorDetails::class)->name('monitor.details');

Route::get('/services/laptop-repair',LaptopRepair::class)->name('services.laptop-repair');
Route::get('/services/pc-repair',PCRepair::class)->name('services.pc-repair');
Route::get('/services/mac-repair',MacRepair::class)->name('services.mac-repair');
Route::get('/services/data-backup',DataBackup::class)->name('services.data-backup');
Route::get('/services/software-installation',SoftwareInstallation::class)->name('services.software-installation');('services.laptop-repair');
Route::get('/services/hardware-updates',HardwareUpdates::class)->name('services.hardware-updates');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// for User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

});

// for Admin

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/products', ProductsComponent::class)->name('admin.products');
    Route::get('/admin/addproducts', AddProductsComponent::class)->name('admin.addproducts');
    Route::get('/admin/editproducts/{product_slug}', EditProductsComponent::class)->name('admin.editproducts');
});
