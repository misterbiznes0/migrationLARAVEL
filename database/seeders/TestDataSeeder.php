<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\QueueTicket;

class TestDataSeeder extends Seeder
{
    public function run(): void
    {
        // Администратор
        User::updateOrCreate(
            ['email' => 'admin@mail.com'],
            [
                'name' => 'Администратор',
                'password' => bcrypt('12345678'),
                'is_admin' => true,
            ]
        );

        // Обычные пользователи
        for ($i = 1; $i <= 20; $i++) {
            User::updateOrCreate(
                ['email' => "user$i@mail.com"],
                [
                    'name' => "Пользователь $i",
                    'password' => bcrypt('12345678'),
                    'is_admin' => false,
                ]
            );
        }

        $services = [
            'Получение паспорта',
            'Замена паспорта',
            'Оформление ВНЖ',
            'Оформление РВП',
            'Продление визы',
            'Регистрация иностранца',
            'Снятие с регистрации',
            'Получение гражданства',
            'Проверка документов',
            'Выдача справки',
            'Временная регистрация',
            'Постоянная регистрация',
            'Замена загранпаспорта',
            'Оформление приглашения',
            'Миграционный учет',
            'Переоформление документов',
            'Консультация',
            'Подтверждение проживания',
            'Восстановление документов',
            'Подача заявления',
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(
                ['name' => $service],
                [
                    'description' => "Описание: $service",
                    'duration' => rand(10, 60),
                ]
            );
        }

        if (Appointment::count() == 0) {
            for ($i = 1; $i <= 20; $i++) {
                Appointment::create([
                    'user_id' => rand(1, 20),
                    'service_id' => rand(1, 20),
                    'appointment_time' => now()->addDays(rand(1, 10))->setTime(rand(9, 17), 0),
                    'status' => 'pending',
                ]);
            }
        }

        if (QueueTicket::count() == 0) {
            for ($i = 1; $i <= 20; $i++) {
                QueueTicket::create([
                    'appointment_id' => $i,
                    'queue_number' => 100 + $i,
                    'status' => 'waiting',
                ]);
            }
        }
    }
}