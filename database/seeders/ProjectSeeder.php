<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'E-commerce Platform',
                'slug' => 'e-commerce-platform',
                'description' => 'A comprehensive e-commerce solution with inventory management and payment gateway integration.',
                'content' => '<p>This e-commerce platform was built to provide a seamless shopping experience for customers while offering robust inventory management for the business.</p>
                              <p>Key features include:</p>
                              <ul>
                                <li>User-friendly product browsing and filtering</li>
                                <li>Secure payment processing with multiple gateways</li>
                                <li>Inventory management system</li>
                                <li>Order tracking and notifications</li>
                                <li>Analytics and reporting dashboard</li>
                              </ul>
                              <p>The platform has helped the client increase online sales by 45% within the first three months of launch.</p>',
                'category' => 'E-commerce',
                'client_name' => 'Fashion Hub',
                'completion_date' => '2023-05-15',
                'technologies' => 'Laravel, Vue.js, MySQL, Stripe, AWS',
                'website_url' => 'https://example.com/fashion-hub',
                'featured' => true,
                'active' => true,
                'order' => 1
            ],
            [
                'title' => 'Hospital Management System',
                'slug' => 'hospital-management-system',
                'description' => 'A comprehensive hospital management system with appointment scheduling, patient records, and billing.',
                'content' => '<p>This hospital management system was developed to streamline operations for a multi-specialty hospital.</p>
                              <p>The system includes:</p>
                              <ul>
                                <li>Appointment scheduling and management</li>
                                <li>Electronic health records</li>
                                <li>Pharmacy management</li>
                                <li>Laboratory information system</li>
                                <li>Billing and insurance processing</li>
                              </ul>
                              <p>The implementation has reduced administrative workload by 30% and improved patient satisfaction scores.</p>',
                'category' => 'Healthcare',
                'client_name' => 'City General Hospital',
                'completion_date' => '2023-08-20',
                'technologies' => 'PHP, Laravel, MySQL, React, Docker',
                'website_url' => 'https://example.com/city-hospital',
                'featured' => false,
                'active' => true,
                'order' => 2
            ],
            [
                'title' => 'Real Estate Marketplace',
                'slug' => 'real-estate-marketplace',
                'description' => 'A modern real estate platform connecting buyers, sellers, and agents with advanced property search.',
                'content' => '<p>This real estate marketplace was designed to revolutionize how properties are bought and sold.</p>
                              <p>Features include:</p>
                              <ul>
                                <li>Advanced property search with multiple filters</li>
                                <li>Interactive maps and neighborhood information</li>
                                <li>Virtual tours and 3D property visualization</li>
                                <li>Messaging system between buyers and agents</li>
                                <li>Mortgage calculator and financing resources</li>
                              </ul>
                              <p>The platform has helped streamline the property search process and reduced the average time to sale by 35%.</p>',
                'category' => 'Real Estate',
                'client_name' => 'PropertyConnect',
                'completion_date' => '2023-02-10',
                'technologies' => 'React, Node.js, MongoDB, Google Maps API',
                'website_url' => 'https://example.com/property-connect',
                'featured' => true,
                'active' => true,
                'order' => 3
            ],
            [
                'title' => 'Online Learning Platform',
                'slug' => 'online-learning-platform',
                'description' => 'An interactive learning management system with live classes, assessments, and progress tracking.',
                'content' => '<p>This online learning platform was created to deliver high-quality education to students globally.</p>
                              <p>Key components include:</p>
                              <ul>
                                <li>Course creation and management tools</li>
                                <li>Live virtual classroom with video conferencing</li>
                                <li>Automated assessments and grading</li>
                                <li>Progress tracking and analytics</li>
                                <li>Mobile-friendly interface for learning on the go</li>
                              </ul>
                              <p>The platform has enabled the client to reach 150% more students while maintaining high satisfaction ratings.</p>',
                'category' => 'Education',
                'client_name' => 'SkillBoost Academy',
                'completion_date' => '2023-09-05',
                'technologies' => 'Laravel, Vue.js, WebRTC, AWS',
                'website_url' => 'https://example.com/skillboost',
                'featured' => false,
                'active' => true,
                'order' => 4
            ],
            [
                'title' => 'Game Zone Management System',
                'slug' => 'game-zone-management',
                'description' => 'A comprehensive system to manage game zones with ticketing, game tracking, and reporting.',
                'content' => '<p>This game zone management system was developed to streamline operations for entertainment centers.</p>
                              <p>The system includes:</p>
                              <ul>
                                <li>Digital ticketing and access control</li>
                                <li>Game machine monitoring and management</li>
                                <li>Customer loyalty program</li>
                                <li>Real-time analytics and reporting</li>
                                <li>Staff scheduling and management</li>
                              </ul>
                              <p>Implementation of this system has increased operational efficiency by 40% and improved customer retention.</p>',
                'category' => 'Entertainment',
                'client_name' => 'FunZone Entertainment',
                'completion_date' => '2023-11-12',
                'technologies' => 'PHP, Laravel, MySQL, React Native, IoT',
                'website_url' => 'https://example.com/funzone',
                'featured' => true,
                'active' => true,
                'order' => 5
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}