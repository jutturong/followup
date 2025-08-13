<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menusCompo1 = $this->getMenusCompo1();
        $projectmanage = $this->getMenusProjectManage();
        return view('home', compact('menusCompo1', 'projectmanage'));
        return view('home', ['menusCompo1' => $menusCompo1, 'projectmanage' => $projectmanage]);
    }

    // ฟังก์ชันสำหรับสร้างเมนู Strategic Planning Group
    private function getMenusCompo1()
    {
        return [
            'group' => 'Strategic Planning Group (กลุ่มแผนงานยุทธศาสตร์)',
            'iconGroup' => 'bi bi-database-fill-gear fs-2',
            'menus' => [
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
            ]
        ];
    }
    private function getMenusProjectManage()
    {
        return [
            'group' => 'ผู้รับผิดชอบโครงการ (Project Manager)',
            'iconGroup' => 'bi bi-person-plus-fill fs-2',
            'menus' => [
                [
                    'title' => 'เพิ่มข้อมูลโคร',
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
            ]
        ];
    }
}
