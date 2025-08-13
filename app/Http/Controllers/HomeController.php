<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menusCompo1 = $this->getMenusCompo1();
        return view('home', compact('menusCompo1'));
        return view('home', ['menusCompo1' => $menusCompo1]);
    }

    // ฟังก์ชันสำหรับสร้างเมนู Strategic Planning Group
    private function getMenusCompo1()
    {
        return [
            [
                'title' => 'เพิ่มข้อมูล',
                'text' => 'จัดการเพิ่มข้อมูลใหม่',
                'icon' => 'bi-folder-plus',
                'color' => 'primary',
                'url' => '#'
            ],
            [
                'title' => 'กำหนดสิทธิ์การใช้งาน',
                'text' => 'จัดการสิทธิ์และบทบาทผู้ใช้งาน',
                'icon' => 'bi-gear',
                'color' => 'secondary',
                'url' => '#'
            ],
            [
                'title' => 'ตรวจสอบสถานะ Timeline',
                'text' => 'ติดตามความคืบหน้าของโครงการ',
                'icon' => 'bi-binoculars',
                'color' => 'secondary',
                'url' => '#'
            ],
            [
                'title' => 'ออกรายงาน (Reports)',
                'text' => 'สร้างรายงานสรุปข้อมูล',
                'icon' => 'bi-bar-chart-line',
                'color' => 'secondary',
                'url' => '#'
            ]
        ];
    }
}