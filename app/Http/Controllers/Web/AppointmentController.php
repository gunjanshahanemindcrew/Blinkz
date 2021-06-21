<?php

namespace App\Http\Controllers\Web;

use App\CPU\Helpers;
use App\CPU\OrderManager;
use App\CPU\ProductManager;
use App\Http\Controllers\Controller;
use App\Mail\AppointmentBookedPatient;
use App\Mail\AppointmentBookedDoctor;
use App\Mail\CampInquiery;
use App\Model\Appointments;
use App\Model\Brand;
use App\Model\BusinessSetting;
use App\Model\Category;
use App\Model\DealOfTheDay;
use App\Model\FlashDeal;
use App\Model\FlashDealProduct;
use App\Model\HelpTopic;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Model\Review;
use App\Model\Shop;
use App\Model\Wishlist;
use App\Model\CampInquiries;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;

class AppointmentController extends Controller
{
    public function slot_availability()
    {
		$appointments = Appointments::get();
		$appointmentAsString = array();
		foreach($appointments as $appointment) {
			$appointmentAsString[] = $appointment->slot_date." ".$appointment->slot_time;
		}
        return view('web-views.slot_availability', ['appointments'=>$appointmentAsString]);
    }

    public function slot_booking(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        return view('web-views.slot_booking', ['data' => $data]);
    }
	
	public function thank_you(Request $request)
    {
        $data = $request->all();
        return view('web-views.thank_you', ['data' => $data]);
    }

    public function slot_booked(Request $request)
    {
        $data = $request->all();
        if (!isset($data['razorpay_payment_id'])) {
            Toastr::error('Unable to book appointment, Please try again.');
            return redirect()->route('home');
        }

        $appointment = new Appointments;
        $appointment->slot_date = isset($data['slot_date']) ? $data['slot_date'] : '';
        $appointment->slot_time = isset($data['slot_time']) ? $data['slot_time'] : '';
        $appointment->for_who = isset($data['for_who']) ? $data['for_who'] : '';
        $appointment->is_first_visit = isset($data['is_first_visit']) ? $data['is_first_visit'] : '';
        $appointment->first_name = isset($data['first_name']) ? $data['first_name'] : '';
        $appointment->last_name = isset($data['last_name']) ? $data['last_name'] : '';
        $appointment->email = isset($data['email']) ? $data['email'] : '';
        $appointment->mobile = isset($data['mobile']) ? $data['mobile'] : '';
        $appointment->purpose_of_visit = isset($data['purpose_of_visit']) ? $data['purpose_of_visit'] : '';
        $appointment->razorpay_payment_id = isset($data['razorpay_payment_id']) ? $data['razorpay_payment_id'] : '';

        if ($appointment->save()) {
            $email = 'blinkzeyecare@gmail.com';
            try {
                Mail::to($appointment->email)->send(new AppointmentBookedPatient($appointment));
                Mail::to($email)->send(new AppointmentBookedDoctor($appointment));
            } catch (\Exception $e) {
                dd($e);
            }
            Toastr::success('Appointment has been booked successfully.');
			return redirect()->route('appointment.thank-you');
        } else {
            Toastr::error('Unable to book appointment, Please try again.');
        }
        return redirect()->route('home');
    }

    /*private function sendMessage($message, $recipients)
    {
        $account_sid = "AC7e93608d837600da8734f575415ccf92";
        $auth_token = "976f2583d24d168872e3865d9b1213aa";
        $twilio_number = "+919033661920";
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($recipients, ['from' => $twilio_number, 'body' => $message]);
    }*/
}
