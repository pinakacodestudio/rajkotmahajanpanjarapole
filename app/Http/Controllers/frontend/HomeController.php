<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class HomeController extends Controller
{
    
    public function index()
    {
        $currentDate = date('Y-m-d');
        $data['eventslist']=DB::table('events')->select('date',DB::raw('MONTHNAME(date) AS MONTHNAME'), 'name', 'description')->whereDate('date','>=',$currentDate)->orderBy('date','asc')->limit(5)->get();
        $data['donationlist']=DB::table('donation')->get();
        return view('frontend.home',$data);
    }

    public function about()
    {
        return view('frontend.about');
    }
   
    public function gallery()
    {
        return view('frontend.gallery');
    }
   
    public function policy()
    {
        return view('frontend.policy');
    }
   
    public function contact()
    {
        return view('frontend.contact');
    }
   
    public function donate()
    {
        $data['donationlist']=DB::table('donation')->where('amounttype','0')->get();
        return view('frontend.donate',$data);
    }
   
    public function savecontact( Request $request ){

        // Check if the form is submitted
        if ($request->has('submit')) {
            // Get form data
            $name = $request->input('form_name');
            $phone = $request->input('form_phone');
            $email = $request->input('form_email');
            $message = $request->input('form_message');

            // try {

                $data = [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'messageval' => $message
                ];

               
                $mail = new PHPMailer(true);
                $emailConfig = DB::table('emailconfig')->where('id',1)->first();
                try {
                    //Server settings
                    $mail->isSMTP();
                    $mail->Host       = $emailConfig->smtp_host;
                    $mail->SMTPAuth   = true;
                    $mail->Username   = $emailConfig->smtp_username;
                    $mail->Password   = $emailConfig->smtp_password;
                    $mail->SMTPSecure = $emailConfig->smtp_encryption;
                    $mail->Port       = $emailConfig->smtp_port;

                    //Recipients
                    $mail->setFrom($emailConfig->smtp_from_email, $emailConfig->smtp_from_name);
                    $mail->addAddress($emailConfig->recipient_email, $emailConfig->recipient_name);

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = 'New Contact Form Submission';
                    $mail->Body    = view('mail.enquiry', $data)->render();

                    $mail->send();
                    $status = "Message has been sent successfully to the Administrator.";
                    return redirect()->back()->with('status', $status);
                } catch (Exception $e) {
                    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    return redirect()->back()->withErrors(['error' => 'Message could not be sent. Mailer Error: ' . $e]);
                }

                // Mail::send('mail.enquiry', $data, function($message) use ($data) {
                //     $message->to('mubingshaikh@gmail.com', 'Rajkot Mahajan Panjarapole')
                //             ->subject('New Contact Form Submission')
                //             ->from('info@rajkotmahajanpanjarapole.org', 'Rajkot Mahajan Panjarapole');
                // });

                // Mail::send('mail.enquiry', $data, function($message) use ($data) {
                //     $message->to('pinakacodestudio@gmail.com', 'Rajkot Mahajan Panjarapole')
                //             ->subject('New Contact Form Submission')
                //             ->from('info@rajkotmahajanpanjarapole.org', 'Rajkot Mahajan Panjarapole');
                // });

            //     $status = "Message has been sent successfully to the Administrator.";
            //     return redirect()->back()->with('status', $status);
            // } catch (Exception $e) {
            //     return redirect()->back()->withErrors(['error' => 'Message could not be sent. Mailer Error: ' . $e]);
            // }
        } else {
            // Redirect back to the form if accessed directly
            return redirect()->route('index');
        }

    }
}