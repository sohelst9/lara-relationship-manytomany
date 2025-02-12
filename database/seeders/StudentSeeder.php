<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '1234567890',
                'address' => '123 Main St',
                'department' => 'Web Design',
            ],
            [
                'name' => 'Sarah Smith',
                'email' => 'sarah@example.com',
                'phone' => '2345678901',
                'address' => '456 Oak Ave',
                'department' => 'Graphic Design',
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'phone' => '3456789012',
                'address' => '789 Pine Rd',
                'department' => 'Web Development',
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emily@example.com',
                'phone' => '4567890123',
                'address' => '321 Elm St',
                'department' => 'UI/UX Design',
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david@example.com',
                'phone' => '5678901234',
                'address' => '654 Maple Dr',
                'department' => 'Digital Marketing',
            ],
            [
                'name' => 'Lisa Anderson',
                'email' => 'lisa@example.com',
                'phone' => '6789012345',
                'address' => '987 Cedar Ln',
                'department' => 'Web Design',
            ],
            [
                'name' => 'James Taylor',
                'email' => 'james@example.com',
                'phone' => '7890123456',
                'address' => '147 Birch Rd',
                'department' => 'Graphic Design',
            ],
            [
                'name' => 'Emma Davis',
                'email' => 'emma@example.com',
                'phone' => '8901234567',
                'address' => '258 Willow Ave',
                'department' => 'Web Development',
            ],
            [
                'name' => 'Robert Martin',
                'email' => 'robert@example.com',
                'phone' => '9012345678',
                'address' => '369 Pine St',
                'department' => 'UI/UX Design',
            ],
            [
                'name' => 'Sophia Clark',
                'email' => 'sophia@example.com',
                'phone' => '0123456789',
                'address' => '741 Oak Rd',
                'department' => 'Digital Marketing',
            ]
        ];

        //-- store student table -
        foreach($students as $student){
            Student::create($student);
        }
    }
}
