<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create(['title' => 'angkatan', 'content' => '0']);
        Information::create(['title' => 'anggota', 'content' => '0']);
        Information::create([
            'title' => 'tentang',
            'content' => '<p>&nbsp;</p><p><span style="font-size:18px;"><strong>SALAM LESTARI!</strong></span></p><p><span style="color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:18px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Mapala Plankthos adalah Organisasi Mahasiswa Pecinta Alam yang berada dibawah naungan Fakultas Perikanan dan Ilmu Kelautan Universitas Mulawarman, Mapala Plankthos itu sendiri bergerak dibagian ekosistem pesisir pantai terutama dibidang Mangrove, Lamun dan Terumbu Karang.</span></span></p><p><span style="color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:18px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Didirikan pada <strong>11 April 2005</strong> dan beralamat di </span></span><span style="font-size:18px;"><strong>Jl. Gunung Tabur, no.1, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur</strong>.</span></p>',
        ]);
        Information::create(['title' => 'struktur', 'content' => '']);

        Information::create([
            'title' => 'visi',
            'content' => '<p style="text-align:center;"><span style="background-color:rgb(255,255,255);color:rgb(51,51,51);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Mempunyai visi terwujudnya mahasiswa Fakultas Perikanan dan Ilmu Kelautan Universitas Mulawarman yang memiliki nilai lebih dan peduli dalam bidang sumberdaya perairan yang berdimensikan masyarakat dan lingkungan hidup.</span></span></p>'
        ]);
        Information::create([
            'title' => 'misi',
            'content' => '<p style="text-align:center;"><span style="background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Meningkatkan kepedulian terhadap sumberdaya perairan.</span></span></p><p style="text-align:center;"><span style="background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Meningkatkan usaha konservasi keanekaragaman hayati.</span></span></p><p style="text-align:center;"><span style="background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Mendukung usaha pemberdayaan masyarakat dalam rangka pelestarian sumberdaya perairan.</span></span></p><p style="text-align:center;"><span style="background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Mendukung program-program kegiatan Mahasiswa pencinta alam Fakultas Perikanan dan Ilmu Kelautan Universitas Mulawarman.</span></span></p>'
        ]);

        Information::create(['title' => 'twitter', 'content' => 'twitter.com']);
        Information::create(['title' => 'instagram', 'content' => 'instagram.com']);
        Information::create(['title' => 'facebook', 'content' => 'facebook.com']);
        Information::create(['title' => 'youtube', 'content' => 'youtube.com']);

        Information::create(['title' => 'whatsapp', 'content' => '08123456789']);
        Information::create(['title' => 'email', 'content' => 'mapala@gmail.com']);
        Information::create([
            'title' => 'location',
            'content' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.737104681784!2d117.1554565!3d-0.4696629!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f0011314d875e31!2sMapala%20Plankthos!5e0!3m2!1sid!2sid!4v1637215832662!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen=""></iframe>'
        ]);
    }
}
