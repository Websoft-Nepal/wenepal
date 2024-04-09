<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            'title' => 'About Us',
            "photo"=> "seed.jpg",
            "details"=> "<p>The Wellness and Ecoguard Nepal is a reputable non-profit organization dedicated to enhancing the lives of residents in remote regions of Nepal. Their focus areas include delivering essential healthcare services and implementing impactful environmental conservation programs. These initiatives aim to improve overall health outcomes and promote the sustainable stewardship of the environment within these underserved communities. Objectives of Wellness and EcoGuard Nepal (we Nepal ) We Nepal is a non profit organization working on healthcare services and environmental conservation, here are some possible objectives they might have:</p>",
            "subTitle1"=> "HealthCare Services",
            "subTitle2"=> "Environmental Conservation",
            "subTitle3"=> "Objective",
            "subDetails1"=> "<p>Improve access to quality healthcare: This could involve building or supporting clinics, providing mobile healthcare services, health camp, Schooling camp, or health awareness program. Promote preventive healthcare: This could involve educating communities about healthy lifestyles, providing immunizations, or screening for diseases. Address specific health needs: This could focus on maternal and child health, infectious diseases, chronic diseases, dental or mental health. Empower communities to take charge of their health: This could involve training community health workers, promoting health literacy, or advocating for better health policies.</p>",
            "subDetails2"=> "<p>Protect natural resources: This could involve planting trees, conserving forests, protecting endangered species, or reducing pollution. Promote sustainable practices: This could involve educating communities about sustainable agriculture, waste management, recycle, reuse, reduce, or energy conservation. Combat climate change: this could involve reducing greenhouse gas emissions, promoting renewable energy, or helping communities adapt to the impacts of climate change. Raise awareness about environmental issues: This could involve educating the public, advocating for environmental policies, or supporting environmental activism.</p>",
            "subDetails3"=> "<p>Increase fundraising and donations: This is essential to support their programs and services. Build partnerships with other organizations: This can help them expand their reach and impact. Promote volunteerism and community engagement: This can help them achieve their goals and build support for their work. Advocate for policies that support their mission: This could involve lobbying government officials or educating the public. Operation seminar or health training</p>",
            "created_at"=> "2024-04-04T11:09:47.000000Z",
            "updated_at"=> "2024-04-04T11:09:47.000000Z",
        ];
        \App\Models\About::create($data);
    }
}
