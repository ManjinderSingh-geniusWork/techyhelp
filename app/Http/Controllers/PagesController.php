<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use PDF;

use App\Models\AuPropertyCertificate;

class PagesController extends Controller {
    //

    function index ( Request $request ) {

        $data = $request->all() ;      
        $logo = 'images/sukhi/logo.png';
        $sign = 'images/sukhi/sukh_sign_crop.png';
        if(!empty($data['address']) && !empty($data['builder']) ){
            $certificate = AuPropertyCertificate::create(['address' => $data['address'],'builder' => $data['builder'],'product_used'=>$data['product_used']]);
            $data['id'] = $certificate->id;

            $logoData = Storage::disk('public')->get($logo);
            $signData = Storage::disk('public')->get($sign);
            $type = pathinfo($logo, PATHINFO_EXTENSION);
            $data['logo'] = 'data:image/' . $type . ';base64,' . base64_encode($logoData);

            $type = pathinfo($sign, PATHINFO_EXTENSION);
            $data['sign'] = 'data:image/' . $type . ';base64,' . base64_encode($signData);      

            $type = pathinfo($logo, PATHINFO_EXTENSION);
            $data['logo'] = 'data:image/' . $type . ';base64,' . base64_encode($logoData);
            $data['sign'] = 'data:image/' . $type . ';base64,' . base64_encode($signData);

            // return view( 'pages.certificate_pdf',  $data );
            $pdf = PDF::loadView('pages.certificate_pdf', $data) ->setPaper([5,5,800,1300]);
            // return $pdf->render();

            // Output the generated PDF to Browser
            return $pdf->stream();
        }
        // dd( $request->all() );
        $data = [];
        $logo = 'images/sukhi/logo.png';
        $logoData = Storage::disk('public')->get($logo);
        $signData = Storage::disk('public')->get($sign);
        $type = pathinfo($logo, PATHINFO_EXTENSION);
        $data['logo'] = 'data:image/' . $type . ';base64,' . base64_encode($logoData);

        return view( 'pages.certificate',  $data );
    }

    function download_pdf($id) {

        
        try {
            
            $certificate = AuPropertyCertificate::find($id);
            $data = $certificate->toArray();
            //code...
            $logo = 'images/sukhi/logo.png';
            $sign = 'images/sukhi/sukh_sign_crop.png';
            $logoData = Storage::disk('public')->get($logo);
            $signData = Storage::disk('public')->get($sign);


            $type = pathinfo($logo, PATHINFO_EXTENSION);
            $data['logo'] = 'data:image/' . $type . ';base64,' . base64_encode($logoData);
            $data['sign'] = 'data:image/' . $type . ';base64,' . base64_encode($signData);

            // dd(storage_path('fonts\OpenSans-VariableFont_wdth,wght.ttf') );
            // return view( 'pages.certificate_pdf',  $data );

            // dd($data);
            $pdf = PDF::loadView('pages.certificate_pdf', $data) ->setPaper([5,5,800,1300]);
            // return $pdf->render();

            // Output the generated PDF to Browser
            return $pdf->stream();
            // // return $pdf->download('itsolutionstuff.pdf');
            // return $pdf->download('itsolutionstuff.pdf');
        } catch (\Throwable $th) {
            throw $th;
        }
        // return view( 'pages.certificate',  $data );
    }
}
