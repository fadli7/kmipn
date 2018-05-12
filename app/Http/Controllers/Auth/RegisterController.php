<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Lomba;
use App\Tim;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return $user = User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'jurusan' => $data['jurusan'],
            'no_mahasiswa' => $data['no_mahasiswa'],
            'no_telp' => $data['no_telp'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'alamat' => $data['alamat'],
            'role' => 'Ketua'
        ]);
    }

    public function register(Request $request) {
        $input = $request->except('kategori_id','nama_tim','asal_pt');
        $validator = $this->validator($input);
        $userMail = User::where('email',$input['email'])->count();
  
        if($userMail > 0){
          return redirect()->back()->withInput()->with('message', array(
            'title' => 'Oops!',
            'type' => 'danger',
            'msg' => 'Your email has been registered',
          ));
        }else{
          if ($validator->passes()){
            $user = $this->create($input)->toArray();
  
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
            $mail->setFrom('admin@kmipn.com', 'KMIPN-POLITEKNIK');
            $mail->addAddress(request('email'), request('fullname'));

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'KMIPN - Success Registered';
            $mail->Body    = 'Terimakasih telah mendaftar.';

            $mail->send();

            $userMail2 = User::where('email',$input['email'])->first();
            $input2 = $request->only('kategori_id','nama_tim','asal_pt');
            $tim = Lomba::where('id',$input2['kategori_id'])->first();

            if($tim->kategori == "Hackathon"){
                $datatim = Tim::create([
                    'users_id' => $userMail2->id,
                    'kategori_id' => $input2['kategori_id'],
                    'asal_pt' => $input2['asal_pt'],
                    'nama_tim' => $input2['nama_tim'],
                    'total_anggota' => 4
                ]);
                User::where('id',$userMail2->id)->update(array(
                    'tim_id' => $datatim->id
                ));
            }else{
                $datatim = Tim::create([
                    'users_id' => $userMail2->id,
                    'kategori_id' => $input2['kategori_id'],
                    'asal_pt' => $input2['asal_pt'],
                    'nama_tim' => $input2['nama_tim'],
                    'total_anggota' => 2
                ]);
                User::where('id',$userMail2->id)->update(array(
                    'tim_id' => $datatim->id
                ));
            }
  
            return redirect()->to('/')->with('message', array(
              'title' => 'Yay!',
              'type' => 'success',
              'msg' => 'Success Registered',
            ));
          }
        }
      }
}
