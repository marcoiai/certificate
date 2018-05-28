<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CertificateTemperature;

class CertificateTemperatureController extends Controller
{
    public function list(Request $request)
    {
        $certificate_temperatures = CertificateTemperature::orderBy('id', 'asc')->get();

        return view('certificate_temperature/list', ['certificate_temperatures' => $certificate_temperatures]);
    }

    public function create(Request $request)
    {
        $certificate_temperature = new CertificateTemperature;

        return view('certificate_temperature/new', [
            'certificate_temperature' => $certificate_temperature
        ]);
    }

    public function new(Request $request)
    {
        $certificate_temperature = new CertificateTemperature;

        $data = $request->get('certificate_temperature');

        $path = $request->file('image')->store('temperatures');

        $certificate_temperature->image             = $path;
        $certificate_temperature->caption           = $data['caption'];
        $certificate_temperature->temperature       = $data['temperature'];
        $certificate_temperature->certificate_id    = 3;

        $certificate_temperature->save();

        $teste = 'tete';

        return redirect('certificate_temperature/list');
    }

    public function edit(CertificateTemperature $certificate_temperature)
    {
        return view('certificate_temperature/new', [
            'certificate_temperature' => $certificate_temperature
        ]);
    }
}
