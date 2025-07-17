<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'company' => 'Acme Corp',
                'title' => 'Fullstack Developer',
                'location' => 'Remote',
                'type' => 'Part-time',
                'details' => 'As a Fullstack Developer at Acme Corporation, you will build and maintain modern web applications using both frontend and backend technologies. You will collaborate closely with designers and engineers to deliver seamless user experiences and scalable, maintainable systems.'
            ],
            [
                'company' => 'ByteNest',
                'title' => 'Backend Developer',
                'location' => 'Hybrid',
                'type' => 'Full-time',
                'details' => 'Join ByteNest as a Backend Developer to design APIs, manage databases, and build secure server-side logic for scalable web applications.'
            ],
            [
                'company' => 'DevSphere',
                'title' => 'Junior Laravel Developer',
                'location' => 'Hybrid',
                'type' => 'Full-time',
                'details' => 'DevSphere is looking for a Junior Laravel Developer eager to grow. You’ll support ongoing Laravel projects, write clean code, and learn from senior team members.'
            ],
            [
                'company' => 'CodeCrafters',
                'title' => 'Full Stack Developer',
                'location' => 'In-Office',
                'type' => 'Contract',
                'details' => 'As a Full Stack Developer at CodeCrafters, you’ll work on end-to-end features across frontend and backend, contributing to client projects on a contract basis.'
            ],
            [
                'company' => 'DesignLoop',
                'title' => 'UI/UX Designer',
                'location' => 'Remote',
                'type' => 'Freelance',
                'details' => 'DesignLoop is hiring a freelance UI/UX Designer to craft user-friendly interfaces, create design systems, and improve digital experiences for clients.'
            ],
            [
                'company' => 'DataNest',
                'title' => 'Data Analyst',
                'location' => 'In-Office',
                'type' => 'Full-time',
                'details' => 'At DataNest, you’ll analyze data sets, create dashboards, and help make data-driven decisions as part of the business intelligence team.'
            ],
            [
                'company' => 'ScaleUp Labs',
                'title' => 'Product Manager',
                'location' => 'Hybrid',
                'type' => 'Full-time',
                'details' => 'ScaleUp Labs is looking for a Product Manager to define product vision, manage roadmaps, and coordinate across teams to bring new features to life.'
            ],
            [
                'company' => 'PixelForge',
                'title' => 'Graphic Designer',
                'location' => 'Remote',
                'type' => 'Part-time',
                'details' => 'PixelForge needs a creative Graphic Designer to work part-time on branding, marketing assets, and visual content for digital platforms.'
            ],
            [
                'company' => 'CloudSpark',
                'title' => 'DevOps Engineer',
                'location' => 'Remote',
                'type' => 'Full-time',
                'details' => 'CloudSpark is hiring a DevOps Engineer to automate deployments, maintain CI/CD pipelines, and ensure high system reliability in a cloud-first environment.'
            ],
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
