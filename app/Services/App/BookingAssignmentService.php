<?php

namespace app\Services\App;

use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\BookingIndustry;
use App\Models\Tenant\BookingDepartment;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\UserAddress;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\Company;
use App\Models\Tenant\Payment;
use App\Models\Tenant\BusinessSetup;
use App\Models\Tenant\ServiceSpecialization;
use App\Models\Tenant\BookingCustomizeData;
use App\Models\Tenant\BookingProvider;
use Auth;
use Carbon\Carbon;
use App\Helpers\GlobalFunctions;
use DateTime;
use Log;
use DB;
use Arr;

class BookingAssignmentService
{
    public static function getAvailableProviders($bookingId,$bookingServices){
        dd($bookingServices);
    }


}
