<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FingerDevicesControlller;
//Admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

//Users
use App\Http\Controllers\ProgramHeadController;
use App\Http\Controllers\SecretaryController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\StudentController;

//Program Head

use App\Http\Controllers\PHAnnouncementController;
use App\Http\Controllers\PHNotificationController;
use App\Http\Controllers\PHCoursesController;








Route::group(['middleware' => ['guest']], function () {
    

   


    Route::get('/user_login', [LoginController::class, 'index'])->name('login.index');

    Route::post('/user_login', [LoginController::class, 'perform'])->name('login.perform');
    
    
    Route::get('attended/{user_id}', '\App\Http\Controllers\AttendanceController@attended' )->name('attended');
    
    Route::get('attended-before/{user_id}', '\App\Http\Controllers\AttendanceController@attendedBefore' )->name('attendedBefore');
    
    Auth::routes(['register' => false, 'reset' => false]);


});



//For Admin
Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');  


    Route::get('/logout', [LogoutController::class, 'logoutUser'])->name('logoutUser.perform');


    
    // //Admin
    Route::get('/Admin', [AdminController::class, 'index'])->name('admin.index');
    // //Program Head
    Route::get('/Program_Head', [ProgramHeadController::class, 'index'])->name('programhead.index');
    // //Secretary 
    Route::get('/Secretary', [SecretaryController::class, 'index'])->name('secretary.index');
    // //Faculty 
    Route::get('/Faculty', [FacultyController::class, 'index'])->name('faculty.index');
    // //HR 
    Route::get('/HR', [HRController::class, 'index'])->name('hr.index');
    // //Students 
    Route::get('/Students', [StudentController::class, 'index'])->name('student.index');



    //Program Head

    Route::get('Program_Head/Announcement', [PHAnnouncementController::class, 'announcement'])->name('announcement.show');
    Route::get('Program_Head/Notification', [PHNotificationController::class, 'notification_blade'])->name('notification_blade.show');
    //Program Head Courses
    Route::get('Program_Head/Couses/BSA', [PHCoursesController::class, 'bsa_course'])->name('bsa_course.show');
    Route::get('Program_Head/Couses/BSE', [PHCoursesController::class, 'bse_course'])->name('bse_course.show');
    Route::get('Program_Head/Couses/BSECE', [PHCoursesController::class, 'bsece_course'])->name('bsece_course.show');
    Route::get('Program_Head/Couses/BSIT', [PHCoursesController::class, 'bsit_course'])->name('bsit_course.show');
    Route::get('Program_Head/Couses/BSIE', [PHCoursesController::class, 'bsie_course'])->name('bsie_course.show');


    //Add Employee
    Route::post('/employees/add_employee', [EmployeeController::class, 'store'])->name('store.perform');


    Route::resource('/employees', '\App\Http\Controllers\EmployeeController');
    
    Route::get('/attendance', '\App\Http\Controllers\AttendanceController@index')->name('attendance');

    Route::get('/latetime', '\App\Http\Controllers\AttendanceController@indexLatetime')->name('indexLatetime');
    
    Route::get('/leave', '\App\Http\Controllers\LeaveController@index')->name('leave');
    
    Route::get('/overtime', '\App\Http\Controllers\LeaveController@indexOvertime')->name('indexOvertime');

    Route::get('/admin', '\App\Http\Controllers\AdminController@index')->name('admin');

    Route::resource('/schedule', '\App\Http\Controllers\ScheduleController');

    Route::get('/check', '\App\Http\Controllers\CheckController@index')->name('check');
    
    Route::get('/sheet-report', '\App\Http\Controllers\CheckController@sheetReport')->name('sheet-report');
    
    Route::post('check-store','\App\Http\Controllers\CheckController@CheckStore')->name('check_store');
    
    // Fingerprint Devices
    Route::resource('/finger_device', '\App\Http\Controllers\BiometricDeviceController');

    Route::delete('finger_device/destroy', '\App\Http\Controllers\BiometricDeviceController@massDestroy')->name('finger_device.massDestroy');
    
    Route::get('finger_device/{fingerDevice}/employees/add', '\App\Http\Controllers\BiometricDeviceController@addEmployee')->name('finger_device.add.employee');
    
    Route::get('finger_device/{fingerDevice}/get/attendance', '\App\Http\Controllers\BiometricDeviceController@getAttendance')->name('finger_device.get.attendance');
    
    // Temp Clear Attendance route
    Route::get('finger_device/clear/attendance', function () {
        $midnight = \Carbon\Carbon::createFromTime(23, 50, 00);
        $diff = now()->diffInMinutes($midnight);
        dispatch(new ClearAttendanceJob())->delay(now()->addMinutes($diff));
        toast("Attendance Clearance Queue will run in 11:50 P.M}!", "success");

        return back();
    })->name('finger_device.clear.attendance');
    

});




Route::group(['middleware' => ['auth']], function () {

    // Route::get('/home', 'HomeController@index')->name('home');



    

});

// Route::get('/attendance/assign', function () {
//     return view('attendance_leave_login');
// })->name('attendance.login');

// Route::post('/attendance/assign', '\App\Http\Controllers\AttendanceController@assign')->name('attendance.assign');


// Route::get('/leave/assign', function () {
//     return view('attendance_leave_login');
// })->name('leave.login');

// Route::post('/leave/assign', '\App\Http\Controllers\LeaveController@assign')->name('leave.assign');


// Route::get('{any}', 'App\http\controllers\VeltrixController@index');