<?php

namespace App\Http\Livewire\Master\Karyawan;

use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Pegawai extends Component
{
    public function viewPegawai()
    {
        $daftar_pegawai = $this->daftarPegawai();
        $data = [
            'daftar_pegawai ' => $daftar_pegawai
        ];
        return view('livewire.master.karyawan.view_pegawai', $data);
    }
    function daftarPegawai()
    {
        return $this->getPegawai('daftar', 'aktif', '', ',', '', '');
    }
    public function getPegawai($is_metode, $s_aktif, $nip, $nm_lengkap, $jabatan, $id_dept)
    {
        $client = new \GuzzleHttp\Client();
        $data = [
            "is_metode" => $is_metode,
            "s_aktif"   => $s_aktif,
            "nip"       => $nip,
            "nm_lengkap" => $nm_lengkap,
            "jabatan"   => $jabatan,
            "id_dept"   => $id_dept,
            "p_limit"   => "10",
            "p_page"    => "1"
        ];

        $response = $client->post(
            config('app.api') . 'champ_dev/hris/pegawai/get_listpegawai',
            [
                'form_params' => $data
            ]
        );
        $data = json_decode($response->getBody()->getContents());
        return $data;
    }
}
