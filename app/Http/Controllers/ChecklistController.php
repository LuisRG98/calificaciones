<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emb;
use App\File;
use App\User;
use QrCode;
use Storage;
use App\Checklist;
use DB;
use PDF;
use phpseclib\Crypt\RSA as Crypt_RSA;

class ChecklistController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:insp');
    }

    public function index()
    {
        return view('checklists.index',[
            'embs'=>Emb::all()
        ]);

        // return view('checklists.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $i=0;
        $c=0;

        $pntjs= $request->properties;
        $bod= array(1, 1, 1, 1, 1, 2.5, 2.5, 1.25, 1.25, 1.25, 1.25, 2.5, 2.5, 2.5, 2.5, 7.5, 7.5, 1.66, 1.67, 1.67, 5, 5, 5, 2.22, 2.22, 2.22, 2.22, 2.22, 2.22, 2.22, 2.23, 2.23, 5, 7.5, 7.5);
        $bicinave=array(1.67, 1.67, 1.66, 2.5, 2.5, 2.5, 2.5, 3.33, 3.33, 3.34, 2.5, 2.5, 6.66, 6.67, 6.67, 5, 15);//OJO
        $canoa = array(1.25, 1.25, 1.25, 1.25, 2.5, 2.5, 1.66, 1.67, 1.67, 5, 5, 15, 2.5, 2.5, 5, 5, 5, 2.5, 2.5, 2.5, 2.5, 2.5, 2.5, 2.5, 2.5, 5, 15);
        $bamadera=array(0.83, 0.83, 0.83, 0.83, 0.84, 0.84, 0.72, 0.72, 0.72, 0.71, 0.71, 0.71, 0.71, 4.33, 4.34, 4.33, 6.5, 6.5, 1.2, 1.2, 1.2, 1.2, 5, 5, 5, 5, 4.33, 4.34, 4.33, 6.5, 6.5, 4.33, 4.34, 4.33);
        
        $lancha=array(0.83, 0.83, 0.83, 0.83, 0.84, 0.84, 2.5, 2.5, 1, 1, 1, 1, 1, 2.5, 2.5, 2.5, 2.5, 15, 1.67, 1.67, 1.66, 2.22, 2.22, 2.22, 2.22, 2.22, 2.22, 2.22, 2.23, 2.23, 5, 6.5, 6.5, 6.5, 6.5);

        foreach ($pntjs as $pntj)
        {
            $i=$i+1;
            if ($pntj['value']=='SI')
            {
                $c=$c+1;
            }
        }
        $pntj= ($c/$i)*100;

        $c=0;
        $suma=0;
        foreach ($pntjs as $pntj)
        {
            if (request('clase_tipo')=='BOTE/DESLIZADOR')
            {
                if ($pntj['value']=='SI')
                {
                    $suma=$suma+$bod[$c];
                    $c=$c+1;
                }
            }
            if (request('clase_tipo')=='ALISCAFO')
            {
                if ($pntj['value']=='SI')
                {
                    $suma=$suma+$bod[$c];
                    $c=$c+1;
                }
            }

            elseif (request('clase_tipo')=='CANOA')
            {
                if ($pntj['value']=='SI')
                {
                    $suma=$suma+$canoa[$c];
                    $c=$c+1;
                }
            }
            elseif (request('clase_tipo')=='BARCAZA ABIERTA')
            {
                if ($pntj['value']=='SI')
                {
                    $suma=$suma+$bamadera[$c];
                    $c=$c+1;
                }
            }
            elseif (request('clase_tipo')=='LANCHA')
            {
                if ($pntj['value']=='SI')
                {
                    $suma=$suma+$bamadera[$c];
                    $c=$c+1;
                }
            }

        }

        $rsa = new Crypt_RSA();
        $rsa->setPrivateKeyFormat(Crypt_RSA::PRIVATE_FORMAT_PKCS1);
        $rsa->setPublicKeyFormat(Crypt_RSA::PUBLIC_FORMAT_PKCS1);
        define('CRYPT_RSA_EXPONENT', 65537);
        define('CRYPT_RSA_SMALLEST_PRIME', 64);
        extract($rsa->createKey());

        $q= QrCode::format('png')
                    ->size(200)->errorCorrection('H')
                    ->generate(md5($publickey));

        $output_file = '/public/img/img.png';
        Storage::disk('local')->put($output_file, $q);

        $emb = Emb::findOrFail(request('emb_id'));

        if ($pntj>=90)
        {
            $chek=new Checklist;
            $chek->m=request('m');
            $chek->properties=  $request->properties;
            $chek->d=request('d');
            $chek->emb_id=request('emb_id');
            $chek->user_id=request('user_id');
            $chek->clase_tipo=request('clase_tipo');
            $chek->estado='Aprobado';
            $chek->pntj=$suma;
            $chek->save();

            $pdf=PDF::loadView('certs.seguridad',compact('emb'));
            Storage::put('public/'.md5($publickey).'.pdf', $pdf->output());

            $fileModel=new File;
            $fileModel->name= 'CertificadoSeguridad'.time().'.pdf';
            $fileModel->extension= 'pdf';
            $fileModel->emb_id= request('emb_id');
            $fileModel->privatekey = md5($privatekey);
            $fileModel->publickey= md5($publickey);
            $fileModel->save();
            return redirect()->route('embs.index')->with('success', 'Inspección Guardada');

        }
        elseif ($pntj<90 and $pntj>=80)
        {
            $chek=new Checklist;
            $chek->m=request('m');
            $chek->properties=  $request->properties;
            $chek->d=request('d');
            $chek->emb_id=request('emb_id');
            $chek->user_id=request('user_id');
            $chek->clase_tipo=request('clase_tipo');
            $chek->estado='Con Observaciones';
            $chek->pntj=$pntj;
            $chek->save();


            $pdf=PDF::loadView('certs.seguridad',compact('emb'));
            Storage::put('public/'.md5($publickey).'.pdf', $pdf->output());

            $fileModel=new File;
            $fileModel->name= 'CertificadoSeguridad'.time().'.pdf';
            $fileModel->extension= 'pdf';
            $fileModel->emb_id= request('emb_id');
            $fileModel->privatekey = md5($privatekey);
            $fileModel->publickey= md5($publickey);
            $fileModel->save();
            return redirect()->route('embs.index')->with('success', 'Inspección Guardada');
        }
        elseif ($pntj<80)
        {
            $chek=new Checklist;
            $chek->m=request('m');
            $chek->properties=  $request->properties;
            $chek->d=request('d');
            $chek->emb_id=request('emb_id');
            $chek->user_id=request('user_id');
            $chek->clase_tipo=request('clase_tipo');
            $chek->estado='Reprobado';
            $chek->pntj=$pntj;
            $chek->pntj=$pntj;
            $chek->save();
            return redirect()->route('embs.index')->with('info', 'Inspección Guardada');
        }



    }

    public function show($id)
    {
        $files=Checklist::findOrFail($id);
        $i=0;
        foreach ($files->properties as $file)
        {
           $v[$i]= $file['value'];
           $i=$i+1;
        }

        $i=0;
        foreach ($files->m as $file)
        {
           $v2[$i]= $file['value'];
           $i=$i+1;
        }

        $i=0;
        foreach ($files->d as $file)
        {
           $v3[$i]= $file['value'];
           $i=$i+1;
        }

        return view('checklists.show',compact('files','v','v2','v3'));
    }

    public function edit($id)
    {
        $emb = Emb::findOrFail($id);
        return view('checklists._form',compact('emb'));
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function lista($id)
    {
        $c=0;
        $v=null;
        $files = Checklist::select('*')->where('emb_id',$id)->get();
        foreach ($files as $file)
        {
            $vu[$c]=User::findOrFail($file->user_id);
            $c=$c+1;
        }
        $c=0;
        foreach ($vu as $valor) 
        {
            $v[$c]=$valor->rango.': '.$valor->name.' '. $valor->lastname1.' '. $valor->lastname2;
            $c=$c+1;
        }

        if ($v!=null) 
        {
            return view('checklists.vistas.show',compact('files','v'));
        }
        else
        {
            return redirect()->back()->with('info','No se encontraron registros de esta embarcación');
        }

        

    }
}
