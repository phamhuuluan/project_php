<?php

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

Route::get('/', function () {
    return view('pages.trang-chu');
})->name('trangchu');


Route::get('/', function () {
    return view('pages.trang-chu');
})->name('trangchu');

Route::get('/abc', function () {
    return view('pages.abc');
})->name('hihi');

Route::get('/trang-chu', function () {
    return view('pages.trang-chu');
})->name('trang-chu');

Route::get('/trang-chu-vn', function () {
    return view('pages.home-vn');
})->name('trang-chu-vn');

// GIỚI THIỆU
// Route::get('/gioi-thieu/gioi-thieu-chung', function () {
//     return view('pages.gioi-thieu-chung');
// });
// Route::get('/gioi-thieu/chuc-nang-nhiem-vu', function () {
//     return view('pages.gioi-thieu-chuc-nang-nhiem-vu');
// });
// Route::get('/gioi-thieu/chuc-nang-nhiem-vu', function () {
//     return view('pages.gioi-thieu-chuc-nang-nhiem-vu');
// });
// Route::get('/gioi-thieu/co-cau-to-chuc', function () {
//     return view('pages.gioi-thieu-co-cau-to-chuc');
// });

Route::prefix('gioi-thieu')->group(function() {

    Route::get('gioi-thieu-chung', function () {
        return view('pages.gioi-thieu-chung');
    })->name('gioi-thieu-chung');

    Route::get('chuc-nang-nhiem-vu', function () {
        return view('pages.gioi-thieu-chuc-nang-nhiem-vu');
    })->name('chuc-nang-nhiem-vu');

    Route::get('co-cau-to-chuc', function () {
        return view('pages.gioi-thieu-co-cau-to-chuc');
    })->name('co-cau-to-chuc');

});

// HOẠT ĐỘNG NGHIỆP VỤ
// Route::get('/hoat-dong-nghiep-vu/cho-vay-lai-suat-uu-dai', function () {
//     return view('pages.hoat-dong-nghiep-vu-cho-vay-lai-suat-uu-dai');
// });
// Route::get('/hoat-dong-nghiep-vu/ho-tro-lai-suat-vay-von-sau-dau-tu', function () {
//     return view('pages.hoat-dong-nghiep-vu-ho-tro-lai-suat-vay-von-sau-dau-tu');
// });
// Route::get('/hoat-dong-nghiep-vu/tai-tro-va-dong-tai-tro', function () {
//     return view('pages.hoat-dong-nghiep-vu-tai-tro-va-dong-tai-tro');
// });
// Route::get('/hoat-dong-nghiep-vu/co-che-phat-trien-sach', function () {
//     return view('pages.hoat-dong-nghiep-vu-co-che-phat-trien-sach');
// });
// Route::get('/hoat-dong-nghiep-vu/tro-gia-san-pham-bao-ve-moi-truong', function () {
//     return view('pages.hoat-dong-nghiep-vu-tro-gia-san-pham-bao-ve-moi-truong');
// });
// Route::get('/hoat-dong-nghiep-vu/ky-quy', function () {
//     return view('pages.hoat-dong-nghiep-vu-ky-quy');
// });
// Route::get('/hoat-dong-nghiep-vu/von-oda', function () {
//     return view('pages.hoat-dong-nghiep-vu-von-oda');
// });
// Route::get('/hoat-dong-nghiep-vu/khac', function () {
//     return view('pages.hoat-dong-nghiep-vu-khac');
// });

Route::prefix('nghiep-vu')->group(function(){

    Route::get('cho-vay', function () {
        return view('pages.hoat-dong-nghiep-vu-cho-vay-lai-suat-uu-dai');
    })->name('cho-vay');

    Route::get('vay-von', function () {
        return view('pages.hoat-dong-nghiep-vu-ho-tro-lai-suat-vay-von-sau-dau-tu');
    })->name('vay-von');

    Route::get('tai-tro', function () {
        return view('pages.hoat-dong-nghiep-vu-tai-tro-va-dong-tai-tro');
    })->name('tai-tro');

    Route::get('co-che-phat-trien', function () {
        return view('pages.hoat-dong-nghiep-vu-co-che-phat-trien-sach');
    })->name('co-che-phat-trien');

    Route::get('tro-gia', function () {
        return view('pages.hoat-dong-nghiep-vu-tro-gia-san-pham-bao-ve-moi-truong');
    })->name('tro-gia');

    Route::get('ky-quy', function () {
        return view('pages.hoat-dong-nghiep-vu-ky-quy');
    })->name('ky-quy');

    Route::get('von-oda', function () {
        return view('pages.hoat-dong-nghiep-vu-von-oda');
    })->name('von-oda');

    Route::get('khac', function () {
        return view('pages.hoat-dong-nghiep-vu-khac');
    })->name('khac');

});


// HỢP TÁC PHÁT TRIỂN
// Route::get('/hop-tac-phat-trien/qh-quoc-te', function () {
//     return view('pages.hop-tac-phat-trien-qh-quoc-te');
// });
// Route::get('/hop-tac-phat-trien/qh-trong-nuoc', function () {
//     return view('pages.hop-tac-phat-trien-qh-trong-nuoc');
// });
// Route::get('/hop-tac-phat-trien/ht-quoc-te', function () {
//     return view('pages.hop-tac-phat-trien-ht-quoc-te');
// });
// Route::get('/hop-tac-phat-trien/ht-trong-nuoc', function () {
//     return view('pages.hop-tac-phat-trien-ht-trong-nuoc');
// });

Route::prefix('hop-tac-phat-trien')->group(function(){

    Route::get('qh-quoc-te', function () {
        return view('pages.hop-tac-phat-trien-qh-quoc-te');
    })->name('qh-quoc-te');

    Route::get('qh-trong-nuoc', function () {
        return view('pages.hop-tac-phat-trien-qh-trong-nuoc');
    })->name('qh-trong-nuoc');

    Route::get('ht-quoc-te', function () {
        return view('pages.hop-tac-phat-trien-ht-quoc-te');
    })->name('ht-quoc-te');

    Route::get('ht-trong-nuoc', function () {
        return view('pages.hop-tac-phat-trien-ht-trong-nuoc');
    })->name('ht-trong-nuoc');
});


// TIN TỨC
// Route::get('/tin-tuc', function () {
//     return view('pages.tin-tuc');
// });
// Route::get('/tin-tuc/tin-tuc-chi-tiet', function () {
//     return view('pages.tin-tuc-chi-tiet');
// });

Route::prefix('tin-tuc')->group(function(){

    Route::get('/', function () {
        return view('pages.tin-tuc');
    })->name('tin-tuc');

    Route::get('chi-tiet', function () {
        return view('pages.tin-tuc-chi-tiet');
    })->name('chi-tiet');

});

// VĂN BẢN CHẾ ĐỘ
Route::get('/van-ban-che-do', function () {
    return view('pages.van-ban-che-do');
})->name('van-ban-che-do');


// BÁO CÁO THƯỜNG NIÊN
Route::get('/bao-cao-thuong-nien', function () {
    return view('pages/bao-cao-thuong-nien');
})->name('bao-cao-thuong-nien');


// THƯ VIỆN
 Route::get('thu-vien',function(){
    return view('pages/thu-vien');
 })->name('thu-vien');

 Route::get('video-chitiet',function(){
    return view('pages/video-chitiet');
 })->name('video-chitiet');

//Hoi-dap
Route::get('/hoi-dap', function () {
    return view('pages/hoi-dap');
})->name('hoi-dap');

