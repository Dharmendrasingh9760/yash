<?php

use App\Http\Controllers\AdvertisementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WastageController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ComplainsController;
use App\Http\Controllers\TradeLicenseController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\BirthCertificateController;
use App\Http\Controllers\DeathCertificateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExcelImportController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/



Route::get('/login', function () {
    return view('login');
})->name('login.page');

Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('sign-up', [UserController::class, 'create'])->name('user.sign.up');
Route::get('NagarPalika', [UserController::class, 'nagarpalika'])->name('nagarpalika');
Route::post('sign-up-save', [UserController::class, 'save'])->name('user.sign.up.save');
Route::post('profile-update', [UserController::class, 'profileUpdate'])->name('profile.update');
Route::get('forget-password', [UserController::class, 'forgetpassword'])->name('forgetpassword');
Route::post('reset-password', [UserController::class, 'resetPassword'])->name('password.update');
Route::get('profile-details', [UserController::class, 'profileDetails'])->name('profile.details');
Route::get('reset-password/{token}', [UserController::class, 'resetPasswordForm'])->name('password.reset');
Route::post('forget-password-send-mail', [UserController::class, 'forgetPasswordSendMail'])->name('forgetpassword.send.mail');

Route::get('captcha', [UserController::class, 'generateCaptcha'])->name('generate.captcha');
Route::get('refresh-captcha', [UserController::class, 'refreshCaptcha'])->name('refresh.captcha');
Route::get('get-house', [UserController::class, 'houseId'])->name('houseId');
Route::post('fetch-house', [UserController::class, 'fetchHouseId'])->name('fetchHouseId');
Route::get('create-property', [UserController::class, 'createProperty'])->name('createProperty');
Route::post('add-property', [UserController::class, 'storeProperty'])->name('storeProperty');

Route::post('user-colonies', [UserController::class, 'getUserColonies'])->name('getUserColonies');
Route::post('user-houses', [UserController::class, 'getUserHouses'])->name('getUserHouses');
Route::post('user-houses-property', [UserController::class, 'getUserProperty'])->name('getUserProperty');

//Home Routes
Route::get('/', [HomeController::class, 'index'])->name('user.dashboard');


Route::get('/import-excel-page', [ExcelImportController::class, 'importExcelPage']);
Route::post('/import-excel', [ExcelImportController::class, 'importExcel'])->name('importExcel');


Route::get('about-us', [HomeController::class, 'aboutUs'])->name('user.aboutUs');
Route::get('society-profile', [HomeController::class, 'societyProfile'])->name('user.societyProfile');
Route::get('town-activity', [HomeController::class, 'townActivity'])->name('user.townActivity');
Route::get('mail-page', [HomeController::class, 'mailView'])->name('user.mailIndex');
Route::get('chairman-view', [HomeController::class, 'chairmanView'])->name('user.chairmanView');
Route::get('target-view', [HomeController::class, 'targetView'])->name('user.targetIndex');
Route::get('duty-view', [HomeController::class, 'dutyView'])->name('user.dutyIndex');
Route::get('financial-view', [HomeController::class, 'financialView'])->name('user.financialIndex');
Route::get('service-view', [HomeController::class, 'serviceIndex'])->name('user.serviceIndex');
Route::get('nivida-view', [HomeController::class, 'nividaView'])->name('user.nividaView');
Route::get('budget-view', [HomeController::class, 'budgetView'])->name('user.budgetView');
Route::get('suchna-view', [HomeController::class, 'suchnaView'])->name('user.suchnaView');
Route::get('citizen-view', [HomeController::class, 'citizenView'])->name('user.citizenView');
Route::get('appeal-view', [HomeController::class, 'appealView'])->name('user.appealView');
Route::get('photo-gallery', [HomeController::class, 'photoView'])->name('user.photoView');
Route::get('video-gallery', [HomeController::class, 'videoView'])->name('user.videoView');
Route::get('map-view', [HomeController::class, 'mapView'])->name('user.mapView');
Route::get('contact-view', [HomeController::class, 'contactView'])->name('user.contactView');
Route::get('department-objective', [HomeController::class, 'departmentObjective'])->name('user.departmentObjective');
Route::get('overview', [HomeController::class, 'overview'])->name('user.overview');
Route::get('organizational-structure', [HomeController::class, 'organizationalStructure'])->name('user.organizationalStructure');
Route::get('department', [HomeController::class, 'department'])->name('user.department');
Route::get('services', [HomeController::class, 'services'])->name('user.services');
Route::get('accounting-and-finance', [HomeController::class, 'accountingAndFinance'])->name('user.accountingAndFinance');
Route::get('plans', [HomeController::class, 'plans'])->name('user.plans');


//  Policy Routes
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('user.privacyPolicy');
Route::get('refund-policy', [HomeController::class, 'refundPolicy'])->name('user.refundPolicy');
Route::get('terms-policy', [HomeController::class, 'termsPolicy'])->name('user.termsPolicy');

// Route::middleware(['auth', 'check.status'])->group(function () {
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('notification', [NotificationController::class, 'notification'])->name('notification');

    /* property module */
    Route::get('property-text', [PropertyController::class, 'propertyText'])->name('property.text');
    Route::get('add-property-pay', [PropertyController::class, 'propertyTextAdd'])->name('property.pay.add');
    Route::any('property-pay-list', [PropertyController::class, 'propertyTextList'])->name('property.pay.list');
    Route::post('add-property-pay-save', [PropertyController::class, 'propertyTextAddSave'])->name('add-property.pay.save');
    Route::post('add-property-pay-declaration', [PropertyController::class, 'propertydeclarationAddSave'])->name('add-property.declaration.save');

    /* My properties */
    Route::get('my-property-list', [PropertyController::class, 'myPropertyList'])->name('my.property.list');
    Route::any('my-property-search', [PropertyController::class, 'propertySearch'])->name('property.search');
    Route::post('my-property-excelExport', [PropertyController::class, 'propertyexcelExport'])->name('property.excelExport');
    Route::get('my-property-view/{id}', [PropertyController::class, 'myPropertyView'])->name('my.property.nonresidential.view');
    Route::get('my-property-application-list', [PropertyController::class, 'myPropertyApplicationList'])->name('my.property.application.list');
    Route::get('my-property-residential-gernatepdf/{id}', [PropertyController::class, 'propertyresidentialPdf'])->name('property.residential.pdf');
    Route::get('my-property-residential-view/{id}', [PropertyController::class, 'myPropertyResidentialView'])->name('my.property.residential.view');
    Route::get('my-property-nonresidential-gernatepdf/{id}', [PropertyController::class, 'propertynonresidentialPdf'])->name('property.nonresidential.pdf');
    Route::get('my-property-residential-printpdf/{id}', [PropertyController::class, 'propertyresidentialPrintPdf'])->name('property.residential.print.pdf');
    Route::get('my-property-nonresidential-printpdf/{id}', [PropertyController::class, 'propertynonresidentialPrintPdf'])->name('property.nonresidential.print.pdf');
    Route::get('my-property-residential-application-view/{id}', [PropertyController::class, 'myPropertyApplicationResidentialView'])->name('my.property.application.residential.view');
    Route::get('my-property-nonresidential-application-view/{id}', [PropertyController::class, 'myPropertyApplicationNonResidentialView'])->name('my.property.application.nonresidential.view');

    Route::post('colonies', [PropertyController::class, 'getColonies'])->name('getColonies');
    Route::post('houses', [PropertyController::class, 'getHouses'])->name('getHouses');
    Route::post('houses-property', [PropertyController::class, 'getProperty'])->name('getProperty');



    // property permission
    Route::get('property', [PropertyController::class, 'propertyPermission'])->name('property.permission');
    Route::get('add-property-permission', [PropertyController::class, 'propertyPermissionAdd'])->name('property.permission.add');
    Route::post('property-permission-save', [PropertyController::class, 'propertyPermissionAddSave'])->name('property.permission.save');
    Route::any('property-permission-search', [PropertyController::class, 'propertyPermissionSearch'])->name('property.permission.search');
    Route::get('property-permission-application-list', [PropertyController::class, 'PropertyPermissionApplicationList'])->name('property.permission.application.list');
    Route::get('property-permission-residential-gernatepdf/{id}', [PropertyController::class, 'propertypermissionresidentialPdf'])->name('property.residential.permission.pdf');
    Route::get('property-permission-residential-printpdf/{id}', [PropertyController::class, 'propertypermissionresidentialPrintPdf'])->name('property.permission.residential.print.pdf');
    Route::get('property-permission-nonresidential-gernatepdf/{id}', [PropertyController::class, 'propertypermissionnonresidentialPdf'])->name('property.permission.nonresidential.pdf');
    Route::get('property-permission-nonresidential-printpdf/{id}', [PropertyController::class, 'propertypermissionnonresidentialPrintPdf'])->name('property.permission.nonresidential.print.pdf');
    Route::get('property-permission-residential-application-view/{id}', [PropertyController::class, 'PropertyPermissionApplicationResidentialView'])->name('property.permission.application.residential.view');
    Route::get('property-permission-nonresidential-application-view/{id}', [PropertyController::class, 'PropertyPermissionApplicationNonResidentialView'])->name('property.permission.application.nonresidential.view');
     Route::get('payment-pdf/{id}', [App\Http\Controllers\PropertyController::class, 'downloadPdf'])->name('downloadPdf');

    /* certificate module */
    Route::get('marriage-certificate', [MarriageController::class, 'marriageCertificate'])->name('marriage.certificate');
    Route::get('marriage-certificate-add', [MarriageController::class, 'marriageCertificateAdd'])->name('marriage.certificate.add');
    Route::post('marriage-certificate-save', [MarriageController::class, 'marriageCertificateSave'])->name('marriage.certificate.save');
    Route::get('marriage-certificate-list', [MarriageController::class, 'marriageCertificateList'])->name('marriage.certificate.list');
    Route::get('marriage-certificate-view/{id}', [MarriageController::class, 'marriageCertificateView'])->name('marriage.certificate.view');
    Route::get('marriage-certificate-gernatepdf/{id}', [MarriageController::class, 'marriageCertificatePdf'])->name('marriage.certificate.gernatepdf');
    Route::get('marriage-certificate-printpdf/{id}', [MarriageController::class, 'marriageCertificatePrintPdf'])->name('marriage.certificate.printpdf');

    // Birth Certificate
    Route::get('birth-certificate', [BirthCertificateController::class, 'birthCertificate'])->name('birth.certificate');
    Route::get('add-birth-certificate', [BirthCertificateController::class, 'birthCertificateAdd'])->name('birth.certificate.add');
    Route::get('list-birth-certificate', [BirthCertificateController::class, 'birthCertificateList'])->name('birth.certificate.list');
    Route::get('view-birth-certificate/{id}', [BirthCertificateController::class, 'birthCertificateView'])->name('birth.certificate.view');
    Route::post('add-birth-certificate-save', [BirthCertificateController::class, 'birthCertificateSave'])->name('birth.certificate.save');
    Route::get('add-birth-certificate-gernatepdf/{id}', [BirthCertificateController::class, 'birthCertificatePdf'])->name('birth.certificate.pdf');
    Route::get('birth-certificate-printpdf/{id}', [BirthCertificateController::class, 'birthCertificatePrintPdf'])->name('birth.certificate.print.pdf');

    // death Certificate
    Route::get('death-certificate', [DeathCertificateController::class, 'deathCertificate'])->name('death.certificate');
    Route::get('add-death-certificate', [DeathCertificateController::class, 'deathCertificateAdd'])->name('death.certificate.add');
    Route::get('list-death-certificate', [DeathCertificateController::class, 'deathCertificateList'])->name('death.certificate.list');
    Route::get('view-death-certificate/{id}', [DeathCertificateController::class, 'deathCertificateView'])->name('death.certificate.view');
    Route::post('add-death-certificate-save', [DeathCertificateController::class, 'deathCertificateSave'])->name('death.certificate.save');
    Route::get('add-death-certificate-gernatepdf/{id}', [DeathCertificateController::class, 'deathCertificatePdf'])->name('death.certificate.pdf');
    Route::get('death-certificate-printpdf/{id}', [DeathCertificateController::class, 'deathCertificatePrintPdf'])->name('death.certificate.print.pdf');

    // death Certificate
    Route::get('complains', [ComplainsController::class, 'complains'])->name('complains');
    Route::get('add-complains', [ComplainsController::class, 'ComplainsAdd'])->name('complains.add');
    Route::get('list-complains', [ComplainsController::class, 'ComplainsList'])->name('complains.list');
    Route::post('add-complains-save', [ComplainsController::class, 'ComplainsSave'])->name('complains.save');
    Route::get('chat-complains/{id}', [ComplainsController::class, 'Complainschat'])->name('complains.chat');
    Route::post('messages-complains', [ComplainsController::class, 'Complainsmessage'])->name('complains.message');

    /* Trade Lincance */
    Route::get('trade-license', [TradeLicenseController::class, 'tradeLicense'])->name('trade.license');
    Route::get('trade-license-add', [TradeLicenseController::class, 'tradeLicenseAdd'])->name('trade.license.add');
    Route::get('trade-license-list', [TradeLicenseController::class, 'tradeLicenseList'])->name('trade.license.list');
    Route::post('trade-license-save', [TradeLicenseController::class, 'tradeLicenseSave'])->name('trade.license.save');
    Route::get('trade-license-view/{id}', [TradeLicenseController::class, 'tradeLicenseView'])->name('trade.license.view');
    Route::get('trade-license-gernatepdf/{id}', [TradeLicenseController::class, 'tradeLicensePdf'])->name('trade.license.gernatepdf');
    Route::get('trade-license-printpdf/{id}', [TradeLicenseController::class, 'tradeLicensePrintPdf'])->name('trade.license.print.pdf');

    //Wastage Collection
    Route::get('wastage', [WastageController::class, 'index'])->name('wastage.index');
    Route::get('wastage-list', [WastageController::class, 'wastageList'])->name('wastageList');
    Route::get('wastage-first', [WastageController::class, 'firstWastage'])->name('firstWastage');
    Route::post('wastage-store', [WastageController::class, 'wastageStore'])->name('wastageStore');
    Route::get('wastage-view/{id?}', [WastageController::class, 'wastageView'])->name('wastageView');
    Route::get('wastage-gernatepdf/{id}', [WastageController::class, 'wastagePdf'])->name('wastage.wastagePdf');
    Route::get('wastage-printpdf/{id}', [WastageController::class, 'wastagePrintPdf'])->name('wastagePrintPdf.print.pdf');

    //Water Tax
    Route::get('water-list', [WastageController::class, 'waterList'])->name('waterList');
    Route::get('water-tax', [WastageController::class, 'waterTax'])->name('user.waterTax');
    Route::get('water-first', [WastageController::class, 'firstWater'])->name('firstWater');
    Route::post('water-store', [WastageController::class, 'waterStore'])->name('waterStore');
    Route::get('water-view/{id?}', [WastageController::class, 'waterView'])->name('waterView');
    Route::get('water-gernatepdf/{id}', [WastageController::class, 'waterPdf'])->name('water.waterPdf');
    Route::get('water-printpdf/{id}', [WastageController::class, 'waterPrintPdf'])->name('waterPrintPdf.print.pdf');

    //Advertisement
    Route::get('advertisement', [AdvertisementController::class, 'advertisement'])->name('user.advertisement');
    Route::get('all-advertisement', [AdvertisementController::class, 'allAdvertisement'])->name('user.allAdvertisement');
    Route::get('book-advertisement', [AdvertisementController::class, 'bookAdvertisement'])->name('user.bookAdvertisement');
    Route::get('advertisement-applied', [AdvertisementController::class, 'appliedAdvertisement'])->name('user.appliedAdvertisement');
    Route::get('advertisement-applied-view/{id?}', [AdvertisementController::class, 'appliedAdvertisementView'])->name('user.appliedAdvertisementView');

    //Razorpay
    Route::view('/razorpay', 'create-payment-link');
    Route::post('/create-order', [RazorpayController::class, 'createOrder'])->name('create_order');
    Route::post('/verify-payment', [RazorpayController::class, 'verifyPayment'])->name('verifyPayment');

    //Advertisement
    Route::get('payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payments');
    Route::get('payment/download/{id}', [App\Http\Controllers\PaymentController::class, 'download'])->name('payments.download');
   
});
