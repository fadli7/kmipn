<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Validator;
use App\User;
use DateTime;
use Auth;
use DB;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetLinkEmail(){
        $validator = Validator::make(request()->all(), [
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('message', array(
                'title' => 'Oops!',
                'type' => 'danger',
                'msg' => 'Validation failed.',
            ));
        }

        $check = User::where('email', request('email'))->first();

        if ($check) {

            $reset_code = str_random(5);

            DB::table('password_resets')->where('email', $check->email)->delete();
            DB::table('password_resets')->insert([
                'email' => $check->email,
                'token' => $reset_code,
                'created_at' => new DateTime
            ]);

            $mail = new PHPMailer(true);
            //Server settings                             // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'iervanfirdiansyah1998@gmail.com';                 // SMTP username
            $mail->Password = 'Firdiansyahiervan1998';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('admin@kmipn.com', 'KMIPN');
            $mail->addAddress(request('email'));
            
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'KMIPN - Reset Code';
            $mail->Body    = url('/password/reset/'.$reset_code);

            $mail->send();

            return redirect()->to('/')->with('message', array(
                'title' => 'Yay!',
                'type' => 'success',
                'msg' => 'Reset code has been send, please check your email.',
            ));
        }else{
            return redirect()->back()->with('message', array(
                'title' => 'Oops!',
                'type' => 'danger',
                'msg' => 'That email address doesn\'t match any user accounts.',
            ));
        }
    }
}
