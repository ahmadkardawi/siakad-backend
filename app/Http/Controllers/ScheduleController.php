<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::paginate(10);
        return view('pages.schedules.index', compact('schedules'));
    }

    public function generateQrCode(Schedule $schedule)
    {
        return view('pages.schedules.input-qrCode')->with('schedule', $schedule);
    }

    public function generateQrCodeUpdate(Request $request, Schedule $schedule)
    {
        $request->validate([
            'code'=>'required',
        ]);

        $schedule->update([
            'kode_absensi'=>$request->code,
        ]);

        $code = $request->code;

       return view('pages.schedules.show-qrcode', compact('code'))->with('success', 'Code Updated SuccessFully');

        // $schedule = Schedule::where('id', $request->id)->first();
        // if ($schedule) {
        //     $schedule->update([
        //         'code' => $request->code,
        //     ]);
        //     return view('pages.schedules.show-qrcode', compact('schedule'))->with('success', 'Code Updated SuccessFully');
        // }else{
        //     return redirect()->route('pages.schedules.index')->with('error', 'Code Not Found');
        // }
    }
}
