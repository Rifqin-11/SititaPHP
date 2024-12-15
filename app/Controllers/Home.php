<?php

namespace App\Controllers;

use App\Models\BiodataModel;

class Home extends BaseController
{
    protected $biodataModel;

    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
    }

    public function index()
    {
        // Ambil data biodata dari model
        $data['biodata'] = $this->biodataModel->getBiodata();

        // Ambil bulan dan tahun dari query string atau gunakan bulan dan tahun saat ini
        $month = $this->request->getGet('month') ?? date('m');
        $year = $this->request->getGet('year') ?? date('Y');

        // Pastikan bulan dan tahun valid
        $month = max(1, min(12, (int)$month));
        $year = max(1900, (int)$year);

        // Data untuk kalender
        $data['calendar'] = $this->generateCalendar($year, $month);
        $data['currentMonth'] = $month;
        $data['currentYear'] = $year;

        // Kirimkan data ke view
        return view('pages/home', $data);
    }

    private function generateCalendar($year, $month)
    {
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year); // Total hari dalam bulan
        $firstDayOfWeek = date('w', strtotime("$year-$month-01")); // Hari pertama bulan (0 = Minggu, 6 = Sabtu)

        $calendar = [];
        $week = [];

        // Isi hari kosong sebelum hari pertama bulan
        for ($i = 0; $i < $firstDayOfWeek; $i++) {
            $week[] = null;
        }

        // Isi hari dalam bulan
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $week[] = $day;

            // Jika sudah satu minggu, tambahkan ke kalender
            if (count($week) === 7) {
                $calendar[] = $week;
                $week = [];
            }
        }

        // Tambahkan hari kosong setelah akhir bulan
        if (count($week) > 0) {
            while (count($week) < 7) {
                $week[] = null;
            }
            $calendar[] = $week;
        }

        return $calendar;
    }
}
