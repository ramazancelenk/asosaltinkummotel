<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Mail;
use Validator;
use Illuminate\Bus\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\DB;

class FrontPageController extends Controller
{
    public function postCustomerPhone (Request $request)
    {
        $phone = $request->email;
        if (! empty($phone) && $phone != '(286) 747-0504') {
          Mail::send('emails.phone', ['phone' => $phone], function ($m) {
            $m->bcc('gokhanefendi@gmail.com', 'Gökhan Efendi');
            $m->to('basriokur@hotmail.com', 'Basri Okur');
            $m->subject('Site Üzerinden Bir Telefon Numarası Geldi');
          });
          return redirect('/')->with('success', 'Sizinle en kısa sürede irtibat kuracağız. Teşekkür eder, iyi günler dileriz.');
        } else {
          return redirect('/')->with('error', 'Lütfen telefon numaranızı kontrol edin ve tekrar deneyin.');
        }
    }

    public function postRezervation (Request $request)
    {
        if (! empty($request->phone) && ! empty($request->name)) {
            Mail::send('emails.rezervation', ['data' => $request->all()], function ($m) {
                $m->bcc('gokhanefendi@gmail.com', 'Gökhan Efendi');
                $m->to('basriokur@hotmail.com', 'Basri Okur');
                $m->subject('Site Üzerinden Bir Rezervasyon Geldi');
            });
            return redirect('/')->with('success', 'Sizinle en kısa sürede irtibat kuracağız. Teşekkür eder, iyi günler dileriz.');
        } else {
            return redirect('/')->with('error', 'Lütfen telefon numaranızı kontrol edin ve tekrar deneyin.');
        }
    }
}
